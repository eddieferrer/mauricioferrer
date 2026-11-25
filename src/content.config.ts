import { defineCollection } from 'astro:content'
import { glob } from 'astro/loaders'
import { z } from 'astro/zod'

const projects = defineCollection({
  // The `slug` frontmatter field becomes the entry id, which is the page URL.
  loader: glob({ pattern: '*.md', base: './content/projects' }),
  schema: ({ image }) =>
    z.object({
      slug: z.string(),
      title: z.string(),
      cover_image: image(),
      thumb_image: image(),
      project_images: z.array(
        z.object({
          caption: z.string().default(''),
          image: image()
        })
      ),
      canonical_url: z.union([z.string(), z.literal(false)]).optional(),
      menu_title: z.string(),
      menu_order: z.number(),
      project_type: z.string(),
      project_location: z.string(),
      info_apartment: z.string().default(''),
      info_map: z.string().default(''),
      description: z.string().default('')
    })
})

export const collections = { projects }
