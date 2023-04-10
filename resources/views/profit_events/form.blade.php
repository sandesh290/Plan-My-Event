@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Add Event
                </div>
                <div class="card-body">
                    <form action="{{ isset($event) ? route('profit-events.update',$event->id) : route('profit-events.store') }}" method="POST"enctype="multipart/form-data">
                        @csrf
                        @if(isset($event))
                            @method('PATCH')
                        @endif
                        <div class="form-group">
                            <label for="event_name">Event Name</label>
                            <input type="text" name="event_name" class="form-control" placeholder="Event Name" value="{{ isset($event) ? $event->event_name : old('event_name') }}">
                            @if($errors->has('event_name'))
                                <p class="text-danger">{{ $errors->first('event_name') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="event_location">Event Location</label>
                            <input type="text" name="event_location" class="form-control" placeholder="Event Location" value="{{ isset($event) ? $event->event_location : old('event_location') }}">
                            @if($errors->has('event_location'))
                                <p class="text-danger">{{ $errors->first('event_location') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ticket_price">Event Ticket Price</label>
                            <input type="text" name="ticket_price" class="form-control" placeholder="Event Ticket Price" value="{{ isset($event) ? $event->ticket_price : old('ticket_price') }}">
                            @if($errors->has('ticket_price'))
                                <p class="text-danger">{{ $errors->first('ticket_price') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">Event Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4">
                               @if(isset($event)) 
                               {{ $event->description }}
                               @else
                               {{ old('description') }}
                               @endif
                            </textarea>

                            @if($errors->has('description'))
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            @if(isset($event))
                            <img src="{{ $event->getFirstMediaUrl() }}" alt="{{$event->event_name}}" width="100" height="100">
                            @endif
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection