<template>
    <div @mouseleave="hideLeadsControls($event, order)" @mouseover="showLeadsControls($event, order )" class="content">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue=" this.leads.links ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
            </div>
        </div>
        <div>
            <h3 class="has-text-centered">{{this.leadsData.title}}</h3>
            <h1 class="has-text-centered has-text-info">{{this.leadsData.subtitle}}</h1>
            <h3 class="has-text-centered" v-html="leadsData.content"></h3>
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
    mounted() {
    },
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
