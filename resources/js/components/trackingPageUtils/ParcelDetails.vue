<template>
    <div>
        <div class="container">
            <div class="row" style="text-align:center; padding:50px 0 30px; color:#261c6a;">
                <div class="col-md-12" id="trackText">
                    <h2>YOUR PARCEL DETAILS</h2>
                </div>
            </div>
            <!-- Tracking number row -->
            <div class="row">
                <div class="col-md-12 bg-gray">
                    <p class="pTextBold">
                        <strong>
                            Tracking ID: 
                            <i style="padding:10px 10px 1px; display:inline-block; border-bottom: 2pt solid #ff7900; font-style:normal;">{{ trackId }}</i>
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
                                    <td><b>{{ displayParcelDetails.start }}</b></td>
                                </tr>
                                <tr>
                                    <td>Estimated Time of Arrival (ETA)</td>
                                    <td><b>{{ displayParcelDetails.end }}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body cardHeadEdit ">
                        <p class="pTextBold">PARCEL'S ROUTE</p> 
                    </div>
                    <div class="table-responsive mt-1">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>From</td>
                                    <td><b>{{ displayParcelDetails.clocation }}</b></td>
                                </tr>
                                <tr>
                                    <td>To</td>
                                    <td><strong>{{ displayParcelDetails.raddress }}</strong></td>
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
                                    <td><b>{{ displayParcelDetails.sname }}</b></td>
                                </tr>
                                <tr>
                                    <td>Origin</td>
                                    <td><b>{{ displayParcelDetails.clocation }}</b></td>
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
                                    <td><b>{{ displayParcelDetails.rname }}</b></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><b>{{ displayParcelDetails.remail }}</b></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><strong>{{ displayParcelDetails.rphone }}</strong></td>
                                </tr>
                                 <tr>
                                    <td>Address</td>
                                    <td><strong>{{ displayParcelDetails.raddress }}</strong></td>
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
                                    <td><b>{{ displayParcelDetails.description }}</b></td>
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
                                    <td><b>{{ displayParcelDetails.dimension }}</b></td>
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
                                <tr v-for="(timeline, index) in displayParcelTimeline" :key="index">
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
            <div class="row progressBarRow">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" :style="{width: pacs+'%'}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="alert alert-success" v-if="displayParcelDetails.status == 'active'">
                            <p><b>{{ displayParcelDetails.rname }}</b>, your parcel is safely intransit and its currently at {{ displayParcelDetails.clocation }}</p>
                        </div>
                        <div class="alert alert-danger" v-else>
                            <p><b>{{ displayParcelDetails.message }}</b></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>
    .cardHeadEdit{
        background-color: #3d3072;
        padding: 4px 10px !important;
        color: #fff;
    }
    .progressBarRow{
        background-color: #3d3072;
        padding: 60px 20px !important;
        color: #fff;
    }
</style>

<script>
import Api from "../../api/Api";
var token = $('meta[name=csrf_token]').attr('content');
export default {
    props:{
        trackId : String
    },
    data(){
        return {
            displayParcelDetails : {},
            trackid:'',
            // displayParcelDetails: []
            startDate:'',
            displayParcelTimeline:[],
            pacs:'',
            test:'50%'
        }
    },
    beforeCreate(){
        
    },
    mounted(){
        var _token = this.token;
        // Request for the parcel detail from the database using the trackid
        this.fetchParcelDetails();

    },
    methods:{
        fetchParcelDetails(){
            console.log(this.trackId);
            // trackid:this.trackId
            let getDetails = {
                trackid:this.trackId,
                _token:this._token
            };

            Api.client.post('parcel/getparcel', getDetails)
            .then((res)=>{
                this.displayParcel(res);
            });

            // RETRIEVING TIMELINE INFO
            Api.client.post('parcel/getparceltimeline', getDetails)
            .then((res)=>{
                this.displayParcelTimeLine(res);
            });
        },
        displayParcel(response){
            if(response.data.count > 0){
                /*
                *   The issue was that the data you are fetching are array data but you were accessing as object
                *   So, what I did was just to get the object directly by adding the array index (0).
                */
                this.displayParcelDetails = response.data.parceldetail[0];
                let currentnow = response.data.now;
                // console.log(this.displayParcelDetails.endint);
                let total = this.displayParcelDetails.endint - this.displayParcelDetails.startint;
                // console.log(total);
                let now = currentnow - this.displayParcelDetails.startint;
                // console.log(now +'this is it');
                this.pacs = (now/total*100)-10;
                // console.log(this.pacs);
                if (this.pacs > 90){
                    this.pacs = 90;
                }
                // console.log(this.pacs); 
            }else{
                alert('Invalid Tracking Number')
            }
        },
        displayParcelTimeLine(response){
            if(response.data.count > 0){
                this.displayParcelTimeline = response.data.parceldetail;
                // console.log(this.displayParcelTimeLine);
            }else{
                alert('Invalid Tracking Number');
            }
        }

        
    }
}
</script>