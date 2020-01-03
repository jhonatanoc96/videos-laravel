@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-lg-6">
        <h2>Editar {{$video->title}}</h2>
        <hr>
        <form action="{{ route('updateVideo', ['video_id' => $video->id]) }}" method="post" enctype="multipart/form-data" class="">
            {{csrf_field()}}

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label for="title" class="col">Título</label>
                <input type="text" class="col" name="title" id="title" value="{{ $video->title }}" />
            </div>

            <div class="form-group">
                <label for="description" class="col">Descripción</label>
                <textarea type="text" class="col" name="description" id="description">{{ $video->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="image" class="col">Miniatura</label>
                @if(Storage::disk('images')->has($video->image))
                <div class="video-image-thumb">
                    <div class="video-image-mask-edit">
                        <img src="{{ url('/miniatura/'.$video->image) }}" class="video-image">
                    </div>
                </div>
                @endif

                <input type="file" class="col" name="image" id="image"></textarea>
            </div>

            <div class="form-group">
                <label for="video" class="col">Archivo de vídeo</label>
                <video controls id="video-player" src="{{ route('fileVideo', ['filename' => $video->video_path]) }}">
                    Tu navegador no es compatible con HTML5
                </video>
                <input type="file" class="col" name="video" id="video"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Modificar vídeo</button>
        </form>
    </div>

</div>
@endsection