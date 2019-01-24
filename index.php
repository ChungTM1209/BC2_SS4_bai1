<form method="post">
    <h1>QuadraticEquation: a.x^2 + b.x + c = 0</h1>
    A <input type="number" name="a" placeholder="a"><br>
    B <input type="number" name="b" placeholder="b"><br>
    C <input type="number" name="c" placeholder="c"><br>
    <input type="submit">
    <?php
    include "QuadraticEquation.php";
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $root1 = 0;
    $root2 = 0;
    $quadratic = new QuadraticEquation($a, $b, $c);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($quadratic->getDiscriminant() == 0) {
            $root1 = $quadratic->getRoot();
            echo("The equation has 1 root: " . $root1);
        } elseif ($quadratic->getDiscriminant() > 0) {
            $root1 = $quadratic->getRoot1();
            $root2 = $quadratic->getRoot2();
            echo("The equation has 2 root:{ Root1: " . $root1 . " Root2: " . $root2);
        } else {
            echo("The equation has no roots");
        }
    }
    ?>
</form>
