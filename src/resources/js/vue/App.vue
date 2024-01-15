<script setup>

  import { ref } from 'vue'

  const count = ref(0)
  const addCount = () => {

    count.value++

  }

</script>

<template>
  <button @click="addCount">{{ count }} 回クリックしました！</button>
  <router-link to="/foo">Go to Foo</router-link><br />
  <router-link to="/bar">Go to Bar</router-link>
  <router-view></router-view>
</template>