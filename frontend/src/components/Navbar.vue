<script setup lang="ts">
import { CircleUserRound, Plus, Earth } from 'lucide-vue-next'
</script>

<template>
  <div>
    <!-- Desktop -->
    <nav class="flex justify-between items-center p-4 text-sm font-bold">
      <!-- Logo -->
      <a href="/" class="flex items-center space-x-2">
        <p href="/" class="text-3xl">Trackify</p>
        <Earth />
      </a>
      <div class="flex space-x-4 items-center">
        <!-- Add Package Button -->
        <a
          href="/dashboard"
          class="flex items-center space-x-1 p-2 border hover:bg-stone-100/40 rounded-2xl transition-all"
        >
          <Plus :size="20" />

          <p href="/">Add Package</p>
        </a>
        <!-- Profile Icon -->
        <a href="/">
          <CircleUserRound :size="40" :stroke-width="1" />
        </a>
      </div>
    </nav>
  </div>
</template>
