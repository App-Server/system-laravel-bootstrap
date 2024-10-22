<x-layout title="Pesquisa de clientes">
    <div class="main-content">
        <div class="container-fluid">
            <div class="titlebody"><h5>Pesquisa de clientes</h5></div>
            <div class="col-md-3">
                <form class="d-flex" action="{{ route('customer-search.search') }}" method="POST">
                    @csrf
                    <input class="form-control me-2" name="taxpayer_identification_number" type="search" placeholder="CPF ou CNPJ" aria-label="Search">
                    <button class="btn btn-success" type="submit">Pesquisa</button>
                </form>
            </div>
            <hr>
            <div class="search-result">
                @if(isset($customer))
                    <div class="card">
                        <h5 class="card-header"><i class="bi bi-person"></i>{{ $customer->customer }}</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><i class="bi bi-building"></i><strong>Endereço:</strong>{{ $customer->address }}</label>
                                    <br>                                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><i class="bi bi-mailbox-flag"></i><strong>Caixa postal:</strong>{{ $customer->postal }}</label>
                                    <br>                                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><i class="bi bi-123"></i><strong>CPF ou CNPJ:</strong>{{ $customer->taxpayer_identification_number }}</label>
                                    <br>                                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><i class="bi bi-envelope-at"></i><strong>Email:</strong>{{ $customer->email }}</label>
                                    <br>                                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><i class="bi bi-whatsapp"></i><strong>Whatsapp:</strong>{{ $customer->phone_number }}</label>
                                    <br>                                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong> Create: </strong>{{ $customer->created_at }}</label>
                                    <br>                                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong> Update: </strong>{{ $customer->updated_at }}</label>
                                    <br>                                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('customer.index') }}" class="btn btn-info "><i class="bi bi-arrow-left-circle"></i>Volta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <li>No results found.</li>
                @endif
            </div>
        </div>
    </div>
</x-layout>
