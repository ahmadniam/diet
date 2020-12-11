<?php
require_once ('../core/init.php');
 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>Halaman Tambah Data</title>
    <script type="text/javascript" language="javascript" src="../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
                <h3 class="text-center display-4">Tambah Data</h3>
                <form method="post">
                    <div class="form-group">
                        <label for="inputState">Jenis data</label>
                        <select id="jenis_data" class="form-control">
                            <option selected>Choose...</option>
                            <option value="data_menu">Data Menu</option>
                            <option value="data_tips">Data Tips</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="judul" class="form-control" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="gambar" class="form-control" id="gambar" placeholder="Link gambar">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi konten</label>
                        <textarea class="form-control" id="isi" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger center" id="insert">Tambah Data</button>
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
                $('#insert').on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var form_data = new FormData();
                    var jenis_data = $('#jenis_data').val();
                    var judul = $('#judul').val();
                    var gambar = $('#gambar').val();
                    var isi = $('#isi').val();
                    form_data.append('jenis_data', jenis_data);
                    form_data.append('judul', judul);
                    form_data.append('gambar', gambar);
                    form_data.append('isi',isi);
                    // alert(jenis_data);                         
                    
                    $.ajax({
                            url: 'insert.php', // point to server-side PHP script 
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
