<template>
  <Layout>
    <template v-slot:header>
      <!-- header-banner -->
      <div id="header-banner" :style="styleObject">
          <div class="banner-content single-page text-center">
              <div class="banner-info">
                  <h1>{{ $page.project.project_type }}</h1>
                  <p>{{ $page.project.project_location }}</p>
              </div><!-- / banner-info -->
          </div><!-- / banner-content -->
      </div>
      <!-- / header-banner -->
    </template>

    <template v-slot:content>
      <!-- content -->
      <div id="page-content" class="container">
        <section id="project">
            <div class="row">
              <ul class="row portfolio list-unstyled lightbox" id="grid">
                  <li class="col-xs-6 col-md-4 m-project" v-for="(project_image, index) in $page.project.project_images" :key="index">
                    <span v-if="project_image.caption != ''">{{project_image.caption}}</span>
                    <a :href="project_image.image.src" class="project_image" v-if="project_image.image">
                      <img :src="project_image.image.src" alt=""/>
                    </a>
                  </li>
                  <!-- sizer -->
                  <li class="col-xs-6 col-md-4 shuffle_sizer"></li>
              </ul> <!-- / projects -->
            </div>
            <div class="row" v-if="$page.project.info_map || $page.project.info_apartment || $page.project.description">
              <div class="col-sm-12">
                <h3>{{ $page.project.project_type }}</h3>
              </div>
              <div class="col-sm-4" v-if="$page.project.info_map || $page.project.info_apartment">
                  <h4>PROJECT INFO</h4>
                  <div class="project-info">
                      <div class="info" v-if="$page.project.info_apartment">
                          <p><i class="lnr lnr-apartment"></i><span>{{$page.project.info_apartment}}</span></p>
                      </div>
                      <div class="info" v-if="$page.project.info_map">
                          <p><i class="lnr lnr-map"></i><span>{{$page.project.info_map}}</span></p>
                      </div>
                  </div><!-- / project-info -->
              </div><!-- / col-sm-4 -->
              <div class="col-sm-8" v-if="$page.project.description">
                  <h4>PROJECT DESCRIPTION</h4>
                  <h5 class="gray">{{$page.project.description}}</h5>
                  <div class="project_info" v-html="$page.project.content" />
              </div><!-- / col-sm-8 -->
            </div><!-- / row -->
        </section>
        <!-- / project content -->

        <!-- project pagination -->
        <div class="pagination">
            <a href="/projects/pdxhouse/project.php" class="btn btn-direction btn-default-filled"><i class="fa fa-long-arrow-left"></i><span>Previous Project</span></a>
            <a href="/projects/345woodcrest/project.php" class="btn btn-direction btn-default-filled pull-right"><span>Next Project</span><i class="fa fa-long-arrow-right"></i></a>
        </div><!-- / project pagination -->
      </div><!-- / container -->
      <!-- / content -->
    </template>

  </Layout>
</template>

<page-query>
  query Project ($id: ID!) {
    project: project (id: $id) {
      cover_image (width: 770, height: 380, blur: 10)
      thumb_image
      project_images {
        caption
        image
      }
      canonical_url
      project_type
      project_location
      info_apartment
      info_map
      description
      path
      content
    }
  }
</page-query>

<script>
import imagesLoaded from 'imagesloaded';

export default {
  components: {
  },
  computed: {
     styleObject() {
       return {
        backgroundImage: 'url("' + this.$page.project.cover_image.src + '")',
      }
     }
  },
  metaInfo () {
    return {
      title: this.$page.project.menu_title,
      meta: [
        {
          name: 'description',
          content: this.$page.project.description
        }
      ]
    }
  },
  mounted () {
    require('~/assets/js/customshuffle.js');
    // check for when images load, call layout
    imagesLoaded( document.querySelector('#grid'), function( instance ) {
      console.log('all images are loaded');
      demo.shuffle.layout()
    });
  },
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
