@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">View Page Details</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('pages.edit', $page->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-page m-r-10"></i> Edit page</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="id" class="label">ID</label>
          <pre>{{$page->id}}</pre>
        </div>

        <div class="field">
          <label for="slug" class="label">Slug</label>
          <pre>{{$page->slug}}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="title" class="label">Título</label>
            <pre>{{$page->title}}</pre>
          </div>
        </div>

        <div class="field">
          <div class="field">
            <label for="description" class="label">Descrição</label>
            <pre>{{$page->description}}</pre>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="field">
          <label for="author" class="label">Autor</label>
          <pre>{{$page->author}}</pre>
        </div>

        <div class="field">
          <label for="created_at" class="label">Criada Em</label>
          <pre>{{Carbon\Carbon::parse($page->created_at)->format('d-m-Y H:i:s') }}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="updated_at" class="label">Atualizada Em</label>
            <pre>{{Carbon\Carbon::parse($page->updated_at)->format('d-m-Y H:i:s') }}</pre>
          </div>
        </div>

        
      </div>
    </div>
  </div>
@endsection