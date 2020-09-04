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
                </ul>
            </div>
            <!-- Editor Mode == True  then this modal body-->
            <div class="modal-body" v-else>
                <div class="form-group">
                    <label for="sender"><strong>Sender</strong></label>
                    <input type="text" class="form-control" v-model="parcel.sname">
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

export default {
    props:{
        isShow:Boolean,
        parcel: Object
    },
    data(){
        return{
            customModal:'',
            editMode: false
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

            // Then turn off editors mode
            this.editMode = false;
        },
        editParcel(){
            // turn on editMode
            this.editMode = true;
        }
    }
}
</script>