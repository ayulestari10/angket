<style type="text/css">
  #biodata {
    display: block;
  }

  #angket {
    display: none;
  }

  #kategori2, #kategori3, #kategori4, #kategori5, #kategori6, #kategori7,
  #kategori8, #kategori9, #kategori10, #kategori11 {
    display: none;
  }
</style>
<div id="biodata" class="container">
  <?php  
    $msg = $this->session->flashdata('msg');
    if(isset($msg)){
      echo $msg;
    }

    //echo form_open('Angket/input');

  ?>
<form id="angketForm" onsubmit="submitAngket();">
  <div class="row judul">
    <div style="text-align:center;">
        <h1>SELAMAT DATANG DI</h1> 
        <h1>FORUM GROUP DISCUSSION (FGD) II</h1>
        <h2>Fakultas Ilmu Komputer Universitas Sriwijaya</h2>
        <h5 style="color:red;"><strong>Mahasiswa wajib mengisi angket</strong></h5>
      </div>
    </div><hr>

    <div class="col-md-6 col-md-offset-3" style="margin-top:4%;">
      <div class="form-group" id="dropdown">
          <label for="jurusan">Jurusan</label>
          <select class="form-control" id="jurusan" name="jurusan" required>
              <option>Pilih Jurusan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Sistem Komputer">Sistem Komputer</option>
              <option value="Diploma">Diploma</option>
          </select>
      </div>

      <div class="form-group" id="dropdown">
          <label for="angkatan">Angkatan</label>
          <select class="form-control" id="angkatan" name="angkatan" required>
              <option>Pilih Angkatan</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
          </select>
      </div>          
    </div>

    <div class="row">
      <div class="col-md-1 col-md-offset-8" style=" margin-top:4%;">
          <button type="button" onclick="lanjutkan()" class="btn btn-success" name="login">Next</button>
      </div> <!-- end simpan -->
    </div>
  </div>

      <script type="text/javascript">
        var jurusan;
        var angkatan;
        var kategori = 1;

        function lanjutkan() {
          jurusan = $("#jurusan").val();
          angkatan = $("#angkatan").val();
          
          $("#angket").css("display", "block");
          $("#biodata").css("display", "none");
        }

        function next(){
          $("#kategori" + kategori).css("display", "none")
          $("#kategori" + (kategori + 1)).css("display", "block");
          kategori++;
          if(kategori == 11){
            $("#hilang_saat_kritik").css("display", "none");
          }
        }
      </script>
    <?php // echo form_close(); ?>










































