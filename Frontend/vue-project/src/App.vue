<script setup>
import { ref, onMounted } from 'vue'

const data = ref(null)

onMounted(async () => {
  try {
    const response = await fetch('http://localhost:8000/api/home')
    data.value = await response.json()
  } catch (error) {
    console.error('Error fetching data:', error)
  }
})
</script>

<template>
  <div>
    <h1 v-if="data">{{ data.title }}</h1>
    <p v-if="data">{{ data.message }}</p>
    <p v-if="error" style="color: red;">Kļūda: {{ error }}</p>
    <p v-if="!data && !error">Ielādē...</p>
  </div>
</template>
