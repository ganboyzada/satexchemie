
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper pb-2 pt-4">
                <a href="{{ route('admin.home') }}">
               
                <img height="45" class="for-dark" src="{{ asset('frontend/img/satex_logo_new.png') }}" alt="">
                <img height="45" class="for-light" src="{{ asset('frontend/img/satex_logo_new.png') }}" alt="">
               
                 {{--
                <h2>
                  natura
                  <i data-feather="feather"></i>
                </h2>
                 --}}
                
                </a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              
            </div>
            <div class="logo-icon-wrapper"><a href="{{ route('admin.home') }}"><img class="img-fluid" src="{{ asset('img/logo_natura_logo_c.png') }}" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="{{ route('admin.home') }}"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">Admin Panel</h6>
                      <p class="lan-2">Xoş gəlmisiniz!</p>
                    </div>
                  </li>
                  @php
                    use Illuminate\Support\Facades\Route;

                    $current_route = \Request::route()->getName();
                  @endphp

                  
                  
                  <li class="sidebar-list">
                    {{ $current_route }}
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.home') active @endif" href="{{ route('admin.home') }}"><i data-feather="home"></i><span class="lan-3">Ana Səhifə</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.infos') active @endif" href="{{ route('admin.infos') }}"><i data-feather="info"></i><span class="lan-3">Ümumi məlumatlar</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.categories') active @endif" href="{{ route('admin.categories') }}"><i data-feather="grid"></i><span class="lan-3">Kateqoriyalar</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.projects') active @endif" href="{{ route('admin.projects') }}"><i data-feather="package"></i><span class="lan-3">Məhsullar & Layihələr</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.services') active @endif" href="{{ route('admin.services') }}"><i data-feather="dollar-sign"></i><span class="lan-3">Xidmətlər</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.photos') active @endif" href="{{ route('admin.photos') }}"><i data-feather="image"></i><span class="lan-3">Qalereya</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.catalogues') active @endif" href="{{ route('admin.catalogues') }}"><i data-feather="book-open"></i><span class="lan-3">Kataloqlar</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.slides') active @endif" href="{{ route('admin.slides') }}"><i data-feather="image"></i><span class="lan-3">Slaydlar</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.inquiries') }}"><i data-feather="send"></i><span class="lan-3">Müraciətlər</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.partners') active @endif" href="{{ route('admin.partners') }}"><i data-feather="heart"></i><span class="lan-3">Partnyorlar</span></a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav @if($current_route =='admin.orders') active @endif" href="{{ route('admin.orders') }}"><i data-feather="shopping-bag"></i><span class="lan-3">Sifarişlər</span></a>
                  </li>
                  
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->