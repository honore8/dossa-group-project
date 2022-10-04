<template>
<Header />
<section class="iq-main-slider site-video">
    <div class="container-fluid px-5">

        <div class="row pt-2 pt-md-4 pt-lg-4 text-center">
            <h2>Coming soon. Stay tuned !!!</h2>
        </div>
    </div>
</section>

<Footer />
</template>

<script>
import Header from './Header.vue'
import Footer from './Footer.vue'

export default {
    props: {
        movie: Object,
        movies: Object,

    },
    components: {
        Header,
        Footer,
    },

};
</script>
