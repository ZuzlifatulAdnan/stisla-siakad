@extends('layouts.app')

@section('title', 'Siswa')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Siswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/siswa') }}">Siswa</a></div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-action">
                                <a href="{{ url('/siswa/add') }}" class="btn btn-primary">Tambah Data</a>
                                <a href="{{ url('/siswa/import') }}" class="btn btn-success">Import Exel</a>
                                <a href="{{ url('/siswa/export') }}" class="btn btn-info">Export </a>
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
                                        <th>Jurusan</th>
                                        <th>Kelas</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1212</td>
                                        <td>101212</td>
                                        <td>Adnan</td>
                                        <td>TKJ</td>
                                        <td>XXI TKJ 1</td>
                                        <td>2023/2024 - Genap</td>
                                        <td><a href="" class="btn btn-icon btn-info"><i
                                                    class="fas fa-info-circle"></i>&nbsp;
                                                Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1213</td>
                                        <td>101213</td>
                                        <td>Zuzli</td>
                                        <td>TKJ</td>
                                        <td>XXI TKJ 1</td>
                                        <td>2023/2024 - Genap</td>
                                        <td><a href="" class="btn btn-icon btn-info"><i
                                                    class="fas fa-info-circle"></i>&nbsp;
                                                Detail</a></td>
                                    </tr>
                                    {{-- @foreach ($siswa as $key => $s)
                                        <tr>
                                            <td>{{ ($siswa->currentPage() - 1) * $siswa->perPage() + $key + 1 }}</td>
                                            <td>{{ $s->nis }}</td>
                                            <td>{{ $s->nisn }}</td>
                                            <td>{{ $s->nama }}</td>
                                            <td>{{ $s->jurusan->nama_jurusan }}</td>
                                            <td>{{ $s->kelas->nama_kelas }}</td>
                                            <td>{{ $s->thajaran->tahun }} {{ $s->thajaran->semester }}</td>
                                            <td>
                                                <form action="{{ route('siswa.delete', $s->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('siswa.detail', $s->id) }}"
                                                        class="btn btn-icon btn-info"><i
                                                            class="fas fa-info-circle"></i>&nbsp;
                                                        Detail</a>
                                                    <a href="{{ route('siswa.edit', $s->id) }}"
                                                        class="btn btn-icon btn-primary"><i class="far fa-edit"></i>&nbsp;
                                                        Edit</a>
                                                    <button class="btn btn-icon btn-danger confirm-delete"><i
                                                            class="fas fa-times"></i>&nbsp; Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </table>
                            </div>
                        </div>
                        {{-- <div class="float-right">
                            {{ $siswa->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
