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
                <h5 class="card-header">{{ $customer->name }}</h5>
                <div class="card-body">
                    <div class="row" >
                        <div class="col-md-12">
                            <p><strong>Endereço:</strong> {{ $customer->address }}</p>                                          
                        </div>
                        <div class="col-md-12">
                            <p><strong>Caixa postal:</strong> {{ $customer->postal }}</p>                                          
                        </div>
                        <div class="col-md-12">
                            <p><strong>CPF ou CNPJ:</strong> {{ $customer->taxpayer_identification_number }}</p>                                         
                        </div>
                        <div class="col-md-12">
                            <p><strong>Email:</strong> {{ $customer->email }}</p>                                           
                        </div>
                        <div class="col-md-12">
                            <p><strong>Whatsapp:</strong> {{ $customer->phone_number }}</p>                                        
                        </div>
                        <div class="col-md-12">
                            <p><strong> Create: </strong> {{ $customer->created_at->format('d/m/Y') }}</p>                                           
                        </div>
                        <div class="col-md-12">
                            <p><strong> Update: </strong> {{ $customer->updated_at->format('d/m/Y') }}</p>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ route('customer.index') }}" class="btn btn-secondary">Volta</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>  
    </div>
</x-layout>