<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('conn.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <button type="button" id="btn_add">เพิ่มพนักงาน</button><br>
<table>
    <tr class="head">
        <th>รหัสพนักงาน</th>
        <th>ชื่อ-สกุล</th>
        <th>แผนก</th>
        <th>เวลางาน</th>
        <th>เบอร์โทร</th>
        <th>email</th>
</tr>
<tr class="body">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
  </table>   
  <!-------------add modal--------------->
  <div id="add_modal" class="modal">
    <!---content------>
    <div class="modal-content">
        <center>
        <h2>เพิ่มข้อมูลพนักงาน</h2>
        <span class="close">&times;</span>
        <input type="text" name="empoly_id" class="form-control" placeholder="รหัสผนักงาน">
        <input type="text" name="empoly_name" class="form-control" placeholder="ชื่อ-สกุล">
        <select name="department">
    <option selected value="">กรุณาเลือกแผนก</option>
    <option value="สารสนเทศ">สารสนเทศ</option>
    <option value="ประชาสัมพันธ์">ประชาสัมพันธ์</option>
    <option value="ฝ่ายบุคคล">ฝ่ายบุคคล</option>
        </select>
        <input type="time" name="work_time" id="time" placeholder="เวลาเริ่มงาน">
        </center>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>