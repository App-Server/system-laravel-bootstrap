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

  <div class="sidebar ">

    <div class="sidebar-grid">

      <div class="logo">
        <img src="{{ asset('css/asset/img.png') }}" alt="Girl in a jacket" width="230" height="60">
      </div>     

      <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashobard') ? 'active' : '' }}"><i class="bi bi-house-door"></i>Home</a>

      <a href="{{ url('/customer') }}" class="nav-link 
        {{ Request::is('customer') ? 'active' : '' }} 
        {{ Request::is('customer/*') ? 'active' : '' }} 
        {{ Request::is('customer-search') ? 'active' : '' }} 
        {{ Request::is('customer/*/edit') ? 'active' : '' }}">
        <i class="bi bi-person-vcard"></i>Clientes
      </a>

      <a href="{{ url('/service-order') }}" class="nav-link 
        {{ Request::is('service-order') ? 'active' : '' }}
         {{ Request::is('service-order-search') ? 'active' : '' }}
        {{ Request::is('service-order/*') ? 'active' : '' }}">
        <i class="bi bi-file-richtext"></i>Ordem de Serviço
      </a>
      
      <a href="{{ url('/product_request') }}" class="nav-link 
        {{ Request::is('product_request') ? 'active' : '' }}
        {{ Request::is('product_request/*') ? 'active' : '' }}
        {{ Request::is('product_request-search') ? 'active' : '' }}
        {{ Request::is('product_request/*/edit') ? 'active' : '' }}"> 
        <i class="bi bi-boxes"></i>Pedidos
      </a>

      <a href="{{ url('/stock-entry') }}" class="nav-link 
        {{ Request::is('stock-entry/*') ? 'active' : '' }}
        {{ Request::is('stock-entry') ? 'active' : '' }}">
        <i class="bi bi-cart3"></i>Entrada de Estoque
      </a>

      <a href="{{ url('/stock-output') }}" class="nav-link 
        {{ Request::is('stock-output/*') ? 'active' : '' }}
        {{ Request::is('stock-output') ? 'active' : '' }}">
        <i class="bi bi-cart4"></i>Saída de Estoque
      </a> 

      <a href="{{ url('/inventory') }}" class="nav-link {{ Request::is('inventory') ? 'active' : '' }}"><i class="bi bi-box-fill"></i>Inventário</a>

      <a href="{{ url('/setting') }}" class="nav-link
        {{ Request::is('setting') ? 'active' : '' }}
        {{ Request::is('user') ? 'active' : '' }}
        {{ Request::is('service-registration') ? 'active' : '' }}
        {{ Request::is('user') ? 'active' : '' }}
        {{ Request::is('register-product/*/edit') ? 'active' : '' }}
        {{ Request::is('service-registration/*/edit') ? 'active' : '' }}
        {{ Request::is('register-product') ? 'active' : '' }}" >
      <i class="bi bi-gear"></i>Configurações
    </a>

    <a href="{{ url('/login') }}" class="nav-link"><i class="bi bi-box-arrow-right"></i>Sair</a>

    </div>
  </div>

  <x-navigation />

  <div class="main-content">
      {{ $slot }}
  </div>
    
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>