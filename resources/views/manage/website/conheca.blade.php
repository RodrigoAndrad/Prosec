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
                <div class="panel-heading"><h1><strong>Conheça</strong> - {{$page->slug}}</h1></div>
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
				</b-collapse>
				<hr />
				<b-collapse :open.sync="bannerIsOpen">
					<div class="panel-heading" slot="trigger">
						<strong>Banner</strong>
						<i v-if="bannerIsOpen" id="bannerDropdownIcon" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
	                	<i v-else id="bannerDropdownIcon" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
					</div>
					<div class="columns m-r-5 m-l-5 m-t-5">
						<div class="column is-manager-card box-component m-r-5 m-l-5">
							<image-component :banners="{{@json_encode($banners['elements'])}}" :image-dir="{{@json_encode(asset('') . '/')}}" controls="1" link-switch="false" v-on:ajax-complete="returnToast('is-success','Alteração salva com sucesso!')"></image-component>
						</div>	
					</div>	
       		    </b-collapse>
       			<hr />
       			<b-collapse :open.sync="boxIsOpen">
	         	    <div class="panel-heading" slot="trigger">
	         	    	<strong>Título Introdutório</strong>
	         	    	<i v-if="boxIsOpen" id="boxesDropdownIcon" label="Título" name="pagaTitle" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
		                <i v-else id="boxesDropdownIcon" label="Descição" name="pagaDescription" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
	         	    </div>
	         	    @foreach($pageIntroTitle['elements'] as $box)
	         	    	<div class="columns panel-content p-l-20 p-t-20">
							<div class="column is-manager-card box-component m-r-5 m-l-5">
			            		<text-box-component name="textIntro" :texts="{{@json_encode($box)}}" :order="{{@json_encode($loop->iteration)}}"></text-box-component>
							</div>	
						</div>
	       		 	@endforeach
	       		</b-collapse>
	       		<hr />
				<b-collapse :open.sync="boxIsOpen">
	         	    <div class="panel-heading" slot="trigger">
	         	    	<strong>Texto Introdutório</strong>
	         	    	<i v-if="boxIsOpen" id="boxesDropdownIcon" label="Título" name="pagaTitle" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
		                <i v-else id="boxesDropdownIcon" label="Descição" name="pagaDescription" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
	         	    </div>
	         	    @foreach($textIntro['elements'] as $box)
	         	    	<div class="columns panel-content p-l-20 p-t-20">
							<div class="column is-manager-card box-component m-r-5 m-l-5">
			            		<text-box-component name="textBox" :texts="{{@json_encode($box)}}" :order="{{@json_encode($loop->iteration)}}"></text-box-component>
							</div>	
						</div>
	       		 	@endforeach
	       		</b-collapse>	
				<hr style="margin-bottom: 50px;"/>	
				<b-collapse :open.sync="boxIsOpen">
	         	    <div class="panel-heading" slot="trigger">
	         	    	<strong>Caixa de Textos</strong>
	         	    	<i v-if="boxIsOpen" id="boxesDropdownIcon" label="Título" name="pagaTitle" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
		                <i v-else id="boxesDropdownIcon" label="Descição" name="pagaDescription" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
	         	    </div>
	         	    @foreach($texts['elements'] as $box)
	         	    	<div class="columns panel-content p-l-20 p-t-20">
							<div class="column is-manager-card box-component m-r-5 m-l-5">
			            		<text-box-component name="textBox2" :texts="{{@json_encode($box)}}" :order="{{@json_encode($loop->iteration)}}"></text-box-component>
							</div>	
						</div>
	       		 	@endforeach
	       		</b-collapse>
	       		<hr style="margin-bottom: 50px;"/>	
				<b-collapse :open.sync="boxIsOpen">
	         	    <div class="panel-heading" slot="trigger">
	         	    	<strong>{{$textIntroBox3['elements'][0]['texts'][0]['title']}}</strong>
	         	    	<i v-if="boxIsOpen" id="boxesDropdownIcon" label="Título" name="pagaTitle" class="fa fa-chevron-down is-pulled-right p-r-10"></i>
		                <i v-else id="boxesDropdownIcon" label="Descição" name="pagaDescription" class="fa fa-chevron-up is-pulled-right p-r-10"></i>
	         	    </div>
	         	    <text-input-component field-value="{{$textIntroBox3['elements'][0]['texts'][0]['title']}}" placeholder-text="Digite aqui o título da página ..." name="box3Title" label="Título"></text-input-component>
	         	    @foreach($certs['elements'] as $box)
	         	    	<div class="columns panel-content p-l-20 p-t-20">
							<div class="column is-manager-card box-component m-r-5 m-l-5">
			            		<resp-social-box-component name="textBoxCerts" :image-dir="{{@json_encode(asset('') . '/')}}" :boxes="{{@json_encode($box)}}" :order="{{@json_encode($loop->iteration)}}"></resp-social-box-component>
							</div>	
						</div>
	       		 	@endforeach
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
	}
});
</script>
@endsection
