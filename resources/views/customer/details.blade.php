<x-layout title="Details Customer">
    <div class="main-content" >
        <div class="container-fluid">
            
            <div class="row g-3 needs-validation" > 
                <div class="col-md-11">
                    <h5>Detalhes do cadastro</h5>
                </div>

                <div class="col-md-1">
                    <label for="validationCustom04" class="form-label"><a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-secondary">Editar</a></label>
                </div>
            </div>
            <br>
            <div class="card">
                <h5 class="card-header">{{ $customer->customer }}</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><strong>Endereço:</strong>{{ $customer->address }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><strong>Caixa postal:</strong>{{ $customer->postal }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><strong>CPF ou CNPJ:</strong>{{ $customer->taxpayer_identification_number }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><strong>Email:</strong>{{ $customer->email }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><strong>Whatsapp:</strong>{{ $customer->phone_number }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><strong> Create: </strong>{{ $customer->created_at->format('d/m/Y') }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><strong> Update: </strong>{{ $customer->updated_at->format('d/m/Y') }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('customer.index') }}" class="btn btn-dark">Volta</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            {{--  --}}
        </div>  
    </div>
</x-layout>