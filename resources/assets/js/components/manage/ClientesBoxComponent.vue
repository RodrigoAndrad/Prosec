<template>
   <div @mouseleave="hideSlideControls($event)" @mouseover="showSlideControls($event)">
        <div class="columns">
            <div class="column is-2">
                <div name="order">{{this.order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="Array.isArray(this.banners.links) && this.banners.links.length ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
            </div>
        </div>
        <figure class="has-text-centered"><img :src="imageDir + this.banners.images[0].src" :alt="this.banners.images[0].alt" width="50%"></figure>
        <div class="columns p-t-5" :id='"imageCtrlSlide" + this.banners.id' style="display: none;">
            <div class="column is-6">
                <a class="button is-link is-small is-block" @onclick="edit($event)" :id='"pageBannerEditlBttn"'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-6">
                <a class="button is-danger is-small is-block" @onclick="cancel($event)" :id='"pageDescriptionCancelBttn"'>
                    <span class="p-l-10 p-r-10">Apagar</span>
                    <span class="icon is-small">
                        <i class="fa fa-trash" ></i>
                    </span>
                </a>
            </div>
        </div>
    </div> 
</template>

<script>
export default {
    components: {
            
    },
    props: [
                'banners',
                'order',
                'imageDir',
    ],
    methods: {
     showSlideControls: function(event) {
        $('#imageCtrlSlide' + this.banners.id).show();
     },
     hideSlideControls: function(event) {
        $('#imageCtrlSlide' + this.banners.id).hide();
     }
    },
    data: function() {
        return {
        }
    },
    mounted () {
    }
}
</script>