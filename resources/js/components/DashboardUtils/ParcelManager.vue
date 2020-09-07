<template>
    <div id="parcel_manager">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bg-success">
                    <h2>Parcel Page</h2>
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