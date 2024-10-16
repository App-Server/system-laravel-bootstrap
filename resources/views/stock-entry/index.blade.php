<x-layout title="Order">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Stock Entry</h5></div>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Stock Entry
            </button>
          
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Stock Entry</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <form class="row g-3 needs-validation" novalidate action="{{ route('stock-entry.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">product_name</label>
                                    <select name="product_name" class="form-select" id="validationCustom04" required>
                                       <option selected disabled value="">
                                            {{ $productregistration->isEmpty() ? 'No Products Available' : 'Select a Product' }}
                                        </option>
                                        <!-- Loop through the available products -->
                                        @foreach($productregistration as $products)
                                            <option value="{{ $products->product_name }}">
                                                {{ $products->product_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">quantity</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">product_cost</label>
                                    <input type="number" name="product_cost" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
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
                    <div class="card-header">
                        <div class="row g-3 needs-validation" > 
                            <div class="col-md-5">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i><strong>Product Name</strong></label>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i><strong>Quantity</strong></label>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-cash-coin"></i><strong>Cost</strong></label>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-currency-dollar"></i><strong>Total</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-eye"></i><strong>Details</strong></label>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($stockentrytable as $stockentry)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >
                                    <div class="col-md-5">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i>{{ $stockentry->product_name }}</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i>{{ $stockentry->quantity }}</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-cash-coin"></i>{{ $stockentry->product_cost }}</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-currency-dollar"></i>1.000,00</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="validationCustom04" class="form-label"><a href="#" ><i class="bi bi-arrow-right-circle"></i></a></label>
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