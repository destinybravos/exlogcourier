<template>
    <div id="footer-component">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12" id="containerT">
                    <div class="container" id="trackCon">
                        <div class="row my-2">
                                <div class="col-md-4">
                                   <h3 style="font-weight:bolder;">TRACK NUMBER</h3>
                                   <p>TRACK UP TO 10 NUMBERS AT A TIME</p>
                                </div>
                                <div class="col-md-8">
                                        <input type="text" value="#PACKAGE ID">
                                        <button type="text">Track </button>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-5"> EXPRESS LOGISTICS </div>
                <div class="col-md-2"> SERVICE OFFERED  </div>
                <div class="col-md-2"> DESTINATION  </div>
                <div class="col-md-3">  CONTACT DETAILS </div>
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
</style>
