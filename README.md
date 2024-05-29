Laporan Tugas Pemrograman Web SRS 

Disusun oleh:

  1. Albiona Qhalbu Shouki       : 22091397076
  2. Ageng Kurniawan             : 22091387077
  3. Danar Adrian Ridho Nugroho  : 22091397087

Program Studi D4 Manajemen Informatika Fakultas Vokasi Universitas Negeri Surabaya 2023

1. Tujuan

    Dokumen ini bertujuan untuk menyediakan spesifikasi persyaratan perangkat lunak yang lebih
rinci untuk pembuatan website profil perusahaan “Smart Parking System”. Website ini bertujuan
untuk secara profesional dan mendalam memperkenalkan perusahaan kepada publik, melalui
informasi tentang visi, misi, produk, dan layanan. Dokumen ini akan menjadi panduan bagi tim
pengembangan dalam merancang dan mengimplementasikan situs web.
   
2. Lampiran
   
   A. Flowchart

   ![Flowchart (1)](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/ac99ad84-5d38-4488-9cc7-6567f0ee9ac9)
   
   - Start: Ini adalah titik awal dari navigasi di website profil perusahaan. Ketika pengguna pertama kali mengakses website, mereka akan memulai dari sini.
   
   - Halaman Utama: Setelah pengguna memulai dari "Start," mereka akan diarahkan ke halaman utama atau homepage perusahaan. Halaman utama biasanya berisi informasi ringkas tentang perusahaan dan tautan menu ke bagian-bagian lain dari website.
   
   - Tentang Perusahaan: Pengguna memiliki opsi untuk mengklik tautan "Tentang Kami" di halaman utama, yang akan membawa mereka ke halaman yang memberikan rincian tentang perusahaan, sejarah, dan nilai-nilai.
   
   - Produk/Layanan: Pengguna juga dapat memilih untuk mengeksplorasi produk atau layanan yang ditawarkan oleh perusahaan. Ini mungkin mencakup deskripsi produk, spesifikasi, dan lainnya.
   
   - Sign In: Selain itu, jika pengguna ingin masuk ke akun mereka atau mengakses area yang memerlukan otentikasi, mereka dapat memilih "Sign In."
   
   - Kontak: Pengguna dapat mencari informasi kontak perusahaan, seperti alamat, nomor telepon, atau formulir kontak di halaman "Kontak."
   
   - Media Sosial: Jika perusahaan aktif di media sosial, pengguna dapat mengeklik tautan ke halaman media sosial perusahaan di mana mereka dapat mengikuti atau berinteraksi dengan perusahaan di platform tersebut.
   
   - End: Flowchart diakhiri dengan "End," yang menunjukkan akhir dari navigasi pengguna. Pengguna dapat kembali ke halaman utama atau keluar dari website.   

   B. UseCase Diagram

   ![Use Case](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/5ad985df-b6b7-439c-843a-756b407349e8)

     a). View Homepage (Melihat Halaman Depan):

         • Aktor Utama: Pengguna customer.
     
         • Deskripsi: Pengguna mengunjungi situs web dan melihat halaman depan (homepage) untuk mendapatkan informasi umum tentang bisnis atau layanan yang ditawarkan.

        • Langkah-langkah:
     
           1) Pengguna membuka peramban web.
     
           2) Pengguna memasukkan URL situs web.
     
           3) Halaman depan situs web dimuat.
     
           4) Pengguna melihat konten halaman depan, seperti gambar, teks, dan mungkin tautan ke halaman lain.

     b). View About Us (Melihat Halaman Tentang Kami):

         • Aktor Utama: Pengguna customer.
   
         • Deskripsi: Pengguna tertarik untuk memahami lebih lanjut tentang perusahaan atau individu yang berdiri di balik situs web tersebut.

         • Langkah-langkah:
   
            1) Dari halaman depan, pengguna menemukan tautan "About Us" atau sejenisnya.

            2) Pengguna mengklik tautan "About Us."
        
            3) Halaman "About Us" dimuat.
        
            4) Pengguna membaca informasi tentang perusahaan atau individu tersebut.
          
     c). View Contact Us (Melihat Halaman Kontak Kami)

         • Aktor Utama: Pengguna customer.

         • Deskripsi: Pengguna ingin menghubungi perusahaan atau individu yang terkait dengan situs web tersebut.

         • Langkah-langkah:
      
            1) Dari halaman depan atau halaman "About Us," pengguna menemukan tautan "Contact Us" atau sejenisnya.
      
            2) Pengguna mengklik tautan "Contact Us."
      
            3) Halaman "Contact Us" dimuat.
      
            4) Pengguna melihat informasi kontak, seperti alamat email, nomor telepon, atau formulir kontak.

     d). Register (Mendaftar):\
   
         • Aktor Utama: Pengguna customer.

         • Deskripsi: Pengguna ingin mendaftar atau membuat akun di situs web tersebut untuk mengakses fitur atau layanan tambahan.

         • Langkah-langkah:
    
            1) Dari halaman depan atau dari tautan khusus "Register" di menu, pengguna memilih opsi "Register" atau "Sign Up."
      
            2) Pengguna diarahkan ke halaman pendaftaran.
      
            3) Pengguna mengisi formulir pendaftaran dengan informasi yang diperlukan, seperti nama, alamat email, kata sandi, dan data pribadi lainnya.
      
            4) Pengguna mengklik tombol "Submit" atau sejenisnya untuk menyelesaikan pendaftaran.

      e). Login (Masuk):

          • Aktor Utama: Pengguna admin.

          • Deskripsi: Pengguna admin perlu masuk ke akun admin mereka untuk mengakses kontrol dan fitur administratif di situs web.

          • Langkah-langkah:
      
            1) Pengguna admin membuka halaman login di situs web.
      
            2) Pengguna admin memasukkan nama pengguna (username) dan kata sandi (password) mereka.
      
            3) Sistem memverifikasi informasi login.
      
            4) Jika informasi login valid, pengguna admin diizinkan untuk mengakses akun admin mereka.
      
      f). View Customer on the Web (Melihat Data Customer di Situs Web):

          • Aktor Utama: Pengguna admin.

          • Deskripsi: Pengguna admin ingin melihat data dan informasi terkait dengan pengguna customer yang terdaftar di situs web.

          • Langkah-langkah:
    
            1) Setelah masuk, pengguna admin mengakses panel administratif.
      
            2) Pengguna admin memilih opsi "View Customers" atau "Lihat Data Customer."
      
            3) Sistem menampilkan daftar pengguna customer yang terdaftar beserta detailnya, seperti nama, alamat email, informasi kontak, dan riwayat transaksi.

      g). Edit Web (Mengedit Situs Web):

          • Aktor Utama: Pengguna admin.

          • Deskripsi: Pengguna admin bertanggung jawab untuk mengedit konten dan pengaturan situs web, seperti mengubah teks, gambar, atau konfigurasi situs.

          • Langkah-langkah:
      
            1) Setelah masuk, pengguna admin mengakses panel administratif.
      
            2) Pengguna admin memilih opsi "Edit Website" atau "Edit Konten" atau sejenisnya.
      
            3) Pengguna admin dapat mengganti teks, gambar, atau mengkonfigurasi berbagai aspek situs web, seperti tampilan, tema, dan pengaturan lainnya.
      
            4) Pengguna admin menyimpan perubahan yang telah dibuat.

      h). Logout (Keluar):

          • Aktor Utama: Pengguna admin.
  
          • Deskripsi: Pengguna admin ingin keluar dari akun admin mereka untuk menjaga keamanan dan privasi informasi di situs web.

          • Langkah-langkah:
      
            1) Pengguna admin yang telah selesai melakukan tugas administratif memilih opsi "Logout" atau "Keluar" di panel administratif atau pada halaman akun mereka.
      
            2) Sistem mengakhiri sesi login pengguna admin dan mengarahkannya kembali ke halaman login atau halaman depan situs web
   
