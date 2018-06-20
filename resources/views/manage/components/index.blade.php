@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Gerenciar Componentes</h1>
        </div>
        <div class="column">
          <a href="{{route('components.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Criar Novo Componente</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-fullwidth">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($components as $component)
                <tr>
                  <th>{{$component->id}}</th>
                  <td>{{$component->name}}</td>
                  <td>{{$component->description}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('components.show', $component->id)}}">Ver</a><a class="button is-light" href="{{route('components.edit', $component->id)}}">Editar</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$components->links()}}
    </div>
@endsection