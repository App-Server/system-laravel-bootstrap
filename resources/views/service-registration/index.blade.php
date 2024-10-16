<x-layout title="Service Resgistration">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Service Registration<h5></div>
            
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Service Registration
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Service Registration</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <form class="row g-3 needs-validation" novalidate action="{{ route('service-registration.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Service Name</label>
                                <input type="name" name="service_name" class="form-control" id="validationCustom01" required>
                                </div>               
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <textarea type="name" name="description" class="form-control" id="comments" id="floatingTextarea2" style="height: 150px" ></textarea>
                                        <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Description</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        
            <br><br>
            <x-validation-alert />

            <div class="container-fluid">
                <br>
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <div class="row g-3 needs-validation" > 
                            <div class="col-md-5">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-file-earmark-text"></i><strong>Service Name</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Criado</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i></i><strong>Update</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-pencil-square"></i><strong>Edit</strong></label>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($serviceregistrationtable as $serviceregistration)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >                                    
                                    <div class="col-md-5">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-file-earmark-text"></i>{{ $serviceregistration->service_name  }}</label>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ $serviceregistration->created_at }}</label>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ $serviceregistration->updated_at }}</label>
                                    </div>

                                    <div class="col-md-1">
                                        <a href="{{ route('service-registration.edit', $serviceregistration->id) }}" class="btn btn-info">Edit</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{--  --}}
        </div> 
    </div>   
</x-layout>

