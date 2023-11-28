<template>
    <div id="layout-wrapper">
        <Navbar/>
        <Sidebar />
        <div class="main-content">
            <div class="page-content">
                <router-view />
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2023 © Skote.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>
<script>
  export default {
    name: 'DefaultLayout'
  }
</script>
<script setup>
    import Navbar from '../partial/Navbar.vue';
    import Sidebar from '../partial/Sidebar.vue';
</script>
