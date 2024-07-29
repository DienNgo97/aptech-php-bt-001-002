<!-- Viết hàm kiểm tra năm nhập vào có phải là năm nhuận hay không. -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra năm nhuận</title>
</head>
<body>
    <h1>Kiểm tra năm nhuận</h1>
    <form method="POST" action="">
        <label for="year">Nhập một năm: </label>
        <input type="number" name="year" id="year" required>
        <button type="submit">Kiểm tra</button>
    </form>

    <?php
    function isLeapYear($year) {
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    return true; 
                } else {
                    return false; 
                }
            }
            return true; 
        }
        return false; 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = intval($_POST['year']); 
        if (isLeapYear($year)) {
            echo "<p>$year là năm nhuận.</p>";
        } else {
            echo "<p>$year không phải là năm nhuận.</p>";
        }
    }
    ?>
</body>
</html>
