@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Gerenciar Links</h1>
        </div>
        <div class="column">
          <a href="{{route('links.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Criar Novo Link</a>
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
                <th>URL</th>
                <th>Text</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($links as $link)
                <tr>
                  <th>{{$link->id}}</th>
                  <td>{{$link->name}}</td>
                  <td>{{$link->description}}</td>
                  <td>{{$link->url}}</td>
                  <td>{{$link->text}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('links.show', $link->id)}}">Ver</a><a class="button is-light" href="{{route('links.edit', $link->id)}}">Editar</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$links->links()}}
    </div>
@endsection