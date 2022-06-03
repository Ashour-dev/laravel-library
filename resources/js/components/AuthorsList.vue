<template>
    <div class="wrapper">
        <div class="cards">
            <Author v-for="(author, index) in Authors" :key="index" :myKey="index" :author="author" :AuthorsPics="AuthorsPics"/>
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination d-flex justify-content-center">
                <li class="page-item" v-if="pagination.current_page > 1" @click="getAuthors(pagination.current_page - 1)">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link">{{pagination.current_page}}</a>
                </li>
                <li class="page-item" v-if="pagination.current_page < pagination.last_page" @click="getAuthors(pagination.current_page + 1)">
                    <a class="page-link">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
import Author from './Author';
export default {
    name:'AuthorsList',
    components:{
        Author,
    },
    data(){
        return{
            Authors:[],
            AuthorsPics:[],
            pagination:[]
        }
    },
    methods:{
        getAuthors(page){
            axios.get(`/api/authors?page=${page}`)
                .then(response =>{
                    this.Authors=response.data.data;
                    this.pagination= response.data;
                    // console.log(this.Authors);
            }).catch((error)=> {
                console.error(error);
            });
            axios.get(`https://api.unsplash.com/search/photos?client_id=x7wuqYgBvdtaD-KAanKQUq-aFQPr1b0AgWKs2FAiwWM&&query=people-portrait&&page=${page}`)
                .then(response =>{
                    this.AuthorsPics=response.data.results;
                    console.log(this.AuthorsPics);
            }).catch((error)=> {
                console.error(error);
            });
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    },
    created(){
        this.getAuthors(1);
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
.page-item{
    cursor: pointer;
}

</style>