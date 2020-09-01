<template>
    <div id="side_bar">
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="" @click.prevent="changePage('dashboard')">
                        <!-- Font Awesome Icon -->
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" @click.prevent="changePage('parcel')">Parcel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" @click.prevent="changePage('request')">Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" @click.prevent="changePage('contact')">Contacts</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<style scoped>
    #side_bar{
        position: fixed;
        width: 250px;
        height: 100vh;
        background-color: #261c6a;
        left: 0;
        color: white;
        transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        z-index: 2;
    }
    #side_bar a{
        color: white;
    }
    @media screen and (max-width: 767px){
       #side_bar{
            left: -250px;
        } 
    }
</style>

<script>
export default {
    props:{
        currentPage: String
    },
    data(){
        return {

        }
    },
    methods:{
        changePage(page){
            this.$emit('selectPage', page);
        }
    }
}
</script>