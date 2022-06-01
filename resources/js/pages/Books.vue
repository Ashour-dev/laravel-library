<template>
    <div>
        <BooksList/>
    </div>
</template>

<script>
import BooksList from '../components/BooksList';
export default {
    name:'Books',
    components:{
        BooksList,
    }
}
</script>

<style lang="scss" scoped>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;1,200;1,300&display=swap');
    *   {
        font-family: 'Raleway', sans-serif;
    }
</style>