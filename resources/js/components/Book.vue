<template>
    <div class="wrapper">
        <!-- <span>{{book.name}}</span> -->
            <div class="card">
                <img :src="book.cover" :alt="book.name">
                <div class="card-title w-100 position-absolute top-0 start-50 translate-middle ">
                    <h1 class="text-center">{{book.name}}</h1>
                </div>
                <p class="card-desc bg-dark">
                    <span class="name">Name: {{book.name}}</span>
                    <span class="name">Lang: {{book.lang}}</span>
                    <span class="name">Format: {{book.format}}</span>
                    <span class="name">Num. of pages: {{book.pages_number}}</span>
                    <!-- <span class="name">Author name: {{book.Author}}</span> -->
                </p>
            </div>
        </div>
</template>

<script>
export default {
    name:'Book',
    props:['book'],
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

.card-title {
    h1{
        color: black;
        font-weight: 300;
    }
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    position: relative;
}

.card-desc {
    display: block;
    font-size: 1.2rem;
    width: 100%;
    position: absolute;
    height: 0;
    top: 0;
    opacity: 0;
    padding: 18px 8%;
    background-color: white;
    transition: 0.8s ease;
        span{
            display: block;
            color: white;
        }
}

.card:hover .card-desc {
    opacity: 1;
    height: 100%;
}

h1 {
    font-size: 2.8rem;
    color: #fff;
    margin: 40px 0 20px 0;
    text-align: center;
}

</style>