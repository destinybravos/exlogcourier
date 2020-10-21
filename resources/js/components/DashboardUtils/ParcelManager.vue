<template>
    <div id="parcel_manager">
        <div class="container top_page_hd">
            <div class="row pt-3 pb-2">
                <div class="col-md-12">
                    <h2>
                        <font-awesome-icon icon="truck" />
                        Parcel Manager
                    </h2>
                </div>
            </div>
        </div>
        <div class="container mt-5">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#parcellist" role="tab" aria-controls="nav-list" aria-selected="true">Parcel List</a>
                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#addparcel" role="tab" aria-controls="nav-parcel" aria-selected="false">Add Parcel</a>
                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#parcelreceipt" role="tab" aria-controls="nav-receipts" aria-selected="false">Manage Receipts</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="parcellist" role="tabpanel" aria-labelledby="nav-list-tab">
                    <ParcelListComponent></ParcelListComponent>
                </div>
                <div class="tab-pane fade" id="addparcel" role="tabpanel" aria-labelledby="nav-parcel-tab">
                    <AddParcelComponent></AddParcelComponent>
                </div>
                <div class="tab-pane fade" id="parcelreceipt" role="tabpanel" aria-labelledby="nav-receipts-tab">
                    <!-- Import the receipts component here -->
                    <ParcelReceiptComponent></ParcelReceiptComponent>
                </div>
            </div>

        </div>

    </div>
</template>

<style scoped>
    label{
        font-weight: bold;
    }
    .top_page_hd{
        background-color: #ff8929;
    }
    .top_page_hd h2{
        font-weight: bold;
        font-size: 1.3rem;
        color: white;
        text-shadow: 0 0 12px #e96901;
    }
    @media screen and (max-width:640px) {
        #nav-tab a{
            font-size: 0.8rem;
        }
    }
</style>

<script>
// I Imported additional Parcel Receipt Component
import AddParcelComponent from '../trackingPageUtils/AddParcel.vue';
import ParcelListComponent from '../trackingPageUtils/ParcelList.vue';
import ParcelReceiptComponent from '../trackingPageUtils/ParcelReceipt.vue';
    export default {
        components:{
            AddParcelComponent,
            ParcelListComponent,
            ParcelReceiptComponent,
        },
        
    }
</script>