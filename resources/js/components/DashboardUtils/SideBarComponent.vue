<template>
    <div id="side_bar">
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="" @click.prevent="changePage('dashboard')">
                        <font-awesome-icon icon="tachometer-alt" />
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" @click.prevent="changePage('parcel')">
                        <font-awesome-icon icon="truck" />
                        Parcel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" @click.prevent="changePage('request')">
                        <font-awesome-icon icon="clipboard-list" />
                        Request
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" @click.prevent="changePage('contact')">
                        <font-awesome-icon icon="user" />
                        Contacts
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<style scoped>
    .navbar{
        padding: 0;
    }
    .navbar-nav{
        width: 100%;
    }
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
        padding: 0.7rem 1.3rem;
    }
    #side_bar li.nav-item:hover{
        background-color: white !important;
    }
    #side_bar li.nav-item:hover a{
        color: #261c6a !important;
    }
    .open{
        left: 0 !important; 
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
            if(window.outerWidth < 768){
                let sideBar = $('#side_bar');
                sideBar.toggleClass('open');
            }
            this.$emit('selectPage', page);
        }
    }
}
</script>