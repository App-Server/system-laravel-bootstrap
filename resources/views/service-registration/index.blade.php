<x-layout title="Gerenciar Serviços">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Lista de Serviços<h5></div>
            
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Criar Serviço
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Novo Serviço</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <form class="row g-3 needs-validation" novalidate action="{{ route('service-registration.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Nome do Serviço</label>
                                <input type="name" name="service_name" class="form-control" id="validationCustom01" required>
                                </div>               
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <textarea type="name" name="description" class="form-control" id="comments" id="floatingTextarea2" style="height: 150px" ></textarea>
                                        <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                <button class="btn btn-dark" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        
            
            <x-validation-alert />

            
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row g-3 needs-validation" > 
                        <div class="col-md-5">
                            <label for="validationCustom04" class="form-label"><strong>Service Name</strong></label>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"><strong>Criado</strong></label>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"><strong>Update</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-folder-symlink"></i></label>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($serviceregistrationtable as $serviceregistration)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >                                    
                                <div class="col-md-5">
                                    <label for="validationCustom04" class="form-label">{{ $serviceregistration->service_name  }}</label>
                                </div>
                                
                                <div class="col-md-3">
                                    <label for="validationCustom04" class="form-label">{{ $serviceregistration->created_at->format('d/m/Y') }}</label>
                                </div>

                                <div class="col-md-3">
                                    <label for="validationCustom04" class="form-label">{{ $serviceregistration->updated_at->format('d/m/Y') }}</label>
                                </div>

                                <div class="col-md-1">
                                    <a href="{{ route('service-registration.edit', $serviceregistration->id) }}" style="color: black">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div> 
    </div>   
</x-layout>

