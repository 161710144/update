@extends('layouts.frontend')
@section('search')
<div class="search-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>DAPATKAN PEKERJAAN DI SEKITARMU</h1>
                <br>
                <h2>Sederhana,cepat dan efisien </h2>
                <div class="content">
                  <form method="" action="">
                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder=" kata kunci / nama perusahaan">
                          <i class="ti-time"></i>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="email" placeholder="kota / provinsi ">
                          <i class="ti-location-pin"></i>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="search-category-container">
                          <label class="styled-select">
                            <select class="dropdown-product selectpicker">
                              <option>Semua Kategori</option>
                              <option>Keuangan</option>
                              <option>IT & Teknik</option>
                              <option>Seni / Desain</option>
                              <option>Penjualan / Pemasaran</option>
                              <option>Kesehatan</option>
                              <option>Layanan Makanan</option>
                            </select>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-1 col-sm-6">
                        <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
@endsection
@section('content')
<section class="find-job section">
<div class="container">
<h2 class="section-title">Lowongan Terbaru</h2>
@foreach($lowongan as $data)
<div class="row">
<div class="col-md-12">
<div class="job-list">
<div class="thumb">
<a href="job-details.html"><img src="{{ asset('assets/img/logopers/'. $data->Perusahaan->logo )}}" height="100px" alt=""></a>
</div>
<div class="job-list-content">
<h4><a href="job-details.html">{{ $data->nama_low }}</a></h4>
<p>{!! str_limit($data->deskripsi_iklan, 290) !!}</p>
<div class="job-tag">
<div class="pull-left">
<div class="meta-tag">
<span><a href="browse-categories.html"><i class="ti-brush"></i>{{ $data->Kategori->nama_kategori }}</a></span>
<span><i class="ti-location-pin"></i>{{ $data->lokasi}}</span>
<span><i class="ti-time"></i>{{ $data->tgl_mulai }}</span>
</div>
</div>
<div class="pull-right">
<div class="icon">
<i class="ti-heart"></i>
</div>
<a href="{{ url('detail_lowongan',$data->id) }}" class="btn btn-common btn-rm">Terapkan Pekerjaan</a>
</div>
</div>
</div>
</div>
@endforeach
          <div class="col-md-12">
            <div class="showing pull-left">
              <a href="#">Lihat <span>6-10</span>  24 Pekerjaan</a>
            </div>
            <ul class="pagination pull-right">
              <li class="active"><a href="#" class="btn btn-common"><i class="ti-angle-left"></i> sebelumnya</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li class="active"><a href="#" class="btn btn-common">Selanjutnya <i class="ti-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section id="blog" class="section">
      <div class="container">
        <h2 class="section-title">
          Perusahaan terdaftar
        </h2>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                <img src="{{ asset('themes/jobboard-demo/assets/img/blog/home-items/mayora.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                
                <a href="single-post.html">
                  <h3>
                    PT.Mayora Indah Tbk
                  </h3>
                </a>
                <p>
PT Mayora Indah Tbk (IDX: MYOR) atau Mayora Group (melakukan bisnis sebagai PT Torabika Eka Semesta) adalah salah satu kelompok bisnis produk konsumen di Indonesia, yang didirikan pada tanggal 17 Februari 1977. Perusahaan ini telah tercatat di Bursa Efek Jakarta sejak tanggal 4 Juli 1990. Saat ini mayoritas kepemilikan sahamnya dimiliki oleh PT Unita Branindo sebanyak 32,93%.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Baca selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                <img src="{{ asset('themes/jobboard-demo/assets/img/blog/home-items/img2.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Jan 20, 2018</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.html">
                  <h3>
                    Let's explore 5 cool new features in JobBoard theme
                  </h3>
                </a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                <img src="{{ asset('themes/jobboard-demo/assets/img/blog/home-items/img3.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Mar 20, 2018</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.html">
                  <h3>
                    How to convince recruiters and get your dream job
                  </h3>
                </a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="clients section">
      <div class="container">
        <h2 class="section-title">
          Klien & Mitra
        </h2>
        <div class="row">
          <div id="clients-scroller">
            <div class="items">
              <img src="{{ asset('themes/jobboard-demo/assets/img/clients/img1.png')}}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('themes/jobboard-demo/assets/img/clients/img2.png')}}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('themes/jobboard-demo/assets/img/clients/img3.png')}}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('themes/jobboard-demo/assets/img/clients/img4.png')}}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('themes/jobboard-demo/assets/img/clients/img5.png')}}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('themes/jobboard-demo/assets/img/clients/img6.png')}}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('themes/jobboard-demo/assets/img/clients/img6.png')}}" alt="">
            </div>
            <div class="items">
              <img src="{{ asset('themes/jobboard-demo/assets/img/clients/img6.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="infobox section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="info-text">
              <h2>Tidak Ingin Merindukan Sesuatu?</h2>
              <p>Pergi saja ke sana <a href="#">Google Play</a> untuk mengunduh JobRed Mini</p>
            </div>
            <a href="#" class="btn btn-border">Google Play</a>
          </div>
        </div>
      </div>
    </section>
   @endsection