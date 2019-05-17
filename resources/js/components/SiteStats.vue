<template>
    <div class="">

        <h1 class="font-normal text-3xl text-grey-darkest leading-none">
            Site Stats
        </h1>

        <ul>
            <li><strong>Total Series: {{ series }}</strong></li>
            <li><strong>Total Lessons: {{ lessons }}</strong></li>
        </ul>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                series: 0,
                lessons: 0
            }
        },
        created() {
            axios.get('https://laracasts.test/api/stats')
                .then(console.log);
        }
    }
</script>
