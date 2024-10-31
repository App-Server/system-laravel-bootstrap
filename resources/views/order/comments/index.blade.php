<x-layout title="Atualizar pedido">
    <div class="main-content" >
        <div class="container-fluid">
            
            <div class="titlebody">
                <h5>Atualizar pedido</h5>
            </div>
            
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Atualizar status
            </button>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Satus</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>  
                        <div class="modal-body">    
                            <form action="{{ route('comments.store', $order->id) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">Escolhar o status</label>
                                    <select type="name" name="status" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value=""></option>
                                        <option>🟢 Aprovado</option>
                                        <option>🔴 Negado</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea2">Observações</label>
                                    <textarea type="name" name="body" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary">Atualizar</button>
                            </form> 
                        </div>         
                    </div>
                </div>
            </div>
            
            <x-validation-alert />

            <div class="shadow-sm p-3 mb-4 bg-body-tertiary rounded" >
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><strong>Produto:</strong>{{ $order->product_name }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><strong>Quantidade:</strong>{{ $order->quantity }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><strong>Usuário:</strong>{{ $order->person }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><strong>Data da retirada:</strong>{{ $order->delivery_time }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><strong>Prioridade:</strong>{{ $order->priority }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><strong>observações:</strong>{{ $order->observations }}</label>
                            </div>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            <h5>Status History</h5>
            <div class="card" style="width: 100%;">
                <ul class="list-group list-group-flush">
                    @foreach ($comments as $comment)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <br>
                                            <label for="validationCustomUsername" class="form-label"><strong> Status: </strong>{{ $comment->status }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="validationCustomUsername" class="form-label"><strong>Status atualizado:</strong>{{ $comment->created_at->format('d/m/Y') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="validationCustomUsername" class="form-label"><strong>Mensagem:</strong>{{ $comment->body }}</label>
                                    </div>
                                </div>
                                
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>