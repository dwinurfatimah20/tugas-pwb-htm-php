<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST" action="welcome.php">
    <h1>Buat account Baru</h1>
    <p>Nama Lengkap:</p>
    <input type="text" name="namaLengkap" id="namaLengkap">
    <p>Gender</p>
    <input type="radio" name="gender" id="Male" value="Male">Male
    <br>
    <input type="radio" name="gender" id="Female" value="Female">Female
    <p>Nationalty</p>
    <select name="country" id="">
        <option value="Indonesia">Indonesia</option>
        <option value="Arab">Arab</option>
    </select>
    <p>Language</p>
    <input type="checkbox" name="Bahasa" id="Indonesia" value="Indonesia">Indonesia
    <br>
    <input type="checkbox" name="Bahasa" id="Arab" value="Arab">Arab
    <p>Bio</p>
    <br>
    <textarea name="Bio" id="Bio" cols="30" rows="10"></textarea>
    <br>
    <a href="welcome.php"><button>Sign Up</button></a> 
    </form>
</body>
</html>

