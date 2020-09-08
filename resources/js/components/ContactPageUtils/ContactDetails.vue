<template>
    <div class="container-fluid" id="contact-details">

        <div class="container" style="max-height:100%;">
                <div class="row">

                        <div class="col md-6">
                            <div class="ConDet">EXPRESS LOGISTIC </div>
                            <div class="ConDet" >FEEL FREE TO CONTACT US VIA PHONE OR EMAIL ANYTIME <br>
                                IF YOU HAVE ANY QUESTIONS OR NEED HELP!
                            </div>
                            <div class="ConDet">
                                <font-awesome-icon icon="map-marker" /> Contact@expresslogistics.com
                                We usually reply within 24 hours <br>
                                +234 - 09087366474663664645
                            </div>
                            <div class="ConDet">VISIT HEAD OFFICE</div>
                            <div class="ConDet">
                                <font-awesome-icon icon="map-marker" />
                                <font-awesome-icon icon="desktop" />expresslogistics.com
                            </div>
                            <div class="ConDet">
                                GET CONNECTED
                                <div class="container">
                                    <!-- You dont use font awesome likr this here eeee yaaaa  not working there -->
                                    <div><font-awesome-icon icon="envelope" /></div>
                                    <div><font-awesome-icon icon="facebook" /></div>
                                    <div><font-awesome-icon icon="google" /></div>
                                    <div><font-awesome-icon icon="linkedin-square" /></div>
                                    <div><font-awesome-icon icon="vimeo" /></div>

                                </div>
                            </div>

                        </div>

                        <div class="col md-6" id="contImg">


                        </div>
                </div>

        </div>

    </div>
</template>

<style scoped>
    #contact-details{
        min-height: 600px;
        background-color: white;
    }

    #contImg{
    background-image: url('/img/bg2.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100%;
        min-height: 600px;
        width: 100%;
    }

    .ConDet{
        margin: 50px auto;
    }
</style>

<script>
export default {

}
</script>
