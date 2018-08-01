<template>
   <div @mouseleave="hideControls($event)" @mouseover="showControls($event)">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ this.order}}&ordm;</div>
            </div>
            <div v-if="this.linkSwitch === true" class="column" id="switch">
                <slide-switch-component :linkValue="this.boxes.links && Array.isArray(this.boxes.links) && this.boxes.links.length ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
            </div>
        </div>
        <div class="columns">
            <div class="column is-2">
                <figure><img :src="this.imageDir + '/' + this.boxes.images[0].src" :alt="this.boxes.images[0].alt" width="100%" class="is-pulled-right m-b-5"></figure>    
            </div>
            <div class="column is-10">
                <span class="content has-text-centered has-text-info"><h3>{{this.boxes.texts[0].title}}</h3></span>
                <div v-html="this.boxes.texts[0].content"></div>
            </div>
        </div>
        <div v-if="this.controls == 1 || this.controls == 2" class="columns p-t-5" :id='"textIntroCtrlSlide"' style="display: none;">
            <div class="column">
                <a class="button is-link is-small is-block" @click="edit()" :id='"pageBannerEditlBttn"'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div  v-if="this.controls == 2" class="column">
            </div>
            <div v-if="this.controls == 2" class="column">
                <a class="button is-danger is-small is-block" @onclick="cancel($event)" :id='"pageDescriptionCancelBttn"'>
                    <span class="p-l-10 p-r-10">Apagar</span>
                    <span class="icon is-small">
                        <i class="fa fa-trash" ></i>
                    </span>
                </a>
            </div>
        </div>
        <b-modal :active.sync="isCardModalActive" :width="1024" :height="800" scroll="keep" :can-cancel="['button']" id="modalTextIntro" v-on:ajax-complete="returnToast('is-success','Alteração salva com sucesso!')">
            <div class="card">
                <div class="card-image p-t-20 p-l-25" >
                    <b-field>
                        <b-upload v-model="dropFiles"
                            native
                            accept="png, jpeg, jpg, bmp"
                            drag-drop>
                            <section class="section">
                                <div class="content has-text-centered is-fullwidth">
                                    <p>
                                        <b-icon
                                            icon="upload"
                                            size="is-large">
                                        </b-icon>
                                    </p>
                                    <p>Arraste e solte aqui o arquivo de imagem ou clique para atualizar o conteúdo</p>
                                </div>
                            </section>
                        </b-upload>
                    </b-field>
                </div>
                <b-field label="Texto Alternativo:" class="m-l-10 m-r-10 m-t-5">
                        <b-input v-model="this.boxes.images[0].alt" maxlength="256" type="is-danger"></b-input>
                </b-field>
                <div class="p-l-20 p-r-20">
                    <hr />
                </div>    
                <b-field label="Título:" class="m-l-10 m-r-10 m-t-5">
                        <b-input v-model="this.boxes.texts[0].title" maxlength="256" type="is-danger"></b-input>
                </b-field>
                <b-field label="Texto:" class="m-l-10 m-r-10" maxlength="256" type="is-danger">
                    <vue-ckeditor v-model="this.boxes.texts[0].content" :config="config"></vue-ckeditor>
                </b-field>

                <div class="card-content">
                    <div class="content columns">
                        <div class="column">
                            <a class="button is-danger is-small is-block" @click="cancelModal()" :id='"pageDescriptionCancelBttn"'>
                                <span class="p-l-10 p-r-10">Cancelar</span>
                                <span class="icon is-small">
                                    <i class="fa fa-ban" ></i>
                                </span>
                            </a>
                        </div>
                        <div class="column">
                        </div>
                        <div class="column">
                            <a class="button is-link is-small is-block" @click="saveBanner()" :id='"pageBannerEditlBttn"'>
                                <span>Salvar</span>
                                <span class="icon is-small p-l-10 p-r-10">
                                    <i class="fa fa-floppy-o" ></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </b-modal>
    </div> 
</template>

<script>

export default {
    components: {
            
    },
    props: [    
                'boxes',
                'imageDir',
                'order',
                'controls',
                'linkSwitch',
                'controls',
                'linkSwitch',
    ],
    methods: {
        showControls: function(event) {
            $('#textIntroCtrlSlide').show();
         },
         hideControls: function(event) {
            $('#textIntroCtrlSlide').hide();
         },
         edit: function(event){
                this.isCardModalActive = true;
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
            //this.returnToast('is-success','Alteração salva com sucesso!');
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
        },
        deleteDropFile: function(index) {
                this.dropFiles.splice(index, 1)
        },
        cancelModal: function() {
            this.isCardModalActive = false
            this.cancelSaveCallback()
        },
        saveBanner: function() {
            this.isCardModalActive = false
            this.confirmSaveBanner()
        },
        confirmSaveBanner: function() {
            this.$dialog.confirm({
                title: 'Salvar Texto',
                message: 'Você tem certeza de que quer <b>salvar</b> as alterações?',
                cancelText: 'Cancelar',
                confirmText: 'Confirmar',
                type: 'is-danger',
                hasIcon: true,
                onConfirm: () => { this.confirmSaveBannerCallback(); this.confirmation = true; },
                onCancel: () => { if(!this.confirmation){ this.cancelSaveCallback()} this.confirmation = null;}
            })
        },
        confirmSaveBannerCallback: function() {
            const loadingComponent = this.$loading.open({
                    container: this.isFullPage ? null : this.value
                })
            setTimeout(() => loadingComponent.close(), 3 * 1000)
            setTimeout(() => this.returnToast('is-success','Alteração salva com sucesso!'), 3 * 1000);
        }
    },
    data: function() {
        return {
            isCardModalActive: false,
            dropFiles: [],
            config: {
                toolbar: [
                            ['Preview','-','Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo','-','Find', 'Replace', '-', 'SelectAll','-','Bold', 'Italic', 'Underline','-','NumberedList', 'BulletedList','Outdent', 'Indent', '-', 'Blockquote'],
                            [ 'CreateDiv','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl'],
                            [ 'Link', 'Unlink', 'Anchor' ],
                ],
                height: 100
            }
        }
    },
    mounted () {
    }
}
</script>
