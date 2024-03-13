<script >

</script>

<template>
    <section>
<div v-for="book in response.books" :key="book.id">
    <p>書名:{{ book.name }}</p>
    <p>價錢:{{ book.price }}</p>
</div>
</section>
</template>
