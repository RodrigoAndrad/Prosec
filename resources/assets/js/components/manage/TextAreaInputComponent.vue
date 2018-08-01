<template>
    <div class="panel-heading">
        <div class="columns"> 
            <div class="column is-10">
                <b-field :label="this.label + ':'">
                    <b-tooltip style="min-width: 100%" label="Clique em Editar para Editar o Conteúdo">
                        <keep-alive>
                            <textarea style="min-width: 100%; resize: none;" class="textarea" type="text" :placeholder="this.placeholderText" :id="this.name + 'Input'" v-html="this.originalFieldValue" disabled></textarea>
                        </keep-alive>    
                    </b-tooltip>
                </b-field>
            </div>
            <div class="column is-2">
                <div class="" style="padding-top: 40%;">
                    <a style="display: inline-block;" class="button is-link is-small has-shadow" @click="edit()" :id="this.name + 'EditBttn'">
                        <span>Editar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-pencil-square-o" ></i>
                        </span>
                    </a>
                    <a style="display: inline-block;" class="button is-white is-small has-shadow" @click="reset()" :id="this.name + 'ResetBttn'">
                        <span>Limpar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-eraser" aria-hidden="true"></i>
                        </span>
                    </a>
                    <a style="display: none" class="button is-danger is-small" @click="cancel()" disabled :id="this.name + 'CancelBttn'">
                        <span>Cancelar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-ban" ></i>
                        </span>
                    </a>
                    <a style="display: none" class="button is-success is-small" @click="save()" disabled :id="this.name + 'SaveBttn'">
                        <span>Salvar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        </span> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
            fieldValue: String,
            placeholderText: String,
            name: String,
            label: String
    },
    mounted() {
        this.originalFieldValue = this.fieldValue
    },
    created() {
    },
    methods: {
        edit: function(event, key){
            $('#' + this.name + 'Input').prop("disabled", false)    
            $('#' + this.name + 'CancelBttn').attr('disabled',false)
            $('#' + this.name + 'CancelBttn').css("display","inline-block")
            $('#' + this.name + 'SaveBttn').attr('disabled',false)
            $('#' + this.name + 'SaveBttn').css("display","inline-block")
            $('#' + this.name + 'EditBttn').hide()
            $('#' + this.name + 'ResetBttn').hide()
            $('#' + this.name + 'Input').focus();
        },
        cancel: function (){
            this.originalFieldValue = this.fieldValue;
            $('#' + this.name + 'Input').prop("disabled", true) 
            $('#' + this.name + 'CancelBttn').attr('disabled',true)
            $('#' + this.name + 'CancelBttn').css("display","none")
            $('#' + this.name + 'SaveBttn').attr('disabled',true)
            $('#' + this.name + 'SaveBttn').css("display","none")
            $('#' + this.name + 'EditBttn').show()
            $('#' + this.name + 'ResetBttn').show()
            this.cancelSaveCallback()
        },
        save: function (){
            this.confirmSave();
        },
        reset: function(){
            this.originalFieldValue = '';
            this.edit();
        },
        confirmSave: function() {
            this.$dialog.confirm({
                title: 'Salvar Texto',
                message: 'Você tem certeza de que quer <b>salvar</b> as alterações?',
                cancelText: 'Cancelar',
                confirmText: 'Confirmar',
                type: 'is-danger',
                hasIcon: true,
                onConfirm: () => { this.confirmSaveCallback(); this.confirmation = true; },
                onCancel: () => { if(!this.confirmation){ this.cancelSaveCallback()} this.confirmation = null;}
            })
        },
        confirmSaveCallback: function() {
            $('#' + this.name + 'Input').prop("disabled", true) 
            $('#' + this.name + 'CancelBttn').attr('disabled',true)
            $('#' + this.name + 'CancelBttn').css("display","none")
            $('#' + this.name + 'SaveBttn').attr('disabled',true)
            $('#' + this.name + 'SaveBttn').css("display","none")
            $('#' + this.name + 'EditBttn').show();
            $('#' + this.name + 'ResetBttn').show();
            const loadingComponent = this.$loading.open({
                    container: this.isFullPage ? null : this.value
                })
            setTimeout(() => loadingComponent.close(), 3 * 1000)
            setTimeout(() => this.$emit('ajax-complete','Alteração salva com sucesso!'), 3 * 1000);
            //setTimeout(() => this.returnToast('is-success','Alteração salva com sucesso!'), 3 * 1000);
            // this.returnToast('is-success','Alteração salva com sucesso!');
        },
        cancelSaveCallback: function() {
            $('#' + this.name + 'Input').prop("disabled", true) 
            $('#' + this.name + 'CancelBttn').attr('disabled',true)
            $('#' + this.name + 'CancelBttn').css("display","none")
            $('#' + this.name + 'SaveBttn').attr('disabled',true)
            $('#' + this.name + 'SaveBttn').css("display","none")
            $('#' + this.name + 'EditBttn').show();
            $('#' + this.name + 'ResetBttn').show();
            this.returnToast('is-danger','Não se esqueça de salvar as alterações </br>ou elas serão perdidas.');
        },
        changeCampaingValue: function(type, message){

            this.returnToast(type, message);
            /*
            axios.get("http://api.icndb.com/jokes/random/10")
                .then((response)  =>  { alert(response) })
            */    
        },
        returnToast: function(type, message){
            this.$toast.open({
             message: `${message}`,
             queue: false,
             type: type,
             position: 'is-bottom-right',
             // container: '#app'
           })
        }
    },
    data: function() {
        return{
            confirmation: null,
            originalFieldValue: null
        }
    },
    watch: {
        function() { this.originalFieldValue }
    }
}
</script>
