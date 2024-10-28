<x-layout title="Clientes">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Clientes</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
    
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Clientes
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
                                            <input type="name" name="customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
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
                                                <button class="btn btn-primary" type="submit">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <a href="{{ url('/customer-search') }}" class="btn btn-info">Pesquisa</a>
                </div>
            </div>
            
            <x-validation-alert />

            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row g-3 needs-validation" > 
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label"><strong>Clientes</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Whatsapp</strong></label>
                        </div>
                        <div class="col-md-5">
                            <label for="validationCustom04" class="form-label"><strong>E-mail</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><strong>Detalhes</strong></label>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($customerTable as $customer)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >                                    
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">{{ $customer->customer }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom04" class="form-label">{{ $customer->phone_number }}</label>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationCustom04" class="form-label">{{ $customer->email }}</label>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{ route('customer.details', $customer->id) }}" class="btn btn-info">Detalhes</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="py-4">
                {{ $customerTable->links() }}
            </div>
        </div>  
    </div>  
</x-layout>