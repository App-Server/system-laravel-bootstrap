<x-layout title="Order">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Order</h5></div>
            <div class="container-fluid">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    New Order
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Order</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" novalidate action="{{ route('order.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">person</label>
                                    <select type="name" name="person" class="form-select" id="validationCustom04" required>
                                        <<option selected disabled value="">
                                            {{ $users->isEmpty() ? 'No User Available' : 'Select a User' }}
                                        </option>
                                        <!-- Loop through the available products -->
                                        @foreach($users as $user)
                                            <option value="{{ $user->name }}">
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Product Name</label>
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
                                
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">quantity</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
        
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">delivery_time</label>
                                    <input type="date" name="delivery_time" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                </div>
        
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">priority</label>
                                    <select type="name" name="priority" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value=""></option>
                                        <option>urgent</option>
                                        <option>low</option>
                                        <option>average</option>
                                    </select>
                                </div>
                                        
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">Observations</label>
                                    <div class="form-floating">                                        
                                        <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                        <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Observation</label>
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    </div>
                </div>
                <br><br>
                <x-validation-alert />
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <div class="row g-3 needs-validation" > 
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i><strong>Product Name</strong></label>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i><strong>Quantity</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-person"></i><strong>Person</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-person"></i><strong>Details</strong></label>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($orderstable as $ordertable)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >
                                    <div class="row g-3 needs-validation" >                                    
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i>{{ $ordertable->product_name }}</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i>{{ $ordertable->quantity }}</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label"><i class="bi bi-person"></i>{{ $ordertable->person }}</label>
                                        </div>
                                        <div class="col-md-1">
                                            {{-- <a href="{{ route('order.details', $ordertable->id) }}" ><i class="bi bi-arrow-right-circle"></i></a> --}}
                                            <label for="validationCustomUsername" ><a href="{{ route('comments.index', $ordertable->id) }}"class="btn btn-info">Info</a></label>
                                        </div>
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