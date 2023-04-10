<?php

namespace App\Http\Controllers;

use App\Esewa;
use App\Models\NonProfitEvent;
use App\Models\ProfitEvent;
use App\Models\Registration;
use App\Models\Ticket;
use Illuminate\Http\Request;

use Cixware\Esewa\Client;
use Cixware\Esewa\Config;

class PagesController extends Controller
{
    public function eventCard(Request $request) {


        $profitEvents = ProfitEvent::filter($request)->paginate(20);
        $nonProfitEvents = NonProfitEvent::filter($request)->paginate(20);
        return view('event-card',compact('profitEvents','nonProfitEvents'));
    }

    public function registerEventPage(NonProfitEvent $event) {
        return view('events.register',compact('event'));
    }

    public function registerEvent($id, Request $request) {

        $nonProfitEvent = NonProfitEvent::find($id);
        $sanitized = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $sanitized['non_profit_event_id'] = $nonProfitEvent->id;

        Registration::create($sanitized);

        return redirect()->to('/event-card')->with('success','Registration Done Successfully');
    }

    //Buy Tickets

    public function buyTicketPage($id) {
        $event = ProfitEvent::find($id);
        return view('profit_events.buyTickets',compact('event'));
    }

    public function buyTicket($id, Request $request) {

        $profitEvent = ProfitEvent::find($id);
        $sanitized = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $sanitized['profit_event_id'] = $profitEvent->id;

        $ticket = Ticket::create($sanitized);
        session()->put('ticket',$ticket);
        $esewa = new Esewa;
        $esewa->pay($ticket->id, $ticket->event->ticket_price);

        // return redirect()->to('/event-card')->with('success','Done Successfully');
    }

    public function ticket(Request $request) 
    {
        $esewa = new Esewa;
        if($esewa->verify($request->refId, $request->oid, $request->amt)) {
            $ticket = Ticket::with('event')->find($request->oid);
            return view('ticket',compact('ticket'));
        } else {
            return 'Something went wrong';
        }
    }
    public function failed() {
        return "Your Ticket Purchase Payment is failed . Please contact concerned authorities";
    }
}