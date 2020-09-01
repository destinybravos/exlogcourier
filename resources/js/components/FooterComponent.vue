<template>
    <div id="footer-component">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12">
                    <div class="container">
                        <div id="trackNo">
                            <h1>TRACKING NUMBER</h1>
                            <P>TRACK UP TO 10 NUMBERS AT A TIME</P>
                        </div>
                        <div id="trackInput">
                            <input type="text" value="TRACK NUMBER">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-5"> colomn 1</div>
                <div class="col-md-2">  colomn 2 </div>
                <div class="col-md-2">  colomn 3 </div>
                <div class="col-md-3">  colomn 4 </div>
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

    #trackNo{
        display: inline;
    }
    #trackInput{
        display: inline-block;
    }
</style>
