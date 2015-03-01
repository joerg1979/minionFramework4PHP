<?php
if(!isset($pdo) && PDO_ON == TRUE){
    $dsn = 'mysql:host='.DB_SERVER.';port='.DB_PORT.';dbname='.DB_NAME;
    $user = DB_USER;
    $password = DB_PASSWORD;
    $pdo = new SYSTEM\DATABASE\PDO($dsn, $user, $password);
} 
#Query with params
//$sql = 'SELECT * FROM users WHERE users LIKE :name';
//$pdo->preparedStatement($sql);
//
//$params = array('name'=>'%jS%');
//

$sql = 'SELECT * FROM users';
$pdo->preparedStatement($sql);

$data = $pdo->execute($params);

foreach ($data as $userAccount) {
    echo '<p><h2>Datensatz <small><b>user_id:</b> '.$userAccount['id'].'</small></h2>';
//  echo 'UserID: <b>'.$userAccount['user_id'].'</b><br />';
    echo 'UserNickname: <b>'.$userAccount['username'].'</b><br />';
    echo 'User_eMail: <b>'.$userAccount['useremail'].'</b><br />';
    echo 'User_Password: <b>'.$userAccount['userpassword'].'</b></p>';
    echo 'UserProject_ID: <b>'.$userAccount['userproject_id'].'</b></p><hr />';
    
}
