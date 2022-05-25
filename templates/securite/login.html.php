<div class="container d-flex justify-content-center align-content-center my-5 py-5 ">
    <form class="g-3 needs-validation bg-light bg-opacity shadow col-md-10 p-5 my-5 my_login shadow" method="POST" action="/login" novalidate>

        <div class="col-6 pt-5">
            <div class="col-md-12 p-4 text-dark">
                <label for="validationCustomUsername" class="form-label h3">Login</label>
                <div class="input-group">
                    <input type="text" name="login" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a Login
                    </div>
                </div>
            </div>
            <div class="col-md-12 p-4 text-dark ">
                <label for="validationCustomPassword" class="form-label h3">Password</label>
                <input type="password" name="password" class="form-control" id="validationCustomPassword" required>
                <div class="invalid-feedback">
                    Please provide a valid Password.
                </div>
            </div>
            
        </div>

        <div class="col-12 p-4 py-5">
            <button class="btn btn-primary " type="submit">Se connecter</button>
        </div>

    </form>

</div>