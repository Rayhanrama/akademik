<!-- 
<?php
# cara 1
    $db = mysqli_connect('localhost','root','','db_bukutamu');
?> -->

<?php
# cara 2
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'db_bukutamu';
   
    // open connection
    $koneksi = new mysqli($host, $user, $password, $db_name);
?>
