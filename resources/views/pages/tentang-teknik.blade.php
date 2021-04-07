@extends('layouts/UserLayout')

@section('content')
@if (App::getLocale() == 'en')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">About Engineering Faculty</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Back</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-2">
          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#sejarah" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">History</button>
            <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#visi-misi" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Vision & Mision</button>
            <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tujuan-target" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Goal & Target</button>
          </div>
        </div>
        <div class="col-sm-12 col-md-10">
          <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="sejarah" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p class="text-center">Fakultas Teknik Universitas Udayana secara resmi berdiri pada tanggal 1 Oktober 1965 dengan Surat Keputusan Menteri PTIP No. 248/Sek/P.U/1965, tanggal 20 Oktober 1965, yang terdiri dari dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai latar belakang pendirian Fakultas Teknik Universitas Udayana, adalah dalam rangka pelestarian, pengembangan kebudayaan Daerah Bali pada khususnya dan kebudayaan nasional pada umumnya, terutama di dalam menghadapi pembangunan dan perkembangan kepariwisataan.</p>
                <p class="text-center">
                  Secara fisik perkembangan itu banyak menyangkut bidang-bidang kearsitekturan dan kesenirupaan, yaitu suatu potensi yang mempunyai nilai tersendiri di dalam kehidupan kebudayaan Bali, selain untuk menampung aspirasi masyarakat khususnya calon-calon mahasiswa dari Bali yang ingin melanjutkan pendidikan seni dan teknologi pada jenjang pendidikan tinggi. Untuk maksud tersebut budayawan di Bali khususnya di kalangan Universitas Udayana merintis jalan untuk mendirikan pendidikan tinggi yang relevan yaitu pendidikan tinggi bidang arsitektur dan seni rupa.</p>
                <p class="text-center">
                  Maka pada tahun 1965, dibentuklah panitia yang disebut Panitia Persiapan Fakultas Teknik Universitas Udayana dengan susunan sebagai berikut:</p>
                <span class="text-start fw-bold">Ketua (merangkap anggota):</span>
                <p class="text-start">Prof. Dr. Ida Bagus Mantra (Rektor Universitas Udayana)</p>
                <p class="text-center"></p>
                <span class="text-start fw-bold">Sekretaris (merangkap anggota):</span>
                <p class="text-start">Drs. Soedarminto (Dosen Fakultas Kedokteran Universitas Udayana)</p>
                <p class="text-center"></p>
                <span class="text-start fw-bold">Anggota: </span><span>Ir. I Gusti Ngurah Jelantik</span>
                <p class="text-start">dr. R. Moerdowo (Dosen Fakultas Kedokteran Universitas Udayana)</p>
                <p class="text-center">Panitia ini berhasil mendirikan Fakultas Teknik Universitas Udayana dengan dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai Pimpinan pertama: Prof. Dr. Ida Bagus Mantra sebagai pejabat dekan dan Drs. Soedarminto sebagai sekretaris dekan. Dengan demikian, tahun 1965 Fakultas Teknik merupakan fakultas kelima di lingkungan Universitas Udayana, dan dengan Surat Keputusan Menteri PTIP Nomor 248 Tahun 1965 terhitung tanggal 1 Oktober 1965 secara resmi dan sah menjadi Fakultas Teknik Universitas Udayana.</p>
                <p class="text-center">Sejalan dengan perkembangan yang ada, Fakultas Teknik Universitas Udayana terus berbenah dan mengembangkan diri. Untuk mengantisipasi perkembangan teknologi dan tuntutan masyarakat akan tenaga teknik.</p>
                <p class="text-center">Pada tahun 1968 Fakultas Teknik membuka jurusan baru yaitu Jurusan Teknik Sipil, sehingga Fakultas Teknik Universitas Udayana resmi memiliki tiga jurusan yaitu Jurusan Arsitektur, Jurusan Seni Rupa dan Jurusan Teknik Sipil.
                  Perkembangan berikutnya adalah dengan diberlakukannya PP No.5 tahun 1980 dan pada tahun 1983 Fakultas Teknik Universitas Udayana ditetapkan hanya terdiri atas dua jurusan yaitu Jurusan Arsitektur dan Jurusan Teknik Sipil. Sedangkan Jurusan Seni Rupa berdiri sendiri menjadi Program Studi Seni Rupa dan Disain (PSSRD).
                  Fakultas Teknik Universitas Udayana melengkapi jurusan yang dikelola dengan dua program studi baru yaitu Program Studi Teknik Mesin dan Program Studi Teknik Elektro pada tahun 1984, berdasarkan Surat Keputusan Rektor Nomor: 612/PT.17/1.01.02/ 1984. Setelah diperjuangkan selama 4 (empat) tahun maka pada tahun 1988 turun Surat Keputusan Direktur Jendral Pendidikan Tinggi Nomor: 64 dan 65/DIKTI/KEP/1988 tentang status resmi Program Studi Teknik Mesin dan Program Studi Teknik Elektro</p>
                <p class="text-center">Berdasarkan Keputusan Direktur Jendral Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan Republik Indonesia Nomor: 231/DIKTI/KEP/1996, tanggal 11 Juli 1996, tentang program studi pada program sarjana di lingkungan Universitas Udayana, maka Fakultas Teknik memiliki empat program studi, yaitu: 1) Program Studi Arsitektur, 2) Program Studi Teknik Sipil, 3) Program Studi Teknik Mesin, dan 4)Program Studi Teknik Elektro
                  Guna memberikan kesempatan kepada masyarakat luas untuk memperoleh pelayanan pendidikan tinggi, maka Fakultas Teknik membuka Program Ekstensi dengan dasar hukum Surat Keputusan Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan No 555/DIKTI/KEP/1997. Untuk Program Ekstensi, Fakultas Teknik memiliki empat program studi yaitu :</p>
                  <ol>
                    <li>
                      <span>Program Studi Arsitektur</span>
                    </li>
                    <li>
                      <span>Program Studi Teknik Sipil</span>
                    </li>
                    <li>
                      <span>Program Studi Teknik Mesin</span>
                    </li>
                    <li>
                      <span>Program Studi Teknik Elektro</span>
                    </li>
                  </ol>
                <p class="text-center">Dengan terbitnya Keputusan Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional Republik Indonesia No: 28/DIKTI/KEP/2002, tentang Penyelenggaraan Program Reguler dan Non Reguler di Perguruan Tinggi Negeri, maka Program Ekstensi disesuaikan menjadi Program Non Reguler</p>
                <p class="text-center">Untuk memenuhi kebutuhan tenaga kerja menengah yang profesional dibidang keteknikan, maka Fakultas Teknik membuka Program Diploma I dan Diploma II, berdasarkan Keputusan Rektor Universitas Udayana No. 165/J14/PR.01.10/2002. Program Diploma yang dibuka adalah untuk Jurusan Arsitektur, Teknik Sipil, Teknik Elektro dan Teknik Mesin.</p>
                <p class="text-center">Sejalan dengan upaya peningkatan Sumber Daya Manusia (SDM), Universitas Udayana memandang perlu untuk membuka Program Pasca Sarjana (S2). Berdasarkan Surat Ijin dari Direktorat Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional Nomor 485/D/T/2003, tanggal 13 Maret 2003, pada tahun ajaran 2003/2004 dibuka Program Studi Magister Tenik Sipil. Administrasi akademik untuk Program Magister berada di bawah Program Pasca Sarjana Universitas Udayana.</p>
            </div>
            <div class="tab-pane fade" id="visi-misi" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <span class="h3 text-start fw-bold">Visi</span>
                <p>Menjadikan Fakultas Teknik sebagai lembaga pendidikan tinggi yang dapat melaksanakan Tri Dharma Perguruan Tinggi yang berkualitas, berbudaya, mendukung pembangunan yang berkelanjutan dan memiliki daya saing global.</p>
                <span class="h3 text-start fw-bold">Misi</span>
                <p>Didasarkan atas visi diatas, misi yang diemban oleh Fakultas Teknik Universitas Udayana adalah:</p>
                <p>Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu menghasilkan lulusan yang berkualitas dan dapat bersaing secara global.
                  Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu mengembangkan ilmu pengetahuan, teknologi dan seni yang berwawasan budaya dan menunjang pembangunan berkelanjutan.
                  Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu berperan aktif dalam kehidupan bermasyarakat.
                  Meningkatkan kerjasama dengan instansi lain baik di dalam maupun di luar negeri.</p>
              </p>
            </div>
            <div class="tab-pane fade" id="tujuan-target" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <span class="h3 text-start fw-bold">Tujuan Umum</span>
              <p>Mencerdaskan kehidupan bangsa, mengembangkan manusia Indonesia seutuhnya, manusia beriman, bertaqwa terhadap Tuhan Yang Maha Esa (Ida Hyang Widhi Wasa), berbudi pekerti luhur, memiliki pengetahuan dan keterampilan, kesehatan jasmani, rohani, kepribadian yang mantap dan mandiri, serta rasa tanggung jawab kemasyarakatan dan kebangsaan.</p>
              <span class="h3 text-start fw-bold">Tujuan Khusus</span>
              <p>Menyiapkan peserta didik yang memiliki kemampuan akademik dan atau menciptakan ilmu dan teknologi.
                Mengembangkan dan menyebarluaskan ilmu pengetahuan serta mengupayakan penggunaannya untuk meningkatkan taraf kehidupan masyarakat dan memperkaya kebudayaan lokal dan nasional.</p>
              <span class="h3 text-start fw-bold">Sasaran</span>
              <p>Menghasilkan lulusan yang mampu menerapkan keahlian akademis, professional, mandiri dan bertanggung jawab, sehingga handal dalam memanfaatkan pengetahuan dan teknologi di bidangnya, untuk menangani berbagai masalah lingkungan binaan secara keteknikan.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
