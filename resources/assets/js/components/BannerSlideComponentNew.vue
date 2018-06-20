<template>
    <div class="panel-content m-b-30">
        <draggable :list="slidesData" @start="drag=true" @end="drag=false" class="columns m-r-5 m-l-5 m-t-5">
            <div v-for="(slide, key) in slidesData" class="column is-manager-card box-component m-r-5 m-l-5">
                <slide-component :slideOrder="key" :linkValue="slide.linkValue" :imageSrc="slide.imageSrc" :imageAlt="slide.imageAlt"></slide-component>
            </div>
        </draggable>
        <div class="panel-content">
            <div class="column">
                <a href="http://localhost/dev/prosecurity/website/public/index.php/manage/slide/create" class="button is-primary is-pulled-right m-r-10">
                Criar Novo Slide<span class="m-l-10"><i class="fa fa-image m-r-10"></i></span></a>
            </div>
            <div class="column">
            </div>
        </div>
    </div>  
</template>

<script>
import draggable from 'vuedraggable'

export default {
    components: {
            'draggable': draggable
        },
    props: [
                'slides',
            ],
    mounted() {
        console.log('Component mounted.')
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
