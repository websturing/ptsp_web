<template>
<div>
   <section class="bg-gray">
      <div class="container">
          <h2>Gallery</h2>
         <hooper style="height: 450px" :wheelControl="false" :itemsToShow="3" :autoPlay="true" :playSpeed="4000" :infiniteScroll="true">
            <slide  v-for="(g,gIndex) in gallery" :key="g.gallery_id">
              <div class="col-md-12 col-lg-12 mb-12 mb-lg-0">
                <div class="card-blog"  style="min-height:400px">
                  <img class="img-fluid fitImg rounded-0" :src="url.images+'/'+g.Folder+'/'+g.thumbnail" alt="">
                  <div class="card-blog-body" @click="toGalleryDetail(gIndex)">
                      <h4>{{g.judul}}</h4>
                    <ul class="card-blog-info">
                      <li><span class="align-middle"><i class="ti-notepad"></i></span>{{moment(g.tanggal).format('LL')}}</li>
                    </ul>
                  </div>
                </div>
              </div>
            </slide>
            <HooperPagination slot="hooper-addons"></HooperPagination>
         </hooper>
      </div>
      <VueEasyLightbox
      :visible="fancyBox.visible"
      :imgs="fancyBox.images"
      :index="fancyBox.index"
      @hide="closeGalleryDetail()"
    ></VueEasyLightbox>
      <br/><br/><br/>
    </section>
</div>
</template>


<script>
import urlbase from '@/js/url';
import zingchartVue from 'zingchart-vue';
import { Hooper, Slide,  Pagination as HooperPagination } from 'hooper';
import 'hooper/dist/hooper.css';
import moment from 'moment';
import VueEasyLightbox from 'vue-easy-lightbox'

export default {
    data(){
        return{
            url : {
                images  : urlbase.urlWeb+'/public/gallery'
            },
            gallery :[],
            fancyBox:{
              visible : false,
              index : 0,
              images :[]

            }
        }
    },
    created(){
      this.getGallery();
    },
    components: {
      Hooper,
      Slide,
      HooperPagination,
      VueEasyLightbox
    },
    methods:{
      moment(arg) {
             moment.locale('id');
             return moment(arg);
      },
      linkGambar(){
        	this.gallery.forEach((item,index) => {
            let FolderGallery = item.Folder
            item.detail.forEach((a,bindex) =>{
              let path = urlbase.urlWeb+'/public/gallery/'+FolderGallery+'/'+a.thumbnail
              this.$set(a, 'pathGambar', path)
            })
          })     
      },
      getGallery(){
        axios.post(urlbase.urlWeb+'/master-gallery',{
          type : "galleryAll",
        })
        .then(r => {
          this.gallery = r.data,
          this.linkGambar()
        });
      },
      toGalleryDetail(i){
        this.fancyBox.images = []
        	this.gallery[i].detail.forEach((item,index) => {
              this.fancyBox.images.push(item.pathGambar)
          });
        this.fancyBox.visible = true
      },
      closeGalleryDetail(){
         this.fancyBox.images = []
        this.fancyBox.visible = false
      }
    }
}
</script>

<style>
  .fitImg{
    width: 100% !important;
    height: 200px !important;
    object-fit: cover;
  }
</style>