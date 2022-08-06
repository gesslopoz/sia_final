
<template>
    
    <h1>My Artists</h1>
    <hr>

    <div class="d-flex align-content-between">
        <div class="card mb-3" v-for="artist in artists" :key="artist.id">
            <div class="card-header bg-info">
                <h4>Name: {{artist.name}}</h4>
            </div>
            <div class="card-body">
               <h5>Born: {{artist.born}}</h5>
               <h5>Nationality: {{artist.nationality}}</h5>
               <h5>Overview: {{artist.overview}}</h5>
            </div>
        </div>
    </div>

</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        artists: Array
    }
}
</script>

<style scoped>
.card{
    width: 375px;
}
</style>