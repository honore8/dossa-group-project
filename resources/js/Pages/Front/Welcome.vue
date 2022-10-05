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
// import Pagination from '../../Components/Pagination.vue'
import { Link } from '@inertiajs/inertia-vue3';
export default {
    props: {
        movies: Object
    },
    components: {
        Header,
        Footer,
        Link,
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
