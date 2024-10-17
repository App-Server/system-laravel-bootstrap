<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Default Title' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <div class="sidebar">
    <div class="sidebar-grid">
      <div class="logo">
        <h3 class="cms">System</h3>
      </div>        
      <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashobard') ? 'active' : '' }}"><i class="bi bi-house-door"></i>Home</a>
      {{-- <a href="{{ url('/customer/create') }}" class="nav-link {{ Request::is('customer/create') ? 'active' : '' }}"><i class="bi bi-person-check"></i>Create customer</a> --}}
      
      <a href="{{ url('/customer') }}" class="nav-link 
        {{ Request::is('customer') ? 'active' : '' }} 
        {{ Request::is('customer/*') ? 'active' : '' }} 
        {{ Request::is('customer/*/edit') ? 'active' : '' }}">
        <i class="bi bi-person-vcard"></i>Customer
      </a>

      <a href="{{ url('/service-order') }}" class="nav-link 
        {{ Request::is('service-order') ? 'active' : '' }}
        {{ Request::is('service-order/*') ? 'active' : '' }}">
        <i class="bi bi-file-richtext"></i>Service Order
      </a>
      <a href="{{ url('/service-registration') }}" class="nav-link {{ Request::is('service-registration') ? 'active' : '' }}"><i class="bi bi-file-richtext-fill"></i>Service Registration</a>        
      <a href="{{ url('/register-product') }}" class="nav-link {{ Request::is('register-product') ? 'active' : '' }}"><i class="bi bi-box-seam"></i>Product Registration</a>
      {{-- <a href="{{ url('/order/create') }}" class="nav-link {{ Request::is('order') ? 'active' : '' }}"><i class="bi bi-boxes"></i>Place Order</a> --}}
      
      <a href="{{ url('/order') }}" class="nav-link 
        {{ Request::is('order') ? 'active' : '' }}
        {{ Request::is('order/*') ? 'active' : '' }}
        {{ Request::is('order/*/edit') ? 'active' : '' }}"> 
        <i class="bi bi-boxes"></i>Order
      </a>

      <a href="{{ url('/stock-entry') }}" class="nav-link {{ Request::is('stock-entry') ? 'active' : '' }}"><i class="bi bi-cart3"></i>Stock Entry</a>
      <a href="{{ url('/stock-output') }}" class="nav-link {{ Request::is('stock-output') ? 'active' : '' }}"><i class="bi bi-cart4"></i>Stock Output</a> 
      {{-- <a href="{{ url('/employees') }}" class="nav-link {{ Request::is('employees') ? 'active' : '' }}"><i class="bi bi-border-all"></i>Employees</a>  --}}
      <a href="{{ url('/user') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}"><i class="bi bi-file-person"></i>User</a>        
    </div>
  </div>


  <x-navigation />

  <div class="main-content" >
      {{ $slot }}
  </div>

    
  <br><br><br><br>
    
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>