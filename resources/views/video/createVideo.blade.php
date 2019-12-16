@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="">
        <h2>Crear un nuevo vídeo</h2>
        <hr>
        <form action="{{ route('saveVideo') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
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
                <label for="title">Título</label>
                <input type="text" name="title" id="title" value="{{old('title')}}" />
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea type="text" name="description" id="description" value="{{old('description')}}"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Miniatura</label>
                <input type="file" name="image" id="image"></textarea>
            </div>

            <div class="form-group">
                <label for="video">Archivo de vídeo</label>
                <input type="file" name="video" id="video"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Crear vídeo</button>
        </form>
    </div>
</div>



@endsection