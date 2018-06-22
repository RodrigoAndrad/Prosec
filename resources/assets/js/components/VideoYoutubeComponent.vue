<template>
    <div @mouseleave="hideBoxControls($event, this.order)" @mouseover="showBoxControls($event, this.order )">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="this.linkValue"></slide-switch-component>
            </div>
        </div>
        <div class="columns">
            <div class="column is-2">
            </div>
            <div class="column is-8">
                <iframe width="400" height="225" :src="this.linkSrc" frameborder="0" allowfullscreen align="middle"></iframe>
            </div>
            <div class="column is-2">
            </div>
        </div>    
        <div class="columns p-t-5" :id='"videoCtrl" + order' style="display: none;">
            <div class="column is-4">
                <a class="button is-link is-small is-block" @onclick="videoEdit($event, order)" :id='"editlBttn" + order'>
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
                <a class="button is-danger is-small is-block" @onclick="videoCancel($event, order)" :id='"cancelBttn" + order'>
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
                'id', 
                'order', 
                'linkValue',
                'linkText', 
                'linkSrc',
                'linkTarget',
            ],
    mounted() {
        // console.log('Component mounted.')
    },
    methods: {
     showBoxControls: function(event, key) {
        $('#videoCtrl'+ this.order).show();
     },
     hideBoxControls: function(event, key) {
        $('#videoCtrl'+ this.order).hide();
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
