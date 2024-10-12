<div class="navbar-response">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#">Logistics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/dashboard') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Product
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/register-product') }}">Register Product</a></li>
                <li><a class="dropdown-item" href="{{ url('/product-purchase-record') }}">Register Buy</a></li>
                <li><a class="dropdown-item" href="{{ '/order' }}">Order</a></li>
                <li><a class="dropdown-item" href="{{ url('/material-output/create') }}">Material Output</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Fleet
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Delivery</a></li>
                <li><a class="dropdown-item" href="#">Register Truck</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Employee
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Employee</a></li>
                <li><a class="dropdown-item" href="#">Register Driver</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Setting
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">...</a></li>
                <li><a class="dropdown-item" href="#">...</a></li>
                </ul>
            </li>
            </ul>
            <form class="d-flex" role="search">
                <div class="nav-item dropdown">
                
                <a class="dropdown-item" href="#" >Logout</a>
        
                </div>
            </form>
        </div>
        </div>
    </nav>
</div>