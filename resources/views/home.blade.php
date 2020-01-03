@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="container">
            <!-- Mostrar mensaje flash de video creado correctamente -->
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif

            @include('video.videosList')

 
        </div>



    </div>
</div>
@endsection