// @ts-check
import { defineConfig } from 'astro/config'

export default defineConfig({
  site: 'https://mauricioferrer.com',
  // Production URLs have always been /<slug>/ (Netlify 301s the bare form).
  trailingSlash: 'always',
  build: {
    format: 'directory',
    assets: 'assets'
  }
})
