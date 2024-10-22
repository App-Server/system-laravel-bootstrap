<x-layout title="Ordem de Serviço">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Ordem de Serviço</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                            <button class="btn btn-primary" type="submit">Registrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <a href="{{ url('/service-order-search') }}" class="btn btn-info">Pesquisa</a>
                </div>
            </div>
            
            <x-validation-alert />
            
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row g-3 needs-validation" > 
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-person-check"></i><strong>Cliente</strong></label>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i><strong>Ordem de serviço</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Data da execução</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-alarm"></i><strong>Hora da execução</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-folder-symlink"></i></label>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($serviceordertable as $serviceorder)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >                                    
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label"><i class="bi bi-person-check"></i>{{ $serviceorder->customer  }}</label>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i>{{ $serviceorder->service }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ $serviceorder->date }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom04" class="form-label"><i class="bi bi-alarm"></i>{{ $serviceorder->time }}</label>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{ route('service-order-comments.index', $serviceorder->id) }}"><i class="bi bi-folder-symlink"></i></a>                                       
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="py-4">
                {{ $serviceordertable->links() }}
            </div>
        </div>  
    </div>  
</x-layout>