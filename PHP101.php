<!DOCTYPE html>
<html lang="en">
    
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Set background color for the entire web page */
            color: #000; /* Set text color to white */
            margin: 0;
            padding: 20px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color : #fff;
            margin: 0;
            padding: 20px;
        }

        .table-container {
            height: 265px;
            overflow: auto;
            width: 320px;
            display: inline-block;
            margin-right: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin: 0;
            padding: 0;
            border-spacing: 0;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: center;
            background-color: #f2f2f2;
        }

        h1 {
            margin: 0;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px 5px 0 0;
        }
    </style>
    <title>Multiplication Tables</title>
</head>
<body>
    <style>
       
    </style>
    <?php for ($multi_x = 1; $multi_x <= 24; $multi_x++) : ?>
        <div class="table-container">
            <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
            <table>
                <tbody>
                    <?php for ($i = 1; $i <= 24; $i++) : ?>
                        <tr>
                            <td><?php echo $multi_x ?></td>
                            <td>x</td>
                            <td><?php echo $i ?></td>
                            <td>=</td>
                            <td><?php echo $multi_x * $i ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    <?php endfor; ?>
</body>
</html>