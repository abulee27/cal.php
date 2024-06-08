<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body bgcolor="cyan">

    <form method="post">
        <fieldset>
            <legend>Calculator</legend>
            Enter the First Number:
            <input type="text" name="no1"><br><br>
            Choose your operation:
            Enter the second Number:
            <input type="text" name="no2"><Br></Br>
            <select name="operation">
                <option value="add">Addition </option>
                <option value="subtract">Subtraction </option>
                <option value="multiply">Multiplication </option>
                <option value="divide">Division </option>
                <option value="log">Log10 </option>
                <option value="percentage">Percentage </option>
                <option value="sqrt">Square Root </option>
            </select><br><br>
            <input type="submit" name="Calculate" value="Calculate">
        </fieldset>
    </form>

    <?php
    if (isset($_POST["Calculate"])) {
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'add':
                $result = $no1 + $no2;
                echo "Result: $result";
                break;
            case 'subtract':
                $result = $no1 - $no2;
                echo "Result: $result";
                break;
            case 'multiply':
                $result = $no1 * $no2;
                echo "Result: $result";
                break;
            case 'divide':

                if ($no2 != 0) {
                    $result = $no1 / $no2;
                    echo "Result: $result";
                } else {
                    echo "Error: Cannot divide by 0";
                }
                break;
            case 'log':
                $result = log($no1, 10);
                echo "Result: $result";
                break;
            case 'percentage':
                $result = ($no1 / $no2) * 100;
                echo "Result: $result %";
                break;
            case 'sqrt':
                $result = sqrt($no1);
                echo "Result: $result";
                break;
            default:
                echo "Invalid operation";
                break;
        }
    }
    ?>
</body>

</html>