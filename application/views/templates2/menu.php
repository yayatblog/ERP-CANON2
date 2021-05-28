    <!-- <ul class="navbar-nav bg-primary sidebar sidebar-dark custom" id="accordionSidebar"> -->
    <ul class="navbar-nav sidebar" id="accordionSidebar" style="background-color:#BF00FF">
    

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <i class="fas fa-coins"></i>
        </div>
        <div class="sidebar-brand-text mx-2">ERP PAK CANON</div>
          <!-- <sup>CANON</sup> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('dashboard2');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active ml-3">
      <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="darkSwitch">
            <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Master:</h6>
            <a class="collapse-item" href="<?=base_url('barang2');?>">Barang</a>
			  <a class="collapse-item" href="<?=base_url('pengiriman2');?>">Pengiriman</a>
			 <a class="collapse-item" href="<?=base_url('daftar2');?>">Mitra</a>
            <a class="collapse-item" href="<?=base_url('team2');?>">Team</a>
            <a class="collapse-item" href="<?=base_url('profil2');?>">Profil Perusahaan</a>

          </div>
        </div>
      </li>

      <!-- <div class="jumbotron">
        <h1 class="display-3">Hello World</h1>
        <p class="lead-3">Lore</p>
      </div> -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
          aria-controls="collapseTwo">
          <!-- <i class="fas fa-fw fa-cog"></i> -->
          <i class="fas fa-fw fa-money-bill-alt"></i>
          <span>Weekly</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Weekly:</h6>
            <a class="collapse-item" href="<?=base_url('manager2');?>">Manager</a>
            <a class="collapse-item" href="<?=base_url('win2_manager2');?>">Win2 Manager</a>
            <a class="collapse-item" href="<?=base_url('asst_manager2');?>">Asst Manager</a>
            <a class="collapse-item" href="<?=base_url('top_lead2');?>">Top Leader</a>
            <a class="collapse-item" href="<?=base_url('top_asmen2');?>">Top Asmen</a>
            <a class="collapse-item" href="<?=base_url('hot_news2');?>">Hot News</a>
            <a class="collapse-item" href="<?=base_url('product_chart2');?>">Production Chart</a>
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
            <a class="collapse-item" href="<?=base_url('jurnalumum2');?>">Jurnal Umum</a>
            <a class="collapse-item" href="<?=base_url('neraca2');?>">Neraca</a>
            <a class="collapse-item" href="<?=base_url('bukubesar2');?>">Buku Besar</a>
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
            <a class="collapse-item" href="<?=base_url('juice2_4u');?>">Juice 4U</a>
            <a class="collapse-item" href="<?=base_url('juice_distri2');?>">Juice Distributor</a>
            <a class="collapse-item" href="<?=base_url('top_lead2');?>">Top Leader</a>
            <a class="collapse-item" href="<?=base_url('top_asmen2');?>">Top Asmen</a>
            <a class="collapse-item" href="<?=base_url('hot_news2');?>">Hot News</a>
            <a class="collapse-item" href="<?=base_url('product_chart2');?>">Production Chart</a>
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
            <a class="collapse-item" href="<?=base_url('penjualan2');?>">Penjualan</a>
            <a class="collapse-item" href="<?=base_url('manager2');?>">Manager P & L</a>
            <a class="collapse-item" href="<?=base_url('asst_manager2');?>">Asst Win2 Manager</a>
            <a class="collapse-item" href="<?=base_url('win2_manager2');?>">Win2 Manager</a>
            <a class="collapse-item" href="<?=base_url('deposit2');?>">Total Deposit</a>
            <a class="collapse-item" href="<?=base_url('stok2');?>">Stok</a>
            <a class="collapse-item" href="<?=base_url('kartu_stok2');?>">Kartu Stok</a>
            <a class="collapse-item" href="<?=base_url('adjust_stok2');?>">Adjuct Stok</a>
            <a class="collapse-item" href="<?=base_url('detail_stok2');?>">Detail Stok</a>

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
			 <a class="collapse-item" href="<?=base_url('users2/tambah');?>">Tambah User</a>
            <a class="collapse-item" href="<?=base_url('users2/changepassword');?>">Ganti Password</a>
            <a class="collapse-item" href="<?=base_url('history2');?>">History</a>
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
  
            <a class="collapse-item" href="<?=base_url('about2');?>">About</a>
          </div>
        </div>
      </li>
     

      <!-- Nav Item -Logout -->
      
  
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