<x-layout title="Details Customer">
    <div class="main-content" >
        <div class="container-fluid">
            <h5>Details Customer</h5>
            <div class="card">
                <h5 class="card-header"><i class="bi bi-border-all"></i>{{ $customer->customer }}</h5>
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>type_of_person:</strong>{{ $customer->type_of_person }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>address:</strong>{{ $customer->address }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>cnpj:</strong>{{ $customer->cnpj }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>cpf:</strong>{{ $customer->cpf }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>cep:</strong>{{ $customer->cep }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>telephone:</strong>{{ $customer->telephone }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> Create: </strong>{{ $customer->created_at }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> Update: </strong>{{ $customer->updated_at }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('customer.index') }}" class="btn btn-info btn-sm">back</a>
                            <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-success btn-sm" >Edit</a>
                            <br>                                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>  
    </div>
</x-layout>