@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Editar Link</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('links.update', $link->id)}}" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Nome:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$link->name}}">
            </p>
          </div>

          <div class="field">
            <label for="description" class="label">Descrição:</label>
            <p class="control">
              <input type="text" class="input" name="description" id="description" value="{{$link->description}}">
            </p>
          </div>

          <div class="field">
            <label for="text" class="label">Texto:</label>
            <p class="control">
              <input type="text" class="input" name="text" id="text" value="{{$link->text}}">
            </p>
          </div>

          <div class="field">
            <label for="url" class="label">Url:</label>
            <p class="control">
              <input type="text" class="input" name="url" id="url" value="{{$link->url}}">
            </p>
          </div>

          <div class="field">
            <label for="target" class="label">Target:</label>
            <p class="control">
              <input type="text" class="input" name="target" id="target" value="{{$link->target}}">
            </p>
          </div>

        </div> <!-- end of .column -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">Editar Link</button>
        </div>
      </div>
    </form>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  
@endsection