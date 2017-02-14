<script>
    import {mapActions, mapState} from 'vuex'

    export default {
        /**
         * Components name to be displayed on
         * Vue.js Devtools
         */
        name: 'CcProducts',

//    methods: {
//      edit(index) {
//        const { id } = this.products[index]
//        this.$router.push({
//          name: 'products.edit',
//          params: { id },
//          query: { page: this.currentPage } })
//      },
//      create() {
//        this.$router.push({ name: 'products.new', query: { page: this.currentPage } })
//      },
//      hide() {
//        this.$router.push({ name: 'products.index', query: { page: this.currentPage } })
//      },
//      /**
//      * Brings actions from Vuex to the scope of
//      * this component
//      */
//      ...mapActions(['productsSetData', 'setFetching']),
//
//      /**
//      * Fetch a new set of products
//      * based on the current page
//      */
//      fetch() {
//        /**
//        * Vuex action to set fetching property
//        * to true, thus showing the spinner
//        * that is part of navbar.vue
//        */
//        this.setFetching({ fetching: true })
//
//        /**
//        * Makes the HTTP request to the API
//        * $http is a Vue.js plugins exposing
//        * an Axios object.
//        * See /src/plugins/http.js
//        */
//        this.$http.get(`products?page=${this.currentPage}`).then(({ data }) => {
//          /**
//          * Vuex action to set pagination object in
//          * the Vuex Products module
//          */
//          this.productsSetData({
//            list: data.data,
//            pagination: data.meta.pagination,
//          })
//
//          /**
//          * Vuex action to set fetching property
//          * to false, thus hiding the spinner
//          * that is part of navbar.vue
//          */
//          this.setFetching({ fetching: false })
//        })
//      },
//
//      /**
//      * Navigate to a specific page, provided in the
//      * obj received by the method
//      */
//      navigate(page) {
//        /**
//        * Push the page number to the query string
//        */
//        this.$router.push({ name: 'products.index', query: { page } })
//      },
//
//      /**
//      * Shows a confirmation dialog
//      */
//      askRemove(index) {
//        const product = this.products[index]
//        swal({
//          title: 'Are you sure?',
//          text: `Product ${product.name} will be permanently removed.`,
//          type: 'warning',
//          showCancelButton: true,
//          confirmButtonColor: '#DD6B55',
//          confirmButtonText: 'Yes, do it!',
//          closeOnConfirm: false,
//        }, () => this.remove(product)) // callback executed when OK is pressed
//      },
//
//      /**
//      * Makes the HTTP requesto to the API
//      */
//      remove(product) {
//        this.$http.delete(`products/${product.id}`).then(() => {
//          /**
//          * On success fetch a new set of Products
//          * based on current page number
//          */
//          this.fetch()
//
//          /**
//          * Shows a different dialog based on the result
//          */
//          swal('Done!', 'Product removed.', 'success')
//
//          /**
//          * Redirects back to the main list,
//          * in case the form is open
//          */
//          if (this.isFormVisible) {
//            this.$router.push({ name: 'products.index', query: { page: this.currentPage } })
//          }
//        })
//        .catch((error) => {
//          /**
//          * Just shows the result in a form or error.
//          * The general error message is displayed by
//          * the action dispatched by the interceptor.
//          * See /src/plugins/http.js
//          */
//          swal('Falha!', error.response.data.messages[0], 'error')
//        })
//      },
//    },
//
//    watch: {
//      // when page change, fetch new data
//      currentPage: 'fetch',
//    },
//
//    /**
//    * mapState will bring indicated Vuex
//    * state properties to the scope of this component.
//    */
//    computed: {
//      ...mapState({
//        fetching: state => state.fetching,
//        pagination: state => state.Products.pagination,
//        list: state => state.Products.list,
//      }),
//      products() {
//        return this.list
//      },
//      currentPage() {
//        return parseInt(this.$route.query.page, 10) || 1
//      },
//      isFormVisible() {
//        return this.$route.name === 'products.new' || this.$route.name === 'products.edit'
//      },
//    },
//    /**
//    * Right before navigate out to another route
//    * clears all event handlers, thus avoiding
//    * multiple handlers to be set and the annoying
//    * behaviour of multiple AJAX calls being made.
//    */
//    beforeRouteLeave(to, from, next) {
//      this.$bus.$off('product.created')
//      this.$bus.$off('product.updated')
//      jQuery('body').off('keyup')
//      next()
//    },
//    mounted() {
//      /**
//      * Product was created or updated, refresh the list
//      */
//      this.$bus.$on('product.created', () => this.fetch())
//      this.$bus.$on('product.updated', () => this.fetch())
//
//      /**
//      * Fetch data immediately after component is mounted
//      */
//      this.fetch()
//    },
    }
