<template>
    <div id="index-component-div">
        <MainSlider></MainSlider>
        <IndexBannerComponent></IndexBannerComponent>
        <MissionComponent></MissionComponent>
        <IndexOfferCards></IndexOfferCards>
        <OurWorkDecription></OurWorkDecription>
        <ServiceStatistics></ServiceStatistics>
        <ServicesPageComponent></ServicesPageComponent>
        <RequestQuote></RequestQuote>
        <div class="container-fluid" id="abtContainerFluid">
            <div class="container">

                <div class="row abtServiceRow">
                    <div class="col-md-6 mt-5" data-aos="fade-right">
                         <img src="/img/bg-2.png" class="card-img-top">
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <h1 class="h1Text">
                            Fast and Safe Transport Service
                            Specialized heavy-Duty Vehicles
                            Shipping Services & Logistics Management
                        </h1>
                        <p class="mt-3 lastDivP">
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
</template>


<script>
import MainSlider from '../components/indexPageUtils/MainSliderComponent.vue';
import IndexBannerComponent from '../components/indexPageUtils/IndexBannerComponent.vue';
import IndexOfferCards from '../components/indexPageUtils/IndexOfferCards.vue';
import OurWorkDecription from '../components/indexPageUtils/OurWorkDecription.vue';
import ServiceStatistics from '../components/indexPageUtils/ServiceStatistic.vue';
import RequestQuote from '../components/indexPageUtils/RequestQuote.vue';
import MissionComponent from '../components/AboutPageUtils/MissionComponent';
import ServicesPageComponent from '../components/ServicesPageUtil/ServicesPageComponent.vue';
export default {
    components: {
        IndexBannerComponent,
        IndexOfferCards,
        OurWorkDecription,
        MainSlider,
        ServiceStatistics,
        RequestQuote,
        MissionComponent,
        ServicesPageComponent
    }
}
</script>


<style scoped>
    .mainContainer{
        margin-top: 100px;
        margin-bottom: 50px;
    }
    .h3Text{
        font-size: 1.4em;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
    }
    .h2Text{
        font-weight: bolder;
        font-family: "Arial Black", Gadget, sans-serif;
        font-size: 3.2em;
    }
    .h5Text{
        /* font-weight: bold; */
        font-size: 1.2em;
        text-transform: uppercase;
        color: #3d3072;
        /* font-family: "Lucida Console", Monaco, monospace; */
        /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
    }
    .pText{
        line-clamp: 0;
        /* font-family: "Trebuchet MS", Helvetica, sans-serif; */
        font-size: 1.2em;
    }
    .cardImg{
         box-shadow: 0 0 60px #0d04442d;
    }
    .iconImg{
        width: 70px;
        height: 60px;
    }
    #abtContainerFluid{
        background-color: #f7d1a6;
        padding: 40px auto;
    }
    .abtServiceRow{
        padding: 40px 0;
    }
    .h1Text{
        font-weight: bolder;
        color: #3d3072;
    }
    h5 span{
        font-weight: bold;
    }
    #our-work-desc{
        min-height: 300px;
        background-image: url('/img/shapes-dark.jpg');
        background-size: cover;
        background-position: center;
        padding: 5vh 0;
    }
    #our-work-desc h1{
        font-weight: bolder;
        margin-top: 5px;
    }
    .hdCaption{
        background-color: #fa992b;
        padding: 7px 10px;
        color: #fff;
    }
    .lastDivP{
        /* font-family: "Trebuchet MS", Helvetica, sans-serif; */
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