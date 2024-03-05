<template>
  <default-layout>
    <div class="">
      <v-card>
        <v-table
          :items="tasks.data"
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
              v-for="item in tasks.data"
              :key="item.id"
            >
              <td>{{ item.title }}</td>
              <td>{{ item.completed ? 'Completed' : 'Not completed' }}</td>
            </tr>
          </tbody>
        </v-table>
        <v-pagination
          v-model="tasks.current_page"
          :total="tasks.total"
          :length="tasks.total / tasks.per_page"
          density="compact"
          @update:model-value="handlePageChange"
        ></v-pagination>
      </v-card>
    </div>
  </default-layout>
</template>

<script setup>
import { defineProps, computed } from 'vue'
import { router } from '@inertiajs/vue3'

const props = defineProps({
  tasks: {
    type: Object
  }
})

const handlePageChange = (v) => {
  router.get(props.tasks.path, {
    page: v
  })
}
</script>