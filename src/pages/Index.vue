<template>
  <Layout>
    <template v-slot:header>
      <!-- header-banner -->
      <div id="header-banner" class="demo-2">
        <div class="banner-content text-center">
          <div class="banner-border">
            <div class="banner-info">
              <h1>MAURICIO FERRER</h1>
              <p><strong>RA, LEED AP</strong></p>
            </div>
            <!-- / banner-info -->
          </div>
          <!-- / banner-border -->
        </div>
        <!-- / banner-content -->
      </div>
      <!-- / header-banner -->
    </template>

    <template v-slot:content>
      <!-- portfolio section -->
      <section id="portfolio" class="info-box">
        <div class="container">
          <div class="row">
            <masonry
              :cols="{ default: 3, 700: 2, 400: 1 }"
              :gutter="{ default: '30px', 700: '15px' }"
              class="portfolio list-unstyled lightbox"
            >
              <div
                class="project m-project"
                v-for="edge in sortedEdges"
                :key="edge.node.id"
              >
                <div class="img-bg-color primary">
                  <g-link class="project-link" :to="edge.node.path">
                    <!-- / project-link -->
                    <g-image :src="edge.node.thumb_image" alt="" />
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                      <span class="view-btn">
                        <i class="lnr lnr-eye"></i>
                      </span>
                    </div>
                    <!-- / project-hover-tools -->
                  </g-link>
                  <!-- project-details -->
                  <div class="project-details">
                    <h5 class="project-title">{{ edge.node.project_type }}</h5>
                    <p class="skill">{{ edge.node.project_location }}</p>
                  </div>
                  <!-- / project-details -->
                </div>
              </div>
            </masonry>
          </div>
          <!-- / projects -->
        </div>
        <!-- / container -->
      </section>
      <!-- / portfolio section -->
    </template>
  </Layout>
</template>

<page-query>
  query {
    projects: allProject {
      edges {
        node {
          id
          cover_image(width: 770, height: 380, blur: 10)
          thumb_image
          canonical_url
          project_type
          project_location
          path
          menu_order
        }
      }
    }
  }
</page-query>

<script>
export default {
  components: {},
  metaInfo: {
    title: 'MAURICIO FERRER - RA, LEED AP'
  },
  mounted() {},
  computed: {
    sortedEdges() {
      function compare(a, b) {
        if (a.node.menu_order < b.node.menu_order) {
          return -1
        }
        if (a.node.menu_order > b.node.menu_order) {
          return 1
        }
        return 0
      }
      return this.$page.projects.edges.slice().sort(compare)
    }
  }
}
</script>

<style lang="scss">
#header-banner {
  background: url('~@/assets/images/banner-bg.jpg') no-repeat;
  background-size: cover;
  background-position: center;
  background-color: #cccccc;
}
.project-link {
  display: inline-block;
  position: relative;
}
</style>
