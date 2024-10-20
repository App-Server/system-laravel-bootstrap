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

                        <!-- Product Name Field -->
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="validationCustom01" value="{{ $registerProducts->product_name }}" required>
                        </div>

                        <!-- Category Field -->
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Category</label>
                            <select name="category" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Select a Category</option>
                                
                                @if(isset($registerproductstable) && is_iterable($registerproductstable))
                                    @foreach($registerproductstable as $product)
                                        <option value="{{ $product->category }}" {{ $product->category == $registerProducts->category ? 'selected' : '' }}>
                                            {{ $product->category }}
                                        </option>
                                    @endforeach
                                @endif                            
                            </select>
                        </div>

                        <!-- Subcategory Field -->
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Subcategory</label>
                            <select name="subcategory" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Select a Subcategory</option>
                                
                                @if(isset($registerproductstable) && is_iterable($registerproductstable))
                                    @foreach($registerproductstable as $product)
                                        <option value="{{ $product->subcategory }}" {{ $product->subcategory == $registerProducts->subcategory ? 'selected' : '' }}>
                                            {{ $product->subcategory }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <label for="comments" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="comments" style="height: 150px" required>{{ $registerProducts->description }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
