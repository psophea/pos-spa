<script>
import { mapGetters } from 'vuex'
import CcSideBar from './app/sidebar/sidebar'
import CcTopNavBar from './components/root/topnavbar'
import CcBreadcrumb from './components/root/breadcrumb'
import CcFooter from './components/root/footer'

export default {
    name: 'Codecasts',
    components: {
        CcSideBar,
        CcTopNavBar,
        CcBreadcrumb,
        CcFooter,
    },
    computed: {
        ...mapGetters(['shouldShowNavigation']),
    },
}
</script>

<template>
    <div id="app">
        <div id="wrapper" v-if="shouldShowNavigation">
            <cc-side-bar></cc-side-bar>
            <div id="page-wrapper" class="gray-bg">
                <cc-top-nav-bar></cc-top-nav-bar>
                <cc-breadcrumb></cc-breadcrumb>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper wrapper-content">
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
                <cc-footer></cc-footer>
            </div>
        </div>
        <router-view v-else></router-view>
    </div>
</template>
