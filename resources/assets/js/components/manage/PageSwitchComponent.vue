<template>
        <div class="field">
            <b-switch @input="onInput" v-model="displayValue" :value="linkValue" true-value="Campanha Ativa" false-value="Campanha Inativa">
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
        
    },
    methods: {
        onInput: function(){
            switch(this.displayValue)
            {
                case 'Campanha Ativa':
                    var type = 'is-success';
                    if(this.loading)
                    {
                        this.changeCampaingValue();
                    }
                    break;
                case 'Campanha Inativa':
                    var type = 'is-danger';
                    this.confirmCustomDelete(type);
                    break;    
            }
        },
        confirmCustomDelete: function(type) {
            this.$dialog.confirm({
                title: 'Desabilitando a Campanha',
                message: 'Você tem certeza de que quer <b>desabilitar</b> a página de campanha da Pro Ação? Enquanto estiver desabilitada a página não estará disponivel aos visitantes do site.',
                cancelText: 'Cancelar',
                confirmText: 'Desabilitar Campanha',
                type: 'is-danger',
                hasIcon: true,
                onConfirm: () => {this.loading = true; this.changeCampaingValue(); this.confirmation = true;},
                onCancel: () => { if(!this.confirmation){ this.displayValue = 'Campanha Ativa'; this.loading = false;} this.confirmation = null; }
            })
        },
        changeCampaingValue: function(){
            const loadingComponent = this.$loading.open({
                container: this.isFullPage ? null : this.$refs.element.$el
            })
            setTimeout(() => loadingComponent.close(), 3 * 1000)
            setTimeout(() => this.$emit('ajax-complete','Alteração salva com sucesso!'), 3 * 1000);
        },
        returnToast: function(type){
            this.$toast.open({
             message: `${this.displayValue}`,
             queue: false,
             type: type,
             position: 'is-bottom-right',
           })
        }
    },
    data: function() {
        return{
            displayValue: this.linkValue,
            confirmation: null,
            isFullPage: true,
            loading: true
        }
    }
}
</script>
