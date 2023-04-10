@extends('adminlte::page')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('profit-events.create') }}" class="btn btn-sm btn-primary">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Event Id</th>
                                <th>Event Name</th>
                                <th>Event Location</th>
                                <th>Event Ticket Price</th>
                                <th>Event Thumbnail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->event_name }}</td>
                                <td>{{ $event->event_location }}</td>
                                <td>Rs.{{ $event->ticket_price }}</td>
                                <td>
                                    <img src="{{ $event->getFirstMediaUrl() }}" alt="Thumbnail" width="100" height="100">
                                </td>
                                <td class="d-flex align-items-center">
                                    <a href="{{ route('profit-events.edit',$event->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    &nbsp;
                                    <form action="{{ route('profit-events.destroy',$event->id) }}" method="POST">
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
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection