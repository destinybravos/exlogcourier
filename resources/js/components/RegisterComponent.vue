<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Register</div>

            <div class="card-body">
                <form method="POST" >

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" required autocomplete="name" autofocus v-model="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" required autocomplete="email" v-model="email"> 
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control"  required autocomplete="new-password" v-model="password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" required autocomplete="new-password" v-model="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-primary" @click="registerUser()">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
let token = $('meta[name=csrf-token]').attr('content');
export default {
    data(){
        return{
            name:'',
            email:'',
            password:'',
            password_confirmation:'',
            _token:'',
            errors:{}
        }
    },
    mounted(){
        this._token = token;
        // console.log(this._token);
    },
    methods: {
        registerUser(){
            let data = {
                name:this.name,
                email:this.email,
                password:this.password,
                password_confirmation: this.password_confirmation,
                _token:this._token
            };

            axios.post('/register',data)
            .then((res) => {
                window.location.href = '/home';
            })
            .catch((errors) =>{
                this.errorHandler(errors);
            });
        },
        errorHandler(errors){
            this.errors = errors.response.data.errors;
        }
    }

}

</script>