<x-layout title="Details Customer">
    <div class="main-content" >
        <div class="container-fluid">
            
            <div class="row g-3 needs-validation" > 
                <div class="col-md-11">
                    <h5>Details Customer</h5>
                </div>

                <div class="col-md-1">
                    <label for="validationCustom04" class="form-label"><a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-outline-success">Edit</a></label>
                </div>
            </div>
            <br>
            <div class="card">
                <h5 class="card-header"><i class="bi bi-border-all"></i>{{ $customer->customer }}</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>Address:</strong>{{ $customer->address }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>Taxpayer Identification Number:</strong>{{ $customer->taxpayer_identification_number }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>Phone Number:</strong>{{ $customer->phone_number }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> Create: </strong>{{ $customer->created_at }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> Update: </strong>{{ $customer->updated_at }}</label>
                            <br>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('customer.index') }}" class="btn btn-info ">back</a>
                            
                        </div>
                            <br>                                            
                        </div>
                    </div>
                    
                </div>
            </div>
            {{--  --}}
        </div>  
    </div>
</x-layout>