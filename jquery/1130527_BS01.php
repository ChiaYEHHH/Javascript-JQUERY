<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$data = [
    [
        'id' => 1,
        'name' => '珍珍',
        'mobile' => '0911-111-111'
        
    ],
    [
        'id' => 2,
        'name' => '家家',
        'mobile' => '0922-222-222'
    ],
    [
        'id' => 3,
        'name' => '奇奇',
        'mobile' => '0933-333-333'
    ],
    [
        'id' => 4,
        'name' => '乖乖',
        'mobile' => '0944-444-444'
    ],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['mobile']; ?></td>
                    </tr>

                <?php endforeach; ?>


    </div>

</body>

</html>