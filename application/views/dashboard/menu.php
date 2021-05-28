    <!-- <ul class="navbar-nav bg-primary sidebar sidebar-dark custom" id="accordionSidebar"> -->
    <ul class="navbar-nav sidebar sidebar-dark custom" id="accordionSidebar" style="background-color:#BF00FF">

    

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15"> -->
        <div class="sidebar-brand-icon">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <img src="<?= base_url('upload/product/IST Pak Canon.jpg');?>" alt="" width="50px" height="50px" style="border-radius:30px;margin:20px 0 0 2px;" class="img-circle">
          <i class="fas fa-data"></i>
        </div>
        <!-- <div class="sidebar-brand-text mx-2">ERP PAK CANON</div> -->
        <div class="sidebar-brand-text">INOVASI SINAR TERANG</div>
          <!-- <sup>CANON</sup> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active ml-3">
      <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="darkSwitch">
            <label class="custom-control-label text-white" for="darkSwitch">Dark Mode</label>
          </div>
        </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a href="<?=base_url('message');?>" class="nav-link collapsed" href="#" data-toggle="message" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-comments"></i>
          <span>Chat</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Master:</h6>
            <a class="collapse-item" href="<?=base_url('barang');?>">Barang</a>
            <a class="collapse-item" href="<?=base_url('kategori');?>">Kategori</a>
            <a class="collapse-item" href="<?=base_url('gudang');?>">Gudang</a>
            <a class="collapse-item" href="<?=base_url('karyawan');?>">Karyawan</a>
            <a class="collapse-item" href="<?=base_url('supplier');?>">Supplier</a>
            <a class="collapse-item" href="<?=base_url('daftar');?>">Daftar Mitra</a>
            <a class="collapse-item" href="<?=base_url('profil');?>">Profil Perusahaan</a>
            <!-- <a class="collapse-item" href="<?
            // =base_url('rajaongkir');?>">Tarif Kirim</a> -->
            <a class="collapse-item" href="<?=base_url('ekspedisi');?>">Daftar Ekspedisi</a>

          </div>
        </div>
      </li>

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-money-bill-alt"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Transaksi:</h6>
            <a class="collapse-item" href="<?=base_url('penerimaan');?>">Penerimaan Barang</a>
            <a class="collapse-item" href="<?=base_url('pengiriman');?>">Pengiriman Barang</a>
            <a class="collapse-item" href="<?=base_url('pendapatan');?>">Pendapatan Lain</a>
            <a class="collapse-item" href="<?=base_url('pengeluaran');?>">Pengeluaran</a>
            <a class="collapse-item" href="<?=base_url('hutang');?>">Hutang Piutang</a>
            <a class="collapse-item" href="<?=base_url('gaji');?>">Gaji Karyawan</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-book"></i>
          <span>Akutansi</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Akutansi:</h6>
            <a class="collapse-item" href="<?= base_url('account'); ?>">
              <i class="fas fa-project-diagram fa-sm fa-fw"></i>&nbsp;Chart of Account
            </a>
            <a class="collapse-item" href="<?= base_url('jurnalumum'); ?>">
              <i class="fas fa-book fa-sm fa-fw"></i>&nbsp;Jurnal Umum
            </a>
            <a class="collapse-item" href="<?= base_url('neraca'); ?>">
              <i class="fas fa-fw fa-balance-scale"></i>&nbsp;Neraca Lajur
            </a>
            <a class="collapse-item" href="<?= base_url('bukubesar'); ?>">
              <i class="fas fa-book-open fa-sm fa-fw"></i>&nbsp;Buku Besar
            </a>
            <a class="collapse-item" href="<?= base_url('manager'); ?>">
              <i class="fas fa-fw fa-user-cog"></i>&nbsp;Manager P&L
            </a>
            <a class="collapse-item" href="<?= base_url('asst_manager'); ?>">
              <i class="fas fa-user-secret fa-sm fa-fw"></i>&nbsp;Assistant Manager
            </a>
            <a class="collapse-item" href="<?= base_url('win2manager'); ?>">
              <i class="fas fa-fw fa-user-tie"></i>&nbsp;Win Win Manager
            </a>
        <!-- -->
            <a class="collapse-item" href="<?= base_url('deposit'); ?>">
              <i class="fas fa-fw fa-hand-holding-usd"></i>&nbsp;Total Deposit
            </a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-arrow-alt-circle-down"></i>
          <span>Bulletin</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu Bulletin:</h6>
            <a class="collapse-item" href="<?=base_url('juice_4u');?>">Juice 4U</a>
            <a class="collapse-item" href="<?=base_url('juice_distri');?>">Juice Distributor</a>
            <a class="collapse-item" href="<?=base_url('top_lead');?>">Top Leader</a>
            <a class="collapse-item" href="<?=base_url('top_asmen');?>">Top Asmen</a>
            <a class="collapse-item" href="<?=base_url('hot_news');?>">Hot News</a>
            <a class="collapse-item" href="<?=base_url('product_chart');?>">Production Chart</a>
            <a class="collapse-item" href="<?=base_url('sales_sum');?>">Sales Summary</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-list"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu Laporan:</h6>
            <a class="collapse-item" href="<?=base_url('manager/managerreport');?>">Manager</a>
            <a class="collapse-item" href="<?=base_url('asst_manager');?>">Asst Manager</a>
            <a class="collapse-item" href="<?=base_url('win2_manager');?>">Win2 Manager</a>
            <a class="collapse-item" href="<?=base_url('saving_overrides');?>">Saving Overrides</a>
            <a class="collapse-item" href="<?=base_url('gross_sale');?>">Gross Sales</a>
            <a class="collapse-item" href="<?=base_url('transfer_gudang');?>">Transfer Gudang</a>
            <a class="collapse-item" href="<?=base_url('return_gudang');?>">Retur Gudang</a>
            <a class="collapse-item" href="<?=base_url('return_supplier');?>">Retur Supplier</a>
            <a class="collapse-item" href="<?=base_url('stok_akhir');?>">Stok Akhir</a>
            <a class="collapse-item" href="<?=base_url('stok');?>">Stok</a>
            <a class="collapse-item" href="<?=base_url('kartu_stok');?>">Kartu Stok</a>
            <a class="collapse-item" href="<?=base_url('adjust_stok');?>">Adjuct Stok</a>
            <a class="collapse-item" href="<?=base_url('detail_stok');?>">Detail Stok</a>

          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>User Account</span>
        </a>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu User Account:</h6>
            <?php if ($this->session->userdata('id_role') == 1) : ?>
            <a class="collapse-item" href="<?=base_url('users');?>">User Login</a>
            <a class="collapse-item" href="<?=base_url('users/changepassword');?>">Ganti Password</a>
            <a class="collapse-item" href="<?=base_url('hakakses');?>">Hak Akses User</a>
            <a class="collapse-item" href="<?=base_url('activity');?>">Activity Record</a>
            <?php else : ?>
            <a class="collapse-item" href="<?=base_url('users/changepassword');?>">Ganti Password</a>
            <?php endif; ?>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-paperclip"></i>
          <span>Utility</span>
        </a>
        <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            
            <a class="collapse-item" href="<?=base_url('backup');?>">Maintenance Database</a>
            <a class="collapse-item" href="<?=base_url('about');?>">About</a>
          </div>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('auth/logout')?>">
          <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
          <span>Log Out</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>