import { useState } from 'react'
import reactLogo from './assets/react.svg'
import './App.css'
import { articles } from './api/articles'
import useSWR from 'swr'

function App() {
  const [count, setCount] = useState(0)

  const { data, error, isLoading } = useSWR('/api/articles', articles.list)
  console.log(data, error, isLoading)

  return (
    <div className="App">
      <div>
        <a href="https://vitejs.dev" target="_blank">
          <img src="/vite.svg" className="logo" alt="Vite logo" />
        </a>
        <a href="https://reactjs.org" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
      </div>
      <h1>Vite + React</h1>
      <div className="card">
        <button onClick={() => setCount((count) => count + 1)}>
          count is {count}
        </button>
        <p>
          Edit <code>src/App.jsx</code> and save to test HMR
        </p>
        {
          data.articles.length > 0 && data.articles.map((el) => {
            return <div>
              {el.id}
            </div>
          })
        }
        <article></article>
      </div>
      <p className="read-the-docs">
        Click on the Vite and React logos to learn more
      </p>
    </div>
  )
}

export default App
