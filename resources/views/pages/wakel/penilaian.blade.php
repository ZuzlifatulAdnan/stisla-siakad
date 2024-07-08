@extends('layouts.app3')

@section('title', 'Nilai Siswa')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Penilaian Awal</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/nilai') }}">Nilai Siswa</a></div>
                </div>
            </div>
            <div class="row mt-4">
                {{-- var_dump({{$guru->toArray()}}); --}}
                <div class="col-12 ">
                    <div class="card">
                        {{-- <div class="card-header">
                            <div class="card-header-action">
                                <a href="{{ url('/nilai/add') }}" class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div> --}}
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-md table">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Penilaian</th>
                                        <th>Action</th>
                                    </tr>
                                    {{-- @foreach ($penilaian as $key => $p)
                                        <tr>
                                            <td>{{ ($penilaia->currentPage() - 1) * $penilaia->perPage() + $key + 1 }}</td>
                                            <td>{{ $p->siswa->nama_siswa }}</td>
                                            <td>{{ $g->kelas->nama_kelas }}</td> --}}
                                            <td>Input
                                            </td>
                                            <td>
                                                {{-- <a href="{{ route('guru.detail', $g->id) }}"
                                                    class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i>&nbsp;
                                                    Detail</a>
                                                <a href="{{ route('guru.edit', $g->id) }}"
                                                    class="btn btn-icon btn-primary"><i class="far fa-edit"></i>&nbsp;
                                                    Edit</a>
                                                <button class="btn btn-icon btn-danger confirm-delete"><i
                                                        class="fas fa-times"></i>&nbsp; Hapus</button> --}}
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}
                                </table>
                            </div>
                        </div>
                        {{-- <div class="float-right">
                            {{ $penilaian->links() }}
                        </div> --}}
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
