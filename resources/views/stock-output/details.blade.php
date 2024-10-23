<x-layout title="Details Entry">
    <div class="main-content" >
        <div class="container-fluid">
            <div class="row g-3 needs-validation" > 
                <div class="col-md-11">
                    <h5>Detalhes da saída do estoque</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-box-seam"></i><strong>Quem retirou a mercadoria?:</strong>{{ $stockoutputtable->person }}</label>                                    
                    </div>  
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-cart3"></i><strong>Quantidade:</strong>{{ $stockoutputtable->quantity }}</label>                                    
                    </div>
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-box-seam"></i><strong>Produto:</strong>{{ $stockoutputtable->product_name }}</label>                                    
                    </div>
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong>Data da saída:</strong>{{ $stockoutputtable->created_at->format('d/m/Y') }}</label>                                    
                    </div> 
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong>Observações:</strong>{{ $stockoutputtable->observations }}</label>                                    
                    </div>                         
                </div>
            </div>
        </div>
    </div>  
</x-layout>