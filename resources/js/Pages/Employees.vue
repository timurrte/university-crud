<script setup>
import Layout from './Layout.vue'
import Employee from './Components/Employee.vue'
import { Head } from '@inertiajs/vue3'

defineProps({ "employees": Array, })
</script>

<template>
  <Layout>
    <Head title="Employees" />
    
    <ul>
      <button class="text-white self-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Додати співробітника</button>
      <Employee v-for="employee in employees" :employee="employee"></Employee>
    </ul>
  </Layout>

</template>

<style scoped>
ul {
  display: flex;
  flex-direction: column;
  align-items: center;
}

</style>