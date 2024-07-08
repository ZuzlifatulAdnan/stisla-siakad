@extends('layouts.app4')

@section('title', 'Jadwal Pelajaran')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jadwal Pelajaran</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/jadwal') }}">Jadwal Pelajaranh</a></div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-action">
                                <a href="{{url('jadwal/add')}}" class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-md table">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Guru</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Kelas</th>
                                        <th>Hari</th>
                                        <th>Jam Mengajar</th>
                                        <th>Jam Ke</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Action</th>
                                    </tr>
                                    {{-- @foreach ($jadwal as $key => $j)
                                        <tr>
                                            <td>{{ ($jadwal->currentPage() - 1) * $jadwal->perPage() + $key + 1 }}</td>
                                            <td>{{ $j->guru->nama }}</td>
                                            <td>{{ $j->mapel->nama_mapel }}</td>
                                            <td>{{ $j->kelas->nama_kelas }}</td>
                                            <td>{{ $j->hari }}</td>
                                            <td>{{ $j->jam_awal }} - {{ $j->jam_akhir }}</td>
                                            <td>{{ $j->jam_ke }}</td>
                                            <td>{{ $j->thajaran->tahun }} {{ $j->thajaran->semester }}</td>
                                            <td>
                                                <form action="{{ route('jadwal.delete', $j->id) }}" method="post">
                                                    @csrf
                                                    <a href="{{ route('jadwal.edit', $j->id) }}"
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
                            {{ $jadwal->links() }}
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
