<template>
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <div class="navbar-nav w-100 mt-5">

            <Link :href="route('admin.add.post')" class="nav-item nav-link mb-3">Ajouter une publication</Link>
            <a href="#" class="nav-item nav-link">Apparts ajoutés</a>
            <a href="#" class="nav-item nav-link">Plan ajoutés</a>
            <a href="#" class="nav-item nav-link">Réalisations ajoutées</a>
        </div>
    </nav>
</div>
</template>

<script>
import 'bootstrap/dist/js/bootstrap';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link,
    }
}
</script>

<style lang="css">
@import url("../../../../../node_modules/bootstrap/dist/css/bootstrap.min");
@import url("../../../../../public/statics/back/css/style");
</style>
