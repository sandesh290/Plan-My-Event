@extends('adminlte::page')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 py-2">
                <a href="{{ url('/users/create') }}" class="btn btn-success">Add New</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <form action="{{ route('users.index') }}" method="GET">
                            <div class="form-group">
                                <label for="event_id">{{ __('User Name') }}</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <button class="btn btn-success">Search</button>
                        </form>
                    </div> --}}
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>

                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>

                                        <td class="d-flex align-items-center">
                                            @if (!$user->is_admin)
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-sm btn-info">Edit</a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
