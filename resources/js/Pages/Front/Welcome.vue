<template>
<Header />

<div>
    <section id="iq-favorites">
        <div class="container-fluid px-3 mt-5">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-ltr-direction d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Exciting X Videos dddd</h4>
                    </div>
                </div>
            </div>
            <div class="row pt-2 pt-md-4 pt-lg-4">
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-3" v-for="m in movies.data" :key="m.id">
                    <div class="card shadow bg-body rounded">
                        <Link :href="route('detail', m.uuid)">
                        <img :src="m.thumbnail" class="card-img-top" alt="xxx video">
                        <div class="card-body">
                            <p class="card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                                {{m.visite > 0 ? m.visite : 0}}
                                <span class="ms-2 badge rounded-pill text-bg-secondary">{{getFormatTime(m.duration)}}</span>
                                <span class="float-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                                    </svg>
                                </span>
                            </p>
                        </div>
                        </Link>
                    </div>
                </div>
            </div>
             <div>
                <Pagination :links="movies.links"/>
            </div>
        </div>
    </section>
</div>
<Footer />
</template>

<script>
import Header from './Header.vue'
import Footer from './Footer.vue'
import Pagination from '../../Components/Pagination.vue'
import { Link } from '@inertiajs/inertia-vue3';
export default {
    props: {
        movies: Object
    },
    components: {
        Header,
        Footer,
        Link,
        Pagination
    },
    methods: {
        getFormatTime(time){
            if(time > 60) {
                return Math.floor(time / 60) > 0 ? Math.floor(time / 60) + ' minutes' : Math.floor(time / 60) + ' minutes'
            }
                return time + ' seconds'
        }
    },
};
</script>
