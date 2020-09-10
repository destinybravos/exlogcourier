<template>
    <div class="container-fluid bg-light" style="min-height: 300px; background-color:white !important;">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div id="banText">
                    <h2 class="mb-5" data-aos="fade-right">
                        Express Logistics and Speedy Courier Delivery
                    </h2>
                    <p class="mb-5" data-aos="fade-right">
                        worldwide freight forwarding, logistics and courier services
                    </p>
                    <a href="/services" class="btn mb-2" id="btn-request" data-aos="fade-right">
                        SEE OUR SERVICES
                    </a>
                    <p id="tagged" data-aos="fade-right">
                        <label>Speedy Delivery</label>
                        <span>.</span>
                        <label>Reliable Services</label>
                    </p> 
                </div>
            </div>

            <div class="col-lg-5" id="banImg" data-aos="fade-left">
                <img src="/img/bg2.jpg" alt=" " style="max-width:100%; padding:20px;">
            </div>
        </div>
    </div>
</template>

<style scoped>
    #banText{
        max-width:500px; margin:7vh auto;
    }
    #banText h2{
        font-weight: 900;
        font-size: 2.5rem;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        color:#261c6a;
    }
    #banText p{
        font-size: 1.23rem;
        color: #261c6a;
    }
    /* #banImg{
        min-height: 400px;
    } */
    #btn-request{
        background-color: #ff7900;
        border: none;
        border-radius: 100px;
        padding: 0.3rem 1rem;
        color: white;
        font-weight: 900;
        font-size: 1.2rem;
        box-shadow: 0 0 20px rgba(179, 109, 12, 0.377);
    }
    #btn-request:hover{
        box-shadow: 0 0 30px rgba(179, 109, 12, 0.377);
    }
    #tagged{
        font-size: 1rem !important;
        font-weight: bold;
    }
    #tagged label{
        border-bottom: thin solid #261c6a;
        margin: auto 10px;
    }
    #tagged span{
        font-size: 2rem;
    }

    @media screen and (max-width: 767px) {
        #banText{
            text-align: center;
        }
        #banText h2{
            font-size: 2rem;
        }
        #btn-request{
            padding: 0.7rem 1.2rem;
            font-size: 0.8rem;
        } 
    }
</style>

<script>
export default {
    components:{
        
    },
    data(){
        return{
        }
    },
}
</script>