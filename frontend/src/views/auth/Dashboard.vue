<script setup lang="ts">
import axiosInstance from '@/lib/axios'

const user = async () => {
  console.log('Fetching user data...')
  try {
    const response = await axiosInstance.get('/user')
    console.log('User data fetched successfully:', response.data)
  } catch (error) {
    console.error('Failed to fetch user data:', error)
  }
}

const logout = async () => {
  console.log('Logging out user...')
  try {
    const response = await axiosInstance.post('/logout')
    console.log('Logout successful:', response.data)
  } catch (error) {
    console.error('Logout failed:', error)
  }
}

user()
</script>
<template class="dark">
  <h1>this is the dashboard page</h1>
</template>
