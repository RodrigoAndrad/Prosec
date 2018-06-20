@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Visualizar Detalhes do Texto</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('texts.edit', $text->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-page m-r-10"></i> Editar Texto</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="id" class="label">ID</label>
          <pre>{{$text->id}}</pre>
        </div>

        <div class="field">
          <label for="name" class="label">Nome</label>
          <pre>{{$text->name}}</pre>
        </div>
        
        <div class="field">
          <div class="field">
            <label for="description" class="label">Descrição</label>
            <pre>{{$text->description}}</pre>
          </div>
        </div>
      
        <div class="field">
          <label for="title" class="label">Título</label>
          <pre>{{$text->title}}</pre>
        </div>

        <div class="field">
          <label for="subtitle" class="label">Subtítulo</label>
          <pre>{{$text->subtitle}}</pre>
        </div>
        
        <div class="field">
          <label for="content" class="label">Conteúdo</label>
          <pre>{{$text->content}}</pre>
        </div>
      </div>

      <div class="column">
        <div class="field">
          <label for="created_at" class="label">Criado Em</label>
          <pre>{{Carbon\Carbon::parse($text->created_at)->format('d-m-Y H:i:s') }}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="updated_at" class="label">Atualizado Em</label>
            <pre>{{Carbon\Carbon::parse($text->updated_at)->format('d-m-Y H:i:s') }}</pre>
          </div>
        </div>

        
      </div>
    </div>
  </div>
@endsection