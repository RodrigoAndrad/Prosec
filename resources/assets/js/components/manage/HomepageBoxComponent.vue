<template>
    <div @mouseleave="hideBoxControls($event, order)" @mouseover="showBoxControls($event, order )">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue=" this.boxes.links[0] ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
            </div>
        </div>
        <span v-if="this.boxes.texts[0] && this.boxes.texts[0].title" class="content has-text-centered has-text-info"><h1>{{this.boxes.texts[0].title}}</h1></span>
        <span v-if="this.boxes.texts[0] && this.boxes.texts[0].subtitle" class="content has-text-centered has-text-info"><h1>{{this.boxes.texts[0].subtitle}}</h1></span>
        <span v-if="this.boxes.texts[0] && this.boxes.texts[0].content" class="content has-text-centered has-text-info"><h3>{{this.boxes.texts[0].content}}</h3></span>
        <div><figure><img :src="this.imageDir + '/' + this.boxes.images[0].src" width="100%"></figure></div>
        <div class="columns p-t-5" :id='"boxCtrl" + order' style="display: none;">
            <div class="column is-4">
                <a class="button is-link is-small is-block" @onclick="boxEdit($event, order)" :id='"editlBttn" + order'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-4">
                
            </div>
            <div class="column is-4">
                <a class="button is-danger is-small is-block" @onclick="boxCancel($event, order)" :id='"cancelBttn" + order'>
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
import draggable from 'vuedraggable'

export default {
    components: {
            
        },
    props: [
                'boxes', 'order', 'imageDir',
    ],
    methods: {
     showBoxControls: function(event, key) {
        $('#boxCtrl'+key).show();
     },
     hideBoxControls: function(event, key) {
        $('#boxCtrl'+key).hide();
     }
    },
    data: function() {
        return {
         boxData: this.boxes,
        }
    },
    mounted () {
    }
}
</script>
