<template>
    <div id="contact_manager">
        <div class="container top_page_hd">
            <div class="row pt-3 pb-2">
                <div class="col-md-12">
                    <h2>
                        <font-awesome-icon icon="user" />
                        Contact Your Clients
                    </h2>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h4 class="mt-2 mb-4"><strong>Send Email to Client</strong></h4>
                    <form method="post" @submit.prevent="sendEmail()" ref="email_frm">
                        <div class="form-group">
                            <label for="sender">Sender Email</label>
                            <select name="sender" id="sender" class="form-control" v-model="sender" required>
                                <option value="support@exlogcourier.com" selected>support@exlogcourier.com</option>
                                <option value="info@exlogcourier.com">info@exlogcourier.com</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient">Recipient Email</label>
                            <input type="email" v-model="recipient" required name="recipient" id="recipient" class="form-control" placeholder="Enter Recipient Email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" v-model="subject" required name="subject" id="subject" class="form-control" placeholder="Enter Subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <ckeditor :editor="editor" v-model="message" :config="editorConfig"></ckeditor>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" >
                                <div  v-if="!processing">
                                    <font-awesome-icon icon="paper-plane"/> &nbsp; 
                                    Send Email
                                </div>
                                <div v-else>
                                    <font-awesome-icon icon="circle-notch" pulse />
                                    Sending...
                                </div>
                                
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <AlertModal :message="modal_msg" :type="modal_type" :is-show="modalShowState" @hideModal="modalShowState = $event" />
    </div>
</template>

<script>
import Api from "../../api/Api";
var token = $('meta[name=csrf-token]').attr('content');
import AlertModal from '../utils/AlertModalComponent.vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    components: {
        AlertModal
    },
    data() {
        return {
            editor: ClassicEditor,
            editorConfig: {
                // The configuration of the editor.
                //No Configuration for now!
            },
            recipient:'',
            sender:'support@exlogcourier.com',
            subject:'',
            message:'',
            processing:false,
            modal_msg:'',
            modal_type:'',
            modalShowState:false,
            sending:''
        }
    },
    watch: {
        'sending':function (status) {
            if(status == 'sent'){
                this.clearForm();
                this.sending = '';
            }
        }
    },
    methods: {
        sendEmail(){
            if(this.message == '' || this.recipient == ''){
                this.modal_msg = 'Honourable Kavor! Abeg, Enter all the informate before you try send!';
                // this.modal_msg = 'Please enter message and other information before sending';
                this.modal_type = 'error';
                this.modalShowState = true;
            }else{
                this.processing = true;
                this.sending = 'sending';
                let data = {
                    recipient : this.recipient,
                    sender : this.sender,
                    subject: this.subject,
                    message: this.message,
                    _token : token,
                };
                Api.client.post('send_email', data)
                // .then((res)=> { JSON.parse(res) })
                .then((res)=>this.send_response(res.data))
                .catch((error) =>{
                    this.processing = false;
                    this.sending = 'Not sent';
                    // this.modal_msg = 'Email was not sent due to an unexpected that error occured!';
                    this.modal_msg = 'Honourable Kavor! Yawa gas o, email no gree send because one error wage am o!';
                    this.modal_type = 'error';
                    this.modalShowState = true;
                    console.log(error);
                });
            }
        },
        send_response(response){
            this.modal_msg = 'Honourable Kavor! E don send o!';
            this.modal_type = 'success';
            this.modalShowState = true;
            this.processing = false;
            this.sending = 'sent';
            console.log(response);
        },
        clearForm(){
            this.recipient = '',
            this.sender = 'support@exlogcourier.com',
            this.subject = '',
            this.message = '',
            this.$refs.email_frm.reset();
        }
    }
}
</script>

<style scoped>
    .top_page_hd{
        background-color: #ff8929;
    }
    .top_page_hd h2{
        font-weight: bold;
        font-size: 1.3rem;
        color: white;
        text-shadow: 0 0 12px #e96901;
    }
</style>
<style>
    .ck-editor__editable{
        min-height: 200px !important;
        max-height: 400px !important;
    }
</style>