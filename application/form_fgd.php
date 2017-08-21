<div class="container">
  <?php  
    $msg = $this->session->flashdata('msg');
    if(isset($msg)){
      echo $msg;
    }
    
    form_open('Angket/input');

  ?>
      <div class="row judul">
        <div class="col-sm-12">
          <h1>ANGKET FORUM GROUP DISCUSSION (FGD) II</h1>
        </div>
      </div><hr>

            <div class="row" id="table_header">
               <div class="col-sm-1" >No.</div>
               <div class="col-sm-6" >Pernyataan</div>
               <div class="col-sm-5" >Point</div>
            </div><hr>

            <div class="row">
               <div class="col-sm-12" id="subheader" name="dosen">DOSEN</div> <!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">1</div>
               <div class="col-sm-6" id="q">Kinerja dosen telah cukup baik</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">2</div>
               <div class="col-sm-6" id="q">Menurut Anda apakah dosen bersedia membuka kelas konseling diluar jadwal kuliah</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">3</div>
               <div class="col-sm-6" id="q">Dosen telah menerapkan kedisiplinan dikelas</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="pull-right" id="next">
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="materi">MATERI</div><!-- ========================================================================================= -->
            </div> <hr>
            <div class="row">
               <div class="col-sm-1" id="no">4</div>
               <div class="col-sm-6" id="q">Materi yang disampaikan dosen telah lumayan baik</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">5</div>
               <div class="col-sm-6" id="q">Penguasaan materi yang diajarkan oleh dosen lumayan banyak</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">6</div>
               <div class="col-sm-6" id="q">Materi yang disampaikan dosen adalah interaktif</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                 <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">7</div>
               <div class="col-sm-6" id="q">Materi yang diajarkan sesuai dengan silabus</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="pull-right" id="next">
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="pengajaran">PENGAJARAN</div><!-- ========================================================================================= -->
            </div> <hr>
            <div class="row">
               <div class="col-sm-1" id="no">8</div>
               <div class="col-sm-6" id="q">Dosen memiliki ketepatan waktu masuk dan keluar kelas</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">9</div>
               <div class="col-sm-6" id="q">Dalam proses belajar/mengajar Anda dapat mengerti dengan baik</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">10</div>
               <div class="col-sm-6" id="q">Nilai yang diberikan dosen sesuai dengan penguasaan materi Anda</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">11</div>
               <div class="col-sm-6" id="q">Cara dosen menyampaikan materi sesuai dengan apa yang Anda harapkan</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="pull-right" id="next">
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="fasilitas">FASILITAS</div><!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">12</div>
               <div class="col-sm-6" id="q">Fasilitas yang telah diberikan kampus telah cukup baik untuk menunjang kegiatan kuliah Anda</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                 <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">13</div>
               <div class="col-sm-6" id="q">Penanganan cepat pada masalah listrik apabila listrik padam</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">14</div>
               <div class="col-sm-6" id="q">Fasilitas toilet berfungsi dengan baik dan bersih</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                 <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">15</div>
               <div class="col-sm-6" id="q">Fasilitas pendingin ruangan dirasakan telah cukup baik</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">16</div>
               <div class="col-sm-6" id="q">Pencahayaan didalam kelas telah lumayan baik</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">17</div>
               <div class="col-sm-6" id="q">Proyektor dan layar proyektor yang digunakan telah cukup membantu melaksanakan kegiatan pengajaran</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">18</div>
               <div class="col-sm-6" id="q">Perlengkapan seperti papan tulis/spidol telah menunjang proses pengajaran</div>
               <div class="col-sm-5" id="point">
                 <div name='point'>
                  <label class="radio-inline"><input type="radio" name="STS" value='STS'>STS</label>
                  <label class="radio-inline"><input type="radio" name="TS" value='TS'>TS</label>
                  <label class="radio-inline"><input type="radio" name="N" value='N'>N</label>
                  <label class="radio-inline"><input type="radio" name="S" value='S'>S</label>
                  <label class="radio-inline"><input type="radio" name="ST" value='ST'>ST</label>
                </div>
               </div>
            </div> <!--  end row --> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">19</div>
               <div class="col-sm-6" id="q">Fasilitas hotspot tersedia dengan baik</div>
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
               <div class="col-sm-1" id="no">20</div>
               <div class="col-sm-6" id="q">Kantin sudah memadai</div>
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
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="pakiraan">PAKIRAAN</div><!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">21</div>
               <div class="col-sm-6" id="q">Sistem pakiraan telah berjalan cukup baik masalah pakir kendaraan</div>
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
               <div class="col-sm-1" id="no">22</div>
               <div class="col-sm-6" id="q">Kinerja satpam dalam pengamanan dan tanggung jawab dalam pengaturan pakiraan berjalan dengan baik</div>
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
               <div class="col-sm-1" id="no">23</div>
               <div class="col-sm-6" id="q">Kinerja satpam dalam sistem pakir berjalan dengan baik</div>
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
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="laboratorium">LABORATORIUM</div><!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">24</div>
               <div class="col-sm-6" id="q">Fasilitas laboratorium yang disediakan telah memadai</div>
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
               <div class="col-sm-1" id="no">25</div>
               <div class="col-sm-6" id="q">Apakah pendapat saudara mengenai laboran telah dibangun dengan baik</div>
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
               <div class="col-sm-1" id="no">26</div>
               <div class="col-sm-6" id="q">Materi mengenai laboran yang disampaikan dapat dipahami</div>
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
               <div class="col-sm-1" id="no">27</div>
               <div class="col-sm-6" id="q">Materi yang diberikan laboran sesuai dengan silabus</div>
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
               <div class="col-sm-1" id="no">28</div>
               <div class="col-sm-6" id="q">Materi yang disampaikan laboran dapat dimengerti dengan baik</div>
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
               <div class="col-sm-1" id="no">29</div>
               <div class="col-sm-6" id="q">Laboratorium bisa digunakan untuk search atau bahkan mengerjakan tugas-tugas perkuliahan</div>
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
               <div class="col-sm-1" id="no">30</div>
               <div class="col-sm-6" id="q">Laboran bersedia mengajarkan saudara diluar jam kuliah</div>
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
               <div class="col-sm-1" id="no">31</div>
               <div class="col-sm-6" id="q">Antara dosen pemateri dan laboran saling berkomunikasi mengenai materi yang diajarkan</div>
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
               <div class="col-sm-1" id="no">32</div>
               <div class="col-sm-6" id="q">Laboratorium dapat digunakan oleh mahasiswa diluar jam pengajaran</div>
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

            <div class="pull-right" id="next1">
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="kenyamanan dan keamanan">KENYAMANAN DAN KEAMANAN</div><!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">33</div>
               <div class="col-sm-6" id="q">Kabersihan da kerapian telah terlaksana denga baik disetiap ruangan kelas yang akan digunakan</div>
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
               <div class="col-sm-1" id="no">34</div>
               <div class="col-sm-6" id="q">Kebersihan lingkungan dapat dirasakan dalam kenyamanan perkuliahan</div>
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
               <div class="col-sm-1" id="no">35</div>
               <div class="col-sm-6" id="q">Apakah Anda mengharapkan adanya fasilitas student center/fasilitas outdoor/tempat berdiskusi diluar kelas</div>
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
               <div class="col-sm-1" id="no">36</div>
               <div class="col-sm-6" id="q">Keamanan dalam perkuliahan bejalan dengan baik</div>
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
               <div class="col-sm-1" id="no">37</div>
               <div class="col-sm-6" id="q">Pengatasan untuk masalah kehilangan barang dapat terselesaikan</div>
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
               <div class="col-sm-1" id="no">38</div>
               <div class="col-sm-6" id="q">Menurut Anda cara security dalam menangani masalah keamanan dapat berjalan dengan baik</div>
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
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="minat dan bakat">MINAT DAN BAKAT</div><!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">39</div>
               <div class="col-sm-6" id="q">Fakultas telah membantu mahasiswa dalam pengembangan softskill dan hardskill</div>
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
               <div class="col-sm-1" id="no">40</div>
               <div class="col-sm-6" id="q">Peran Fakultas mendukung mahasiswa dalam mengikuti perlombaan</div>
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
               <div class="col-sm-1" id="no">41</div>
               <div class="col-sm-6" id="q">Dalam ketersediannya Fakultas membantu mahasiswa dalm mewadahi pengembangan minat dan bakat</div>
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
               <div class="col-sm-1" id="no">42</div>
               <div class="col-sm-6" id="q">Apakah Fakultas merespon terhadap isu yang berkembang dinegara </div>
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
               <div class="col-sm-1" id="no">43</div>
               <div class="col-sm-6" id="q">Apakah Anda setuju diadakan kuliah-kuliah umum dilingkungan Fakultas untuk tambahan perkuliahan</div>
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
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="ta dan kp">TA DAN KP</div><!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">44</div>
               <div class="col-sm-6" id="q">Dosen pembimbing Skripsi telah membantu dalam masalah mengatasi Skripsi/KP Anda</div>
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
               <div class="col-sm-1" id="no">45</div>
               <div class="col-sm-6" id="q">Media atau fasilitas di Fakultas telah membantu Anda dalam mengejakan TA</div>
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
               <div class="col-sm-1" id="no">46</div>
               <div class="col-sm-6" id="q">Peran ketua jurusan/sekjur dapat membantu dalam mengerjakan TA</div>
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
               <div class="col-sm-1" id="no">47</div>
               <div class="col-sm-6" id="q">Jadwal pembimbing telah sesuai atau membantu mengatasi pembimbingan TA</div>
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
              <button type="button" class="btn btn-primary btn-lg" value="next">Next</button>
            </div> <!-- end next -->

            <div class="row">
               <div class="col-sm-12" id="subheader" name="administrasi">ADMINISTRASI</div><!-- ========================================================================================= -->
            </div> <hr>

            <div class="row">
               <div class="col-sm-1" id="no">48</div>
               <div class="col-sm-6" id="q">Pelayanan administrasi sudah baik dan ramah</div>
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
               <div class="col-sm-1" id="no">49</div>
               <div class="col-sm-6" id="q">Proses dalam pelayanan administrasi cepat</div>
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
        <button type="button" class="btn btn-success btn-lg" name="insert">SIMPAN</button>
      </div> <!-- end simpan -->
      <?php echo form_close(); ?>
</div>
