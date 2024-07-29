<!DOCTYPE html>
<html>
<head>
    <title>Thông tin các ngôn ngữ lập trình</title>
</head>
<body>

<?php
// Khởi tạo mảng ngôn ngữ lập trình
$programmingLanguages = [
    "Java" => [
        "name" => "Java",
        "year" => 1995,
        "frameworks" => ["Spring", "Hibernate", "Struts"]
    ],
    "CSharp" => [
        "name" => "C#",
        "year" => 2000,
        "frameworks" => ["ASP.NET", "Entity Framework", "Xamarin"]
    ],
    "PHP" => [
        "name" => "PHP",
        "year" => 1995,
        "frameworks" => ["Laravel", "Symfony", "CodeIgniter"]
    ],
    "JavaScript" => [
        "name" => "JavaScript",
        "year" => 1995,
        "frameworks" => ["React", "Angular", "Vue.js"]
    ],
    "Python" => [
        "name" => "Python",
        "year" => 1991,
        "frameworks" => ["Django", "Flask", "Pyramid"]
    ]
];

// Thêm ngôn ngữ Golang và Ruby
$programmingLanguages["Golang"] = [
    "name" => "Golang",
    "year" => 2009,
    "frameworks" => ["Gin", "Beego", "Revel"]
];

$programmingLanguages["Ruby"] = [
    "name" => "Ruby",
    "year" => 1995,
    "frameworks" => ["Ruby on Rails", "Sinatra", "Hanami"]
];

// Xoá ngôn ngữ JavaScript
unset($programmingLanguages["JavaScript"]);

// Sắp xếp các ngôn ngữ theo tên
ksort($programmingLanguages);

// Hiển thị thông tin các ngôn ngữ lập trình
echo "<h1>Thông tin các ngôn ngữ lập trình</h1>";
echo "<ul>";

foreach ($programmingLanguages as $language) {
    echo "<li><strong>Tên ngôn ngữ:</strong> {$language['name']}<br>
          <strong>Năm ra đời:</strong> {$language['year']}<br>
          <strong>Thư viện/Framework nổi tiếng:</strong> " . implode(", ", $language['frameworks']) . "</li><br>";
}

echo "</ul>";
?>


</body>
</html>
