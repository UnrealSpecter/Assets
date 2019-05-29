<template>

    <div>

        <div class="card w-1/3 shadow-md p-10" v-for="blog in blogs">
            <h1 class="w-full text-center">{{ blog.title }}</h1>
            <p class="w-full text-center">{{ blog.summary }}</p>
            <p class="w-full text-center">{{ blog.publishDate }}</p>
            <p class="w-full text-center">{{ blog.body }}</p>
        </div>

    </div>

</template>

<script>

    export default {
        data() {
            return {
                blogs: [
                    {
                        'title': 'title',
                        'summary': 'summary',
                        'publishDate': 'date',
                        'body': 'body'
                    }
                ],
            }
        },
        mounted() {

            axios.get('api/blogs').then(response => {

                response.data.forEach((data) => {

                    this.blogs.push({
                        id : data.title,
                        name : data.summary,
                        publishDate : data.publishDate,
                        body: data.body
                    })

                })

            })

        },
    }

</script>
