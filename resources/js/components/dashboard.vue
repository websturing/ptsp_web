<template>
    <div>
      <hooper style="height: 900px" :wheelControl="false">
        <slide >
            <img :src="url.images+'/bg1.jpg'" class="img-fluid">
            <div class="content-text">
              <H6 style="color:white">SELAMAT DATANG</H6>
              <div class="judul">DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU PROVINSI KEPULAUAN RIAU</div>
              <p>Nomor Pengaduan : (+62) 811-7779-727</p>
              <p>Email : pengaduan@dpmptsp.kepriprov.go.id</p>
            </div>
        </slide>
          <HooperPagination slot="hooper-addons"></HooperPagination>
      </hooper>
  <!--================Hero Banner Area End =================-->


  <!--================Service Area Start =================-->
  <section class="section-margin generic-margin">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <h2>LAYANAN PRIMA</h2>
        <p>Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Provinsi Kepulauan Riau</p>
      </div>
      

          <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center">
                  <div class="service-card-img">
                    <img class="img-fluid" :src="url.images+'/perizinan.jpg'" height="300px" alt="">
                  </div>
                  <div class="service-card-body">
                    <h3>Perizinan Dan Non Perizinan</h3>
                    <p>izin & non Izin dapat di ajukan melalui aplikasi Si-Jempol</p>
                    <br/>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center">
                  <div class="service-card-img">
                    <img class="img-fluid" :src="url.images+'/promosi.jpg'" height="300px" alt="">
                  </div>
                  <div class="service-card-body">
                    <h3>Promosi Investasi</h3>
                    <br/><br/>
                    <br/>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center">
                  <div class="service-card-img">
                    <img class="img-fluid" :src="url.images+'/dataPtsp.jpg'" height="300" alt="">
                  </div>
                  <div class="service-card-body">
                    <h3>Data DPMPTSP</h3>
                    <p>Rekapitulasi Data Perizinan & Nonperizinan</p>
                    <br/><br/>
                  </div>
                </div>
              </div>
          </div>
        </div>
  </section>
  <!--================Service Area End =================-->



  <!--================Search Package section Start =================-->
  <section class="section-margin bg-gray section-padding magic-ball magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-5 align-self-center mb-5 mb-lg-0">
          <div class="search-content">
            <h2>Pertanyaan & Pengaduaan</h2>
            <p>Pertanyaan maupun keluhan dapat di sampaikan melalu Whatsapp dengan Nomor (0811 777 9727)</p>
            <p>ataupun dapat mengisi Form di Samping</p>
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 offset-xl-1">
          <div class="search-wrapper">
            <h3>Pengaduaan Dan Pertanyaan</h3>

            <form class="search-form" action="#">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-search"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select name="category" id="Kategori">
                  <option value="disabled" disabled selected>Kategori</option>
                  <option value="Pengaduaan">Pengaduaan</option>
                  <option value="Pertanyaan">Pertanyaan</option>
                </select>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <textarea class="form-control" placeholder="Pertanyaan / Pengaduaan" colspan="80"></textarea>
                </div>
              </div>
              <div class="form-group">
                <button class="button border-0 mt-3" type="submit">Search Package</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--================Search Package section End =================-->


  <!--================Blog section Start =================-->
  <Gallery></Gallery>
  <!--================Blog section End ================= -->

    </div>
</template>

<script>
import urlbase from '@/js/url';
import { Hooper, Slide,  Pagination as HooperPagination } from 'hooper';
import 'hooper/dist/hooper.css';
import Gallery from '@/js/components/gallery/gallery'

export default {
    data(){
        return{
            url : {
                images  : urlbase.urlWeb+'/public/img'
            }
        }
    },
    mounted() {
        console.log('Component mounted.')
        this.$parent.$data.activeLink = 'dashboard';
        this.$parent.$data.activeName = 'Dashboard';
    },
    components: {
      Hooper,
      Slide,
      HooperPagination,
      Gallery
    },
    methods:{
    },
}
</script>
<style scoped>
.content-text{
  border-top: 3px solid #003679;
  position: absolute;
  z-index: 999 !important;
  margin: -700px 0px 0px 150px;
  color: black !important;
  padding: 20px;
  width: 50%;
  opacity: 0.8;
  background-color: black;
}

.content-text .judul {
  font-size: 24px;
  color: white;
  font-weight: 600;
}

.content-text p {
   color: white;
   margin: 3px;
}
</style>