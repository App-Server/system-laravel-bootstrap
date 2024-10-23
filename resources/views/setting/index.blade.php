<x-layout title="Setting">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody">
                <h5>Configurações</h5>
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card ">
                            <div class="card-body">            
                                <p class="card-text"><i class="bi bi-people"></i>Gerenciar usuários</p>
                                <div class="d-grid gap-2">
                                    <a href="{{ url('/user') }}" class="btn btn-primary {{ Request::is('user') ? 'active' : '' }}"><i class="bi bi-people"></i>Lista de usuário</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><i class="bi bi-box-seam"></i>Gerenciar produto</p>
                                <div class="d-grid gap-2">
                                    <a href="{{ url('/register-product') }}" class="btn btn-primary {{ Request::is('register-product') ? 'active' : '' }}"><i class="bi bi-box-seam"></i>Lista de produto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><i class="bi bi-boxes"></i>Gerenciar serviços</p>
                                <div class="d-grid gap-2">
                                    <a href="{{ url('/service-registration') }}" class="btn btn-primary 
                                        {{ Request::is('service-registration') ? 'active' : '' }}
                                        {{ Request::is('service-registration/*') ? 'active' : '' }}">
                                        <i class="bi bi-file-richtext-fill"></i>Lista de serviços
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><i class="bi bi-briefcase"></i>Gerenciar status de serviços</p>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary"><i class="bi bi-box-seam"></i>Gerenciar status de serviços</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><i class="bi bi-boxes"></i>Gerenciar status de pedido</p>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-primary"><i class="bi bi-boxes"></i>Gerenciar status de pedido</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>