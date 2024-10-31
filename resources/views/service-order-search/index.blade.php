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
                                    <button class="btn btn-secondary" type="submit">Pesquisa</button>
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
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Atendimento</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Hora</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-folder-symlink" viewBox="0 0 16 16">
                                        <path d="m11.798 8.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742"/>
                                        <path d="m.5 3 .04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m.694 2.09A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09l-.636 7a1 1 0 0 1-.996.91H2.826a1 1 0 0 1-.995-.91zM6.172 2a1 1 0 0 1 .707.293L7.586 3H2.19q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98z"/>
                                    </svg>
                                </label>
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
                                            <div class="col-md-1">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ \Carbon\Carbon::parse($order->date)->format('d/m/Y') }}</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i>{{ $order->time }}</label>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="{{ route('service-order-comments.index', $order->id) }}" style="color: black">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-folder-symlink" viewBox="0 0 16 16">
                                                        <path d="m11.798 8.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742"/>
                                                        <path d="m.5 3 .04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m.694 2.09A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09l-.636 7a1 1 0 0 1-.996.91H2.826a1 1 0 0 1-.995-.91zM6.172 2a1 1 0 0 1 .707.293L7.586 3H2.19q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98z"/>
                                                    </svg>    
                                                </a>                                       
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
