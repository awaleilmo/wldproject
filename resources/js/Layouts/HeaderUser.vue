<script setup lang="ts">

import {ref} from "vue";

const member = ref(false);
const admin = ref(false);
const owner = ref(false);

</script>
<template>
    <Head>
        <title>Header</title>
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <!--        <link :href="aos" rel="stylesheet">-->
        <!--        <link :href="bootstrap" rel="stylesheet">-->
        <!--        <link :href="bootstrapIcons" rel="stylesheet">-->
        <!--        <link :href="boxicons" rel="stylesheet">-->
        <!--        <link :href="glightbox" rel="stylesheet">-->
        <!--        <link :href="swiper" rel="stylesheet">-->

        <!-- Template Main CSS File -->
        <!--        <link :href="styleCss" rel="stylesheet">-->
    </Head>
    <header id="header" class="d-flex align-items-center w-full">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">
                <img alt="Logo" src="@/Assets/image/logo.png" class=" h-60px w-60px"/></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="@/Assets/BizLand/assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto " href="#pricing">Pricing</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li v-if="!member&&!admin&&!owner"><a class="nav-link scrollto" href="/login">Login</a></li>
                    <li v-if="member"><a class="nav-link scrollto" href="/member">Member Area</a></li>
                    <li v-if="admin"><a class="nav-link scrollto" href="/admin">Admin</a></li>
                    <li v-if="owner"><a class="nav-link scrollto" href="/admin">Owner</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
</template>


<style scoped>

</style>
