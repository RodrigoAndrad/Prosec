<template>
   <div @mouseleave="hideSlideControls($event, slideOrder)" @mouseover="showSlideControls($event, slideOrder )">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ slideOrder + 1}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="linkValue"></slide-switch-component>
            </div>
        </div>
        <figure><img :src="imageSrc" :alt="imageAlt" width="100%"></figure>
        <div class="columns p-t-5" :id='"bannerCtrlSlide" + slideOrder' style="display: none;">
            <div class="column is-4">
                <a style="display: block;" class="button is-link is-small" @onclick="pageBannerEdit($event, slideOrder)" :id='"pageBannerEditlBttn" + slideOrder'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-4">
                <i class="fa fa-arrows p-l-50" aria-hidden="true"></i>
            </div>
            <div>
                <div class="column is-4">
                    <a class="button is-danger is-small" @onclick="pageDescriptionCancel($event, slideOrder)" :id='"pageDescriptionCancelBttn" + slideOrder'>
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
                'slideOrder',
                'linkValue',
                'imageSrc',
                'imageAlt'
            ],
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
     showSlideControls: function(event, key) {
        $('#bannerCtrlSlide' + key).show();
     },
     hideSlideControls: function(event, key) {
        $('#bannerCtrlSlide' + key).hide();
     }
    },
    data: function() {
        return {
            slidesData: $.map(this.slides, function(value,index){
                return[value]
            }) 
        }
    },
    mounted () {

    }
}
</script>