3. Penjelasan Code
   
   A. HTML

index.html

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/fb7bfa1e-b126-4006-9137-b20bbd0ff511)

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/df2e6b40-4223-49cb-a544-497d7b962b7a)

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/dffc7a5a-b8dd-47f0-9305-a4f87798db7e)

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/549391ef-9ce1-43ce-bc37-28373ca11074)

1.	<!DOCTYPE html>: Deklarasi tipe dokumen (DTD) yang menunjukkan bahwa halaman ini adalah dokumen HTML. Ini digunakan untuk menginformasikan browser bahwa           halaman ini mengikuti standar HTML5.
2.	<html lang="id">: Elemen ini mendefinisikan awal dari dokumen HTML. Atribut lang="id" menandakan bahwa bahasa yang digunakan dalam halaman ini adalah bahasa       Indonesia.
3.	<head>: Elemen kepala dokumen HTML yang berisi informasi-informasi meta dan pengaturan yang tidak ditampilkan kepada pengguna. Ini termasuk pengaturan             karakter, pengkodean, judul halaman, dan file eksternal yang digunakan.
4.	<meta charset="UTF-8">: Elemen ini mendefinisikan pengkodean karakter UTF-8 untuk halaman. Ini digunakan untuk mendukung karakter internasional dalam halaman     web.
5.	<meta name="viewport" content="width=device-width, initial-scale=1.0">: Elemen <meta> ini digunakan untuk mengatur tampilan halaman pada perangkat seluler.       Ini memastikan bahwa lebar halaman sesuai dengan lebar perangkat dan faktor skala awalnya diatur ke 1.0.
6.	<title>Smart Parking System</title>: Elemen ini mendefinisikan judul halaman web yang akan ditampilkan di tab atau jendela browser. Judul ini akan membantu       pengguna mengidentifikasi konten halaman.
7.	<link rel="stylesheet" type="text/css" href="model.css">: Elemen <link> ini digunakan untuk memuat file stylesheet eksternal "model.css" yang digunakan untuk     mengatur tampilan halaman dengan mengaplikasikan gaya dan tata letak.
8.	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"                                               integrity="sha384UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">: Elemen <link> ini memuat stylesheet eksternal dari       Font Awesome, yang memberikan akses ke ikon-ikon kustom yang dapat digunakan dalam halaman web.
9.	<body>: Elemen ini merupakan area utama di mana konten halaman web ditampilkan. Semua elemen yang terlihat oleh pengguna, seperti teks, gambar, dan tautan,       ditempatkan di dalam elemen <body>.
10.	<header>: Elemen ini digunakan untuk menyusun bagian kepala halaman, yang biasanya berisi elemen-elemen seperti logo, menu navigasi, dan judul halaman.
11.	<nav>: Elemen ini digunakan untuk membuat bagian navigasi halaman web. Biasanya berisi tautan menu ke halaman-halaman terkait.
12.	<section class="about-us">: Elemen ini menandai awal dari bagian "Tentang Kami" di halaman. Ini digunakan untuk mengelompokkan konten yang berkaitan dengan       informasi tentang produk atau layanan yang ditawarkan.
13.	<a>: Elemen ini digunakan untuk membuat tautan ke halaman lain. Pada contoh ini, digunakan untuk menghubungkan gambar ke file "Gambar 6.jpg"".
14.	"<img src="Gambar 6.jpg" alt="gambar 6>": Elemen ini digunakan untuk menampilkan gambar di halaman web. Atribut src menentukan sumber gambar, sementara           atribut alt memberikan teks alternatif jika gambar tidak dapat dimuat.
15.	"[h1></h1]": Elemen ini digunakan untuk menampilkan judul besar yang menyoroti topik "Tentang Kami" di halaman.
16.	"[p></p]": Elemen ini digunakan untuk menampilkan paragraf teks. Digunakan untuk menjelaskan informasi tentang produk "Smart Parking System."
17.	"<div class="team>": Elemen ini digunakan untuk mengelompokkan konten tentang "Tim Kami" yang termasuk h1, dan elemen-elemen lainnya.
18.	"[ul]": Elemen ini digunakan untuk membuat daftar yang berisi informasi tentang anggota tim, termasuk gambar dan teks terkait.
19.	"[footer]": Elemen ini digunakan untuk membuat bagian bawah halaman web yang biasanya berisi informasi kontak dan tautan ke media sosial.
20.	"[i class="fab fa-facebook-f icon"></i]": Elemen ini digunakan untuk menampilkan ikon media sosial dari Font Awesome.
21.	"[form]": Elemen ini digunakan untuk membuat formulir yang pengguna dapat gunakan untuk berlangganan newsletter.
22.	[<script src="script.js"></script]": Elemen ini memuat script JavaScript eksternal yang digunakan untuk meningkatkan fungsionalitas halaman web.


![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/85dbf500-9968-4358-bfe1-86cf6204814c)
Service.html

