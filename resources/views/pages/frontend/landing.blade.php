@extends('layouts.frontend.main')

@section('content')

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h5 class="display-5">Selamat datang di <a href="#" class="text-decoration-underline">SMKN 2 GUGUK</a> - Sekolah Unggulan di Kabupaten Tebo.</h5>
            <p class="lead">SMKN 2 GUGUK adalah sekolah menengah kejuruan yang berkomitmen untuk menghasilkan lulusan berkualitas dengan kompetensi yang siap kerja. Dengan berbagai jurusan yang tersedia, kami siap mencetak generasi muda yang kompeten dan siap menghadapi tantangan masa depan.</p>
            <a href="#" class="btn btn-dark btn-lg">Lihat Jurusan</a>
        </div>
        <div class="col-md-6 text-center p-0">
            <img src="{{ asset('frontend/assets/images/banner-kanan.png') }}" class="img-fluid" alt="Banner SMKN 2 GUGUK">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 bg-dark text-white p-5">
            <h2>Selamat datang di SMKN 2 GUGUK</h2>
            <p>SMKN 2 GUGUK adalah sekolah menengah kejuruan yang berlokasi di Kabupaten Tebo, Provinsi Jambi. Sekolah ini didedikasikan untuk memberikan pendidikan berkualitas dan menghasilkan lulusan yang siap memasuki dunia kerja atau melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>
        </div>
        <div class="col-md-6 bg-light p-5">
            <div class="d-flex justify-content-center mb-3">
                <span class="badge bg-primary me-2">Teknik</span>
                <span class="badge bg-warning text-dark me-2">Bisnis</span>
                <span class="badge bg-info text-dark me-2">Teknologi</span>
                <span class="badge bg-secondary">Manajemen</span>
            </div>
            <p>Di SMKN 2 GUGUK, Anda akan menemukan berbagai jurusan yang telah dirancang sesuai dengan kebutuhan industri dan pasar kerja, sehingga memberikan peluang karir yang menjanjikan bagi setiap siswa.</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
            <img src="{{ asset('frontend/assets/images/mask-group.png') }}" class="img-fluid" alt="Mask Group Image">
        </div>
        <div class="col-md-6">
            <h2>Mengapa Memilih SMKN 2 GUGUK?</h2>
            <div class="mt-4">
                <h5><i class='bx bx-group'></i> Fasilitas Lengkap</h5>
                <p>SMKN 2 GUGUK dilengkapi dengan fasilitas modern dan laboratorium praktik yang memadai untuk mendukung pembelajaran siswa dalam mengembangkan keterampilan teknis mereka.</p>
            </div>
            <div class="mt-4">
                <h5><i class='bx bx-group'></i> Guru Berpengalaman</h5>
                <p>Tim pengajar yang profesional dan berpengalaman di bidangnya masing-masing, siap membimbing siswa untuk mencapai prestasi terbaik dan siap memasuki dunia kerja.</p>
            </div>
            <div class="mt-4">
                <h5><i class='bx bx-book'></i> Kurikulum Terkini</h5>
                <p>Kurikulum yang selalu diperbarui sesuai dengan perkembangan industri dan teknologi terkini, memastikan siswa mendapatkan pengetahuan dan keterampilan yang relevan.</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="mb-4">Jurusan Unggulan SMKN 2 GUGUK</h2>
    <p>Pilih jurusan yang sesuai dengan minat dan bakat Anda <a href="#" class="text-decoration-underline">Lihat Semua Jurusan</a></p>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Teknik Kendaraan Ringan</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.85/5</p>
                    <p class="card-text">120 siswa aktif</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Teknik Komputer & Jaringan</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.8/5</p>
                    <p class="card-text">95 siswa aktif</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Multimedia</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.91/5</p>
                    <p class="card-text">85 siswa aktif</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Akuntansi</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.77/5</p>
                    <p class="card-text">110 siswa aktif</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Administrasi Perkantoran</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.92/5</p>
                    <p class="card-text">105 siswa aktif</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Pemasaran</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.77/5</p>
                    <p class="card-text">90 siswa aktif</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Usaha Perjalanan Wisata</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.79/5</p>
                    <p class="card-text">75 siswa aktif</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Tata Boga</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.85/5</p>
                    <p class="card-text">80 siswa aktif</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center bg-dark">
        <div class="col-md-8 text-white p-5">
            <h2 class="display-5">Selamat datang di <br>SMKN 2 GUGUK</h2>
            <p>SMKN 2 GUGUK adalah sekolah menengah kejuruan yang berkomitmen untuk menghasilkan lulusan berkualitas dengan kompetensi yang siap kerja. Dengan berbagai jurusan yang tersedia, kami siap mencetak generasi muda yang kompeten dan siap menghadapi tantangan masa depan.</p>
            <ul class="list-unstyled">
                <li class="mb-2"><i class='bx bx-check'></i> Fasilitas pembelajaran yang modern</li>
                <li class="mb-2"><i class='bx bx-check'></i> Guru berpengalaman dan profesional</li>
                <li class="mb-2"><i class='bx bx-check'></i> Kurikulum terkini sesuai kebutuhan industri</li>
            </ul>
            <a href="#" class="btn btn-light">Pelajari Lebih Lanjut</a>
        </div>
        <div class="col-md-4 text-center p-0">
            <img src="{{ asset('frontend/assets/images/people.jpg') }}" class="img-fluid" alt="Siswa SMKN 2 GUGUK">
        </div>
    </div>
