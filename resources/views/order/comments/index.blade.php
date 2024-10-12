<x-layout title="Comments">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody">
                <h5>Comments Status Order</h5>
            </div>
            
           <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Status Update
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Satus</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>  
                        <div class="modal-body">    
                            <form action="{{ route('comments.store', $order->id) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">status</label>
                                    <select type="name" name="status" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value=""></option>
                                        <option>🟢 approved</option>
                                        <option>🔴 denied</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Observation</label>
                                    <textarea type="name" name="body" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form> 
                        </div>         
                    </div>
                </div>
            </div>

            <x-validation-alert />

            <div class="container-fluid">
                <br>
                <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        @foreach ($comments as $comment)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >
                                    <div class="row">
                                        <div class="col">
                                            <div class="col">
                                                <br>
                                                <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> status: </strong></label>
                                                <label for="validationCustomUsername" class="form-label">{{ $comment->status }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>status_update:</strong>{{ $comment->created_at }}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>body:</strong>{{ $comment->body }}</label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>