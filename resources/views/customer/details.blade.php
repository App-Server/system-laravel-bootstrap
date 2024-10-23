<x-layout title="Details Customer">
    <div class="main-content" >
        <div class="container-fluid">
            
            <div class="row g-3 needs-validation" > 
                <div class="col-md-11">
                    <h5>Detalhes do cadastro</h5>
                </div>

                <div class="col-md-1">
                    <label for="validationCustom04" class="form-label"><a href="{{ route('customer.edit', $customer->id) }}" ><i class="bi bi-pencil-square"></i></a></label>
                </div>
            </div>
            <br>
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
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong> Create: </strong>{{ $customer->created_at->format('d/m/Y') }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong> Update: </strong>{{ $customer->updated_at->format('d/m/Y') }}</label>
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
            {{--  --}}
        </div>  
    </div>
</x-layout>