<html>
<head>
<title>Latihan MVC - UAG</title>
<link rel="stylesheet" href="/www/latihan-week09/assets/css/bootstrap.css" />
<script type="text/javascript" src="/www/latihan-week09/assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">&nbsp;</div>
            <div class="col-md-4"><h3>Data Mahasiswa</h3>
            <?php
            echo 'id:' . $rs['id'] . '<br/>';
            echo 'NIM:' . $rs['nim'] . '<br/>';
            echo 'Nama:' . $rs['nama'] . '<br/>';
            ?>
            </div>
            <div class="col-md-4">&nbsp;</div>
        </div>
    </div>
</body>
</html>