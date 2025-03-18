<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Tool Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Welcome to the Multi-Tool Website</h1>
    <div class="row mt-5">
        <div class="col-md-3">
            <a href="calculator.php" class="btn btn-primary btn-block">
                <i class="fas fa-calculator"></i> Calculator
            </a>
        </div>
        <div class="col-md-3">
            <a href="todo.php" class="btn btn-success btn-block">
                <i class="fas fa-tasks"></i> To-Do List
            </a>
        </div>
        <div class="col-md-3">
            <a href="converter.php" class="btn btn-info btn-block">
                <i class="fas fa-balance-scale"></i> Unit Converter
            </a>
        </div>
        <div class="col-md-3">
            <a href="password-generator.php" class="btn btn-warning btn-block">
                <i class="fas fa-key"></i> Password Generator
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
