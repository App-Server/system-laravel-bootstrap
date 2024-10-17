<x-layout title="Service Order">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Service Order</h5></div>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                    <label for="validationCustom01" class="form-label">Service</label>
                                    <select type="name" name="service" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">
                                            {{ $serviceregistrationtable->isEmpty() ? 'No Products Available' : 'Select a Product' }}
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
                                    <label for="validationCustom04" class="form-label">Customer</label>
                                    <select type="name" name="customer" class="form-select" id="validationCustom04" required>
                                        
                                        <option selected disabled value="">
                                            {{ $customerTable->isEmpty() ? 'No Products Available' : 'Select a Customer' }}
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
                                    <label for="validationCustom04" class="form-label">price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">Time</label>
                                    <input type="time" name="time" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">Observations</label>
                                    <div class="form-floating">                                        
                                        <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                        <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Observation (Optional)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Register Service</button>
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
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-person-check"></i><strong>Customer</strong></label>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i><strong>Service</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Date</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-alarm"></i><strong>Time</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-eye"></i><strong>Info</strong></label>
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
                                    <label for="validationCustomUsername" ><a href="{{ route('service-order-comments.index', $serviceorder->id) }}" class="btn btn-info">Info</a></label>                                        
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        
        </div>  
    </div>  
</x-layout>