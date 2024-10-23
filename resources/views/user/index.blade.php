<x-layout title="User">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>User</h5></div>
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            New User
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Register</button>
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
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label"><i class="bi bi-person-circle"></i><strong>Username</strong></label>
                    </div>
                    <div class="col-md-5">
                        <label for="validationCustom04" class="form-label"><i class="bi bi-envelope-at"></i><strong>Email</strong></label>
                    </div>
                    <div class="col-md-1">
                        <label for="validationCustom04" class="form-label"><i class="bi bi-pencil-square"></i></label>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($users as $user)
                    <li class="list-group-item">
                        <div class="row g-3 needs-validation" >
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-person-circle"></i>{{ $user->name  }}</label>
                            </div>
                            <div class="col-md-5">
                                <label for="validationCustom04" class="form-label"><i class="bi bi-envelope-at"></i>{{ $user->email }}</label>
                            </div>
                            <div class="col-md-1">
                                <a href="{{ route('user.edit', $user->id ) }}"><i class="bi bi-pencil-square"></i></a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="py-4">
            {{ $users->links() }}
        </div>
    </div>
</x-layout>