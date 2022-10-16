<template>
<div class="container-fluid bg-gray-1">
    <div class="container">
        <div class="row d-flex justify-content-md-between py-5 text-dossa">
            <div class="col-md-9">

                <h3 class="fw-bold">CONFIGUREZ VOTRE MAISON AVEC UN DEVIS GRATUIT</h3>
                <h4>En quelques clics recevez un devis par mail</h4>
            </div>
            <div class="col-md-3">
                <!-- <a class="me-md-2 btn btn-primary bg-dossa" :href="route('front.index')">Trouvez un plan</a> -->

                <Link class="btn btn-outline-dark text-dossa" style="border: 2px solid #001b71" :href="route('front.index')"><b>Trouvez un plan</b> </Link>

            </div>
        </div>

    </div>
</div>
<footer id="footer" class="footer">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-12 footer-info">
                <a href="#" class="logo text-center"> <span>www.dossa-group.com</span> </a>
                <img src="../../../../public/statics/images/logo.png" class="img-fluid" alt="">

            </div>
            <div class="col-lg-3 col-6 footer-links text-end pe-md-5">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><Link :href="route('front.index')">Accueil</Link></li>
                    <li><Link :href="route('front.plan')">Plans</Link></li>
                    <li><Link href="#">Nos projets</Link></li>
                    <li><Link :href="route('front.realization')">Nos réalisations</Link></li>
                    <li><Link :href="route('front.who')">Qui sommes-nous ?</Link></li>
                    <li><Link :href="route('front.contact')">Contacts</Link></li>
                    <li><Link href="#">Conseil</Link></li>
                </ul>
            </div>
            <div class="col-lg-3 col-6 footer-links">
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control">

                    </div>
                    <div class="col-12">
                        <button type="submit" class="float-sm-end btn btn-primary   mt-1">Envoyer</button>

                    </div>

                </div>
                <div class="row mt-3">
                    <p class="text-end"> 1er site 100% africain dédié au plan sur mesure et à la construction</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.647141303495!2d1.1889331158396252!3d6.177966428795012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159a77fd69993%3A0x821e23be46b866f7!2zRGppZGpvbMOp!5e0!3m2!1sfr!2stg!4v1665355857681!5m2!1sfr!2stg" width="100%" height="100%" style="border:0; border-radius: 5% 5%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="copyright"> © Copyright <strong><span>DOSSA-GROUP</span></strong>. All Rights Reserved</div>
        <div class="credits"> Designed by <a href="https://www.honore-lata.com/" target="_blank">Jeanho</a></div>
    </div>
</footer>
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link
    },
}
</script>