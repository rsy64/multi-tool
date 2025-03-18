<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">To-Do List</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="todo-form">
                <input type="text" class="form-control mb-2" id="todo-input" placeholder="Enter a new task" required>
                <button type="submit" class="btn btn-success btn-block">Add Task</button>
            </form>
            <ul id="todo-list" class="list-group mt-3"></ul>
        </div>
    </div>
</div>

<script src="js/scripts.js"></script>
<?php include 'footer.php'; ?>
