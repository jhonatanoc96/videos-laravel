@extends('layouts.app')

@section('content')
<div class="col-md-11 col-md-offset-1">
    <h2>{{$video->title}}</h2>
    <hr />

    <div class="col-md-8">
        <!-- video -->
        <video controls id="video-player" src="{{ route('fileVideo', ['filename' => $video->video_path]) }}">
            Tu navegador no es compatible con HTML5
        </video>

        <div class="clearfix"></div>
        <hr />

        <!-- descripcion -->
        <div class="panel panel-default video-data">
            <div class="panel-heading">
                <div class="panel-title">
                    Subido por <strong><a href="{{route('channel', ['user_id' => $video->user->id])}}">{{ $video->user->name.' '.$video->user->surname }}</a></strong>
                    {{ \FormatTime::LongTimeFilter($video->created_at) }}

                </div>
            </div>

            <div class="panel-body">
                {{ $video->description }}
            </div>
        </div>
        <!-- comentarios -->
        @include('video.comments')

    </div>

</div>


@endsection