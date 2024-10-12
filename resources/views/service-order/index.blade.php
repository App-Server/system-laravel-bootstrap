<x-layout title="Service Order">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Service Order</h5></div>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Service Order
            </button>
          
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Service Order</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <form class="row g-3 needs-validation" novalidate action="{{ route('service-order.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">service_name</label>
                                    <select type="name" name="service_name" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value=""></option>
                                        <option>Conserto</option>
                                        <option>Construção</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">service_cost</label>
                                    <input type="number" name="service_cost" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">Observations</label>
                                    <div class="form-floating">                                        
                                        <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                        <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Observation (Optional)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
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
                    <ul class="list-group list-group-flush">
                        @foreach ($serviceordertable as $serviceorder)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >                                    
                                    <div class="col-md-6">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i>{{ $serviceorder->service_name  }}</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i>{{ $serviceorder->service_cost }}</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ $serviceorder->created_at }}</label>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>  
    </div>  
</x-layout>