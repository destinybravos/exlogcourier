<template>
    <div id="index-component-div">
        <BannerComponent page-name="about"></BannerComponent>

        <div class="container mainContainer">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <h3 class="h3Text"> WE PROVIDE BEST <br> INTERNATIONAL FREIGHT &</h3>
                        <h2 class="h2Text">EXPRESS LOGISTICS</h2>
                    </div>
                    <div class="mt-4">
                        <h5 class="h5Text">
                            Express Logistics Courier Services provide standard domestic and international parcel pick-up, delivery and return solutions for business customers and consumers
                        </h5>
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/img/flight.png" class="iconImg">
                                    <span class="spanText">Air Transports</span>
                                </div>
                                <div class="col-4">
                                    <img src="/img/truck.png" class="iconImg">
                                    <span  class="spanText">Cargo Truck</span>
                                </div>
                                <div class="col-4">
                                    <img src="/img/ship.png" class="iconImg">
                                    <span  class="spanText">Sea Freight</span>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 pText">
                            Backed by our strong group network and experience, Express Logistics Courier Services offer a full range of cross-border shipping services covering more than 220 countries across the globe.
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card cardImg">
                        <img src="/img/bg3.jpg" class="  card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <!-- Index Offer Card Import -->
        <IndexOfferCards></IndexOfferCards>

        <div class="container-fluid" id="abtContainerFluid">
            <div class="container">

                <div class="row abtServiceRow">
                    <div class="col-md-6">
                         <img src="/img/bg-2.png" class="card-img-top">
                    </div>
                    <div class="col-md-6">
                        <h1 class="h1Text">
                            Fast and Safe Transport Service
                            Specialized heavy-Duty Vehicles
                            Shipping Services & Logistics Management
                        </h1>
                        <p class="mt-3">
                            From Packages to Pallets, whether you need a document rushed across town or an urgent part delivered to your plant.
                        </p>
                        <div>
                            <h5><img src="/img/flight.png" class="iconImg"> <span>International Transport </span></h5>
                            <h5><img src="/img/truck.png" class="iconImg"> <span>Truck Logistics Service</span></h5>
                            <h5><img src="/img/ship.png" class="iconImg"> <span>Sea Shipping Freight</span></h5>
                            <h5><img src="/img/bg-2.png" class="iconImg"> <span>Cargo Delivery Service</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <OurWorkDecription></OurWorkDecription> -->
</template>


<style scoped>
    .mainContainer{
        margin-top: 100px;
        margin-bottom: 50px;
    }
    .h3Text{
        font-size: 1.4em;
    }
    .h2Text{
        font-weight: bolder;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 3.0em;
    }
    .h5Text{
        /* font-weight: bold; */
        font-size: 1.2em;
        text-transform: uppercase;
        color: #3d3072;
        /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
    }
    .pText{
        line-clamp: 0;
    }
    .cardImg{
         box-shadow: 0 0 60px #0d04442d;
    }
    .iconImg{
        width: 70px;
        height: 60px;
    }
    #abtContainerFluid{
        background-color: #f8ebe2;
        padding: 40px auto;
    }
    .abtServiceRow{
        padding: 40px 0;
    }
    .h1Text{
        font-weight: bolder;
        color: #3d3072;
    }


    @media screen and (max-width: 520px){
        .spanText{
            display:block;
        }
        .mainContainer{
            margin-top: 70px;
        }
        .h2Text{
        font-size: 2.0em;
        }
    }
</style>

<script>
import BannerComponent from '../components/utils/BannerComponent.vue';
import IndexOfferCards from '../components/indexPageUtils/IndexOfferCards.vue';
// import OurWorkDecription from '../components/indexPageUtils/OurWorkDecription.vue';

export default {
    components: {
        BannerComponent,
        IndexOfferCards,
    }
}
</script>