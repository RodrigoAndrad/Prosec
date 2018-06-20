@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Visualizar Detalhes da Imagem</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('images.edit', $image->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-page m-r-10"></i> Editar imagee</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="id" class="label">ID</label>
          <pre>{{$image->id}}</pre>
        </div>

        <div class="field">
          <label for="name" class="label">Nome</label>
          <pre>{{$image->name}}</pre>
        </div>
        
        <div class="field">
          <div class="field">
            <label for="description" class="label">Descrição</label>
            <pre>{{$image->description}}</pre>
          </div>
        </div>
        <div class="field">
            <div class="field">
              <label for="subtitle" class="label">Legenda</label>
              <pre>{{$image->subtitle}}</pre>
            </div>
          </div>
        
        <div class="field">
            <div class="field">
              <label for="alt" class="label">Texto Alternativo</label>
              <pre>{{$image->alt}}</pre>
            </div>
          </div>
        <div class="field">
            <div class="field">
              <label for="src" class="label">Arquivo</label>
              <pre>{{$image->src}}</pre>
            </div>
          </div>

        <div class="field">
            <div class="field">
              <label for="srcset" class="label">Arquivo Alternativo</label>
              <pre>{{$image->srcset}}</pre>
            </div>
          </div>
      </div> <!-- End of Column -->
      <div class="column">
        <div class="field">
          <div class="field">
            <label for="preview" class="label">Visualização</label>
            <pre><figure> <img src="{{asset('/images/'.$image->src)}}" ></figure></pre>
          </div>
        </div>

        <div class="field">
          <label for="created_at" class="label">Criada Em</label>
          <pre>{{Carbon\Carbon::parse($image->created_at)->format('d-m-Y H:i:s') }}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="updated_at" class="label">Atualizada Em</label>
            <pre>{{Carbon\Carbon::parse($image->updated_at)->format('d-m-Y H:i:s') }}</pre>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection