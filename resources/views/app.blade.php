<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Assets App</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
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

            .kodchasan {
                font-family: 'Kodchasan', sans-serif;
            }

            body {

                background: #396afc;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #2948ff, #396afc);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #2948ff, #396afc); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }

            /* FONTS */
            @font-face {
                font-family: integral-bold;
                src: url('/fonts/integral-cf-bold.otf');
            }

            .integral-bold {
                font-family: integral-bold;
            }
            .elevated-blue-bg {
                background-color: #396afc;
            }
        </style>

    </head>
    <body class="integral-bold tracking-wide text-white">

        <div id="app">

            <div class="w-full px-20 py-10">

                <!-- HEADER? -->
                <header class="elevated-blue-bg mb-10 flex flex-col border-b border-color-white shadow-md p-10">

                    <h1 class="text-6xl text-center" style="letter-spacing: 6px;">Dhevak</h1>
                    <h2 class="kodchasan text-2xl text-center">Asset Library</h2>

                </header>

                <!-- MAIN WEBSITE SECTION? -->
                <main class="flex flex-wrap flex-row mb-10">

                    <aside class="elevated-blue-bg w-1/3 p-10 shadow-md rounded-sm border-color-white">

                        <!-- PHILOSOPHY -->
                        <section class="mb-10">

                            <h5 class="uppercase font-bold mb-5 text-3xl" style="letter-spacing: 6px;">The Philosophy<h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/the-theory" exact>The Theory</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/" exact>Aesthetics Layer</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/" exact>Core Layer</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/" exact>Overlays Layer</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/" exact>Notifications Layer</router-link></li>
                            </ul>

                        </section>

                        <!-- ATOMS -->
                        <section class="mb-10">

                            <h5 class="uppercase font-bold mb-5 text-3xl" style="letter-spacing: 6px;">Atoms<h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/card" exact>Card</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/" exact>Input</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/logo-symbol">Button</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/colors">Gradients</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/typography">Typography</router-link></li>
                            </ul>

                        </section>

                        <!-- MOLECULES -->
                        <section class="mb-10">

                            <h5 class="uppercase font-bold mb-5 text-3xl" style="letter-spacing: 6px;">Molecules<h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/" exact></router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/typography">Typography</router-link></li>
                            </ul>

                        </section>

                        <!-- ORGANISMS -->
                        <section class="mb-10">

                            <h5 class="uppercase font-bold mb-5 text-3xl" style="letter-spacing: 6px;">Organisms<h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/" exact></router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/typography">Typography</router-link></li>
                            </ul>

                        </section>

                        <!-- TESTS -->
                        <section class="mb-10">

                            <h5 class="uppercase font-bold mb-5 text-3xl" style="letter-spacing: 6px;">Tests<h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link class="kodchasan text-lg" to="/blog">Blog Component</router-link></li>
                            </ul>

                        </section>

                        <!-- STATS -->
                        <!-- <section>

                            <h5 class="uppercase font-bold mb-4 text-base">Stats<h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/site-stats">Site Stats</router-link></li>
                            </ul>

                        </section> -->

                    </aside>

                    <!-- ALL THE COMPONENTS ARE LOADED HERE -->
                    <div class="primary flex-1 ml-10 p-10 elevated-blue-bg shadow-md">

                        <router-view></router-view>

                    </div>

                    <section class="elevated-blue-bg mt-10 w-full h-64 shadow-md">

                    <section>

                </main>

                <footer class="elevated-blue-bg shadow-md w-full flex flex-row justify-between bg-blue-600">

                    <!-- <div class="w-1/3 flex flex-col">
                        <h5 class="font-bold text-3xl">Dhevak - Communicatie en Creatieve Concepten</h5>
                        <p>Twee jongens. Geen ervaring. 1 droom. Leggo bois.</p>
                    </div> -->

                    <div class=" bg-blue-400 p-10">

                        <h5 class="font-bold uppercase text-2xl">Footer List Title</h5>
                        <ul>
                            <li>item 2</li>
                            <li>item 3</li>
                            <li>item 4</li>
                        </ul>

                    </div>

                    <div class=" bg-blue-400 p-10">

                        <h5 class="font-bold uppercase text-2xl">Footer List Title</h5>
                        <ul>
                            <li>item 2</li>
                            <li>item 3</li>
                            <li>item 4</li>
                        </ul>

                    </div>

                    <div class=" bg-blue-400 p-10">

                        <h5 class="font-bold uppercase text-2xl">Footer List Title</h5>
                        <ul>
                            <li>item 2</li>
                            <li>item 3</li>
                            <li>item 4</li>
                        </ul>

                    </div>

                </footer>

            </div>

        </div>

        <!-- LOAD VUE -->
        <script src="/js/app.js"></script>

    </body>
</html>
