@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="container py-2">
        <div class="row my-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>
                    <div class="card-body">
                        Welcome to Dashboard, {{ auth()->user()->name }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ App\Models\ProfitEvent::count() }}</h3>
                        <p>Total Profit Events</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ url('/profit-events') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ App\Models\NonProfitEvent::count() }}</h3>
                        <p>Total Non Profit Events</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ url('/events') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>{{ App\Models\User::count() }}</h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ url('/users') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row-3">
            <div class="col-md-3">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ App\Models\Ticket::count() }}</h3>
                        <p>Total Tickets Sold</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ url('/tickets') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ App\Models\Registration::count() }}</h3>
                        <p>Registation For Non-Profit </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ url('/event-registrations') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
