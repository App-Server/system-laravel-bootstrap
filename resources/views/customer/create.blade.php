<x-layout title="Cadastro de cliente">
    <div class="main-content" >
        <div class="container">
            <div class="titlebody">
                <h5>Cadastrar novo cliente</h5>
            </div>
            <x-validation-alert />
            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate action="{{ route('customer.store') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Nome completo</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require >
                        </div>

                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">E-mail</label>
                            <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                            
                        <div class="col-md-12">
                            <label for="validationCustom04" class="form-label">CPF ou CNPJ</label>
                            <input type="text" name="taxpayer_identification_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="validationCustom04" class="form-label">Endereço</label>
                            <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Caixa Postal</label>
                            <input type="text" name="postal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Whatsapp</label>
                            <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                            
                        <div class="modal-footer">
                            <div class="col-12">
                                <button class="btn btn-secondary" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>