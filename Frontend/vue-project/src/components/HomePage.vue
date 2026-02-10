<script setup>
import { ref, onMounted } from 'vue'

const homeData = ref(null)
const loading = ref(false)
const error = ref(null)

const fetchHomeData = async () => {
  loading.value = true
  error.value = null
  try {
    const response = await fetch('http://127.0.0.1:8000/api/home')
    if (!response.ok) throw new Error('Failed to fetch')
    homeData.value = await response.json()
  } catch (err) {
    error.value = err.message
    homeData.value = null
  } finally {
    loading.value = false
  }
}

onMounted(() => {
  fetchHomeData()
})
</script>

<template>
  <v-container class="pa-4">
    <v-row justify="center">
      <v-col cols="12" md="8">
        <v-card elevation="2">
          <v-card-title class="headline">Home Page</v-card-title>
          <v-card-text>
            <p>Welcome to the Home page built with Vue 3 + Vuetify!</p>
            <p>This is a modern starter template featuring:</p>
            <ul>
              <li><strong>Frontend:</strong> Vue 3 with Vuetify components</li>
              <li><strong>Backend:</strong> Laravel with RESTful API</li>
              <li><strong>Database:</strong> SQLite (configured, switch to MySQL if needed)</li>
            </ul>
            
            <v-divider class="my-4"></v-divider>
            
            <v-progress-circular v-if="loading" indeterminate color="primary" class="my-4"></v-progress-circular>
            
            <v-alert v-else-if="error" type="error" class="my-4">
              <strong>API Error:</strong> {{ error }}
            </v-alert>
            
            <v-card v-else-if="homeData" outlined class="my-4" bg-color="blue-lighten-5">
              <v-card-title>{{ homeData.title }}</v-card-title>
              <v-card-text>{{ homeData.message }}</v-card-text>
            </v-card>
          </v-card-text>
          <v-card-actions>
            <v-btn color="primary" @click="fetchHomeData" :loading="loading">Refresh Data</v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>
</style>
