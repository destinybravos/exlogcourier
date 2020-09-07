<template>
    <div>
        <slider :image-list="images" :time-interval="9000" :slider-type="sliderType"></slider>
    </div>
</template>
<script>
import slider from '../utils/AgileSliderComponent.vue';
export default {
    components:{
        slider
    },
    data(){
        return{
            images: [
                {
                    image: '/img/bg1.jpg', 
                    caption:'Ocean Freight', 
                    sub_caption:'Express Logistics transport your bulky and gigantic cargo through water ways, eclipsing territories and regions.'
                },
                {
                    image: '/img/warehouse_trucks.png', 
                    caption:'Logistics Management',
                    sub_caption:'For us, moving your consignment from one destination to the other is equivalent to ensuring your reputation, travels far and wide, unblemished.'
                },
                {
                    image: '/img/air_freight.jpg', 
                    caption:'International Air Freight', 
                    sub_caption:'Our Air Freight service provides top notch, hassle free and timely movement for all your consignments at very competitive rates.'
                },
                {
                    image: '/img/truck_on_go.jpg', 
                    caption:'Courier Trucks on the go', 
                    sub_caption:'Need a fleet of trucks to transport containers from your manufacturing unit to the dock or airport? We are here for you!'},
            ],
            sliderType:'containers'
        }
    },
}
</script>