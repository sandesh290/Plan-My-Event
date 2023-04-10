<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\NonProfitEventController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfitEventController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UsersController;
use App\Models\NonProfitEvent;
use App\Models\ProfitEvent;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $sliders = [];

    $profitEvents = ProfitEvent::orderBy('id','desc')->limit(3)->get();

    foreach($profitEvents as $evt) {
        array_push($sliders, $evt);
    }

    $nonProfitEvent = NonProfitEvent::orderBy('id','desc')->limit(3)->get();

    foreach($nonProfitEvent as $evt) {
        array_push($sliders, $evt);
    }



    return view('welcome',compact('sliders'));
});

Route::get('ticket-scanner/{ticket}', function(Ticket $ticket){
    return 'Ticket Id:'.$ticket->id. '<br/>'.'Customer-Name:'.$ticket->name.'';
})->name('ticket-scanner');


Route::get('/aboutus', function () {
    return view('aboutus');
});



Route::get('/slider', function () {
    return view('/slider/index');
});


Route::get('/event-card', [PagesController::class, 'eventCard']);

Route::get('/event-card/register/{event}', [PagesController::class, 'registerEventPage'])->middleware('auth');
Route::post('/event-card/register/{event}', [PagesController::class, 'registerEvent']);
Route::get('/event-card/buyTicket/{event}', [PagesController::class, 'buyTicketPage'])->name('ticket')->middleware('auth');
Route::post('/event-card/buyTicket/{event}', [PagesController::class, 'buyTicket']);
Route::get('/ticket', [PagesController::class, 'ticket'])->name('ticket')->middleware('auth');
Route::get('/failed', [PagesController::class, 'failed'])->name('failed');


Route::get('/contact', function () {
    return view('/contact');
});

Route::resource('slider', SliderController::class);
Auth::routes();

Route::group(['middleware'=>['auth','admin']], function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    });
    Route::resource('events', NonProfitEventController::class);
    Route::resource('profit-events', ProfitEventController::class);
    Route::resource('event-registrations',RegistrationController::class);
    Route::resource('tickets',TicketsController::class);
    Route::get('/profile', function(){
        return view('profile');
    });

    Route::patch('/profile', function(){
        auth()->user()->update(request()->all());
        return redirect()->back();
    })->name('update-profile');


    Route::resource('users', UsersController::class);
});
Route::get('/home',function(){
    return view('home');
});