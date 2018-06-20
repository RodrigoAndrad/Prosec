@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Editar Texto</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('texts.update', $text->id)}}" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Nome:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$text->name}}">
            </p>
          </div>

          <div class="field">
            <label for="description" class="label">Descrição:</label>
            <p class="control">
              <input type="text" class="input" name="description" id="description" value="{{$text->description}}">
            </p>
          </div>
          <hr />
          <div class="field">
            <label for="title" class="label">Título:</label>
            <p class="control">
              <input type="text" class="input" name="title" id="title" value="{{$text->title}}">
            </p>
          </div>

          <div class="field">
            <label for="subtitle" class="label">Subtítulo:</label>
            <p class="control">
              <input type="text" class="input" name="subtitle" id="subtitle" value="{{$text->subtitle}}">
            </p>
          </div>

          <div class="field">
            <label for="content" class="label">Conteúdo:</label>
            <p class="control">
              <input type="text" class="input" name="content" id="content" value="{{$text->content}}">
            </p>
          </div>

        </div> <!-- end of .column -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">Editar Texto</button>
        </div>
      </div>
    </form>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  
@endsection