</div>

<div class="container my-5" id="project">
    <h2 class="mb-4 text-center">Prestasi Unggulan SMKN 2 GUGUK</h2>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Prestasi Akademik</span>
                        <span class="badge bg-success mb-2 text-end"><a href="{{ route('project', $project->id) }}" class="text-white text-decoration-none">Lihat Detail</a></span>
                        <h5 class="card-title text-truncate">{{ $project->name }}</h5>
                        <img src="{{ Storage::url($project->thumbnail) }}" class="img-fluid mb-3 card p-1" alt="Prestasi Image" style="max-height: 200px; min-width: max-content;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                            </div>
                            <small class="text-muted">{{ date('d F Y', strtotime($project->created_at)) }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="#" class="btn btn-dark btn-lg">Lihat Prestasi Lainnya</a>
    </div>
</div>

<div class="container my-5 text-center">
    <div class="row">
        <div class="col-md-4">
            <h3>850+</h3>
            <p>Siswa Aktif SMKN 2 GUGUK</p>
        </div>
        <div class="col-md-4">
            <h3>45+</h3>
            <p>Guru dan Tenaga Kependidikan</p>
        </div>
        <div class="col-md-4">
            <h3>95%</h3>
            <p>Tingkat Kelulusan Siswa</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('frontend/assets/images/costumer.svg') }}" class="img-fluid" alt="Alumni Image">
        </div>
        <div class="col-md-8">
            <h5 class="text-primary">Testimoni Alumni</h5>
            <h2>Apa kata alumni SMKN 2 GUGUK tentang sekolah kami</h2>
            <p>"Saya sangat bersyukur telah menempuh pendidikan di SMKN 2 GUGUK. Sekolah ini memberikan saya tidak hanya pengetahuan akademik, tetapi juga keterampilan praktis yang sangat berguna di dunia kerja. Guru-guru yang profesional dan fasilitas yang memadai membuat proses belajar menjadi menyenangkan dan efektif."</p>
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-3" alt="Alumni Avatar" width="50" height="50">
                <div>
                    <h5 class="mb-0">Ahmad Rizki</h5>
                    <p class="mb-0">Alumni Teknik Kendaraan Ringan</p>
                    <div class="text-warning">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-dark mt-4">Semua Testimoni</a>
        </div>
    </div>
</div>

<div class="container my-5 bg-light">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2 class="display-5">Bergabunglah dengan <em>SMKN 2 GUGUK</em> sekarang!</h2>
            <a href="#" class="btn btn-dark btn-lg mt-3">Daftar Sekarang</a>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('frontend/assets/images/doable.svg') }}" class="img-fluid" alt="SMKN 2 GUGUK Image">
        </div>
    </div>
</div>

@endsection
