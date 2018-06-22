<template>
    <div @mouseleave="hideHighlightsControls($event, order)" @mouseover="showHighlightsControls($event, order )">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="linkValue"></slide-switch-component>
            </div>
        </div>
        
        <div><figure><img :src="this.imageSrc" width="100%"></figure></div>
        <div class="columns p-t-5" :id='"highlightsCtrl" + order' style="display: none;">
            <div class="column is-4">
                <a class="button is-link is-small is-block" @onclick="highlightsEdit($event, order)" :id='"editlBttn" + order'>
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
                <a class="button is-danger is-small is-block" @onclick="highlightsCancel($event, order)" :id='"cancelBttn" + order'>
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
                'highlights', 'order', 'imageSrc', 'linkValue',
            ],
    mounted() {
        // console.log('Component mounted.')
    },
    methods: {
     showHighlightsControls: function(event, key) {
        $('#highlightsCtrl'+key).show();
     },
     hideHighlightsControls: function(event, key) {
        $('#highlightsCtrl'+key).hide();
     }
    },
    data: function() {
        return {
         highlightsData: this.highlights,
        }
    },
    mounted () {
    }
}
</script>
