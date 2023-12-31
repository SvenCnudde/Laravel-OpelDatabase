<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="w3-padding">
        <h1 class="w3-text-red">Parts Dashboard</h1>

        <?php if(Auth::check()): ?>
            You are logged ind as 
            <?= auth()->user()->name ?> (<?= auth()->user()->email ?>)
            <a href="/console/logout">Log Out</a> | 
            <a href="/console/dashboard">Dashboard</a> | 
            <a href="/">Home page</a>
            
        <?php else: ?>
            <a href="/">Return to space</a>
        <?php endif; ?>
            
    </header>
    
    <hr>
    <section class="w3-padding">
        <ul id="dashboard">
        <li><a href="/console/brands/list">Manage car brands</a></li>
        <li><a href="/console/carmodels/list">Manage car models</a></li>
        <li><a href="/console/parts/list">Manage spare parts</a></li>
        </ul>
    </section>
</body>
</html>