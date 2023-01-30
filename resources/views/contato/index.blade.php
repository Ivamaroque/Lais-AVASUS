@extends('layout.site')

@section('titulo','Contatos Tulio gay?')

@section('conteudo')
    <h3> View Index</h3>

    @foreach($contatos as $contato)
        <p>{{$contato->nome}}</p>
        <p>{{$contato->tel}}</p>
    @endforeach

@endsection