<template>
    <div>
        <div>{{order}}</div>
        <div><h2>{{boxData.title}}</h2></div>
        <div><figure><img :src="this.imageSrc" width="100%"></figure></div>
        <div>{{this.imageSrc}}</div> 
        <div>{{boxData.imageAlt}}</div>
        <div>{{boxData.link}}</div>
        <div>{{boxData.linkTarget}}</div>
    </div>        
</template>

<script>
import draggable from 'vuedraggable'

export default {
    components: {
            draggable,
        },
    props: [
                'box', 'order', 'imageSrc'
            ],
    mounted() {
        // console.log('Component mounted.')
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
         boxData: this.box,
         src: this.imageSrc
        }
    },
    mounted () {
    }
}
</script>
