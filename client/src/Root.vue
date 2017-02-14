<script>
    import {mapGetters} from 'vuex'
    import CcSideBar from './components/root/sidebar'
    //import CcNavBar from './components/root/navbar'
    import CcTopNavBar from './components/root/topnavbar'
    import CcBreadcrumb from './components/root/breadcrumb'
//    import CcAlerts from './components/general/alerts'
    import CcFooter from './components/root/footer'

    export default {
        name: 'Codecasts',
        components: {
            CcSideBar,
//    CcNavBar,
            CcTopNavBar,
            CcBreadcrumb,
//            CcAlerts,
            CcFooter,
        },
        computed: {
            ...mapGetters(['shouldShowNavigation']),
        },
    }
</script>

<template>
    <div>
        <div id="wrapper" v-show="shouldShowNavigation">
            <cc-side-bar v-show="shouldShowNavigation"></cc-side-bar>
            <!--<cc-nav-bar v-show="shouldShowNavigation"></cc-nav-bar>-->
            <div id="page-wrapper" class="gray-bg">
                <cc-top-nav-bar v-show="shouldShowNavigation"></cc-top-nav-bar>
                <cc-breadcrumb v-show="shouldShowNavigation"></cc-breadcrumb>
                <!--<div class="container">-->
                <!--<cc-alerts></cc-alerts>-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper wrapper-content">
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
                <cc-footer v-show="shouldShowNavigation"></cc-footer>
            </div>
        </div>

        <router-view v-show="!shouldShowNavigation"></router-view>
    </div>
</template>

<!--<style lang="sass" src="assets/sass/app.scss"></style>-->
