<template>
    <div class="justify-self-start p-3">
        <vue-plyr :options="options">
            <video controls crossorigin playsinline>
                <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
            </video>
        </vue-plyr>
        <div class="mb-3 p-3">
            <h1 class="">Big Buck Bunny</h1>
            <a href="#?channel=peachopen" class="underline text-blue-600 dark:text-blue-500 hover:no-underline">
                <img src="https://placehold.co/48x48/00aaff/00aa00/svg" width="60" class="rounded-full">
                The Peach Open Movie Project</a>

        </div>
    </div>
</template>
<script setup>
import VuePlyr from 'vue-plyr'
import 'vue-plyr/dist/vue-plyr.css'
</script>
