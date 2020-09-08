<template>
    <div id="index-component-div">
        <BannerComponent page-name="gallery"></BannerComponent>
        <ServicesPageComponent></ServicesPageComponent>
    </div>
</template>


<script>
import BannerComponent from '../components/utils/BannerComponent.vue';
import ServicesPageComponent from '../components/ServicesPageUtil/ServicesPageComponent.vue';

export default {
    components: {
        BannerComponent,
        ServicesPageComponent
    }
}
</script>