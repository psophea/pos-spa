<script>
    import {mapActions, mapGetters, mapState} from 'vuex'
    //    import CcSpinner from '../general/spinner'
    //    import {version} from '../../config'

    export default {
        components: {
//            CcSpinner,
        },
        computed: {
            /**
             * See src/app/auth/vuex/getters.js
             */
            ...mapGetters(['currentUser', 'isLogged']),
//            version() {
//                return version
//            },
            ...mapState({
                menu_list: state => state.Sidebar.menu_list,
            }),
        },
        watch: {
            isLogged(value) { // isLogged changes when the token changes
                if (value === false) {
                    this.$router.push({name: 'auth.signin'})
                }
            },
        },
        methods: {
            /**
             * Makes logout() action available within this component
             * See /src/app/auth/vuex/actions.js
             */
            ...mapActions(['logout', 'menuSetSidebar']),
            /* eslint-disable no-undef */
            navigate(name) {
                switch (name) {
                    case 'logout':
                        this.logout()
                        break;
                    default:
                        this.$router.push({name})
                        break;
                }
            },
            fetchSidebar() {
                this.$http.get('menu/sidebar').then(({data}) => {
                    /**
                     * Vuex action to set full list array in
                     * the Vuex Categories module
                     */
                    this.menuSetSidebar({
                        menu_list: data.data,
                    })
                })
            },
        },
        mounted() {
            this.fetchSidebar()
        }
    }
</script>

<template>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle" src="static/inspinia/img/profile_small.jpg">
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                    class="font-bold">{{ currentUser.name }}</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b
                                    class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a @click="logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        POS+
                    </div>
                </li>

                <!-- menu item -->
                <li v-for="menu in menu_list">
                    <router-link :to="menu.href" replace>
                        <i :class="menu.icon"></i>
                        <span :class="menu.is_nav_label? 'nav-label':''">{{ menu.label }}</span>
                        <span class="fa arrow" v-show="menu.children.length"></span>
                    </router-link>

                    <ul class="nav nav-second-level" v-show="menu.children.length">
                        <li v-for="item in menu.children">
                            <router-link :to="item.href" replace>{{ item.label }}</router-link>
                        </li>
                    </ul>
                </li>
                <!-- end of menu item -->

                <li class="active">
                    <a href="index.html">
                      <i class="fa fa-th-large"></i>
                      <span class="nav-label">Dashboards</span>
                      <span class="fa arrow"></span>
                    </a>
                     <ul class="nav nav-second-level">
                        <li class="active"><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                      </ul>
                 </li>
            </ul>

        </div>
    </nav>
</template>