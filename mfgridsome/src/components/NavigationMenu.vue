<template>
    <!-- nav -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <g-link class="navbar-brand" to="/">
		            <g-image alt="Mauricio Ferrer - Logo" src="~/assets/images/logo.png" width="392" height="226" blur="5" />
                </g-link>
            </div><!-- / navbar-header -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><g-link class="navbar-brand" to="/"><span>HOME</span></g-link></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>PROJECTS</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated zoomIn fast">
                        <li v-for="edge in sortedEdges" :key="edge.node.id">
                            <g-link class="project-link" :to="edge.node.path">
                                {{edge.node.menu_title}}
                            </g-link>
                        </li>

                        <!-- <li><a href="/projects/capitol_crossing/project.php"><span>CAPITOL CROSSING</span></a></li>
                        <li><a href="/projects/saxony/project.php"><span>SAXONY RESIDENCES</span></a></li>
                        <li><a href="/projects/neuroscience/project.php"><span>NEUROSCIENCE & PSYCHOLOGY CENTER</span></a></li>
                        <li><a href="/projects/lanai/project.php"><span>LANAI TOWNHOUSE CONDOMINIUM</span></a></li>
                        <li><a href="/projects/key/project.php"><span>KEY COLONY PLAZA</span></a></li>
                        <li><a href="/projects/lowrise/project.php"><span>LOW-RISE LUXURY CONDOMINIUM</span></a></li>
                        <li><a href="/projects/midrise/project.php"><span>MID-RISE CONDOMINIUM</span></a></li>
                        <li><a href="/projects/478bay/project.php"><span>SINGLE FAMILY HOME - 478 BAY LANE</span></a></li>
                        <li><a href="/projects/pdxhouse/project.php"><span>SINGLE FAMILY HOME - PORTLAND</span></a></li>
                        <li><a href="/projects/175harbor/project.php"><span>SINGLE FAMILY HOME - 175 HARBOR DR</span></a></li>
                        <li><a href="/projects/345woodcrest/project.php"><span>SPEC HOME - 345 WOODCREST RD</span></a></li>
                        <li><a href="/projects/400woodcrest/project.php"><span>SINGLE FAMILY HOME - 400 WOODCREST RD</span></a></li> -->
                    </ul>
                    </li>
                    <li><a href="/docs/Architect_M_Ferrer_CV.pdf" target="_blank"><span>RESUME / CV</span></a></li>
                </ul>
            </div><!--/ nav-collapse -->
        </div><!-- / container -->
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
        function compare( a, b ) {
            if ( a.node.menu_order < b.node.menu_order ){
                return -1;
            }
            if ( a.node.menu_order > b.node.menu_order ){
                return 1;
            }
            return 0;
        }
        return this.$static.projects.edges.sort(compare);
      }
  },
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
		opacity: .8;
	}

	&__site-title {
		font-size: 1.5em;
	}

	&__links {
		margin-top: -.5em;
		a {
			margin: 0 .5em;
		}
	}
}
</style>
