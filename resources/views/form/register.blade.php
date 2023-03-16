<div class="py-5 text-center">
    <h2>Register form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required
        form group has a validation state that can be triggered by attempting to submit the form without
        completing it.</p>
</div>

<div class="row g-5">
    <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">User Information</h4>
        <form class="needs-validation" action="{{ url('/register') }}" method="post" novalidate>
            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" name = "firstname" id="firstName" placeholder="" value=""
                        required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" name = "lastname" id="lastName" placeholder="" value=""
                        required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                {{-- <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" name = "username" id="username" placeholder="Username"
                            required>
                        <div class="invalid-feedback">
                            Your username is required.
                        </div>
                    </div>
                </div> --}}

                <div class="col-12">
                    <label for="email" class="form-label">Email <span
                            class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" name = "email" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Password</label>
                    <input type="text" class="form-control" name = "password" id="address" placeholder="1234 Main St"
                        required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
            <hr class="my-4">
            <div class="col-3 text-center">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Register</button>
            </div>
        </form>
    </div>
</div>
<div class="row g-5">
    <div class="col-md-12 col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>name</td>
                    <td>email</td>
                    <td>เครื่องมือ</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $value) {?>
                <tr>
                    <td><?php echo $key+1 ?></td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>
                        <a href="{{url('/edit/' .$value->id)}}"
                            class="btn btn-warning">แก้ไข</a>
                        <a href="{{url('/delete_user/' .$value->id)}}"
                            class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>
