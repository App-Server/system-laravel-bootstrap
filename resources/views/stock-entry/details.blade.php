<x-layout title="Details Entry">
    <div class="main-content" >
        <div class="container-fluid">
            <div class="row g-3 needs-validation" > 
                <div class="col-md-11">
                    <h5>Detalhes do cadastro de estoque</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-box-seam"></i><strong>Produto:</strong>{{ $stockentrytable->product_name }}</label>                                    
                    </div>  
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-cart3"></i><strong>Quantidade:</strong>{{ $stockentrytable->quantity }}</label>                                    
                    </div>
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-cash-coin"></i><strong>Custo do produto:</strong>R${{ $stockentrytable->product_cost }}</label>                                    
                    </div>
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong>Data da compra:</strong>{{ $stockentrytable->created_at->format('d/m/Y') }}</label>                                    
                    </div>                         
                </div>
            </div>
        </div>
    </div>  
</x-layout>