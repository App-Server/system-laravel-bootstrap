<x-layout title="Entrada de estoque">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Entrada de estoque</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                    <form action="{{ route('stock-entry.store', $productregistration->id) }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Quantidade</label>
                                            <input type="number" name="quantity_entry" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Custo de compra R$</label>
                                            <input type="number" name="purchase_cost_entry" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Motivo de entrada</label>
                                            <select type="name" name="reason_for_purchase_entry" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value=""></option>
                                                <option>Compra</option>
                                                <option>Troca de produto</option>
                                                <option>Devolução</option>
                                                <option>Bonificação</option>
                                                <option>Estorno</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondary">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-validation-alert />
            <div class="col-md-12">
                <label for="validationCustomUsername" class="form-label"><strong>Produto:</strong> {{ $productregistration->product_name }}</label><br>
                <strong>Saldo do estoque: {{ $totalStockBalance }}</strong>
            </div>
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Estoque inicial</p>
                            <p class="card-text">{{ $totalQuantity }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Saída de estoque</p>
                            <p class="card-text">{{ $totalQuantityOutput }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Custo total</p>
                            <p class="card-text">R$ {{ number_format($totalCost, 3, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Custo médio</p>
                            <p class="card-text">R$ {{ number_format($averageCost, 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>                    
            <h5>Historico de movimentação</h5>
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row g-3 needs-validation" > 
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Ação</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Movimentação</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Entrada</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Saída</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Custo Unitário</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Custo total</strong></label>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($comments as $comment)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" > 
                                <div class="col-md-2">
                                    <label for="validationCustomUsername" class="form-label">{{ $comment->created_at->format('d/m/Y') }}</label>
                                </div>  
                                <div class="col-md-2">
                                    <label for="validationCustomUsername" class="form-label">{{ $comment->reason_for_purchase_entry }} {{ $comment->reason_of_exit_output }}</label>
                                </div>                                
                                <div class="col-md-2">
                                    <label for="validationCustomUsername" class="form-label">{{ $comment->quantity_entry }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustomUsername" class="form-label">{{ $comment->quantity_output }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustomUsername" class="form-label">R$ {{ $comment->purchase_cost_entry }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustomUsername" class="form-label">R$ {{ number_format($comment->quantity_entry * $comment->purchase_cost_entry, 2, ',', '.') }}</label>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>