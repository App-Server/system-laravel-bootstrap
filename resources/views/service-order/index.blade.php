<x-layout title="Ordem de Serviço">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Ordem de Serviço</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ordem de Serviço
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
                                                    {{ $customerTable->isEmpty() ? 'No Products Available' : 'Selecione o cliente' }}
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
                                            <button class="btn btn-dark" type="submit">Registrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <a href="{{ url('/service-order-search') }}" class="btn btn-secondary">Pesquisa</a>
                </div>
            </div>
            
            <x-validation-alert />
            
            <div class="row">
                @foreach ($serviceordertable as $serviceorder)
                    <div class="col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="validationCustom04" class="form-label"><strong>Cliente:</strong>{{ $serviceorder->customer }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom04" class="form-label"><strong>Serviço:</strong>{{ $serviceorder->service }}</label>
                                    </div>
                                    <div class="col-md-1 text-end">
                                        <a href="{{ route('service-order-comments.index', $serviceorder->id) }}" style="color: black">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="py-4">
                {{ $serviceordertable->links() }}
            </div>
        </div>  
    </div>  
</x-layout>