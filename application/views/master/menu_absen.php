 <nav class="sidebar-nav scroll-sidebar" data-simplebar>
     <ul id="sidebarnav">
         <!-- ============================= -->
         <!-- Home -->
         <!-- ============================= -->
         <li class="nav-small-cap">
             <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
             <span class="hide-menu">Menu Aplikasi</span>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link sidebar-link" href="<?php echo base_url() ?>" aria-expanded="false">
                 <span class="rounded-3">
                     <i class="ti ti-home"></i>
                 </span>
                 <span class="hide-menu"> Dashboard</span>
             </a>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                 <span class="d-flex">
                     <i class="ti ti-users"></i>
                 </span>
                 <span class="hide-menu">Master</span>
             </a>
             <ul aria-expanded="false" class="collapse first-level">
                 <li class="sidebar-item">
                     <a href="<?php echo base_url() ?>kelas" class="sidebar-link">
                         <div class="round-16 d-flex align-items-center justify-content-center">
                             <i class="ti ti-circle"></i>
                         </div>
                         <span class="hide-menu">Kelas</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a href="<?php echo base_url() ?>siswa" class="sidebar-link">
                         <div class="round-16 d-flex align-items-center justify-content-center">
                             <i class="ti ti-circle"></i>
                         </div>
                         <span class="hide-menu">Siswa</span>
                     </a>
                 </li>
             </ul>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                 <span class="d-flex">
                     <i class="ti ti-calendar"></i>
                 </span>
                 <span class="hide-menu">Absensi</span>
             </a>
             <ul aria-expanded="false" class="collapse first-level">
                 <li class="sidebar-item">
                     <a href="<?php echo base_url() ?>absensi_masuk" class="sidebar-link">
                         <div class="round-16 d-flex align-items-center justify-content-center">
                             <i class="ti ti-circle"></i>
                         </div>
                         <span class="hide-menu">Masuk</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a href="<?php echo base_url() ?>absensi_pulang" class="sidebar-link">
                         <div class="round-16 d-flex align-items-center justify-content-center">
                             <i class="ti ti-circle"></i>
                         </div>
                         <span class="hide-menu">Pulang</span>
                     </a>
                 </li>
                 <!--  <li class="sidebar-item">
          <a  href="" class="sidebar-link">
            <div class="round-16 d-flex align-items-center justify-content-center">
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Laporan</span>
          </a>
        </li> -->
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" aria-expanded="false">
                         <div class="round-16 d-flex align-items-center justify-content-center">
                             <i class="ti ti-circle"></i>
                         </div>
                         <span class="hide-menu">Laporan</span>
                     </a>
                     <ul aria-expanded="false" class="collapse two-level">
                         <li class="sidebar-item">
                             <a href="<?php echo base_url() ?>laporan" class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Rekapan Absensi</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="<?php echo base_url() ?>laporan_total" class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Rekapan Total</span>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>


         <li class="sidebar-item">
             <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                 <span class="d-flex">
                     <i class="ti ti-settings"></i>
                 </span>
                 <span class="hide-menu">Setting</span>
             </a>
             <ul aria-expanded="false" class="collapse first-level">
                 <li class="sidebar-item">
                     <a href="<?php echo base_url() ?>tabungan_saldo" class="sidebar-link">
                         <div class="round-16 d-flex align-items-center justify-content-center">
                             <i class="ti ti-circle"></i>
                         </div>
                         <span class="hide-menu">Pengguna</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a href="<?php echo base_url() ?>tabungan_transaksi" class="sidebar-link">
                         <div class="round-16 d-flex align-items-center justify-content-center">
                             <i class="ti ti-circle"></i>
                         </div>
                         <span class="hide-menu">Hak Akses</span>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="sidebar-item">
             <a class="sidebar-link sidebar-link" href="<?php echo base_url() ?>logout" aria-expanded="false">
                 <span class="rounded-3">
                     <i class="ti ti-logout"></i>
                 </span>
                 <span class="hide-menu"> Logout</span>
             </a>
         </li>
     </ul>
     <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
         <div class="d-flex">
             <div class="unlimited-access-title">
                 <h6 class="fw-semibold fs-4 mb-6 text-dark w-85" style="color: orange"></h6>
                 <!-- <button class="btn btn-primary fs-2 fw-semibold lh-sm">Homepage</button> -->
             </div>
             <div class="unlimited-access-img">
                 <img src="<?php echo base_url(); ?>dist/images/backgrounds/rocket.png" style="width: 100%" alt=""
                     class="img-fluid">
             </div>
         </div>
     </div>
 </nav>