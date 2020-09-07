<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="customModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customModalLabel"><strong>Parcel ID: </strong> {{ parcel.trackid }}</h5>
                <button @click="hideModal()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding:0;"  v-if="editMode == false" >
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Sender: </strong> {{ parcel.sname }}
                    </li>
                     <li class="list-group-item">
                        <strong>Receiver: </strong> {{ parcel.rname }}
                    </li>
                     <li class="list-group-item">
                        <strong>Recepient Address: </strong> {{ parcel.raddress }}
                    </li>
                     <li class="list-group-item">
                        <strong>Recepient Email: </strong> {{ parcel.remail }}
                    </li>
                </ul>
            </div>
            <!-- Editor Mode == True  then this modal body-->
            <div class="modal-body" v-else>
                <div class="form-group">
                    <label for="sender"><strong>Sender</strong></label>
                    <input type="text" class="form-control" v-model="parcel.sname">
                </div>
                <div class="form-group">
                    <label for="sender"><strong>Receiver</strong></label>
                    <input type="text" class="form-control" v-model="parcel.rname">
                </div>
                <div class="form-group">
                    <label for="sender"><strong>Recepient Address</strong></label>
                    <input type="text" class="form-control" v-model="parcel.raddress">
                </div>
                <div class="form-group">
                    <label for="sender"><strong>Recepient Email</strong></label>
                    <input type="text" class="form-control" v-model="parcel.remail">
                </div>
                <div class="form-group">
                    <label for="sender"><strong>Recepient Phone</strong></label>
                    <input type="text" class="form-control" v-model="parcel.rphone">
                </div>
                <div class="form-group">
                    <label for="sender"><strong>Description</strong></label>
                    <input type="text" class="form-control" v-model="parcel.description">
                </div>
                <div class="form-group">
                    <label for="sender"><strong>Dimension</strong></label>
                    <input type="text" class="form-control" v-model="parcel.dimension">
                </div>
                <div class="form-group">
                    <label for="sender"><strong>Current Location</strong></label>
                    <input type="text" class="form-control" v-model="parcel.clocation">
                </div>
                <div class="form-group">
                    <label for="sender"><strong>Parcel Stop Message</strong></label>
                    <input type="text" class="form-control" v-model="parcel.message">
                </div>
            </div>

            <div class="modal-footer">
                <button @click="hideModal()" type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                <button @click="editParcel()" v-if="editMode == false" type="button" class="btn btn-primary btn-sm">Edit Parcel Details</button>
                <button @click="saveParcelDetails()" v-else type="button" class="btn btn-success btn-sm">Save Change</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
import Api from "../../api/Api";
var token = $('meta[name=csrf_token]').attr('content')
export default {
    props:{
        isShow:Boolean,
        parcel: Object
    },
    data(){
        return{
            customModal:'',
            editMode: false

            // Returning form data for updating
            
        }
    },
    watch:{
        'isShow' : function (showState) {
            if(showState == true){
                this.displayModal();
            }else{
                this.hideModal();
            }
        }
    },
    mounted(){
         this.customModal = $('body #customModal');
         var _token = this.token;
    },
    methods:{
        displayModal(){
            this.customModal.modal('show');
        },
        hideModal(){
            this.$emit('hideModal', false);
            this.customModal.modal('hide');
        },
        saveParcelDetails(){
            // Update the parcel details
            let updateDate = {
                sname:this.parcel.sname,
                rname:this.parcel.rname,
                raddress:this.parcel.raddress,
                remail:this.parcel.remail,
                rphone:this.parcel.rphone,
                description:this.parcel.description,
                dimension:this.parcel.dimension,
                clocation:this.parcel.clocation,
                message:this.parcel.message,
                trackid:this.parcel.trackid,
                _token:this._token
            };

            Api.client.post('parcel/updateparcel',updateDate)
            .then((res)=>{
                this.returnResponse(res)
            });
            // Then turn off editors mode
            this.editMode = false;
        },

        returnResponse(response){
            if(response.data.status == 'success'){
                alert(response.data.message);
            }else{
                alert(response.data.message);
            }
        },
        editParcel(){
            // turn on editMode
            this.editMode = true;
        }
    }
}
</script>