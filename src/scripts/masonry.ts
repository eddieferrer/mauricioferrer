// Re-implementation of vue-masonry-css's layout for the breakpoints the site
// used: cols { default: 3, 700: 2, 400: 1 }, gutter { default: 30px, 700: 15px }.
// Items are dealt round-robin into columns (item i goes to column i % n).

function columnCount(width: number): number {
  if (width <= 400) return 1
  if (width <= 700) return 2
  return 3
}

function gutter(width: number): string {
  return width <= 700 ? '15px' : '30px'
}

function layout(container: HTMLElement, width: number) {
  const items = Array.from(container.querySelectorAll<HTMLElement>(':scope > div > [data-masonry-index]')).sort(
    (a, b) => Number(a.dataset.masonryIndex) - Number(b.dataset.masonryIndex)
  )
  const n = columnCount(width)
  const g = gutter(width)

  // Like vue-masonry-css, only columns that receive items are created,
  // but each is still 1/n of the width.
  const columns: HTMLElement[] = []
  items.forEach((item, i) => {
    let col = columns[i % n]
    if (!col) {
      col = columns[i % n] = document.createElement('div')
      col.style.cssText = `box-sizing:border-box;background-clip:padding-box;width:${100 / n}%;border:0 solid transparent;border-left-width:${g};`
    }
    col.appendChild(item)
  })

  container.style.marginLeft = `-${g}`
  container.replaceChildren(...columns)
}

export function initMasonry() {
  const containers = Array.from(document.querySelectorAll<HTMLElement>('[data-masonry]'))
  if (!containers.length) return

  let lastWidth = -1
  const update = () => {
    const width = window.innerWidth || Infinity
    if (width === lastWidth) return
    const changed = lastWidth === -1 || columnCount(width) !== columnCount(lastWidth) || gutter(width) !== gutter(lastWidth)
    lastWidth = width
    if (changed) containers.forEach((c) => layout(c, width))
  }
  update()
  window.addEventListener('resize', update)
}
