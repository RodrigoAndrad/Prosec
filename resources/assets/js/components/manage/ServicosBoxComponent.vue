<template>
   <div @mouseleave="hideSlideControls($event, this.order)" @mouseover="showSlideControls($event, this.order )">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ this.order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="Array.isArray(this.box.links) && this.box.links.length ? 'Link Ativo' : 'Link Inativo'"></slide-switch-component>
            </div>
        </div>
        <span class="content has-text-centered has-text-info"><h3>{{this.box.texts[0].title}}</h3></span>
        <figure><img :src="this.imageDir + '/' + this.box.images[0].src" :alt="this.box.images[0].alt" width="10%" class="is-pulled-right m-b-5"></figure>
        
        <figure><img :src="this.imageDir + '/' + this.box.images[1].src" :alt="this.box.images[1].alt" width="100%"></figure>
        <div class="columns p-t-5" :id='"boxCtrlSlide" + this.order' style="display: none;">
            <div class="column is-4">
                <a class="button is-link is-small is-block" @onclick="pageBannerEdit($event, this.order)" :id='"pageBannerEditlBttn" + this.order'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-4">
            </div>
            <div class="column is-4">
                <a class="button is-danger is-small is-block" @onclick="pageDescriptionCancel($event, this.order)" :id='"pageDescriptionCancelBttn" + this.order'>
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
                'box',
                'order',
                'imageDir',
    ],
    methods: {
        showSlideControls: function(event, key) {
            $('#boxCtrlSlide' + key).show();
        },
        hideSlideControls: function(event, key) {
            $('#boxCtrlSlide' + key).hide();
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