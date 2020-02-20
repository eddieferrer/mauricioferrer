<template>
  <Layout>
    <template v-slot:header>
      <!-- header-banner -->
      <div id="header-banner" :style="styleObject">
        <div class="banner-content single-page text-center">
          <div class="banner-info">
            <h1>{{ $page.project.project_type }}</h1>
            <p>{{ $page.project.project_location }}</p>
          </div>
          <!-- / banner-info -->
        </div>
        <!-- / banner-content -->
      </div>
      <!-- / header-banner -->
    </template>

    <template v-slot:content>
      <!-- content -->
      <div id="page-content" class="container">
        <section id="project">
          <div class="row">
            <masonry
              :cols="{ default: 3, 700: 2, 400: 1 }"
              :gutter="{ default: '30px', 700: '15px' }"
              class="lightbox"
            >
              <div
                class="project_tile"
                v-for="(project_image, index) in sortedImagesByAspectRatio"
                :key="index"
              >
                <span v-if="project_image.caption != ''">{{
                  project_image.caption
                }}</span>
                <a :href="project_image.image.src" class="project_image">
                  <g-image :src="project_image.image" alt="" />
                </a>
              </div>
            </masonry>
          </div>
          <div
            class="row"
            v-if="
              $page.project.info_map ||
                $page.project.info_apartment ||
                $page.project.description
            "
          >
            <div class="col-sm-12">
              <h3>{{ $page.project.project_type }}</h3>
            </div>
            <div
              class="col-sm-4"
              v-if="$page.project.info_map || $page.project.info_apartment"
            >
              <h4>PROJECT INFO</h4>
              <div class="project-info">
                <div class="info" v-if="$page.project.info_apartment">
                  <p>
                    <i class="lnr lnr-apartment"></i
                    ><span>{{ $page.project.info_apartment }}</span>
                  </p>
                </div>
                <div class="info" v-if="$page.project.info_map">
                  <p>
                    <i class="lnr lnr-map"></i
                    ><span>{{ $page.project.info_map }}</span>
                  </p>
                </div>
              </div>
              <!-- / project-info -->
            </div>
            <!-- / col-sm-4 -->
            <div class="col-sm-8" v-if="$page.project.description">
              <h4>PROJECT DESCRIPTION</h4>
              <h5 class="gray">{{ $page.project.description }}</h5>
              <div class="project_info" v-html="$page.project.content" />
            </div>
            <!-- / col-sm-8 -->
          </div>
          <!-- / row -->
        </section>
        <!-- / project content -->

        <!-- project pagination -->
        <div class="pagination">
          <g-link
            v-if="previousProject"
            class="btn btn-direction btn-default-filled"
            :to="previousProject.node.path"
          >
            <i class="fa fa-long-arrow-left"></i><span>Previous Project</span>
          </g-link>
          <g-link
            v-if="nextProject"
            class="btn btn-direction btn-default-filled pull-right"
            :to="nextProject.node.path"
          >
            <span>Next Project</span><i class="fa fa-long-arrow-right"></i>
          </g-link>
        </div>
        <!-- / project pagination -->
      </div>
      <!-- / container -->
      <!-- / content -->
    </template>
  </Layout>
</template>

<page-query>
  query Project($id: ID!) {
    project: project(id: $id) {
      cover_image(width: 770, height: 380, blur: 10)
      thumb_image
      project_images {
        caption
        image
      }
      menu_order
      canonical_url
      project_type
      project_location
      info_apartment
      info_map
      description
      path
      content
    }
    projects: allProject {
      edges {
        node {
          path
          menu_title
          menu_order
        }
      }
    }
  }
</page-query>

<script>
export default {
  computed: {
    sortedImagesByAspectRatio() {
      function compare(a, b) {
        let aRatio = a.image.size.height / a.image.size.width;
        let bRatio = b.image.size.height / b.image.size.width;
        return bRatio - aRatio;
      }
      return this.$page.project.project_images.slice().sort(compare)
    },
    styleObject() {
      return {
        backgroundImage: 'url("' + this.$page.project.cover_image.src + '")'
      }
    },
    previousProject() {
      let prevMenuOrder = this.$page.project.menu_order - 1
      if (prevMenuOrder === 0) {
        return undefined
      }
      return this.$page.projects.edges.find(
        edge => edge.node.menu_order === prevMenuOrder
      )
    },
    nextProject() {
      let nextMenuOrder = this.$page.project.menu_order + 1
      return this.$page.projects.edges.find(
        edge => edge.node.menu_order === nextMenuOrder
      )
    }
  },
  metaInfo() {
    return {
      title: this.$page.project.menu_title,
      meta: [
        {
          name: 'description',
          content: this.$page.project.description
        }
      ]
    }
  }
}
</script>

<style lang="scss">
#header-banner {
  background-size: cover;
  background-position: center;
  background-color: #cccccc;
}
.project_info ul {
  list-style: disc;
}
</style>
