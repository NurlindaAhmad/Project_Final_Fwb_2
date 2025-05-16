@extends('HalamanUtama.index')

@section('content')

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <div class="site-section"  data-aos="fade">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">Contact</h2>
              </div>
            </div>
          </div>

        </div>
        
        <div class="row">
          <div class="col-lg-8 mb-5">
            <form action="#">


              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-white" for="fname">Nama depan</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-white" for="lname">Nama Belakang</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Tema Photo</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-white" for="message">Deskripsi</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>


            </form>
          </div>
          <div class="col-lg-3 ml-auto">
            <div class="mb-3">
              <p class="mb-0 font-weight-bold text-white">Alamat</p>
              <p class="mb-4">Jl.Martadinata, Mamuju, Sulawesi Barat, Indonesia</p>

              <p class="mb-0 font-weight-bold text-white">Nomor</p>
              <p class="mb-4"><a href="#">+62 856 235 653 34</a></p>

              <p class="mb-0 font-weight-bold text-white">Alamat Email</p>
              <p class="mb-0"><a href="#">photolin@gmail.com</a></p>

            </div>

          </div>
        </div>
      </div>
    </div>

    
    
  </div>

@endsection