<template>
    <div>
        <div class="container mainContainer">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <h3 class="h3Text" data-aos="fade-right"> WE PROVIDE BEST <br> INTERNATIONAL FREIGHT &</h3>
                        <h2 class="h2Text" data-aos="fade-right">EXPRESS LOGISTICS</h2>
                    </div>
                    <div class="mt-4">
                        <div class="card shadow" data-aos="fade-right">
                            <div class="card-body shadw">
                                <h5 class="h5Text">
                                    Express Logistics Courier Services provide standard domestic and international parcel pick-up, delivery and return solutions for business customers and consumers
                                </h5>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/img/flight.png" class="iconImg" data-aos="zoom-in">
                                    <span class="spanText" data-aos="fade-left">Air Transports</span>
                                </div>
                                <div class="col-4">
                                    <img src="/img/truck.png" class="iconImg"  data-aos="zoom-in">
                                    <span  class="spanText" data-aos="fade-left">Cargo Truck</span>
                                </div>
                                <div class="col-4">
                                    <img src="/img/ship.png" class="iconImg" data-aos="zoom-in">
                                    <span  class="spanText" data-aos="fade-left">Sea Freight</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-5" data-aos="zoom-in">
                    <div class="card cardImg">
                        <img src="/img/truck_on_go.jpg" class="  card-img-top">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="our-work-desc">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-3" data-aos="fade-right">
                        <img src="/img/warehouse_trucks.png" alt=" " style="max-width:100%;">
                    </div>
                    <div class="col-md-6 mt-3" data-aos="fade-left">
                        <div class="hdCaption">
                            <h1>Our Mission</h1>
                        </div>
                        <p class="mt-3 pText text-light">
                            As a leading provider of air transportation, Express Logistics and Courier is here to provide you a fast delivery service down to your door steps.
                        </p>
                        <p class="mt-3 pText text-light">
                            Backed by our strong group network and experience, Express Logistics Courier Services offer a full range of cross-border shipping services covering more than 220 countries across the globe.
                        </p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6" data-aos="fade-right">
                        <div class="hdCaption">
                            <h1 class="">How Do We Work?</h1>
                        </div>
                        <p class="mt-3 pText text-light">
                            From Packages to Pallets, whether you need a document rushed across town or an urgent part delivered to your plant.
                        </p>
                        <p class="mt-3 pText text-light">
                            Express Logistics Courier Services offers a wide range of delivery options that will meet any budget. No distance is too far and no job is too big.
                        </p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="/img/bg3.jpg" alt=" " style="max-width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .mainContainer{
        margin-top: 100px;
        margin-bottom: 50px;
    }
    .h3Text{
        font-size: 1.4em;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
    }
    .h2Text{
        font-weight: bolder;
        font-family: "Arial Black", Gadget, sans-serif;
        font-size: 3.2em;
    }
    .h5Text{
        /* font-weight: bold; */
        font-size: 1.2em;
        text-transform: uppercase;
        color: #3d3072;
        /* font-family: "Lucida Console", Monaco, monospace; */
        /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
    }
    .pText{
        line-clamp: 0;
        /* font-family: "Trebuchet MS", Helvetica, sans-serif; */
        font-size: 1.2em;
    }
    .cardImg{
         box-shadow: 0 0 60px #0d04442d;
    }
    .iconImg{
        width: 70px;
        height: 60px;
    }
    #abtContainerFluid{
        background-color: #f7d1a6;
        padding: 40px auto;
    }
    .abtServiceRow{
        padding: 40px 0;
    }
    .h1Text{
        font-weight: bolder;
        color: #3d3072;
    }
    h5 span{
        font-weight: bold;
    }
    #our-work-desc{
        min-height: 300px;
        background-image: url('/img/shapes-dark.jpg');
        background-size: cover;
        background-position: center;
        padding: 5vh 0;
    }
    #our-work-desc h1{
        font-weight: bolder;
        margin-top: 5px;
    }
    .hdCaption{
        background-color: #fa992b;
        padding: 7px 10px;
        color: #fff;
    }
    .lastDivP{
        /* font-family: "Trebuchet MS", Helvetica, sans-serif; */
    }


    @media screen and (max-width: 520px){
        .spanText{
            display:block;
        }
        .mainContainer{
            margin-top: 70px;
        }
        .h2Text{
        font-size: 2.0em;
        }
    }
</style>