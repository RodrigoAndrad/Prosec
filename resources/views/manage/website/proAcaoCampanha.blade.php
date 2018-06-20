@extends('layouts.manage')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	<div class="pulled-right">
            				@if($pageStatus)
								<a href="http://localhost/dev/prosecurity/website/public/index.php/manage/slide/create" class="button is-primary is-pulled-right m-r-10">
								<i class="fa fa-image m-r-10"></i> Desativar</a>
            				@else
		           			<a href="http://localhost/dev/prosecurity/website/public/index.php/manage/slide/create" class="button is-primary is-pulled-right m-r-10">
							<i class="fa fa-image m-r-10"></i> Ativar</a>
							@endif
				</div>		
                <div class="panel-heading"><h1><strong>Pro Ação Campanha</strong> - {{$page->slug}}</h1></div>
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
             	</div>
             	<div class="panel-heading"><strong>Texto Introdutório</strong></div>
            	 	<div class="columns panel-content p-l-20 p-t-20">
		                <div class="column">
		                	<div>{{$textIntro->elementId}}</div>
		                	<div><h2>{{$textIntro->title}}</h2></div>
		                	<div><h2>{{$textIntro->content}}</h2></div>
		                	<div><figure><img src="{{asset($textIntro->imageSrc)}}" width="25%"></figure></div>
		                	<div><h2>{{$textIntro->imageSrc}}</h2></div>
		                	<div><h2>{{$textIntro->imageAlt}}</h2></div>
		            	</div>
				   </div>
				   <div class="panel-heading"><strong>Box</strong></div>
            	 	@foreach($boxes as $key => $box)
            	 		<div class="panel-content p-l-20 p-t-20">
		                	<div>{{$key}}</div>
		                	<div><figure><img src="{{asset($box->imageSrc)}}" width="25%"></figure></div>
		                	<div><h2>{{$box->imageSrc}}</h2></div>
		                	@if(!empty($box->imageAlt))<div><h2>{{$box->imageAlt}}</h2></div>
		                	@else<div><h2>&nbsp;</h2></div>
		                	@endif
		            	</div>
		           @endforeach
		           </div>  
   			</div>
		</div>
	</div>
</div>
@endsection