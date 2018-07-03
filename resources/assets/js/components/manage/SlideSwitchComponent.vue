<template>
        <div class="field">
            <b-switch v-model="displayValue" :value="linkValue" true-value="Link Ativo" false-value="Link Inativo">
                {{displayValue}}
            </b-switch>
        </div>
</template>

<script>
export default {
    props: [
                'linkValue',
            ],
    mounted() {
        // console.log('Component mounted.')
    },
    methods: {
     
    },
    data: function() {
        return{
            displayValue: this.linkValue
        }
    }
}
</script>
