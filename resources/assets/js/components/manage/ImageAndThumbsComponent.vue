<template>
   <div @mouseleave="hideSlideControls($event)" @mouseover="showSlideControls($event)" class='has-text-centered'>
        <div class="columns">
            <div class="column is-6 has-text-left">
                <div name="order">{{this.order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="'Link Inativo'"></slide-switch-component>
            </div>
        </div>
        <figure><img :src="imageDir + this.banners.src" :alt="this.banners.alt" width="100%"></figure>
        <figure><img :src="imageDir + this.thumbs.src" :alt="this.thumbs.alt" width="25%"></figure>
        <div class="columns p-t-5" :id='"photoSlide" + this.banners.id' style="display: none;">
            <div class="column is-5">
                <a class="button is-link is-small is-block" @onclick="edit($event)" :id='"pageBannerEditlBttn"'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-2">
            </div>
            <div class="column is-5">
                <a class="button is-danger is-small is-block is-pulled-right" @onclick="cancel($event)" :id='"pageDescriptionCancelBttn"'>
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
                'thumbs',
                'order',
                'imageDir',
    ],
    methods: {
     showSlideControls: function(event) {
        $('#photoSlide' + this.banners.id).show();
     },
     hideSlideControls: function(event) {
        $('#photoSlide' + this.banners.id).hide();
     }
    },
    data: function() {
        return {
        }
    },
    mounted () {
        console.log(this.banners.id)
    }
}
</script>