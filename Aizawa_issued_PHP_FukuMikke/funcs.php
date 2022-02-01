<?php
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
};

function db_conn(){
    try {
        //ID:'root', Password: 'root'
        $pdo = new PDO('mysql:dbname=fmk_db;charset=utf8;host=localhost','root','root');
        return $pdo;
        } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
        };
};


function sql_error($stmt){
    $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
};

function redirect($file_name){
    header('Location: ' . $file_name);
    exit();
}


// -----------img を表示させるfunction

function ImgShow(){
    $pdo = db_conn();
    $stmt = $pdo->prepare("SELECT * FROM listing_items_table");
    $status = $stmt->execute();
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $url = h($result['item_img']);
        $data = file_get_contents($url);
        header('Content-type: image/jpg');
        echo $data;}
}
// -----------img を表示させるfunction

// function img($code) {
//     if (file_exists("$code.jpg")) $name = $code;
//         else $name = 'noimage';
//     return '<img class= "card-img-top" "src= . $name .jpg" alt="">';
// }

?>




