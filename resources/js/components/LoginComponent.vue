<template>
    <div class="col-lg-6">
        <div class="card mt-5 mb-5">
            <div class="card-header">
                <font-awesome-icon icon="user-lock" /> User Login Interface
            </div>
            <div class="card-body">
                <div class="form">
                    <form method="post">
                        <div class="form-group">
                            <label for="email"><font-awesome-icon icon="envelope" /> Email Address</label>
                            <input type="email" id="uname" class="form-control" placeholder="Enter Username" required autocomplete="email" autofocus v-model="uname">
                            <span class="text-danger" v-for="(msg, index) in errors.email" :key="index">{{ msg }}</span>
                        </div>

                        <div class="form-group">
                            <label for="pass"><font-awesome-icon icon="key" /> Password</label>
                            <input type="password" id="pass" class="form-control" placeholder="Enter password"  required autocomplete="email" v-model="pass">
                            <span class="text-danger" v-for="(msg, index) in errors.password" :key="index">{{ msg }}</span>
                        </div>

                        <div class="form-group">
                            <input class="" type="checkbox" id="remember" v-model="remember">
                            <label for="remember">Remember Me</label>
                        </div>

                        <div class="form-group">
                            <ckeditor :editor="editor" v-model="editorData"></ckeditor>
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" @click.prevent="userLogin">
                                    <font-awesome-icon icon="sign-in-alt" /> Login
                                </button>

                                <a class="btn btn-link" v-if="resetPasswordLink" :href="resetPasswordLink">
                                    Forgot Your Password? 
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
let token = $('meta[name=csrf-token]').attr('content');
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    props: {
        resetPasswordLink: String
    },
    data(){
        return {
            // All data within the component are defined here
            uname:'',
            pass:'',
            remember:'',
            errors: {},
            editor: ClassicEditor,
            editorData:'',
            editorConfig: {
                toolbar: {
                    items: ['bold', 'italic', 'link', '|',  'undo', 'redo']
                }
            }
        }
    },
    mounted() {
        // This is like document ready
    },
    methods:{
        // Methods within the component are defined here
        userLogin(){
            let disError = this.errors;
            let loginData = {
                    email: this.uname,
                    password: this.pass,
                    remember: this.remember,
                    _token: token
                }

            axios.post('/login', loginData)
            .then(response => {
                window.location.href = '/home';
            })
            .catch((e) => {
                this.handleError(e)
            });
        },
        handleError(errors){
            console.log(errors.response.data.errors);
            this.errors = errors.response.data.errors;
        }
    }
}
</script>
