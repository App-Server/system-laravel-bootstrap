<x-layout title="Place Order">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Place Order</h5></div>
            <x-validation-alert />
            <div class="card">
                
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate action="{{ route('order.store') }}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">person</label>
                            <select type="name" name="person" class="form-select" id="validationCustom04" required>
                                <option selected disabled value=""></option>
                                <option>Timothy M. Fitzgerald</option>
                                <option>Thelma J. Murray</option>
                                <option>Thelma J. Murray</option>
                                <option>Manuel M. Wilson</option>
                                <option>Jerry T. Slate</option>
                            </select>
                        </div>
                        <div class="col-md-6">
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
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>