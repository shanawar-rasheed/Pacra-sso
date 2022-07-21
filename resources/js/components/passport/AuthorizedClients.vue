<style scoped>
.action-link {
    cursor: pointer;
}

.m-b-none {
    margin-bottom: 0;
}
</style>

<template>
    <div class="container">
        <div v-if="tokens.length > 0">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Authorized Applications</div>
                        <div class="card-body">
                            <!-- Authorized Tokens -->
                            <!-- <table class="table table-borderless m-b-none" id="authorize_app_table"> -->
                            <table class="table  m-b-none" id="authorize_app_table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <!-- <th>Scopes</th> -->
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="token in tokens">
                                    <td >
                                        {{ token.client.name }}
                                    </td>

                                    <!-- Client Name -->
                                    <!-- <td style="vertical-align: middle;">
                                        {{ token.client.name }}
                                    </td> -->

                                    <!-- Scopes -->
                                    <!-- <td style="vertical-align: middle;">
                                            <span v-if="token.scopes.length > 0">
                                                {{ token.scopes.join(', ') }}
                                            </span>
                                    </td> -->

                                    <!-- Revoke Button -->
                                    <!-- <td style="vertical-align: middle;"> -->
                                    <td>
                                        <a class="action-link text-danger" @click="revoke(token)">
                                            Revoke
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

// import "jquery/dist/jquery.min.js";
// import "bootstrap/dist/css/bootstrap.min.css";
// import "datatables.net-dt/js/dataTables.dataTables";
// import "datatables.net-dt/css/jquery.dataTables.min.css";
// import $ from "jquery";
   import DatatableFactory from 'vuejs-datatable';
export default {
    /*
     * The component's data.
     */
     components: { DatatableFactory },
    data() {
        return {
            tokens: []
        };
    },

    /**
     * Prepare the component (Vue 1.x).
     */
    ready() {
        this.prepareComponent();
    },

    /**
     * Prepare the component (Vue 2.x).
     */
    mounted() {
        this.prepareComponent();
    },

    methods: {
        /**
         * Prepare the component (Vue 2.x).
         */
        prepareComponent() {
            this.getTokens();

        },

        /**
         * Get all of the authorized tokens for the user.
         */
        getTokens() {
            axios.get('/oauth/tokens')
                .then(response => {
                    this.tokens = response.data;
                    console.log(response.data)
                });

        },



        /**
         * Revoke the given token.
         */
        revoke(token) {
            axios.delete('/oauth/tokens/' + token.id)
                .then(response => {
                    this.getTokens();
                });
            // console.log(token);
        }
    }
}
</script>
