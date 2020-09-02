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
                              <i class="fa fa-envelop">Contact@expresslogistics.com</i>
                                We usually reply within 24 hours <br>
                                +234 - 09087366474663664645
                            </div>
                            <div class="ConDet">VISIT HEAD OFFICE</div>
                            <div class="ConDet">
                                <i class="fa fa-map-marker"></i>
                                <i class="fa fa-desktop">expresslogistics.com</i>
                            </div>
                            <div class="ConDet">
                                GET CONNECTED
                                <div class="container">
                                    <!-- You dont use font awesome likr this here eeee yaaaa  not working there -->
                                    <div><font-awesome-icon icon="envelope" /></div>
                                    <div><i class="fa fa-facebook"></i></div>
                                    <div><i class="fa fa-google"></i></div>
                                    <div><i class="fa fa-linkedin-square"></i></div>
                                    <div><i class="fa fa-vimeo"></i></div>

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
