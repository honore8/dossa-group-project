<template>

    

    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center offset-md-2">
                <i class="bi bi-envelope d-flex align-items-center">
                    <a href="https://bootstrapmade.com/cdn-cgi/l/email-protection#395a56574d585a4d795c41585449555c175a5654"><span class="__cf_email__" data-cfemail="5c3f3332283d3f281c39243d312c3039723f3331">[email&#160;protected]</span></a>
                </i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="index.html#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="index.html#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="index.html#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="index.html#" class="linkedin"><i class="bi bi-linkedin"></i></a></div>
            <hr>
        </div>
    </section>
    <header id="header" class="header d-flex align-items-center">
        <div class="container container-xl d-flex align-items-center justify-content-between justify-content-xl-start">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../../../../public/statics/images/logo.png" alt="">
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="btn btn-primary" href="index.html#hero">Accueil</a></li>
                    <li><a href="index.html#about">Plans</a></li>
                    <li><a href="index.html#services">Nos réalisations</a></li>
                    <li><a href="index.html#portfolio">Nos appartements</a></li>
                    <li><a href="index.html#team">Qui sommes-nous ?</a></li>

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

.logo {
    position: relative;
    bottom: 22px;
    ;
}



hr {
    position: relative;
    top: 20px;
    border: none;
    height: 12px;
    background: black;
    margin-bottom: 50px;
}
</style>
