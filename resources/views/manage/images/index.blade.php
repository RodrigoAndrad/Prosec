@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Gerenciar Imagens</h1>
        </div>
        <div class="column">
          <a href="{{route('images.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Criar Novo imagee</a>
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
                <th>Thumb</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($images as $image)
                <tr>
                  <th>{{$image->id}}</th>
                  <td>{{$image->name}}</td>
                  <td>{{$image->description}}</td>
                  <td><figure> <img src="{{asset('/images/'.$image->src)}}" ></figure></td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('images.show', $image->id)}}">Ver</a><a class="button is-light" href="{{route('images.edit', $image->id)}}">Editar</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$images->links()}}
    </div>
@endsection
