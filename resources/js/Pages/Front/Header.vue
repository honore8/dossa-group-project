<template>
<header>
    <div class="main-header">
        <nav class="navbar navbar-dark bg-dark shadow-lg p-3 mb-5 rounded">
            <div class="container-fluid d-flex justify-content-center">
                <Link :href="route('index')" class="a-btn-2 btn-light m-2 rounded-pill">Home</Link>
                <Link :href="route('soon')" class="a-btn btn-light m-2 rounded-pill">White XXX</Link>
                <Link :href="route('soon')" class="a-btn btn-light m-2 rounded-pill">Black XXX</Link>
                <Link :href="route('soon')" class="a-btn btn-light m-2 rounded-pill">XXX Funny</Link>
                <Link :href="route('soon')" class="a-btn btn-light m-2 rounded-pill">XXX Images</Link>

            </div>
        </nav>
    </div>
</header>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="show-adblocker-detect-alert">
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-body">
                <h5 class="modal-title mb-2" id="staticBackdropLabel"><u>Please disable Adblock</u></h5>
               <p> Sure, ad-blocking software does a great job at blocking ads, but we depend on ad revenue to keep creating quality content for you to enjoy for free. <br/> <b class="mt-1">Please support our site by disabling adblocker.</b></p>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import detectAnyAdblocker from 'vue-adblock-detector/src/detectAnyAdblocker'

export default {
    components: {
        Link
    },
    mounted() {
        console.log(detectAnyAdblocker());
        detectAnyAdblocker().then((detected) => {
            if (detected) {
            // document.getElementById('show-adblocker-detect-alert').click()
            }
        });
    },
}
</script>

<style lang="css">
/* @import url("/a/css/typography"); */

@media(prefers-reduced-motion:no-preference) {
    :root {
        scroll-behavior: auto !important
    }
}

.a-btn {
    padding: 0.563em 1.875em;
    position: relative;
    display: inline-block;
    cursor: pointer;
    z-index: 4;
    line-height: 1.5;
    user-select: none;
    background-color: #bf000a;
    font-weight: bold;
}

.a-btn-2 {
    padding: 0.563em 1.875em;
    position: relative;
    display: inline-block;
    cursor: pointer;
    z-index: 4;
    line-height: 1.5;
    user-select: none;
    background-color: #FCA5A5;
    color: #bf000a;
    font-weight: bold; 
}

.a-btn-2:hover {
    background-color: #bf000a;
    color: #FCA5A5;
}

.a-btn:hover {
    color: #FCA5A5;
    background-color: rgba(255, 55, 65, 0.3);
    color: 3px solid #bf000a;

}

a:hover {
    color: #FCA5A5;
}

footer.footer-one .footer-top {
    padding-top: 3.75em;
    padding-bottom: 3.75em;
}

.card-body {
    background-color: #27272A;
}

.tl-1 {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    width: auto;
}

.card img {
    width: 100%;
    object-fit: cover;
}

.card-body {
    padding: 8px 10px;
}

@media (min-width: 1301px) {
    .card img {
        height: 200px;
    }
}

@media (max-width: 1300px) {
    .card img {
        height: 150px;
    }
}
</style>