1. "[section class="services"]": Ini adalah elemen HTML yang mendefinisikan sebuah bagian dari halaman web dengan kelas "services." Bagian ini tampaknya didedikasikan untuk menampilkan berbagai layanan yang ditawarkan oleh Smart Parking System.
2.  "[h1+>/*Services<///**/h1]": Ini adalah judul bagian "Services.+" Biasanya digunakan untuk memberikan judul atau pengenalan singkat tentang isi bagian tersebut.
3. [ul]": Ini adalah elemen yang digunakan untuk membuat daftar tak terurut, yang akan berisi berbagai layanan Smart Parking System.

*Item Layanan Pertama:*

4. "[li]": Ini adalah elemen daftar dalam daftar tak terurut.
5. "[a target="_blank" href="Gambar 2.jpg*"]": Ini adalah tautan ke gambar (Gambar 2.*) yang membuka gambar dalam tab atau jendela baru (target="_blank").             Biasanya, gambar ini digunakan untuk menggambarkan layanan tersebut.
6. "[h1+>Solusi Parkir Cerdas</*+h1]": Ini adalah judul layanan pertama, yaitu "+Solusi Parkir Cerdas."
7. "[p]"Solusi Parkir Cerdas kami/...: Ini adalah paragraf atau deskripsi singkat dari layanan "Solusi Parkir Cerdas." Ini memberikan gambaran umum tentang           layanan ini.
8. "[button onclick="toggleText('text1', this)">Read More</button]: Ini adalah tombol "Read More" yang memicu suatu fungsi JavaScript ketika diklik. Tombol ini     digunakan untuk memperluas deskripsi layanan saat diklik.
9. "[div id="text1" class="hidden-content"]": Ini adalah div yang mengandung deskripsi lebih lanjut tentang "Solusi Parkir Cerdas." Saat tombol "Read More"         diklik, konten di dalam div ini akan ditampilkan. Kelas "hidden-content" mungkin digunakan untuk awalnya menyembunyikan kontennya.

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/d560b011-04a5-44d8-b549-19509fc5a2d5)

1.  [section class="about-us"]: Ini adalah elemen HTML yang mendefinisikan sebuah bagian dari halaman web dengan kelas "about-us." Bagian ini tampaknya didedikasikan untuk memberikan informasi tentang perusahaan, khususnya mengenai bagaimana mereka menggunakan teknologi canggih dalam solusi parkir mereka.
2.  [a target="_blank" href="Gambar 6.jpg"]: Ini adalah tautan ke gambar (Gambar 6.jpg) yang membuka gambar dalam tab atau jendela baru (target="_blank"). Gambar ini mungkin digunakan untuk mengilustrasikan konsep teknologi canggih yang digunakan dalam solusi parkir perusahaan.
3.  [h1]Transformasi Parkir dengan Teknologi Canggih</h1>: Ini adalah judul yang menjelaskan tentang transformasi parkir dengan teknologi canggih yang disediakan oleh perusahaan.
4.  [p]: Ini adalah paragraf atau deskripsi yang menjelaskan penggunaan teknologi canggih dalam solusi parkir perusahaan. Ini termasuk penggunaan Internet of Things (IoT), machine learning, dan webcam dalam mengoptimalkan penggunaan tempat parkir. Deskripsi ini juga menyoroti komitmen perusahaan untuk menyediakan solusi parkir inovatif yang menyederhanakan kehidupan masyarakat.
   
Bagian Kedua - Tim Perusahaan:

5.  [section]: Ini adalah elemen HTML yang menandakan sebuah bagian selanjutnya dari halaman web. Bagian ini tampaknya didedikasikan untuk memperkenalkan tim perusahaan.
6.  [div class="team"]: Ini adalah div yang berisi informasi tentang tim perusahaan.
7.  [div class="garis-kiri"] dan <div class="garis-kanan">: Ini adalah elemen div yang digunakan untuk membuat garis horizontal di sebelah kiri dan kanan judul "Tim Kami."
8.  [h1>Tim Kami</h1]: Ini adalah judul yang menjelaskan bahwa bagian ini adalah tentang tim perusahaan.
9.  [div class="foto-team"]: Ini adalah div yang berisi informasi dan gambar anggota tim perusahaan.
10. [ul]: Ini adalah elemen yang digunakan untuk membuat daftar tak terurut yang akan berisi informasi tentang anggota tim.
11. Setiap anggota tim direpresentasikan oleh elemen [li]. Setiap elemen [li] termasuk gambar, nama anggota tim, dan nomor identifikasi. Ini memungkinkan pengunjung untuk mengenal lebih dekat anggota tim perusahaan.

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/971ddc55-8da8-4c54-b7e3-df734c5cb63f)

Rating: Di bagian ini, terdapat informasi rating atau penilaian produk atau layanan. Detailnya mencakup:

1.)	"<h1>Penilaian & Ulasan Client</h1>": Ini adalah judul seksi yang memberi tahu pengguna bahwa ini adalah bagian yang berisi penilaian dan ulasan dari klien.

2.)	<h2>4.8 &#9733</h2>: Ini adalah rating produk atau layanan dengan tanda bintang (dalam format desimal) yang menunjukkan rating rata-rata produk atau layanan tersebut.

3.)	<p>2,394 Rating</p>: Ini adalah jumlah total rating atau penilaian yang telah diberikan oleh klien.

4.)	<h3>4+</h3>: Ini menunjukkan jumlah rating dengan skor 4 atau lebih (yang baik).

5.)	<p>Rating 4+</p>: Ini adalah keterangan bahwa jumlah tersebut merujuk pada rating 4 atau lebih.

Ulasan Klien: Di bagian ini, setiap ulasan klien memiliki elemen-elemen berikut:

6.)	Rating: Ini menunjukkan rating dalam bentuk bintang yang merepresentasikan seberapa baik produk atau layanan tersebut dinilai oleh klien.

7.)	Pesan Ulasan: Ini adalah teks ulasan atau komentar yang diberikan oleh klien tentang produk atau layanan.

8.)	Gambar Pengguna: Ini adalah gambar profil pengguna yang memberikan ulasan.

9.)	Nama Pengguna: Ini adalah nama pengguna atau nama lengkap dari pengguna yang memberikan ulasan.

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/9a6e29cc-4086-42b7-9c15-68db472e7570)

1.)	<section class="login">: Ini adalah elemen yang mengelilingi seluruh area login pada halaman. Ini adalah elemen yang memberikan sebagian besar gaya dan tata letak untuk elemen-elemen yang ada dalam area login.