@endif

@if (App::getLocale() == 'id')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Tentang Teknik</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-2">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#sejarah" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Sejarah</button>
          <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#visi-misi" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visi & Misi</button>
          <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tujuan-target" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tujuan & Target</button>
        </div>
      </div>
      <div class="col-sm-12 col-md-10">
        <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="sejarah" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <p class="text-center">Fakultas Teknik Universitas Udayana secara resmi berdiri pada tanggal 1 Oktober 1965 dengan Surat Keputusan Menteri PTIP No. 248/Sek/P.U/1965, tanggal 20 Oktober 1965, yang terdiri dari dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai latar belakang pendirian Fakultas Teknik Universitas Udayana, adalah dalam rangka pelestarian, pengembangan kebudayaan Daerah Bali pada khususnya dan kebudayaan nasional pada umumnya, terutama di dalam menghadapi pembangunan dan perkembangan kepariwisataan.</p>
              <p class="text-center">
                Secara fisik perkembangan itu banyak menyangkut bidang-bidang kearsitekturan dan kesenirupaan, yaitu suatu potensi yang mempunyai nilai tersendiri di dalam kehidupan kebudayaan Bali, selain untuk menampung aspirasi masyarakat khususnya calon-calon mahasiswa dari Bali yang ingin melanjutkan pendidikan seni dan teknologi pada jenjang pendidikan tinggi. Untuk maksud tersebut budayawan di Bali khususnya di kalangan Universitas Udayana merintis jalan untuk mendirikan pendidikan tinggi yang relevan yaitu pendidikan tinggi bidang arsitektur dan seni rupa.</p>
              <p class="text-center">
                Maka pada tahun 1965, dibentuklah panitia yang disebut Panitia Persiapan Fakultas Teknik Universitas Udayana dengan susunan sebagai berikut:</p>
              <span class="text-start fw-bold">Ketua (merangkap anggota):</span>
              <p class="text-start">Prof. Dr. Ida Bagus Mantra (Rektor Universitas Udayana)</p>
              <p class="text-center"></p>
              <span class="text-start fw-bold">Sekretaris (merangkap anggota):</span>
              <p class="text-start">Drs. Soedarminto (Dosen Fakultas Kedokteran Universitas Udayana)</p>
              <p class="text-center"></p>
              <span class="text-start fw-bold">Anggota: </span><span>Ir. I Gusti Ngurah Jelantik</span>
              <p class="text-start">dr. R. Moerdowo (Dosen Fakultas Kedokteran Universitas Udayana)</p>
              <p class="text-center">Panitia ini berhasil mendirikan Fakultas Teknik Universitas Udayana dengan dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai Pimpinan pertama: Prof. Dr. Ida Bagus Mantra sebagai pejabat dekan dan Drs. Soedarminto sebagai sekretaris dekan. Dengan demikian, tahun 1965 Fakultas Teknik merupakan fakultas kelima di lingkungan Universitas Udayana, dan dengan Surat Keputusan Menteri PTIP Nomor 248 Tahun 1965 terhitung tanggal 1 Oktober 1965 secara resmi dan sah menjadi Fakultas Teknik Universitas Udayana.</p>
              <p class="text-center">Sejalan dengan perkembangan yang ada, Fakultas Teknik Universitas Udayana terus berbenah dan mengembangkan diri. Untuk mengantisipasi perkembangan teknologi dan tuntutan masyarakat akan tenaga teknik.</p>
              <p class="text-center">Pada tahun 1968 Fakultas Teknik membuka jurusan baru yaitu Jurusan Teknik Sipil, sehingga Fakultas Teknik Universitas Udayana resmi memiliki tiga jurusan yaitu Jurusan Arsitektur, Jurusan Seni Rupa dan Jurusan Teknik Sipil.
                Perkembangan berikutnya adalah dengan diberlakukannya PP No.5 tahun 1980 dan pada tahun 1983 Fakultas Teknik Universitas Udayana ditetapkan hanya terdiri atas dua jurusan yaitu Jurusan Arsitektur dan Jurusan Teknik Sipil. Sedangkan Jurusan Seni Rupa berdiri sendiri menjadi Program Studi Seni Rupa dan Disain (PSSRD).
                Fakultas Teknik Universitas Udayana melengkapi jurusan yang dikelola dengan dua program studi baru yaitu Program Studi Teknik Mesin dan Program Studi Teknik Elektro pada tahun 1984, berdasarkan Surat Keputusan Rektor Nomor: 612/PT.17/1.01.02/ 1984. Setelah diperjuangkan selama 4 (empat) tahun maka pada tahun 1988 turun Surat Keputusan Direktur Jendral Pendidikan Tinggi Nomor: 64 dan 65/DIKTI/KEP/1988 tentang status resmi Program Studi Teknik Mesin dan Program Studi Teknik Elektro</p>
              <p class="text-center">Berdasarkan Keputusan Direktur Jendral Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan Republik Indonesia Nomor: 231/DIKTI/KEP/1996, tanggal 11 Juli 1996, tentang program studi pada program sarjana di lingkungan Universitas Udayana, maka Fakultas Teknik memiliki empat program studi, yaitu: 1) Program Studi Arsitektur, 2) Program Studi Teknik Sipil, 3) Program Studi Teknik Mesin, dan 4)Program Studi Teknik Elektro
                Guna memberikan kesempatan kepada masyarakat luas untuk memperoleh pelayanan pendidikan tinggi, maka Fakultas Teknik membuka Program Ekstensi dengan dasar hukum Surat Keputusan Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan No 555/DIKTI/KEP/1997. Untuk Program Ekstensi, Fakultas Teknik memiliki empat program studi yaitu :</p>
                <ol>
                  <li>
                    <span>Program Studi Arsitektur</span>
                  </li>
                  <li>
                    <span>Program Studi Teknik Sipil</span>
                  </li>
                  <li>
                    <span>Program Studi Teknik Mesin</span>
                  </li>
                  <li>
                    <span>Program Studi Teknik Elektro</span>
                  </li>
                </ol>
              <p class="text-center">Dengan terbitnya Keputusan Direktur Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional Republik Indonesia No: 28/DIKTI/KEP/2002, tentang Penyelenggaraan Program Reguler dan Non Reguler di Perguruan Tinggi Negeri, maka Program Ekstensi disesuaikan menjadi Program Non Reguler</p>
              <p class="text-center">Untuk memenuhi kebutuhan tenaga kerja menengah yang profesional dibidang keteknikan, maka Fakultas Teknik membuka Program Diploma I dan Diploma II, berdasarkan Keputusan Rektor Universitas Udayana No. 165/J14/PR.01.10/2002. Program Diploma yang dibuka adalah untuk Jurusan Arsitektur, Teknik Sipil, Teknik Elektro dan Teknik Mesin.</p>
              <p class="text-center">Sejalan dengan upaya peningkatan Sumber Daya Manusia (SDM), Universitas Udayana memandang perlu untuk membuka Program Pasca Sarjana (S2). Berdasarkan Surat Ijin dari Direktorat Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional Nomor 485/D/T/2003, tanggal 13 Maret 2003, pada tahun ajaran 2003/2004 dibuka Program Studi Magister Tenik Sipil. Administrasi akademik untuk Program Magister berada di bawah Program Pasca Sarjana Universitas Udayana.</p>
          </div>
          <div class="tab-pane fade" id="visi-misi" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <span class="h3 text-start fw-bold">Visi</span>
              <p>Menjadikan Fakultas Teknik sebagai lembaga pendidikan tinggi yang dapat melaksanakan Tri Dharma Perguruan Tinggi yang berkualitas, berbudaya, mendukung pembangunan yang berkelanjutan dan memiliki daya saing global.</p>
              <span class="h3 text-start fw-bold">Misi</span>
              <p>Didasarkan atas visi diatas, misi yang diemban oleh Fakultas Teknik Universitas Udayana adalah:</p>
              <p>Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu menghasilkan lulusan yang berkualitas dan dapat bersaing secara global.
                Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu mengembangkan ilmu pengetahuan, teknologi dan seni yang berwawasan budaya dan menunjang pembangunan berkelanjutan.
                Mewujudkan Fakultas Teknik sebagai lembaga pendidikan tinggi yang mampu berperan aktif dalam kehidupan bermasyarakat.
                Meningkatkan kerjasama dengan instansi lain baik di dalam maupun di luar negeri.</p>
            </p>
          </div>
          <div class="tab-pane fade" id="tujuan-target" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <span class="h3 text-start fw-bold">Tujuan Umum</span>
            <p>Mencerdaskan kehidupan bangsa, mengembangkan manusia Indonesia seutuhnya, manusia beriman, bertaqwa terhadap Tuhan Yang Maha Esa (Ida Hyang Widhi Wasa), berbudi pekerti luhur, memiliki pengetahuan dan keterampilan, kesehatan jasmani, rohani, kepribadian yang mantap dan mandiri, serta rasa tanggung jawab kemasyarakatan dan kebangsaan.</p>
            <span class="h3 text-start fw-bold">Tujuan Khusus</span>
            <p>Menyiapkan peserta didik yang memiliki kemampuan akademik dan atau menciptakan ilmu dan teknologi.
              Mengembangkan dan menyebarluaskan ilmu pengetahuan serta mengupayakan penggunaannya untuk meningkatkan taraf kehidupan masyarakat dan memperkaya kebudayaan lokal dan nasional.</p>
            <span class="h3 text-start fw-bold">Sasaran</span>
            <p>Menghasilkan lulusan yang mampu menerapkan keahlian akademis, professional, mandiri dan bertanggung jawab, sehingga handal dalam memanfaatkan pengetahuan dan teknologi di bidangnya, untuk menangani berbagai masalah lingkungan binaan secara keteknikan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
@endsection