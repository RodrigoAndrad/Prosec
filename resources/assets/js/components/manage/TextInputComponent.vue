<template>
    <div class="panel-heading">
        <div class="columns"> 
            <div class="column is-10">
                <b-field :label="this.label + ':'">
                    <b-tooltip style="min-width: 100%;" label="Clique em Editar para Editar o Conteúdo">
                        <b-input style="min-width: 100%;" :placeholder="this.placeholderText" v-bind:value="this.fieldValue" :id="this.name + 'Input'" disabled></b-input>
                    </b-tooltip>
                </b-field>
            </div>
            <div class="column">
                <div class="is-pulled-left p-t-35">
                    <a style="display: inline-block;" class="button is-link is-small has-shadow" @click="edit()" :id="this.name + 'EditBttn'">
                        <span>Editar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-pencil-square-o" ></i>
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
        // console.log('Component mounted.')
    },
    methods: {
        edit: function(event, key){
            $('#' + this.name + 'Input').prop("disabled", false)    
            $('#' + this.name + 'CancelBttn').attr('disabled',false)
            $('#' + this.name + 'CancelBttn').css("display","inline-block")
            $('#' + this.name + 'SaveBttn').attr('disabled',false)
            $('#' + this.name + 'SaveBttn').css("display","inline-block")
            $('#' + this.name + 'EditBttn').hide()
        },
        cancel: function (){
            $('#' + this.name + 'Input').prop("disabled", true) 
            $('#' + this.name + 'CancelBttn').attr('disabled',true)
            $('#' + this.name + 'CancelBttn').css("display","none")
            $('#' + this.name + 'SaveBttn').attr('disabled',true)
            $('#' + this.name + 'SaveBttn').css("display","none")
            $('#' + this.name + 'EditBttn').show()
        },
        save: function (){
            $('#' + this.name + 'Input').prop("disabled", true) 
            $('#' + this.name + 'CancelBttn').attr('disabled',true)
            $('#' + this.name + 'CancelBttn').css("display","none")
            $('#' + this.name + 'SaveBttn').attr('disabled',true)
            $('#' + this.name + 'SaveBttn').css("display","none")
            $('#' + this.name + 'EditBttn').show()
        }
    },
    data: function() {
        return{
            
        }
    }
}
</script>
