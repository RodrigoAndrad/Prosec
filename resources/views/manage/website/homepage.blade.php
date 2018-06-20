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
                <div class="panel-body">
                	
	                <b-collapse :open.sync="bannerIsOpen">
					<div class="panel-heading" slot="trigger">
						<strong>Banner</strong>
						<i v-if="bannerIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
	                	<i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
					</div>
					
					<banner-slide-component-new :slides="{{ @json_encode($banner) }}"></banner-slide-component-new>
           		    </b-collapse>
           		    </<draggable>
				<!--
           		    <b-collapse :open.sync="bannerNewIsOpen">
					<div class="panel-heading" slot="trigger">
						<strong>Banner</strong>
						<i v-if="bannerIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
	                	<i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
					</div>
					<div class="panel-content">
						@foreach($banner as $key => $slide)
							@if($loop->iteration % 4 === 0 || $loop->iteration === 1)
							<div class="columns">
							@endif	
							<banner-slide-component-new :banner-length="{{@json_encode(sizeof($banner))}}" :image-alt="{{@json_encode($slide->imageAlt)}}" :image-src="{{@json_encode($slide->imageSrc)}}" :link-value="{{ @json_encode($slide->linkValue) }}" ></banner-slide-component-new>
							@if($loop->iteration % 3 === 0)
							</div>
							@endif
						@endforeach
					</div>	
		            <div class="panel-content">
		           		<div class="column">
		           			<a href="http://localhost/dev/prosecurity/website/public/index.php/manage/slide/create" class="button is-primary is-pulled-right m-r-10">
							<i class="fa fa-image m-r-10"></i> Criar Novo Slide</a>
						</div>
						<div class="column">
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
			            <div class="panel-content">
			           		<div class="column">
			           			<a href="http://localhost/dev/prosecurity/website/public/index.php/manage/slide/create" class="button is-primary is-pulled-right m-r-10">
								<i class="fa fa-image m-r-10"></i> Criar Novo Slide</a>
							</div>
							<div class="column">
							</div>
	           		    </div>
           		    </b-collapse>
           		    -->  
       		    </div>
       		</div>
       		<hr />
       		    <b-collapse :open.sync="boxIsOpen">
         	    <div class="panel-heading" slot="trigger">
         	    	<strong>Boxes</strong>
         	    	<i v-if="boxIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
	                <i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
         	    </div>
         	    <draggable :list="{{@json_encode($boxes)}}" @start="drag=true" @end="drag=false">
	        	 	@foreach($boxes as $key => $box)
	        	 	@if($loop->index  === 0 ||$loop->index % 3 === 0)
	        	 	<div class="columns panel-content p-l-20 p-t-20">
					@endif            	 		
				    <div class="column is-manager-card box-component m-r-5 m-l-5" style="width: 33%;">
						<homepage-box-component :box="{{ @json_encode($box) }}" :order="{{$loop->index + 1}}" :image-src="{{@json_encode(asset($box->imageSrc))}}"></homepage-box-component>
					</div>	
				   @if($loop->iteration % 3 === 0)		            	
				   </div>
				   @endif
		           @endforeach
	       		</draggable>
	            <div class="panel-content">
	           		<div class="column">
	           			<a href="http://localhost/dev/prosecurity/website/public/index.php/manage/slide/create" class="button is-primary is-pulled-right m-r-10">
						Criar Novo Box<span class="m-l-10"><i class="fa fa-th-large m-r-10"></i> </span></a>
					</div>
					<div class="column">
					</div>
       		 	</div>
       		</div>
       		</b-collapse>	
            	 <hr />
    			<div class="panel-heading"><strong>Destaque</strong></div>
        	 	<div class="columns panel-content p-l-20 p-t-20">
				    <div class="column">
	                	<div>{{$key}}</div>
	                	<div><figure><img src="{{asset($highlights->imageSrc)}}" width="33%"></figure></div>
	                	<div>{{$highlights->imageSrc}}</div>
	                	<div>{{$highlights->imageAlt}}</div>
	                	<div>{{$highlights->link}}</div>
	                	<div>{{$highlights->linkTarget}}</div>
	            	</div>
			   </div>
				<hr />
				<div class="panel-heading"><strong>Notícias</strong></div>
            	<div class="columns panel-content p-l-20 p-t-20">
            	@foreach($posts as $key => $post)
		        	<div class="column">
			            <div>{{$key}}</div>
			            <div><h2>{{$post->title}}</h2></div>
			            <div><h2>{{$post->content}}</h2></div>
			            <div>{{$post->link}}</div>
			            <div>{{$post->linkText}}</div>
			            <div>{{$post->linkTarget}}</div>
		            </div>
				@endforeach   
				</div>
   				<div class="panel-heading"><strong>Leads</strong></div>
   				<div class="columns panel-content p-l-20 p-t-20">
            	 	@foreach($leads as $key => $lead)
            	 	<div class="columns panel-content p-l-20 p-t-20">
					    <div class="column">
		                	<div>{{$key}}</div>
		                	<div><h2>{{$lead->title}}</h2></div>
		                	<div><h2>{{$lead->content}}</h2></div>
		            	</div>
				   
					</div>
				   @endforeach   
   				</div>
   				<div class="panel-heading"><strong>Videos</strong></div>
   				<div class="columns panel-content p-l-20 p-t-20">
            	 	@foreach($videos as $key => $video)
            	 	<div class="columns panel-content p-l-20 p-t-20">
					    <div class="column">
					    	@if(!empty($video->link))
                            	<iframe width="400" height="225" src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
		                	<div>{{$key}}</div>
		                	<div><h2>{{$video->link}}</h2></div>
		                	<div><h2>{{$video->linkText}}</h2></div>
		                	<div><h2>{{$video->linkTarget}}</h2></div>
		            	</div>
				   
					</div>
				   @endforeach   
   				</div>
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
//		bannerNewIsOpen: true,
		boxIsOpen: true,
	}
});



