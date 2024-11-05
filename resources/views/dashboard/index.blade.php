<x-layout title="Home">
    <div class="main-content " >
        <div class="container-fluid" >
            <div class="titlebody">
                <h5>Home</h5>
            </div>
            <div class="shadow-sm p-3 mb-4 bg-body-tertiary rounded">
                <div class="row g-3 needs-validation" >
                    <div class="col-md-12">
                        @if (Auth::check())
                            <strong style="font-size: 20px">Olá</strong><strong style="font-size: 20px"> 👋</strong> <strong style="font-size: 20px">{{ Auth::user()->name }},</strong> <strong style="font-size: 20px">Seja Bem Vindo</strong></p>
                        @endif
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card ">
                        <div class="card-body">            
                            <p class="card-text">Total de Clientes</p>
                            <p class="card-text">{{ $customerCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Total de Serviços</p>
                            <p class="card-text">{{ $serviceOrderCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Total de Pedidos</p>
                            <p class="card-text">{{ $order }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Total de Usuários</p>
                            <p class="card-text">{{ $usersCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
    </div> 

</x-layout>