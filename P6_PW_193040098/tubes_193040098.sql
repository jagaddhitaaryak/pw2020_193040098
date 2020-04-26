-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 01:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040098`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `no` int(5) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `jumlah_halaman` int(100) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`no`, `cover`, `judul`, `penerbit`, `jumlah_halaman`, `tgl_rilis`, `penulis`, `deskripsi`, `harga`) VALUES
(1, '1.jpg', 'Belajar Coding Android Bagi Pemula', 'Elex Media Komputindo', 198, '2015-12-14', 'Ir. Yuniar Supardi', 'Membantu Anda dari dasar dalam pembuatan program Android memakai bahasa pemrograman Java. Pembahasan dimulai dari membuat program sederhana dan mudah hingga pembuatan program database. Anda akan dipandu bagaimana mempersiapkan belajar mulai dari menginstal perangkat lunak hingga membuat program Android. Dalam buku ini juga, Anda dipandu bagaimana memasukkan program Android ke media peralatan, seperti Handphone atau Smartphone.', 'Rp. 39.000'),
(2, '2.png', 'Otodidak Belajar Pemrograman untuk Pemula', 'Elex Media Komputindo', 190, '2016-06-20', 'Jubilee Enterprise', 'Dunia pemrograman merupakan dasar dari komputer dan teknologi. Oleh karena itu, bila Anda ingin berkomunikasi dengan perangkat teknologi, mulailah pelajari pemrograman-pemrograman komputer. Tantangan yang harus Anda hadapi adalah ada banyak sekali pemrograman yang ada di sekitar kita. Maka pertanyaannya, mulai dari mana kita belajar pemrograman?Buku ini mengupas tidak hanya satu pemrograman, namun mengupas pemrograman-pemrograman komputer terpopuler.', 'Rp. 40.000'),
(3, '3.jpg', 'Easy & Simple - Web Programming', 'Elex Media Komputindo', 231, '2016-05-26', 'Rohi Abdulloh', 'Kata siapa pemrograman website itu sulit? Buku ini akan memberikan panduan mempelajari pemrograman website dengan cara yang mudah. Setiap bahasa pemrograman yang harus dikuasai dibahas menjadi satu dalam sebuah proyek membuat website responsive. Buku ini ditulis dengan memperhatikan penulisan skrip yang rapi, pengelompokan file-file sesuai fungsinya, penamaan variabel, nama folder, nama file, dan nama tabel pada database yang konsisten agar mudah dipahami oleh pembaca yang baru belajar pemrograman website sekalipun. Dibahas pula pembuatan template dengan bootstrap sehingga tampilan website selalu menyesuaikan layar ketika dibuka di tablet dan smartphone. Buku ini merupakan revisi dari buku sebelumnya yang berjudul Web Programming is Easy, dengan penambahan dua bab yang menarik, yaitu Memperbaiki Error Program dan Menggunakan Widget dari Internet. Sehingga buku ini akan menjadi panduan yang menarik untuk belajar pemrograman website.', 'Rp. 43.000'),
(4, '4.jpg', 'Database MySQL dengan Pemograman PHP', 'PT RajaGrafindo Persada', 186, '2019-03-29', 'Dr. Gede Indrawan', 'Basis Data (Database) dapat dibayangkan sebagai sebuah lemari atau tempat penyimpanan arsip yang dapat diatur dan dikelola. Basis Data juga dapat diartikan sebagai kumpulan informasi yang terorganisasi dan disajikan untuk tujuan khusus. Sedangkan sistem basis data merupakan perpaduan antara basis data dan sistem manajemen basis data (DBMS). MySQL merupakan software database open source yang paling populer di dunia, di mana saat ini digunakan lebih dari 100 juta pengguna di seluruh dunia. Dengan kehandalan, kecepatan dan kemudahan penggunaannya, MySQL menjadi pilihan utama bagi banyak pengembang software dan aplikasi baik di platform web maupun desktop. PHP merupakan salah satu bahasa script yang bekerja di sisi server dan merupakan perangkat lunak open source yang dapat dipadukan dengan MySQL. Buku berjudul \"Database MySQL dengan Pemrograman PHP\" ini mencoba membahas Database MySQL dan Pemrograman PHP secara praktis dan disajikan secara terstruktur dengan gambar-gambar, dimulai dengan penjelasan database dan sistem manajemen basis data (DBMS), menjelaskan GUI Tools MySQL Workbench, di antaranya instalasi dan cara penggunaannya. Buku ini juga menjelaskan salah satu paket server, yaitu XAMPP, di mana akan dijelaskan cara instalasi dan cara menjalankan. Buku ini menjelaskan mengenai SQL dengan GUI MySQL Workbench, di antaranya DDL dan DML. DDL menjelaskan mengenai pembuatan, pengubahan, dan penghapusan basis data. DML menjelaskan mengenai pengisian tabel, penampilan data, pengubahan data, dan menghapus data pada basis data. Buku ini juga menjelaskan perintah-perintah dasar pemrograman PHP dan implementasi MySQL pada pemrograman PHP yang disertakan contoh-contoh program. Editor pemrograman PHP yang digunakan pada buku ini menggunakan Adobe Dreamweaver. Akhir kata, dengan berbagai kekurangan yang ada, semoga buku ini bermanfaat bagi perkembangan Teknologi Informasi di Indonesia, khususnya dalam bidang Basis Data MySQL dan Pemrograman PHP.', 'Rp. 59.000'),
(5, '5.jpg', 'Photoshop dan CorelDRAW', 'Elex Media Komputindo', 172, '2016-06-16', 'Jubilee Enterprise', 'Buku ini tentang latihan desain grafis menggunakan Photoshop dan CorelDRAW. Jika Anda tertarik dengan dunia grafis, kuasailah Photoshop dan CorelDRAW.', 'Rp. 33.000'),
(6, '6.jpg', 'Python untuk Programmer Pemula', 'Elex Media Komputindo', 256, '2016-04-09', 'Jubilee Enterprise', 'Setiap orang yang mau belajar pemrograman akan jatuh cinta dengan Python. Mengapa? Karena mudah dipelajari sekaligus sangat prospektif untuk karier di masa depan. Dengan mengandalkan kemudahan cara menulis baris perintah dan didukung ribuan modul siap-pakai, Python termasuk bahasa pemrograman yang ramah bagi para pemula dan orang awam, baik bagi pengguna MS Windows maupun Linux. Buku ini dapat menjadi teman yang baik bagi para pemula untuk mengenal pemrograman. Bahasa di dalam buku ini adalah seputar dasar-dasar Python dan pemrograman database menggunakan Python serta MySQL. Dengan begitu, ilmu yang dipelajari di buku ini sangat penting untuk memahami prinsip dan kaidah pemrograman serta peluang-peluang Python di masa depan. Topik yang akan dipelajari adalah bagaimana menginstal tool, Python, struktur program, fungsi, percabangan dan perulangan, penggunaan modul, serta bahasa pemrograman Python dan MySQL untuk mengelola database. Semua dibahas dan disusun dalam bahasa yang mudah dipahami oleh para pemula.', 'Rp. 74.800'),
(7, '7.jpg', 'STOP Jadi YouTuber! Kalau Nggak Tahu Cara Marketingnya', 'Elex Media Komputindo', 196, '2020-03-02', 'Jefferly Helianthusonfri', 'STOP Jadi YouTuber! Kini semua orang berlomba-lomba jadi YouTuber, tapi jangan jadi YouTuber yang biasa-biasa aja. Jadilah luar biasa! Tak hanya itu, Anda bisa jadikan YouTube sebagai mesin promosi bisnis yang beroperasi 24 jam sehari tanpa henti. Bagaimana caranya? Buku ini akan memandu Anda belajar YouTube marketing. Berisi panduan lengkap, detail, dan mudah dipahami untuk belajar YouTube marketing. Usai praktik isi buku ini, bisnis dan profil Anda akan makin terkenal. Plus bisa dapat banyak pelanggan dari YouTube dan jadi YouTuber luar biasa. Temukan rahasia dan panduan lengkapnya di buku ini.', 'Rp. 75.000'),
(8, '8.jpg', 'Sukses Bisnis Afiliasi 4.0', 'Elex Media Komputindo', 228, '2020-02-19', 'Arista Prasetyo Adi', 'E-commerce sudah memasuki era 4.0 di mana kolaborasi antara online dan offline sedang berlangsung. Didukung dengan teknologi pembayaran yang canggih dan simpel serta jasa kurir yang beragam, E-Commerce semakin memikat hati. Semua orang bisa berjualan di internet, termasuk Anda. Toko Online dan Marketplace tidak lagi bekerja sendiri dalam memasarkan produknya. Konsep afiliasi sudah diterapkan untuk menggaet semakin banyak pembeli. Konsep afiliasi ini merupakan peluang bagi Anda untuk ikut berjualan di internet hanya bermodalkan blog. Bagaimana caranya? Simak caranya dalam buku ini.', 'Rp. 60.000'),
(9, '9.jpg', 'Menulis Skripsi, Jurnal, dan Tulisan Ilmiah dengan MS Word', 'Elex Media Komputindo', 250, '2020-02-24', 'Jubilee Enterprise', 'Menulis skripsi, jurnal, tesis, atau karya ilmiah lainnya membutuhkan penelitian dan pengetahuan teknis. Anda harus mengetahui cara membuat struktur dan menerapkannya di komputer. Oleh karena itu, buku ini dibuat untuk membantu siswa, mahasiswa, dosen, peneliti, atau mereka yang membuat laporan penelitian agar bisa menggunakan MS Word dengan baik. Bahasan di dalam buku ini terfokus pada cara mengoperasikan MS Word untuk tujuan penulisan skripsi dan sejenisnya. Di akhir buku diberikan bonus tentang cara-cara menggunakan SPSS. Itu semua dibuat untuk satu tujuan, yaitu sukses menulis skripsi, jurnal, karya ilmiah, maupun tesis.Jika Anda tertarik di bidang penulisan akademik namun tidak memiliki pengetahuan memadai tentang MS Word, buku ini cocok untuk Anda baca!', 'Rp. 70.000'),
(10, '10.jpg', 'Dasar-Dasar Animasi Komputer', 'Elex Media Komputindo', 244, '2020-03-02', 'Jubilee Enterprise', 'Animasi adalah gambar bergerak yang dibentuk dari sekumpulan objek yang disusun secara beraturan dengan kecepatan tertentu. Di era modern saat ini, animasi dibuat menggunakan komputer baik secara menyeluruh maupun sebagian. Apabila Anda tertarik mempelajari cara pembuatan animasi, buku ini adalah langkah awal yang paling bagus untuk dibaca. Ada tiga buah peranti lunak yang dibahas. Pertama adalah Adobe Animate yang dipakai untuk membuat animasi dua dimensi. Sedangkan yang kedua adalah 3D Studio Max untuk pembuatan animasi tiga dimensi. Untuk Anda penggemar animasi dan movie editing, Anda bisa memanfaatkan peranti lunak yang ketiga, yaitu Adobe After Effects. Dengan membaca buku ini, Anda akan mengenal aneka cara pembuatan animasi menggunakan komputer pribadi. Harapannya, Anda dapat masuk ke dalam industri animasi dan mendapatkan manfaat jangka panjang di bidang ini.', 'Rp. 70.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
