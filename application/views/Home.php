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

    echo form_open('angket/submitAngket', array('id' => 'angketForm'));

  ?>
  <div class="row judul">
    <div style="text-align:center;">
        <h1>SELAMAT DATANG DI</h1> 
        <h1>FORUM GROUP DISCUSSION (FGD) II</h1>
        <h2>Fakultas Ilmu Komputer Universitas Sriwijaya</h2>
        <h5 style="color:red;">Mahasiswa wajib mengisi angket untuk mengakses hotspot</h5>
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
          <button id="nextAwal" type="button" onclick="lanjutkan()" class="btn btn-success" name="login">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
      </div> <!-- end simpan -->
    </div>
  </div>

      <script type="text/javascript">
        var jurusan;
        var angkatan;
        var kategori = 1;

        $(document).ready(function() {
          $("#ktg").text(kategori);
        });

        function lanjutkan() {
          if ($("#jurusan").val() == 'Pilih Jurusan' || $("#angkatan").val() == 'Pilih Angkatan')
          {
            swal("Perhatian!", "Anda harus mengisi jurusan dan angkatan terlebih dahulu", "error");
            return;
          }

          jurusan = $("#jurusan").val();
          angkatan = $("#angkatan").val();

          $("#angket").css("display", "block");
          $("#biodata").css("display", "none");
        }

        function next(){

          if (!isCheckedAll(kategori))
          {
            swal("Perhatian!", "Anda harus memberi nilai pada tiap pernyataan", "error");
            return;
          }

          $("#kategori" + kategori).css("display", "none")
          $("#kategori" + (kategori + 1)).animate({width:'toggle'}, 500);
          //$("#kategori" + (kategori + 1)).css("display", "block");
          kategori++;
          if(kategori == 11){
            $("#hilang_saat_kritik").css("display", "none");
          }
          $("#ktg").text(kategori);
        }

        // $(document).ready(function() {
        //   $('#angketForm').on('submit', function() {
        //     var queryString = $('#angketForm').serialize();
        //     $.ajax({
        //       method: 'GET',
        //       url: ('<?= base_url("angket/submitAngket") ?>' + queryString),
        //       success: function() {
        //         alert("Sukses");
        //       },
        //       error: function() {
        //         alert("Error");
        //       }
        //     });
        //   });
        // });

        // function submitAngket()
        // {
        //   var queryString = $('#angketForm').serialize();
        //   alert('<?= base_url("angket/submitAngket?") ?>' + queryString);
        //   $.ajax({
        //     method: 'GET',
        //     url: ('<?= base_url("angket/submitAngket?") ?>' + queryString),
        //     data: {},
        //     success: function() {
        //       alert("Sukses");
        //     },
        //     error: function() {
        //       alert("Error");
        //     }
        //   });

        //   return false;
        // }
      </script>
    <?php // echo form_close(); ?>





    <script type="text/javascript">
      function isCheckedAll(kategori)
      {
        if (kategori == 1)
        {
          if ($("input:radio[name='point1']").is(":checked")
          && $("input:radio[name='point2']").is(":checked")
          && $("input:radio[name='point3']").is(":checked"))
          {
            return true;
          } //dosen
        }
        else if (kategori == 2)
        {
          if ($("input:radio[name='point4']").is(":checked")
          && $("input:radio[name='point5']").is(":checked")
          && $("input:radio[name='point6']").is(":checked")
          && $("input:radio[name='point7']").is(":checked")
          )
          {
            return true;
          } //materi
        }
        else if (kategori == 3)
        {
          if ($("input:radio[name='point8']").is(":checked")
          && $("input:radio[name='point9']").is(":checked")
          && $("input:radio[name='point10']").is(":checked")
          && $("input:radio[name='point11']").is(":checked")
          )
          {
            return true;
          } //pengajaran
        }
        else if (kategori == 4)
        {
          if ($("input:radio[name='point12']").is(":checked")
          && $("input:radio[name='point13']").is(":checked")
          && $("input:radio[name='point14']").is(":checked")
          && $("input:radio[name='point16']").is(":checked")
          && $("input:radio[name='point17']").is(":checked")
          && $("input:radio[name='point18']").is(":checked")
          && $("input:radio[name='point19']").is(":checked")
          && $("input:radio[name='point20']").is(":checked")
          )
          {
            return true;
          } //fasilitas
        }
        else if (kategori == 5)
        {
          if ($("input:radio[name='point21']").is(":checked")
          && $("input:radio[name='point22']").is(":checked")
          && $("input:radio[name='point23']").is(":checked")
          )
          {
            return true;
          } //parkiran
        }
        else if (kategori == 6)
        {
          if ($("input:radio[name='point24']").is(":checked")
          && $("input:radio[name='point25']").is(":checked") 
          && $("input:radio[name='point26']").is(":checked")
          && $("input:radio[name='point27']").is(":checked") 
          && $("input:radio[name='point28']").is(":checked") 
          && $("input:radio[name='point29']").is(":checked") 
          && $("input:radio[name='point30']").is(":checked") 
          && $("input:radio[name='point31']").is(":checked") 
          && $("input:radio[name='point32']").is(":checked")  
          )
          {
            return true;
          } //laboratorium
        }
        else if (kategori == 7)
        {
          if ($("input:radio[name='point33']").is(":checked") 
          && $("input:radio[name='point34']").is(":checked") 
          && $("input:radio[name='point35']").is(":checked") 
          && $("input:radio[name='point36']").is(":checked") 
          && $("input:radio[name='point37']").is(":checked") 
          && $("input:radio[name='point38']").is(":checked") )
          {
            return true;
          } // kenyamanan_keamanan
        }
        else if (kategori == 8)
        {
          if ($("input:radio[name='point39']").is(":checked") 
          && $("input:radio[name='point40']").is(":checked") 
          && $("input:radio[name='point41']").is(":checked") 
          && $("input:radio[name='point42']").is(":checked") 
          && $("input:radio[name='point43']").is(":checked") )
          {
            return true;
          } // minat_bakat
        }
        else if (kategori == 9)
        {
          if ($("input:radio[name='point44']").is(":checked") 
          && $("input:radio[name='point45']").is(":checked") 
          && $("input:radio[name='point46']").is(":checked") 
          && $("input:radio[name='point47']").is(":checked") )
          {
            return true;
          } // ta_kp
        }
        else if (kategori == 10)
        {
          if ($("input:radio[name='point48']").is(":checked") 
          && $("input:radio[name='point49']").is(":checked") )
          {
            return true;
          }
        }
        else if (kategori == 11)
        {
          return true;
        }

        return false;
      }

      function submit_angket()
      {
        swal({
          title: "Apakah anda yakin data yang anda isi benar?",
          text: "Data yang anda isi akan disampaikan pada acara forum group discussion",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Ya",
          cancelButtonText: "Tidak",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            console.log("have to be submitted!!!");
            $("#angketForm").submit();
            return true;
          } else {
            return false;
          }
        });
        return false;
      }

      $("#insert_angket").on('click', submit_angket);
    </script>




































