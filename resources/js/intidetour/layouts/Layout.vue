<template>
  <v-app>
    <link
      href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css"
      rel="stylesheet"
    />
      <navbar></navbar>
    <v-content class="ma-0 pa-0">
      <v-container fluid class="ma-0 pa-0 blue lighten-5 text-center" min-width="100%">
        <router-view></router-view>
      </v-container>
    </v-content>
    <DashboardFooter />
  </v-app>
</template>

<script>
import Navbar from "../navigation/Navbar";
import Footer from "../navigation/Footer";
export default {
  components: {
    Navbar,
    DashboardFooter: Footer
  }
};
</script>