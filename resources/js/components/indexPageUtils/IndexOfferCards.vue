<template>
    <div id="index-offer-card" class="pt-3 pb-5">
        <section >
            <h2 class="mt-5" data-aos="fade-up">  
                Your Consignment => Our Commitment!
            </h2>
            <p class="my-3" data-aos="fade-up">
                For us moving your consignment from one destination to the other is equivalent to ensuring your reputation, travels far and wide, unblemished.
            </p>
        </section>

        <!-- Cards Structure -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 card-container" data-aos="fade-up">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image-container">
                                <img src="/img/bg1.jpg" alt="">
                            </div>
                            <h4 class="card-title mt-4 mb-4">
                                OCEAN FREIGHTS
                            </h4>
                            <p class="mt-4 mb-3">
                                We provides a holistic solution to transport your bulky and gigantic 
                                cargo through water ways, eclipsing territories and regions..
                            </p>
                            <a href="/services#ocean_frieght" id="btn-action" class="btn my-2">
                                View Service
                                <img src="/img/arrow-right.svg" alt=" ">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-container" data-aos="fade-up"
                                                    data-aos-easing="linear"
                                                    data-aos-duration="500">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image-container">
                                <img src="/img/truck2.jpg" alt="">
                            </div>
                            <h4 class="card-title mt-4 mb-4">
                                ROAD / RAIL FREIGHTS
                            </h4>
                            <p class="mt-4 mb-3">
                                We offer express delivery services via road/rail because we have an expansive network of 
                                owned and leased vehicles, capable of safe and timely deliveries.
                            </p>
                            <a href="/services#road_frieght" id="btn-action" class="btn my-2">
                                View Service
                                <img src="/img/arrow-right.svg" alt=" ">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-container" data-aos="fade-up"
                                                data-aos-offset="300"
                                                data-aos-easing="ease-in-sine">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image-container">
                                <img src="/img/air_cargo.jpg" alt="">
                            </div>
                            <h4 class="card-title mt-4 mb-4">
                                AIR FREIGHTS
                            </h4>
                            <p class="mt-4 mb-3">
                                Our Air Freight service provides, top notch, hassle free and timely movement for all your 
                                consignments at very competitive rates..
                            </p>
                            <a href="/services#air_frieght" id="btn-action" class="btn my-2">
                                View Service
                                <img src="/img/arrow-right.svg" alt=" ">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    #index-offer-card{
        background-color: white !important;
        text-align: center;
    }
    #index-offer-card section{
        max-width: 93%;
        margin: auto auto 50px;
    }
    #index-offer-card h2{
        font-weight: 900;
        /* font-size: 2.5rem; */
        color:#261c6a;
        text-align: center;
    }
    #index-offer-card section p{
        font-size: 1.2rem;
    }
    .card-image-container{
        width: 250px;
        height: 250px;
        overflow: hidden;
        border-radius: 100%;
        display: flex;
        margin: 10px auto;
        align-content: center;
        align-items: center;
    }
    .card-image-container img{
        min-height: 100%;
    }
    .card{
        border: none;
        transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
    }
    
    .card:hover{
        box-shadow: 0 0 40px #0d04442d;
    }
    .card-title{
        font-weight: 900;
        color:#261c6a;
    }
    .card:hover .card-title, .card:hover .card p{
        color: #25129c;
    }
    .card:hover #btn-action{
        color: #fff;
        background-color:  #25129c;
    }
    #index-offer-card .card p{
        text-align:center; font-size:1rem;
        color: #181146;
    }
    #btn-action{
        box-shadow: 0 15px 15px -15px rgba(78,34,208,0.7),0 15px 35px -15px rgba(12,5,62,0.3);
        outline: none;
        background-color: #fff;
        color:  #25129c;
        border-radius: 50px;
        border: 2px solid #25129c;
        padding: 0.5rem 1.3rem;
        font-size: 1rem;
    }
</style>

<script>


export default {
    
}
</script>