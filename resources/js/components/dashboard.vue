<template>
    <div>
        <section class="hero-banner magic-ball">
            <div class="container">

            <div class="row align-items-center text-center text-md-left">
                <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
                <h1>pemberitahuan</h1>
                <p>PENUTUPAN SEMENTARA LAYANAN TATAP MUKA PERIZINAN DAN NON PERIZINAN BERUSAHA MELALUI TATAP MUKA DI DINAS PENANAMAN MODAL DAN
                    PELAYANAN TERPADU SATU PINTU TERPADU SATU PINTU PROVINSI KEPULAUAN RIAU
                </p>
                <a class="button button-hero mt-4" href="#">PERMOHONAN ONLINE</a>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
                <img class="img-fluid" :src="url.images+'/corona.jpg'" width="80%" alt="">
                </div>
            </div>
            </div>
        </section>
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
  <section class="section-padding bg-gray">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <h2>From our Blog</h2>
        <p>Fowl have fruit moveth male they are that place you will lesser</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/blog/blog-1.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/blog/blog-2.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/blog/blog-3.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog section End ================= -->

    </div>
</template>

<script>
import urlbase from '@/js/url';

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
    methods:{
    },
}
</script>
