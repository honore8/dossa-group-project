<template>
<div class="dossa-group">
    <Header />

    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-end">
                    <h1>Première plateforme <br> d'achat de plan en Afrique</h1>
                    <p>L'architecture sous toutes ses formes</p>
                </div>
            </div>
        </div>

    </section>
</div>

<main id="main">
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="fw-bold text-black-50" style="font-size: 60px;">Qui sommes-nous ?</h3>
                <p><b>Dossa Group</b> a été créée vous pour apporter une expertise complète sur la
                    construction, l’agrandissement et la rénovation de votre maison ou appartement.
                    Notre objectif est de prendre en charge toute les étapes de votre projet; de la
                    construction jusqu’à la réalisation. Notre plateforme est également la toute
                    première en Afrique pour l’achat de plan à la portée de tous.</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <!-- <h6 class="fw-bold">Faire de DOSSA Group une référence en matière d’aménagement d’intérieur</h6> -->
                    <img src="https://bootstrapmade.com/demo/templates/Impact/assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                    <div class="content ps-0">
                        <b>Nos Objectifs</b>
                        <ul class="mt-3">
                            <li><i class="bi bi-check-circle-fill"></i> Mettre à la disposition du pays un personnel qualifié pour tous travaux de construction ;</li>
                            <li><i class="bi bi-check-circle-fill"></i> Participer à la modernisation architecturale de l’Afrique à travers le Togo</li>
                            <li><i class="bi bi-check-circle-fill"></i> Promouvoir la jeunesse à travers son savoir-faire ;</li>
                            <li><i class="bi bi-check-circle-fill"></i> Faire de DOSSA Group la toute première plateforme de vente de plan en ligne en Afrique</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <p class=""> Dossa Group réalise pour vous la construction de votre projet immobilier :</p>
                        <ul>
                            <li class="me-3 d-inline-block"><i class="bi bi-check-circle-fill"></i> Maison</li>
                            <li class="me-3 d-inline-block"><i class="bi bi-check-circle-fill"></i> Appartement</li>
                            <li class="me-3 d-inline-block"><i class="bi bi-check-circle-fill"></i> Extensions</li>
                            <li class="me-3 d-inline-block"><i class="bi bi-check-circle-fill"></i> Dépendance</li>
                            <li class="me-3 d-inline-block"><i class="bi bi-check-circle-fill"></i> Rénovation</li>
                        </ul>
                        <b>Nos valeurs</b>
                        <p>
                            La création d’emploi, le respect des engagements, l’efficience et la crédibilité sont nos valeurs.</p>
                        <div class="position-relative mt-4"> <img src="https://bootstrapmade.com/demo/templates/Impact/assets/img/about-2.jpg" class="img-fluid rounded-4" alt=""> <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <b>Notre Vision</b>
                <p class="mt-2">
                    Notre vision est de relever le grand défi dans le domaine de l’aménagement intérieur, Faire en sorte que de millier d’architectes à travers le monde puissent vendre leurs travaux partout dans le monde. Une vision tendancieuse mais possible à réaliser si on y investit du temps, les compétences et les matériels adéquats.
                </p>
                <div class="content ps-0 ps-lg-5">

                    <ul class="list-unstyled">
                        <li class="me-3"><i class="bi bi-check-circle-fill text-dossa"></i> L’étude de votre projet immobilier</li>
                        <li class="me-3"><i class="bi bi-check-circle-fill text-dossa"></i> Les dossiers administratifs</li>
                        <li class="me-3"><i class="bi bi-check-circle-fill text-dossa"></i> La réalisation de vos plans d’architecte</li>
                        <li class="me-3"><i class="bi bi-check-circle-fill text-dossa"></i> La construction et le suivi du chantier</li>
                        <li class="me-3"><i class="bi bi-check-circle-fill text-dossa"></i> L’aménagement, l’agencement et le design intérieur de votre maison ou appartement</li>
                        <li class="me-3"><i class="bi bi-check-circle-fill text-dossa"></i> Les étapes de réalisation de vos travaux et de la construction de votre Maison</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<Footer />
</template>

<script>
import Header from './Header.vue'
import Footer from './Footer.vue'
// import { Link } from '@inertiajs/inertia-vue3';
export default {
    props: {
        movies: Object
    },
    components: {
        Header,
        Footer,
        // Link,
    },
    mounted() {

    },
    methods: {
        getFormatTime(time) {
            if (time > 60) {
                return Math.floor(time / 60) > 0 ? Math.floor(time / 60) + ' minutes' : Math.floor(time / 60) + ' minutes'
            }
            return time + ' seconds'
        }
    },
};
</script>

<style lang="css">
.dossa-group {

    background-image: url("../../../../public/statics/images/11.jpg");
    background-position: center center;
    background-repeat: no-repeat;

    background-attachment: fixed;

    background-size: cover;
    height: 650px;

}

.rea-desc {
    color: #001b71;
}

.hero h1 {
    font-size: 70px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #fff;
}

.partner-line {
    height: 8px;
    width: 20%;
    background-color: #2b7de1;
}

#services {
    border-top: 20px solid #001b71;
}
</style>
