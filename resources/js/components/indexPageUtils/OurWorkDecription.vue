<template>
    <div id="our-work-desc" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="color:white;" id="dont_fret" data-aos="fade-left">
                    <h1>Don’t Fret, Over Freight!</h1>

                    <ul type="circle">
                        <li>
                            Trust Our Dedicated Services & Expansive Network Encompassing Road, Rail, Air and Ocean!
                        </li>
                        <li>
                            Express Logistics is built strongly with 97+ families and we work towards customer’s satisfaction.
                        </li>
                    </ul>

                    <h2>
                        <font-awesome-icon icon="phone-alt" pulse/> 
                        +44 7520635476
                    </h2>

                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="/img/air_cargo2.jpg" alt=" " style="max-width:100%;">
                </div>
            </div>
        </div>

    </div>
</template>

<style scoped>
    #our-work-desc{
        min-height: 300px;
        background-image: url('/img/shapes-dark.jpg');
        background-size: cover;
        background-position: center;
        padding: 5vh 0;
    }
    #dont_fret h1{
        font-weight: bolder;
        margin: 20px auto;
    }
    #dont_fret h2{
        font-weight: bolder;
        margin: 20px auto;
    }
    #dont_fret ul{
        font-size: 1.2rem;
        margin: 30px auto;
    }
</style>

<script>
import slider from '../utils/AgileSliderComponent.vue';
export default {
    components:{
        slider
    },
    data(){
        return{
            images: {
                image1: '/img/bg1.jpg',
                image2: '/img/bg2.jpg',
                image3: '/img/bg3.jpg'
            }
        }
    },
    beforeMount(){

    }
}
</script>