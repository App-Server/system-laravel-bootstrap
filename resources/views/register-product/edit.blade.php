<x-layout title="Register Product">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody">
                <h5>Product Register</h5>
            </div>
            <x-validation-alert />
            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate action="{{ route('register-product.update', $registerProducts->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="validationCustom01" value="{{ $registerProducts->product_name }}" required>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label"><i class="bi bi-box-seam"></i>Codigo produto</label>
                            <input type="number" name="product_id" class="form-control" id="validationCustom01" required>
                        </div>  
                        <div class="mb-3">
                            <label for="comments" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="comments" style="height: 150px" required>{{ $registerProducts->description }}</textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
