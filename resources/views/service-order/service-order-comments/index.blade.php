<x-layout title="Ordem de Serviço">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Ordem de Serviço</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
                    <label for="validationCustom04" class="form-label">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                            <label for="validationCustom04" class="form-label"><i class="bi bi-info-circle"></i>Escolha o status</label>
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
                                            <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Observações</label>
                                            <textarea type="name" name="body" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
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
            
            <div class="card" >
                <div class="card-header">
                    <div class="row">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <div class="col-md-8">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-person-circle"></i><strong>Cliente:</strong>{{ $serviceorder->customer }}</label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i><strong>Ordem de Serviço:</strong>{{ $serviceorder->service }}</label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong style="background-color: rgb(72, 255, 0); border-radius: 20px; padding: 5px;">Data da execução:</strong>{{ \Carbon\Carbon::parse($serviceorder->date)->format('d/m/Y') }}</label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-alarm"></i><strong>Hora da execução:</strong>{{ $serviceorder->time }}</label>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-cash-coin"></i><strong>Preço do serviço R$:</strong>{{ $serviceorder->price }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-chat-dots"></i></i><strong>Observação:</strong>{{ $serviceorder->observations }}</label>
                            </div>
                            <h5>Total Comments: {{ $comments_count }}</h5>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            
            <br>
            <h5>Historico</h5>
            <div class="card" style="width: 100%;">
                <ul class="list-group list-group-flush">
                    @foreach ($service_order_comments as $comment)
                        <li class="list-group-item">
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label"><i class="bi bi-info-square-fill"></i><strong> status: </strong>{{ $comment->status }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong>Status atualizado:</strong>{{ $comment->created_at->format('d/m/Y') }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label"><i class="bi bi-chat-dots"></i><strong>Messenger:</strong>{{ $comment->body }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>