<x-layout title="Stock Output">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Stock Output</h5></div>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Stock Output
            </button>
          
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Stock Output</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <form class="row g-3 needs-validation" novalidate action="{{ route('stock-output.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
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
                                <div class="col-md-10">
                                    <label for="validationCustom01" class="form-label">product_name</label>
                                    <select type="name" name="product_name" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value=""></option>
                                        <option>Tinta Acrílicar Master Profissional Branco Neve 20L - Coral</option>
                                        <option>Pintura Impermeável Vedapren Parede Branco 18kg - Vedacit</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom04" class="form-label">quantity</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                    <div class="card-header">
                        <div class="row g-3 needs-validation" > 
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i><strong>Product Name</strong></label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i><strong>Quantity</strong></label>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Date Output</strong></label>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($stockoutputtable as $stockoutput)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >
                                    <div class="col-md-6">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i>{{ $stockoutput->product_name  }}</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i>{{ $stockoutput->quantity }}</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ $stockoutput->created_at }}</label>
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