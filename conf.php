
<?php
//ООП
//    $servername = 'localhost';
//    $username = 'admin';
//    $password = '123456789';
//    $dbname = 'userdb';
//
//    $conn = new mysqli($servername, $username, $password, $dbname );
//    if ($conn->connect_error) {
//        die('Зєднання з базою даних недоступне:' .$conn->connect_error);
//    }
//    echo 'Зєднання успішно встановлено';
//
// процедурний
//    $servername = 'localhost';
//    $username = 'admin';
//    $password = '123456789';
//    $dbname = 'userdb';
//
//    $conn = mysqli_connect($servername, $username,$password, $dbname);
//    if (mysqli_connect_errno()){
//        die('Зєднання з бд недоступне: ('.mysqli_connect_errno().'):'.mysqli_connect_error());
//    }
//    echo 'Зєднання з бд успішно встановлено';

//PDO

    $servername = 'localhost';
    $username = 'admin';
    $password = '123456789';
    $dbname = 'userdb';

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    echo "Зєднання успішно встановлено";

//    $sql = "CREATE TABLE user (id int not null auto_increment, PRIMARY KEY(id),
//                              name varchar (15) not null,
//                              surname varchar (20) not null,
//                              login varchar (20) not null,
//                              password varchar (20) not null)";
    $sql = "INSERT INTO user (name,surname, login, password )
                              VALUES ('Артем','Мочалов', 'amochalov','12345')";
    $conn->exec($sql);
    echo 'Запис успішно доданий';
}
  catch (PDOException $exception){
    echo "Зєднання не встановлено".$exception->getMessage();
    echo "Запис не доданий" .$sql.$exception->getMessage();
  };




?>

