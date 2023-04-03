@extends('user_template.layouts.template')
@section('main-contant')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="box_main">
                <ul>
                    <li><a href="{{route('userprofile')}}">Dashboard</a></li>
                    <li><a href="{{route('pendingorders')}}">Panding Orders</a></li>
                    <li><a href="{{route('history')}}">History</a></li>
                    <li><a href="{{route('userprofile')}}">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box_main">
                @yield('profilecontent')
            </div>
        </div>
    </div>
</div>

@endsection
