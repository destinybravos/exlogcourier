<template>
    <div>
        <form @submit.prevent="saveNotification()">
            <div class="form-group">
                <textarea cols="30" rows="10" class="form-control" v-model="not_msg"></textarea>
            </div>

            
            <div class="form-group">
                <button type="submit">
                    Save 
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import Api from "../../api/Api";
export default {
    data(){
        return{
            not_msg : ''
        }
    },
    methods: {
        saveNotification(){
            let data = {
                msg: this.not_msg
            }

            Api.client.post('/notification/create', data)
            .then((res) => {
                this.handleSaveSuccess(res)
            });
        },
        handleSaveSuccess(response){
            if(response.data.status == 'successfull'){
                alert(response.data.message);
            }else{
                alert(response.data.message);
            }
        }
    }
}
</script>