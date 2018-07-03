<template>
   <div @mouseleave="hideSlideControls($event)" @mouseover="showSlideControls($event)">
        <div class="columns">
            <div class="column is-6">
                <div name="order">1&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="Array.isArray(this.banners[0].links) && this.banners[0].links.length ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
            </div>
        </div>
        <figure><img :src="imageDir + this.banners[0].images[0].src" :alt="this.banners[0].images[0].alt" width="100%"></figure>
        <div class="columns p-t-5" :id='"imageCtrlSlide"' style="display: none;">
            <div class="column is-4">
                <a class="button is-link is-small is-block" @onclick="edit($event)" :id='"pageBannerEditlBttn"'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-4">
            </div>
            <div class="column is-4">
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
        $('#imageCtrlSlide').show();
     },
     hideSlideControls: function(event) {
        $('#imageCtrlSlide').hide();
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