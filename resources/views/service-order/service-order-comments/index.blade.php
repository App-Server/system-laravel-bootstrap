<x-layout title="Ordem de Serviço">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Ordem de Serviço</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
                    <label for="validationCustom04" class="form-label">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Status do serviço
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Aplicar status</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('service-order-comments.store', $serviceorder->id) }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="validationCustom04" class="form-label">Escolha o status</label>
                                            <select type="name" name="status" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value=""></option>
                                                <option>🏁 iniciado</option>
                                                <option>🔧 em andamento</option>
                                                <option>🔒 aguardando confirmação</option>
                                                <option>🔍 em revisão</option>
                                                <option>🔄 remarcado</option>
                                                <option>📅 adiado</option>
                                                <option>⚠️ suspenso</option>
                                                <option>⛔ cancelado</option>
                                                <option>✅ concluído</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="floatingTextarea2">Observações</label>
                                            <textarea type="name" name="body" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondary">Registrar</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                            </div>
                        </div>
                    </label>
                </div>   
            </div>
            
            <x-validation-alert />
            
            <div class="shadow-sm p-3 mb-3 bg-body-tertiary rounded" >
                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <div class="col-md-8">
                                <label for="validationCustom04" class="form-label"><strong>Cliente:</strong>{{ $serviceorder->customer }}</label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><strong>Ordem de Serviço:</strong>{{ $serviceorder->service }}</label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><strong>Data da execução:</strong>{{ \Carbon\Carbon::parse($serviceorder->date)->format('d/m/Y') }}</label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><strong>Hora da execução:</strong>{{ $serviceorder->time }}</label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><strong>Preço do serviço R$:</strong>{{ $serviceorder->price }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><strong>Observação:</strong>{{ $serviceorder->observations }}</label>
                            </div>
                            <h5>Total Comments: {{ $comments_count }}</h5>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            
            <h5>Historico</h5>
            <div class="card" style="width: 100%;">
                <ul class="list-group list-group-flush">
                    @foreach ($service_order_comments as $comment)
                        <li class="list-group-item">
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label"><strong> status: </strong>{{ $comment->status }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label"><strong>Status atualizado:</strong>{{ $comment->created_at->format('d/m/Y') }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label"><strong>Messenger:</strong>{{ $comment->body }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>