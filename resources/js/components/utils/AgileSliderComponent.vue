<template>
    <div>
        <!-- Start -->
            <!-- For image slide -->
            <agile :nav-buttons="false" :autoplay-speed="timeInterval" :speed="(timeInterval / 3)" fade="fade" 
            pause-on-hover="pause-on-hover" pause-on-dots-hover="pause-on-dots-hover" 
            autoplay="autoplay" v-if="sliderType === 'images'">
                <img v-for="(imageSrc, index) in imageList" :key="index" :src="imageSrc" :alt="index" class="slide">
            </agile>
            <!-- For Container Slides -->
            <agile :nav-buttons="false" :autoplay-speed="timeInterval" :speed="(timeInterval / 3)" fade="fade" 
            pause-on-hover="pause-on-hover" pause-on-dots-hover="pause-on-dots-hover" 
            autoplay="autoplay"  v-if="sliderType === 'containers'">
                <div v-for="(imageSrc, index) in imageList" :key="index" class="slide slide-container"
                :style="`background-image: url(${imageSrc.image})`">
                    <section>
                        <h2>{{ imageSrc.caption }}</h2>
                        <p>
                            {{ imageSrc.sub_caption }}
                        </p>
                    </section>
                </div>
            </agile>
        <!-- End -->
    </div>
</template>

<style>
    .agile__dots {
    bottom: 10px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
            flex-direction: column;
    right: 30px;
    position: absolute;
    }
    .agile__dot {
    margin: 5px 0;
    }
    .agile__dot button {
    background-color: transparent;
    border: 1px solid #fff;
    cursor: pointer;
    display: block;
    height: 10px;
    font-size: 0;
    line-height: 0;
    margin: 0;
    padding: 0;
    -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
    width: 10px;
    }
    .agile__dot--current button, .agile__dot:hover button {
    background-color: #fff;
    }

    .slide {
    display: block;
    height: 500px;
    -o-object-fit: cover;
        object-fit: cover;
    width: 100%;
    }
    .slide-container{
        /* min-height: 400px; */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 0;
        display: flex;
        flex-direction: column-reverse;
        align-content: flex-end;
    }
    .slide-container section{
        font-weight: bolder;
        color: white;
        text-align: center;
        background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.3), rgba(0,0,0,0.6), rgba(0,0,0,0.9));
        padding: 100px 0 20px;
        text-shadow: 0 0 10px #000000;
    }
    .slide-container h2{
        font-weight: bolder;
        text-transform: uppercase;
        max-width: 90%;
        margin: auto;
    }
    .slide-container p{
        font-weight: normal;
        max-width: 90%;
        margin: auto;
        font-size: 1.2rem;
        margin-top: 10px;
    }
    @media screen and (max-width: 767px) {
        .agile__dots {
            display:none;
        }
    }

</style>

<script>
import { VueAgile } from 'vue-agile'
 
export default { 
    props:{
        imageList : Array,
        timeInterval:Number,
        sliderType:String
    },
    components: {
        agile: VueAgile 
    }
}
</script>