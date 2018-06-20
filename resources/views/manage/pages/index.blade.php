@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Gerenciar Páginas</h1>
        </div>
        <div class="column">
          <a href="{{route('pages.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Criar Nova Página</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-fullwidth">
            <thead>
              <tr>
                <th>id</th>
                <th>Slug</th>
                <th>Título</th>
                <th>Descrição</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($pages as $page)
                <tr>
                  <th>{{$page->id}}</th>
                  <td>{{$page->slug}}</td>
                  <td>{{$page->title}}</td>
                  <td>{{$page->description}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('pages.show', $page->id)}}">Ver</a><a class="button is-light" href="{{route('pages.edit', $page->id)}}">Editar</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$pages->links()}}
    </div>
@endsection