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
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i><strong>SKU</strong></label>
                        </div>
                        <div class="col-md-6">
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
                    @foreach ($stockData as $data)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >
                                <div class="col-md-1">
                                    <label for="validationCustom04" class="form-label">{{ $data->sku }}</label>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">{{ $data->product_name }}</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="validationCustom04" class="form-label">{{ $data->total_entry }}</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="validationCustom04" class="form-label">{{ $data->total_output }}</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="validationCustom04" class="form-label">{{ number_format($data->balance, 2, ',', '.') }}</label>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{--  --}}
        </div>
        {{-- <div class="py-4">
            {{ $product->links() }}
        </div> --}}
        
    </div>
</x-layout>