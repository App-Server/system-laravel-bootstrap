<x-layout title="Service Order">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Service Order</h5></div>
            <div class="row g-3 needs-validation" >
                <div class="col-md-11">
                    <label for="validationCustom04" class="form-label">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            service
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Comment</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="validationCustom04" class="form-label">status</label>
                                            <select type="name" name="status" class="form-select" id="validationCustom04" required>
                                                <option selected disabled value=""></option>
                                                <option>🏁 started</option>
                                                <option>🔧 in progress</option>
                                                <option>🔒 awaiting confirmation</option>
                                                <option>🔍 under review</option>
                                                <option>🔄 rescheduled</option>
                                                <option>📅 postponed</option>
                                                <option>⚠️ suspended</option>
                                                <option>⛔ canceled</option>
                                                <option>✅ completed</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Observation</label>
                                            <textarea type="name" name="body" class="form-control" id="comments" id="floatingTextarea2" style="height: 100px" ></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="col-md-1">
                    <label for="validationCustom04" class="form-label">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Messenger</button>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel"><i class="bi bi-chat-dots"></i>Messenger</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Title</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Messenger</label>
                                  <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 200px" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>  
                    </label>
                </div>
                   
            </div>
            
        </div>
        {{--  --}}
        <br>
        
        <div class="container-fluid">
            <div class="card" >
                <div class="card-header">
                  <div class="row">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-border-all"></i><strong>Customer:</strong>{{ $serviceorder->customer }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-border-all"></i><strong>Service:</strong>{{ $serviceorder->service }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-border-all"></i><strong>Date:</strong>{{ $serviceorder->date }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-border-all"></i><strong>Time:</strong>{{ $serviceorder->time }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-border-all"></i><strong>Price $:</strong>{{ $serviceorder->price }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-border-all"></i><strong>Observations:</strong>{{ $serviceorder->observations }}</label>
                            </div>
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
        <br><br>
        <x-validation-alert />
        <h5>Status History</h5>
        <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
                @foreach ($service_order_comments as $comment)
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
</x-layout>