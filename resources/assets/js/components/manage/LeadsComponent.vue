<template>
    <div @mouseleave="hideLeadsControls($event, order)" @mouseover="showLeadsControls($event, order )" class="content">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue=" this.leads.links[0] ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
            </div>
        </div>
        <div>
            <h1 class="has-text-centered has-text-info">{{leadsData.texts[0].content}}</h1>
            <h3 class="has-text-centered" v-html="this.leadsData.texts[0].title"></h3>
        </div>
        <div class="columns p-t-5" :id='"leadsCtrl" + order' style="display: none;">
            <div class="column is-4">
                <a class="button is-link is-small is-block" @onclick="leadsEdit($event, order)" :id='"editlBttn" + order'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-4">
                <!-- <i class="fa fa-arrows p-l-50" aria-hidden="true"></i> -->
            </div>
            <div class="column is-4">
                <a class="button is-danger is-small is-block" @onclick="leadsCancel($event, order)" :id='"cancelBttn" + order'>
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
                'leads', 'order',
    ],
    methods: {
     showLeadsControls: function(event, key) {
        $('#leadsCtrl'+key).show();
     },
     hideLeadsControls: function(event, key) {
        $('#leadsCtrl'+key).hide();
     }
    },
    data: function() {
        return {
         leadsData: this.leads,
        }
    },
    mounted () {
    }
}
</script>
