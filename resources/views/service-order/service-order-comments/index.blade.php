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
                                    <form action="{{ route('service-order-comments.store', $serviceorder->id) }}" method="post">
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
            </div>
            
            <x-validation-alert />
            
            <div class="card" >
                <div class="card-header">
                    <div class="row">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-person-circle"></i><strong>Customer:</strong>{{ $serviceorder->customer }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-briefcase"></i><strong>Service:</strong>{{ $serviceorder->service }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-calendar3"></i><strong>Date:</strong>{{ $serviceorder->date }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-alarm"></i><strong>Time:</strong>{{ $serviceorder->time }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-cash-coin"></i><strong>Price $:</strong>{{ $serviceorder->price }}</label>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-chat-dots"></i></i><strong>Observations:</strong>{{ $serviceorder->observations }}</label>
                            </div>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            
            <br>
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
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-info-square-fill"></i><strong> status: </strong></label>
                                            <label for="validationCustomUsername" class="form-label">{{ $comment->status }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar3"></i><strong>status_update:</strong>{{ $comment->created_at }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-chat-dots"></i><strong>Messenger:</strong>{{ $comment->body }}</label>
                                    </div>
                                </div>
                                
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>