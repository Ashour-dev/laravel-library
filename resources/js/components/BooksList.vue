<template>
    <div class="wrapper">
        <div class="cards">
            <Book v-for="(book, index) in books" :key="index" :book="book"/>
        </div>
    </div>
</template>

<script>
import Book from './Book';
export default {
    name:'BooksList',
    components:{
        Book,
    },
    data(){
        return{
            books:[],
        }
    },
    methods:{
        getBooks(){
            axios.get('/api/books')
                .then(response =>{
                    this.books=response.data;
                    console.log(this.books);
                })
        }
    },
    created(){
        this.getBooks();
    }
}
</script>

<style lang="scss" scoped>
.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #1a2530;
.cards {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
}

</style>