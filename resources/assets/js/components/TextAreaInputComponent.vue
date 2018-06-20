<template>
    <div class="panel-heading">
        <div class="columns">
            <div class="column is-10">
                <b-field label="Descrição:">
                    <b-tooltip style="min-width: 100%" label="Clique em Editar para Editar o Conteúdo">
                        <textarea style="min-width: 100%; resize: none;" class="textarea" type="text" placeholder="Descrição da Página" id="pageDescriptionInput" disabled>{{this.fieldValue}}</textarea>
                    </b-tooltip>
                </b-field>
            </div>
            <div class="column">
                <div class="is-pulled-left"  style="padding-top: 40%">
                    <a style="display: inline-block;" class="button is-link is-small has-shadow" @click="pageDescriptionEdit()" id="pageDescriptionEditBttn">
                        <span>Editar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-pencil-square-o" ></i>
                        </span>
                    </a>
                    <a style="display: none" class="button is-danger is-small" @click="pageDescriptionCancel()" disabled id="pageDescriptionCancelBttn">
                        <span>Cancelar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-ban" ></i>
                        </span>
                    </a>
                    <a style="display: none" class="button is-success is-small" @click="pageDescriptionSave()" disabled id="pageDescriptionSaveBttn">
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
                fieldValue: String
            },
    mounted() {
        //  console.log('Component mounted.')
    },
    methods: {
        pageDescriptionEdit: function(event, key){
            $("#pageDescriptionInput").prop("disabled", false)    
            $("#pageDescriptionCancelBttn").attr('disabled',false)
            $("#pageDescriptionCancelBttn").css("display","inline-block")
            $("#pageDescriptionSaveBttn").attr('disabled',false)
            $("#pageDescriptionSaveBttn").css("display","inline-block")
            $("#pageDescriptionEditBttn").hide()
        },
        pageDescriptionCancel: function (){
            $("#pageDescriptionInput").prop("disabled", true) 
            $("#pageDescriptionCancelBttn").attr('disabled',true)
            $("#pageDescriptionCancelBttn").css("display","none")
            $("#pageDescriptionSaveBttn").attr('disabled',true)
            $("#pageDescriptionSaveBttn").css("display","none")
            $("#pageDescriptionEditBttn").show()
        },
        pageDescriptionSave: function (){
            $("#pageDescriptionInput").prop("disabled", true) 
            $("#pageDescriptionCancelBttn").attr('disabled',true)
            $("#pageDescriptionCancelBttn").css("display","none")
            $("#pageDescriptionSaveBttn").attr('disabled',true)
            $("#pageDescriptionSaveBttn").css("display","none")
            $("#pageDescriptionEditBttn").show()
        }
    },
    data: function() {
        return{
            
        }
    }
}
</script>