@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Visualizar Detalhes do Link</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('links.edit', $link->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-page m-r-10"></i> Editar Link</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="id" class="label">ID</label>
          <pre>{{$link->id}}</pre>
        </div>

        <div class="field">
          <label for="name" class="label">Nome</label>
          <pre>{{$link->name}}</pre>
        </div>
        
        <div class="field">
          <div class="field">
            <label for="description" class="label">Descrição</label>
            <pre>{{$link->description}}</pre>
          </div>
        </div>
        
        <div class="field">
            <div class="field">
              <label for="url" class="label">URL</label>
              <pre>{{$link->url}}</pre>
            </div>
          </div>
        </div>

        <div class="field">
            <div class="field">
              <label for="text" class="label">Texto</label>
              <pre>{{$link->text}}</pre>
            </div>
          </div>
        </div>

        <div class="field">
            <div class="field">
              <label for="target" class="label">Target</label>
              <pre>{{$link->target}}</pre>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label for="created_at" class="label">Criada Em</label>
          <pre>{{Carbon\Carbon::parse($link->created_at)->format('d-m-Y H:i:s') }}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="updated_at" class="label">Atualizada Em</label>
            <pre>{{Carbon\Carbon::parse($link->updated_at)->format('d-m-Y H:i:s') }}</pre>
          </div>
        </div>

        
      </div>
    </div>
  </div>
@endsection