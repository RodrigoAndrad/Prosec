@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Criar Novo Componente</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('components.store')}}" method="POST">
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
            <label for="name" class="label">Nome:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
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
          <button class="button is-primary is-pulled-right" style="width: 250px;">Criar Novo Componente</button>
        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')

@endsection