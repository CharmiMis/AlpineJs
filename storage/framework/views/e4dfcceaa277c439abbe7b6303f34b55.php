<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine.js Example</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <div class="parent">
        <div x-data="{message: 'Hello, World!'}">
            <input type="text" x-model="message">
            <p x-text="message" class="m-2 p-2">
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\wamp64\www\alpine-example\resources\views/directives/model.blade.php ENDPATH**/ ?>