@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center"> Lista de cursos</h3>
        <div class="row">
            <table>
                <thread>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Descríção</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thread>
                <tbody>
                    @foreach($registros as $registro)
                        <tr>

                            <td>{{$registro->id}}</td>
                            <td>{{$registro->titulo}}</td>
                            <td>{{$registro->descricao}}</td>
                            <td><img width="60" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"/></td>
                            <td>{{$registro->publicado}}</td>
                            <td>
                                <a class="btn blue" href="{{route('admin.cursos.editar',$registro->id)}}">Editar</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn-floating btn-large waves-effect waves-light green" href="{{route('admin.cursos.adicionar')}}"><i class="material-icons">add</i></a>
            <!--a class="btn green" href="{{route('admin.cursos.adicionar')}}">Adicionar</a-->
        </div>
    </div>


@endsection