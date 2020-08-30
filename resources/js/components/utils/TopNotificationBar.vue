<template>
    <div class="py-1" style="background-color:#261c6a; color: orange; text-align:center; font-size:1.2rem;">
        <p v-for="(data, index) in notifications" :key="index">
            {{ data.msg }}
        </p>
    </div>
</template>

<script>
import Api from "../../api/Api";

export default {
    data(){
        return {
            notifications : []
        }
    },
    mounted(){
        // Insert your api url from api.web file
        Api.client.post('/notification/check')
        .then((res)=>{
            this.displayNotification(res)
        })
        .catch((error)=>{
            console.log(error);
        });
    },
    methods : {
        displayNotification(response){
            if(response.data.count > 0){
                this.notifications = response.data.notification;
            }
        }
    }
}
</script>