@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row mb-4 ">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <img src="{{ $event->getFirstMediaUrl() }}" alt="Banner" width="100%" height="400">
                </div>
                <div class="card-body">
                    <h4>{{ $event->event_name }} ({{ $event->ticket_price }})</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Buy Ticket
                </div>
                
                <div class="card-body">
                    <form action="{{ url('/event-card/buyTicket/'.$event->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name',auth()->user()->name) }}">
                            @if($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                            @if($errors->has('phone'))
                                <p class="text-danger">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email',auth()->user()->email) }}">
                            @if($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <button class="btn btn-success" type="submit">Buy Ticket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection