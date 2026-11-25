import { getImage } from 'astro:assets'
import type { ImageMetadata } from 'astro'

// Same responsive widths and 2560px cap that Gridsome's g-image used.
const WIDTHS = [480, 1024, 1920, 2560]
const MAX_WIDTH = 2560

type Format = 'jpg' | 'jpeg' | 'png' | 'webp' | 'avif' | 'gif'

export interface ResponsiveImage {
  src: string
  srcset: string
  sizes: string
  width: number
}

/**
 * Responsive image in its original format, never upscaled. Mirrors the
 * markup g-image produced (src, srcset, sizes, width; no height attribute,
 * because the theme sets `img { width: 100% }` without `height: auto`).
 */
export async function responsiveImage(img: ImageMetadata): Promise<ResponsiveImage> {
  const width = Math.min(img.width, MAX_WIDTH)
  const format = img.format as Format
  const widths = [...WIDTHS.filter((w) => w < width), width]
  const result = await getImage({ src: img, width, widths, format })
  return {
    src: result.src,
    srcset: result.srcSet.attribute,
    sizes: `(max-width: ${width}px) 100vw, ${width}px`,
    width
  }
}

/**
 * Banner image, cropped like Gridsome's `cover_image(width: 770, height: 380)`.
 * Gridsome upscaled small sources before the centre crop; Astro never enlarges,
 * so for those we crop at the same 770:380 aspect ratio at source resolution,
 * which frames the banner identically under `background-size: cover`.
 */
export async function coverImage(img: ImageMetadata): Promise<string> {
  const scale = Math.min(1, img.width / 770, img.height / 380)
  const result = await getImage({
    src: img,
    width: Math.round(770 * scale),
    height: Math.round(380 * scale),
    fit: 'cover',
    format: img.format as Format
  })
  return result.src
}
