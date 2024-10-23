<x-layout title="Saída de estoque">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Saída de estoque</h5></div>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Saída de estoque
            </button>
          
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar saída de estoque</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <form class="row g-3 needs-validation" novalidate action="{{ route('stock-output.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Quem sai pegar a mercadoria? </label>
                                    <select type="name" name="person" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">
                                            {{ $users->isEmpty() ? 'No User Available' : 'Selecionar usuário' }}
                                        </option>
                                        <!-- Loop through the available products -->
                                        @foreach($users as $user)
                                            <option value="{{ $user->name }}">
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-10">
                                    <label for="validationCustom01" class="form-label">Produto</label>
                                    <select type="name" name="product_name" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">
                                            {{ $productregistration->isEmpty() ? 'No Products Available' : 'Selecionar produto' }}
                                        </option>
                                        <!-- Loop through the available products -->
                                        @foreach($productregistration as $products)
                                            <option value="{{ $products->product_name }}">
                                                {{ $products->product_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom04" class="form-label">Quantidade</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">Observações</label>                                       
                                    <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Registrar saída</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <x-validation-alert />

            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row g-3 needs-validation" > 
                        <div class="col-md-5">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i><strong>Produto</strong></label>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-person-check"></i><strong>Usuário</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i><strong>Quant.</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Data da saída</strong></label>
                        </div>
                        <div class="col-md-1">
                            <label for="validationCustom04" class="form-label"><i class="bi bi-pencil-square"></i></label>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($stockoutputtable as $stockoutput)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >
                                <div class="col-md-5">
                                    <label for="validationCustom04" class="form-label"><i class="bi bi-box-seam"></i>{{ $stockoutput->product_name  }}</label>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i>{{ $stockoutput->person }}</label>
                                </div>
                                <div class="col-md-1">
                                    <label for="validationCustom04" class="form-label"><i class="bi bi-cart3"></i>{{ $stockoutput->quantity }}</label>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i>{{ $stockoutput->created_at->format('d/m/Y') }}</label>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{ route('stock-output.details', $stockoutput->id) }}"><i class="bi bi-folder-symlink"></i></a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{--  --}}
        </div>  
    </div>  
</x-layout>