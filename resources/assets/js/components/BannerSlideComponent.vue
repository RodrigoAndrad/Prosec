<template>
    <div class="panel-content m-b-30">
        <draggable :list="slidesData" @start="drag=true" @end="drag=false" class="columns m-r-5 m-l-5 m-t-5">
            <div v-for="(slide,key,index) in slidesData" class="column is-manager-card box-component m-r-5 m-l-5" @mouseover="showSlideControls($event, key)" @mouseleave="hideSlideControls($event, key)">
                <div class="columns">
                    <div class="column is-6">
                        <div name="order">{{key + 1}}&ordm;</div>
                    </div>
                    <div class="column" id="switch">
                        <slide-switch-component :linkValue="slide.linkValue"></slide-switch-component>
                    </div>
                </div>
                <figure><img :src="slide.imageSrc" :alt="slide.imageAlt" width="100%"></figure>
                <div class="columns p-t-5" :id='"bannerCtrlSlide" + key' style="display: none;">
                    <div class="column is-4">
                        <a class="button is-link is-small is-block" @onclick="pageBannerEdit($event, key)" :id='"pageBannerEditlBttn" + key'>
                            <span>Editar</span>
                            <span class="icon is-small is-block">
                                <i class="fa fa-pencil-square-o" ></i>
                            </span>
                        </a>
                    </div>
                    <div class="column is-4">
                        <i class="fa fa-arrows p-l-50" aria-hidden="true"></i>
                    </div>
                    <div v-if="Object.keys(slides).length !== '1'">
                        <div class="column is-4">
                            <a class="button is-danger is-small" @onclick="pageDescriptionCancel($event, key)" :id='"pageDescriptionCancelBttn"+key'>
                                <span class="p-l-10 p-r-10">Apagar</span>
                                <span class="icon is-small">
                                    <i class="fa fa-trash" ></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </draggable>
    </div>  
</template>

<script>
import draggable from 'vuedraggable'

export default {
    components: {
            draggable,
        },
    props: [
                'slides',
            ],
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
     showSlideControls: function(event, key) {
        $('#bannerCtrlSlide'+key).show();
     },
     hideSlideControls: function(event, key) {
        $('#bannerCtrlSlide'+key).hide();
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
/*        this.slidesData =  $.map(this.slides, function(value,index){
            return[value]
        }); */
    }
}
</script>
