<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        <div class="col-md-9">
            <h1>Calculator</h1>
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

<?php include 'includes/footer.php'; ?>
