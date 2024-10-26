<x-layout title="Editar produto">
    <div class="main-content">
        <div class="container-fluid">
            <div class="titlebody"><h5>Editar produto</h5></div>
            <x-validation-alert />
            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate action="{{ route('stock-entry.update', $stockentrytable->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Produto</label>
                            <h4> {{$stockentrytable->product_name}} </h4 >                           
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">Quantidade</label>
                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" value="{{ $stockentrytable->quantity }}" required>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">Custo unitário da compra</label>
                            <input type="number" name="product_cost" class="form-control" id="exampleInputDatetime1" value="{{ $stockentrytable->product_cost }}" required>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Atualizar estoque</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
