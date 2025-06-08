<script setup lang="ts">
import axios from 'axios'

axios.defaults.withCredentials = true
axios.defaults.withXSRFToken = true
axios.defaults.baseURL = 'http://localhost:8000'

const register = async () => {
  console.log('Registering user...')
  await axios.get('/sanctum/csrf-cookie')
  try {
    const response = await axios.post('/api/register', {
      name: 'Test User',
      email: 'test@example.com',
      password: 'password',
      password_confirmation: 'password',
    })
    //console.log('Registration successful:', response.data)
  } catch (error) {
    console.error('Registration failed:', error)
  }
}
register()
</script>
<template>
  <h1>Register</h1>
</template>