2.)	<div class="login-box">: Ini adalah kotak yang berisi elemen-elemen login, seperti formulir masuk, teks, dan tombol.


3.)	<h1>Member Login</h1>: Ini adalah judul yang menunjukkan bahwa ini adalah area untuk login anggota.

4.)	<form>: Ini adalah elemen formulir yang digunakan untuk mengumpulkan informasi login dari pengguna.

1.)	<label for="email">: Ini adalah label yang terkait dengan elemen input dengan id "email". Ini digunakan untuk memberi tahu pengguna apa yang harus dimasukkan di dalam input tersebut.

2.)	<input type="text" id="email" name="email" required>: Ini adalah input teks yang memungkinkan pengguna memasukkan alamat email atau nama pengguna mereka. Properti "required" menunjukkan bahwa pengisian input ini adalah wajib.

3.)	<label for="password">: Ini adalah label yang terkait dengan elemen input dengan id "password". Ini digunakan untuk memberi tahu pengguna apa yang harus dimasukkan di dalam input tersebut.

4.)	<input type="password" id="password" name="password" required>: Ini adalah input kata sandi yang memungkinkan pengguna memasukkan kata sandi mereka. Properti "required" menunjukkan bahwa pengisian input ini adalah wajib.


5.)	<div class="forget-pss">: Ini adalah div yang berisi tautan "Forget Password" yang mengarah ke halaman yang memungkinkan pengguna mengatur ulang kata sandi mereka jika mereka lupa.

6.)	<button type="submit">Login</button>: Ini adalah tombol "Login" yang digunakan untuk mengirimkan formulir login.

Footer:

5.)	<footer>: Ini adalah elemen footer yang berisi informasi kontak, tautan ke media sosial, dan opsi langganan newsletter.

1.)	<div class="contact-info">: Ini adalah div yang berisi informasi kontak, seperti alamat, email, dan nomor telepon.

2.)	<div class="social-media">: Ini adalah div yang berisi tautan ke platform media sosial, seperti Facebook, Twitter, dan Instagram.

3.)	<div class="subscribe">: Ini adalah div yang berisi formulir untuk pengguna yang ingin berlangganan newsletter. Formulir ini meminta pengguna untuk memasukkan alamat email mereka dan memiliki tombol "Send" untuk mengirimkan data.

Script:

6.)	<script src="script.js"></script>: Ini adalah tautan ke file JavaScript yang disebut "script.js". Ini mengindikasikan bahwa ada script yang akan dieksekusi pada halaman web ini untuk memberikan interaktivitas tambahan.

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/65e54d06-6070-4b62-a577-7169dbf0611c)

Bagian Sign Up:

1.)	<section class="signup">: Ini adalah elemen yang mengelilingi seluruh area pendaftaran pada halaman. Ini adalah elemen yang memberikan sebagian besar gaya dan tata letak untuk elemen-elemen yang ada dalam area pendaftaran.

2.)	<div class="signup-box">: Ini adalah kotak yang berisi elemen-elemen pendaftaran, seperti formulir pendaftaran, teks, dan tombol.

3.)	<h1>Member SignUp</h1>: Ini adalah judul yang menunjukkan bahwa ini adalah area untuk mendaftar sebagai anggota.

4.)	<form>: Ini adalah elemen formulir yang digunakan untuk mengumpulkan informasi pendaftaran dari pengguna.

1.)	<label for="fullname">: Ini adalah label yang terkait dengan elemen input dengan id "fullname." Ini digunakan untuk memberi tahu pengguna apa yang harus dimasukkan di dalam input tersebut, dalam hal ini adalah nama pengguna.

2.)	<input type="text" id="fullname" name="fullname" required>: Ini adalah input teks yang memungkinkan pengguna memasukkan nama pengguna. Properti "required" menunjukkan bahwa pengisian input ini adalah wajib.

3.)	<label for="email">: Ini adalah label yang terkait dengan elemen input dengan id "email." Ini digunakan untuk memberi tahu pengguna apa yang harus dimasukkan di dalam input tersebut, dalam hal ini adalah alamat email.

4.)	<input type="email" id="email" name="email" required>: Ini adalah input alamat email yang memungkinkan pengguna memasukkan alamat email mereka. Properti "required" menunjukkan bahwa pengisian input ini adalah wajib.

5.)	<label for="password">: Ini adalah label yang terkait dengan elemen input dengan id "password." Ini digunakan untuk memberi tahu pengguna apa yang harus dimasukkan di dalam input tersebut, dalam hal ini adalah kata sandi.

6.)	<input type="password" id="password" name="password" required>: Ini adalah input kata sandi yang memungkinkan pengguna memasukkan kata sandi mereka. Properti "required" menunjukkan bahwa pengisian input ini adalah wajib.

7.)	<label for="confirm_password">: Ini adalah label yang terkait dengan elemen input dengan id "confirm_password." Ini digunakan untuk meminta pengguna mengonfirmasi kata sandi yang mereka masukkan.

8.)	<input type="password" id="confirm_password" name="confirm_password" required>: Ini adalah input kata sandi konfirmasi yang memungkinkan pengguna memasukkan kata sandi mereka sekali lagi. Properti "required" menunjukkan bahwa pengisian input ini juga adalah wajib.

9.)	<button type="submit">SignUp</button>: Ini adalah tombol "Sign Up" yang digunakan untuk mengirimkan formulir pendaftaran.
Footer:

5.)	<footer>: Ini adalah elemen footer yang berisi informasi kontak, tautan ke media sosial, dan opsi langganan newsletter. Ini memiliki struktur yang mirip dengan footer pada contoh sebelumnya.

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/990e0b45-d136-41ea-bfe0-04791096b044)

Bagian Contact (Kontak):

1.)	<div class="contact-box">: Ini adalah div (kotak) yang berisi elemen-elemen kontak dan formulir kontak.

2.)	<section class="contact">: Ini adalah elemen kontak yang berisi informasi kontak dan formulir kontak.

1.)	<h1>Ada pertanyaan?</h1>: Ini adalah judul yang menanyakan apakah pengunjung memiliki pertanyaan.

2.)	<p>Jangan ragu untuk menelepon atau mengirim email kepada kami atau gunakan formulir kontak kami untuk menghubungi kami Kami menantikan kabar dari Anda!</p>: Ini adalah teks yang mengundang pengunjung untuk menghubungi atau menggunakan formulir kontak.

3.)	<h1>Keadaan darurat? Hubungi Kami:</h1>: Ini adalah judul yang menunjukkan nomor telepon darurat.

