<x-layout title="Saída de estoque">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Saída de estoque</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Saída
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
                                    <form action="{{ route('stock-output.store', $productoutput->id) }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="personSelect" class="form-label">Quem está retirando a mercadoria?</label>
                                            <select name="person" class="form-select" id="personSelect" required>
                                                <option selected disabled value="">Selecione</option>
                                                <option>Alex</option>
                                                <option>Marcia</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="quantityInput" class="form-label">Quantidade</label>
                                            <input type="number" name="quantity" class="form-control" id="quantityInput" min="1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="reasonSelect" class="form-label">Motivo da saída</label>
                                            <select name="reason_of_exit" class="form-select" id="reasonSelect" required>
                                                <option selected disabled value="">Selecione</option>
                                                <option>Uso interno</option>
                                                <option>Troca de produto</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondary">Confirmar saída</button>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-validation-alert />
            <h5>Historico de saída de estoque</h5>
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row g-3 needs-validation" > 
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"><strong>Data da saída</strong></label>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"><strong>Motivo da saída</strong></label>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label"><strong>Quem retirou?</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Quantidade</strong></label>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($commentsoutput as $commentoutput)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" > 
                                <div class="col-md-3">
                                    <label for="validationCustomUsername" class="form-label">{{ $commentoutput->created_at->format('d/m/Y') }}</label>
                                </div>  
                                <div class="col-md-3">
                                    <label for="validationCustomUsername" class="form-label">{{ $commentoutput->reason_of_exit }}</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">{{ $commentoutput->person }}</label>
                                </div>                                
                                <div class="col-md-2">
                                    <label for="validationCustomUsername" class="form-label">{{ $commentoutput->quantity }}</label>
                                </div>
                                
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>