@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Criar Nova Página</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('pages.store')}}" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          
          <div class="field">
            <label for="id" class="label">ID</label>
            <p class="control">
              <input type="text" class="input" name="id" id="id">
            </p>
          </div>

          <div class="field">
            <label for="slug" class="label">Slug:</label>
            <p class="control">
              <input type="text" class="input" name="slug" id="slug">
            </p>
          </div>

          <div class="field">
            <label for="title" class="label">Título:</label>
            <p class="control">
              <input type="text" class="input" name="title" id="title">
            </p>
          </div>

          <div class="field">
            <label for="description" class="label">Descrição:</label>
            <p class="control">
              <input type="text" class="input" name="description" id="description">
            </p>
          </div>
        </div> <!-- end of .column -->

      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">Criar Nova Página</button>
        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')

@endsection