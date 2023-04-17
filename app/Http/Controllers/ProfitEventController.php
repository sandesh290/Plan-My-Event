<?php

namespace App\Http\Controllers;

use App\Models\ProfitEvent;
use Illuminate\Http\Request;

class ProfitEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = ProfitEvent::paginate(20);
        return view('profit_events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profit_events.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanitized = $request->validate([
            'event_name' => 'required',
            'event_location' => 'required',
            'description' => 'required',
            'ticket_price' => 'required',
            'photo' => 'required',
        ]);

        $profit = ProfitEvent::create($sanitized);
        $profit->addMedia($request->photo)->toMediaCollection();
        return redirect()->route('profit-events.index')->with('success','Event Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = ProfitEvent::find($id);
        return view('profit_events.form',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $event = ProfitEvent::find($id);
        $sanitized = $request->validate([
            'event_name' => 'required',
            'event_location' => 'required',
            'description' => 'required',
            'ticket_price' => 'required',
            'photo' => 'nullable',
        ]);
        $event->update($sanitized);

        if($request->has('photo')) {

            $event->clearMediaCollection();
            $event->addMedia($request->photo)->toMediaCollection();
        }
        return redirect()->route('profit-events.index')->with('success','Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profitEvent = ProfitEvent::find($id);
        $profitEvent->delete();
        return redirect()->route('profit-events.index')->with('success','Event Deleted Successfully');
    }
}