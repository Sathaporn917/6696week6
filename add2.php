<!DOCTYPE html>
<html lang="en">
<head>

<?php
    include("conn.php")
?>



<!-- เพื่อม Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
<style>    
 body{        
    font-family: "Mitr", serif;
  font-weight: 700;
  font-style: normal;
    margin-left:150px;
    margin-right:150px;
    margin-top:150px;
    margin-bottom:150px;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h1>โปรแกรมเพิ่มข้อมูล</h1>     
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">แบรน</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="Brand">
    </div>
    <label for="inputEmail3" class="col-sm-2"></label>
  </div>
  
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2">โมเดล</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="inputPassword3" name="ModelName">
    </div>

  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2">ขนาด</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="inputPassword3" name="Size">
    </div>
  </div>

  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2">สี</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="inputPassword3" name="Color">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2">ราคา</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="inputPassword3" name="Price">
    </div>
    <label for="inputEmail3" class="col-sm-2">บาท</label>
  </div>
  
  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Brand=$_POST["Brand"];
    $ModelName=$_POST["ModelName"];
    $Size=$_POST["Size"];
    $Color=$_POST["Color"];
    $Price=$_POST["Price"];
// m=ทำการเพิ่มข้อมูล
    try {
       
        $sql = "INSERT INTO nick1 (Brand,ModelName, Size,Color,Price)
        VALUES ('$Brand', '$ModelName', '$Size','$Color','$Price')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "ดีมากไอ้หนุ่ม";
      } catch(PDOException $e) {
        echo $sql . " บันทึกข้อมูลผิดพลาด <br>" . $e->getMessage();
      }
      
      $conn = null;


  echo "<div class='alert alert-success'>
  <strong>บันทึกสำเร็จ!</strong>ยินดีด้วยครับ คุณได้บันทึกข้อมูลเข้าไปใหม่ 1 รายการ </div>";
}
?>

</body>
</html>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>