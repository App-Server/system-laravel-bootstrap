<x-layout title="Customer Edit">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Customer Edit</h5></div>
            <x-validation-alert />
            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate action="{{ route('customer.update', $customer->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">customer</label>
                            <input type="name" name="customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $customer->customer }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">email</label>
                            <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $customer->email }}" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Taxpayer Identification Number</label>
                            <input type="number" name="taxpayer_identification_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $customer->taxpayer_identification_number }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Address</label>
                            <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $customer->address }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Postal</label>
                            <input type="number" name="postal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $customer->postal }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Phone Number</label>
                            <input type="number" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $customer->phone_number }}" required>
                        </div>
                                
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
</x-layout>