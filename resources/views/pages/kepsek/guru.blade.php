@extends('layouts.app')

@section('title', 'guru-kepsek')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Guru</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/guru') }}">Guru</a></div>
                </div>
            </div>
            <div class="row mt-4">
                {{-- var_dump({{$guru->toArray()}}); --}}
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-action">
                                <a href="{{ url('/guru/add') }}" class="btn btn-primary">Tambah Data</a>
                                <a href="{{ url('/guru/import') }}" class="btn btn-success">Import Excel</a>
                                <a href="{{ url('/guru/export_exel') }}" class="btn btn-info">Export Excel </a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table-striped table-md table">
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jabatan</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Action</th>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>1234</td>
                                        <td>Supri</td>
                                        <td>Kepala Sekolah</td>
                                        <td>Olahraga</td>
                                        <td><a href="" class="btn btn-icon btn-info"><i
                                                    class="fas fa-info-circle"></i>&nbsp;
                                                Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>1234</td>
                                        <td>Supry</td>
                                        <td>Guru</td>
                                        <td>Matematika</td>
                                        <td><a href="" class="btn btn-icon btn-info"><i
                                                    class="fas fa-info-circle"></i>&nbsp;
                                                Detail</a></td>
                                    </tr>
                                    {{-- @foreach ($guru as $key => $g)
                                        <tr>
                                            <td>{{ ($guru->currentPage() - 1) * $guru->perPage() + $key + 1 }}</td>
                                            <td>{{ $g->nip }}</td>
                                            <td>{{ $g->nama }}</td>
                                            <td>{{ $g->jabatan }}</td>
                                            <td>{{ $g->mapel->nama_mapel }}</td>
                                            <td>
                                                <form action="{{ route('guru.delete', $g->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('guru.detail', $g->id) }}"
                                                        class="btn btn-icon btn-info"><i
                                                            class="fas fa-info-circle"></i>&nbsp;
                                                        Detail</a>
                                                    <a href="{{ route('guru.edit', $g->id) }}"
                                                        class="btn btn-icon btn-primary"><i class="far fa-edit"></i>&nbsp;
                                                        Edit</a>
                                                    <button class="btn btn-icon btn-danger confirm-delete"><i
                                                            class="fas fa-times"></i>&nbsp; Hapus</button>
                                                </form>
                                        </tr>
                                    @endforeach --}}
                                </table>
                            </div>
                        </div>
                        {{-- <div class="float-right">
                            {{ $guru->links() }}
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
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
