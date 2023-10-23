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
        <form method="post" action="/console/login" novalidation>

        <?= csrf_field() ?>

        <div class="w3-margin.bottom">
            <label for="email">E-mail Address:</label>
            <input type="email" name="email" id="email" value="<?= old('email')?>" />

            <?php if($errors->first('email')): ?>
                <br/>
                <span class="w3-text-red"><?= $errors->first('email'); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin.bottom">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />

            <?php if($errors->first('password')): ?>
                <br/>
                <span class="w3-text-red"><?= $errors->first('password'); ?></span>
            <?php endif; ?>
        </div>

        <button class="submit">Log In</button>

        </form>
    </section>
</body>
</html>