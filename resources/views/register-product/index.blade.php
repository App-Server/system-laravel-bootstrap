<x-layout title="Cadastro de produto">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Cadastro de produto<h5></div>
                <div class="row g-3 needs-validation" >
                    <div class="col-md-12">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Cadastra produto
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar novo produto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <form class="row g-3 needs-validation" novalidate action="{{ route('register-product.store') }}" method="post">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="validationCustom01" class="form-label">Nome do produto</label>
                                                <input type="name" name="product_name" class="form-control" id="validationCustom01" required>
                                            </div>                
                                            <div class="mb-3">
                                                <label for="floatingTextarea2">Descrição</label>
                                                <textarea type="name" name="description" class="form-control" id="comments" id="floatingTextarea2" style="height: 150px" required></textarea>
                                            </div>
                                            <div class="col-12">
                                            <button class="btn btn-secondary" type="submit">Cadastrar</button>
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
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><strong>Id</strong></label>
                            </div>
                            <div class="col-md-10">
                                <label for="validationCustom04" class="form-label"><strong>Produto</strong></label>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($registerProducts as $registerProduct)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >
                                    <div class="col-md-1">
                                        <label for="validationCustom04" class="form-label">{{ $registerProduct->id }}</label>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="validationCustomUsername" class="form-label">{{ $registerProduct->product_name }}</label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="{{ route('stock-entry.index', $registerProduct->id) }}" class="btn btn-secondary">Entrada de estoque</a>                                        
                                            <a href="{{ route('stock-output.index', $registerProduct->id) }}" class="btn btn-secondary">Saída de estoque</a>
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

