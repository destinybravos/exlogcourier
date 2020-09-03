<template>
    <div id="parcel_manager">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bg-success">
                    <h2>Parcel Page</h2>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="post">
                                 <div class="form-group">
                                    <label>Sender:</label>
                                    <input class="form-control" type="text" id="" placeholder="Sender's Full Name" v-model="sname" required>
                                </div>
                                <div class="form-group">
                                    <label>Recepient:</label>
                                    <input class="form-control" type="text" id="" placeholder="Recepient's Full Name" v-model="rname" required>
                                </div>
                                <div class="form-group">
                                    <label>Recepient Address:</label>
                                    <input class="form-control" type="text" id="" placeholder="Delivery Address" v-model="raddress" required>
                                </div>
                                <div class="form-group">
                                    <label>Recepient Country:</label>
                                    <input class="form-control" type="text" id="" placeholder="Destination Country" v-model="rcountry" required>
                                </div>
                                <div class="form-group">
                                    <label>Recepient Email:</label>
                                    <input class="form-control" type="email" id="" placeholder="e.g recepient@gmail.com" v-model="remail" required>
                                </div>
                                <div class="form-group">
                                    <label>Recepient Telephone:</label>
                                    <input class="form-control" type="text" id="" placeholder="e.g +1 445 6453 764" v-model="rphone" required>
                                </div>
                                <div class="form-group">
                                    <label>Parcel Description:</label>
                                    <textarea class="form-control" type="text" id="" placeholder="Description of parcel content" rows="3" v-model="description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Parcel Dimension and Weight:</label>
                                    <input class="form-control" type="text" id="" placeholder="lenght x width x height (12kg)" v-model="dimension" required>
                                </div>
                                <div class="form-group">
                                    <label>Current Location:</label>
                                    <input class="form-control" type="text" id="" placeholder="Current Location of Parcel" v-model="clocation" required>
                                </div>
                                <div class="form-group">
                                    <label>No. of Days:</label>
                                    <input class="form-control" type="number" id="" placeholder="Total number of days fro Delivery? e.g 5" v-model="days" required>
                                </div>
                                 <div class="form-group">
                                    <label>Parcel Stop Message:</label>
                                    <input class="form-control" type="text" id="" placeholder="Message that will be displayed when the Parcel is Paused" v-model="message" required>
                                </div>
                                 <div class="form-group">
                                   <button class="btn btn-primary" @click.prevent="saveParcel()" type="button" >Proceed with Shipping</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group" style="text-align:left">
                                <label>Tracking Number:</label>
                                <input class="form-control" type="text" id="" :value="trackid"   placeholder="" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- I Additional Parcel Receipt Component was added -->
        <!-- <parcelreceipt-component></parcelreceipt-component> -->
    </div>
</template>

<style scoped>
    label{
        font-weight: bold;
    }
</style>

<script>
// I Imported additional Parcel Receipt Component
// import ParcelReceipt from "../components/trackingPagesUtils/ParcelReceipt.vue";


import Api from "../../api/Api";
var token = $('meta[name=csrf-token]').attr('content')
    export default {
        // components:{
        //     ParcelReceipt,
        // },

        data(){
            return {
                // setting form input values here
                trackid:'',
                sname:'',
                rname:'',
                raddress:'',
                rcountry:'',
                remail:'',
                rphone:'',
                description:'',
                dimension:'',
                clocation:'',
                days:'',
                message:'',
                _token:'',
                errors:{}
            }
        },
        mounted(){
            var d = new Date();

            this.trackid = "EX"+d.getTime();

            this._token = token;
            console.log(this.errors);
        },
        methods:{
            saveParcel(){
                let data = {
                    trackid:this.trackid,
                    sname:this.sname,
                    rname:this.rname,
                    raddress:this.raddress,
                    rcountry:this.rcountry,
                    remail:this.remail,
                    rphone:this.rphone,
                    description:this.description,
                    dimension:this.dimension,
                    clocation:this.clocation,
                    days:this.days,
                    message:this.message,
                    _token:this._token
                };

                Api.client.post('/parcel/create', data)
                .then((res) => {
                    this.handleSaveParcel(res);
                });
                // .catch((errors) => {
                //     this.handleError(errors);
                //     console.log(this.errors);
                // });
            },
            handleSaveParcel(response){
                if(response.date.status == 'success'){
                    alert(response.data.message)
                }else{
                    alert(response.data.message)
                }
            }
        }
    }
</script>