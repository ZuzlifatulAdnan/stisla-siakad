@extends('layouts.app1')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sistem Akademik SMK Negeri 1 Way Bungur</h1>
            </div>
            <div class="row">
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/users') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>User</h4>
                                </div>
                                <div class="card-body">
                                    {{ $user }}11
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/siswa') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Siswa</h4>
                                </div>
                                <div class="card-body">
                                    {{ $siswa }}10
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/guru') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Guru</h4>
                                </div>
                                <div class="card-body">
                                    {{ $guru }}12
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/mapel') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Mata Pelajaran</h4>
                                </div>
                                <div class1="card-body">
                                    {{ $siswa }}6
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pengumuman</h4>
                            <div class="card-header-action">
                                <a href="{{ url('/add') }}" class="btn btn-primary">Tambah Pengumuman</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    {{-- @foreach ($pengumuman as $key => $post)
                                        <tr>
                                            <td>{{ ($pengumuman->currentPage() - 1) * $pengumuman->perPage() + $key + 1 }}
                                            </td>
                                            <td>{{ $post->tgl_upload }}
                                            </td>
                                            <td>
                                                {{ $post->judul }}
                                            </td>
                                            <td>{{ $post->deskripsi }}
                                            </td>

                                            <td>
                                                <form action="{{ route('delete', $post->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('edit', $post->id) }}"
                                                        class="btn btn-icon btn-primary"><i class="far fa-edit"></i>&nbsp;
                                                        Edit</a>
                                                    <button class="btn btn-icon btn-danger confirm-delete"><i
                                                            class="fas fa-times"></i>&nbsp; Hapus</button>
                                                </form>
                                        </tr>
                                    @endforeach --}}
                                </table>
                                <div class="float-right">
                                    {{-- {{ $pengumuman->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-sweetalert.js') }}"></script>
@endpush
