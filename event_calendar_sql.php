<?php
// DBへ接続
$dsn      = 'mysql:charset=UTF8;dbname=wharf_db;host=localhost';
$user     = 'root';
$password = 'jw0003ny';

    try{
        $dbh = new PDO($dsn, $user, $password);
        $the_post = get_the_ID();

        if(have_posts()){while(have_posts()){the_post();
            $url = get_permalink( $id );
            $ids = explode("/",$url);

            $event_title = CFS($the_post)->get('ivent_title');
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
            $sql ="SELECT * FROM wharf_calendar";
            $sth = $dbh -> query($sql);

            $date_data =  $sth->fetchAll();

        }}

    }catch(PDOException $e){
        print("データベースの接続に失敗しました".$e->getMessage());
    }
?>
