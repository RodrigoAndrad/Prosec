@extends('layouts.manage')
@section('headerScripts')
<style type="text/css">
</style>
@endsection
@section('content')
<div class="container" id="app">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1><strong>Homepage</strong> - {{$page->slug}}</h1></div>
				<text-input-component v-on:ajax-complete="returnToast('is-success','Alteração salva com sucesso!')" field-value="{{$page->title}}" placeholder-text="Digite aqui o título da página ..." name="pageTitle" label="Título"></text-input-component>
				<text-area-input-component v-on:ajax-complete="returnToast('is-success','Alteração salva com sucesso!')" field-value="{{$page->description}}" placeholder-text="Digite aqui a descrição da página ..." name="pageDescription" label="Descrição"></text-area-input-component>
				<b-collapse :open.sync="isOpen">
					<div class="panel-heading" slot="trigger">
							Tags de SEO
	                    	<i v-if="isOpen" id="seoDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
	                    	<i v-else id="seoDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
					</div>
					<div class="panel-body" >
						@foreach($page->seoTags as $tag)
							@if($loop->index  === 0 || $loop->index % 3 === 0)
				        		<div class="columns panel-content p-l-20 p-t-20">
							@endif            	 		
									<seo-tags-component :seo-tags="{{ @json_encode($page->seoTags[$loop->index]) }}"></seo-tags-component>
					        @if($loop->iteration % 3 === 0)		            	
								</div>
							@endif	
						@endforeach
						</div>
					</div>
				</b-collapse>
				<b-collapse :open.sync="bannerIsOpen">
					<div class="panel-heading" slot="trigger">
						<strong>Banner</strong>
						<i v-if="bannerIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
	                	<i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
					</div>
					<banner-slide-component :slides="{{ @json_encode($banner['elements']) }}" :image-dir="{{@json_encode(asset('') . '/')}}"></banner-slide-component>
       		    </b-collapse>
       			<hr />
       		    <b-collapse :open.sync="boxIsOpen">
	         	    <div class="panel-heading" slot="trigger">
	         	    	<strong>Boxes</strong>
	         	    	<i v-if="boxIsOpen" id="boxesDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
		                <i v-else id="boxesDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
	         	    </div>
	        	 	@foreach($boxes['elements'] as $key => $box)
	        	 	@if($loop->index  === 0 ||$loop->index % 3 === 0)
	        	 	<div class="columns m-r-5 m-l-5 m-t-5">
					@endif            	 		
					    <div class="column is-manager-card box-component m-r-5 m-l-5">
							<homepage-box-component :boxes="{{ @json_encode($box) }}" :order="{{$loop->index + 1}}" :image-dir="{{@json_encode(asset('') . '/')}}"></homepage-box-component>
						</div>	
				   @if($loop->iteration % 3 === 0)		            	
				   </div>
				   @endif
		           @endforeach
	       		</b-collapse>	
	            <hr />
	        	<b-collapse :open.sync="destaqueIsOpen">
				    <div class="panel-heading" slot="trigger">
						<strong>Destaque</strong>
						<i v-if="destaqueIsOpen" id="destaqueDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
		                <i v-else id="destaqueDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
		            </div>    
		    	 	<div class="columns panel-content p-l-20 p-t-20 m-b-20">
		    	 		<div class="column is-3">
		        		</div>
					    <div class="column is-6 is-manager-card box-component m-r-5 m-l-5" >
					    	<highlight-component :highlights="{{ @json_encode($highlights) }}" :order="1" :image-dir="{{@json_encode(asset('') . '/')}}"></highlight-component>
		            	</div>
		            	<div class="column is-3">
		        		</div>
				    </div>
			    </b-collapse>
				<hr />
				<b-collapse :open.sync="noticiasIsOpen">
				<div class="panel-heading" slot="trigger">
					<strong>Notícias</strong>
					<i v-if="noticiasIsOpen" id="noticiasDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
	                <i v-else id="noticiasDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
				</div>
	        	@foreach($posts['elements'] as $post)
		        	@if($loop->index  === 0 ||$loop->index % 3 === 0)
	    	 		<div class="columns m-r-5 m-l-5 m-t-4">
					@endif
			        	<div class="column is-manager-card box-component m-r-5 m-l-5">
			        		<news-component :news="{{ @json_encode($post) }}" :order="{{$loop->iteration}}" :image-dir="{{@json_encode(asset('') . '/')}}"></news-component>
			            </div>
			        @if($loop->iteration % 3 === 0)
	        	 	</div>
		         	@endif
				@endforeach   
				</b-collapse>
				<hr />
				<b-collapse :open.sync="leadsIsOpen">
					<div class="panel-heading" slot="trigger">
						<strong>Leads</strong>
						<i v-if="leadsIsOpen" id="leadsDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
	                <i v-else id="leadsDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
					</div>
	        	 	@foreach($leads['elements'] as $lead)
		        	 	@if($loop->index  === 0 ||$loop->index % 2 === 0)
		    	 		<div class="columns m-r-5 m-l-5 m-t-5">
						@endif
						    <div class="column is-manager-card box-component m-r-5 m-l-5">
						    	<leads-component :leads="{{ @json_encode($lead) }}" :order="{{$loop->iteration}}"></leads-component>
			            	</div>
						@if($loop->iteration % 2 === 0)
		        	 	</div>
		        	 	@endif
				    @endforeach   
					</div>   
				</b-collapse>
				<hr />
				<b-collapse :open.sync="videosIsOpen">
					<div class="panel-heading" slot="trigger">
						<strong>Videos</strong>
						<i v-if="videosIsOpen" id="videosDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
		            <i v-else id="videosDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
					</div>
					<div class="columns m-r-5 m-l-5 m-t-5">
			    	 	@foreach($videos['elements'] as $video)
						    <div class="column is-manager-card box-component m-r-5 m-l-5">
						    	@if(!empty($video['links'][0]))
			                    	<video-youtube-component :videos="{{ @json_encode($video) }}" order="{{$loop->iteration}}"></video-youtube-component>
								@endif
			            	</div>
					   @endforeach   
					</div>
				</b-collapse>
				<hr style="margin-bottom: 50px;"/>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
var componentes = new Vue({
	el: '#app',
	data: {
		isOpen: false,
		bannerIsOpen: true,
		boxIsOpen: true,
		destaqueIsOpen: true,
		noticiasIsOpen: true,
		leadsIsOpen: true,
		videosIsOpen: true,
	}
});
</script>
@endsection