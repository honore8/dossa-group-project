<template>
<section id="topbar" class="topbar d-flex align-items-center ">
    <div class="container d-none d-lg-block">
        <div class="row d-flex justify-content-between">
            <div class="col-4 offset-md-2">

                <span>Trouvez le plan de votre maison</span>
            </div>
            <div class="col-4">
                <div class="float-end">
                    <div class="phrase">Demandez un devis</div>
                    <div class="carre ms-1"></div>

                </div>
            </div>
        </div>
        <!-- <div class="contact-info d-flex align-items-center offset-md-2">
            <span>Trouvez le plan de votre maison</span>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="index.html#" class="twitter">Demandez un devis</a>
        </div> -->
    </div>
</section>
<div class="container d-none d-lg-block" style="position: relative; top: 10px">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <div style="border-top: 3px solid white"></div>
        </div>
    </div>
</div>
<header id="header" class="header d-flex align-items-center">
    <div class="container container-xl d-flex align-items-center justify-content-between justify-content-xl-start">
        <a href="index.html" class="logo d-flex align-items-center ">
            <img src="../../../../public/statics/images/logo.png" class="img-fluid" alt="">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="btn btn-primary me-md-2 px-2" href="index.html#hero">Accueil</a></li>
                <li><a class="me-md-2" href="index.html#about">Plans</a></li>
                <li><a class="me-md-2" href="index.html#services">Nos réalisations</a></li>
                <li><a class="me-md-2" href="index.html#portfolio">Nos appartements</a></li>
                <li><a class="me-md-2" href="index.html#team">Qui sommes-nous ?</a></li>

                <li><a href="index.html#contact">Contacts</a></li>
            </ul>
        </nav>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i> <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
</template>

<script>
// import { Link } from '@inertiajs/inertia-vue3';
import 'bootstrap/dist/js/bootstrap';
import mainFunction from '../../../../public/statics/js/main';

export default {
    components: {
        // Link
    },
    mounted() {
        mainFunction()
    },
}
</script>

<style lang="css">
@import url("../../../../node_modules/bootstrap/dist/css/bootstrap.min");
@import url("../../../../public/statics/css/style");
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");

@media(prefers-reduced-motion:no-preference) {
    :root {
        scroll-behavior: auto !important
    }
}

@media only screen and (max-width: 1399px) and (min-width: 1280px) {

    #navbar {
        margin-left: 1.5% !important;
    }
}

@media (max-width: 991px) {
    .mobile-nav-show {
        font-size: 79px;
    }
    
}
@media (min-width: 992px) {
    .logo {
        position: relative;
        bottom: 22px;
        
    } 
}


#navbar {
    margin-left: 3.5%;
}

.carre {
    width: 20px;
    height: 20px;
    background: #0d6efd;
}

div.phrase,
div.carre {
    display: inline-block;
    vertical-align: top;
}

.col-8-cc {
    flex: 0 0 auto;
    width: 71.666667%;
}
</style>
