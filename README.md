# mauricioferrer

Portfolio site for Mauricio Ferrer, built with [Astro](https://astro.build) and deployed on Netlify.

Requires Node 22.23.4+ (Netlify builds with Node 24, see `netlify.toml`).

```sh
npm install
npm run dev      # local dev server
npm run build    # static build to dist/
npm run preview  # serve dist/
npm run check    # type-check
```

## Content

Each project is a markdown file in `content/projects/`, with its images in a
sibling folder. The `slug` frontmatter field is the page URL (`/<slug>/`);
`menu_order` sets the order in the menu, the home grid and prev/next links.

## Notes

- Theme CSS/JS in `src/assets/` is the original purchased template, vendored
  unchanged (Bootstrap 3, jQuery, Magnific Popup).
- `src/scripts/masonry.ts` reproduces the column layout of the old
  `vue-masonry-css` component (3/2/1 columns at >700/≤700/≤400px).
