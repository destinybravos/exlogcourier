<template>
    <div id="index-component-div">
        <IndexBannerComponent></IndexBannerComponent>
        <IndexOfferCards></IndexOfferCards>
        <OurWorkDecription></OurWorkDecription>
    </div>
</template>


<script>
import IndexBannerComponent from '../components/indexPageUtils/IndexBannerComponent.vue';
import IndexOfferCards from '../components/indexPageUtils/IndexOfferCards.vue';
import OurWorkDecription from '../components/indexPageUtils/OurWorkDecription.vue';
export default {
    components: {
        IndexBannerComponent,
        IndexOfferCards,
        OurWorkDecription
    }
}
</script>