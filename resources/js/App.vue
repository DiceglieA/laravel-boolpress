<template>
  <div class="container">
    <NavBar />
    <h1>Benvenuto nei post</h1>

    <main>
        <div class="container">
            <router-view></router-view>
        </div>
    </main>
    <FooterComp />

    <!-- <ol>
        <li v-for="post in arrPosts" :key="post.id">{{ post.title }}</li>
    </ol> -->

    <!-- <div class="container">
            <h1 class="text-center">Post</h1>
            <div class="row g-3">
                <div v-for="post in arrPosts" :key="post.id" class="col-sm-6 col-md-4">
                    <div class="card h-100">
                        <img :src="'/storage/' + post.uploaded_img" class="card-img-top" :alt="post.title">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ post.title }}</h5>
                            <p class="card-text flex-grow-1">{{ post.excerpt }}</p>
                            <a :href="'/posts/' + post.slug" class="btn btn-primary">Leggi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

  </div>
</template>

<script>
import NavBar from './components/NavBar';
import FooterComp from './components/FooterComp';

export default {
    name: 'App',
    components: {
        NavBar,
        FooterComp,
    },
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';
</style>
