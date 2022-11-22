<template>
<div class="container-xxl position-relative bg-white d-flex p-0">

    <Sidebar />

    <div class="content">

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h2 class="mb-5">Ajouter une publication</h2>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Titre de la publication</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected="" disabled>Choix</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Selectionner le type de publication</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>
                        <div class="form-floating mt-5">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</template>

<script>
import Sidebar from './Model/SideBar.vue';

export default {
    components: {
        Sidebar
    }
}
</script>
