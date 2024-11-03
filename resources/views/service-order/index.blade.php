<x-layout title="Ordem de Serviço">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Ordem de Serviço</h5></div>
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card ">
                        <div class="card-body">            
                            <p class="card-text">Cadastrar nova ordem de serviço</p>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Criar ordem
                            </button>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Criar nova ordem de serviço</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <form class="row g-3 needs-validation" novalidate action="{{ route('service-order.store') }}" method="post">
                                                @csrf
                                                <div class="col-md-12">
                                                    <label for="validationCustom01" class="form-label">Selecione o serviço</label>
                                                    <select type="name" name="service" class="form-select" id="validationCustom04" required>
                                                        <option selected disabled value="">
                                                            {{ $serviceregistrationtable->isEmpty() ? 'No Products Available' : 'Selecione o serviço' }}
                                                        </option>
                                                        <!-- Loop through the available products -->
                                                        @foreach($serviceregistrationtable as $services)
                                                            <option value="{{ $services->service_name }}">
                                                                {{ $services->service_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
        
                                                <div class="col-md-12">
                                                    <label for="validationCustom04" class="form-label">Selecione o cliente</label>
                                                    <select type="name" name="customer" class="form-select" id="validationCustom04" required>
                                                        
                                                        <option selected disabled value="">
                                                            {{ $customerTable->isEmpty() ? 'No Customer Available' : 'Selecione o cliente' }}
                                                        </option>
                                                        <!-- Loop through the available products -->
                                                        @foreach($customerTable as $customers)
                                                            <option value="{{ $customers->customer }}">
                                                                {{ $customers->customer }}
                                                            </option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom04" class="form-label">Preço do serviço R$</label>
                                                    <input type="number" name="price" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                                </div>
        
                                                <div class="col-md-4">
                                                    <label for="validationCustom04" class="form-label">Data da execução</label>
                                                    <input type="date" name="date" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                                </div>
        
                                                <div class="col-md-4">
                                                    <label for="validationCustom04" class="form-label">Hora da execução</label>
                                                    <input type="time" name="time" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                                </div>
        
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Observações</label>                        
                                                    <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-secondary" type="submit">Registrar</button>
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
                            <p class="card-text">Todas todas as ordem de serviços</p>
                            <a href="{{ url('/service-order-search') }}" class="btn btn-secondary">Pesquisa</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Lista de todas as ordem de serviços</p>
                            <a href="{{ url('/work-order-list') }}" class="btn btn-secondary">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <x-validation-alert />
            
        </div>  
    </div>  
</x-layout>