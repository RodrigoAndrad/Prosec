@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Visualizar Detalhes do Componente</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('components.edit', $component->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-page m-r-10"></i> Editar Componente</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="id" class="label">ID</label>
          <pre>{{$component->id}}</pre>
        </div>

        <div class="field">
          <label for="name" class="label">Slug</label>
          <pre>{{$component->name}}</pre>
        </div>
        
        <div class="field">
          <div class="field">
            <label for="description" class="label">Descrição</label>
            <pre>{{$component->description}}</pre>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="field">
          <label for="created_at" class="label">Criada Em</label>
          <pre>{{Carbon\Carbon::parse($component->created_at)->format('d-m-Y H:i:s') }}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="updated_at" class="label">Atualizada Em</label>
            <pre>{{Carbon\Carbon::parse($component->updated_at)->format('d-m-Y H:i:s') }}</pre>
          </div>
        </div>

        
      </div>
    </div>
  </div>
@endsection