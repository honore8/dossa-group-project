<template>
<div>
    <NavBar />
    <div id="layoutSidenav">
        <SideBar />

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Add movies</h3>
                                </div>
                                <div class="card-body">
                                    <form @submit.prevent="submit" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <!-- <label for="formFileLg" class="form-label">Large file input example</label> -->
                                            <input class="form-control form-control-lg" id="formFileLg" @input="form.movies = $event.target.files" type="file" multiple>
                                               <BreezeInputError class="mt-2" :message="form.errors.password" />
                                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                                {{ form.progress.percentage }}%
                                            </progress>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Add movies</button></div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</div>
</template>

<script>
import NavBar from "../../Layouts/NavBar.vue";
import SideBar from "../../Layouts/SideBar.vue";
import BreezeInputError from '@/Components/InputError.vue';

export default {
    components: {
        NavBar,
        SideBar,
        BreezeInputError
    },
    data() {
        return {
            form: this.$inertia.form({
                movies: null,
            })
        }
    },
    methods: {
        submit() {
            console.log(this.form.movies[0]);
            this.form.post(route('add.post'))
        }
    },
}
</script>
