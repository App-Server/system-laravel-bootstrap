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
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Cadastrar
                            </button>
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" >
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar novo cliente</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3 needs-validation" novalidate action="{{ route('customer.store') }}" method="post">
                                                @csrf
                                                <div class="col-md-12">
                                                    <label for="validationCustom01" class="form-label">Nome completo</label>
                                                    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                                                </div>
        
                                                <div class="col-md-12">
                                                    <label for="validationCustom01" class="form-label">E-mail</label>
                                                    <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                    
                                                <div class="col-md-12">
                                                    <label for="validationCustom04" class="form-label">CPF ou CNPJ</label>
                                                    <input type="text" name="taxpayer_identification_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                        
                                                <div class="col-md-12">
                                                    <label for="validationCustom04" class="form-label">Endereço</label>
                                                    <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                        
                                                <div class="col-md-6">
                                                    <label for="validationCustom04" class="form-label">Caixa Postal</label>
                                                    <input type="text" name="postal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                        
                                                <div class="col-md-6">
                                                    <label for="validationCustom04" class="form-label">Whatsapp</label>
                                                    <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                    
                                                <div class="modal-footer">
                                                    <div class="col-12">
                                                        <button class="btn btn-secondary" type="submit">Cadastrar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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