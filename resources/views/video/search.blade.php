@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="container">
            <div class="col-md-4">
                <h2>Búsqueda: {{$search}}</h2>
                <br/>
            </div>


            <div class="col-md-8">
                <form action="{{url('/buscar/'.$search)}}" class="col-md-4 pull-right" method="GET">
                    <label for="filter">Ordenar</label>
                    <select name="filter" class="form-control">
                        <option value="new">Más nuevos primero</option>
                        <option value="old">Más antiguos primero</option>
                        <option value="alfa">De la A a la Z</option>
                    </select>
                    <input type="submit" value="Ordenar" class="btn-filter btn bt-sm btn-primary">
                </form>
            </div>

            <div class="clearfix"></div>
            @include('video.videosList')


        </div>



    </div>
</div>
@endsection