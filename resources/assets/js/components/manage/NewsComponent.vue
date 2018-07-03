<template>
    <div>
        <div @mouseleave="hideNewsControls($event, order)" @mouseover="showNewsControls($event, order )" class="content">
            <div class="columns">
                <div class="column is-6">
                    <div name="order">{{ order}}&ordm;</div>
                </div>
                <div class="column" id="switch">
                    <slide-switch-component :linkValue=" this.newsData.links[0] ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
                </div>
            </div>
            <div><h2>{{this.newsData.texts[0].title}}</h2></div>
            <div><h5>{{this.newsData.texts[0].content}}</h5></div>
            <div class="columns p-t-5" :id='"newsCtrl" + order' style="display: none;">
                <div class="column is-4">
                    <a class="button is-link is-small is-block" @onclick="newsEdit($event, order)" :id='"editlBttn" + order'>
                        <span>Editar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-pencil-square-o" ></i>
                        </span>
                    </a>
                </div>
                <div class="column is-4">
                </div>
                <div class="column is-4">
                    <a class="button is-danger is-small is-block" @onclick="newsCancel($event, order)" :id='"cancelBttn" + order'>
                        <span class="p-l-10 p-r-10">Apagar</span>
                        <span class="icon is-small">
                            <i class="fa fa-trash" ></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>        
    </div>
</template>

<script>

export default {
    components: {
            
        },
    props: [
                'news', 'order', 'image-dir',
            ],
    mounted() {
        // console.log('Component mounted.')
    },
    methods: {
     showNewsControls: function(event, key) {
        $('#newsCtrl'+key).show();
     },
     hideNewsControls: function(event, key) {
        $('#newsCtrl'+key).hide();
     }
    },
    data: function() {
        return {
         newsData: this.news,
        }
    },
    mounted () {
    }
}
</script>
