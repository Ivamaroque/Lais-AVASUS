<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo)?$registro->titulo:''}}">
    <label>Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao)?$registro->descricao:''}}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor)?$registro->valor:''}}">
    <label>Valor</label>
</div>

<div class="file-field input-field">

    <div class="btn blue" style="width:100px" >
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($registro->imagem))
<div class="input-field">
    <img width="150" src="{{asset($registro->imagem)}}">
    <a class="btn-floating red" href="{{route('admin.cursos.baixar',$registro->id)}}"><i class="material-icons right">arrow_downward</i></a>
    <span>Download</span>
</div>


@endif
<div class="input-field">
    <p>
        <label>
            <input type="checkbox" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : 'nao'}} value="true"/>
            <span>Publicar?</span>
        </label>
    </p>
    <br><br>
</div>