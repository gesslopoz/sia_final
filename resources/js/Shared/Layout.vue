
<template>
    
    <nav class="navbar navbar-expand navbar-dark">
  <div class="container bg-dark">
    <a class="navbar-brand" href="#">Artist Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component=='Artist'}" href="/artist">Artists</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="/about">About Us</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Feedback'}" href="/feedback">Feedback</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container bg-white p-4 rounded-3 my-4 shadow" style="min-height: 500px">
    <slot/>

     <footer class="text-center my-5 text-dark">
    Copyright &copy; 2022. All rights reserved.
</footer>

</section>

</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section{
    background-color: white;
    opacity: 0.7;
}

.selected{
    color: yellow;
    font-weight: bold;
}
</style> 