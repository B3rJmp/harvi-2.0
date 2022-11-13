import axios from 'axios'

export default () => {
  // const options = {
  //   baseURL: import.meta.env.VITE_API_URL
  // };

  const instance = axios.create({})
  // instance.defaults.withCredentials = true
  return instance
};