<x-layout title="Inventário">
    <div class="main-content" >
        <div class="container-fluid">
            <div class="row g-3 needs-validation" > 
                <div class="col-md-11">
                    <h5>Inventário de estoque</h5>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row g-3 needs-validation" > 
                        <div class="col-md-7">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i><strong>Produto</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i><strong>Entrada</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i><strong>Saída</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-box2"></i><strong>Saldo</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-cash-coin"></i><strong>Custo Médio</strong></label>
                        </div>
                        
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >
                                <div class="col-md-7">
                                    <label for="validationCustom04" class="form-label">{{ $product->product_name }}</label>
                                </div>
                
                                @php
                                    // Get total stock entry and stock output for the product
                                    $totalEntry = $product->stockEntries->sum('quantity');
                                    $totalOutput = $product->stockOutputs->sum('quantity');
                                    // Calculate balance
                                    $balance = $totalEntry - $totalOutput;
                                    // Calculate the average cost of the product (if applicable)
                                    $averageCost = $product->stockEntries->avg('product_cost');
                                @endphp
                
                                <div class="col-md-1">
                                    <label for="validationCustom04" class="form-label">{{ $totalEntry }}</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="validationCustom04" class="form-label">{{ $totalOutput }}</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="validationCustom04" class="form-label">{{ $balance }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom04" class="form-label">R${{ number_format($averageCost, 2, ',', '.') }}</label>
                                </div>
                                
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- <div class="py-4">
            {{ $product->links() }}
        </div> --}}
    </div>
</x-layout>