<div id="angket" class="container">
  <?php  
    $msg = $this->session->flashdata('msg');
    if(isset($msg)){
      echo $msg;
    }
    
    //echo form_open('Angket/input');

  ?>
      <div class="row judul">
        <div class="col-sm-12">
          <h1>ANGKET FORUM GROUP DISCUSSION (FGD) II</h1>
        </div>
      </div><hr>
            <div class="well">
              <p>
                <strong>KETERANGAN :</strong><br/>
                STS : SANGAT TIDAK SETUJU, TS  : TIDAK SETUJU, <br/>N   : NETRAL<br/> S   : SETUJU, ST    : SANGAT SETUJU
              </p>
            </div>

            <div id="hilang_saat_kritik" class="row" id="table_header">
               <div class="col-sm-1" >No.</div>
               <div class="col-sm-6" >Pernyataan</div>
               <div class="col-sm-5" >Point</div>
            </div><hr>

            <div id="kategori1">
                <div class="row">
                 <div class="col-sm-12" id="subheader" name="dosen">DOSEN</div> <!-- ========================================================================================= -->
              </div> <hr>

              <div class="row">
                 <div class="col-sm-1">1</div>
                 <div class="col-sm-6">Kinerja dosen telah cukup baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point1" value="STS" class="radio-inline">STS
                    <input type="radio" name="point1" value="TS" class="radio-inline">TS
                    <input type="radio" name="point1" value="N" class="radio-inline">N
                    <input type="radio" name="point1" value="S" class="radio-inline">S
                    <input type="radio" name="point1" value="ST" class="radio-inline">ST
                 </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1">2</div>
                 <div class="col-sm-6">Menurut Anda apakah dosen bersedia membuka kelas konseling diluar jadwal kuliah</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point2" value="STS" class="radio-inline">STS
                    <input type="radio" name="point2" value="TS" class="radio-inline">TS
                    <input type="radio" name="point2" value="N" class="radio-inline">N
                    <input type="radio" name="point2" value="S" class="radio-inline">S
                    <input type="radio" name="point2" value="ST" class="radio-inline">ST
                 </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1">3</div>
                 <div class="col-sm-6">Dosen telah menerapkan kedisiplinan dikelas</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point3" value="STS" class="radio-inline">STS
                    <input type="radio" name="point3" value="TS" class="radio-inline">TS
                    <input type="radio" name="point3" value="N" class="radio-inline">N
                    <input type="radio" name="point3" value="S" class="radio-inline">S
                    <input type="radio" name="point3" value="ST" class="radio-inline">ST
                  </div>
              </div> <!--  end row --> <hr>

              <div class="pull-right" style="margin-right:5%;">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->           
            </div> <!-- end kategori1 -->

            <div id="kategori2">
                <div class="row">
                   <div class="col-sm-12" id="subheader" name="materi">MATERI</div><!-- ========================================================================================= -->
                </div> <hr>
                <div class="row">
                   <div class="col-sm-1">1</div>
                   <div class="col-sm-6">Materi yang disampaikan dosen telah lumayan baik</div>
                   <div class="col-sm-5">
                    <input type="radio" name="point4" value="STS" class="radio-inline">STS
                    <input type="radio" name="point4" value="TS" class="radio-inline">TS
                    <input type="radio" name="point4" value="N" class="radio-inline">N
                    <input type="radio" name="point4" value="S" class="radio-inline">S
                    <input type="radio" name="point4" value="ST" class="radio-inline">ST
                   </div>
                </div> <!--  end row --> <hr>

                <div class="row">
                   <div class="col-sm-1">2</div>
                   <div class="col-sm-6">Penguasaan materi yang diajarkan oleh dosen lumayan banyak</div>
                  <div class="col-sm-5">
                    <input type="radio" name="point5" value="STS" class="radio-inline">STS
                    <input type="radio" name="point5" value="TS" class="radio-inline">TS
                    <input type="radio" name="point5" value="N" class="radio-inline">N
                    <input type="radio" name="point5" value="S" class="radio-inline">S
                    <input type="radio" name="point5" value="ST" class="radio-inline">ST
                   </div>
                </div> <!--  end row --> <hr>

                <div class="row">
                   <div class="col-sm-1">3</div>
                   <div class="col-sm-6">Materi yang disampaikan dosen adalah interaktif</div>
                   <div class="col-sm-5">
                    <input type="radio" name="point6" value="STS" class="radio-inline">STS
                    <input type="radio" name="point6" value="TS" class="radio-inline">TS
                    <input type="radio" name="point6" value="N" class="radio-inline">N
                    <input type="radio" name="point6" value="S" class="radio-inline">S
                    <input type="radio" name="point6" value="ST" class="radio-inline">ST
                   </div>
                </div> <!--  end row --> <hr>

                <div class="row">
                   <div class="col-sm-1">4</div>
                   <div class="col-sm-6">Materi yang diajarkan sesuai dengan silabus</div>
                  <div class="col-sm-5">
                    <input type="radio" name="point7" value="STS" class="radio-inline">STS
                    <input type="radio" name="point7" value="TS" class="radio-inline">TS
                    <input type="radio" name="point7" value="N" class="radio-inline">N
                    <input type="radio" name="point7" value="S" class="radio-inline">S
                    <input type="radio" name="point7" value="ST" class="radio-inline">ST
                   </div>
                </div> <!--  end row --> <hr>

                <div class="pull-right">
                  <button type="button" class="btn btn-primary" onclick="next()" value="next">Next</button>
                </div> <!-- end next -->
              </div><!-- End Kategori 2 -->
            
            <div id="kategori3">
              <div class="row">
                 <div class="col-sm-12" id="subheader" name="pengajaran">PENGAJARAN</div><!-- ========================================================================================= -->
              </div> <hr>
              <div class="row">
                 <div class="col-sm-1" id="no">1</div>
                 <div class="col-sm-6">Dosen memiliki ketepatan waktu masuk dan keluar kelas</div>
                <div class="col-sm-5">
                    <input type="radio" name="point8" value="STS" class="radio-inline">STS
                    <input type="radio" name="point8" value="TS" class="radio-inline">TS
                    <input type="radio" name="point8" value="N" class="radio-inline">N
                    <input type="radio" name="point8" value="S" class="radio-inline">S
                    <input type="radio" name="point8" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Dalam proses belajar/mengajar Anda dapat mengerti dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point9" value="STS" class="radio-inline">STS
                    <input type="radio" name="point9" value="TS" class="radio-inline">TS
                    <input type="radio" name="point9" value="N" class="radio-inline">N
                    <input type="radio" name="point9" value="S" class="radio-inline">S
                    <input type="radio" name="point9" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>


              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Nilai yang diberikan dosen sesuai dengan penguasaan materi Anda</div>
                <div class="col-sm-5">
                    <input type="radio" name="point10" value="STS" class="radio-inline">STS
                    <input type="radio" name="point10" value="TS" class="radio-inline">TS
                    <input type="radio" name="point10" value="N" class="radio-inline">N
                    <input type="radio" name="point10" value="S" class="radio-inline">S
                    <input type="radio" name="point10" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Cara dosen menyampaikan materi sesuai dengan apa yang Anda harapkan</div>
                <div class="col-sm-5">
                    <input type="radio" name="point11" value="STS" class="radio-inline">STS
                    <input type="radio" name="point11" value="TS" class="radio-inline">TS
                    <input type="radio" name="point11" value="N" class="radio-inline">N
                    <input type="radio" name="point11" value="S" class="radio-inline">S
                    <input type="radio" name="point11" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->
            </div><!-- kategori 3 -->

            <div id="kategori4">
              <div class="row">
                 <div class="col-sm-12" id="subheader" name="fasilitas">FASILITAS</div><!-- ========================================================================================= -->
              </div> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">1</div>
                 <div class="col-sm-6">Fasilitas yang telah diberikan kampus telah cukup baik untuk menunjang kegiatan kuliah Anda</div>
                  <div class="col-sm-5">
                    <input type="radio" name="point12" value="STS" class="radio-inline">STS
                    <input type="radio" name="point12" value="TS" class="radio-inline">TS
                    <input type="radio" name="point12" value="N" class="radio-inline">N
                    <input type="radio" name="point12" value="S" class="radio-inline">S
                    <input type="radio" name="point12" value="ST" class="radio-inline">ST
                  </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Penanganan cepat pada masalah listrik apabila listrik padam</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point13" value="STS" class="radio-inline">STS
                    <input type="radio" name="point13" value="TS" class="radio-inline">TS
                    <input type="radio" name="point13" value="N" class="radio-inline">N
                    <input type="radio" name="point13" value="S" class="radio-inline">S
                    <input type="radio" name="point13" value="ST" class="radio-inline">ST
                  </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Fasilitas toilet berfungsi dengan baik dan bersih</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point14" value="STS" class="radio-inline">STS
                    <input type="radio" name="point14" value="TS" class="radio-inline">TS
                    <input type="radio" name="point14" value="N" class="radio-inline">N
                    <input type="radio" name="point14" value="S" class="radio-inline">S
                    <input type="radio" name="point14" value="ST" class="radio-inline">ST
                  </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Fasilitas pendingin ruangan dirasakan telah cukup baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point15" value="STS" class="radio-inline">STS
                    <input type="radio" name="point15" value="TS" class="radio-inline">TS
                    <input type="radio" name="point15" value="N" class="radio-inline">N
                    <input type="radio" name="point15" value="S" class="radio-inline">S
                    <input type="radio" name="point15" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">5</div>
                 <div class="col-sm-6">Pencahayaan didalam kelas telah lumayan baik</div>
                <div class="col-sm-5">
                    <input type="radio" name="point16" value="STS" class="radio-inline">STS
                    <input type="radio" name="point16" value="TS" class="radio-inline">TS
                    <input type="radio" name="point16" value="N" class="radio-inline">N
                    <input type="radio" name="point16" value="S" class="radio-inline">S
                    <input type="radio" name="point16" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">6</div>
                 <div class="col-sm-6">Proyektor dan layar proyektor yang digunakan telah cukup membantu melaksanakan kegiatan pengajaran</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point17" value="STS" class="radio-inline">STS
                    <input type="radio" name="point17" value="TS" class="radio-inline">TS
                    <input type="radio" name="point17" value="N" class="radio-inline">N
                    <input type="radio" name="point17" value="S" class="radio-inline">S
                    <input type="radio" name="point17" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">7</div>
                 <div class="col-sm-6">Perlengkapan seperti papan tulis/spidol telah menunjang proses pengajaran</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">8</div>
                 <div class="col-sm-6">Fasilitas hotspot tersedia dengan baik</div>
                <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">9</div>
                 <div class="col-sm-6">Kantin sudah memadai</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->
  
            </div><!-- End Kategori 4 -->
            
            <div id="kategori5">
              <div class="row">
                 <div class="col-sm-12" id="subheader" name="pakiraan">PARKIRAN</div><!-- ========================================================================================= -->
              </div> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">1</div>
                 <div class="col-sm-6">Sistem pakiraan telah berjalan cukup baik masalah pakir kendaraan</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Kinerja satpam dalam pengamanan dan tanggung jawab dalam pengaturan parkiran berjalan dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Kinerja satpam dalam sistem pakir berjalan dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->
            </div><!-- End Kategori 4 -->

            <div id="kategori6">
              <div class="row">
               <div class="col-sm-12" id="subheader" name="laboratorium">LABORATORIUM</div><!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">1</div>
                 <div class="col-sm-6">Fasilitas laboratorium yang disediakan telah memadai</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Apakah pendapat saudara mengenai laboran telah dibangun dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Materi mengenai laboran yang disampaikan dapat dipahami</div>
                <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Materi yang diberikan laboran sesuai dengan silabus</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">5</div>
                 <div class="col-sm-6">Materi yang disampaikan laboran dapat dimengerti dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">6</div>
                 <div class="col-sm-6">Laboratorium bisa digunakan untuk search atau bahkan mengerjakan tugas-tugas perkuliahan</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">7</div>
                 <div class="col-sm-6">Laboran bersedia mengajarkan saudara diluar jam kuliah</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">8</div>
                 <div class="col-sm-6">Antara dosen pemateri dan laboran saling berkomunikasi mengenai materi yang diajarkan</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">9</div>
                 <div class="col-sm-6">Laboratorium dapat digunakan oleh mahasiswa diluar jam pengajaran</div>
                <div class="col-sm-5">
                    <input type="radio" name="point" value="STS" class="radio-inline">STS
                    <input type="radio" name="point" value="TS" class="radio-inline">TS
                    <input type="radio" name="point" value="N" class="radio-inline">N
                    <input type="radio" name="point" value="S" class="radio-inline">S
                    <input type="radio" name="point" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->  
            </div><!-- End Kategori 5 -->
            

            <div id="kategori7">
              <div class="row">
                 <div class="col-sm-12" id="subheader" name="kenyamanan dan keamanan">KENYAMANAN DAN KEAMANAN</div><!-- ========================================================================================= -->
              </div> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">1</div>
                 <div class="col-sm-6">Kabersihan da kerapian telah terlaksana denga baik disetiap ruangan kelas yang akan digunakan</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Kebersihan lingkungan dapat dirasakan dalam kenyamanan perkuliahan</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Apakah Anda mengharapkan adanya fasilitas student center/fasilitas outdoor/tempat berdiskusi diluar kelas</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                   <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Keamanan dalam perkuliahan bejalan dengan baik</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                   <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">5</div>
                 <div class="col-sm-6">Pengatasan untuk masalah kehilangan barang dapat terselesaikan</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">6</div>
                 <div class="col-sm-6">Menurut Anda cara security dalam menangani masalah keamanan dapat berjalan dengan baik</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->
  
            </div><!-- End Kategori 6 -->
            
            <div id="kategori8">
              <div class="row">
                 <div class="col-sm-12" id="subheader" name="minat dan bakat">MINAT DAN BAKAT</div><!-- ========================================================================================= -->
              </div> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">1</div>
                 <div class="col-sm-6" >Fakultas telah membantu mahasiswa dalam pengembangan softskill dan hardskill</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Peran Fakultas mendukung mahasiswa dalam mengikuti perlombaan</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Dalam ketersediannya Fakultas membantu mahasiswa dalm mewadahi pengembangan minat dan bakat</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Apakah Fakultas merespon terhadap isu yang berkembang dinegara </div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">5</div>
                 <div class="col-sm-6">Apakah Anda setuju diadakan kuliah-kuliah umum dilingkungan Fakultas untuk tambahan perkuliahan</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="pull-right" id="next">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->  
            </div><!-- End Kategori 7 -->
            
            <div id="kategori9">
              <div class="row">
                 <div class="col-sm-12" id="subheader" name="ta dan kp">TA DAN KP</div><!-- ========================================================================================= -->
              </div> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">1</div>
                 <div class="col-sm-6">Dosen pembimbing Skripsi telah membantu dalam masalah mengatasi Skripsi/KP Anda</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Media atau fasilitas di Fakultas telah membantu Anda dalam mengejakan TA</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Peran ketua jurusan/sekjur dapat membantu dalam mengerjakan TA</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Jadwal pembimbing telah sesuai atau membantu mengatasi pembimbingan TA</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                   <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->

            </div><!-- End Kategori 8 -->
            
            <div id="kategori10">
              <div class="row">
                 <div class="col-sm-12" id="subheader" name="administrasi">ADMINISTRASI</div><!-- ========================================================================================= -->
              </div> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">1</div>
                 <div class="col-sm-6">Pelayanan administrasi sudah baik dan ramah</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Proses dalam pelayanan administrasi cepat</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                    <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                    <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                    <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                    <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                    <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                  </div>
                 </div>
              </div><!--  end row --> <hr>
               <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next</button>
              </div> <!-- end next -->
            </div><!-- End Kategori 9 -->

            <div id="kategori11">
              <h3>KRITIK DAN SARAN</h3>
              <div class="form-group">
               <label for="textarea">Kritik</label>
               <textarea class="form-control" rows="5" id="textarea" name="kritik"></textarea>
              </div>
              <div class="form-group">
               <label for="textarea">Saran</label>
               <textarea class="form-control" rows="5" id="textarea" name="saran"></textarea>
              </div>

              <?php if($this->input->post('angkatan') == '2012' || $this->input->post('angkatan') == '2013'): ?>
                <h3>KRITIK DAN SARAN MASALAH TA</h3>
                <div class="form-group">
                 <label for="textarea">Dosen/Pembimbing</label>
                 <textarea class="form-control" rows="5" id="textarea" name="pembimbingTA"></textarea>
                </div>
                <div class="form-group">
                 <label for="textarea">Kendala pengerjaan TA</label>
                 <textarea class="form-control" rows="5" id="textarea" name="kendalaTA"></textarea>
                </div>
              <?php endif; ?>

              <div class="" id="simpan">
                <button type="button" class="btn btn-success" name="insert">SIMPAN</button>
              </div> <!-- end simpan -->  
            </div><!-- End Kategori 10 -->
            
    <?php echo form_close(); ?>
</div>
<script type="text/javascript">
  function submitAngket()
  {
    var queryString = $("#angketForm").serialize();
    var url = "<?= base_url('') ?>"
  }
</script>