<template>
    <div id="index-component-div">
        <BannerComponent page-name="tracking"></BannerComponent>

        <div class="container">
            <div class="row">
                <div class="col-md-12" id="trackText">
                    <h2><b> YOUR PARCEL DETAILS</b></h2>
                </div>
            </div>
            <!-- Tracking number row -->
            <div class="row">
                <div class="col-md-12 bg-gray">
                    <p class="pTextBold">Tracking ID: EX01837974-CS</p>
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
                                    <td><b>20th Sep, 2020</b></td>
                                </tr>
                                <tr>
                                    <td>Estimated Time of Arrival (ETA)</td>
                                    <td><b>30th Oct, 2020</b></td>
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
                                    <td><b>Aba</b></td>
                                </tr>
                                <tr>
                                    <td>To</td>
                                    <td><b>Owerri</b></td>
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
                                    <td><b>Noble Okechi</b></td>
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
                                    <td><b>Destiny Bravos</b></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><b>destinybravos@gmail.com</b></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><b>+234 803 239 0858</b></td>
                                </tr>
                                 <tr>
                                    <td>Address</td>
                                    <td><b>Programmers City, Umuerim, Nekede, Owerri, Imo State</b></td>
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
                                    <td><b>This parcel is containing an iPhone 11 pro max with electronic gadgets</b></td>
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
                                    <td><b>8cm x 12cm x 10cm (13kg)</b></td>
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
                                <tr>
                                    <td>20th, Sep 2020</td>
                                    <td>11:20pm</td>
                                    <td>Parcel Reviewed and Logged in for Shipment</td>
                                    <td>Aba</td>
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
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="alert alert-success">
                            <p><b>Destiny Bravos</b>, your parcel is safely intransit and its currently at Aba</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>


<style scoped>
    #trackText{
        margin:7vh auto;
    }
    #trackText h2{
        font-weight: 900;
        font-size: 1.3rem;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        text-shadow:0 0 10px #261c6a;
        color: white;
        text-align: center;
    }
    .pTextBold{
        font-weight: bolder;
        font-size: 1.2em;
    }
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

    @media screen and (max-width: 767px) {
       #banText h2{
            font-size: 1.2rem;
        } 
        #banText{
            margin:3vh auto;
        }
    }
</style>

<script>
import BannerComponent from '../components/utils/BannerComponent.vue';

export default {
    components: {
        BannerComponent,
    }
}
</script>