4.)	<p>Telepon: 123-456-7890</p>: Ini adalah nomor telepon kontak darurat.

5.)	<h1>Kirimi Kami Surat</h1>: Ini adalah judul yang menunjukkan alamat email kontak.

6.)	<p>Email: info@smartparkingsytem.com</p>: Ini adalah alamat email kontak.

3.)	<form class="message">: Ini adalah elemen formulir yang digunakan untuk mengumpulkan pesan dari pengunjung.

1.)	<label>Name</label><br>: Ini adalah label yang menunjukkan bahwa input berikutnya dimaksudkan untuk memasukkan nama pengunjung.

2.)	<input type="text">: Ini adalah input teks yang memungkinkan pengunjung memasukkan nama mereka.

3.)	<label>Email</label><br>: Ini adalah label yang menunjukkan bahwa input berikutnya dimaksudkan untuk memasukkan alamat email pengunjung.

4.)	<input type="email">: Ini adalah input alamat email yang memungkinkan pengunjung memasukkan alamat email mereka.

5.)	<label>Subject</label><br>: Ini adalah label yang menunjukkan bahwa input berikutnya dimaksudkan untuk memasukkan subjek pesan.


6.)	<input type="text">: Ini adalah input teks yang memungkinkan pengunjung memasukkan subjek pesan.

7.)	<label>Your Message</label><br>: Ini adalah label yang menunjukkan bahwa input berikutnya dimaksudkan untuk memasukkan pesan.

8.)	<textarea></textarea>: Ini adalah input area teks yang memungkinkan pengunjung memasukkan pesan mereka.

9.)	<button type="submit">Send</button>: Ini adalah tombol "Send" yang digunakan untuk mengirim pesan melalui formulir.

   B. CSS

   ![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/ff687d62-5d11-4d74-8d8c-b0425ecb59fa)
   
CSS.header

•	body: Ini adalah gaya dasar untuk elemen <body>, yang mengatur font, warna teks, margin, padding, dan latar belakang halaman. Gambar latar belakang "Gambar 1.jpg" digunakan dengan efek overlay dan background-size yang disetel ke 100% dan cover.

•	header: Ini adalah gaya untuk elemen <header>, yang mengatur latar belakang warna, padding, dan teks yang akan ditampilkan dalam header.

•	nav: Ini adalah gaya untuk elemen <nav>, yang mengatur tampilan menu navigasi.

•	nav .logo: Ini adalah gaya khusus untuk elemen dengan kelas "logo" yang ada di dalam elemen <nav>. Ini mengatur ukuran font, ketebalan teks, dan tampilan teks untuk logo.

•	nav ul: Ini adalah gaya untuk daftar yang mungkin berisi item menu.

•	nav ul li: Ini adalah gaya untuk item daftar dalam menu. Ini mengatur item menu agar ditampilkan secara horizontal dan memberikan margin di sekitar setiap item.

•	nav li a:hover: Ini adalah gaya untuk item menu ketika kursor mouse berada di atasnya (hover). Ini mengatur perubahan warna, ketebalan teks, dan efek bawah menu saat di-hover.

•	nav a: Ini adalah gaya untuk tautan menu. Ini mengatur warna, dekorasi teks, ketebalan, dan ukuran font.

•	button.signup: Ini adalah gaya untuk tombol dengan kelas "signup". Ini mengatur berbagai properti tombol termasuk warna latar belakang, teks, dan efek hover.

•	button.signup:hover: Ini adalah gaya tambahan yang mengatur tampilan tombol saat tombol tersebut dihover oleh mouse.

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/682e7018-1906-4413-a6ad-de44e49683b3)

CSS.about

•	.about-us: Ini adalah gaya untuk elemen dengan kelas "about-us," yang mungkin mengatur tampilan keseluruhan bagian "Tentang." Ini termasuk ukuran dan jarak dari bagian tersebut.

•	.about-us img: Ini adalah gaya khusus untuk elemen gambar (img) di dalam elemen "about-us." Ini mengatur lebar gambar, jarak dari sisi kiri halaman, posisi gambar (dalam hal ini, posisi statis), serta efek pembulatan sudut (border radius) yang memberikan sudut bulat pada gambar.

•	.about-us h1: Ini adalah gaya untuk elemen judul (h1) di dalam elemen "about-us." Ini mengubah ukuran font judul.

•	.about-us p: Ini adalah gaya untuk elemen paragraf (p) di dalam elemen "about-us." Ini mengatur tampilan teks pada bagian "Tentang," termasuk jarak paragraf pertama (indentasi), penjelasan teks (teks rata kiri dan rata kanan), serta ukuran font.


![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/4705aef6-d9a3-4c09-9911-aacb9744b68c)

CSS.services 

1.)	.services-1: Ini adalah gaya untuk elemen dengan kelas "services-1." Elemen ini digunakan untuk mengatur tampilan judul atau bagian utama dari "Layanan." Gaya ini mengatur tampilan judul, termasuk ukuran font dan warna teks.

2.)	.garis-kiri dan .garis-kanan: Ini adalah elemen-elemen dengan kelas "garis-kiri" dan "garis-kanan." Mereka digunakan untuk menampilkan garis horizontal yang memisahkan elemen-elemen dalam "Layanan." Garis ini mengatur tampilan garis, termasuk tinggi, lebar, warna, dan margin (jarak) di antara mereka.

3.)	.fitur-manfaat: Ini adalah elemen dengan kelas "fitur-manfaat." Elemen ini digunakan untuk mengatur tampilan bagian "Fitur" dan "Manfaat" di dalam "Layanan." Ini menggunakan tata letak fleksibel dan menyusun elemen-elemen secara merata.

4.)	.fitur p dan .manfaat p: Ini adalah gaya untuk elemen paragraf (p) di dalam bagian "Fitur" dan "Manfaat." Ini mengatur ukuran font, tebal, dan warna teks.

5.)	.fitur ul dan .manfaat ul: Ini adalah gaya untuk elemen daftar tak terurut (ul) di dalam "Fitur" dan "Manfaat." Ini mengatur tampilan daftar, termasuk ukuran font dan jarak di bagian bawahnya.

6.)	.fitur li::before dan .manfaat li::before: Ini adalah gaya untuk menambahkan tanda bintang (★) di depan setiap item daftar dalam "Fitur" dan "Manfaat." Ini mengatur tampilan tanda bintang, termasuk ukuran dan warna.

