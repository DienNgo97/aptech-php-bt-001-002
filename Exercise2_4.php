<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số nguyên tố</title>
</head>
<body>
    <h1>Kiểm tra số nguyên tố</h1>
    <form method="POST" action="">
        <label for="number">Nhập một số nguyên: </label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Kiểm tra</button>
    </form>

    <?php
    function isPrime($number) {
        if ($number < 2) {
            return false; 
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; 
            }
        }
        
        return true; 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']); 
        if (isPrime($number)) {
            echo "$number là số nguyên tố.";
        } else {
            echo "$number không phải là số nguyên tố.";
        }
    }
    ?>
</body>
</html>
