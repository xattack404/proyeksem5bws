<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('home')}}">SI Pondok Pesantren</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('home')}}">SIPONPES</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="">
        <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      <li class="menu-header">Data Santri</li>
      <li class="">
        <a class="nav-link" href="{{ route('datasantri.index') }}"><i class="fa fa-table" aria-hidden="true"></i> <span>Data Santri Baru</span></a>
      </li>
      <li class="menu-header">Transaksi</li>
      <li class="">
        <a class="nav-link" href="{{ route('pembayaran.index') }}"><i class="fas fa-money-check-alt"></i> <span>Manejemen Pembayaran</span></a>
      </li>
      <li class="menu-header">Data Master</li>
      <li class="">
        <a class="nav-link" href="{{ route('kategori.index') }}"><i class="fas fa-chevron-circle-right"></i> <span>Kategori</span></a>
      </li>
      <li class="">
        <a class="nav-link" href="{{ route('berita.index') }}"><i class="fas fa-newspaper"></i> <span>Konten Web</span></a>
      </li>
      <li class="">
        <a class="nav-link" href="{{ route('pengurus.index') }}"><i class="fas fa-newspaper"></i> <span>Pengurus</span></a>
      </li>
      <li class="">
        <a class="nav-link" href="{{ route('biayapendaftaran.index') }}"><i class="fas fa-newspaper"></i> <span>Biaya Pendaftaran</span></a>
      </li>
      <li class="">
        <a class="nav-link" href="{{ route('kontak.index') }}"><i class="fas fa-newspaper"></i> <span>Kontak</span></a>
      </li>
      <li class="">
        <a class="nav-link" href="{{ route('artikel.index') }}"><i class="fas fa-newspaper"></i> <span>Artikel</span></a>
      </li>
      <li class="">
        <a class="nav-link" href="{{ route('profil.index') }}"><i class="fas fa-newspaper"></i> <span>Profil</span></a>
      </li>
      </li>
    </ul>
  </aside>
</div>