<template>
    <div id="index-component-div">
        <MainSlider></MainSlider>
        <IndexBannerComponent></IndexBannerComponent>
        <IndexOfferCards></IndexOfferCards>
        <OurWorkDecription></OurWorkDecription>
        <ServiceStatistics></ServiceStatistics>
        <RequestQuote></RequestQuote>
    </div>
</template>


<script>
import MainSlider from '../components/indexPageUtils/MainSliderComponent.vue';
import IndexBannerComponent from '../components/indexPageUtils/IndexBannerComponent.vue';
import IndexOfferCards from '../components/indexPageUtils/IndexOfferCards.vue';
import OurWorkDecription from '../components/indexPageUtils/OurWorkDecription.vue';
import ServiceStatistics from '../components/indexPageUtils/ServiceStatistic.vue';
import RequestQuote from '../components/indexPageUtils/RequestQuote.vue';
export default {
    components: {
        IndexBannerComponent,
        IndexOfferCards,
        OurWorkDecription,
        MainSlider,
        ServiceStatistics,
        RequestQuote
    }
}
</script>