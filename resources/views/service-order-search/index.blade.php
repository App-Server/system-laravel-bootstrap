<x-layout title="Pesquisa de ordem de serviço">
    <div class="main-content">
        <div class="container-fluid">
            <div class="titlebody">
                <h5>Pesquisa de ordem de serviço</h5>
                <div class="row g-3 needs-validation" > 
                    <div class="col-md-11">
                        <form class="d-flex" action="{{ route('service-order-search.search') }}" method="POST">
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
                                    <button class="btn btn-success" type="submit">Pesquisa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <div class="row g-3 needs-validation" > 
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-person-check"></i><strong>Cliente</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i><strong>Ordem de serviço</strong></label>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Criado</strong></label>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong style="background-color: rgb(72, 255, 0); border-radius: 20px; padding: 5px;">Dia da execução</strong></label>
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
                                            <div class="col-md-4">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-person-check"></i>{{ $order->customer }}</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i>{{ $order->service }}</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ $order->created_at->format('d/m/Y') }}</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ \Carbon\Carbon::parse($order->date)->format('d/m/Y') }}</label>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="{{ route('service-order-comments.index', $order->id) }}" class="btn btn-info">Detalhes</a>                                       
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
