<template>
    <div>
        <!-- Start -->
            <agile :nav-buttons="false" :autoplay-speed="5000" :speed="10000" fade="fade" 
            pause-on-hover="pause-on-hover" pause-on-dots-hover="pause-on-dots-hover" 
            autoplay="autoplay">
                <img v-for="(imageSrc, index) in imageList" :key="index" :src="imageSrc" :alt="index" class="slide">
                <!-- <img class="slide" src="https://images.unsplash.com/photo-1509549649946-f1b6276d4f35?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ"/>
                <img class="slide" src="https://images.unsplash.com/photo-1511469054436-c7dedf24c66b?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjEyMDd9"/>
                <img class="slide" src="https://images.unsplash.com/photo-1511135232973-c3ee80040060?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjEyMDd9"/>
                <img class="slide" src="https://images.unsplash.com/photo-1511231683436-44735d14c11c?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjEyMDd9"/>
                <img class="slide" src="https://images.unsplash.com/photo-1517677129300-07b130802f46?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjEyMDd9"/> -->
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

</style>

<script>
import { VueAgile } from 'vue-agile'
 
export default { 
    props:{
        imageList : Object,
    },
    components: {
        agile: VueAgile 
    }
}
</script>