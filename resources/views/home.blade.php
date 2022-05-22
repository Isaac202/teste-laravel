@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Home</h1>
@stop

@section('content')
<h3>Bem vind{{ Auth::user()->gender == 'female' ? 'a' : 'o' }}, <b>{{ strtoupper(current(explode(" ", Auth::user()->name))) }}</b></h3>

<div class="row">
    <div class="col-md-5">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ Auth::user()->gender == 'female' ? 'https://adminlte.io/themes/v3/dist/img/user4-128x128.jpg' : 'https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg' }}"
                        alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{ strtoupper(Auth::user()->name) }}</h3>
                <p class="text-muted text-center">{{ __('content.user.enum.profile.' . Auth::user()->profile) }}</p>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Status</b> <a class="float-right">{{ __('content.user.enum.status.' . Auth::user()->status) }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Gênero</b> <a class="float-right">{{ __('content.user.enum.gender.' . Auth::user()->gender) }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>E-mail</b> <a class="float-right">{{ Auth::user()->email }}</a>
                    </li>
                </ul>
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
