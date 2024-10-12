<x-layout title="Details Order">
    <div class="main-content" >
        <div class="container-fluid">
            <h5>Details Order</h5>
            <div class="card">
                <h5 class="card-header">
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> person: </strong>{{ $ordertable->person }}</label>
                            <br>                                            
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> product_name: </strong>{{ $ordertable->product_name }}</label>
                        <br>                                            
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>delivery_time:</strong>{{ $ordertable->delivery_time }}</label>
                        <br>                                            
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>quantity:</strong>{{ $ordertable->quantity }}</label>
                        <br>                                            
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>priority:</strong>{{ $ordertable->priority }}</label>
                        <br>                                            
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>observations:</strong>{{ $ordertable->observations }}</label>
                        <br>                                            
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> Create: </strong>{{ $ordertable->created_at }}</label>
                        <br>                                            
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        
                        <br>                                            
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationCustomUsername" > <a href="{{ route('order.index') }}" class="btn btn-secondary btn-sm" >back</a></label>
                        <label for="validationCustomUsername" ><a href="{{ route('comments.index', $ordertable->id) }}" class="btn btn-info btn-sm"  >Status</a></label>
                        <br>                                            
                    </div>
                </div>
            </div>
        </div>  
    </div>
</x-layout>