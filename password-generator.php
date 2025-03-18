<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Random Password Generator</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="password-form">
                <input type="number" class="form-control mb-2" id="length" placeholder="Enter password length" required>
                <button type="submit" class="btn btn-warning btn-block">Generate Password</button>
            </form>
            <h2 class="mt-3">Generated Password: <span id="generated-password"></span></h2>
        </div>
    </div>
</div>

<script src="js/scripts.js"></script>
<?php include 'footer.php'; ?>
