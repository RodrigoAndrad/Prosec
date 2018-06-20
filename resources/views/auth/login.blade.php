@extends('layouts.app')

@section('content')

<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-100">
    <div class="card">
      <div class="card-content" id="app">
        <h1 class="title">Bem Vindo!</h1>

        <form action="{{route('login')}}" method="POST" role="form">
          {{csrf_field()}}
          <div class="field">
            <label for="email" class="label">Endereço de Email</label>
            <p class="control">
              <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="nome@exemplo.com" value="{{old('email')}}">
            </p>
            @if ($errors->has('email'))
              <p class="help is-danger">{{$errors->first('email')}}</p>
            @endif
          </div>
          <div class="field">
            <label for="password" class="label">Senha</label>
            <p class="control">
              <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" placeholder="digite sua senha ...">
            </p>
            @if ($errors->has('password'))
              <p class="help is-danger">{{$errors->first('password')}}</p>
            @endif

          </div>

          <b-checkbox name="remember" class="m-t-20">Lembrar de Mim</b-checkbox>

          <button class="button is-success is-outlined is-fullwidth m-t-30">Entrar</button>
        </form>
      </div> <!-- end of .card-content -->
    </div> <!-- end of .card -->
    <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Esqueceu sua senha?</a></h5>
  </div>
</div>

@endsection

@section('scripts')

<script>
const app = new Vue()
app.$mount('#app')
</script>

@endsection