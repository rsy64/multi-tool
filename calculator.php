<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Calculator</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="calculator-form">
                <input type="number" class="form-control mb-2" id="num1" placeholder="Enter first number" required>
                <input type="number" class="form-control mb-2" id="num2" placeholder="Enter second number" required>
                <select class="form-control mb-2" id="operation">
                    <option value="add">Add</option>
                    <option value="subtract">Subtract</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                </select>
                <button type="submit" class="btn btn-primary btn-block">Calculate</button>
            </form>
            <h2 class="mt-3">Result: <span id="result"></span></h2>
        </div>
    </div>
</div>

<script src="js/scripts.js"></script>
<?php include 'footer.php'; ?>
