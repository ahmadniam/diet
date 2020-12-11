<?php
require_once ('../core/init.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Update Jadwal</title>
    <script type="text/javascript" language="javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">


    <style type="text/css">
        body{
            /*background-image: url("assets/diet.jpg");*/
            background-size:cover;
            /*background-color: #C70039;*/
        }
        #home{
            margin-top: 5%;    
            opacity: 0.90;
            font-family: 'Rubik', sans-serif;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#C70039">
        <img src="../assets/logo.png" width="100px" height="40px">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php" style="color: white">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_menu_user.php" style="color: white">Menu Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_tips_user.php" style="color: white">Tips Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kalkulator.php" style="color: white">Kalkulator Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jadwal_diet.php" style="color: white">Jadwal Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kalkulator.php" style="color: white">Progres Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kalkulator.php" style="color: white">Reward</a>
                </li>
            </ul>
            <a class="nav-link" href="logout.php" style="color: white">Logout</a>
        </div>
    </nav>
    <div class="container" id="home">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-8">
                <h3 class="text-center display-4">Update Data</h3>
                <form method="post">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "PPL");

                    $id = $_GET['id'];
                    $query = "SELECT * FROM jadwal_diet WHERE id=$id";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_assoc($result)) {
                        $id_user=$row["id_user"];
                        $jenis_data=$row["jenis"];
                        $detail=$row["detail"];
                        $tambahan=$row["info_tambahan"];
                        $tanggal=$row["tanggal"];
                        $waktu=$row["waktu"];
                    }
                }
                        // echo $isi_menu;
                $date = str_replace('-', '/', $tanggal);
                $newDate = date("m/d/Y", strtotime($date));
                        // $formated_date=date_format($tanggal,"m/d/Y");
                $time = str_replace(':', ':', $waktu);
                $newTime = date('H:i',strtotime($time));
                        // echo $newTime;
                ?>
                <div class="row" style="margin-top: 5px">
                    <div class="col">
                        <label for="file">ID Jadwal</label>
                        <input type="text" class="form-control" id="id" name="id" value="<?php echo $id?>" disabled>
                    </div>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col">
                        <label for="file">ID user</label>
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputState">Jenis diet</label>
                    <select id="jenis_data" class="form-control">
                        <option selected>Pilih ... </option>
                        <option value="makanan" <?php if($jenis_data=="makanan") echo 'selected="selected"'; ?>>Makanan</option>
                        <option value="olahraga" <?php if($jenis_data=="olahraga") echo 'selected="selected"'; ?>>Olahraga</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="detail">Detail diet</label>
                    <input type="detail" class="form-control" id="detail" value="<?php echo $detail?>">
                </div>
                <div class="form-group">
                    <label for="tambahan">Tambahan Informasi</label>
                    <input type="tambahan" class="form-control" id="tambahan" value="<?php echo $tambahan?>">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input id="datepicker" value="<?php echo $newDate?>">
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input id="timepicker" value="<?php echo $newTime?>">
                </div>
                <button type="submit" class="btn btn-danger center" id="update">Update Data</button>
                <!-- <div id="hasil"></div> -->
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
      $("#datepicker").datepicker({
        dateFormat:"yyyy-mm-dd",
        uiLibrary: 'bootstrap4'
    });  
  });
    $('#timepicker').timepicker({
        timeFormat: 'hh:mm:ss',
        uiLibrary: 'bootstrap4'
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
                //var pathh;
                $('#update').on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var form_data = new FormData();
                    var id = $('#id').val();
                    var id_user = $('#id_user').val();
                    var jenis_data = $('#jenis_data').val();
                    var detail = $('#detail').val();
                    var tambahan = $('#tambahan').val();
                    var tanggal = $('#datepicker').val();
                    var waktu = $('#timepicker').val();
                    

                    let current_datetime = new Date(tanggal);
                    let formatted_date = current_datetime.getFullYear() + "-" + (current_datetime.getMonth() + 1) + "-" + current_datetime.getDate();

                    let formatted_time = waktu+":00";
                    //alert(formatted_time);
                    form_data.append('id', id);
                    form_data.append('id_user', id_user);
                    form_data.append('jenis_data', jenis_data);
                    form_data.append('detail', detail);
                    form_data.append('tambahan',tambahan);
                    form_data.append('formatted_date',formatted_date);
                    form_data.append('formatted_time',formatted_time);   


                    $.ajax({
                            url: 'update_jadwal.php', // point to server-side PHP script 
                            dataType: 'text',  // what to expect back from the PHP script, if anything
                            cache: false,
                            contentType: false,
                            processData: false,
                            data:form_data,                    
                            type: 'post',
                            success: function(res){
                                // alert(res);
                                 window.location.href = "http://localhost/ppl/apps/jadwal_diet.php";
                             }
                         });
                });
            });
        </script>
    </body>
    </html>
