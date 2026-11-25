import { getCollection, type CollectionEntry } from 'astro:content'

export const SITE_NAME = 'MAURICIO FERRER - RA, LEED AP'
export const SITE_DESCRIPTION = 'Mauricio Ferrer - RA, LEED AP'

export type Project = CollectionEntry<'projects'>

/** All projects, sorted by `menu_order` (the order used in the menu and grid). */
export async function getProjects(): Promise<Project[]> {
  const projects = await getCollection('projects')
  return projects.sort((a, b) => a.data.menu_order - b.data.menu_order)
}

export const projectPath = (p: Project) => `/${p.id}/`
