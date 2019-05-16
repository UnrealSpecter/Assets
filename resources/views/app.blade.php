<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Assets App</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

        <style media="screen">
            .text-grey-darkest {
                color: #4a4a4a;
            }
            .black {
                color: #222222;
            }
            .open-sans {
                font-family: 'Open Sans', sans-serif;
            }
        </style>

    </head>
    <body class="open-sans">

        <div id="app">

            <div class="container px-20 py-10">

                <!-- HEADER? -->
                <header class="py-6">

                    <h1>Laracasts</h1>

                </header>

                <!-- MAIN WEBSITE SECTION? -->
                <main class="flex">

                    <aside class="w-1/5 pt-8">

                        <section class="mb-8">

                            <h5 class="uppercase font-bold mb-4 text-base">The Brand<h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/typography">Typography</router-link></li>
                            </ul>

                        </section>

                        <section>

                            <h5 class="uppercase font-bold mb-4 text-base">Doodles<h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/loaders-and-animations">Loaders and Animations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li>
                            </ul>

                        </section>

                    </aside>

                    <!-- ALL THE COMPONENTS ARE LOADED HERE -->
                    <div class="primary">

                        <router-view></router-view>

                    </div>

                </main>

            </div>

        </div>

        <!-- LOAD VUE -->
        <script src="/js/app.js"></script>

    </body>
</html>
