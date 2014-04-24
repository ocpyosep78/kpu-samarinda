`<?php

class InstansiSeeder extends Seeder {

	public function run() {
		# Hapus semua isi tabel
		DB::table('instansi')->delete();

		# Inisialisasi semua yang ingin diisi
		$instansi = array(
			'nama' => 'KPU Kota Samarinda',
			'slogan' => 'Komisi Pemilihan Umum Provinsi Kalimantan Timur',
			'alamat' => 'Jl. Basuki Rahmat No. 02 Samarinda',
			'telp' => '(0541) 743995',
			'fax' => '(0541) 747138',
			'visimisi' => '<h1><span style="font-size: 36px;">Visi</span></h1><blockquote>Terwujudnya Komisi Pemilihan Umum sebagai penyelenggara Pemilihan Umum yang memiliki integritas, profesional, mandiri, transparan dan akuntabel, demi terciptanya demokrasi Indonesia yang berkualitas berdasarkan Pancasila dan UUD 1945 dalam wadah Negara Kesatuan Republik Indonesia.</blockquote><h1>Misi</h1><span style="color: inherit;"><ul><li style="line-height: 1.8;"><span style="color: inherit;">Membangun lembaga penyelenggara Pemilihan Umum yang memiliki  kompetensi, kredibilitas dan kapabilitas dalam menyelenggarakan  Pemilihan Umum;</span><br></li><li style="line-height: 1.8;"><span style="color: inherit;">Menyelenggarakan Pemilihan Umum untuk memilih Anggota Dewan  Perwakilan Rakyat, Dewan Perwakilan Daerah, dan Dewan Perwakilan Rakyat  Daerah, Presiden dan Wakil Presiden serta Kepala Daerah dan Wakil Kepala  Daerah secara langsung, umum, rahasia, jujur, adil, akuntabel, edukatif  dan beradab;</span><br></li><li style="line-height: 1.8;"><span style="color: inherit;">Meningkatkan kualitas penyelenggaraan Pemilihan Umum yang bersih, efisien dan efektif;</span><br></li><li style="line-height: 1.8;"><span style="color: inherit;">Melayani dan memberlakukan setiap peserta Pemilihan Umum secara adil  dan setara, serta menegakkan peraturan Pemilihan Umum secara konsisten  sesuai dengan peraturan perundang-undangan yang berlaku;</span><br></li><li style="line-height: 1.8;"><span style="color: inherit;">Meningkatkan kesadaran politik rakyat untuk partisipasi aktif dalam  Pemilihan Umum demi terwujudnya cita-cita masyarakat Indonesia yang  demokratis.</span><br></li></ul></span><ul></ul>',
			'struktur_organisasi' => 'struktur.jpg',
			'sejarah' => '	<p style="text-align: justify; ">Secara institusional, KPU yang ada sekarang merupakan KPU ketiga yang dibentuk setelah Pemilu demokratis sejak reformasi 1998. KPU pertama (1999-2001) dibentuk dengan Keppres No 16 Tahun 1999 yang berisikan 53 orang anggota yang berasal dari unsur pemerintah dan Partai Politik dan dilantik oleh Presiden BJ Habibie.</p>
							<p style="text-align: justify;">KPU kedua (2001-2007) dibentuk dengan Keppres No 10 Tahun 2001 yang berisikan 11 orang anggota yang berasal dari unsur akademis dan LSM dan dilantik oleh Presiden Abdurrahman Wahid (Gus Dur) pada tanggal 11 April 2001.</p>
							<p style="text-align: justify;">KPU ketiga (2007-2012) dibentuk berdasarkan Keppres No 101/P/2007 yang berisikan 7 orang anggota yang berasal dari anggota KPU Provinsi, akademisi, peneliti dan birokrat dilantik tanggal 23 Oktober 2007 minus Syamsulbahri yang urung dilantik Presiden karena masalah hukum.</p>
							<p style="text-align: justify;">Untuk menghadapi pelaksanaan Pemilihan Umum 2009, image KPU harus diubah sehingga KPU dapat berfungsi secara efektif dan mampu memfasilitasi pelaksanaan Pemilu yang jujur dan adil. Terlaksananya Pemilu yang jujur dan adil tersebut merupakan faktor penting bagi terpilihnya wakil rakyat yang lebih berkualitas, dan mampu menyuarakan aspirasi rakyat. Sebagai anggota KPU, integritas moral sebagai pelaksana pemilu sangat penting, selain menjadi motor penggerak KPU juga membuat KPU lebih kredibel di mata masyarakat karena didukung oleh personal yang jujur dan adil.</p>
							<p style="text-align: justify;">Tepat 3 (tiga) tahun setelah berakhirnya penyelenggaraan Pemilu 2004, muncul pemikiran di kalangan pemerintah dan DPR untuk meningkatkan kualitas pemilihan umum, salah satunya kualitas penyelenggara Pemilu. Sebagai penyelenggara pemilu, KPU dituntut independen dan non-partisan. Untuk itu atas usul insiatif DPR-RI menyusun dan bersama pemerintah mensyahkan Undang-undang Nomor 22 Tahun 2007 Tentang Penyelenggara Pemilu. Sebelumnya keberadaan penyelenggara Pemilu terdapat dalam Pasal 22-E Undang-undang Dasar Tahun 1945 dan Undang-undang Nomor 12 Tahun 2003 Tentang Pemilu DPR, DPD dan DPRD, Undang-undang Nomor 23 Tahun 2003 Tentang Pemilu Presiden dan Wakil Presiden.</p>
							<p style="text-align: justify;">Dalam Undang-undang Nomor 22 Tahun 2007 Tentang Penyelenggara Pemilu diatur mengenai penyelenggara Pemilihan Umum yang dilaksanakan oleh suatu KomisiPemilihan Umum (KPU) yang bersifat nasional, tetap, dan mandiri. Sifat nasional mencerminkan bahwa wilayah kerja dan tanggung jawab KPU sebagai penyelenggara Pemilihan Umum mencakup seluruh wilayah Negara Kesatuan Republik Indonesia. Sifat tetap menunjukkan KPU sebagai lembaga yang menjalankan tugas secara berkesinambungan meskipun dibatasi oleh masa jabatan tertentu. Sifat mandiri menegaskan KPU dalam menyelenggarakan Pemilihan Umum bebas dari pengaruh pihak mana pun.</p> 
							<p style="text-align: justify;">Perubahan penting dalam undang-undang Nomor 22 Tahun 2007 Tentang Penyelenggara Pemilu, meliputi pengaturan mengenai lembaga penyelenggara Pemilihan Umum Anggota Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, dan Dewan Perwakilan Rakyat Daerah; Pemilihan Umum Presiden dan Wakil Presiden; serta Pemilihan Umum Kepala Daerah dan Wakil Kepala Daerah yang sebelumnya diatur dalam beberapa peraturan perundang-undangan kemudian disempurnakan dalam 1 (satu) undang-undang secara lebih komprehensif. </p>
							<p style="text-align: justify;">Dalam undang-undang Nomor 22 Tahun 2007 Tentang Penyelenggara Pemilu diatur mengenai KPU, KPU Provinsi, dan KPU Kabupaten/Kota sebagai lembaga  penyelenggara pemilihan umum yang permanen dan Bawaslu sebagai lembaga pengawas Pemilu. KPU dalam menjalankan tugasnya bertanggung jawab sesuai dengan peraturan perundang-undangan serta dalam hal penyelenggaraan seluruh tahapan pemilihan umum dan tugas lainnya. KPU memberikan laporan Presiden kepada Dewan Perwakilan Rakyat.</p>
							<p style="text-align: justify;">Undang-undang Nomor 22 Tahun 2007 Tentang Penyelenggara Pemilu juga mengatur kedudukan panitia pemilihan yang meliputi PPK, PPS, KPPS dan PPLN serta KPPSLN yang merupakan penyelenggara Pemilihan Umum yang bersifat ad hoc. Panitia tersebut mempunyai peranan penting dalam pelaksanaan semua tahapan penyelenggaraan Pemilihan Umum dalam rangka mengawal terwujudnya Pemilihan Umum secara langsung, umum, bebas, rahasia, jujur, dan adil.Dalam rangka mewujudkan KPU dan Bawaslu yang memiliki integritas dan kredibilitas sebagai Penyelenggara Pemilu, disusun dan ditetapkan Kode Etik Penyelenggara Pemilu. Agar Kode Etik Penyelenggara Pemilu dapat diterapkan dalam penyelenggaraan Pemilihan Umum, dibentuk Dewan Kehormatan KPU, KPU Provinsi, dan Bawaslu. </p>
							<p style="text-align: justify;">Di dalam Undang-undang Nomor 12 Tahun 2003 Tentang Pemilu DPR, DPD dan DPRD, jumlah anggota KPU adalah 11 orang. Dengan diundangkannya Undang-Undang Nomor 22 Tahun 2007 Tentang Penyelenggara Pemilu, jumlah anggota KPU berkurang menjadi 7 orang. Pengurangan jumlah anggota KPU dari 11 orang menjadi 7 orang tidak mengubah secara mendasar pembagian tugas, fungsi, wewenang dan kewajiban KPU dalam merencanakan dan melaksanakan tahap-tahap, jadwal dan mekanisme Pemilu DPR, DPD, DPRD, Pemilu Presiden/Wakil Presiden dan Pemilu Kepala Daerah Dan Wakil Kepala Daerah.Menurut Undang-undang Nomor 22 Tahun 2007 Tentang Penyelenggara Pemilu, komposisi keanggotaan KPU harus memperhatikan keterwakilan perempuan sekurang-kurangnya 30% (tiga puluh persen). Masa keanggotaan KPU 5 (lima) tahun terhitung sejak pengucapan sumpah/janji. Penyelenggara Pemilu berpedoman kepada asas : mandiri; jujur; adil; kepastian hukum; tertib penyelenggara Pemilu; kepentingan umum; keterbukaan; proporsionalitas; profesionalitas; akuntabilitas; efisiensi dan efektivitas.</p>
							<p style="text-align: justify;">Cara pemilihan calon anggota KPU-menurut Undang-Undang Nomor 22 Tahun 2007 Tentang Penyelenggara Pemilu-adalah Presiden membentuk Panitia Tim Seleksi calon anggota KPU tanggal 25 Mei 2007 yang terdiri dari lima orang yang membantu Presiden menetapkan calon anggota KPU yang kemudian diajukan kepada Dewan Perwakilan Rakyat untuk mengikuti fit and proper test. Sesuai dengan bunyi Pasal 13 ayat (3) Undang-undang N0 22 Tahun 2007 Tentang Penyelenggara Pemilu, Tim Seleksi Calon Anggota KPU pada tanggal 9 Juli 2007 telah menerima 545 orang pendaftar yang berminat menjadi calon anggota KPU. Dari 545 orang pendaftar, 270 orang lolos seleksi administratif untuk mengikuti tes tertulis. Dari 270 orang calon yang lolos tes administratif, 45 orang bakal calon anggota KPU lolos tes tertulis dan rekam jejak yang diumumkan tanggal 31 Juli 2007.</p>',

			'tugas' => '<p style="color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><h3 style="">Ketua KPU, KPU Provinsi, dan KPU Kabupaten/Kota mempunyai tugas :</h3><div style=""><ol><li>memimpin rapat pleno dan seluruh kegiatan KPU, KPU Provinsi, dan KPU Kabupaten/Kota<br></li><li>bertindak untuk dan atas nama KPU, KPU Provinsi, dan KPU Kabupaten/Kota ke luar dan ke dalam<br></li><li>memberikan keterangan resmi tentang kebijakan dan kegiatan KPU, KPU Provinsi, dan KPU Kabupaten/Kota dan<br></li><li>menandatangani seluruh peraturan dan keputusan KPU, KPU Provinsi, dan KPU Kabupaten/Kota.<br></li></ol><div><br></div><h3>Staf pelaksana pada Sekretariat KPU Kota terdiri atas :</h3><ol><li>Staf pelaksana pada Subbagian Program dan Data.<br></li><li>Staf pelaksana pada Subbagian Hukum.<br></li><li>Staf pelaksana pada Subbagian Teknis Pemilu dan Hubungan Partisipasi Masyarakat.<br></li><li>Staf pelaksana pada Subbagian Keuangan, Umum, dan Logistik.</li></ol><div style="font-size: 14px; line-height: 22px; text-align: justify;"><span style="font-size: 24px; line-height: 1.1; color: inherit;"><br></span></div><h3 style="">1)	Staf Pelaksana pada Subbagian Program dan Data mempunyai tugas:</h3><ul><li>Mengumpulkan dan mengolah bahan penyusunan rencana anggaran pemilu.<br></li><li>Menyusun dan mengelola perencanaan anggaran pemilu.<br></li><li>Mengelola, menyusun data pemilih.<br></li><li>Mengumpulkan dan meyiapkan bahan penyusunan kerja sama dengan lembaga pemerintahan lain yang terkait.<br></li><li>Mengumpulkan dan mengolah bahan penyusunan kerjasama dengan lembaga non pemerintahan.<br></li><li>Melakukan survey untuk mendapatkan bahan kebutuhan pemilu.<br></li><li>Mengumpulkan dan mengolah bahan kebutuhan pemilu.<br></li><li>Mengumpulkan dan mengolah bahan asil monitoring penyelenggara pemilu.<br></li><li>Mengumpulkan dan mengolah bahan hasil supervisi penyelenggara pemilu.<br></li><li>Menyusun dan mengelola laporan pelaksanaan kegiatan Subbagian Program dan Data.<br></li><li>Memberikan dan mengelola bahan pertimbangan kepada Sekretaris KPU Kota.<br></li><li>Melaporkan hasil penyusunan dan pengelolaan pelaksanaan tugas kepada Sekretaris KPU Kota.<br></li><li>Melaksanakan tugas-tugas lain yang diberikan oleh Sekretaris KPU Kota.<br></li><li>Menyusun dan merencanakan kebutuhan anggaran proses rekrutmen Anggota KPU Kota.<br></li><li>Menyusun dan merencanakan anggaran proses Penggantian Antar Waktu Anggota KPU.<br></li><li>Menjalankan tugas lain yang diperintahkan oleh pemimpin.<br></li></ul><h3>2)	Staf Pelaksana pada Subbagian Hukum mempunyai tugas:</h3><ul><li>Mengumpulkan dan mengelola bahan untuk materi penyuluhan peraturan perundang undangan tentang pemilu.<br></li><li>Mengumpulkan dan mengelola bahan untuk advokasi dan konsultasi hukum penyelanggara pemilu.<br></li><li>Menyusun dan mengolah bahan-bahan yang sudah dikumpulkan untuk advokasi dan konsultasi hukum penyelenggara hukum.<br></li><li>Mengumpulkan dan menyusun bahan-bahan untuk pembelaan dalam sengketa hukum penyelenggara pemilu.<br></li><li>Menyusun dan mengolah bahan-bahan untuk verifikasi administrasi dan faktual partai politik peserta pemilu.<br></li><li>Menyusun dan mengelola evaluasi terhadap kegiatan verifikasi partai politik peserta pemilu dan pelaporannya.<br></li><li>Menyusun dan mengelola verifikasi calon anggota DPR Kota.<br></li><li>Menyusun laporan kegiatan verifikasi partai politik peserta pemilu.<br></li><li>Mengumpulkan dan menyusun bahan-bahan untuk verifikasi administrasi dan faktual perseorangan peserta pemilu.<br></li><li>Menyusun dan mengolah bahan-bahan yang sudah dikumpulkan untuk verifikasi administrasi dan faktual calon perseorangan peserta pemilu.<br></li><li>Mengumpulkan dan mengolah bahan-bahan informasi administrasi pelaporan dana kampanye peserta pemilu.<br></li><li>Mengumpulkan dan mengolah identifikasi kinerja staf di Subbagian Hukum.<br></li><li>Menghimpun dan mempelajari peraturan perundang-undangan, kebijakan teknis, pedoman dan petunjuk teknis serta bahan-bahan lainnya yang materinya berhubungan dengan bidang tugas Subbagian Hukum.<br></li><li>Menyusun dan mencari bahan permasalahan yang terjadi dan menyiapkan bahan-bahan yang diperlukan dalam rangka pemecahan masalah.<br></li><li>Menyusun dan mencari bahan pertimbangan kepada Sekretaris KPU Kota.<br></li><li>Melaksanakan tugas-tugas ;ain yang diberian oleh Sekretaris KPU Kota.<br></li><li>Menyusun dan melaporkan hasil pelaksanaan tugas kepada Subbagian Hukum Kota.<br></li><li>Melaksanakan inventarisasi peraturan perundang-undangan.<br></li><li>Menjalankan tugas lain yang diperintahkan oleh pemimpin.<br></li></ul></div><div style=""><h3>3)	Staf Pelaksana pada Subbagian Teknis Pemilu dan Hubungan Partisipasi Masyarakat mempunyai Tugas:</h3><ul><li><span style="color: inherit;">Menyusun draft pembagian daerah pemilihan dan alokasi kursi untuk pemilu anggota DPR Kota.</span><br></li><li><span style="color: inherit;">Mengumpulkan dan menyusun identifikasi bahan informasi dan pemungutan suara, perhitungan suara, dan penetapan hasil pemilu.</span><br></li><li><span style="color: inherit;">Menyusun dan mencari bahan draft pedoman dan petunjuk teknis pemungutan, perhitungan suara,dan penetapan hasil Pemilu.</span><br></li><li><span style="color: inherit;">Mengumpulkan dan menyusun identifikasi bahan informasi untuk penyusunan pedoman dan petunjuk teknis penggantian antar waktu dan pengisian Anggota DPRD Kota.</span><br></li><li><span style="color: inherit;">Menyiapkan semua berkas kelengkapan Penggantian Antar Waktu Anggota DPRD Kota dan hubungan calon pengganti untuk melengkapi kekurangan persyaratan.</span><br></li><li><span style="color: inherit;">Mengumpulkan dan mengidentifikasi bahan pemberitaan dan penerbitan informasi Pemilu.</span><br></li><li><span style="color: inherit;">Menyusun draft pemberitaan dan penerbitn informasi Pemilu.</span><br></li><li><span style="color: inherit;">Mengumpulkan dan mengidentifikasi bahan dan informasi pelakasanaan kampanye.</span><br></li><li><span style="color: inherit;">Menyusun draft tata cara pelaksanaan sosialisasi dalam kampanye.</span><br></li><li><span style="color: inherit;">Mengumpulkan dan mengidentifikasi baham dan informasi pedoman tekhnis bina partisipasi masyarakat,dan pelaksanaan pendidikan pemilih.</span><br></li><li><span style="color: inherit;">Melakukan identifikasi kinerja staf disubbagian Teknis Pemilu dan Hubungan Partisipasi Masyarakat.</span><br></li><li><span style="color: inherit;">Mengiventarisasipermasalahan yang terjadi dan menyiapkan bahan-bahan yang diperlukan dalam rangka pemecahan masalah.</span><br></li><li><span style="color: inherit;">Memberikan saran dan pertimbangan kepada Sekretaris KPU Kota.</span><br></li><li><span style="color: inherit;">Melaksanakan dan menjalankan tugas-tugas lain yang diberikan oleh Sekretaris KPU Kota.</span><br></li><li><span style="color: inherit;">Membantu dan mengola memfasilitasi pemeliharaan data dan dokumentasi hasil Pemilu.</span><br></li><li><span style="color: inherit;">Menyiapkan laporan hasil plaksanaan tugas kepada subbbag Teknis dan Hubmas.</span><br></li><li><span style="color: inherit;">Menjalankan tugas lain yang diperintahkan oleh pimpinan.</span><br></li></ul></div><div style=""><h3>4)	Staf Pelaksana pada Subbagian Keuangan mempunyai tugas :</h3><ul><li><span style="color: inherit;">Mengelola dan menyusun rencana Subbagian Keuangan.</span><br></li><li><span style="color: inherit;">Memberi informasi terbaru menyangkut pengelolaan keuangan yang menjadi kewenagan KPU Kota.</span><br></li><li><span style="color: inherit;">Menyusun dan mengelola bahan peneliti dan laporan keuangan.</span><br></li><li><span style="color: inherit;">Meyiapkan dan menyusun bahan-bahan untuk keperluan realisasi anggaran (SAI dan LPJ/LPAK).</span><br></li><li><span style="color: inherit;">Menyusun dan memperbaharui apabila ada peraturan atau ketentuan keuangan yang terbaru.</span><br></li><li><span style="color: inherit;">Mengumpulkan dan menyusun data untuk keperluan perhitungan akuntasi.</span><br></li><li><span style="color: inherit;">Menyusun dan membuat daftar gaji/honor pewagai.</span><br></li><li><span style="color: inherit;">Menyusun dan membuat daftar pengadaan barang dan jasa.</span><br></li><li><span style="color: inherit;">Mengelola dan membuat kartu pengawasan pembayaran yang telah diajukan oleh PPK dan diselesaikan oleh KPPN.</span><br></li><li><span style="color: inherit;">Menyusun dan membantu pejabat penandatanganan SPM untuk meneliti dokumen pembayaran yang telah diajukan oleh PPK agar sesuai dengan ketentuan dan peraturan yang berlaku.</span><br></li><li><span style="color: inherit;">Menyusun dan membantu mengawasi dan mengecek pembuatan SPM sebelum diajukan dan di tandatangani oleh pejabat penandatngan SPM.</span><br></li><li><span style="color: inherit;">Menyiapkan dan menyusun, mempelajari peraturan perundang-undangan, kebijakan, serta pedoman dan petunjuk teknis tentang pengelolaan keuangan pemilu.</span><br></li><li><span style="color: inherit;">Mengelola dan memonitor serta mengevaluasi pelaksanaan teknis kegiatan pengelolaan keuangan.</span><br></li><li><span style="color: inherit;">Menyusun dan mencari bahan pertimbangan kepada Sektretaris KPU Kota.</span><br></li><li><span style="color: inherit;">Menyusun dan melaporkan hasil pelaksanaan tugas kepada Sekretaris KPU Kota.</span><br></li><li><span style="color: inherit;">Menyusun dan melaksanakan tugas-tugas lain yang diberian oleh Sekretaris KPU Kota.</span><br></li><li><span style="color: inherit;">Mengelola dan melakukan koordinasi dengan Subbagian lain.</span><br></li><li><span style="color: inherit;">Menjalankan tugas lain yang diperintakan oleh pimpinan.</span><br></li></ul></div><div style=""><h3>5)	Staf Pelaksana pada Subbagian Umum mempunyai tugas :</h3><ul><li><span style="color: inherit;">Mengelola dan menyusun rencana Subbagian Umum.</span><br></li><li><span style="color: inherit;">Menyusun dan melakukan urusan kearsipan, surat-menyurat, dan ekspredesi.</span><br></li><li><span style="color: inherit;">Menyusun dan melaksanakan penomoran, pengetikan dan pengadaan naskah dinas.</span><br></li><li><span style="color: inherit;">Menyusun dan melakukan urusan perlengkapan di Subbagian masing-masing.</span><br></li><li><span style="color: inherit;">Menyusun dan mengelola urusan rumah tangga.</span><br></li><li><span style="color: inherit;">Mencatat dan menyusun surat masuk/keluar.</span><br></li><li><span style="color: inherit;">Menyusun dan mengarsipkan surat masuk/keluar.</span><br></li><li><span style="color: inherit;">Menyusun dan mengarsipkan himpunan-himpunan naskah dinas.</span><br></li><li><span style="color: inherit;">Menyusun dan mencatat himpunan-himpunan naskah dinas yang keluar.</span><br></li><li><span style="color: inherit;">Menyiapkan dan menyusun arsip dinas dan arsip statis.</span><br></li><li><span style="color: inherit;">Mengumpulkan dan penyusunan arsip inaktif.</span><br></li><li><span style="color: inherit;">Mengelola dan memelihara barang inventaris milik negara.</span><br></li><li><span style="color: inherit;">Menyusun dan mencari bahan pertimbangan kepada Sekretaris KPU Kota.</span><br></li><li><span style="color: inherit;">Menyusun dan melaporkan hasil pelaksanaan tugas kepada Sekretaris KPU Kota.</span><br></li><li><span style="color: inherit;">Menyusun dan melaksanakan tugas-tugas lain yang diberikan oleh Sekretaris KPU Kota.</span><br></li><li><span style="color: inherit;">Mengelola dan melakukan koordinasi dengan Subbagian lain.</span><br></li><li><span style="color: inherit;">Menjalankan tugas lain yang diperintahankan oleh pimpinan.</span></li></ul></div><div style="text-align: justify;"><h3>6)	Staf Pelaksana pada Subagian Logistik mempunyai tugas :</h3><ul><li style="">Mengelola dan menyusun rencana Subbagian Logistik.<br></li><li>Menyusun dan mendokumentasi laporan pelaksaan kegiatan Subbagian penyusunan, pengelohan data, dan dokumentasi kebutuhan sarana pemilu.<br></li><li>Mengumpulkan dan mengolah bahan alokasi barang kebutuhan pemilu serta membuat laporannya.<br></li><li>Mengalokasikan barang keperluan pemilu.<br></li><li>Menyusun dan merencanakan alokasi kebutuhan sarana pemilu bagi panitia pemilu.<br></li><li>Menyusun dan mencari bahan pertimbangan kepada Sekretaris KPU Kota.<br></li><li>Menyusun dan melaporkan hasil pelaksanaan tugas kepada Sekretaris KPU Kota.<br></li><li>Menyusun dan melaksanakan tugas-tugas lain yang diberikan oleh Sekretaris KPU Kota.<br></li><li>Mengelola dan melakukan koordinasi dengan Subbagian lain.<br></li><li>Menjalankan tugas lain yang diperintahkan oleh pimpinan.<br></li></ul></div><p></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p><p style="line-height: 1.6; color: rgb(0, 0, 0); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: rgba(255, 255, 255, 0.901961);"></p>',
			'logo' => 'logo.png'
		);

		# Masukkan kedalam tabel
		DB::table('instansi')->insert($instansi);
	}
}