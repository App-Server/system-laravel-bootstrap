<x-layout title="Clientes">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody">
                <h5>Área de gestão para cliente</h5>
            </div>
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card ">
                        <div class="card-body">            
                            <p class="card-text">Cadastro de novos clientes</p>
                            <a href="{{ url('/customer/create') }}" class="btn btn-secondary">Cadastrar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Pesquisa de clientes por CPF ou CNPJ</p>
                            <a href="{{ url('/customer-search') }}" class="btn btn-secondary">Pesquisa</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Lista de todos os clientes</p>
                            <a href="{{ url('/customer-list') }}" class="btn btn-secondary">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>

            <x-validation-alert />

        </div>  
    </div>  
</x-layout>