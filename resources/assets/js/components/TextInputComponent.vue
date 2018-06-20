<template>
    <div class="panel-heading">
        <div class="columns"> 
            <div class="column is-10">
                <b-field label="Título:">
                    <b-tooltip style="min-width: 100%;" label="Clique em Editar para Editar o Conteúdo">
                        <b-input style="min-width: 100%;" placeholder="Título da Página" v-bind:value="this.fieldValue" id="pageTitleInput" disabled></b-input>
                    </b-tooltip>
                </b-field>
            </div>
            <div class="column">
                <div class="is-pulled-left p-t-35">
                    <a style="display: inline-block;" class="button is-link is-small has-shadow" @click="pageTitleEdit()" id="pageTitleEditBttn">
                        <span>Editar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-pencil-square-o" ></i>
                        </span>
                    </a>
                    <a style="display: none" class="button is-danger is-small" @click="pageTitleCancel()" disabled id="pageTitleCancelBttn">
                        <span>Cancelar</span>
                        <span class="icon is-small p-l-10 p-r-10">
                            <i class="fa fa-ban" ></i>
                        </span>
                    </a>
                    <a style="display: none" class="button is-success is-small" @click="pageTitleSave()" disabled id="pageTitleSaveBttn">
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
        // console.log('Component mounted.')
    },
    methods: {
        pageTitleEdit: function(event, key){
            $("#pageTitleInput").prop("disabled", false)    
            $("#pageTitleCancelBttn").attr('disabled',false)
            $("#pageTitleCancelBttn").css("display","inline-block")
            $("#pageTitleSaveBttn").attr('disabled',false)
            $("#pageTitleSaveBttn").css("display","inline-block")
            $("#pageTitleEditBttn").hide()
        },
        pageTitleCancel: function (){
            $("#pageTitleInput").prop("disabled", true) 
            $("#pageTitleCancelBttn").attr('disabled',true)
            $("#pageTitleCancelBttn").css("display","none")
            $("#pageTitleSaveBttn").attr('disabled',true)
            $("#pageTitleSaveBttn").css("display","none")
            $("#pageTitleEditBttn").show()
        },
        pageTitleSave: function (){
            $("#pageTitleInput").prop("disabled", true) 
            $("#pageTitleCancelBttn").attr('disabled',true)
            $("#pageTitleCancelBttn").css("display","none")
            $("#pageTitleSaveBttn").attr('disabled',true)
            $("#pageTitleSaveBttn").css("display","none")
            $("#pageTitleEditBttn").show()
        }
    },
    data: function() {
        return{
            
        }
    }
}
</script>
