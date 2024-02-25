<script setup>

import { Link } from '@inertiajs/vue3'
</script>

<template>
  <main>
    <header class="header">
      <Link href="/" class="active p-2 rounded-lg bg-blue-200">Home</Link>
      <Link href="/employees" class="inactive p-2 rounded-lg bg-blue-500 m-2">Employees</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<style scoped>
.header {
  display: flex;
  align-items: center;
  justify-content:space-evenly
}

.active {
  background-color: #3F72AF;
}
.inactive {
  background-color: #DBE2EF;
}
</style>