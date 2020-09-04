<template>
    <div>
        <div class="table-responsive mt-1">
            <table class="table table-hover table-striped">
                <tbody>
                    <tr>
                        <th></th>
                        <th>Parcel ID</th>
                        <th>Reciever</th>
                        <th class="display-lg">Sender</th>
                    </tr>
                    <tr style="cursor:pointer;" v-for="(parcel, index) in parcels" :key="index">
                        <td>
                            <font-awesome-icon icon="eye" size="1x" class="text-success mx-1"/> 
                            <!-- <font-awesome-icon icon="edit" size="1x" class="text-primary mx-2"/>  -->
                            <font-awesome-icon icon="trash" size="1x" class="text-danger mx-1"/> 
                        </td>
                        <td @click="showParcelDetailsModal(parcel)">{{ parcel.trackid }}</td>
                        <td @click="showParcelDetailsModal(parcel)">{{ parcel.rname }}</td>
                        <td  @click="showParcelDetailsModal(parcel)" class="display-lg">{{ parcel.sname }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <ParcelModalComponent :parcel="selectedParcel" :is-show="modalShowState" @hideModal="hideParcelDetailsModal($event)"></ParcelModalComponent>
    </div>
</template>

<script>
var token = $('meta[name=csrf-token]').attr('content');
import Api from "../../api/Api";
import ParcelModalComponent from "../utils/ParcelModalComponent.vue";

export default {
    components:{
        ParcelModalComponent,
    },
    data(){
        return{
            parcels: [],
            modalShowState:false,
            selectedParcel: {}
        }
    },
    mounted(){
        this.fetchAllParcels();
    },
    methods:{
        fetchAllParcels(){
            let data = {
                _token: token
            };

            Api.client.post('/parcel/fetch_all', data)
            .then((res) => {
                this.handleParcel(res);
            })
            .catch((errors) => {
                this.handleError(errors);
            });
        },
        handleParcel(response){
            this.parcels = response.data
            console.log(response);
        },
        handleError(errorsObj){
            // Review if the error object is correct (Has response)
            this.errors = errorsObj.response;
            console.log(this.errors);
        },
        showParcelDetailsModal(parcel){
            this.selectedParcel = parcel;
            this.modalShowState = true;
        },
        hideParcelDetailsModal(state){
            this.modalShowState = state;
        }
    }
}
</script>

<style>
    @media screen and (max-width: 767px){
        .display-lg{
            display: none;
        }
    }
</style>