import axios from 'axios'

export const articles = {
  list: async () => {
    try {
      const { data } = await  axios.get(`/api/articles`)

      console.log(data) // FIXME: remove this
      return data.articles;
    } catch (error) {
      console.error(error);
    }
  },
}