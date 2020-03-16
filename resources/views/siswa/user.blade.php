<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appland Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Welcome</a></h1>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>

          <li class="get-started"><a href="/login">Admin Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>SISTEM INFORMASI AKADEMIK MAHASISWA</h1>
            <h2>UNIVERSITAS BRAWIJAYA</h2>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
          <div class="section-title">
            <h2>DATA MAHASISWA</h2>
             <div class="right">
              <a href="/siswa/exportexcel" class="btn btn-sm btn-primary">Export Excel</a>
             </div>
             <br>
            <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>NIM</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($murid as $siswas)
                        <tr>
                          <td>{{$siswas->id}}</td>
                          <td>{{$siswas->nama}}</a></td>
                          <td>{{$siswas->nim}}</td>
                        </tr>
                        @endforeach
                      </tbody>
            </table>
          </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>16</h4>
                  <p>FAKULTAS</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>175</h4>
                  <p>PROGRAM STUDI</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>13214</h4>
                  <p>MAHASISWA BARU</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>774</h4>
                  <p>DOKTOR</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-atom"></i>
                  <h4>153</h4>
                  <p>GURU BESAR</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4>6X</h4>
                  <p>JUARA UMUM PIMNAS</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/features.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">
        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>TENTANG</h3>
            <ul>
              <p class="font-italic">
              Universitas Brawijaya (UB) adalah perguruan tinggi di Indonesia yang berdiri pada tahun 1963 di Kota Malang, Jawa Timur melalui Ketetapan Menteri Pendidikan dan Ilmu Pengetahuan no.1 tanggal 5 Januari 1963. Tanggal tersebut kemudian ditetapkan sebagai Dies Natalis UB. Nama Brawijaya diberikan khusus oleh Presiden Soekarno dengan harapan mampu gemilang seperti Raden Wijaya (Brawijaya I) selaku pendiri Kerajaan Majapahit sekaligus menjadi kampus kebanggan bangsa Indonesia.<br><br>
              Universitas Brawijaya merupakan kampus elit di Indonesia dan secara konsisten menduduki peringkat 5 terbaik bersama dengan Universitas Indonesia, Institut Pertanian Bogor, Universitas Gadjah Mada, dan Institut Teknologi Bandung berdasarkan penilaian resmi Kemenristekdikti. Sedangkan di tingkat Internasional, UB menduduki peringkat 51 di Asia dan 400 dunia. UB adalah salah satu dari sebagian kecil kampus Indonesia yang terindeks secara Internasional oleh QS.<br><br>
              UB memiliki empat kampus. Kampus utama terletak di sebelah barat Kota Malang (Jl. Veteran), dan kampus kedua berada di Puncak Dieng atau dikenal sebagai UB Dieng yang digunakan untuk fasilitas olahraga outdoor, dan beberapa fasilitas riset maupun perkuliahan. Sedangkan kampus ketiga dan keempat berada di Kediri dan Jakarta. Secara keseluruhan, UB memiliki aset seluas 981 hektar dan dana abadi yang mencapai 5,12 Triliun Rupiah atau setara dengan US$ 768,1 Juta. Hal tersebut menjadikan Universitas Brawijaya sebagai kampus terbesar dan terkaya kedua di tanah air setelah Universitas Indonesia.
              </p>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>VISI & MISI</h3>
            <p class="font-italic">
              Visi<br>
              Menjadi universitas unggul yang berstandar internasional dan mampu berperan aktif dalam pembangunan bangsa melalui proses pendidikan, penelitian dan pengabdian kepada masyarakat.
            </p>
            <p class="font-italic">
              Misi<br>
              1. Menyelenggarakan pendidikan berstandar internasional agar peserta didik menjadi manusia yang berkemampuan akademik dan/atau profesi yang berkualitas dan berkepribadian serta berjiwa dan/atau berkemampuan entrepreneur.<br>
              2. Melakukan pengembangan dan penyebarluasan ilmu pengetahuan, teknologi, dan seni, serta mengupayakan penggunaannya untuk meningkatkan taraf kehidupan masyarakat dan memperkaya kebudayaan nasional.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>HYMNE & MARS</h3>
            <p>Hymne<br>
              Pada zaman cemerlang budaya Indonesia<br>
              Jaya bertahta permata pujaan negara<br>
              Penyuluh jiwa budi satria nan perwira<br>
              Itulah Sri Maharaja Brawijaya mulia<br>
              Ooh, Brawijaya luhur citanya,<br>
              luhur tujuannya<br>
              Ooh, Brawijaya lambang abadi,<br>
              kebangunan/keagungan Indonesia</p>
            <p>Mars<br>
              Berpadu di derap langkah menyambut terangnya sang surya<br>
              Universitas Brawijaya sumber Ilmu dan budaya<br>
              Kibarkan tekad patria serempak dalam satu cita<br>
              Ayo bangkit semangat baja bahagia menanti kita<br>
              Maju terus maju Almamater tercinta Universitas Brawijaya<br>
              Dengan rahmat Tuhan dan dasar pancasila abadilah namamu<br>
              Dengan jiwa Tri Dharmamu kami setia mengawalmu<br>
              Universitas Brawijaya jayalah sepanjang masa<br>
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>PRESTASI</h3>
            <p class="font-italic">
              QS World University Rankings<br>
              Posisi UB berdasarkan lembaga pemeringkatan universitas dunia QS World University Rankings, pada tahun 2017 UB berada pada peringkat 290+ untuk tingkat ASIA, naik dari peringkat 301+ pada tahun 2016. Sedangkan pada tingkat Dunia, pada tahun 2017 peringkat UB adalah 800+.
            </p>
            <p class="font-italic">
             THE World University Rankings 2020<br>
             Posisi UB berdasarkan lembaga pemeringkatan universitas dunia Times Higher Education (THE) World University Rankings untuk pemeringkatan 2020 berada pada posisi 2 di tingkat Indonesia.
            </p>
            <p class="font-italic">
             Webometrics<br>
             Posisi UB berdasarkan lembaga pemeringkatan website universitas dunia Webometrics, pada awal tahun 2019 UB berada pada peringkat 6 di Indonesia. Sedangkan pada tingkat Dunia, peringkat UB pada 2019 adalah 1500+.
            </p>
            <p class="font-italic">
             4ICU (4 International Colleges & Universities)<br>
             Posisi UB berdasarkan lembaga pemeringkatan website universitas dunia 4ICU, pada tahun 2019 UB berada pada peringkat 2 di Indonesia, naik dari peringkat 4 pada tahun 2018.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End Details Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>MOHAMMAD IQBAL ABIDZAR</h3>
              <h4>Kementerian Hukum & Hak Asasi Manusia</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Senang dan bersyukur pernah kuliah disini. Selama kuliah di Universitas Brawijaya, kuliah tidak sesulit yang pernah dibayangkan.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>APRILLA UTAMI PUTRI</h3>
              <h4>Pullman Jakarta Indonesia</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Belajar di Universitas Brawijaya tidak hanya belajar materi terus, banyak prakteknya dan sangat berguna ketika terjun ke dunia industri .
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>FERNANDA ZHAFARIN</h3>
              <h4>Sales Coordinator Harris Hotel & Conventions Malang</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Lebih banyak praktek dan membuat kita jadi tau bagaimana dunia kerja yang nyata. Disini benar-benar disiapkan dan dicetak untuk bisa langsung bekerja.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>FATHIR IBNU FAJAR</h3>
              <h4>CEO NAKAMSE</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Universitas Brawijaya membekali saya keilmuan praktis di bidang Business Digital dan Ecommerce. Ini sangat menunjang kerja saya, kemudian saya mendirikan usaha sendiri di bidang kuliner.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title">
          <h2>KEHIDUPAN KAMPUS</h2>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Perpustakaan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  Perpustakaan Brawijaya merupakan salah satu Program Cakupan Universitas (Institutional Support System) yang berfungsi mendukung program akademik universitas yang tertuang dalam “Tridarma Perguruan Tinggi” yang mencakup pendidikan, penelitian dan pengabdian kepada masyarakat. Beberapa peran perpustakaan dalam hal mendukung proses pendidikan antara lain adalah memberikan informasi, mengkoordinasikan dan menggabungkan semua bentuk layanan untuk meningkatkan proses belajar mengajar, penelitian dan layanan umum. Pada akhirnya tujuannya adalah tercapainya proses peningkatan kualitas lulusan dalam hal pengembangan wawasan dan penguasaan keilmuannya.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Kantin dan Restoran<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                 Universitas Brawijaya (UB) merupakan Universitas besar yang menampung puluhan ribu civitas akademika yang terdiri dari mahasiswa, dosen, karyawan, dan tamu yang berkunjung ke UB. Oleh karna itu UB menyediakan puluhan kantin yang terdiri dari kantin-kantin kecil yang terdapat pada tiap-tiap Fakultas, dan kantin besar yang terdapat di beberapa tempat strategis di lingkungan UB.<br>
                 Salah satu bukti keseriusan UB dalam melayani civitas akademika akan kebutuhan makanan dan minuman yang baik adalah dengan diluncurkannya Kantin Akademik Halalan Thoyyiban UB yang diresmikan oleh Rektor UB dan Sekretaris Jenderal Kementerian Agama Republik Indonesia (Kemenag RI) Prof. Dr. H. Nur Syam, MS . Program kantin halal ini merupakan bentuk dukungan UB terhadap program sertifikasi halal yang dikeluarkan oleh Pemerintah Republik Indonesia. Kedepannya, UB akan meluncurkan sertifikasi Halalan Thoyyiban untuk semua kantin yang ada.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Keamanan<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                  Untuk menjamin keamanan seluruh civitas akademika, UB memiliki Satuan Pengamanan yang bekerja 24 jam di seluruh area kampus dengan pembagian jam kerja yaitu setiap 8 jam dijaga dengan 27 Personil satuan pengamanan. Hal itu diperkuat dengan adanya Juru Parkir yang tersebar diseluruh area parkir fakultas-fakultas dilingkungan Universitas Brawijaya. Juru parkir bertugas mengontrol dan menjaga keamanan di masing – masing are parkirnya. Dan seluruh civitas akademikan juga dikontrol STNK kendaraannya ketika akan keluar dari area parkir dan area UB.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">Fasilitas Parkir<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                <p>
                  Saat ini di area kampus UB sudah memiliki area parkir yang tersebar dimasing-masing Fakultas dan Unit Kerja. Dan beberapa fakultas juga memperbaruhi area parkir dengan cara memperbesar atau membuat parkir tingkat disekitar gedung masing-masing fakultas. Kedepan UB akan membuat area parkir terpadu untuk memenuhi kebutuhan parkir dari puluhan ribu civitas akademika UB. Saat ini setiap area parkir juga dilengkapi dengan petugas juru parkir untuk mengontrol keamanan dan mengatur kendaraan yang parkir.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">Flora dan Fauna<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                <p>
                  Universitas Brawijaya (UB) memiliki kampus yang asri, teduh, dan nyaman untuk mahasiswa berinteraksi. Hal itu di tandai dengan banyaknya gazebo-gazebo yang disediakan UB untuk memenuhi kebutuhan kenyamanan seluruh civitas akademika UB. Selain itu UB juga menghiasi lingkungan kampus dengan berbagai macam flora dan fauna diantaranya taman-taman yang indah dengan beragam pohon yang ditanam meliputi pohon peneduh (trembesi dan mahoni), pohon pengarah (palem, kelapa gading, kelapa sawit), pohon koleksi buah tropis (durian, manggis, sukun, tabebuya, kelengkeng dan rambutan), pohon bunga tropis (kantil, kenanga dan bintaro) serta pohon hias koleksi (star blue, maranta, dan aralea)<br>
                  Sedangkan fauna UB diantaranya dalah burung cucak rawa, cucak hijau, burung jalak bali, ayam bekisar, dan berbagai macam burung local burung emprit kaji, kutilang, emprit biasa dan terocokan spserti yang dilepaskan di area kampus.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info" data-aos="fade-up">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>Universitas Brawijaya<br>Jl. Veteran No.12-13 Malang, Jawa Timur</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>(0341) 553240<br>(0341) 552480</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>ub.ac.id</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Senin - Kamis 07.30-16.00<br>Jum'at 07.30-16.30<br>Sabtu - Minggu Tidak Ada Pelayanan</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Universitas Brawijaya</h3>
            <p>
              Jl. Veteran No.12-13<br>
              Malang, Jawa Timur<br><br>
              <strong>Phone :</strong> (0341) 553240<br>
              <strong>Email :</strong> ub.ac.id<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Fasilitas Kampus</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BITS UB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Digital Library</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-Book Store</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Jurnal UB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">UB TV</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Kemahasiswaan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Job Placements Center UB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lecture's Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Online Scholarship UB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SIAM online</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Student's Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Social Networks</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>