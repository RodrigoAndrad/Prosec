@extends('layouts.manage')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1><strong>Políticas de RH</strong> - {{$page->slug}}</h1></div>
				<div class="panel-heading">ID: {{$page->id}}</div>
				<div class="panel-heading">Título: {{$page->title}}</div>
				<div class="panel-heading">Descrição: {{$page->description}}</div>
				<div class="panel-heading">Tags de SEO</div>
				<div class="panel-body">Tags de SEO</div>
				@foreach($page->seoTags as $tag)
					@if($loop->index  === 0 || $loop->index % 3 === 0)
	           	<div class="columns panel-content p-l-20 p-t-20">
					@endif            	 		
					<div class="column">
		            	<div>ID: {{$tag->id}}</div>
		            	<div>Nome: {{$tag->name}}</div>
		            	<div>Descrição: {{$tag->description}}</div>
		            	<div>{{$tag->property_name}}: {{$tag->property_value}}</div>
		            	<div>{{$tag->content_name}}: {{$tag->content_value}}</div>
		            	<div>Prioridade: {{$tag->priority}}</div>
		        	</div>
		        @if($loop->iteration % 3 === 0)		            	
				</div>
				@endif	
				@endforeach
                <div class="panel-body">
	                <div class="panel-heading"><strong>Banner</strong></div>
	                <div class="columns panel-content p-l-20 p-t-20">
		                <div class="column">
		                	<div><figure><img src="{{asset($banners->imageSrc)}}" width="100%"></figure></div>
		                	<div>{{$banners->imageSrc}}</div>
		                	<div>{{$banners->imageAlt}}</div>
		            	</div>
		           </div>
		           <div class="panel-content">
		           		<div class="column">
		           			<a href="http://localhost/dev/prosecurity/website/public/index.php/manage/slide/create" class="button is-primary is-pulled-right m-r-10">
							<i class="fa fa-image m-r-10"></i> Alterar Banner</a>
						</div>
						<div class="column">
						</div>
           		   </div>
           		   <div class="panel-heading"><strong>Boxes</strong></div>
            	 	@foreach($boxes as $key => $box)
            	 	@if($loop->index  === 0 ||$loop->index % 3 === 0)
            	 	<div class="columns panel-content p-l-20 p-t-20">
					@endif            	 		
		                <div class="column">
		                	<div>{{$key}}</div>
		                	<div><h2>{{$box->title}}</h2></div>
		                	<div>{!! $box->content !!}</div>
		            	</div>
				   @if($loop->iteration % 3 === 0)		            	
				   </div>
				   @endif
		           @endforeach    
   				</div>
   			</div>
		</div>
	</div>
</div>
@endsection