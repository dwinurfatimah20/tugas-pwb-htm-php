<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-page</title>
</head>
<body>
    <h1>SELAMAT DATANG</h1>
    <?php
    $namaLengkap = $_POST['namaLengkap'];
    $gender = isset ($_POST['gender']) ? $_POST['gender']: "tidak ada";
    $country = $_POST['country'];
    $bahasa = isset ($_POST['Bahasa']) ? $_POST['Bahasa']: "tidak ada";
    $bio = $_POST['Bio'];
    ?>
    <div>
        <p>Nama Lengkap : <?= $namaLengkap?></p>
        <p>Gender : <?= $gender?></p>
        <p>Country : <?= $country?></p>
        <p>Bahasa : <?= $bahasa?></p>
        <P>Bio : <?= $bio?></p>
</div>
</body>
</html>