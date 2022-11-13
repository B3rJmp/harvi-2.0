import { defineStore } from 'pinia'
import axios from 'axios'

export const useTestStore = defineStore('TestStore', {
  state: () => {
    return {
      test: 'This is a test',
      users: []
    }
  },

  actions: {
    fetchUsers() {
      axios.get(`test`)
        .then(res => this.users = res.data)
        .catch(err => console.error(err))
    }
  },

  getters: {
    getUsers(state) {
      return state.users
    }
  }
})