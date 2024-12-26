<?php
$page_title = "Regester  Chat";
include 'header.php';
?>

<div class=" regester ">
    <div class="container div-v  d-flex justify-content-center align-items-center">
        <div class="row col-md-7 ">
            <form class="row g-3  needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom03" class="form-label">Email</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide You Email
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom05" class="form-label">Password</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please Enter Password
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom06" class="form-label">Photo</label>
                    <input class="form-control" type="file" id="validationCustom06" required>
                    <div class="invalid-feedback">
                        Please Enter Photo
                    </div>
                </div>



                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Connect</button>
                </div>
                <div class="col-12 text-white">
                    <p>You Have Account
                        <a href="login.php">Login Here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

</div>




<script src="./jscript.js"></script>

<?php
include 'footer.php';
?>