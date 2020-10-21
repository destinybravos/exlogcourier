<template>
    <div id="home">
        <SideBarComponent :current-page="currentPage" @selectPage="loadMyPage($event)"></SideBarComponent>
        <!-- <DashboardHomeComponent :current-page="currentPage" @selectPage="loadMyPage($event)"></DashboardHomeComponent> -->
        <div id="dashboard_contents">
            <DashboardHome v-if="currentPage === 'dashboard'" @selectPage="loadMyPage($event)"></DashboardHome>
            <ContactManger v-if="currentPage === 'contact'"></ContactManger>
            <ParcelManager v-if="currentPage === 'parcel'"></ParcelManager>
            <RequestManager v-if="currentPage === 'request'"></RequestManager>
        </div>

    </div>
</template>

<style scoped>
    #dashboard_contents{
        margin-left: 250px;
    }
    @media screen and (max-width: 767px){
        #dashboard_contents{
            margin-left: 0;
        }
    }
</style>

<script>
import SideBarComponent from "../components/DashboardUtils/SideBarComponent.vue";
import DashboardHomeComponent from "../components/DashboardUtils/DashboardHomeComponent.vue";
import ContactManger from "../components/DashboardUtils/ContactManger.vue";
import ParcelManager from "../components/DashboardUtils/ParcelManager.vue";
import RequestManager from "../components/DashboardUtils/RequestManager.vue";

// I Imported additional Parcel Receipt Component
// import ParcelReceipt from "../components/DashboardUtils/ParcelReceipt.vue";

export default {
    components:{
        SideBarComponent,
        RequestManager,
        ParcelManager,
        ContactManger,
        DashboardHome : DashboardHomeComponent,
        // ParcelReceipt,

    },
    data(){
        return {
            currentPage : 'dashboard', 
        }
    },
    beforeMount(){
        let pageTracker = window.location.hash;
        if (pageTracker != '') {
            let activePage = '';
            let len = pageTracker.length;
            for (let i = 1; i < len; i++) {
                activePage += pageTracker[i];
            }
            this.currentPage = activePage;
        }
    },
    methods : {
        loadMyPage(page){
            window.location.hash = page;
            this.currentPage = page;
        }
    }
}
</script>