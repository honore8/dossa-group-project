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

<section id="contact" class="contact my-5">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Prenez attache avec nous</h2>
        </div>
        <div class="row gx-lg-0 gy-4">
            <div class="col-lg-4">
                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Position:</h4>
                            <p>Djidjole derrière le commissariat</p>
                        </div>
                    </div>
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p><a href="mailto:infos@dossa-group.com" class="text-white">infos@dossa-group.com</a></p>
                        </div>
                    </div>
                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Appel:</h4>
                            <p>+228 93640534</p>
                        </div>
                    </div>
                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Horaires:</h4>
                            <p>Lun-Vend: 8h00 - 18h00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form action="https://bootstrapmade.com/demo/templates/Impact/forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group"> <input type="text" name="name" class="form-control" id="name" placeholder="Nom complet" required></div>
                        <div class="col-md-6 form-group mt-3 mt-md-0"> <input type="email" class="form-control" name="email" id="email" placeholder="Email" required></div>
                    </div>
                    <div class="form-group mt-3"> <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required></div>
                    <div class="form-group mt-3"><textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea></div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Envoyer le message</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
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

.partner-line {
    height: 8px;
    width: 20%;
    background-color: #2b7de1;
}

#services {
    border-top: 20px solid #001b71;
}
</style>
