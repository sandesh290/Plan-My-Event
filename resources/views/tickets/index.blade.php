@extends('adminlte::page')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('tickets.index') }}" method="GET">
                        <div class="form-group">
                            <label for="event_id">{{ __('Event') }}</label>
                            <select name="event_id" id="event_id" class="form-control">
                                <option value="all">All</option>
                                @foreach(App\Models\ProfitEvent::pluck('event_name','id') as $key => $value)
                                <option value="{{ $key }}"{{ request()->event_id == $key ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success">Search</button>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Reg Id</th>
                                <th>Event Name</th>
                                <th>Event Price</th>
                                <th>Event Location</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Customer Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($regs as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->event->event_name }}</td>
                                <td>Rs.{{ $event->event->ticket_price }}</td>
                                <td>{{ $event->event->event_location }}</td>
                                <td>
                                    {{ $event->name }}
                                </td>
                                <td>
                                    {{ $event->email }}
                                </td>
                                <td>
                                    {{ $event->phone }}
                                </td>
                                <td class="d-flex align-items-center">
                                    <form action="{{ route('tickets.destroy',$event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $regs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection