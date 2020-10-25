<template>
    <div id="services_stat">
        <div class="container py-2">
            <div class="row my-5 mx-auto" id="top_stat_hd">
                <div class="col-md-12" data-aos="fade-up">
                    <h2>
                        Express Logistics and Courier Services
                    </h2>
                    <p>
                        We provide standard domestic and international parcel pick-up, delivery and return solutions 
                        for business customers and consumers.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3" id="stat_side" data-aos="fade-right">
                    <aside class="mb-5">
                        <h1>{{ statistics.customers }}</h1>
                        <span>
                            Clients/Customers
                        </span>
                    </aside>
                    <aside class="mb-5">
                        <h1>{{ statistics.branches }}</h1> 
                        <span>
                            Branches
                        </span>
                    </aside>
                    <aside>
                        <h1>{{ statistics.vehicles }}</h1>
                        <span>
                            Owned Vehicles 
                        </span>
                    </aside>
                </div>
                <div class="col-md-9" data-aos="zoom-in">
                    <img src="/img/logistic_vehicles.jpg" alt=" " style="max-width:100%;">
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
    #services_stat{
        background-color: #ffffff; 
    }
    #top_stat_hd{
        text-align: center;
    }
    #top_stat_hd h2{
        color: #261c6a;
        font-weight: bolder;
    }
    #top_stat_hd p{
        font-size: 1.2rem;
    }
    #stat_side{
        text-align:center;
    }
    
</style>

<script>
export default {
    data(){
        return {
            statistics:{
                customers: 0,
                vehicles: 0,
                branches: 0
            },
            interval: false,
            actualStat:{
                customers: 16400,
                vehicles: 574,
                branches: 814
            }
        }
    },
    created () {
        window.addEventListener('scroll', this.handleScroll);
    },
    destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
    },
    methods: {
        handleScroll () {
        let myComponent = document.getElementById('services_stat');
        let myComponentHD = document.getElementById('top_stat_hd');
        let winCurrentPos = window.scrollY;
            if ((winCurrentPos + window.innerHeight) >= (myComponent.offsetTop + myComponentHD.scrollHeight + 50)) {
                this.animateNumbers();
            } 
        },
        animateNumbers(){
            if(this.statistics.customers >= this.actualStat.customers){
                clearInterval(this.interval);
                return;
            }
            let stat = this.statistics;
            let aStat = this.actualStat;
            this.interval = window.setInterval(function () {
                if(stat.customers < aStat.customers){
                    stat.customers += 50
                }
                if(stat.vehicles < aStat.vehicles){
                    stat.vehicles += 2
                }
                if(stat.branches < aStat.branches){
                    stat.branches += 2
                }
            },5)
        }
    }
}
</script>