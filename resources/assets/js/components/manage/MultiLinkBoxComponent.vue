<template>
    <div @mouseleave="hideBoxControls($event)" @mouseover="showBoxControls($event )">
    <div class="content">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{this.order}}&ordm;</div>
            </div>
            <div class="column" id="switch">
                <slide-switch-component :linkValue="'Link Inativo'"></slide-switch-component>
            </div>
        </div>
        <div class="columns"> 
            <div class="column is-12">
                <b-field label="Texto:">
                    <b-tooltip style="min-width: 100%;" label="Clique em Editar para Editar o Conteúdo">
                        <b-input style="min-width: 100%;" placeholder="this.placeholderText" v-bind:value="this.link.text" :id="'TextTitle' + this.link.id" disabled></b-input>
                    </b-tooltip>
                </b-field>
            </div>
        </div>
        <div class="columns"> 
            <div class="column is-12">
                <b-field label="Url:">
                    <b-tooltip style="min-width: 100%" label="Clique em Editar para Editar o Conteúdo">
                    <div v-html="this.link.url" class="fake-textarea"></div>    
                    </b-tooltip>
                </b-field>
            </div>
        </div>
        <div class="columns p-t-5" :id='"BoxControls" + this.link.id' style="display: none;">
            <div class="column is-4">
                <a class="button is-link is-small is-block" @onclick="edit($event, this.link.id)" :id='this.name + this.link.id + "Edit"'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column is-4">
            </div>
            <div class="column is-4">
                <a class="button is-danger is-small is-block" @onclick="cancel($event, this.link.id)" :id='this.name + this.link.id + "Cancel"'>
                    <span class="p-l-10 p-r-10">Apagar</span>
                    <span class="icon is-small">
                        <i class="fa fa-trash" ></i>
                    </span>
                </a>
            </div>
        </div>

    </div>
    </div>
</template>

<script>
export default {
    props: [    
               'link',
               'order',
               'name',
    ],
    methods: {
         showBoxControls: function(event) {
            $('#BoxControls' + this.link.id).show();
         },
         hideBoxControls: function(event) {
            $('#BoxControls' + this.link.id).hide();
         },
         edit: function(event, key){
            $('#' + this.name + 'Title').prop("disabled", false)
            $('#' + this.name + 'Content').prop("disabled", false)
            $('#' + this.name + 'CancelBttn').attr('disabled',false)
            $('#' + this.name + 'CancelBttn').css("display","inline-block")
            $('#' + this.name + 'SaveBttn').attr('disabled',false)
            $('#' + this.name + 'SaveBttn').css("display","inline-block")
            $('#' + this.name + 'EditBttn').hide()
        },
        cancel: function (){
            $('#' + this.name + 'Title').prop("disabled", true)
            $('#' + this.name + 'Content').prop("disabled", true)
            $('#' + this.name + 'CancelBttn').attr('disabled',true)
            $('#' + this.name + 'CancelBttn').css("display","none")
            $('#' + this.name + 'SaveBttn').attr('disabled',true)
            $('#' + this.name + 'SaveBttn').css("display","none")
            $('#' + this.name + 'EditBttn').show()
        },
    },
    data: function() {
        return {
            text: this.texts,
            config: {
                toolbar: [
                    [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],
                    [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ],
                    ['NumberedList','BulletedList'],
                    [ 'Headers'],
                    [ 'Styles', 'Format', 'Font', 'FontSize' ],
                    [ 'TextColor', 'BGColor' ]
                    
                ],
                height: '100%',
                width: '100%',
            }
        }
    },
    mounted () {
    /*    
        CKEDITOR.on('instanceReady', (event) => {
        // Change the read-only state of the editor.
        // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setReadOnly
            event.editor.setReadOnly(this.readonly);
        });
    */    
    console.log(this.link);
    }
}
</script>