// Server-side counterpart of src/scripts/masonry.ts. Items are dealt
// round-robin into columns, exactly like vue-masonry-css did. The page is
// rendered with the desktop layout; the script re-flows it for narrow screens.
export const DESKTOP_COLUMNS = 3
export const DESKTOP_GUTTER = '30px'

export function toColumns<T>(items: T[], count = DESKTOP_COLUMNS): { item: T; index: number }[][] {
  const columns: { item: T; index: number }[][] = []
  items.forEach((item, index) => (columns[index % count] ??= []).push({ item, index }))
  return columns
}

export const containerStyle = `display:-webkit-box;display:-ms-flexbox;display:flex;margin-left:-${DESKTOP_GUTTER};`
export const columnStyle = (count = DESKTOP_COLUMNS) =>
  `box-sizing:border-box;background-clip:padding-box;width:${100 / count}%;border:0 solid transparent;border-left-width:${DESKTOP_GUTTER};`
