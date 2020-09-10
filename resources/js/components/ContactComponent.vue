<template>
    <div id="contact-component-div">
        <BannerComponent page-name="contact"></BannerComponent>
        <ContactDetails></ContactDetails>
        <RequestQuote></RequestQuote>
    </div>
</template>


<script>
import BannerComponent from '../components/utils/BannerComponent.vue';
import ContactDetails from '../components/ContactPageUtils/ContactDetails.vue';
import RequestQuote from '../components/indexPageUtils/RequestQuote.vue';

export default {
    components: {
        BannerComponent,
        ContactDetails,
        RequestQuote
    }
}
</script>
