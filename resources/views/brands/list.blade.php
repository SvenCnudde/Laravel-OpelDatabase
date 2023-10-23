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
       <h2>Manage Brands</h2>
       <table class="w3-table w3-tripped w3-bordered w3-margin-bottom">
            <tr class="w3-red">
                <th></th>
                <th>Title</th>
                <th></th> 
                <th></th>            
            </tr>

            <?php foreach($brands as $key => $value): ?>
            <tr>
                <td><?= $value->id ?></td>
                <td><?= $value->name ?></td>
                <td><a href="/console/brands/edit/<?= $value->id ?>">Edit</a></td>
                <td><a href="/console/brands/delete/<?= $value->id ?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>        
        </table>

        <a href="/console/brands/add/" class="w3-button w3-green">Add brand</a>
    </section>
</body>
</html>