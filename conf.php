
<?php
//ООП
    $servername = 'localhost';
    $username = 'admin';
    $password = '123456789';
    $dbname = 'userdb';

    $conn = new mysqli($servername, $username, $password, $dbname );
    if ($conn->connect_error) {
        die('Зєднання з базою даних недоступне:' .$conn->connect_error);
    }
    echo 'Зєднання успішно встановлено';
    $sql = "SELECT * FROM user";
    $query = $conn->query($sql);

    if ($query->num_rows>0) {
        while ($row = $query->fetch_assoc()){
            echo "<br> ID користувача".$row['id'] ."<br> Імя користувача".$row['name'] ."<br> Прізвище користувача" .$row['surname'];
        }
    }
    $conn->close();
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
//
//    $servername = 'localhost';
//    $username = 'admin';
//    $password = '123456789';
//    $dbname = 'userdb';
//
//try {
//    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
   // echo "Зєднання успішно встановлено";

//    $sql = "CREATE TABLE user (id int not null auto_increment, PRIMARY KEY(id),
//                              name varchar (15) not null,
//                              surname varchar (20) not null,
//                              login varchar (20) not null,
//                              password varchar (20) not null)";
//    $sql = "INSERT INTO user (name,surname, login, password )
//
//
//                         VALUES ('Артем','Мочалов', 'amochalov','12345')";
////   Створення підготовленого запиту
//    $name="Vitaliy";
//    $surname="Meh";
//    $login = "vmeh";
//    $password = '1234566';
//    $sql = "INSERT INTO user (name,surname, login, password)
//            VALUES(:name, :surname,:login, :pass)";
//    $query=$conn->prepare($sql);
//    $query->execute(['name'=> $name,'surname'=>$surname, 'login'=>$login, 'pass'=>$password]);
//    echo 'Запис успішно доданий';
//    $sql = "SELECT * FROM user WHERE id=1";
//    $query = $conn->query($sql);
//    $users = $query->fetch(PDO::FETCH_ASSOC);
//
//    foreach ($users as $user) {
//        echo $user['name'].' '.$user['surname'].' '.$user['login'] .'<br>';
//    }
//}
//  catch (PDOException $exception){
//    echo "Зєднання не встановлено".$exception->getMessage();
//  };




?>

