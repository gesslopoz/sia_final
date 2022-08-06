
<template>
    <h1>Home</h1>

    <div>
      <img src="img/kim.jpg" class="imageKim" alt="">
       <img src="img/tom.jpg" class="imageTom" alt="">
       <img src="img/kylie.jpg" class="imageKylie" alt="">
       <img src="img/jackie.jpg" class="imageJackie" alt="">
       <img src="img/alden.png" class="imageAlden" alt="">
    </div>
   
    
</template>

<script setup>
import Layout from '../Shared/Layout.vue'


</script>

<script>
    export default{
        layout: Layout
    }
</script>

<style scoped>
.imageKim{
    height: 200px;
    width: 200px;
}

.imageTom{
    height: 200px;
    width: 200px;
}

.imageKylie{
    height: 200px;
    width: 200px;
}

.imageJackie{
    height: 200px;
    width: 200px;
}

.imageAlden{
    height: 200px;
    width: 200px;
}
</style>