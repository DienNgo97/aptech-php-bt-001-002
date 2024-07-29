<!DOCTYPE html>
<html>
<head>
    <title>Nhập điểm học sinh</title>
</head>
<body>
<h1>Nhập điểm của 5 học sinh</h1>
    <form method="POST" action="">
        <label for="tenHocSinh1">Tên học sinh 1:</label>
        <input type="text" name="tenHocSinh1" required>
        <label for="diemSo1">Điểm:</label>
        <input type="number" name="diemSo1" step="0.1" min="0" max="10" required>
        <br>

        <label for="tenHocSinh2">Tên học sinh 2:</label>
        <input type="text" name="tenHocSinh2" required>
        <label for="diemSo2">Điểm:</label>
        <input type="number" name="diemSo2" step="0.1" min="0" max="10" required>
        <br>

        <label for="tenHocSinh3">Tên học sinh 3:</label>
        <input type="text" name="tenHocSinh3" required>
        <label for="diemSo3">Điểm:</label>
        <input type="number" name="diemSo3" step="0.1" min="0" max="10" required>
        <br>

        <label for="tenHocSinh4">Tên học sinh 4:</label>
        <input type="text" name="tenHocSinh4" required>
        <label for="diemSo4">Điểm:</label>
        <input type="number" name="diemSo4" step="0.1" min="0" max="10" required>
        <br>

        <label for="tenHocSinh5">Tên học sinh 5:</label>
        <input type="text" name="tenHocSinh5" required>
        <label for="diemSo5">Điểm:</label>
        <input type="number" name="diemSo5" step="0.1" min="0" max="10" required>
        <br>

        <button type="submit">Gửi</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $students = [
                ["tenHocSinh" => $_POST["tenHocSinh1"], "diemSo" => $_POST["diemSo1"]],
                ["tenHocSinh" => $_POST["tenHocSinh2"], "diemSo" => $_POST["diemSo2"]],
                ["tenHocSinh" => $_POST["tenHocSinh3"], "diemSo" => $_POST["diemSo3"]],
                ["tenHocSinh" => $_POST["tenHocSinh4"], "diemSo" => $_POST["diemSo4"]],
                ["tenHocSinh" => $_POST["tenHocSinh5"], "diemSo" => $_POST["diemSo5"]],
            ];

            // Mảng chứa điểm 
            $scores = array_column($students, 'diemSo', 'tenHocSinh');

            // Sắp xếp mảng theo điểm số giảm dần
            arsort($scores);

            // Tạo mảng để sắp xếp học sinh theo điểm số
            $SapXepHocSinh = [];
            foreach ($scores as $tenHocSinh => $diemSo) {
                foreach ($students as $student) {
                    if ($student['tenHocSinh'] == $tenHocSinh) {
                        $SapXepHocSinh[] = $student;
                        break;
                    }
                }
            }

            // Tính điểm trung bình của lớp
            $TongDiemSo = array_sum(array_column($SapXepHocSinh, 'diemSo'));
            $TrungBinhDiemSo = $TongDiemSo / count($SapXepHocSinh);

            // Hiển thị kết quả
            echo "<h1>Kết quả xếp loại</h1>";
            echo "<table border='1'>
                    <tr>
                        <th>Tên</th>
                        <th>Điểm</th>
                        <th>Xếp loại</th>
                    </tr>";
            
            foreach ($SapXepHocSinh as $student) {
                $grade = "";
                if ($student['diemSo'] >= 9) {
                    $grade = "Xuất sắc";
                } elseif ($student['diemSo'] >= 8) {
                    $grade = "Giỏi";
                } elseif ($student['diemSo'] >= 6.5) {
                    $grade = "Khá";
                } elseif ($student['diemSo'] >= 5) {
                    $grade = "Trung bình";
                } else {
                    $grade = "Yếu";
                }
                echo "<tr>
                        <td>{$student['tenHocSinh']}</td>
                        <td>{$student['diemSo']}</td>
                        <td>$grade</td>
                    </tr>";
            }

            echo "</table>";
            echo "<p>Điểm trung bình của cả lớp: $TrungBinhDiemSo</p>";
        }
    ?>
</body>
</html>
