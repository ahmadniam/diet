<!DOCTYPE html>
<html>
<head>
    <title>Halaman Update Data</title>
    <script type="text/javascript" language="javascript" src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
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
    <nav class="navbar justify-content-between" style="background-color:#C70039">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="../assets/logo.png" width="100px" height="40px">
                <a style="color:#e6e6e6;font-family: 'Rubik', sans-serif;" class="navbar-brand" href=".php">Home</a> 
            </div>
            <a style="color:#e6e6e6;font-family: 'Rubik', sans-serif;" class="navbar-brand" href="logout.php">Logout</a>
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
                        $query = "SELECT * FROM data_menu WHERE id=$id";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                          while($row = mysqli_fetch_assoc($result)) {
                                $id_menu=$row['id'];
                                $judul_menu=$row['judul'];
                                $gambar_menu=$row['gambar'];
                                $isi_menu=$row['isi'];
                            }
                        }
                        // echo $isi_menu;
                        ?>
                    <div class="form-group">
                        <label for="id">ID Menu</label>
                        <input type="id" class="form-control" id="id" value="<?php echo $id_menu?>">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="judul" class="form-control" id="judul" value="<?php echo $judul_menu?>">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="gambar" class="form-control" id="gambar" value="<?php echo $gambar_menu?>">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi konten</label>
                        <textarea class="form-control" id="isi" rows="5"><?php echo $isi_menu?></textarea>
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
        $(document).ready(function(){
                //var pathh;
                $('#update').on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var form_data = new FormData();
                    var id = $('#id').val();
                    var judul = $('#judul').val();
                    var gambar = $('#gambar').val();
                    var isi = $('#isi').val();
                    form_data.append('id', id);
                    form_data.append('judul', judul);
                    form_data.append('gambar', gambar);
                    form_data.append('isi',isi);
                    // alert(jenis_data);                         
                    
                    $.ajax({
                            url: 'update_menu.php', // point to server-side PHP script 
                            dataType: 'text',  // what to expect back from the PHP script, if anything
                            cache: false,
                            contentType: false,
                            processData: false,
                            data:form_data,                    
                            type: 'post',
                            success: function(res){
                                window.location.href = "http://localhost/ppl/view_data_menu.php";
                            }
                        });
                });
            });
        </script>
    </body>
    </html>
