<template>
    <div id="tracking-component-div" v-if="!openParcelDetails">
        <div class="container" id="app">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-6" style="text-align:center">
                    <img src="img/barcode.jpeg">
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="mb-4">
                        <h6  style="text-align:center">ENTER YOUR 10 CHARACTER TRACKING NUMBER</h6>
                    </div>
                    <form method="post" @submit.prevent="checktrack">
                        <div class="form-group">
                            <input class="form-control input" type="text" v-model="trackid" :class="trackid.length < 10 ? 'red':'green'">
                            <div class="alert alert-primary mt-1" v-if="(trackid.length < 10)">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span>Please enter any 10 character to enable you proceed</span>
                            </div>
                        </div>
                        <div class="" style="text-align:center">
                           <button type="button" class="themeBtn" :disabled="trackid.length < 10" @click.prevent="checktrack">TRACK</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <h5 class="trackH5">
                        Here’s the fastest way to check the status of your shipment. No need to call Customer Service – our online results give you real-time, detailed progress of your shipment is shown through Express Logistics Service.
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <ParcelDetails v-else :track-id="trackid"></ParcelDetails>
</template>

<style scoped>
    .themeBtn{
        background-image: linear-gradient(to right, #3d3072, #ffd09c);
        padding: 15px 35px;
        color: #fff;
        border: none;
        text-align: center !important;
        /* width: 20%; */
    }
    .trackH5{
        text-align: center;
    }
    .input{
        padding: 1.6rem;
    }
    .red{
        border: 2px solid red;
    }
    .green{
        border: 2px solid green;
    }

    @media screen and (max-width: 767px) {
       #banText h2{
            font-size: 1.2rem;
        } 
        #banText{
            margin:3vh auto;
        }
        .trackH5{
            font-size: 1.1em;
        }
    }
</style>


<script>
import Api from "../../api/Api";
// import ParcelDetails from "../components/trackingPageUtils/ParcelDetails.vue";
var token = $('meta[name=csrf_token]').attr('content');
export default {
    components: {
        // ParcelDetails

        // ckxckxckxckxckxckxc
    },
    data(){
        return{
            trackid:'',
            openParcelDetails:false,
            displayParcelDetails:[]
        }
    },
    methods:{
        checktrack: function(){
            // Re-checking if the lenght is equal to or greater than 10
            if(this.trackid.length >= 10){
                // will will have to check if the parcel number exist or not before proceeding
                this.checkParcelExists(this.trackid)
            }else{
                //we will bring in a very nice modal here
                //but for now let's display an alert
                alert('Your parcel details must be correct')
            }
        },
        mounted(){
            var _token = this.token;
            console.log(this._token);
        },
        checkParcelExists(track_id){
             // send a request to database checking if it exist before passing it on
            // Otherwise we have to pop an error like invalid tracking number (The parcel you are looking for does not blablabla...)
            let trackData = {
                trackid:this.trackid,
                _token:this._token,

            };

            Api.client.post('parcel/getparcel',trackData)
            .then((res)=>{
                this.displayParcel(res);
            });
            // if it exists, open parcel details (set to through and display parcel)
            this.openParcelDetails = true;
        },
        displayParcel(response){
            if(response.data.count > 0){
                this.displayParcelDetails = response.data.displayParcelDetails
            }
        }
    }
}
</script>