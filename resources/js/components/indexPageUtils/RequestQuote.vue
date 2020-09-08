<template>
    <div>
        <div class="container-fluid" id="top_hd_req">
            <div class="row">
                <div class="col-md-6 py-4" style="background-color:#261c6a;">
                    <button id="btn_truck">
                        <font-awesome-icon icon="shipping-fast" size="2x" />
                    </button>
                    <h3>Request Quote</h3>
                </div>
                <div class="col-md-6 py-4" style="background-color:#ff7900;">
                    <h3>Get In touch</h3>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    G
                </div>
                <div class="col-md-6">
                    C
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>

<style scoped>
    #top_hd_req{
        text-align: center;
        color: white;
        font-weight: 900;
        text-transform: uppercase;
    }
    #btn_truck{
        padding: 5px 10px;
        border-radius: 5px;
        float: right;
        margin-right: -45px;
        z-index: 4;
        position: inherit;
    }
    @media screen and (max-width: 767px) {
        #btn_truck{
            display:none;
        }
    }
</style>