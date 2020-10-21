<template>
    <div id="dashboard_home">
        <div class="container top_page_hd">
            <div class="row pt-3 pb-2">
                <div class="col-md-12">
                    <h2>
                        <font-awesome-icon icon="tachometer-alt" />
                        EXLog. Dashboard
                    </h2>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="row">
            <!-- navBox 1 -->
            <div class="col-md-3 mt-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>Parcels</h5>
                        <!-- <div> -->
                            <p style="font-size:3.0em; text-align:right"><font-awesome-icon icon="truck" /> </p>
                        <!-- </div> -->
                    </div>
                    <div class="card-footer">
                        <h6><a href="" >Access Here</a></h6>
                    </div>
                </div>
            </div>
            <!-- navBox 2 -->
            <div class="col-md-3 mt-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>Request</h5>
                        <!-- <div> -->
                            <p style="font-size:3.0em; text-align:right"><font-awesome-icon icon="clipboard-list" /> </p>
                        <!-- </div> -->
                    </div>
                    <div class="card-footer">
                        <h6><a href="" @click.prevent="changePage('request')">View All Requests</a></h6>
                    </div>
                </div>
            </div>
            <!-- navBox 3 -->
            <div class="col-md-3 mt-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h5>Contact</h5>
                        <!-- <div> -->
                            <p style="font-size:3.0em; text-align:right"><font-awesome-icon icon="user" /> </p>
                        <!-- </div> -->
                    </div>
                    <div class="card-footer">
                        <h6><a href="" @click.prevent="changePage('contact')">Send Email/Contact Clients</a></h6>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    </div>
</template>

<style scoped>
    .top_page_hd{
        background-color: #ff8929;
    }
    .top_page_hd h2{
        font-weight: bold;
        font-size: 1.3rem;
        color: white;
        text-shadow: 0 0 12px #e96901;
    }
</style>

<script>
export default {
    props:{
        currentPage: String
    },
    data(){
        return {

        }
    },
    methods:{
        changePage(page){
            if(window.outerWidth < 768){
                let sideBar = $('#side_bar');
                sideBar.toggleClass('open');
            }
            this.$emit('selectPage', page);
        }
    }
}
</script>