@extends('app')

@section('content')
    <h1>Lista de pasteles</h1><br>
    @if( $pasteles->count() > 10 )
        <h2>Hay muchos Pasteles</h2><br>
    @endif
    @foreach($pasteles as $pastel)
        <h4>{{ $pastel->nombre }}</h4>
    @endforeach
@stop