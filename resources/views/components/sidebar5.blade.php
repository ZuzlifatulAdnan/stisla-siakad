<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/dashboard') }}">Sistem Akademik</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/dashboard') }}">SA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard-ortu') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard-ortu') }}"><i class="fas fa-home">
                    </i> <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Main Menu</li>
            {{--<li class="nav-item dropdown {{ $type_menu === 'master' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder"></i><span>Data
                        Master</span></a>
                 <ul class="dropdown-menu">
                    <li class='{{ Request::is('guru') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('guru') }}">Guru</a>
                    </li>
                    <li class="{{ Request::is('kelas') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('kelas') }}">Kelas</a>
                    </li>
                    <li class="{{ Request::is('jurusan') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('jurusan') }}">Jurusan</a>
                    </li>
                    <li class='{{ Request::is('mapel') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('mapel') }}">Mata Pelajaran</a>
                    </li>
                    <li class='{{ Request::is('sekolah') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('sekolah') }}">Sekolah</a>
                    </li>
                    <li class='{{ Request::is('siswa') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('siswa') }}">Siswa</a>
                    </li>
                    <li class='{{ Request::is('thajaran') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('thajaran') }}">Tahun Ajaran</a>
                    </li>
                    <li class='{{ Request::is('users') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('users') }}">Users</a>
                    </li>
                    <li class='{{ Request::is('wakel') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('wakel') }}">Wali Kelas</a>
                    </li>
                </ul>
            </li>  --}}
            <li class="{{ Request::is('jadwal-ortu') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('jadwal-ortu') }}"><i class="fas fa-clipboard">
                    </i> <span>Jadwal Pelajaran</span>
                </a>
            </li>
            <li class="{{ Request::is('absen-ortu') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('absen-ortu') }}"><i class="fas fa-calendar-plus">
                    </i> <span>Absensi Siswa</span>
                </a>
            </li>
            <li class="{{ Request::is('nilai-ortu') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('nilai-ortu') }}"><i class="fas fa-list">
                    </i> <span>Nilai Siswa</span>
                </a>
            </li>
            <li class="{{ Request::is('raport-ortu') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('raport-ortu') }}"><i class="fas fa-file-alt">
                    </i> <span>Raport</span>
                </a>
            </li> 
            <li class="nav-item dropdown {{ $type_menu === 'perangkingan' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-list-ol"></i><span>Perangkingan</span></a>
                <ul class="dropdown-menu">
                    {{-- <li class='{{ Request::is('kriteria') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('kriteria') }}">Kriteria</a>
                    </li>
                    <li class="{{ Request::is('sub') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('sub') }}">Sub Kriteria</a>
                    </li>
                    <li class="{{ Request::is('penilaian') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('penilaian') }}">penilaian Awal</a>
                    </li>
                    <li class="{{ Request::is('normalisasi') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('normalisasi') }}">Hasil Normalisasi</a>
                    </li> --}}
                    <li class="{{ Request::is('preferensi-ortu') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('preferensi-ortu') }}">Hasil Preferensi</a>
                    </li>
                    <li class="{{ Request::is('perangkingan-ortu') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('perangkingan-ortu') }}">Hasil Perangkingan</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'pembayaran' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-wallet"></i><span>Pembayaran</span></a>
                <ul class="dropdown-menu">
                    {{-- <li class='{{ Request::is('tagihan') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('tagihan') }}">Pembayaran Item</a>
                    </li>  --}}
                    <li class="{{ Request::is('pembayaran-ortu') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('pembayaran-ortu') }}">Pembayaran</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'setting' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Setting</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('tentang') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('tentang') }}">Tentang Sistem</a>
                    </li>
                    <li class="{{ Request::is('petunjuk') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('petunjuk') }}">Petunjuk Penggunaan</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <form action="#" method="POST">
                @csrf
                <button class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </aside>
</div>
