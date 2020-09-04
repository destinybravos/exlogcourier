<template>
    <div id="our-work-desc" class="">
        
        <div class="container">
            <!-- <div class="col-md-7">
                
            </div> -->
            <div class="col-md-12">
                <slider :image-list="images"></slider> 
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
        padding: 10vh 0;
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