/*
@foreach($banner as $key => $slide)
new Vue({
	el: '#switch' + {{$loop->iteration}},
	data: {
		value: 'Link Ativo'
			   
	}
});
@endforeach
*/
/*
function pageTitleEdit()
{
	$("#pageTitleInput").prop("disabled", false)	
	$("#pageTitleCancelBttn").attr('disabled',false)
	$("#pageTitleCancelBttn").css("display","inline-block")
	$("#pageTitleSaveBttn").attr('disabled',false)
	$("#pageTitleSaveBttn").css("display","inline-block")
	$("#pageTitleEditBttn").hide()
}
''
function pageTitleCancel()
{
	$("#pageTitleInput").prop("disabled", true)	
	$("#pageTitleCancelBttn").attr('disabled',true)
	$("#pageTitleCancelBttn").css("display","none")
	$("#pageTitleSaveBttn").attr('disabled',true)
	$("#pageTitleSaveBttn").css("display","none")
	$("#pageTitleEditBttn").show()
}

function pageTitleSave()
{
	$("#pageTitleInput").prop("disabled", true)	
	$("#pageTitleCancelBttn").attr('disabled',true)
	$("#pageTitleCancelBttn").css("display","none")
	$("#pageTitleSaveBttn").attr('disabled',true)
	$("#pageTitleSaveBttn").css("display","none")
	$("#pageTitleEditBttn").show()
}

function pageDescriptionEdit()
{
	$("#pageDescriptionInput").prop("disabled", false)	
	$("#pageDescriptionCancelBttn").attr('disabled',false)
	$("#pageDescriptionCancelBttn").css("display","inline-block")
	$("#pageDescriptionSaveBttn").attr('disabled',false)
	$("#pageDescriptionSaveBttn").css("display","inline-block")
	$("#pageDescriptionEditBttn").hide()
}

function pageDescriptionCancel()
{
	$("#pageDescriptionInput").prop("disabled", true)	
	$("#pageDescriptionCancelBttn").attr('disabled',true)
	$("#pageDescriptionCancelBttn").css("display","none")
	$("#pageDescriptionSaveBttn").attr('disabled',true)
	$("#pageDescriptionSaveBttn").css("display","none")
	$("#pageDescriptionEditBttn").show()
}

function pageDescriptionSave()
{
	$("#pageDescriptionInput").prop("disabled", true)	
	$("#pageDescriptionCancelBttn").attr('disabled',true)
	$("#pageDescriptionCancelBttn").css("display","none")
	$("#pageDescriptionSaveBttn").attr('disabled',true)
	$("#pageDescriptionSaveBttn").css("display","none")
	$("#pageDescriptionEditBttn").show()
}
*/
</script>
@endsection