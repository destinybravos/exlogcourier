<template>
    <div>
        <div class="container">
            <div class="row" style="text-align:center; padding:50px 0 30px; color:#261c6a;">
                <div class="col-md-12" id="trackText">
                    <h2>EXPRESS LOGISTICS COURIER</h2>
                    <h2>WAYBILL RECEIPT</h2>
                </div>
            </div>
            <!-- Tracking number row -->
            <div class="row justify-content-center py-3">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" v-model="track_id" placeholder="ENTER TRACKING ID" class="form-control">
                        <div class="input-group-append">
                            <button class="btn input-group-text" @click="generateReceipt()">
                                View Receipt
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 bg-gray">
                    <p class="pTextBold">
                        <strong>
                            Tracking ID: 
                            <i style="padding:10px 10px 1px; display:inline-block; border-bottom: 2pt solid #ff7900; font-style:normal;">{{ receiptDetails.trackid}}</i>
                        </strong>
                    </p>
                </div>
            </div>

            <!-- Estimated parcel delivery dates and destination row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body cardHeadEdit ">
                        <p class="pTextBold">SHIPMENT DATES</p>
                    </div>
                    <div class="table-responsive mt-1">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>Estimated Time of Departuer (ETD)</td>
                                    <td><b>{{ receiptDetails.start}}</b></td>
                                </tr>
                                <tr>
                                    <td>Estimated Time of Arrival (ETA)</td>
                                    <td><b>{{ receiptDetails.end}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body cardHeadEdit ">
                        <p class="pTextBold">RECIEVER'S DETAILS</p>
                    </div>
                    <div class="table-responsive mt-1">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>From</td>
                                    <td><b>{{ receiptDetails.clocation}}</b></td>
                                </tr>
                                <tr>
                                    <td>To</td>
                                    <td><b>{{ receiptDetails.rcountry}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Sender and Recievers Details row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body cardHeadEdit ">
                        <p class="pTextBold">SENDER'S DETAILS</p>
                    </div>
                    <div class="table-responsive mt-1">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><b>{{ receiptDetails.sname}}</b></td>
                                </tr>
                                <tr>
                                    <td>Origin</td>
                                    <td><b>Express Logistics</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body cardHeadEdit ">
                        <p class="pTextBold">RECIEVER'S DETAILS</p>
                    </div>
                    <div class="table-responsive mt-1">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><b>{{ receiptDetails.rname}}</b></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><b>{{ receiptDetails.remail}}</b></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><b>{{ receiptDetails.rphone}}</b></td>
                                </tr>
                                 <tr>
                                    <td>Address</td>
                                    <td><b>{{ receiptDetails.raddress}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Shipment/Parcel Details row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body cardHeadEdit ">
                    <p class="pTextBold">SHIPMENT DETAILS</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="table-responsive mt-1">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>Item Description</td>
                                    <td><b>{{ receiptDetails.description}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="table-responsive mt-1">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>Weight and Dimension</td>
                                    <td><b>{{ receiptDetails.dimension}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Travel Timeline row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body cardHeadEdit ">
                    <p class="pTextBold">TRAVEL TIMELINE</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive mt-1">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <th>DATE</th>
                                    <th>TIME</th>
                                    <th>ACTIVITY</th>
                                    <th>LOCATION</th>
                                </tr>
                                <tr v-for="(timeline, index) in receiptTimeline" :key="index">
                                    <td>{{ timeline.date }}</td>
                                    <td>{{ timeline.time }}</td>
                                    <td>{{ timeline.activity }}</td>
                                    <td>{{ timeline.location }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- PROGRESS BAR ROW -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card-body">
                        <p class="formateP">Thanks for shipping with Express Logistics Courier Service</p>
                        <p class="formateP">www.exlogcourier.com</p>
                    </div>
                </div>
            </div>
        <AlertModal :message="modal_msg" :type="modal_type" :is-show="modalShowState" @hideModal="modalShowState = $event" />
        </div>
    </div>
</template>

<style scoped>
    .cardHeadEdit{
        background-color: #3d3072;
        padding: 4px 10px !important;
        color: #fff;
    }
    .formateP{
        text-align: center;
    }
</style>

<script>
import Api from "../../api/Api";
var token = $('meta[name=csrf_token]').attr('content');
import AlertModal from '../utils/AlertModalComponent.vue';
export default {
    components:{
        AlertModal
    },
    data(){
        return {
            // parcel : {}
            receiptDetails : {},
            getTrack:'',
            receiptTimeline: [],
            track_id:'',
            modal_msg:'',
            modal_type:'',
            modalShowState:false
        }
    },
    mounted(){
        // Send a Request to the database to generate the receipt
        var _token = this.token;
        // console.log( receiptDetails.trackid);
        this.getTrack = document.getElementById('track');
        // console.log(this.getTrack);
    },
    methods:{
        generateReceipt(){
            let setReceipt = {
                _token:this._token,
                trackid : this.track_id
            };

            Api.client.post('parcel/generatereceipt', setReceipt)
            .then((res)=>{
                this.displayReceipt(res);
            });
        },
        displayReceipt(response){
            if(response.data.count > 0){
                this.receiptDetails = response.data.receiptdetail[0];
                Api.client.post('parcel/generatereceipttimeline', {
                    _token:this._token,
                    trackid : this.track_id
                })
                .then((res)=>{
                    this.displayReceiptTimeline(res);
                });
            }else{
                if (this.track_id != '') {
                    this.modal_msg = `Parcel with Tracking ID #${this.track_id} could not be found! 
                    Please re-check/confirm the parcel Tracking ID and try again.`;
                } else {
                    this.modal_msg = 'No parcel Receipt to display';
                }
                this.modal_type = 'error';
                this.modalShowState = true;
            }
        },
        displayReceiptTimeline(response){
            if(response.data.count > 0){
                this.receiptTimeline = response.data.receiptdetail;
                console.log(this.receiptTimeline);
            }else{
                if (this.track_id != '') {
                    this.modal_msg = `Parcel with Tracking ID #${this.track_id} has no timeline yet!`;
                } else {
                    this.modal_msg = 'No Reciept timeline to display';
                }
                this.modal_type = 'error';
                this.modalShowState = true;
            }
        }
    }
}
</script>