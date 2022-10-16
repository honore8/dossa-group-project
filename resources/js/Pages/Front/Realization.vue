<template>
<div class="dossa-group">
    <Header />

    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-end">
                    <h1>Africa is the futur, just try</h1>
                    <p>DOSSA GROUP c'est plusieurs projets <br> réalisés à travers le monde</p>
                </div>
            </div>
        </div>

    </section>
</div>

<section id="services" class="services sections-bg">
    <div class="container aos-init aos-animate mt-5" data-aos="fade-up">

        <div class="pswp-gallery" id="my-gallery">

            <div class="row mb-5">
                <div class="col-6">
                    <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <h3 class="float-sm-start rea-desc">La Casa de papel</h3>
                    <a href="http://" class="btn btn-primary float-sm-end">Découvrir</a>
                </div>
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident similique accusamus, amet fugit officiis dolor non consequuntur quidem quam ratione, nam totam doloribus voluptate corporis blanditiis ea voluptas! Sunt at incidunt cumque reiciendis, voluptatem provident eum! Odit et aut deleniti esse cumque expedita ut, maxime enim dolorum dicta similique excepturi.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-6">
                    <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <h3 class="float-sm-start rea-desc">La Casa de papel</h3>
                    <a href="http://" class="btn btn-primary float-sm-end">Découvrir</a>
                </div>
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident similique accusamus, amet fugit officiis dolor non consequuntur quidem quam ratione, nam totam doloribus voluptate corporis blanditiis ea voluptas! Sunt at incidunt cumque reiciendis, voluptatem provident eum! Odit et aut deleniti esse cumque expedita ut, maxime enim dolorum dicta similique excepturi.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-6">
                    <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                        <div class="col-6">
                            <img src="../../../../public/statics/images/14.jpg" alt="" class="w-100" />

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <h3 class="float-sm-start rea-desc">La Casa de papel</h3>
                    <a href="http://" class="btn btn-primary float-sm-end">Découvrir</a>
                </div>
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident similique accusamus, amet fugit officiis dolor non consequuntur quidem quam ratione, nam totam doloribus voluptate corporis blanditiis ea voluptas! Sunt at incidunt cumque reiciendis, voluptatem provident eum! Odit et aut deleniti esse cumque expedita ut, maxime enim dolorum dicta similique excepturi.</p>
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

    background-image: url("../../../../public/statics/images/12.jpg");


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
