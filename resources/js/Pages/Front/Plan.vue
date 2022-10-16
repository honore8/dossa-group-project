<template>
<div class="dossa-group">
    <Header />

    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-end">
                    <h1>Vous souhaitez faire <br> construire votre maison ?</h1>
                    <p>L'estimation de votre projet immobilier</p>
                </div>
            </div>
        </div>

    </section>
</div>

<section id="services" class="services">
    <div class="container aos-init aos-animate mt-5" data-aos="fade-up">
        <h3 class="text-black-50">Premier site de recherche de PLANS de MAISONS</h3>
        <h3 class="text-black-50">Trouvez la maison de vos rêve.</h3>
        <div class="pswp-gallery" id="my-gallery">

            <div class="row mb-5 sections-bg p-3">
                <div class="row">
                    <span class="bg-dossa text-white px-2 py-1" style="position:relative; top: 32px; left: 12px;width: auto!important;">50.000</span>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-12 pb-3">
                            <img src="../../../../public/statics/images/7.png" alt="" class="w-100" />

                        </div>
                    </div>
                    <div class="row d-none d-lg-block">
                        <div class="col-lg-12">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <img src="../../../../public/statics/images/9.jpg" alt="" class="w-100" />

                </div>
                <div class="col-lg-6 mt-2">
                    <h3 class="float-sm-star rea-desc">La Casa de papel</h3>

                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident similique accusamus, amet fugit officiis dolor non consequuntur quidem quam ratione, nam totam doloribus voluptate corporis blanditiis ea voluptas! Sunt at incidunt cumque reiciendis, voluptatem provident eum! Odit et aut deleniti esse cumque expedita ut, maxime enim dolorum dicta similique excepturi.</div>

                    <div>
                        <a href="#" class="btn btn-primary me-2">Découvrir</a>
                        <a href="#" class="btn btn-primary me-2">Acheter</a>
                        <span class="fw-bold h3 pt-2 position-relative" style="top: 8px"> 2001</span>

                    </div>

                </div>
            </div>
            <div class="row mb-5 sections-bg p-3">
                <div class="row">
                    <span class="bg-dossa text-white px-2 py-1" style="position:relative; top: 32px; left: 12px;width: auto!important;">50.000</span>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-12 pb-3">
                            <img src="../../../../public/statics/images/7.png" alt="" class="w-100" />

                        </div>
                    </div>
                    <div class="row d-none d-lg-block">
                        <div class="col-lg-12">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <img src="../../../../public/statics/images/9.jpg" alt="" class="w-100" />

                </div>
                <div class="col-lg-6 mt-2">
                    <h3 class="float-sm-star rea-desc">La Casa de papel</h3>

                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident similique accusamus, amet fugit officiis dolor non consequuntur quidem quam ratione, nam totam doloribus voluptate corporis blanditiis ea voluptas! Sunt at incidunt cumque reiciendis, voluptatem provident eum! Odit et aut deleniti esse cumque expedita ut, maxime enim dolorum dicta similique excepturi.</div>

                    <div>
                        <a href="#" class="btn btn-primary me-2">Découvrir</a>
                        <a href="#" class="btn btn-primary me-2">Acheter</a>
                        <span class="fw-bold h3 pt-2 position-relative" style="top: 8px"> 2001</span>

                    </div>

                </div>
            </div>
            <div class="row mb-5 sections-bg p-3">
                <div class="row">
                    <span class="bg-dossa text-white px-2 py-1" style="position:relative; top: 32px; left: 12px;width: auto!important;">50.000</span>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-12 pb-3">
                            <img src="../../../../public/statics/images/7.png" alt="" class="w-100" />

                        </div>
                    </div>
                    <div class="row d-none d-lg-block">
                        <div class="col-lg-12">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <img src="../../../../public/statics/images/9.jpg" alt="" class="w-100" />

                </div>
                <div class="col-lg-6 mt-2">
                    <h3 class="float-sm-star rea-desc">La Casa de papel</h3>

                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident similique accusamus, amet fugit officiis dolor non consequuntur quidem quam ratione, nam totam doloribus voluptate corporis blanditiis ea voluptas! Sunt at incidunt cumque reiciendis, voluptatem provident eum! Odit et aut deleniti esse cumque expedita ut, maxime enim dolorum dicta similique excepturi.</div>

                    <div>
                        <a href="#" class="btn btn-primary me-2">Découvrir</a>
                        <a href="#" class="btn btn-primary me-2">Acheter</a>
                        <span class="fw-bold h3 pt-2 position-relative" style="top: 8px"> 2001</span>

                    </div>

                </div>
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

<style lang="css" scoped>
.dossa-group {
    background-image: url("../../../../public/statics/images/11.jpg") !important;
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
