<!-- Menu -->
  <!-- Sidenav Menu Start -->
  <div class="sidenav-menu">

      <!-- Brand Logo -->
      <a href="index.html" class="logo">
          <span class="logo-light">
              <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
              <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
          </span>

          <span class="logo-dark">
              <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
              <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
          </span>
      </a>

      <!-- Sidebar Hover Menu Toggle Button -->
      <button class="button-sm-hover">
          <i class="ri-circle-line align-middle"></i>
      </button>

      <!-- Full Sidebar Menu Close Button -->
      <button class="button-close-fullsidebar">
          <i class="ri-close-line align-middle"></i>
      </button>

      <div data-simplebar>

          <!--- Sidenav Menu -->
          <ul class="side-nav">
              <li class="side-nav-title">Navigation</li>

              <li class="side-nav-item">
                  <a href="index.html" class="side-nav-link">
                      <span class="menu-icon"><i class="ri-dashboard-3-line"></i></span>
                      <span class="menu-text"> Dashboard </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarReport" aria-expanded="false" aria-controls="sidebarReport"
                      class="side-nav-link">
                      <span class="menu-icon"><i class="ri-folder-chart-line"></i></span>
                      <span class="menu-text"> Reports </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarReport">
                      <ul class="sub-menu">
                          <li class="side-nav-item">
                              <a href="layouts-horizontal.html" class="side-nav-link">Demographics</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-detached.html" class="side-nav-link">Crime</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-full.html" class="side-nav-link">Socio</a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li class="side-nav-title">Records</li>

              <li class="side-nav-item">
                  <a href="{{url('/households')}}" class="side-nav-link">
                      <span class="menu-icon"><i class="ri-home-4-line"></i></span>
                      <span class="menu-text"> Registered Households </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="{{url('/households/pending')}}" class="side-nav-link">
                      <span class="menu-icon"><i class="ri-home-4-line"></i></span>
                      <span class="menu-text"> Pending Households </span>
                  </a>
              </li>

              <li class="side-nav-title">Admin Section</li>

              <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers"
                      class="side-nav-link">
                      <span class="menu-icon"><i class="ri-folder-chart-line"></i></span>
                      <span class="menu-text"> Users </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarUsers">
                      <ul class="sub-menu">
                          <li class="side-nav-item">
                              <a href="{{url('users')}}" class="side-nav-link">View Users</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="{{url('users/create')}}" class="side-nav-link">Add Users</a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarPermission" aria-expanded="false" aria-controls="sidebarPermission"
                      class="side-nav-link">
                      <span class="menu-icon"><i class="ri-folder-chart-line"></i></span>
                      <span class="menu-text"> Permissions </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarPermission">
                      <ul class="sub-menu">
                          <li class="side-nav-item">
                              <a href="layouts-horizontal.html" class="side-nav-link">View Permission</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-detached.html" class="side-nav-link">Add Permission</a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li class="side-nav-item">
                  <a href="{{url('/households/pending')}}" class="side-nav-link">
                      <span class="menu-icon"><i class="ri-home-4-line"></i></span>
                      <span class="menu-text"> Setting </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="{{url('/households/pending')}}" class="side-nav-link">
                      <span class="menu-icon"><i class="ri-home-4-line"></i></span>
                      <span class="menu-text"> Help & Support </span>
                  </a>
              </li>

              <!-- <li class="side-nav-title mt-2">
                  More
              </li>

              <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts"
                      class="side-nav-link">
                      <span class="menu-icon"><i class="ri-layout-2-line"></i></span>
                      <span class="menu-text"> Layouts </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarLayouts">
                      <ul class="sub-menu">
                          <li class="side-nav-item">
                              <a href="layouts-horizontal.html" class="side-nav-link">Horizontal</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-detached.html" class="side-nav-link">Detached</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-full.html" class="side-nav-link">Full View</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-fullscreen.html" class="side-nav-link">Fullscreen View</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-hover.html" class="side-nav-link">Hover Menu</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-compact.html" class="side-nav-link">Compact</a>
                          </li>
                          <li class="side-nav-item">
                              <a href="layouts-icon-view.html" class="side-nav-link">Icon View</a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"
                      aria-controls="sidebarMultiLevel" class="side-nav-link">
                      <span class="menu-icon"><i class="ri-share-line"></i></span>
                      <span class="menu-text"> Multi Level </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarMultiLevel">
                      <ul class="sub-menu">
                          <li class="side-nav-item">
                              <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
                                  aria-controls="sidebarSecondLevel" class="side-nav-link">
                                  <span class="menu-text"> Second Level </span>
                                  <span class="menu-arrow"></span>
                              </a>
                              <div class="collapse" id="sidebarSecondLevel">
                                  <ul class="sub-menu">
                                      <li class="side-nav-item">
                                          <a href="javascript: void(0);" class="side-nav-link">
                                              <span class="menu-text">Item 1</span>
                                          </a>
                                      </li>
                                      <li class="side-nav-item">
                                          <a href="javascript: void(0);" class="side-nav-link">
                                              <span class="menu-text">Item 2</span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                          <li class="side-nav-item">
                              <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false"
                                  aria-controls="sidebarThirdLevel" class="side-nav-link">
                                  <span class="menu-text"> Third Level </span>
                                  <span class="menu-arrow"></span>
                              </a>
                              <div class="collapse" id="sidebarThirdLevel">
                                  <ul class="sub-menu">
                                      <li class="side-nav-item">
                                          <a href="javascript: void(0);" class="side-nav-link">Item 1</a>
                                      </li>
                                      <li class="side-nav-item">
                                          <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false"
                                              aria-controls="sidebarFourthLevel" class="side-nav-link">
                                              <span class="menu-text"> Item 2 </span>
                                              <span class="menu-arrow"></span>
                                          </a>
                                          <div class="collapse" id="sidebarFourthLevel">
                                              <ul class="sub-menu">
                                                  <li class="side-nav-item">
                                                      <a href="javascript: void(0);" class="side-nav-link">
                                                          <span class="menu-text">Item 2.1</span>
                                                      </a>
                                                  </li>
                                                  <li class="side-nav-item">
                                                      <a href="javascript: void(0);" class="side-nav-link">
                                                          <span class="menu-text">Item 2.2</span>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
              </li> -->

          </ul>

          <div class="clearfix"></div>
      </div>
  </div>
  <!-- Sidenav Menu End -->

  
  <!-- Color Top line -->
  <div class="color-line"></div>

  <!-- Topbar Start -->
  <header class="app-topbar">
      <div class="page-container topbar-menu">
          <div class="d-flex align-items-center gap-2">

              <!-- Brand Logo -->
              <a href="index.html" class="logo">
                  <span class="logo-light">
                      <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
                      <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                  </span>

                  <span class="logo-dark">
                      <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
                      <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                  </span>
              </a>

              <!-- Sidebar Menu Toggle Button -->
              <button class="sidenav-toggle-button px-2">
                  <i class="ri-menu-5-line fs-24"></i>
              </button>

              <!-- Horizontal Menu Toggle Button -->
              <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                  <i class="ri-menu-5-line fs-24"></i>
              </button>

              <!-- Topbar Page Title -->
              <div class="topbar-item d-none d-md-flex">
                  
                  <div>
                      <h4 class="page-title fs-18 fw-bold mb-0">Starter</h4>
                      <ol class="breadcrumb m-0 mt-1 py-0">
                          <li class="breadcrumb-item"><a href="javascript: void(0);">Highdmin</a></li>
                          <li class="breadcrumb-item active">Pages</li>
                      </ol>
                  </div>
                  

                  
              </div>
          </div>

          <div class="d-flex align-items-center gap-2">

              <!-- Light/Dark Mode Button -->
              <div class="topbar-item d-none d-sm-flex">
                  <button class="topbar-link" id="light-dark-mode" type="button">
                      <i class="ri-moon-line fs-22"></i>
                  </button>
              </div>

              <!-- User Dropdown -->
              <div class="topbar-item nav-user">
                  <div class="dropdown">
                      <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown"
                          data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                          <img src="{{ Auth::user()->profile_photo_url }}" width="32" class="rounded-circle me-lg-2 d-flex"
                              alt="{{ Auth::user()->name }}">
                          <span class="d-lg-flex flex-column gap-1 d-none">
                              <h5 class="my-0">{{ Auth::user()->name }}</h5>
                          </span>
                          <i class="ri-arrow-down-s-line d-none d-lg-block align-middle ms-2"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                          <!-- item-->
                          <div class="dropdown-header noti-title">
                              <h6 class="text-overflow m-0">Welcome !</h6>
                          </div>

                          <!-- item-->
                          <a href="{{url('user/profile')}}" class="dropdown-item">
                              <i class="ri-profile-line me-1 fs-16 align-middle"></i>
                              <span class="align-middle">Profile</span>
                          </a>

                          <div class="dropdown-divider"></div>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item active fw-semibold text-danger">
                              <i class="ri-logout-box-line me-1 fs-16 align-middle"></i>
                              <span class="align-middle">Sign Out</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- Topbar End -->