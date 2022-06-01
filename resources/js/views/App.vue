<template>
    <div>
        <Header/>
        <Main/>
    </div>
</template>

<script>
import Header from '../components/Header';
import Main from '../components/Main';
export default {
    name:'App',
    components:{
        Header,
        Main,
    }
}
</script>

<style>
@import'~bootstrap/dist/css/bootstrap.css';
@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;1,200;1,300&display=swap');
Main{
    font-family: 'Raleway', sans-serif;
}
</style>