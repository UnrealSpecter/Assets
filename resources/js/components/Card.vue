<template>

    <div>

        <h1 class="uppercase font-bold mb-5 text-3xl" style="letter-spacing: 6px;">Card</h1>

        <div class="text-xl mb-10 shadow-md w-full border p-10 border-color-white kodchasan">
            The building blocks for a basic card component
        </div>

        <div class="flex flex-wrap items-center text-xl mb-10 shadow-md w-full border p-10 border-color-white">
            <button class="border p-5 font-bold border-color-white shadow-md" @click="addFlex()">Flex</button>

            <select name="test" v-model="widthClass" v-on:change="applySelectedWidth(widthClass)" class="border p-5 font-bold border-color-white shadow-md">
                <option v-for="tailwindClass in classes.width" :value="tailwindClass">{{ tailwindClass }}</option>
                <!-- <option value="title asc">Title (A-Z)</option> -->
                <!-- <option value="title desc">Title (Z-A)</option> -->
            </select>

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

        <p>applied class</p>
        <div class="text-xl mb-10 shadow-md w-full border p-10 border-color-white">
            sjdoij
        </div>


    </div>

</template>

<script>


    export default {

        mounted() {

        },

        data() {
            widthClass: null
            return {

                classes: {
                    flex: ['flex', 'flex-row', 'flex-col'],
                    width: [
                        '.w-0',
                        '.w-1',
                        '.w-2',
                        '.w-3',
                        '.w-4',
                        '.w-5',
                        '.w-6',
                        '.w-8',
                        '.w-10',
                        '.w-12',
                        '.w-16',
                        '.w-20',
                        '.w-24',
                        '.w-32',
                        '.w-40',
                        '.w-48',
                        '.w-56',
                        '.w-64',
                        '.w-auto',
                        '.w-p',
                        '.w-1/4',
                        '.w-1/3',
                        '.w-2/3',
                        '.w-1/5',
                        '.w-2/5',
                        '.w-3/5',
                        '.w-1/5',
                        '.w-2/5',
                        '.w-3/5',
                        '.w-4/5',
                        '.w-1/6',
                        '.w-2/6',
                        '.w-3/6',
                        '.w-4/6',
                        '.w-5/6',
                        '.w-2/12',
                        '.w-3/12',
                        '.w-4/12',
                        '.w-5/12',
                        '.w-6/12',
                        '.w-7/12',
                        '.w-8/12',
                        '.w-9/12',
                        '.w-10/12',
                        '.w-11/12',
                        '.w-full',
                        '.w-screen'
                    ]
                }
            }
        } ,

        methods: {
            applySelectedWidth: function(width) {
                alert();
                this.selectedWidth = width;
                console.log(this.selectedWidth);
            },
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
