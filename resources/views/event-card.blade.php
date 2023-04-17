@extends('layouts.app')

@section('content')
    <section style="box-shadow: 0px 5px 9px #adb5bd inset">
        <div class="container pt-5">
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row py-4">
                <div class="col-md-12">
                    <form action="{{ url('event-card') }}" method="GET">
                        <input type="search" class="form-control" name="search"
                            placeholder="Search the event by name, place etc" value="{{ request()->search ?? '' }}">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Profit Events</h3>
                </div>
                @foreach ($profitEvents as $event)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ $event->getFirstMediaUrl() }}" style="width:100%; height:300px;">
                                <h5 class="event-name">{{ $event->event_name }}</h5>
                                <p class="event-location">{{ $event->event_location }}</p>
                                <p class="event-date">Rs.{{ $event->ticket_price }}</p>
                                <a style="background-color: #FF7800;border: transparent;" class="btn btn-success"
                                    href="{{ url('/event-card/buyTicket/' . $event->id) }}">Buy
                                    Ticket</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 pt-3">
                    {{ $profitEvents->links() }}
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h3>Non Profit Events</h3>
                </div>
                @foreach ($nonProfitEvents as $event)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ $event->getFirstMediaUrl() }}" style="width:100%; height:300px;">
                                <h5 class="event-name">{{ $event->event_name }}</h5>
                                <p class="event-location">{{ $event->event_location }}</p>
                                <p class="event-date">2024-12-28</p>
                                <a style="background-color: #FF7800;border: transparent;" type="button"
                                    class="btn btn-success"
                                    href="{{ url('/event-card/register/' . $event->id) }}">Register</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 pt-3">
                    {{ $nonProfitEvents->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
