<?php

class KpuController extends BaseController {

	/*
	** Konsturksi Inisialisasi
	*/
	public function __construct() {
		# Instansi
		$this->temp = Instansi::find(1);
	}

	/*
	** GET localhost:8000/admin
	*/
	public function index() {

		# Koleksi semua data yang dibutuhkan
		$instansi = $this->temp;
		$berita = Berita::orderBy('created_at', 'DESC')->paginate(5);

		# Tampilkan ke halaman
		return View::make('index', compact('instansi', 'berita'));
	}

	/*
	** GET localhost:8000/berita
	*/
	public function berita() {

		# Untuk sementara ini di disable dulu
		return Response::view('404');
	}
	
	/*
	** GET localhost:8000/berita/{slug}
	*/
	public function isiBerita($slug) {

		# Inisialisasi kebutuhan
		$instansi = $this->temp;
		$berita = Berita::where('slug', '=', $slug)->first();

		# Tampilkan ke halaman
		return View::make('depan.isi-berita', compact('instansi', 'berita'));
	}
	
	/*
	** GET localhost:8000/sejarah
	*/
	public function sejarah() {

		# Inisialisasi kebutuhan
		$instansi = $this->temp;

		# Tampilkan ke halaman
		return View::make('depan.sejarah', compact('instansi'));
	}
	
	/*
	** GET localhost:8000/visimisi
	*/
	public function visiMisi() {
		
		# Inisialisasi kebutuhan
		$instansi = $this->temp;

		# Tampilkan ke halaman
		return View::make('depan.visimisi', compact('instansi'));
	}
	
	/*
	** GET localhost:8000/struktur
	*/
	public function struktur() {

		# Inisialisasi kebutuhan
		$instansi = $this->temp;

		# Tampilkan ke halaman
		return View::make('depan.struktur', compact('instansi'));
	}
	
	/*
	** GET localhost:8000/partai
	*/
	public function partai() {

		# Inisialisasi kebutuhan
		$instansi = $this->temp;
		$partai = Partai::all();

		# Tampilkan halaman
		return View::make('depan.partai', compact('instansi', 'partai'));
	}

	/*
	** GET localhost:8000/partai/{id}
	*/
	public function lihatPartai($id) {

		# Inisialisasi kebutuhan
		$instansi = $this->temp;
		$partai = Partai::find($id);

		# Tampilkan halaman
		return View::make('depan.partai-detail', compact('instansi', 'partai'));
	}
	
	/*
	** GET localhost:8000/pemilu
	*/
	public function pemilu() {

		# Inisialisasi pemilu
		$instansi = $this->temp;
		$partai = Partai::all();

		# Tampilkan halaman beserta variabel
		return View::make('depan.pemilu', compact('instansi', 'partai'));
	}
	
	/*
	** GET localhost:8000/unduhan
	*/
	public function unduhan() {

		# Inisialisasi kebutuhan
		$instansi = $this->temp;
		$unduhan = Unduhan::all();

		# Tampilkan halaman
		return View::make('depan.unduhan', compact('instansi', 'unduhan'));
	}

}