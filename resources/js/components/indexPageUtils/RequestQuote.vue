<template>
    <div>
        <div class="container-fluid" id="top_hd_req">
            <div class="row">
                <div class="col-md-6">
                    <button id="btn_truck" data-aos="zoom-in">
                        <font-awesome-icon icon="shipping-fast" size="2x" />
                    </button>
                    <!-- Heading -->
                    <div class="col-md-12 py-4" style="background-color:#261c6a;" data-aos="fade-right">
                        <h3>Request Quote</h3>
                    </div>
                    <!-- Form -->
                    <div class="container">
                        <div class="row py-3 px-0">
                            <div class="col-md-12" data-aos="fade-up">
                                <form method="post" @submit.prevent="requestQuote" ref="frmQuote">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input v-model="fname" type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input v-model="email" type="text" name="email" id="email" class="form-control" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select v-model="origin" name="des_from" id="des_from" class="form-control" placeholder="Email Address" required>
                                                <option value="">Location From</option>
                                                <option v-for="(country,i) in countries" :key="i" :value="country"> {{ country }} </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <select v-model="destination" name="des_to" id="des_to" class="form-control" placeholder="Email Address" required>
                                                <option value="">Destination To</option>
                                                <option v-for="(country,i) in countries" :key="i" :value="country"> {{ country }} </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select v-model="log_type" name="log_type" id="log_type" class="form-control" placeholder="Email Address" required>
                                                <option value="">Logistic Type</option>
                                                <option v-for="type in logistic_types" :key="type" :value="type">{{ type }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input v-model="subject" type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <textarea required v-model="message" name="message" id="message" rows="10" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-light" style="border-radius:0; background-color:#261c6a;">
                                                        <font-awesome-icon icon="paper-plane" v-if="sending === false" />
                                                        <font-awesome-icon icon="circle-notch" pulse v-else />
                                                    </span>
                                                    <button type="submit" class="btn btn-primary form-control">
                                                        REQUEST QUOTE
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="col-md-12 py-4" style="background-color:#ff7900;" data-aos="fade-left">
                        <h3>GENERAL FAQ</h3>
                    </div>
                    <!-- FAQ -->
                    <div class="container" style="text-align:left">
                        <div class="row py-3 px-0">
                            <div class="col-md-12" data-aos="fade-up">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link btn-toggle-accord" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <font-awesome-icon icon="plus" />
                                            </button>
                                            <small>I want to send a shipment, but don't know what paperwork is required?</small>
                                        </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            If you are sending a non-document shipment to a destination outside the EU, you will need to attach Customs paperwork. You can contact us and get your Customs paperwork in minutes.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-toggle-accord" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <font-awesome-icon icon="plus" />
                                            </button>
                                            <small>Where is my shipment?</small>
                                        </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            The Express Logistics and Courier Services Tracking page provides up-to-date information on the location of your shipment. 
                                            Simply enter your trackind id (waybill number). 
                                            <a href="/tracking">Click Here to Start Tracking</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-toggle-accord" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <font-awesome-icon icon="plus" />
                                            </button>
                                            <small>What is the maximum size of package I can send?</small>
                                        </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Maximum weights and dimensions depend on the Transmacs Global service you choose.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-toggle-accord" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                <font-awesome-icon icon="plus" />
                                            </button>
                                            <small>What payment methods can I use with Transmacs Global?</small>
                                        </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            A Transmacs Global Regional account is highly recommended if you ship frequently. This offers you 
                                            low rates, monthly billing and extended access to Transmacs Global services.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-toggle-accord" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                <font-awesome-icon icon="plus" />
                                            </button>
                                            <small>I Want clarification on something else!</small>
                                        </h5>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                            If you didn’t found the answer to your question here, Contact us
                                            & our representative will reply you as soon as poossible, usually within 24 hours! 
                                            <a href="/contact">Contact Us Now</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <AlertModal :message="modal_msg" :type="modal_type" :is-show="modalShowState" @hideModal="modalShowState = $event" />
    </div>
</template>
<script>
import Api from "../../api/Api";
import AlertModal from "../utils/AlertModalComponent.vue";
export default {
    components:{
        AlertModal
    },
    data(){
        return {
            countries: [
                'African',
                'Europe',
                'United State',
                'China',
                'Canada'
            ],
            logistic_types:[
                'Ocean Freight Services',
                'Air Freight Services',
                'Road and Rail Freight Services',
            ],
            sending: false,
            log_type:'',
            fname:'',
            email:'',
            destination:'',
            origin:'',
            subject: '',
            message:'',
            modalShowState:false,
            modal_msg: '',
            modal_type:'',
            sent_status: 'initial'
        }
    },
    watch:{
        'sent_status': function (value) {
            if(value === 'done'){
                this.resetForm();
                this.sent_status = 'initial'
            }
        }
    },
    methods:{
        requestQuote(event){
            let token = $('meta[name="csrf-token"]').attr('content');
            this.sending = true;
            let data = {
                fname: this.fname,
                email: this.email,
                log_type: this.log_type,
                origin: this.origin,
                destination: this.destination,
                subject: this.subject,
                message: this.message,
                _token: token
            };
            Api.client.post('requests/quote', data)
            .then((res) => {
                if(res.data.status == 'success'){
                    this.handleSuccess(res.data);
                }else{
                    this.handleError(res.data);
                }
            })
            .catch((e) => {
                if(e.response){
                    alert(e.response.data.message);
                }else{
                    alert('Network Error! Please check your internet connection');
                }
            });
        },
        handleSuccess(response_data){
            this.sent_status = 'done';
            console.log(this.$refs.frmQuote);
            this.sending = false;
            this.modal_type = 'success';
            this.modal_msg = response_data.message;
            this.modalShowState = true;
        },
        handleError(response_data){
            this.sending = false;
            this.modal_type = 'error';
            this.modal_msg = response_data.message;
            this.modalShowState = true;
        },
        resetForm(){
            this.origin = '';
            this.destination = '';
            this.origin = '';
            this.message = '';
            this.subject = '';
            this.log_type = '';
            this.email = '';
            this.$refs.frmQuote.reset();
        }
    }
}
</script>

<style scoped>
    .btn-toggle-accord{
        background-color: #261c6a;
        color: white;
        float: right;
    }
    #accordion h5{
        color: #261c6a;
    }
    .collapse .card-body{
        color: rgb(49, 49, 49);
        text-transform:none;
        font-weight: normal;
        font-size: 1rem;
    }
    #accordion h5 small{
        font-weight: bold;
    }
    #top_hd_req{
        text-align: center;
        color: white;
        font-weight: 900;
        text-transform: uppercase;
    }
    #btn_truck{
        /* padding: 5px 10px; */
        height: 60px;
        width: 60px;
        border-radius: 100%;
        float: right;
        margin-right: -45px;
        margin-top: 15px;
        z-index: 4;
        position: inherit;
    }
    @media screen and (max-width: 767px) {
        #btn_truck{
            display:none;
        }
    }
</style>