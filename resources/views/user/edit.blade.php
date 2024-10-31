<x-layout title="User Edit">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>User Edit</h5></div>
            <x-validation-alert />
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id ) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row g-3 needs-validation" >
                            <div class="col-mb-4">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->name  ?? old('name')}} " required>
                            </div>
                            <div class="col-mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->email ?? old('email') }} " required>
                            </div>
                            <div class="col-mb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                            </div>
                        </div><br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>