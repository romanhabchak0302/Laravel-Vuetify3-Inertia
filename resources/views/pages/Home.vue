<template>
  <default-layout>
    <div class="">
      <v-card>
        <v-table
          :items="tasks"
          :headers="headers"
          hide-default-footer
          density="compact"
        >
          <thead>
            <tr>
              <th class="text-left">
                Title
              </th>
              <th class="text-left">
                Status
              </th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="item in tasks"
              :key="item.id"
            >
              <td>{{ item.title }}</td>
              <td>{{ item.completed ? 'Completed' : 'Not completed' }}</td>
            </tr>
          </tbody>
        </v-table>
        <v-pagination
          :total="100"
          density="compact"
        ></v-pagination>
      </v-card>
    </div>
  </default-layout>
</template>

<script setup>
import { defineProps } from 'vue'

defineProps({
  tasks: {
    type: Array,
    default: () => []
  }
})
</script>