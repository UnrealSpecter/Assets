<template>
    <div class="">

        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Logo</h1>

        <div class="mb-10">

            <picture class="shadow-lg flex flex-row justify-center items-center mb-8" style="height: 382px;">
                <img class="h-auto w-1/2" src="/images/picture.jpg" alt="logo">
            </picture>

            <div class="flex justify-between items-center">
                <p>Original Logo <strong>white</strong> background</p>
                <a href="/images/picture.jpg" class="border border-grey px-8 py-2 rounded-full text-black font-bold text-md shadow">logo.svg</a>
            </div>

        </div>

        <div>

            <picture class="bg-blue-600 shadow-lg flex flex-row justify-center items-center mb-8" style="height: 382px;">
                <img class="h-auto w-1/2" src="/images/picture.jpg" alt="logo">
            </picture>

            <div class="flex justify-between items-center">
                <p>Negative Logo <strong>white</strong> background</p>
                <a href="/images/picture.jpg" class="border border-grey px-8 py-2 rounded-full text-black font-bold text-md shadow">logo.svg</a>
            </div>

        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
