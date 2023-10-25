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
       <h2>Add Brand</h2>
       
        <form method="post" action="/console/brands/add" novalidate class="w3-margin-bottom">
            <?= csrf_field() ?>

            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" />

                <?php if($errors->first('name')): ?>
                    <br/>
                    <span class="w3-text-red" <?= old('name'); ?>><?= $errors->first('name') ?></span>
                    <?php endif ?>
            </div>

            <button type="submit" class="w3-button w3-green w3-margin-top">Add brand</button>
        </form>

        <a href="/console/brands/list">Back to brands list</a>
    </section>
</body>
</html>