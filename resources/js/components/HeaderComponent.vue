<template>
    <div class="sticky-top">
        <top-notification-bar></top-notification-bar>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                    <img src="/img/exlog_logo.jpg" alt="logo" style="max-height:50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <template v-if="guest">
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="/login"> Login </a>
                            </li>
                            <li class="nav-item" v-if="hasRegister">
                                <a class="nav-link" href="/register"> Register</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="/"> 
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about"> 
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/services"> 
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tracking"> 
                                    Tracking
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact"> 
                                    Contact
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link btn btn-tracking" href="/tracking"> 
                                    Track Your Item
                                </a>
                            </li>
                        </template>
                        <template v-else>
                            <li class="nav-item dropdown auth-nav" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ curUser.name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="" @click.prevent="logoutUser()">
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<style scoped>
    .btn-tracking{
        border: 1pt solid white;
        margin-left: 20px;
        border-radius: 5px;
        background-color: #ff7900;
        color: white !important;
        font-weight: bold;
    }
    .btn-tracking:hover{
        border: 1pt solid #ff7900;
        color: #ff7900 !important;
        background-color: white;
        box-shadow: 0 0 30px #261c6a54;
    }
    @media screen and (max-width: 767px) {
       nav.navbar .nav-item:hover a.nav-link{
           color: #261c6a;
       }
       nav.navbar .nav-item a.nav-link:active{
           background-color: #261c6a;
           color: white;
       }
       .navbar-nav{
           border-top: 1pt solid #261c6a;
           box-sizing: border-box;
           -webkit-box-sizing: border-box;
       }
       .auth-nav{
           display:none !important;
       }
    }
</style>

<script>
let token = $('meta[name=csrf-token]').attr('content');
import topNotificationBar from './utils/TopNotificationBar.vue';
export default {
    props : {
        guest:Boolean,
        hasRegister: Boolean,
        userData: String
    },
    components:{
        topNotificationBar
    },
    data(){
        return {
            curUser: {},
            _token:'',
            errors:{}
        }
    },
    mounted(){
        // Convert userData string to Json Object and assign it to curUser
        if (this.userData) {
            this.curUser = JSON.parse(this.userData);
        }
        this._token = token;
        // console.log(this.curUser);
    },
    methods:{
        logoutUser(){
            axios.post('/logout', this._token)
            .then((e)=> { 
                window.location.href = '/welcome';
            })
            .catch((e) => {
                console.log(e);
            })
        }
    }
}
</script>