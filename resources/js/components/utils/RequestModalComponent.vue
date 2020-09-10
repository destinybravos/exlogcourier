<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="requestModalLabel">Request Details</h5>
                <button @click="hideModal()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped" v-if="request">
                        <tbody>
                            <tr>
                                <td class="form-group">
                                    <strong>Fullname: </strong>
                                </td>
                                <td>
                                    <p> {{ request.fullname }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-group">
                                    <strong>Email Address: </strong>
                                </td>
                                <td>
                                    <p> {{ request.email }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-group">
                                    <strong>Logistic Type: </strong>
                                </td>
                                <td>
                                    <p> {{ request.type }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-group">
                                    <strong>Origin (Location): </strong>
                                </td>
                                <td>
                                    <p> {{ request.origin }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-group">
                                    <strong>Destination: </strong>
                                </td>
                                <td>
                                    <p> {{ request.destination }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-group">
                                    <strong>Subject: </strong>
                                </td>
                                <td>
                                    <p> {{ request.subject }} </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-group">
                                    <strong>Message: </strong>
                                </td>
                                <td>
                                    <p> {{ request.message }} </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button @click="hideModal()" type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
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
        request:Object
    },
    data(){
        return{
            requestModal:'',
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
         this.requestModal = $('body #requestModal');
         var _token = this.token;
    },
    methods:{
        displayModal(){
            this.requestModal.modal('show');
        },
        hideModal(){
            this.$emit('hideModal', false);
            this.requestModal.modal('hide');
        },
    }
}
</script>