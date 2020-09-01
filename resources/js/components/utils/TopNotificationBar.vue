<template>
    <div class="py-1" id="top_notification">
        <p v-for="(data, index) in notifications" :key="index">
            {{ data.msg }}
        </p>
    </div>
</template>

<style scoped>
    *{
        margin: 0;
        padding: 0;
    }
    #top_notification{
        background-color:#261c6a;
        color: white;
        text-align:center;
        font-size:1rem;
    }
    #top_notification p{
        padding: 0.5rem;
        max-width: 90%;
        margin: auto;
    }
</style>

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
