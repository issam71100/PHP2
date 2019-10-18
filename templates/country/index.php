<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Content index</h1>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Capital</th>
    </tr>
    </thead>
    <tbody>
    
    <?php foreach ($countries as $country):?>
    <tr>
        <td><?=$country->getId()?></td>
        <td><?=$country->getName()?></td>
        <td><?=$capital->getName()?></td>
    </tr>
    <?php endforeach;?>
    
    </tbody>
</table>
</body>
</html>