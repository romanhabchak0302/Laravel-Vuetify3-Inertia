<template>
  <profile-layout>
    <template #title>General Info</template>
    <div class="text-subtitle-1">Name:</div>
    <div class="text-caption ml-2">{{ user.name }}</div>
    <div class="text-subtitle-1">Email:</div>
    <div class="text-caption ml-2">{{ user.email }}</div>
  </profile-layout>
</template>

<script setup>
import { ref, defineProps } from 'vue';
import { router } from '@inertiajs/vue3';

defineProps({
  user: {
    type: Object,
    default: () => null
  }
})
</script>