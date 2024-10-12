<x-layout title="Order">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Order</h5></div>
            <div class="container-fluid">
                <br>
                <div class="card" style="width: 100%;">
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
                                            <a href="{{ route('order.details', $ordertable->id) }}" ><i class="bi bi-arrow-right-circle"></i></a>
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