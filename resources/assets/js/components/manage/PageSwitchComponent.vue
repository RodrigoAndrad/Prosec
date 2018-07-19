<template>
        <div class="field">
            <b-switch v-model="displayValue" :value="linkValue" true-value="Campanha Ativa" false-value="Campanha Inativa">
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
