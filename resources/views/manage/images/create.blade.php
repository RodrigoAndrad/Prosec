@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Criar Nova Imagem</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('images.store')}}" method="POST">
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
          <div class="field">
            <label for="subtitle" class="label">Legenda:</label>
            <p class="control">
              <input type="text" class="input" name="subtitle" id="subtitle">
            </p>
          </div>
          <div class="field">
            <label for="alt" class="label">Texto Alternativo:</label>
            <p class="control">
              <input type="text" class="input" name="alt" id="alt">
            </p>
          </div>
          <div class="field">
            <label for="src" class="label">Arquivo:</label>
            <p class="control">
              <input type="text" class="input" name="src" id="src">
            </p>
          </div>
          <div class="field">
            <label for="srcset" class="label">Arquivo Alternativo:</label>
            <p class="control">
              <input type="text" class="input" name="srcset" id="srcset">
            </p>
          </div>
        </div> <!-- end of .column -->

      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">Criar Nova Imagem</button>
        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')

@endsection