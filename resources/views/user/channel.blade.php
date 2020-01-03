@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="container">

            <h2>Canal de: {{$user->name. ' '. $user->surname}}</h2>

            <div class="clearfix"></div>
            @include('video.videosList')

        </div>

    </div>
</div>

@endsection