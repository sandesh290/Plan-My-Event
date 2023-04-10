@extends('adminlte::page')
@section('content')
    <section id="update-profile" class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('update-profile') }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ auth()->user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control" name="email"
                                        value="{{ auth()->user()->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Password</label>
                                    <input type="password" class="form-control" name="password" value="">
                                </div>
                                <button class="btn btn-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
