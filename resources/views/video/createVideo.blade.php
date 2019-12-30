@extends('layouts.app')

@section('content')
<div class="container">

    <div class="">
        <h2>Crear un nuevo vídeo</h2>
        <hr>
        <form action="{{ route('saveVideo') }}" method="post" enctype="multipart/form-data" class="col-lg-6">
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
                <input type="text" class="col" name="title" id="title" value="{{ old('title') }}" />
            </div>

            <div class="form-group">
                <label for="description" class="col">Descripción</label>
                <textarea type="text" class="col" name="description" id="description">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="image" class="col">Miniatura</label>
                <input type="file" class="col" name="image" id="image"></textarea>
            </div>

            <div class="form-group">
                <label for="video" class="col">Archivo de vídeo</label>
                <input type="file" class="col" name="video" id="video"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Crear vídeo</button>
        </form>
    </div>
</div>



@endsection