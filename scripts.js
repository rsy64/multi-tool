// Calculator
document.getElementById('calculator-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    const operation = document.getElementById('operation').value;
    let result;

    switch (operation) {
        case 'add':
            result = num1 + num2;
            break;
        case 'subtract':
            result = num1 - num2;
            break;
        case 'multiply':
            result = num1 * num2;
            break;
        case 'divide':
            result = num1 / num2;
            break;
    }

    document.getElementById('result').textContent = result;
});

// To-Do List
document.getElementById('todo-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const task = document.getElementById('todo-input').value;
    const li = document.createElement('li');
    li.className = 'list-group-item';
    li.textContent = task;
    document.getElementById('todo-list').appendChild(li);
    document.getElementById('todo-input').value = '';
});

// Unit Converter
document.getElementById('converter-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const value = parseFloat(document.getElementById('value').value);
    const fromUnit = document.getElementById('from-unit').value;
    const toUnit = document.getElementById('to-unit').value;
    let result;

    if (fromUnit === 'meters' && toUnit === 'feet') {
        result = value * 3.28084;
    } else if (fromUnit === 'feet' && toUnit === 'meters') {
        result = value / 3.28084;
    } else if (fromUnit === 'inches' && toUnit === 'meters') {
        result = value * 0.0254;
    } else if (fromUnit === 'meters' && toUnit === 'inches') {
        result = value / 0.0254;
    } else if (fromUnit === 'feet' && toUnit === 'inches') {
        result = value * 12;
    } else if (fromUnit === 'inches' && toUnit === 'feet') {
        result = value / 12;
    } else {
        result = value;
    }

    document.getElementById('conversion-result').textContent = result;
});

// Random Password Generator
document.getElementById('password-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const length = parseInt(document.getElementById('length').value);
    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    let password = "";
    for (let i = 0; i < length; i++) {
        password += charset.charAt(Math.floor(Math.random() * charset.length));
    }
    document.getElementById('generated-password').textContent = password;
});