</script>

<template>
    <!--<div>-->
    <!--<div class="row">-->
    <!--<div class="col-md-6">-->
    <!--<h1>Product Management</h1>-->
    <!--</div>-->
    <!--<div class="col-md-6 text-right">-->
    <!--<div class="button-within-header">-->
    <!--<el-button-->
    <!--@click="create"-->
    <!--v-show="!isFormVisible"-->
    <!--type="default"-->
    <!--icon="plus"-->
    <!--size="mini"></el-button>-->
    <!--<el-button-->
    <!--@click="hide"-->
    <!--v-show="isFormVisible"-->
    <!--type="default"-->
    <!--icon="minus"-->
    <!--size="mini"></el-button>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Form to create/edit will be inserted here  &ndash;&gt;-->
    <!--&lt;!&ndash; when navigate to /create or /edit/{id}  &ndash;&gt;-->
    <!--&lt;!&ndash; see /src/modules/products/routes.js  &ndash;&gt;-->
    <!--<transition name="fade">-->
    <!--<router-view></router-view>-->
    <!--</transition>-->

    <!--&lt;!&ndash; el-table and its children comes from Element UI &ndash;&gt;-->
    <!--&lt;!&ndash; http://element.eleme.io/#/en-US/component/table &ndash;&gt;-->
    <!--<el-table v-loading.body="fetching" :data="products" stripe border style="width: 100%">-->
    <!--<el-table-column prop="id" label="ID" width="80"></el-table-column>-->
    <!--<el-table-column prop="name" label="Product"></el-table-column>-->
    <!--<el-table-column inline-template label="Options" width="100">-->
    <!--<div>-->
    <!--<el-button @click="edit($index)" type="default" icon="edit" size="mini"></el-button>-->
    <!--<el-button @click="askRemove($index)" type="default" icon="delete" size="mini"></el-button>-->
    <!--</div>-->
    <!--</el-table-column>-->
    <!--</el-table>-->
    <!--<div class="pagination">-->
    <!--<el-pagination-->
    <!--@current-change="navigate"-->
    <!--:current-page="pagination.current_page"-->
    <!--:page-size="pagination.per_page"-->
    <!--layout="total, prev, pager, next, jumper"-->
    <!--:total="pagination.total">-->
    <!--</el-pagination>-->
    <!--</div>-->
    <!--</div>-->
    <div>
        <div class="ibox-content m-b-sm border-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="product_name">Product Name</label>
                        <input type="text" id="product_name" name="product_name" value=""
                               placeholder="Product Name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label" for="status">Category</label>
                        <select name="status" id="status" class="form-control">
                            <option value="canon" selected>Canon</option>
                            <option>Kodak</option>
                            <option>Nikon</option>
                            <option>Panasonic</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label" for="status">Supplier</label>
                        <select name="supplier" id="supplier" class="form-control">
                            <option value="ABC" selected>Apple</option>
                            <option>Apple</option>
                            <option>Microsoft</option>
                            <option>Panasonic</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="status">Brand</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" selected>Brand A</option>
                            <option value="0">Brand B</option>
                            <option value="0">Brand C</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <table class="footable table table-stripped toggle-arrow-tiny footable-loaded tablet breakpoint"
                               data-page-size="15">
                            <thead>
                            <tr>

                                <th data-toggle="true"
                                    class="footable-visible footable-sortable footable-first-column">Product
                                    Name<span class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Model<span
                                        class="footable-sort-indicator"></span></th>
                                <th data-hide="all" class="footable-sortable" style="display: none;">
                                    Description<span class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Price<span
                                        class="footable-sort-indicator"></span></th>
                                <th data-hide="phone,tablet" class="footable-sortable"
                                    style="display: none;">Quantity<span
                                        class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Status<span
                                        class="footable-sort-indicator"></span></th>
                                <th class="text-right footable-visible footable-last-column"
                                    data-sort-ignore="true">Action
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr class="footable-even" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 1
                                </td>
                                <td class="footable-visible">
                                    Model 1
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $50.00
                                </td>
                                <td class="" style="display: none;">
                                    1000
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 2
                                </td>
                                <td class="footable-visible">
                                    Model 2
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $40.00
                                </td>
                                <td class="" style="display: none;">
                                    4300
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 3
                                </td>
                                <td class="footable-visible">
                                    Model 3
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $22.00
                                </td>
                                <td class="" style="display: none;">
                                    300
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-danger">Disabled</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 4
                                </td>
                                <td class="footable-visible">
                                    Model 4
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $67.00
                                </td>
                                <td class="" style="display: none;">
                                    2300
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 5
                                </td>
                                <td class="footable-visible">
                                    Model 5
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $76.00
                                </td>
                                <td class="" style="display: none;">
                                    800
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-warning">Low stock</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 6
                                </td>
                                <td class="footable-visible">
                                    Model 6
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $60.00
                                </td>
                                <td class="" style="display: none;">
                                    6000
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-danger">Disabled</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 7
                                </td>
                                <td class="footable-visible">
                                    Model 7
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $32.00
                                </td>
                                <td class="" style="display: none;">
                                    700
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-danger">Disabled</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 8
                                </td>
                                <td class="footable-visible">
                                    Model 8
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $86.00
                                </td>
                                <td class="" style="display: none;">
                                    5180
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 9
                                </td>
                                <td class="footable-visible">
                                    Model 9
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $97.00
                                </td>
                                <td class="" style="display: none;">
                                    450
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 10
                                </td>
                                <td class="footable-visible">
                                    Model 10
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $43.00
                                </td>
                                <td class="" style="display: none;">
                                    7600
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 1
                                </td>
                                <td class="footable-visible">
                                    Model 1
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $50.00
                                </td>
                                <td class="" style="display: none;">
                                    1000
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 2
                                </td>
                                <td class="footable-visible">
                                    Model 2
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $40.00
                                </td>
                                <td class="" style="display: none;">
                                    4300
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 3
                                </td>
                                <td class="footable-visible">
                                    Model 3
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $22.00
                                </td>
                                <td class="" style="display: none;">
                                    300
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-warning">Low stock</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 4
                                </td>
                                <td class="footable-visible">
                                    Model 4
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $67.00
                                </td>
                                <td class="" style="display: none;">
                                    2300
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 5
                                </td>
                                <td class="footable-visible">
                                    Model 5
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $76.00
                                </td>
                                <td class="" style="display: none;">
                                    800
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 6
                                </td>
                                <td class="footable-visible">
                                    Model 6
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $60.00
                                </td>
                                <td class="" style="display: none;">
                                    6000
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 7
                                </td>
                                <td class="footable-visible">
                                    Model 7
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $32.00
                                </td>
                                <td class="" style="display: none;">
                                    700
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 8
                                </td>
                                <td class="footable-visible">
                                    Model 8
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $86.00
                                </td>
                                <td class="" style="display: none;">
                                    5180
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-even" style="display: none;">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 9
                                </td>
                                <td class="footable-visible">
                                    Model 9
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $97.00
                                </td>
                                <td class="" style="display: none;">
                                    450
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="footable-odd" style="display: none;">
                                <td class="footable-visible footable-first-column"><span
                                        class="footable-toggle"></span>
                                    Example product 10
                                </td>
                                <td class="footable-visible">
                                    Model 10
                                </td>
                                <td style="display: none;">
                                    It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is
                                    that it has a more-or-less normal distribution of letters, as opposed to
                                    using
                                    'Content here, content here', making it look like readable English.
                                </td>
                                <td class="footable-visible">
                                    $43.00
                                </td>
                                <td class="" style="display: none;">
                                    7600
                                </td>
                                <td class="footable-visible">
                                    <span class="label label-primary">Enable</span>
                                </td>
                                <td class="text-right footable-visible footable-last-column">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6" class="footable-visible">
                                    <ul class="pagination pull-right">
                                        <li class="footable-page-arrow disabled"><a data-page="first"
                                                                                    href="#first">«</a></li>
                                        <li class="footable-page-arrow disabled"><a data-page="prev"
                                                                                    href="#prev">‹</a></li>
                                        <li class="footable-page active"><a data-page="0" href="#">1</a>
                                        </li>
                                        <li class="footable-page"><a data-page="1" href="#">2</a></li>
                                        <li class="footable-page-arrow"><a data-page="next"
                                                                           href="#next">›</a></li>
                                        <li class="footable-page-arrow"><a data-page="last"
                                                                           href="#last">»</a></li>
                                    </ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<!--<style scoped>-->
<!--.pagination {-->
<!--float: right;-->
<!--margin-top: 20px;-->
<!--}-->
<!--.button-within-header {-->
<!--margin-top: 32px;-->
<!--}-->
<!--.fade-enter-active, .fade-leave-active {-->
<!--transition: opacity .7s ease;-->
<!--}-->
<!--.fade-enter, .fade-leave-active {-->
<!--opacity: 0;-->
<!--}-->
<!--</style>-->
