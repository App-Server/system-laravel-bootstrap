<div class="navbar-response">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div class="logo">
                <img src="{{ asset('css/asset/img.png') }}" alt="Girl in a jacket" width="150" height="30">
            </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <div class="logo">
                    <img src="{{ asset('css/asset/img.png') }}" alt="Girl in a jacket" width="150" height="30">
                </div>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashobard') ? 'active' : '' }}"><i class="bi bi-house-door"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/customer') }}" class="nav-link 
                    {{ Request::is('customer') ? 'active' : '' }} 
                    {{ Request::is('customer/*') ? 'active' : '' }} 
                    {{ Request::is('customer/*/edit') ? 'active' : '' }}">
                    <i class="bi bi-person-vcard"></i>Customer
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/service-order') }}" class="nav-link 
                    {{ Request::is('service-order') ? 'active' : '' }}
                    {{ Request::is('service-order/*') ? 'active' : '' }}">
                    <i class="bi bi-file-richtext"></i>Service Order
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/service-registration') }}" class="nav-link 
                    {{ Request::is('service-registration') ? 'active' : '' }}
                    {{ Request::is('service-registration/*') ? 'active' : '' }}">
                    <i class="bi bi-file-richtext-fill"></i>Service Registration
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/register-product') }}" class="nav-link {{ Request::is('register-product') ? 'active' : '' }}"><i class="bi bi-box-seam"></i>Product Registration</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/order') }}" class="nav-link 
                    {{ Request::is('order') ? 'active' : '' }}
                    {{ Request::is('order/*') ? 'active' : '' }}
                    {{ Request::is('order/*/edit') ? 'active' : '' }}"> 
                    <i class="bi bi-boxes"></i>Order
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/stock-entry') }}" class="nav-link {{ Request::is('stock-entry') ? 'active' : '' }}"><i class="bi bi-cart3"></i>Stock Entry</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/stock-output') }}" class="nav-link {{ Request::is('stock-output') ? 'active' : '' }}"><i class="bi bi-cart4"></i>Stock Output</a> 
                </li>
                <li class="nav-item">
                    <a href="{{ url('/user') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}"><i class="bi bi-file-person"></i>User</a> 
                </li>
                <li class="nav-item">
                    <a href="{{ url('/login') }}" class="nav-link"><i class="bi bi-box-arrow-right"></i>Logout</a>
                </li>
               
              </ul>
              
            </div>
          </div>
        </div>
    </nav>
</div>