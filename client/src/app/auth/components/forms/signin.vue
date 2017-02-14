<script>
    import {mapActions} from 'vuex'

    export default {
        /**
         * Component's local state
         */
        data() {
            return {
                email: 'happy.developer@vuejsisawesome.com',
                password: '123456',
            }
        },
        methods: {
            /**
             * Map the actions from Vuex to this component.
             * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_operator
             */
            ...mapActions(['attemptLogin', 'setMessage']),

            /**
             * Handle form's submit event
             */
            submit() {
                const {email, password} = this // http://wesbos.com/destructuring-objects/
                this.attemptLogin({email, password}) // this is a Vuex action
                        .then(() => {
                            this.setMessage({type: 'error', message: []}) // this is a Vuex action
                            this.$router.push({name: 'dashboard.index'})
                        })
            },
            /**
             * Reset component's local state
             */
            reset() {
                this.email = ''
                this.password = ''
            },
        },
    }
</script>

<template>
    <!--<div class="well">-->
    <!--<el-form ref="form">-->
    <!--<el-form-item label="E-mail">-->
    <!--<el-input v-model="email"></el-input>-->
    <!--</el-form-item>-->
    <!--<el-form-item label="Password">-->
    <!--<el-input v-model="password" type="password"></el-input>-->
    <!--</el-form-item>-->
    <!--<el-button @click="submit">Login</el-button>-->
    <!--</el-form>-->
    <!--</div>-->
    <div class="gray-bg" style="height: 100vh">
        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name">POS+</h1>

                </div>
                <h3>Welcome to Bakou-POS+</h3>
                <p>More than just POS</p>
                <p>Login in. To see it in action.</p>
                <div class="m-t">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Username" required="" v-model="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required=""
                               v-model="password">
                    </div>
                    <a class="btn btn-primary block full-width m-b" @click="submit">Login</a>

                    <a href="#">
                        <small>Forgot password?</small>
                    </a>
                    <p class="text-muted text-center">
                        <small>Do not have an account?</small>
                    </p>
                    <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                </div>
            </div>
        </div>
    </div>
</template>
