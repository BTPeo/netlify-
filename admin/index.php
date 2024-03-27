<?php
require_once '../common/dbconfig.php';
$sql = "SELECT * FROM production";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
if (!$row) {
    echo "Chưa có dữ liệu ";
    exit;
}
$masp = $row['masp'];
$tensp = $row['tensp'];
$anhsp = $row['anhsp'];
$soluong = $row['soluong'];
$gia = $row['gia'];
$gioitinh = $row['gioitinh'];
$thuonghieu = $row['thuonghieu'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ quản lý</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->


</head>

<body>
    <?php
    include('./share/nav.php');
    ?>
    <div class="container home-container">
        <div class="grid wide">
            <h1>Hello, <?php echo $name ?></h1>

            <canvas id="myChart"></canvas>


        </div>
    </div>
</body>
<?php
require_once '../common/dbconfig.php';

$labels = [];
$data = [];

$sql = "SELECT b.tenthuonghieu, COUNT(p.thuonghieu) as totalProducts
        FROM production p
        JOIN brand b ON p.thuonghieu = b.mathuonghieu
        GROUP BY b.tenthuonghieu";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $labels[] = $row['tenthuonghieu'];
        $data[] = $row['totalProducts'];
    }
?>

    <script>
        const ctx = document.getElementById('myChart');
        //$data = array(
        //     'name' => 'John Doe',
        //     'age' => 30,
        //     'city' => 'Hanoi'
        // );
        // Kết quả :
        // {"name":"John Doe","age":30,"city":"Hanoi"}

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Tổng số sản phẩm của từng thương hiệu',
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderWidth: 1
                }],

            },

            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<?php
} else {
    echo "Lỗi truy vấn: " . mysqli_error($conn);
}
?>


</html>