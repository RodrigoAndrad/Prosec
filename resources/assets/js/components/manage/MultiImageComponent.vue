
<template>
   <div @mouseleave="hideSlideControls($event)" @mouseover="showSlideControls($event)">
        <div class="columns">
            <div class="column is-6">
                <div name="order">1&ordm;</div>
            </div>
            <div v-if="this.linkSwitch === true" class="column" id="switch">
                <slide-switch-component :linkValue="'Link Inativo'"></slide-switch-component>
            </div>
        </div>
        <figure><img :src="imageDir + this.banners.src" :alt="this.banners.alt" width="100%"></figure>
        <div v-if="this.controls == 1 || this.controls == 2" class="columns p-t-5" :id='"bannersCtrlSlide" + this.banners.id' style="display: block;">
            <div class="column">
                <a class="button is-link is-small is-block" @onclick="edit($event)" :id='"pageBannerEditlBttn"'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div class="column">
            </div>
            <div class="column">
                <a class="button is-danger is-small is-block" @onclick="cancel($event)" :id='"pageDescriptionCancelBttn"'>
                    <span class="p-l-10 p-r-10">Apagar</span>
                    <span class="icon is-small">
                        <i class="fa fa-trash" ></i>
                    </span>
                </a>
            </div>
        </div>
    </div> 
</template>

<script>
export default {
    components: {
            
    },
    props: [
                'banners',
                'order',
                'imageDir',
                'controls',
                'linkSwitch',
    ],
    methods: {
     showSlideControls: function(event) {
        $('#imageCtrlSlide').show();
     },
     hideSlideControls: function(event) {
        $('#imageCtrlSlide').hide();
     }
    },
    data: function() {
        return {
        }
    },
    mounted () {
    }
}
</script>


<template>
   <div @mouseleave="hideControls($event)" @mouseover="showControls($event)">
        <div class="columns">
            <div class="column is-6">
                <div name="order">{{ this.order}}&ordm;</div>
            </div>
            <div v-if="this.linkSwitch === true" class="column" id="switch">
                <slide-switch-component :linkValue="this.banners.links && Array.isArray(this.banners.links) && this.banners.links.length ? 'Link Ativo' : 'Link Inativo' "></slide-switch-component>
            </div>
        </div>
        <div>
            <figure><img :src="imageDir + this.banners.src" :alt="this.banners.alt" width="100%"></figure>
        </div>
        <div v-if="this.controls == 1 || this.controls == 2" class="columns p-t-5" :id='"bannersCtrlSlide" + this.banners.id' style="display: none;">
            <div class="column">
                <a class="button is-link is-small is-block" @click="edit()" :id='"pageBannerEditlBttn" + this.order'>
                    <span>Editar</span>
                    <span class="icon is-small p-l-10 p-r-10">
                        <i class="fa fa-pencil-square-o" ></i>
                    </span>
                </a>
            </div>
            <div v-if="this.controls == 2" class="column">
            </div>
            <div v-if="this.controls == 2" class="column">
                <a class="button is-danger is-small is-block" @click="cancel($event)" :id='"pageDescriptionCancelBttn" + this.order'>
                    <span class="p-l-10 p-r-10">Apagar</span>
                    <span class="icon is-small">
                        <i class="fa fa-trash" ></i>
                    </span>
                </a>
            </div>
        </div>
        <b-modal :active.sync="isCardModalActive" :width="1024" :height="800" scroll="keep" :can-cancel="['button']" :id="'modalBox' + this.order" v-on:ajax-complete="returnToast('is-success','Alteração salva com sucesso!')">
            <div class="card">
                <div class="card-image p-t-20 p-l-20" >
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
                <div class="p-l-20 p-r-20">
                    <hr />
                </div>    
                <b-field label="Texto Alternativo:" class="m-l-10 m-r-10 m-t-5">
                        <b-input v-model="this.banners.alt" maxlength="256" type="is-danger"></b-input>
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
                'banners',
                'order',
                'imageDir',
                'controls',
                'linkSwitch',
    ],
    methods: {
        showControls: function(event) {
            $('#bannersCtrlSlide' + this.banners.id).show();
        },
        hideControls: function(event) {
            $('#bannersCtrlSlide' + this.banners.id).hide();
        },
        edit: function(event){
                this.isCardModalActive = true;
        },
        cancel: function (){
            this.originalFieldValue = this.fieldValue;
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
             container: '#app'
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
                    // container: this.isFullPage ? null : this.value
                    container: 'body'
                })
            setTimeout(() => loadingComponent.close(), 3 * 1000)
            setTimeout(() => this.returnToast('is-success','Alteração salva com sucesso!'), 3 * 1000);
        }
    },
    data: function() {
        return {
            isCardModalActive: false,
            dropFiles: [],
            isFullPage: true
        }
    },
    mounted () {
    }
}
</script>