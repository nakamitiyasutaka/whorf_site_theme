<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
    <script>
    //スライドショーの設定
    $(window).load(function() {
        var img = $("#slideshow").children("img"), // 画像を取得
            num = img.length, // 画像の数を数える
            count = 0, // 現在何枚目を表示しているかのカウンター
            interval = 3000; // 次の画像に切り替わるまでの時間(1/1000秒)

        img.eq(0).addClass("show"); // 最初の画像にshowクラス付与

        setTimeout(slide, interval); // slide関数をタイマーセット

        function slide() {
            img.eq(count).removeClass("show"); // 現在表示している画像からshowクラスを取り除く
            count++; // カウンターを一個進める
            if(count >= num) {
                count = 0; // カウンターが画像の数より大きければリセット
            }
            img.eq(count).addClass("show"); // 次の画像にshowクラス付与
            setTimeout(slide, interval); // 再びタイマーセット
        }
    });
    </script>
<?php
        $dsn      = 'mysql:charset=UTF8;dbname=wharf_db;host=localhost';
        $user     = 'root';
        $password = 'jw0003ny';

    // DBへ接続
    if(is_singular('post')|| is_front_page()){
        //echo "表示されました";
        try{
            $dbh = new PDO($dsn, $user, $password);
            $the_post = get_the_ID();

            if(have_posts()){while(have_posts()){the_post();
                $url = get_permalink( $id );
                $ids = explode("/",$url);

                $event_title = CFS($the_post)->get('event_title');
                $event_first_date = CFS($the_post)->get('event_day_1');
                $event_end_date = CFS($the_post)->get('event_day_2');
                $event_id = $ids[4];
                //echo $event_id." ".$event_title." ".$event_first_date." ".$event_end_date."<br>";


                $chexk_sql = "SELECT COUNT(*) FROM wharf_calendar WHERE event_id = ".$event_id."";
                $checkk_count = $dbh -> query($chexk_sql);
                $checkk_count =$checkk_count->fetchColumn();
                //echo  "カラム件数は".$checkk_count."件です。<br>";
                if($checkk_count == 0){
                    $sql = "INSERT INTO wharf_calendar (event_id, event_title, event_first_date,event_end_date)
                    VALUES (".$event_id.",'".$event_title."','".$event_first_date."','".$event_end_date."')";
                    $sth = $dbh -> query($sql);
                    //echo "新規登録を行いました。";
                }
                elseif($checkk_count >= 0){
                    $sql = "UPDATE wharf_calendar SET event_id =".$event_id.",event_title = '".$event_title."',event_first_date = '".$event_first_date."',event_end_date ='".$event_end_date."' WHERE event_id =".$event_id."";
                    $sth = $dbh -> query($sql);
                    //echo "更新手続きを行いました。";
                }

            }}
        }catch(PDOException $e){
            print("データベースの接続に失敗しました".$e->getMessage());
        }
    }else{
        try{
            $dbh = new PDO($dsn, $user, $password);
            $sql ="SELECT * FROM wharf_calendar";
            $sth = $dbh -> query($sql);
            global $date_data;
            $date_data =  $sth->fetchAll();
        }
        catch(PDOException $e){
            //print("データベースの接続に失敗しました".$e->getMessage());
        }
    }
?>

    <title>若葉町WHARF</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="container-fluid">
<!--ここからナビ------->
<div class="row py-1 nav_fix">
            <div class="col-4" ><a href="<?php bloginfo('url'); ?>/"><img class="img-fluid" src="<?php bloginfo('template_url');?>/img/wharf_banner.jpg" alt=""></a></div>
            <div class="col-8 p-0 m-0">
                <ul class="nav">
                    <li class="nav01"><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
                    <li class="nav01"><a href="<?php bloginfo('url'); ?>/about">ABOUT</a></li>
                </ul>
            </div>
</div>
   <!--ここからスライドショー-->
    <div id="slideshow" class="slideshow">
        <img class="img-fluid" src="https://picsum.photos/1800/300" alt="">
        <img class="img-fluid" src="https://picsum.photos/1800/300" alt="">
        <img class="img-fluid" src="https://picsum.photos/1800/300" alt="">
        <img class="img-fluid" src="https://picsum.photos/1800/300" alt="">
    </div>

