<template>
   <div @mouseleave="hideControls($event)" @mouseover="showControls($event)">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ this.order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="this.boxes.links && Array.isArray(this.boxes.links) && this.boxes.links.length ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
            </div>
        </div>
        <div class="columns">
            <div class="column is-2">
                <figure><img :src="this.imageDir + '/' + this.boxes.images[0].src" :alt="this.boxes.images[0].alt" width="100%" class="is-pulled-right m-b-5"></figure>    
            </div>
            <div class="column is-10">
                <span class="content has-text-centered has-text-info"><h3>{{this.boxes.texts[0].title}}</h3></span>
                <div v-html="this.boxes.texts[0].content"></div>
            </div>
        </div>
        <div class="columns p-t-5" :id='"boxesCtrlSlide" + this.boxes.id' style="display: none;">
            <div class="column is-4">
                <a class="button is-link is-small is-block" @onclick="edit($event, this.order)" :id='"pageBannerEditlBttn" + this.order'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-4">
            </div>
            <div class="column is-4">
                <a class="button is-danger is-small is-block" @onclick="cancel($event, this.order)" :id='"pageDescriptionCancelBttn" + this.order'>
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
                'boxes',
                'imageDir',
                'order'
    ],
    methods: {
        showControls: function(event) {
            $('#boxesCtrlSlide' + this.boxes.id).show();
            console.log('#boxesCtrlSlide' + key);
        },
        hideControls: function(event) {
            $('#boxesCtrlSlide' + this.boxes.id).hide();
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