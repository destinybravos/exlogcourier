<template>
    <div id="footer-component">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12" id="containerT">
                    <div class="container" id="trackCon">
                        <div class="row my-2">
                                <div class="col-md-4" id="trackText">
                                        <h3 style="font-weight:bolder; margin:0px;">TRACK NUMBER</h3>
                                        <p style="margin:0px;">TRACK UP TO 10 NUMBERS AT A TIME</p>
                                </div>
                                <div class="col-md-8" id="TrackbtnDiv">
                                        <input id="trackInput" type="text" value="#PACKAGE ID">
                                        <button id="trackBtn" type="text">TRACK </button>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-2" >
                    <div class="col-md-5">
                        <aside id="contAside"> <h5> EXPRESS LOGISTICS </h5> </aside>
                        <p>As a leading provider of air transportation, Express Logistics and Courier is your #1
                        source for expedited international automobile shopping with services to over 150 countries worldwide,
                        we have the resources and expertise to facilitate your international shipment and make the delivery as simple as possbile
                        </p>

                    </div>
                    <div class="col-md-2">
                        <h5 style="font-weight:bold;">SERVICES</h5>
                        <p>
                            Sea Freight <br>
                            Road transport <br>
                            Air Freight <br>
                            Railway Logistics <br>
                            Packaging & Storage <br>
                            Warehousing <br>
                            Door-2-Door Delivery <br>
                        </p>

                    </div>
                    <div class="col-md-2">
                        <h5 style="font-weight:bolder;">DESTINATION</h5>
                        <p>
                            Lagos, Nigeria <br>
                            Accra, Ghana <br>
                            Canada, United States <br>
                            Paris, France <br>
                            Osio, Norway <br>
                            Frankfurt, Germany


                        </p>

                    </div>
                    <div class="col-md-3">
                        <h5 style="font-weight:bolder;">CONTACT DETAILS</h5>
                        <p>
                            Yesikent Mah  Allyey 1905 Sok - No 123 Esenyurt Instanbul, Turkey <br>
                            Email: contact@expresslogistics&courier.com
                            Call: +120 - 344 -567
                        </p>

                    </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    #footer-component{
        background-color: #261c6a;
        color: white;
        padding: 20px 0;
    }

    #containerT{
        background-color: #f57302;
        max-height: 2000px;
        width: 100%;
    }
    #contAside h5{
        background-color:whitesmoke;
        color:#261c6a;
        width:50%;
        text-align: center;
        font-weight: bolder;
    }
    #trackText{
        margin-top: 30px;
    }

    #TrackbtnDiv{
        margin-top: 30px;

    }

    #trackInput{
        width: 500px;
        height: 40px;
        background-color: #f57302;
        color: white;
    }
    #trackBtn{
        height: 40px;
        background-color: #f57302;
        width: 100px;
        color:white;
    }
</style>
