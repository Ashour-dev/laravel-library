<template>
        <!-- <router-link :to="{name:'posts'}">Go to posts</router-link> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Boolpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link active" aria-current="page" :to="{name:'Books'}">Books</router-link>
                </li><li class="nav-item">
                    <router-link class="nav-link active" aria-current="page" :to="{name:'Authors'}">Authors</router-link>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name:'Header'
}
</script>

<style>

</style>