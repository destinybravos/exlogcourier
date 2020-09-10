<template>
    <div id="dashboard_home">
        <div class="container top_page_hd mb-3">
            <div class="row pt-3 pb-2">
                <div class="col-md-12">
                    <h2>
                        <font-awesome-icon icon="clipboard-list" />
                        Request Manager
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <th>Client Name</th>
                                    <th class="display-lg">Email</th>
                                    <th>Logistic Type</th>
                                </tr>
                                <tr style="cursor:pointer;" v-for="(request, index) in requests" :key="index" @click="showRequestDetails(request)">
                                    <td>{{ request.fullname }}</td>
                                    <td class="display-lg">{{ request.email }}</td>
                                    <td>{{ request.type }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <RequestModal :request="selectedRequest" :is-show="modalShowState" @hideModal="modalShowState = $event" />
    </div>
</template>

<script>
var token = $('meta[name=csrf-token]').attr('content');
import Api from "../../api/Api";
import RequestModal from "../utils/RequestModalComponent.vue";

export default {
    components:{
        RequestModal
    },
    data(){
        return{
            requests: {},
            selectedRequest:{},
            errors: '',
            modalShowState:false
        }
    },
    mounted(){
        this.fetchRequests();
    },
    methods: {
        showRequestDetails(request){
            this.selectedRequest = request;
            this.modalShowState = true;
        },
        fetchRequests(){
            let data = {
                _token: token
            };
            Api.client.post('/requests/fetch_all', data)
            .then((res) => {
                this.handleRequests(res);
            })
            .catch((errors) => {
                this.handleError(errors);
            });
        },
        handleRequests(response_data){
            this.requests = response_data.data;
        },
        handleError(errorsObj){
            // Review if the error object is correct (Has response)
            this.errors = errorsObj.response;
            console.log(this.errors);
        }
    }
}
</script>
<style scoped>
    .top_page_hd{
        background-color: #ff8929;
    }
    .top_page_hd h2{
        font-weight: bold;
        font-size: 1.3rem;
        color: white;
        text-shadow: 0 0 12px #e96901;
    }
</style>
