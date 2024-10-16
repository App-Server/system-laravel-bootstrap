<x-layout title="Customer">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Customer</h5></div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                new customer
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New customer</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" novalidate action="{{ route('customer.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Customer</label>
                                    <input type="name" name="customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                                </div>

                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">E-mail</label>
                                    <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                       
                                <div class="col-md-12">
                                    <label for="validationCustom04" class="form-label">Taxpayer Identification Number</label>
                                    <input type="number" name="taxpayer_identification_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
        
                                <div class="col-md-12">
                                    <label for="validationCustom04" class="form-label">Address</label>
                                    <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
        
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Postal</label>
                                    <input type="number" name="postal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
        
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Phone Number</label>
                                    <input type="number" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                     
                                <div class="modal-footer">
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </div>
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
                                <label for="validationCustom04" class="form-label"><i class="bi bi-person-vcard"></i><strong>Customer</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-telephone"></i><strong>Phone Number</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-envelope-at"></i><strong>E-mail</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-eye"></i><strong>Details</strong></label>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($customerTable as $customer)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >                                    
                                    <div class="col-md-5">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-person-vcard"></i>{{ $customer->customer }}</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-telephone"></i>{{ $customer->phone_number }}</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-envelope-at"></i>{{ $customer->email }}</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="validationCustom04" class="form-label"><a href="{{ route('customer.details', $customer->id) }}" class="btn btn-info">Info</a></label>
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