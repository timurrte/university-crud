<script setup>
import Layout from './Layout.vue';
</script>

<template>
    <Layout></Layout>
        <h1>Hello, {{name}}</h1>

    <p>We will use this technologies stack:</p> 
    <ul>
        <li v-for="item in frameworks" bg-blue-500>{{ item }}</li>
    </ul>

    <Shit></Shit>

</template>

<script>
export default {
    props: {
        name: String,
        title: String,
        frameworks: Array
    },
}
</script>