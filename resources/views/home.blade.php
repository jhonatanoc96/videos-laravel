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

            <div id="videos-list">
                @foreach($videos as $video)
                <div class="video-item col-md-10 pull-left panel panel-default">
                    <div class="panel-body">
                        <!-- Imagen del video -->
                        @if(Storage::disk('images')->has($video->image))
                        <div class="video-image-thumb col-md-2 pull-left ">
                            <div class="video-image-mask">
                                <img src="{{ url('/miniatura/'.$video->image) }}" class="video-image">
                            </div>
                        </div>
                        @endif

                        <div class="data">
                            <h4 class="video-title"><a href="{{ route('detailVideo', ['video_id' => $video->id]) }}">{{$video->title}}</a></h4>
                            <p>{{ $video->user->name.' '.$video->user->surname }}</p>
                        </div>

                        <!-- BOTONES DE ACCIÓN -->
                        <!-- Validar que el video a editar corresponda al propietario -->
                        <a href="" class="btn btn-success">Ver</a>
                        @if(Auth::check() && Auth::user()->id == $video->user->id)
                        <a href="" class="btn btn-warning">Editar</a>
                        <a href="" class="btn btn-danger">Eliminar</a>
                        @endif
                    </div>
                </div>

                @endforeach

            </div>
        </div>

        {{$videos->links()}}


    </div>
</div>
@endsection