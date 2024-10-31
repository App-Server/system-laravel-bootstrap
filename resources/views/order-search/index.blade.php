<x-layout title="Pesquisa de pedido">
    <div class="main-content">
        <div class="container-fluid">
            <div class="titlebody">
                <h5>Pesquisa de pedido</h5>
                <div class="col-md-12">
                    <form class="d-flex" action="{{ route('order-search.search') }}" method="POST">
                        @csrf
                        <div class="row g-3 needs-validation">
                            <div class="col-md-5">
                                <label for="start_date">Data inicial</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" required>
                            </div>
                            <div class="col-md-5">
                                <label for="end_date">Data final</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" required>
                            </div>
                            <div class="col-md-2" style="margin-top: 40px;">
                                <button class="btn btn-dark" type="submit">Pesquisa</button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <div class="row g-3 needs-validation" > 
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-person-check"></i><strong>Produto</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i><strong>Usuário</strong></label>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Criado</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-folder-symlink"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="search-result">
                        @if(isset($serviceOrders) && $serviceOrders->isNotEmpty())
                            <ul class="list-group list-group-flush">
                                @foreach($serviceOrders as $order)
                                    <li class="list-group-item">
                                        <div class="row g-3 needs-validation" >                                    
                                            <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-person-check"></i>{{ $order->product_name }}</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i>{{ $order->person }}</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ $order->created_at->format('d/m/Y') }}</label>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="{{ route('comments.index', $order->id) }}" class="btn btn-secondary">Detalhes</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No service orders found.</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>
