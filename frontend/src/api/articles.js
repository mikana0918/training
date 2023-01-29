import axios from 'axios'

export const articles = {
  list: async () => axios.get(`/api/articles`).then((res) => res.data)
}