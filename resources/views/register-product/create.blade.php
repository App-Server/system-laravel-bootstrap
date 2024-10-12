<x-layout title="Register Product">

    <div class="container">
        <div class="titlebody"><h3>Register Product<h3></div>
          <div class="alert alert-info" role="alert">
            A simple info alert—check it out!
          </div>
        <x-validation-alert />
        <div class="card">
            <div class="card-body">
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
                            <textarea type="name" name="description" class="form-control" id="comments" id="floatingTextarea2" style="height: 150px" ></textarea>
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

</x-layout>