<template>
    <div id="index-component-div">
        <BannerComponent page-name="tracking"></BannerComponent>
        <TrackingInputComponent></TrackingInputComponent>
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
import TrackingInputComponent from '../components/trackingPageUtils/TrackingInputComponent.vue';

export default {
    components: {
        BannerComponent,
        TrackingInputComponent,
    }
}
</script>