@extends('layouts.app4')

@section('title', 'Pembayaran')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pembayaran</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/nilai') }}">Pembayaran</a></div>
                </div>
            </div>
            <div class="row mt-4">
                {{-- var_dump({{$guru->toArray()}}); --}}
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-2">
                                <div class="card-header-action">
                                    <select class="form-control select" name="users_id">
                                        <option value="">Pilih Tahun Ajaran</option>
                                        <option value="">2023/2024 - Ganjil</option>
                                        <option value="">2023/2024 - Genap</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table-md table">
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>NISN</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1212</td>
                                        <td>1001212</td>
                                        <td>Adnan</td>
                                        <td>2023/2024 - Genap</td>
                                        <td>Lulus</td>
                                        <td><a href="" class="btn btn-icon btn-info"><i
                                                    class="fas fa-info-circle"></i>&nbsp;
                                                Detail</a></td>
                                    </tr>
                                    {{-- @foreach ($pembayaran as $key => $p)
                                        <tr>
                                            <td>{{ ($pembayaran->currentPage() - 1) * $pembayaran->perPage() + $key + 1 }}</td>
                                            <td>{{ $p->siswa->nis }}</td>
                                            <td>{{ $p->siswa->nisn }}</td>
                                            <td>{{ $p->siswa->nama }}</td>
                                            <td>{{ $p->thajaran->tahun }} {{ $p->thajaran->semester }}</td>
                                            <td>
                                                <form action="{{ route('pembayaran.delete', $p->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('pembayaran.lihat', $p->id) }}"
                                                        class="btn btn-icon btn-info"><i
                                                            class="fas fa-info-circle"></i>&nbsp;
                                                        Detail</a>
                                                    <a href="{{ route('pembayaran.edit', $p->id) }}"
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
                        <div class="float-right">
                            {{-- {{ $pembayaran->links() }} --}}
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
