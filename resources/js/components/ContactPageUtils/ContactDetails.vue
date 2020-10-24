<template>
    <div class="container-fluid" id="contact-details">

        <div class="container" style="max-height:100%;">
                <div class="row">

                        <div class="col-md-6">
                            <div class="ConDet" data-aos="fade-up">
                                <h3 style="color:#261c6a;">
                                    <strong>Express Logistics and Courier Services</strong>
                                </h3>
                            </div>
                            <div class="ConDet" data-aos="fade-up">
                                Feel free to contact us via phone or email at anytime you need help or have any question!
                            </div>
                            <div class="ConDet" data-aos="fade-up">
                                <p>
                                    <strong><font-awesome-icon icon="envelope" /> Mail Us :</strong>
                                    support@exlogcourier.com <br>
                                    We usually reply within 24 hours 
                                </p>
                                <p>
                                    <strong><font-awesome-icon icon="phone-alt" /> Call Us :</strong>
                                    +44 7520635476
                                </p>
                            </div>
                            <div class="ConDet" data-aos="fade-up">
                                <h4>
                                    <strong>
                                        <font-awesome-icon icon="map-marker" /> CONTACT ADDRESS
                                    </strong>
                                </h4>
                                <p>
                                    Deanshanger, Milton Keynes MK19 6HT, UK<br>
                                    Email: support@exlogcourier.com<br>
                                    Email: info@exlogcourier.com<br>
                                    Call:  +44 7520635476 
                                </p>
                            </div>
                            <div class="ConDet" data-aos="fade-up">
                                GET CONNECTED
                                <div class="container">
                                    <!-- You dont use font awesome likr this here eeee yaaaa  not working there -->
                                    <font-awesome-icon icon="envelope" />
                                    <font-awesome-icon :icon="['fab', 'facebook']" />
                                    <font-awesome-icon :icon="['fab', 'linkedin']" />
                                    <font-awesome-icon :icon="['fab', 'twitter-square']" />
                                    <font-awesome-icon :icon="['fab', 'google']" />
                                    <font-awesome-icon :icon="['fab', 'vimeo']" />
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6" id="conImg" data-aos="fade-up-left">
                            <img src="/img/bg2.jpg" alt=" " style="max-width:100%;">
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
    .ConDet{
        margin: 40px auto 30px;
    }
    #conImg{
        padding: 30px 0 20px;
    }
</style>

<script>
export default {

}
</script>