7.)	.services: Ini adalah gaya untuk elemen dengan kelas "services." Elemen ini mengatur tampilan keseluruhan "Layanan," termasuk ukuran font untuk judulnya.

8.)	.services ul li: Ini adalah gaya untuk elemen-elemen daftar tak terurut (li) yang berada dalam elemen "Layanan." Ini mengatur tampilan setiap elemen daftar, termasuk jarak, warna teks, dan efek border.

9.)	.services ul li img: Ini adalah gaya khusus untuk gambar di dalam elemen-elemen daftar "Layanan." Ini mengatur lebar gambar, pembulatan sudut (border radius), dan jarak dari gambar.

10.)	.services ul li p: Ini adalah gaya untuk paragraf teks di dalam elemen-elemen daftar "Layanan." Ini mengatur tampilan teks, termasuk jarak dan ukuran font.

11.)	.services button: Ini adalah gaya untuk tombol di dalam elemen "Layanan." Ini mengatur tampilan tombol, termasuk warna latar belakang, warna teks, ukuran font, radius sudut, dan sebagainya.

12.)	.services button:hover: Ini adalah gaya tambahan yang akan diterapkan ketika tombol "Layanan" disorot oleh kursor. Ini mengubah warna latar belakang tombol untuk memberikan umpan balik visual kepada pengguna.

13.)	.hidden-content: Ini adalah gaya untuk elemen dengan kelas "hidden-content." Elemen ini digunakan untuk mengatur tampilan konten tersembunyi (hidden content) yang mungkin ditampilkan atau disembunyikan dengan interaksi pengguna. Gaya ini mengatur tampilan konten yang tidak terlihat secara awal dan mengubahnya menjadi tidak terlihat (display: none).


![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/caca2be9-f065-46bd-8229-c825676bbfe5)

1.)	.team: Ini adalah gaya untuk elemen dengan kelas "team." Elemen ini digunakan untuk mengatur tampilan keseluruhan dari bagian "Tim." Gaya ini menggunakan fleksbox (display: flex) untuk mengatur tata letak elemen secara berdampingan. Ini juga mengatur jarak (margin) dari elemen "Tim."

2.)	.team h1: Ini adalah gaya untuk elemen judul (h1) di dalam bagian "Tim." Gaya ini mengatur tampilan judul, termasuk ukuran font dan warna teks.


3.)	.garis-kiri dan .garis-kanan: Ini adalah elemen-elemen dengan kelas "garis-kiri" dan "garis-kanan." Mereka digunakan untuk menampilkan garis horizontal di sekitar judul "Tim." Garis ini mengatur tampilan garis, termasuk tinggi, lebar, dan warna.

4.)	.foto-team: Ini adalah gaya untuk elemen dengan kelas "foto-team." Elemen ini digunakan untuk mengatur tampilan foto-foto tim yang ada di bawah judul "Tim." Ini menggunakan fleksbox (display: flex) untuk mengatur tata letak elemen secara horizontal.


5.)	.foto-team ul: Ini adalah gaya untuk elemen daftar tak terurut (ul) di dalam elemen "foto-team." Gaya ini menghilangkan daftar tak terurut (list-style: none) dan mengatur elemen-elemen dalam daftar untuk tampilan flex dengan posisi yang diatur ke tengah (justify-content: center).

6.)	.foto-team ul li: Ini adalah gaya untuk elemen-elemen daftar (li) di dalam elemen "foto-team." Ini mengatur jarak (margin) di antara elemen-elemen tersebut dan mengatur tampilan elemen secara berdampingan (display: flex).


7.)	.foto-team ul li img: Ini adalah gaya untuk gambar (img) di dalam elemen-elemen daftar "Tim." Gaya ini mengatur lebar dan tinggi gambar, pembulatan sudut (border radius), dan pengaturan lainnya untuk memastikan tampilan gambar yang sesuai.

8.)	.foto-team ul li p: Ini adalah gaya untuk elemen paragraf (p) di dalam elemen-elemen daftar "Tim." Gaya ini mengatur ukuran font untuk teks yang mendampingi gambar tim.



![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/e336bbab-dece-44f3-8549-ada5d66589f7)

CSS.rating
Bagian "Rating"
1.)	.rating: Ini adalah gaya untuk elemen dengan kelas "rating." Elemen ini digunakan untuk mengatur tampilan keseluruhan dari bagian "Rating." Gaya ini mengatur jarak (margin) di atas, kiri, dan kanan, memberikan margin atas 50px, sehingga memberikan ruang di atas elemen ini.

2.)	.rating h1: Ini adalah gaya untuk elemen judul (h1) di dalam bagian "Rating." Gaya ini mengatur tampilan judul, termasuk ukuran font (40px) dan warna teks (#fff).


3.)	.rating ul: Ini adalah gaya untuk elemen daftar tak terurut (ul) di dalam bagian "Rating." Gaya ini mengatur daftar tak terurut dengan tampilan fleks (display: flex) untuk mengatur elemen-elemen daftar secara horizontal. Properti justify-content dan align-items digunakan untuk mengatur tata letak elemen-elemen dalam daftar.

4.)	.rating li: Ini adalah gaya untuk elemen-elemen daftar (li) di dalam elemen "Rating." Gaya ini menghilangkan tanda bullet dari daftar tak terurut (list-style: none) dan mengatur teks elemen-elemen tersebut di tengah (text-align: center).


5.)	.rating li h2 dan .rating li h3: Ini adalah gaya untuk elemen judul (h2 dan h3) di dalam elemen-elemen daftar "Rating." Gaya ini mengatur ukuran font judul, dan h3 memiliki batas (border) dengan lebar 70px dan tampilan garis putih solid.

6.)	.rating li p: Ini adalah gaya untuk elemen paragraf (p) di dalam elemen-elemen daftar "Rating." Gaya ini mengatur ukuran font paragraf dan warna teks.


Bagian "Ulasan"

1.)	.ulasan: Ini adalah gaya untuk elemen dengan kelas "ulasan." Elemen ini mengatur tampilan keseluruhan dari bagian "Ulasan," termasuk margin di sekitarnya.

2.)	.ulasan ul: Ini adalah gaya untuk elemen daftar tak terurut (ul) di dalam bagian "Ulasan." Gaya ini mengatur margin kiri (margin-left: 100px) dan mengatur tampilan daftar tak terurut dengan posisi inline-block.


3.)	.ulasan ul li: Ini adalah gaya untuk elemen-elemen daftar (li) di dalam elemen "Ulasan." Gaya ini mengatur lebar elemen-elemen daftar menjadi 500px.

