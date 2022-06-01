<template>
    <div>
        <h1>Testing</h1>
        <Book v-for="(book, index) in books" :key="index" :book="book"/>
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

<style>

</style>