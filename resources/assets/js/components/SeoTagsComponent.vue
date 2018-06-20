<template>
    <div class="column has-solid-border">	
       	<div class="is-manager-card">ID: {{seoTagsData.id}}</div>
       	<div class="is-manager-card">Nome: {{seoTagsData.name}}</div>
       	<div class="is-manager-card">Descrição: {{seoTagsData.description}}</div>
       	<div class="is-manager-card">{{seoTagsData.property_name}}: {{seoTagsData.property_value}}</div>
       	<div class="is-manager-card">{{seoTagsData.content_name}}: {{seoTagsData.content_value}}</div>
       	<div class="is-manager-card">Prioridade: {{seoTagsData.priority}}</div>
    </div>
</template>

<script>
export default {
    props: [
                'seoTags'
            ],
    mounted() {
        //  console.log('Component mounted.')
    },
    methods: {
       
    },
    data: function() {
        return{
			     seoTagsData: this.seoTags
        }
    }
}
</script>
