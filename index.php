<?php
// Default values
$tall1 = $_POST["tall1"] ?? "";
$tall2 = $_POST["tall2"] ?? "";
$result = "";

// When the button is pressed, do the math
if (isset($_POST["beregn"])) {
    $t1 = (int)$tall1;
    $t2 = (int)$tall2;

    $sum = $t1 + $t2;
    $diff = $t1 - $t2;

    $result = "Tall 1 er $t1 <br>
               Tall 2 er $t2 <br>
               Summen er $sum <br>
               Differansen er $diff";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP kalkulator</title>
</head>
<body>
    <h2>Legg inn to tall</h2>
    <form method="POST">
        <label for="tall1">Tall 1:</label>
        <input type="number" name="tall1" value="<?php echo htmlspecialchars($tall1); ?>">
        <br><br>
        <label for="tall2">Tall 2:</label>
        <input type="number" name="tall2" value="<?php echo htmlspecialchars($tall2); ?>">
        <br><br>
        <button type="submit" name="beregn">Beregn</button>
    </form>

    <h3>Resultat:</h3>
    <p><?php echo $result; ?></p>
</body>
</html>
