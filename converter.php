<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Unit Converter</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="converter-form">
                <input type="number" class="form-control mb-2" id="value" placeholder="Enter value" required>
                <select class="form-control mb-2" id="from-unit">
                    <option value="meters">Meters</option>
                    <option value="feet">Feet</option>
                    <option value="inches">Inches</option>
                </select>
                <select class="form-control mb-2" id="to-unit">
                    <option value="meters">Meters</option>
                    <option value="feet">Feet</option>
                    <option value="inches">Inches</option>
                </select>
                <button type="submit" class="btn btn-info btn-block">Convert</button>
            </form>
            <h2 class="mt-3">Result: <span id="conversion-result"></span></h2>
        </div>
    </div>
</div>

<script src="js/scripts.js"></script>
<?php include 'footer.php'; ?>
