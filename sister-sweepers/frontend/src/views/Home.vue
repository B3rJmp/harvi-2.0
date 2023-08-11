<template>
  <h1>Home</h1>
</template>

<script>
  import { mapActions, mapState } from 'pinia';
  import { useTestStore } from '@/stores/TestStore';

  export default {
    computed: {
      ...mapState(useTestStore, ['getUsers'])
    },
    methods: {
      ...mapActions(useTestStore, ['fetchUsers'])
    },
    mounted() {
      this.fetchUsers()
      // this.axios.get('/test').then(res => console.log(res.data))
    }
  }
</script>

<style>

</style>