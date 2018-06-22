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
				<text-input-component field-value="{{$page->title}}"></text-input-component>
				<text-area-input-component field-value="{{$page->description}}"></text-area-input-component>
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
					<banner-slide-component-new :slides="{{ @json_encode($banner) }}"></banner-slide-component-new>
       		    </b-collapse>
       			<hr />
       		    <b-collapse :open.sync="boxIsOpen">
	         	    <div class="panel-heading" slot="trigger">
	         	    	<strong>Boxes</strong>
	         	    	<i v-if="boxIsOpen" id="boxesDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
		                <i v-else id="boxesDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
	         	    </div>
	        	 	@foreach($boxes as $key => $box)
	        	 	@if($loop->index  === 0 ||$loop->index % 3 === 0)
	        	 	<div class="columns panel-content p-l-20 p-t-20">
					@endif            	 		
				    <div class="column is-manager-card box-component m-r-5 m-l-5">
						<homepage-box-component :box="{{ @json_encode($box) }}" :order="{{$loop->index + 1}}" :image-src="{{@json_encode(asset($box->imageSrc))}}" :link-value="{{@json_encode($box->linkValue)}}"></homepage-box-component>
					</div>	
				   @if($loop->iteration % 3 === 0)		            	
				   </div>
				   @endif
		           @endforeach
		            <div class="panel-content">
		           		<div class="column">
		           			<a href="http://localhost/dev/prosecurity/website/public/index.php/manage/slide/create" class="button is-primary is-pulled-right m-r-10">
							Criar Novo Box<span class="m-l-10"><i class="fa fa-th-large m-r-10"></i> </span></a>
						</div>
						<div class="column">
						</div>
	       		 	</div>
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
					    	<highlight-component :highlight="{{ @json_encode($highlights) }}" :order="1" :image-src="{{@json_encode(asset($highlights->imageSrc))}}" :link-value="{{@json_encode($highlights->linkValue)}}"></highlight-component>
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
	        	@foreach($posts as $key => $post)
		        	@if($loop->index  === 0 ||$loop->index % 3 === 0)
	    	 		<div class="columns panel-content p-l-20 p-t-20">
					@endif
			        	<div class="column is-manager-card box-component m-r-5 m-l-5">
			        		<news-component :news="{{ @json_encode($post) }}" :order="{{$loop->iteration}}" :image-src="{{@json_encode(asset($post->imageSrc))}}" :link-value="{{@json_encode($post->linkValue)}}"></news-component>
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
	        	 	@foreach($leads as $key => $lead)
		        	 	@if($loop->index  === 0 ||$loop->index % 2 === 0)
		    	 		<div class="columns panel-content p-l-20 p-t-20">
						@endif
						    <div class="column is-manager-card box-component m-r-5 m-l-5">
						    	<leads-component :rsa="{{@json_encode($lead)}}" :leads="{{ @json_encode($lead) }}" :order="{{$loop->iteration}}" :link-value="{{@json_encode($lead->linkValue)}}"></leads-component>
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
					<div class="columns panel-content p-l-20 p-t-20">
			    	 	@foreach($videos as $key => $video)
						    <div class="column is-manager-card box-component m-r-5 m-l-5">
						    	@if(!empty($video->link))
			                    	<video-youtube-component id="{{$key}}" order="{{$loop->iteration}}" :link-value="{{@json_encode($video->linkValue)}}" link-src="{{$video->link}}" link-text="{{@json_encode($video->linkText)}}" link-target="{{@json_encode($video->linkTarget)}}"></video-youtube-component>
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