<template>

    <div>

        <h1 class="uppercase font-bold mb-5 text-3xl" style="letter-spacing: 6px;">Card</h1>

        <div class="text-xl mb-10 shadow-md w-full border p-10 border-color-white kodchasan">
            The building blocks for a basic card component
        </div>

        <div class="flex flex-wrap items-center text-xl mb-10 shadow-md w-full border p-10 border-color-white">
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addFlex()">Flex</button>
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addHeight()">Height</button>
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addShadow()">Shadow</button>
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addBackground()">BG</button>
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addFont()">Font</button>
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addPadding()">Padding</button>
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addMargin()">Margin</button>
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addTextXL()">Text XL</button>
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addRoundedBorder()">Round</button>
        </div>

        <div class="text-xl mb-10 shadow-md w-full border p-10 border-color-white">

            <div class="building-block rounded border-white text-white">Card</div>

        </div>


    </div>

</template>

<script>


    export default {

        mounted() {
        },

        methods: {
            addFlex: function() {
                $('.building-block').toggleClass('flex justify-center items-center');
            },
            addHeight: function() {
                $('.building-block').toggleClass('h-64');
            },
            addShadow: function() {
                $('.building-block').toggleClass('shadow-md');
            },
            addFont: function() {
                $('.building-block').toggleClass('kodchasan');
            },
            addBackground: function() {
                $('.building-block').toggleClass('bg-red-500');
            },
            addPadding: function() {
                $('.building-block').toggleClass('p-20');
            },
            addMargin: function() {
                $('.building-block').toggleClass('my-10');
            },
            addTextXL: function() {
                $('.building-block').toggleClass('text-6xl');
            },
            addRoundedBorder: function() {
                $('.building-block').toggleClass('rounded');
            }

        }
    }
</script>