4.)	.ulasan ul li .star: Ini adalah gaya untuk elemen bintang (span dengan kelas "star") di dalam elemen-elemen daftar "Ulasan." Gaya ini mengatur warna bintang menjadi gold dan ukuran fontnya.


5.)	.ulasan ul li p: Ini adalah gaya untuk elemen paragraf (p) di dalam elemen-elemen daftar "Ulasan." Gaya ini mengatur ukuran font paragraf dan tata letak teks menjadi kiri.

6.)	.ulasan ul li img: Ini adalah gaya untuk gambar (img) di dalam elemen-elemen daftar "Ulasan." Gaya ini mengatur lebar, tinggi, pembulatan sudut, dan posisi gambar.


7.)	.ulasan ul li h1: Ini adalah gaya untuk elemen judul (h1) di dalam elemen-elemen daftar "Ulasan." Gaya ini mengatur margin atas dan kiri untuk judul.



![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/de41b99f-c809-4e88-abae-410330cd0177)

CSS.footer
Bagian "Footer"

1.)	footer: Ini adalah gaya untuk elemen <footer>. Gaya ini mengatur tampilan keseluruhan dari bagian "Footer," termasuk latar belakang (background-color) dan ruang pembatas (padding).

2.)	.contact-info p: Ini adalah gaya untuk elemen paragraf (p) yang berada dalam elemen dengan kelas "contact-info." Gaya ini mengatur tampilan teks pada paragraf tersebut dengan posisi teks di sebelah kiri (text-align: left) dan margin kiri (margin-left: 20px).


3.)	.social-media ul: Ini adalah gaya untuk elemen daftar tak terurut (ul) dalam bagian "Footer" yang berhubungan dengan media sosial. Gaya ini mengatur tampilan dari daftar tak terurut dan mengatur fleks (display: flex) untuk menampilkan ikon media sosial secara horizontal.

4.)	.social-media ul li: Ini adalah gaya untuk elemen-elemen daftar (li) dalam daftar media sosial. Gaya ini menghilangkan tanda bullet dari daftar tak terurut (list-style: none).


5.)	.social-media ul li a: Ini adalah gaya untuk tautan (a) dalam daftar media sosial. Gaya ini mengatur ukuran dan tampilan ikon media sosial, termasuk ukuran, warna latar belakang, dan efek hover. Ikon media sosial memiliki tampilan latar belakang yang melingkar (border-radius: 50%) dan efek hover berupa perubahan warna dan rotasi ikon.

6.)	.social-media ul li a .icon: Ini adalah gaya untuk ikon media sosial (ikon dengan kelas "icon") dalam tautan media sosial. Gaya ini mengatur ukuran ikon, warna teks, dan efek transisi (transition).


7.)	.subscribe: Ini adalah gaya untuk elemen dengan kelas "subscribe" yang berada dalam bagian "Footer." Gaya ini mengatur tampilan elemen ini, termasuk tata letak teks, margin, dan posisi.

8.)	.subscribe input: Ini adalah gaya untuk elemen input dalam elemen dengan kelas "subscribe." Gaya ini mengatur ukuran input dan padding, serta memberikan elemen input tampilan dengan border-radius yang melingkar.


9.)	.subscribe button: Ini adalah gaya untuk tombol dalam elemen "subscribe." Gaya ini mengatur tampilan tombol, termasuk latar belakang, warna teks, border-radius, dan efek hover.



![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/61631bbd-096a-49f9-8c1a-94f99954b36d)

CSS.login & sign up

Bagian "Login" dan "Signup"

1.)	.login, .signup: Gaya ini mengatur elemen-elemen dengan kelas "login" dan "signup" untuk ditempatkan di tengah halaman dengan pengaturan text-align: center. Ini memastikan bahwa elemen-elemen tersebut akan berada di tengah halaman.

2.)	.login-box, .signup-box: Ini mengatur tampilan kotak (box) yang berisi elemen login dan signup. Kotak ini memiliki latar belakang semi-transparan (background-color: rgba(0, 0, 0, 0.8)), margin yang menjaga jarak dari tepi halaman, lebar dan tinggi tertentu, serta border-radius yang memberikan tampilan sudut kotak yang melengkung. Padding digunakan untuk memberi ruang di dalam kotak.
3.)	.login-box h1, .signup-box h1: Ini mengatur tampilan judul pada kotak login dan signup. Judul memiliki efek "text-transform" sehingga hurufnya menjadi kapital dan memiliki garis bawah.

4.)	.login form, .signup form: Ini mengatur tampilan formulir yang digunakan untuk login dan signup. Formulir memiliki lebar tertentu dan ditempatkan di tengah kotak.


5.)	.login form input, .signup form input: Ini mengatur tampilan input dalam formulir, termasuk lebar, padding, margin bawah, ukuran huruf, dan border-radius yang mengelilingi input.

6.)	.login form button, .signup form button: Ini mengatur tampilan tombol "Login" dan "Signup." 


7.)	Tombol ini memiliki latar belakang berwarna biru (background-color: #009ff5), teks berwarna putih, border-radius untuk sudut yang melengkung, dan beberapa efek saat digunakan (hover).

8.)	.login p a, .signup a: Ini mengatur tampilan tautan "Forget Password" dan "Already Have an Account." Tautan ini memiliki warna teks, gaya huruf, dan efek hover yang mengubah tampilan saat kursor diarahkan.


Bagian "Social Media Signup"

1.)	.sosmed-signup ul, .sosmed-login ul: Ini mengatur tampilan daftar tak terurut (ul) yang berisi tautan media sosial. Gaya ini memposisikan daftar tersebut di tengah kotak.

2.)	.sosmed-signup ul li, .sosmed-login ul li: Ini mengatur tampilan elemen-elemen daftar (li) dalam daftar tautan media sosial.

3.)	.sosmed-signup ul li a, .sosmed-login ul li a: Ini mengatur tampilan tautan media sosial. Tautan ini memiliki latar belakang berwarna putih, efek transisi hover, dan efek rotasi ikon saat kursor diarahkan.

4.)	.sosmed-signup ul li a .icon, .sosmed-login ul li a .icon: Ini mengatur tampilan ikon media sosial dalam tautan. Gaya ini mengatur ukuran, warna teks, dan efek transisi.

