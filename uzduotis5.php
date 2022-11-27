<?php

/*
 5. Sukurkite forma, kuri leistų pridėti failą ir vėliau jį išsaugotų serveryje su formoje nurodytu failo pavadinimu (name). (3 balai)
*/

//    File forma: 
//    Name: [laboras.txt]
//    File: [browse]

?>

<html>
    <body>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label>FILE FORM</label><br>
            <label for="name">Name: </label>
            <input type="text" name="filename"><br>
            <label for="file">File: </label>
            <input type="file" name="my_file"><br><br>
            <button type="submit">Upload</button>
        </form>

    </body>
</html>