<?php

namespace App\Http\Controllers;

use App\Models\NonProfitEvent;
use Illuminate\Http\Request;

class NonProfitEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = NonProfitEvent::paginate(10);
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.form');
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
            'photo' => 'required',
        ]);

        $profitEvent = NonProfitEvent::create($sanitized);

        $profitEvent->addMedia($request->photo)->toMediaCollection();
        return redirect()->route('events.index')->with('success','Event Added Successfully');
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
        $event = NonProfitEvent::find($id);
        return view('events.form',compact('event'));
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
        $event = NonProfitEvent::find($id);
        $sanitized = $request->validate([
            'event_name' => 'required',
            'event_location' => 'required',
            'description' => 'required',
            'photo' => 'required'
        ]);

        $event->update($sanitized);
        $event->clearMediaCollection();
        $event->addMedia($request->photo)->toMediaCollection();
        return redirect()->route('events.index')->with('success','Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = NonProfitEvent::find($id);
        $event->delete();
        return redirect()->route('events.index')->with('success','Event Deleted Successfully');
    }
}