5.)	.sosmed-signup li a:before, .sosmed-login li a:before: Ini mengatur latar belakang tautan media sosial sebelum efek hover diterapkan. Ketika digunakan, tautan media sosial akan berubah warna latar belakangnya sesuai dengan tautan yang diarahkan.



![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/01b4517b-be6d-466c-998c-6f1c319f406f)

CSS.Contact

Bagian "Contact Box"

1.)	.contact-box: Ini mengatur tampilan kotak (box) yang berisi elemen-elemen kontak. Kotak ini memiliki latar belakang semi-transparan (background-color: rgba(0, 0, 0, 0.8)), margin yang menjaga jarak dari tepi halaman, lebar dan tinggi tertentu, serta border-radius yang memberikan tampilan sudut kotak yang melengkung. Padding digunakan untuk memberi ruang di dalam kotak.

Bagian "Contact"

1.)	.contact: Ini mengatur tampilan teks kontak. Teks ini memiliki warna putih (color: #fff) dan posisi absolut, yang memungkinkan Anda mengatur posisi elemen secara bebas di dalam kotak. Margin digunakan untuk mengatur jarak antara elemen-elemen tersebut.

2.)	.contact h1: Ini mengatur tampilan judul pada halaman kontak. Judul ini memiliki ukuran font (font-size) tertentu.

3.)	.contact p: Ini mengatur tampilan teks paragraf pada halaman kontak. Teks ini memiliki ukuran font (font-size) tertentu.

Bagian "Message”

1.)	.message: Ini mengatur tampilan elemen-elemen yang berkaitan dengan pesan yang dapat dikirim melalui halaman kontak. Elemen-elemen ini ditempatkan di sebelah kanan halaman kontak menggunakan float: right.

2.)	.message input: Ini mengatur tampilan input dalam formulir pesan. Input ini memiliki lebar tertentu, padding, margin bawah, ukuran huruf, dan border-radius yang mengelilingi input.

3.)	.message textarea: Ini mengatur tampilan area teks dalam formulir pesan. Area teks ini memiliki lebar dan tinggi tertentu, serta border-radius yang mengelilingi area teks.

4.)	.message button: Ini mengatur tampilan tombol "Send" pada formulir pesan. Tombol ini memiliki latar belakang berwarna biru (background-color: #009ff5), teks berwarna putih, border-radius untuk sudut yang melengkung, dan beberapa efek saat digunakan (hover).

5.)	.message button:hover: Ini mengatur tampilan tombol "Send" saat kursor diarahkan ke tombol tersebut. Tombol akan mengalami perubahan warna latar belakang dan warna teks saat digunakan.

C. JAVASCRIPT

![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124551854/ed047878-0cf8-4e74-9864-31dcd2d5f985)

1.)	function toggleText(textId, button) {: Ini adalah deklarasi fungsi toggleText yang menerima dua argumen. textId adalah ID elemen HTML yang berisi teks yang akan diubah tampilannya, dan button adalah tombol yang digunakan untuk memicu perubahan tampilan teks.

2.)	var x = document.getElementById(textId);: Ini digunakan untuk mengambil elemen HTML dengan ID yang sesuai dan menyimpannya dalam variabel x. Dengan kata lain, variabel x akan merujuk ke elemen dengan ID yang diberikan dalam argumen textId.

3.)	if (x.style.display === "block" || x.style.display === "") {: Ini adalah pengujian kondisi yang memeriksa apakah properti display dari elemen yang dipilih (x) saat ini diatur sebagai "block" atau kosong (""), yang berarti elemen saat ini terlihat (visible).

4.)	Jika kondisi dalam langkah 3 bernilai benar (artinya elemen saat ini terlihat), maka pernyataan di dalam blok ini akan dijalankan:

1.)	x.style.display = "none"; akan mengatur properti display elemen tersebut menjadi "none," yang berarti elemen tersebut akan disembunyikan (invisible).

2.)	button.innerHTML = "Read More"; mengganti teks pada tombol (yang diidentifikasi oleh elemen button) menjadi "Read More" untuk memberi tahu pengguna bahwa mereka dapat memicu tampilan teks lagi.


5.)	Jika kondisi dalam langkah 3 adalah salah (artinya elemen saat ini tidak terlihat), maka pernyataan di dalam blok ini akan dijalankan:

1.)	x.style.display = "block"; akan mengatur properti display elemen tersebut menjadi "block," yang berarti elemen tersebut akan ditampilkan.

2.)	button.innerHTML = "Read Less"; mengganti teks pada tombol menjadi "Read Less" untuk memberi tahu pengguna bahwa mereka dapat menyembunyikan teks lagi.



  4. Tampilan Web

A. Homepage

  Halaman utama ini akan menampilkan informasi umum tentang Smart Parking System.
  
  ![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/a76a80b4-5329-4907-9211-7462e8cc5a51)

B. About Us

  Halaman ini berisi informasi tentang perusahaan atau entitas yang mengoperasikan Smart Parking System. Ini mungkin mencakup sejarah, visi, misi, atau nilai-nilai Perusahaan.

  ![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/40da3e38-c935-47f0-ae7a-b8bb01f2bc33)
  
C. Services

  Halaman ini berisi informasi tentang layanan yang ditawarkan oleh Smart Parking System, seperti tarif parkir, lokasi parkir yang tersedia, dan layanan tambahan (misalnya, reservasi parkir).

  ![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/8708c9da-c92e-4ebd-99fa-7d9af13c62c5)

D. Contact Us

  Halaman ini berisi informasi kontak yang memungkinkan pelanggan menghubungi perusahaan jika mereka memiliki pertanyaan atau masalah terkait sistem parkir pintar ini. Informasi kontak mungkin termasuk alamat email, nomor telepon, atau formulir kontak.	

  ![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/c037879f-c7df-4314-90d4-54f0154afcfe)

E. Sign Up

  Ini adalah halaman yang memungkinkan pelanggan mendaftar atau membuat akun di sistem parkir pintar. Mereka mungkin perlu mengisi informasi pribadi, seperti nama, email, Password

  ![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/0e8f7fe9-53c5-4b94-9cee-cbe3c5b72238)

F. Login

  Ini adalah halaman masuk yang diperuntukkan bagi admin untuk mengakses alat pengelolaan web dan 	kontrol sistem parkir. Admin harus memasukkan nama pengguna dan kata sandi mereka
  untuk masuk.

  ![image](https://github.com/22091397087-DanarAdrianRidhoNugroho/kelompok6.github.io/assets/124489939/6115693d-14a0-40fe-995a-f134a664f9fd)

 

  





