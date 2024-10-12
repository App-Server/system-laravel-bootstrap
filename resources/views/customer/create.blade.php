<x-layout title="Customer Registration">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Customer Registration</h5></div>
            <x-validation-alert />
            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate action="{{ route('customer.store') }}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">customer</label>
                            <input type="name" name="customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">email</label>
                            <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">type_of_person</label>
                            <select type="name" name="type_of_person" class="form-select" id="validationCustom04" required>
                                <option selected disabled value=""></option>
                                <option>personal</option>
                                <option>company</option>
                                
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">cnpj</label>
                            <input type="number" name="cnpj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">cpf</label>
                            <input type="number" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">address</label>
                            <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">cep</label>
                            <input type="number" name="cep" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">telephone</label>
                            <input type="number" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                                
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
            {{--  --}}
        </div>
    </div>
</x-layout>