<template>
    <div class="wrapper">
            <div class="card">
                <img :src="AuthorsPics.faces[author.id].urls[4][512]" :alt="author.last_name">
                <div class="card-title w-100 position-absolute top-0 start-50 translate-middle pt-4">
                    <h1 class="text-center">{{author.first_name}} {{author.last_name}}</h1>
                </div>
                <!-- <p class="card-desc bg-dark">
                    <span class="name">Name: {{author.first_name}} {{author.last_name}}</span>
                </p> -->
            </div>
        </div>
</template>

<script>
export default {
    name:'Author',
    props:['author','AuthorsPics'],
}
</script>

<style lang="scss" scoped>

.card {
    margin: 40px;
    position: relative;
    width: 250px;
    height: 350px;
    box-shadow: 0 40px 60px -6px black;
}


.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    position: relative;
}

.card:hover .card-desc {
    opacity: 1;
    height: 100%;
}
</style>