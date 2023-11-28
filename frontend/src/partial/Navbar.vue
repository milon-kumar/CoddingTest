<template>
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <router-link :to="{ name: 'dashboard' }" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="/assets/images/logo.svg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </router-link>

                    <router-link :to="{ name: 'dashboard' }" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="/assets/images/logo-light.svg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-light.png" alt="" height="19">
                        </span>
                    </router-link>
                </div>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-1.jpg"
                            alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item text-danger" href="javascript:void(0)" @click="logout">
                            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                            <span key="t-logout">Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>
<script setup>
import { useAuthStore } from "@/stores/useAuthStore.js"
import { useRouter } from 'vue-router';
const router = useRouter()
const auth = useAuthStore();
auth.setUser(router);

const logout = () => {
    auth.logout(router);
}
</script>
