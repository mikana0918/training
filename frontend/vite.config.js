import { defineConfig, loadEnv } from 'vite'
import react from '@vitejs/plugin-react'


// https://vitejs.dev/config/
export default defineConfig(({ command, mode }) => {
  // `mode` に基づいて現在の作業ディレクトリにある env ファイルをロードする
  // `VITE_` プレフィックスに関係なく全ての環境変数をロードするには、第 3 引数に '' を設定します
  const env = loadEnv(mode, process.cwd(), '')

  return {
    plugins: [react()],
    server: {
      proxy: {
        "/api": {
          target: env.VITE_API_URL,
          changeOrigin: true,
          secure: false,
        },
      },
    },
  }
})
