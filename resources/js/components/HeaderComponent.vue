<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                    {{ appName }}
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
                            <li class="nav-item">
                                <a class="nav-link" href="/login"> Login </a>
                            </li>
                            <li class="nav-item" v-if="hasRegister">
                                <a class="nav-link" href="/register"> Register</a>
                            </li>
                        </template>
                        <div v-else>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ curUser.name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="" @click.prevent="logoutUser()">
                                       Logout
                                    </a>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
</template>

<script>
let token = $('meta[name=csrf-token]').attr('content');
export default {
    props : {
        guest:Boolean,
        hasRegister: Boolean,
        userData: String,
        appName: String
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