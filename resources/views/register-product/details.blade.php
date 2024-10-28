<x-layout title="Detalhes do produto">
    <div class="main-content" >
        <div class="container-fluid">
            <div class="row g-3 needs-validation" > 
                <div class="col-md-11">
                    <h5>Detalhes do cadastro</h5>
                </div>
            </div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Entrada
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de estoque</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Quantidade</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Custo de compra R$</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Motivo de entrada</label>
                                            <select type="name" name="status" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value=""></option>
                                                <option>Compra</option>
                                                <option>Troca de produto</option>
                                                <option>Devolução</option>
                                                <option>Bonificação</option>
                                                <option>Estorno</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Saída</button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Saída de estoque</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Quem esta retirando a mercadoria?</label>
                                <select type="name" name="status" class="form-select" id="validationCustom04" required>
                                    <option selected disabled value=""></option>
                                    <option>Alex</option>
                                    <option>Marcia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Quantidade</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Motivo da saída</label>
                                <select type="name" name="status" class="form-select" id="validationCustom04" required>
                                    <option selected disabled value=""></option>
                                    <option>Uso interno</option>
                                    <option>Troca de produto</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Comfirmar saída</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

            <x-validation-alert />

            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card ">
                        <div class="card-body">            
                            <p class="card-text"><i class="bi bi-boxes"></i>Estoque Inicial</p>
                            <p class="card-text">--</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-box-seam"></i>Saída de estoque</p>
                            <p class="card-text">--</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-box2"></i>Saldo de estoque</p>
                            <p class="card-text">--</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-cash-coin"></i>Custo Médio</p>
                            <p class="card-text">R$</p>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="card">
                <h5 class="card-header"><i class="bi bi-boxes"></i>Produto:{{ $registerProducts->product_name }}</h5>
                <div class="card-body">
                    
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-chat-left-text"></i><strong>Descrição:</strong>{{ $registerProducts->description }}</label>                                            
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('register-product.edit', $registerProducts->id ) }}" class="btn btn-success">Editar</a>
                    </div>
                </div>
            </div>            
        </div>  
    </div>
</x-layout>