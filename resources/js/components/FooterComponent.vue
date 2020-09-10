<template>
    <div id="foot-component">
        <div class="container">
            <!--  -->
            <div class="row my-5">
                <div class="col-md-12" id="containerT" data-aos="fade-up">
                    <div class="container" id="trackCon">
                        <div class="row my-2">
                            <div class="col-md-4" id="trackText">
                                    <h3 style="font-weight:bolder; margin:0px;">TRACK NUMBER</h3>
                                    <p style="margin:0px;">TRACK UP TO 10 NUMBERS AT A TIME</p>
                            </div>
                            <div class="col-md-8" id="TrackbtnDiv">
                                <div class="input-group mb-3">
                                    <input type="text" v-model="tracking_id" class="form-control trackinput" placeholder="TRACKING ID" aria-label="TRACKING ID" aria-describedby="basic-addon2" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-tracking" type="button" @click="gotoTrackPage()">TRACK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->

            <div class="row my-2" >
                    <div class="col-md-5"  data-aos="fade-up">
                        <!-- <h5 id="contAside"><font-awesome-icon icon="shipping-fast"  /> EXPRESS LOGISTICS </h5> -->
                        <img src="/img/exlog_logo.jpg" alt=" " style="max-width:100%; max-height:70px;" class="mb-4">
                        <p>As a leading provider of air transportation, Express Logistics and Courier is your #1
                        source for expedited international automobile shopping.</p>
                        <p>with services to over 150 countries worldwide,
                        we have the resources and expertise to facilitate your international shipment and make the delivery as simple as possbile.</p>

                    </div>
                    <div class="col-md-2"  data-aos="fade-up">
                        <h5 style="font-weight:bold;">SERVICES</h5>
                        <p>
                            Sea Freight <br>
                            Road transport <br>
                            Air Freight <br>
                            Railway Logistics <br>
                            Packaging & Storage <br>
                            Warehousing <br>
                            Door-2-Door Delivery <br>
                        </p>

                    </div>
                    <div class="col-md-2"  data-aos="fade-up">
                        <h5 style="font-weight:bolder;">DESTINATION</h5>
                        <p>
                            China, South Korea<br>
                            Singapore, Switzerland  <br>
                            Canada, United States <br>
                            Paris, France <br>
                            Osio, Norway <br>
                            Frankfurt, Germany


                        </p>

                    </div>
                    <div class="col-md-3"  data-aos="fade-up">
                        <h5 style="font-weight:bolder;">CONTACT DETAILS</h5>
                        <p>
                            Deanshanger, Milton Keynes MK19 6HT, UK<br>
                            Email: support@exlogcourier.com<br>
                            Email: info@exlogcourier.com<br>
                            Call:  +44 7520635476 
                        </p>
                    </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    #foot-component{
        background-color: #261c6a;
        color: white;
        padding: 20px 0;
    }

    #containerT{
        background-color: #f57302;
        padding: 20px 10px;
        border-radius: 10px 0 10px 0;
    }
    #contAside{
        background-color:whitesmoke;
        color:#261c6a;
        width:50%;
        padding: 4px;
        text-align: center;
        font-weight: bolder;
    }
    .btn-tracking{
        border: 1pt solid white;
        margin-left: 7px;
        border-radius: 5px;
        background-color: #ff7900;
        color: white !important;
        font-weight: bold;
    }
    .btn-tracking:hover{
        border: 1pt solid #ff7900;
        color: #ff7900 !important;
        background-color: white;
        box-shadow: 0 0 30px #261c6a54;
    }
    #trackText{
        margin-top: 30px;
    }

    #TrackbtnDiv{
        margin-top: 30px;
    }
    .trackinput{
        padding: 1.5rem;
    }
    #trackInput{
        width: 500px;
        height: 40px;
        background-color: #f57302;
        color: white;
    }
    #trackBtn{
        height: 40px;
        background-color: #f57302;
        width: 100px;
        color:white;
    }
    .my-2 p{
        font-size: 0.9em;
        line-height: 2em;
    }
</style>

<script>
export default {
    data(){
        return {
            tracking_id:''
        }
    },
    watch:{
        'tracking_id': function(newid){
            this.tracking_id = newid;
        }
    },
    methods:{
        gotoTrackPage(){
            window.location.href = 'tracking#' + this.tracking_id;
        }
    }
}
</script>
