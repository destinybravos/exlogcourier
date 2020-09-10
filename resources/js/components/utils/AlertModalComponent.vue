<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body" style="text-align:center;">
                <h3 v-if="type === 'success'"> <font-awesome-icon icon="check-circle" size="2x" class="text-success" /> </h3>
                <h3 v-if="type === 'error'"> <font-awesome-icon icon="times-circle" size="2x" class="text-danger" /> </h3>
                <div style="font-weight:1.1rem;">
                    {{ message }}
                </div>
            </div>
            <div class="modal-footer">
                <button @click="hideModal()" type="button" class="btn btn-primary btn-sm" data-dismiss="modal">OK</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
// import Api from "../../api/Api";
// var token = $('meta[name=csrf_token]').attr('content')
export default {
    props:{
        isShow:Boolean,
        message: String,
        type: String
    },
    data(){
        return{
            alertModal:'',
        }
    },
    watch:{
        'isShow' : function (showState) {
            if(showState == true){
                this.displayModal();
            }else{
                this.hideModal();
            }
        }
    },
    mounted(){
         this.alertModal = $('body #alertModal');
         var _token = this.token;
    },
    methods:{
        displayModal(){
            this.alertModal.modal('show');
        },
        hideModal(){
            this.$emit('hideModal', false);
            this.alertModal.modal('hide');
        },
    }
}
</script>