<x-layout title="Register Product">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Product Register<h5></div>
                <div class="row g-3 needs-validation" >
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Product Register
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Product Register</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <form class="row g-3 needs-validation" novalidate action="{{ route('register-product.store') }}" method="post">
                                            @csrf
                                            <div class="col-md-12">
                                            <label for="validationCustom01" class="form-label">Product Name</label>
                                            <input type="name" name="product_name" class="form-control" id="validationCustom01" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label">Category</label>
                                                <select type="name" name="category" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value=""></option>
                                                <option>Tinta</option>
                                                
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label">Subcategory</label>
                                            <select type="name" name="subcategory" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value=""></option>
                                                <option>Tinta Acrílica </option>
                                                
                                            </select>
                                            </div>                    
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <textarea type="name" name="description" class="form-control" id="comments" id="floatingTextarea2" style="height: 150px" required></textarea>
                                                    <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Description</label>
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
                    </div> 
                </div>

                <x-validation-alert />

                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <div class="row g-3 needs-validation" > 
                            <div class="col-md-11">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i><strong>Product Name</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-pencil-square"></i></label>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($registerProducts as $registerProduct)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >
                                    
                                    <div class="col-md-11">
                                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-box-seam"></i>{{ $registerProduct->product_name }}</label>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{ route('register-product.edit', $registerProduct->id ) }}"><i class="bi bi-pencil-square"></i></a>
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

