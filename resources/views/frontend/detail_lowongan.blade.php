@extends('layouts.frontend')
@section('content')
<section class="job-detail section">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="header-detail">
                     <div class="header-content pull-left">
                        <h3><a href="#">{{ $lowongan->nama_low }}</a></h3>
                        <p><span>Tanggal mulai: {{ $lowongan->tgl_mulai }}</span></p>
                        <p>Gaji: <strong class="price">Rp.{{ $lowongan->gaji }}</strong></p>
                     </div>
                     <div class="detail-company pull-right text-right">
                        <div class="img-thum">
                           <img class="img-responsive" src="assets/img/jobs/recent-job-detail.jpg" alt="">
                        </div>
                        <div class="name">
                           <h4>{{ $lowongan->Perusahaan->nama_pers }}</h4>
                           <h5>{{ $lowongan->lokasi }} </h5>
                        </div>
                     </div>
                     <div class="clearfix">
                        <div class="meta">
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="content-area">
                     <div class="clearfix">
                        <div class="box">
                           <h4>Deskripsi lowongan</h4>
                           <p>{!! $lowongan->deskripsi_iklan !!}</p>
                           
                           
                           <a href="#" class="btn btn-common" data-toggle="modal" data-target="#lamaran">Kirim Lamaran </a>
                        </div>
                     </div>
                  </div>
                  <h2 class="medium-title">Lowongan terkait</h2>
                  <div class="job-post-wrapper">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="job-list">
                              <div class="thumb">
                                 <a href="job-details.html"><img src="assets/img/jobs/img-1.jpg" alt=""></a>
                              </div>
                              <div class="job-list-content">
                                 <h4><a href="job-details.html">We need a web designer</a><span class="full-time">Full-Time</span></h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                                 <div class="job-tag">
                                    <div class="pull-left">
                                       <div class="meta-tag">
                                          <span><a href="browse-categories.html"><i class="ti-brush"></i>Art/Design</a></span>
                                          <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                          <span><i class="ti-time"></i>60/Hour</span>
                                       </div>
                                    </div>
                                    <div class="pull-right">
                                       <div class="icon">
                                          <i class="ti-heart"></i>
                                       </div>
                                       <div class="btn btn-common btn-rm">Apply Job</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="job-list">
                              <div class="thumb">
                                 <a href="job-details.html"><img src="assets/img/jobs/img-2.jpg" alt=""></a>
                              </div>
                              <div class="job-list-content">
                                 <h4><a href="job-details.html">Front-end developer needed</a><span class="full-time">Full-Time</span></h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                                 <div class="job-tag">
                                    <div class="pull-left">
                                       <div class="meta-tag">
                                          <span><a href="browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                                          <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                          <span><i class="ti-time"></i>60/Hour</span>
                                       </div>
                                    </div>
                                    <div class="pull-right">
                                       <div class="icon">
                                          <i class="ti-heart"></i>
                                       </div>
                                       <div class="btn btn-common btn-rm">Apply Job</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="job-list">
                              <div class="thumb">
                                 <a href="job-details.html"><img src="assets/img/jobs/img-3.jpg" alt=""></a>
                              </div>
                              <div class="job-list-content">
                                 <h4><a href="job-details.html">Software Enginner</a><span class="part-time">Part-Time</span></h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                                 <div class="job-tag">
                                    <div class="pull-left">
                                       <div class="meta-tag">
                                          <span><a href="browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                                          <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                          <span><i class="ti-time"></i>60/Hour</span>
                                       </div>
                                    </div>
                                    <div class="pull-right">
                                       <div class="icon">
                                          <i class="ti-heart"></i>
                                       </div>
                                       <div class="btn btn-common btn-rm">Apply Job</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <aside>
                     <div class="sidebar">
                        <div class="box">
                           <h2 class="small-title">Job Details</h2>
                           <ul class="detail-list">
                              <li>
                                 <a href="#">Job Id</a>
                                 <span class="type-posts">Jb1246789</span>
                              </li>
                              <li>
                                 <a href="#">Location</a>
                                 <span class="type-posts">New York, NY</span>
                              </li>
                              <li>
                                 <a href="#">Company</a>
                                 <span class="type-posts">LemonKids LLC</span>
                              </li>
                              <li>
                                 <a href="#">Type</a>
                                 <span class="type-posts">Private</span>
                              </li>
                              <li>
                                 <a href="#">Employment Status</a>
                                 <span class="type-posts">Permanent</span>
                              </li>
                              <li>
                                 <a href="#">Employment Type</a>
                                 <span class="type-posts">Manager</span>
                              </li>
                              <li>
                                 <a href="#">Positions</a>
                                 <span class="type-posts">5</span>
                              </li>
                              <li>
                                 <a href="#">Career Level</a>
                                 <span class="type-posts">Experience</span>
                              </li>
                              <li>
                                 <a href="#">Experience</a>
                                 <span class="type-posts">3 Years</span>
                              </li>
                              <li>
                                 <a href="#">Gender</a>
                                 <span class="type-posts">Male</span>
                              </li>
                              <li>
                                 <a href="#">Nationality</a>
                                 <span class="type-posts">United States</span>
                              </li>
                              <li>
                                 <a href="#">Degree</a>
                                 <span class="type-posts">Masters</span>
                              </li>
                           </ul>
                        </div>
                        <div class="box">
                           <h2 class="small-title">Featured Jobs</h2>
                           <div class="thumb">
                              <a href="#"><img src="assets/img/jobs/features-img-1.jpg" alt="img"></a>
                           </div>
                           <div class="text-box">
                              <h4><a href="#">Web Development</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. maiores aperiam quam perspiciatis.</p>
                              <a href="#" class="text"><i class="fa fa-map-marker"></i>Moorgate, London</a>
                              <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 22, 2017 - Mar 17, 2018 </a>
                              <strong class="price"><i class="fa fa-money"></i>$4000 - $5000</strong>
                              <a href="#" class="btn btn-common btn-sm">Apply for this Job</a>
                           </div>
                        </div>
                        
                     </div>
                  </aside>
               </div>
            </div>
         </div>
      </section>
      <div class="modal fade" id="lamaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lamaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('kirimlamaran') }}" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
               <input type="hidden" name="low_id" value="{{ $lowongan->id }}">
               <div class="form-group {{ $errors->has('telepon') ? ' has-error' : '' }}">
                  <label class="control-label">Telepon</label> 
                  <input type="text" name="telepon" class="form-control"  required>
                  @if ($errors->has('telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telepon') }}</strong>
                            </span>
                        @endif
               </div>
               <div class="form-group {{ $errors->has('pesan') ? ' has-error' : '' }}">
                  <label class="control-label">Pesan</label>   
                  <textarea type="text" name="pesan" class="form-control"  required> </textarea>
                  @if ($errors->has('pesan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pesan') }}</strong>
                            </span>
                        @endif
               </div>
               <div class="form-group {{ $errors->has('file_cv') ? ' has-error' : '' }}">
                  <label class="control-label">FileCV</label>
                  <br>
                  @php
                  $file_cv = App\Pelamar::all();
                  @endphp
                  @foreach( $file_cv as $data)  
               <input type="radio" value="{{ $data->id }}" name="file_cv" required>{{ $data->file_cv }}
               <br>
                  @endforeach
               </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" >Kirim Lamaran</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection