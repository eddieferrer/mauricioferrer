<template>
  <!-- nav -->
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button
          type="button"
          class="navbar-toggle collapsed"
          data-toggle="collapse"
          data-target=".navbar-collapse"
        >
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <g-link class="navbar-brand" to="/">
          <g-image
            alt="Mauricio Ferrer - Logo"
            src="~/assets/images/logo.png"
            width="392"
            height="226"
            blur="5"
          />
        </g-link>
      </div>
      <!-- / navbar-header -->
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <g-link to="/"><span>HOME</span></g-link>
          </li>
          <li class="dropdown">
            <a
              href="#"
              class="dropdown-toggle"
              data-toggle="dropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
              ><span>PROJECTS</span> <span class="dropdown-icon"></span
            ></a>
            <ul class="dropdown-menu animated zoomIn fast">
              <li v-for="edge in sortedEdges" :key="edge.node.id">
                <g-link class="project-link" :to="edge.node.path">
                  {{ edge.node.menu_title }}
                </g-link>
              </li>
            </ul>
          </li>
          <li>
            <a href="/docs/Architect_M_Ferrer_CV.pdf" target="_blank"
              ><span>RESUME / CV</span></a
            >
          </li>
        </ul>
      </div>
      <!--/ nav-collapse -->
    </div>
    <!-- / container -->
  </nav>
  <!-- / nav -->
</template>

<static-query>
  query {
    metadata {
      siteName
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
</static-query>

<script>
export default {
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
      return this.$static.projects.edges.slice().sort(compare)
    }
  }
}
</script>

<style lang="scss">
.author {
  margin: 0 auto;
  max-width: 500px;
  text-align: center;
  padding: calc(var(--space) / 2) 0;

  &__image {
    border-radius: 100%;
    width: 90px;
    height: 90px;
    margin-bottom: 1em;
  }

  &__intro {
    opacity: 0.8;
  }

  &__site-title {
    font-size: 1.5em;
  }

  &__links {
    margin-top: -0.5em;
    a {
      margin: 0 0.5em;
    }
  }
}
</style>
