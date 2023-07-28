<script setup lang="ts">
import '@/Assets/BizLand/bootstrap/css/bootstrap.min.css'
import '@/Assets/BizLand/bootstrap-icons/bootstrap-icons.css'
import '@/Assets/BizLand/boxicons/css/boxicons.min.css'
import '@/Assets/BizLand/glightbox/css/glightbox.min.css'
import '@/Assets/BizLand/swiper/swiper-bundle.min.css'
import '@/Assets/BizLand/css/style.css'

import '@/Assets/BizLand/purecounter/purecounter_vanilla.js'
import '@/Assets/BizLand/bootstrap/js/bootstrap.bundle.min.js'
import '@/Assets/BizLand/glightbox/js/glightbox.min.js'
import '@/Assets/BizLand/isotope-layout/isotope.pkgd.min.js'
import '@/Assets/BizLand/swiper/swiper-bundle.min.js'
import '@/Assets/BizLand/waypoints/noframework.waypoints.js'
import '@/Assets/BizLand/php-email-form/validate.js'
import '@/Assets/BizLand/js/main.js'

import HeaderUser from "./HeaderUser.vue";
</script>

<template>
    <HeaderUser/>
    <div class="min-h-screen w-full bg-gray-100 flex flex-col sm:justify-center items-center">

        <div class="w-full pt-6 flex flex-col sm:justify-center items-center sm:pt-0">
            <div
                class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <slot/>
            </div>
        </div>
    </div>
</template>
