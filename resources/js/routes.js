import NotFound404 from './components/NotFound404'

//first section
import TheTheory from './components/TheTheory'
import Card from './components/Card'
import Blog from './components/Blog'

// import Colors from './components/Colors'
// import Logo from './components/Logo'
// import LogoSymbol from './components/LogoSymbol'
// import Typography from './components/Typography'

// second section
// import Mascot from './components/Mascot'
// import Illustrations from './components/Illustrations'
// import Wallpapers from './components/Wallpapers'

// third section
// import SiteStats from './components/SiteStats'

// let LoadersAndAnimations = () =>
//     import(/* webpackChunkName: "loaders" */ './components/LoadersAndAnimations');

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound404
        },

        // first section
        {
            path: '/the-theory',
            component: TheTheory
        },

        {
            path: '/card',
            component: Card
        },

        {
            path: '/blog',
            component: Blog
        },
        // {
        //     path: '/',
        //     component: Logo
        // },
        //
        // {
        //     path: '/logo-symbol',
        //     component: LogoSymbol
        // },
        //
        // {
        //     path: '/colors',
        //     component: Colors
        // },
        //
        // {
        //     path: '/typography',
        //     component: Typography
        // },

        // second section
        // {
        //     path: '/mascot',
        //     component: Mascot
        // },
        //
        // {
        //     path: '/illustrations',
        //     component: Illustrations
        // },
        //
        // {
        //     path: '/loaders-and-animations',
        //     component: LoadersAndAnimations
        // },
        //
        // {
        //     path: '/wallpapers',
        //     component: Wallpapers
        // },

        // third section
        // {
        //     path: '/site-stats',
        //     component: SiteStats
        // }

    ]
}
