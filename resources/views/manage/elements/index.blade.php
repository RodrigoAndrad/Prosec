@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Gerenciar Elementos</h1>
        </div>
        <div class="column">
          <a href="{{route('elements.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Criar Novo elemente</a>
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
              @foreach ($elements as $element)
                <tr>
                  <th>{{$element->id}}</th>
                  <td>{{$element->name}}</td>
                  <td>{{$element->description}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('elements.show', $element->id)}}">Ver</a><a class="button is-light" href="{{route('elements.edit', $element->id)}}">Editar</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$elements->links()}}
    </div>
@endsection