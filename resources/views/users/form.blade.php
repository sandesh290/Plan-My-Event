@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Users Form
                    </div>
                    <div class="card-body">
                        <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}"
                            method="POST"enctype="multipart/form-data">
                            @csrf
                            @if (isset($user))
                                @method('PATCH')
                            @endif
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                    value="{{ isset($user) ? $user->name : old('name') }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email"
                                    value="{{ isset($user) ? $user->email : old('email') }}">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    value="">
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <button class="btn btn-success" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
