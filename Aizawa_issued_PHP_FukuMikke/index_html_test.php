<?php
    require_once('funcs.php');
    $pdo = db_conn();
    $img = ImgShow();
    $stmt = $pdo->prepare('SELECT * FROM listing_items_table');
    $status = $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);


    $view="";
    if($status === false){
        sql_error($stmt);
    }else{
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                    // $view .= '<img class="card-img-top src=' . $img . ' />';
                    $view .= '<div class="card-body p-4">';
                            $view .= '<div class="text-center">';
                                $view .= '<h5 class="fw-bolder">';
                                $view .= h($result['item_name']);
                                $view .= '</h5>';
                                $view .= '<p class= "price">';
                                $view .= h($result['price']);
                                $view .= '</p>';
                        $view .= '</div>';
                    $view .= '</div>';                        
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="骨格診断・パーソナルカラー診断に基づいて自分に似合う欲しい洋服に出会える検索Webサイト。" />
        <meta name="author" content="" />
        <title>FKM ふくみっけ：自分の骨格タイプ・パーソナルカラータイプに合う欲しい服を見つけよう</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header class="bg-dark py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-white">

                <!-- Search Area-->
                    <form  action="/fukuMikke_plot1/search_insert.php" method="post">
                        <input type="text" class="searchWindow" name="searchWindow" placeholder="骨格+アイテム">
                    </form>                 
                <!-- Search Area-->
            
                    </div>
                </div>
        </header>
            
        
        <!-- Section-->
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">

                                <!-- ここから動的に変更したい箇所-->

                                <div class="view card">
                                <?= $view ?>
                                </div>

                                <!-- ここまで動的に変更したい箇所-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
            <!-- Footer-->
            <footer class="py-5 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
    </body>
</html>
