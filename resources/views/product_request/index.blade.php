<x-layout title="Pedidos">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Pedidos</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">            
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Novo pedido
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Criar novo pedido</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('product_request.store') }}" method="post">
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="validationCustom01" class="form-label">Usuário</label>
                                            <select type="name" name="person" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value="">
                                                    {{ $users->isEmpty() ? 'No User Available' : 'Select a Usuário' }}
                                                </option>
                                                <!-- Loop through the available products -->
                                                @foreach($users as $user)
                                                    <option value="{{ $user->name }}">
                                                        {{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationCustom01" class="form-label">Produto</label>
                                            <select name="product_name" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value="">
                                                    {{ $productregistration->isEmpty() ? 'No Products Available' : 'Selecio o produto' }}
                                                </option>
                                                <!-- Loop through the available products -->
                                                @foreach($productregistration as $products)
                                                    <option value="{{ $products->product_name }}">
                                                        {{ $products->product_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">Quantidade</label>
                                            <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">Data da retirada</label>
                                            <input type="date" name="delivery_time" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp">
                                        </div>
                
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">Prioridade</label>
                                            <select type="name" name="priority" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value=""></option>
                                                <option>Urgente</option>
                                                <option>Baixo</option>
                                                <option>Médio</option>
                                            </select>
                                        </div>
                                                
                                        <div class="mb-3">
                                            <label for="validationCustom04" class="form-label">Observações</label>                                    
                                            <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Criar pedido</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <a href="{{ url('/product_request_search') }}" class="btn btn-info">Pesquisa</a>
                </div>
            </div>
            
            <x-validation-alert />

            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row g-3 needs-validation" > 
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label"><strong>Produto</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><strong>Quantidade</strong></label>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"><strong>Usuário</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><strong>Detalhes</strong></label>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($orderstable as $ordertable)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >                    
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">{{ $ordertable->product_name }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom04" class="form-label">{{ $ordertable->quantity }}</label>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom04" class="form-label">{{ $ordertable->person }}</label>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{ route('comments.index', $ordertable->id) }}" class="btn btn-info">Detalhes</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="py-4">
                {{ $orderstable->links() }}
            </div>
        </div>  
    </div>  
</x-layout>