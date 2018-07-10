@extends('layouts.admin')

@section('title')
Admin Page
@endsection

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-eye"></i> View</h3>
          </div>
          <div class="col-lg-8">
              <div class="panel panel-default">
                  <div class="panel-heading">View</div>
                  <div class="panel-body">
                      <div class="container">
                        <div style="text-align: justify;">
                          <h2>Ini title artikel/kegiatan</h2>
                          <br>
                          <img class="img-responsive" style="height: 400px" src="{{url('img/sapi.jpg')}}">
                          <br>
                          <p>Sapi adalah hewan ternak anggota suku Bovidae dan anak suku Bovinae. Sapi yang telah dikebiri dan biasanya digunakan untuk membajak sawah dinamakan Lembu. Sapi dipelihara terutama untuk dimanfaatkan susu dan dagingnya sebagai pangan manusia. Hasil sampingan, seperti kulit, jeroan, tanduk, dan kotorannya juga dimanfaatkan untuk berbagai keperluan manusia. Di sejumlah tempat, sapi juga dipakai sebagai penggerak alat transportasi, pengolahan lahan tanam (bajak), dan alat industri lain (seperti peremas tebu). Karena banyak kegunaan ini, sapi telah menjadi bagian dari berbagai kebudayaan manusia sejak lama. Kebanyakan sapi ternak merupakan keturunan dari jenis liar yang dikenal sebagai Auerochse atau Urochse (dibaca auerokse, bahasa Jerman berarti "sapi kuno", nama ilmiah: Bos primigenius[1]), yang sudah punah di Eropa sejak 1627. Namun, terdapat beberapa spesies sapi liar lain yang keturunannya didomestikasi, termasuk sapi bali yang juga diternakkan di Indonesia.</p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </section>
@endsection