<div id="angket" class="container">
  <?php  
    $msg = $this->session->flashdata('msg');
    if(isset($msg)){
      echo $msg;
    }
    
    //form_open('Angket/input', array('id' => 'angketForm'));

  ?>
    <!-- <form id="angketForm" onsubmit="submitAngket(); return false;"> -->
      <div class="row judul">
        <div class="col-sm-12">
          <h1>ANGKET FORUM GROUP DISCUSSION (FGD) II</h1>
        </div>
      </div><hr>
            <div class="well">
                <strong>KETERANGAN :</strong><br/>
                <table>
                  <tr>
                    <td style="width:50px;">ST</td>
                    <td>: SANGAT SETUJU</td>
                  </tr>
                  <tr>
                    <td>S</td>
                    <td>: SETUJU</td>
                  </tr>
                  <tr>
                    <td>N</td>
                    <td>: NETRAL</td>
                  </tr>
                  <tr>
                    <td>TS</td>
                    <td>: TIDAK SETUJU</td>
                  </tr>
                  <tr>
                    <td>STS</td>
                    <td>: SANGAT TIDAK SETUJU</td>
                  </tr>
                </table>
            </div>

            <h3>Kategori <span id="ktg"></span>/11</h3>

            <div id="kategori1">
                <div class="row">
                 <div class="col-sm-12" id="subheader" name="dosen"><strong>DOSEN</strong></div> <!-- ========================================================================================= -->
              </div> <hr>
              <div id="hilang_saat_kritik" class="row" id="table_header">
                 <div class="col-sm-1" >No.</div>
                 <div class="col-sm-6" >Pernyataan</div>
                 <div class="col-sm-5" >Point</div>
              </div><hr>

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
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
              </div> <!-- end next -->           
            </div> <!-- end kategori1 -->

            <div id="kategori2">
                <div class="row">
                   <div class="col-sm-12" id="subheader" name="materi">MATERI</div><!-- ========================================================================================= -->
                </div> <hr>
                <div id="hilang_saat_kritik" class="row" id="table_header">
                   <div class="col-sm-1" >No.</div>
                   <div class="col-sm-6" >Pernyataan</div>
                   <div class="col-sm-5" >Point</div>
                </div><hr>
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
                  <button type="button" class="btn btn-primary" onclick="next()" value="next">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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
                    <input type="radio" name="point18" value="STS" class="radio-inline">STS
                    <input type="radio" name="point18" value="TS" class="radio-inline">TS
                    <input type="radio" name="point18" value="N" class="radio-inline">N
                    <input type="radio" name="point18" value="S" class="radio-inline">S
                    <input type="radio" name="point18" value="ST" class="radio-inline">ST
                   </div>
              </div> <!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">8</div>
                 <div class="col-sm-6">Fasilitas hotspot tersedia dengan baik</div>
                <div class="col-sm-5">
                    <input type="radio" name="point19" value="STS" class="radio-inline">STS
                    <input type="radio" name="point19" value="TS" class="radio-inline">TS
                    <input type="radio" name="point19" value="N" class="radio-inline">N
                    <input type="radio" name="point19" value="S" class="radio-inline">S
                    <input type="radio" name="point19" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">9</div>
                 <div class="col-sm-6">Kantin sudah memadai</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point20" value="STS" class="radio-inline">STS
                    <input type="radio" name="point20" value="TS" class="radio-inline">TS
                    <input type="radio" name="point20" value="N" class="radio-inline">N
                    <input type="radio" name="point20" value="S" class="radio-inline">S
                    <input type="radio" name="point20" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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
                    <input type="radio" name="point21" value="STS" class="radio-inline">STS
                    <input type="radio" name="point21" value="TS" class="radio-inline">TS
                    <input type="radio" name="point21" value="N" class="radio-inline">N
                    <input type="radio" name="point21" value="S" class="radio-inline">S
                    <input type="radio" name="point21" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Kinerja satpam dalam pengamanan dan tanggung jawab dalam pengaturan parkiran berjalan dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point22" value="STS" class="radio-inline">STS
                    <input type="radio" name="point22" value="TS" class="radio-inline">TS
                    <input type="radio" name="point22" value="N" class="radio-inline">N
                    <input type="radio" name="point22" value="S" class="radio-inline">S
                    <input type="radio" name="point22" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Kinerja satpam dalam sistem pakir berjalan dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point23" value="STS" class="radio-inline">STS
                    <input type="radio" name="point23" value="TS" class="radio-inline">TS
                    <input type="radio" name="point23" value="N" class="radio-inline">N
                    <input type="radio" name="point23" value="S" class="radio-inline">S
                    <input type="radio" name="point23" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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
                    <input type="radio" name="point24" value="STS" class="radio-inline">STS
                    <input type="radio" name="point24" value="TS" class="radio-inline">TS
                    <input type="radio" name="point24" value="N" class="radio-inline">N
                    <input type="radio" name="point24" value="S" class="radio-inline">S
                    <input type="radio" name="point24" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Apakah pendapat saudara mengenai laboran telah dibangun dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point25" value="STS" class="radio-inline">STS
                    <input type="radio" name="point25" value="TS" class="radio-inline">TS
                    <input type="radio" name="point25" value="N" class="radio-inline">N
                    <input type="radio" name="point25" value="S" class="radio-inline">S
                    <input type="radio" name="point25" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Materi mengenai laboran yang disampaikan dapat dipahami</div>
                <div class="col-sm-5">
                    <input type="radio" name="point26" value="STS" class="radio-inline">STS
                    <input type="radio" name="point26" value="TS" class="radio-inline">TS
                    <input type="radio" name="point26" value="N" class="radio-inline">N
                    <input type="radio" name="point26" value="S" class="radio-inline">S
                    <input type="radio" name="point26" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Materi yang diberikan laboran sesuai dengan silabus</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point27" value="STS" class="radio-inline">STS
                    <input type="radio" name="point27" value="TS" class="radio-inline">TS
                    <input type="radio" name="point27" value="N" class="radio-inline">N
                    <input type="radio" name="point27" value="S" class="radio-inline">S
                    <input type="radio" name="point27" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">5</div>
                 <div class="col-sm-6">Materi yang disampaikan laboran dapat dimengerti dengan baik</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point28" value="STS" class="radio-inline">STS
                    <input type="radio" name="point28" value="TS" class="radio-inline">TS
                    <input type="radio" name="point28" value="N" class="radio-inline">N
                    <input type="radio" name="point28" value="S" class="radio-inline">S
                    <input type="radio" name="point28" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">6</div>
                 <div class="col-sm-6">Laboratorium bisa digunakan untuk search atau bahkan mengerjakan tugas-tugas perkuliahan</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point29" value="STS" class="radio-inline">STS
                    <input type="radio" name="point29" value="TS" class="radio-inline">TS
                    <input type="radio" name="point29" value="N" class="radio-inline">N
                    <input type="radio" name="point29" value="S" class="radio-inline">S
                    <input type="radio" name="point29" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">7</div>
                 <div class="col-sm-6">Laboran bersedia mengajarkan saudara diluar jam kuliah</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point30" value="STS" class="radio-inline">STS
                    <input type="radio" name="point30" value="TS" class="radio-inline">TS
                    <input type="radio" name="point30" value="N" class="radio-inline">N
                    <input type="radio" name="point30" value="S" class="radio-inline">S
                    <input type="radio" name="point30" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">8</div>
                 <div class="col-sm-6">Antara dosen pemateri dan laboran saling berkomunikasi mengenai materi yang diajarkan</div>
                 <div class="col-sm-5">
                    <input type="radio" name="point31" value="STS" class="radio-inline">STS
                    <input type="radio" name="point31" value="TS" class="radio-inline">TS
                    <input type="radio" name="point31" value="N" class="radio-inline">N
                    <input type="radio" name="point31" value="S" class="radio-inline">S
                    <input type="radio" name="point31" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">9</div>
                 <div class="col-sm-6">Laboratorium dapat digunakan oleh mahasiswa diluar jam pengajaran</div>
                <div class="col-sm-5">
                    <input type="radio" name="point32" value="STS" class="radio-inline">STS
                    <input type="radio" name="point32" value="TS" class="radio-inline">TS
                    <input type="radio" name="point32" value="N" class="radio-inline">N
                    <input type="radio" name="point32" value="S" class="radio-inline">S
                    <input type="radio" name="point32" value="ST" class="radio-inline">ST
                   </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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
                   	<input type="radio" name="point33" value="STS" class="radio-inline">STS
                    <input type="radio" name="point33" value="TS" class="radio-inline">TS
                    <input type="radio" name="point33" value="N" class="radio-inline">N
                    <input type="radio" name="point33" value="S" class="radio-inline">S
                    <input type="radio" name="point33" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Kebersihan lingkungan dapat dirasakan dalam kenyamanan perkuliahan</div>
                 <div class="col-sm-5" id="point">
                    <input type="radio" name="point34" value="STS" class="radio-inline">STS
                    <input type="radio" name="point34" value="TS" class="radio-inline">TS
                    <input type="radio" name="point34" value="N" class="radio-inline">N
                    <input type="radio" name="point34" value="S" class="radio-inline">S
                    <input type="radio" name="point34" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Apakah Anda mengharapkan adanya fasilitas student center/fasilitas outdoor/tempat berdiskusi diluar kelas</div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point35" value="STS" class="radio-inline">STS
                    <input type="radio" name="point35" value="TS" class="radio-inline">TS
                    <input type="radio" name="point35" value="N" class="radio-inline">N
                    <input type="radio" name="point35" value="S" class="radio-inline">S
                    <input type="radio" name="point35" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Keamanan dalam perkuliahan bejalan dengan baik</div>
                 <div class="col-sm-5" id="point">
                   <div name='point'>
                   	<input type="radio" name="point36" value="STS" class="radio-inline">STS
                    <input type="radio" name="point36" value="TS" class="radio-inline">TS
                    <input type="radio" name="point36" value="N" class="radio-inline">N
                    <input type="radio" name="point36" value="S" class="radio-inline">S
                    <input type="radio" name="point36" value="ST" class="radio-inline">ST
                  </div>
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">5</div>
                 <div class="col-sm-6">Pengatasan untuk masalah kehilangan barang dapat terselesaikan</div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point37" value="STS" class="radio-inline">STS
                    <input type="radio" name="point37" value="TS" class="radio-inline">TS
                    <input type="radio" name="point37" value="N" class="radio-inline">N
                    <input type="radio" name="point37" value="S" class="radio-inline">S
                    <input type="radio" name="point37" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">6</div>
                 <div class="col-sm-6">Menurut Anda cara security dalam menangani masalah keamanan dapat berjalan dengan baik</div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point38" value="STS" class="radio-inline">STS
                    <input type="radio" name="point38" value="TS" class="radio-inline">TS
                    <input type="radio" name="point38" value="N" class="radio-inline">N
                    <input type="radio" name="point38" value="S" class="radio-inline">S
                    <input type="radio" name="point38" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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
                   	<input type="radio" name="point39" value="STS" class="radio-inline">STS
                    <input type="radio" name="point39" value="TS" class="radio-inline">TS
                    <input type="radio" name="point39" value="N" class="radio-inline">N
                    <input type="radio" name="point39" value="S" class="radio-inline">S
                    <input type="radio" name="point39" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Peran Fakultas mendukung mahasiswa dalam mengikuti perlombaan</div>
                 <div class="col-sm-5" id="point">
                  	<input type="radio" name="point40" value="STS" class="radio-inline">STS
                    <input type="radio" name="point40" value="TS" class="radio-inline">TS
                    <input type="radio" name="point40" value="N" class="radio-inline">N
                    <input type="radio" name="point40" value="S" class="radio-inline">S
                    <input type="radio" name="point40" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Dalam ketersediannya Fakultas membantu mahasiswa dalm mewadahi pengembangan minat dan bakat</div>
                 <div class="col-sm-5" id="point">
                  	<input type="radio" name="point41" value="STS" class="radio-inline">STS
                    <input type="radio" name="point41" value="TS" class="radio-inline">TS
                    <input type="radio" name="point41" value="N" class="radio-inline">N
                    <input type="radio" name="point41" value="S" class="radio-inline">S
                    <input type="radio" name="point41" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Apakah Fakultas merespon terhadap isu yang berkembang dinegara </div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point42" value="STS" class="radio-inline">STS
                    <input type="radio" name="point42" value="TS" class="radio-inline">TS
                    <input type="radio" name="point42" value="N" class="radio-inline">N
                    <input type="radio" name="point42" value="S" class="radio-inline">S
                    <input type="radio" name="point42" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">5</div>
                 <div class="col-sm-6">Apakah Anda setuju diadakan kuliah-kuliah umum dilingkungan Fakultas untuk tambahan perkuliahan</div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point43" value="STS" class="radio-inline">STS
                    <input type="radio" name="point43" value="TS" class="radio-inline">TS
                    <input type="radio" name="point43" value="N" class="radio-inline">N
                    <input type="radio" name="point43" value="S" class="radio-inline">S
                    <input type="radio" name="point43" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="pull-right" id="next">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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
                  	<input type="radio" name="point44" value="STS" class="radio-inline">STS
                    <input type="radio" name="point44" value="TS" class="radio-inline">TS
                    <input type="radio" name="point44" value="N" class="radio-inline">N
                    <input type="radio" name="point44" value="S" class="radio-inline">S
                    <input type="radio" name="point44" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Media atau fasilitas di Fakultas telah membantu Anda dalam mengejakan TA</div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point45" value="STS" class="radio-inline">STS
                    <input type="radio" name="point45" value="TS" class="radio-inline">TS
                    <input type="radio" name="point45" value="N" class="radio-inline">N
                    <input type="radio" name="point45" value="S" class="radio-inline">S
                    <input type="radio" name="point45" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">3</div>
                 <div class="col-sm-6">Peran ketua jurusan/sekjur dapat membantu dalam mengerjakan TA</div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point46" value="STS" class="radio-inline">STS
                    <input type="radio" name="point46" value="TS" class="radio-inline">TS
                    <input type="radio" name="point46" value="N" class="radio-inline">N
                    <input type="radio" name="point46" value="S" class="radio-inline">S
                    <input type="radio" name="point46" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">4</div>
                 <div class="col-sm-6">Jadwal pembimbing telah sesuai atau membantu mengatasi pembimbingan TA</div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point47" value="STS" class="radio-inline">STS
                    <input type="radio" name="point47" value="TS" class="radio-inline">TS
                    <input type="radio" name="point47" value="N" class="radio-inline">N
                    <input type="radio" name="point47" value="S" class="radio-inline">S
                    <input type="radio" name="point47" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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
                   	<input type="radio" name="point48" value="STS" class="radio-inline">STS
                    <input type="radio" name="point48" value="TS" class="radio-inline">TS
                    <input type="radio" name="point48" value="N" class="radio-inline">N
                    <input type="radio" name="point48" value="S" class="radio-inline">S
                    <input type="radio" name="point48" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>

              <div class="row">
                 <div class="col-sm-1" id="no">2</div>
                 <div class="col-sm-6">Proses dalam pelayanan administrasi cepat</div>
                 <div class="col-sm-5" id="point">
                   	<input type="radio" name="point49" value="STS" class="radio-inline">STS
                    <input type="radio" name="point49" value="TS" class="radio-inline">TS
                    <input type="radio" name="point49" value="N" class="radio-inline">N
                    <input type="radio" name="point49" value="S" class="radio-inline">S
                    <input type="radio" name="point49" value="ST" class="radio-inline">ST
                 </div>
              </div><!--  end row --> <hr>
               <div class="pull-right">
                <button type="button" class="btn btn-primary" value="next" onclick="next()">Next <i class="glyphicon glyphicon-chevron-right"></i></button>
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

              
                <h3>KRITIK DAN SARAN MASALAH TA <i>(wajib diisi untuk mahasiswa angkatan 2012 dan 2013)</i></h3>
                <div class="form-group">
                 <label for="textarea">Dosen/Pembimbing</label>
                 <textarea class="form-control" rows="5" id="textarea" name="pembimbingTA"></textarea>
                </div>
                <div class="form-group">
                 <label for="textarea">Kendala pengerjaan TA</label>
                 <textarea class="form-control" rows="5" id="textarea" name="kendalaTA"></textarea>
                </div>

              <div class="" id="simpan">
                <button type="submit" class="btn btn-success" id="insert_angket" onclick="submit_angket(); return false;" name="insert">SIMPAN <i class="glyphicon glyphicon-ok"></i></button>
              </div> <!-- end simpan -->  
            </div><!-- End Kategori 10 -->
            
    <?php echo form_close(); ?>
</div>
