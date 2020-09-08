<template>
    <div class="container-fluid" id="banner" style="background-color:white !important;">
        <div class="row justify-content-left">
            <div class="col-md-4" id="text-side">
                <div id="banText">
                    <h2>
                        <span v-for="(name, i) in pages" :key="i">
                            <span v-if="i == pageName">{{name}}</span>
                        </span>
                    </h2>
                </div>
            </div>
            <div class="col-md-7"></div>
        </div>
    </div>
</template>

<style scoped>
    #banText{
        margin:7vh auto;
    }
    #banText h2{
        font-weight: 900;
        font-size: 1.7rem;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        text-shadow:0 0 10px #261c6a;
        color: white;
    }
    #banText p{
        font-size: 1.23rem;
        color: #261c6a;
    }
    #banner{
        background-image: url('/img/bg1.jpg');
        background-size: cover;
        background-position: right 50%;
        background-repeat: no-repeat;
    }

    #text-side{
        background-color: #261c6ae3;
        clip-path: polygon(0% 100%, 0% 0%, 100% 0%, 80% 100%);
    }
    

    @media screen and (max-width: 767px) {
       #banText h2{
            font-size: 1.2rem;
        } 
        #banText{
            margin:3vh auto;
        }
    }
</style>

<script>
export default {
    props: {
        pageName: String
    },
    data(){
        return {
            pages: {
                about : 'About Our Services',
                contact : 'Our Contact Channels',
                gallery : 'Express Services',
                tracking : 'Parcel Status Details',
            },
        }
    },
}
</script>