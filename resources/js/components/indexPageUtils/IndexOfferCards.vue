<template>
    <div id="index-offer-card" class="pt-3 pb-5">
        <h2 class="mt-5 mb-1 py-5">
            What we Offer as our Service<i>!</i>
        </h2>

        <!-- Cards Structure -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 card-container">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image-container">
                                <img src="/img/bg1.jpg" alt="">
                            </div>
                            <h4 class="card-title mt-4 mb-4">
                                Quality Services at Affordable Price
                            </h4>
                            <p class="mt-4 mb-3">
                                Our prices in as much as they are competitively on the low side, we still 
                                offer top notch services that our peers are finding it difficult to keep up.
                            </p>
                            <button id="btn-action" class="my-2">
                                Request Service
                                <img src="/img/arrow-right.svg" alt=" ">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-container">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image-container">
                                <img src="/img/bg1.jpg" alt="">
                            </div>
                            <h4 class="card-title mt-4 mb-4">
                                Quality Services at Affordable Price
                            </h4>
                            <p class="mt-4 mb-3">
                                Our prices in as much as they are competitively on the low side, we still 
                                offer top notch services that our peers are finding it difficult to keep up.
                            </p>
                            <button id="btn-action" class="my-2">
                                Request Service
                                <img src="/img/arrow-right.svg" alt=" ">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 card-container">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-image-container">
                                <img src="/img/bg1.jpg" alt="">
                            </div>
                            <h4 class="card-title mt-4 mb-4">
                                Quality Services at Affordable Price
                            </h4>
                            <p class="mt-4 mb-3">
                                Our prices in as much as they are competitively on the low side, we still 
                                offer top notch services that our peers are finding it difficult to keep up.
                            </p>
                            <button id="btn-action" class="my-2">
                                Request Service
                                <img src="/img/arrow-right.svg" alt=" ">
                            </button>
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
    #index-offer-card h2{
        font-weight: 900;
        font-size: 2.5rem;
        color:#261c6a;
        text-align: center;
    }
    .card-image-container{
        width: 250px;
        height: 250px;
        overflow: hidden;
        border-radius: 100%;
        display: flex;
        margin: 10px auto;
    }
    .card{
        border: none;
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
        box-shadow: 0 15px 35px -15px rgba(78,34,208,0.7),0 15px 35px -15px rgba(12,5,62,0.3);
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