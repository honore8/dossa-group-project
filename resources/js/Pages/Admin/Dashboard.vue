<template>
<div class="container-xxl position-relative bg-white d-flex p-0">

    <Sidebar />

    <div class="content">

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <div class="ms-3">
                            <p class="mb-2">Plans</p>
                            <h6 class="mb-0">00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <div class="ms-3">
                            <p class="mb-2">Appartements</p>
                            <h6 class="mb-0">00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <div class="ms-3">
                            <p class="mb-2">Réalisations</p>
                            <h6 class="mb-0">00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <div class="ms-3">
                            <p class="mb-2">Message</p>
                            <h6 class="mb-0">00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</template>

<script>
import Sidebar from '../../Pages/Admin/Model/SideBar.vue';

export default {
    components: {
        Sidebar
    }
}
</script>
