<x-layout title="Cadastro de produto">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Cadastro de produto<h5></div>
                <div class="row g-3 needs-validation" >
                    <div class="col-md-12">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Cadastra produto
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar novo produto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <form class="row g-3 needs-validation" novalidate action="{{ route('register-product.store') }}" method="post">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="validationCustom01" class="form-label"><i class="bi bi-box-seam"></i>Nome do produto</label>
                                                <input type="name" name="product_name" class="form-control" id="validationCustom01" required>
                                            </div>                
                                            <div class="mb-3">
                                                <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Descrição</label>
                                                <textarea type="name" name="description" class="form-control" id="comments" id="floatingTextarea2" style="height: 150px" required></textarea>
                                            </div>
                                            <div class="col-12">
                                            <button class="btn btn-dark" type="submit">Cadastrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div> 
                </div>

                <x-validation-alert />

                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <div class="row g-3 needs-validation" > 
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><strong>Id</strong></label>
                            </div>
                            <div class="col-md-10">
                                <label for="validationCustom04" class="form-label"><strong>Produto</strong></label>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom04" class="form-label"><strong>Ações</strong></label>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($registerProducts as $registerProduct)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >
                                    <div class="col-md-1">
                                        <label for="validationCustom04" class="form-label">{{ $registerProduct->id }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="validationCustomUsername" class="form-label">{{ $registerProduct->product_name }}</label>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-secundary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-folder-symlink" viewBox="0 0 16 16">
                                                <path d="m11.798 8.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742"/>
                                                <path d="m.5 3 .04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m.694 2.09A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09l-.636 7a1 1 0 0 1-.996.91H2.826a1 1 0 0 1-.995-.91zM6.172 2a1 1 0 0 1 .707.293L7.586 3H2.19q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98z"/>
                                            </svg>
                                        </button>

                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Ações de estoque</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                            <div class="offcanvas-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                    <a href="{{ url('/stock-entry') }}" class="btn btn-secondary">Entrada de estoque</a>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="card">
                                                    <div class="card-body">
                                                      <a href="{{ url('/stock-output') }}" class="btn btn-secondary">Saída de estoque</a>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="card">
                                                    <div class="card-body">
                                                      <a href="#" class="btn btn-secondary">Relátorio do produto</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-1">
                                        <a href="{{ route('register-product.details', $registerProduct->id) }}" class="btn btn-secondary">Relatório</a>
                                    </div> --}}
                                    
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div> 
    </div>   
</x-layout>

