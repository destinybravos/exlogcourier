<template>
    <div id="contact-component-div">
        <BannerComponent page-name="contact"></BannerComponent>
        <ContactDetails></ContactDetails>
    </div>
</template>


<script>
import BannerComponent from '../components/utils/BannerComponent.vue';
import ContactDetails from '../components/ContactPageUtils/ContactDetails.vue';

export default {
    components: {
        BannerComponent,
        ContactDetails,
    }
}
</script>
