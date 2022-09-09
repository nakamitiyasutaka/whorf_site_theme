<?php
/*
Template Name:theatreページ
*/
global $date_data;
?>
<style>
.style_container{
        padding: 0rem 15rem 0rem 15rem;
}
.style_container h2{
        margin: 5rem;
        font-size: 9rem;
}
.style_box1{
        display: flex;
}
.style_box1 img{
        width: 60%;
        padding: 5rem;
}
.style_box1 table{
        width: 50%;
        padding: 1rem;
}
.style_box1 th{
        font-size: 2.5rem;
        text-align: center;
        color: #444444;
        border-bottom: 2px solid black;
        border-color: #dc143c;
        border-collapse: separate;
}

.style_box1 td{
        font-size: 1.25rem;
}
.style_box2{
        display: flex;
}
.style_box2 table{
        width: 45%;
        margin: 2rem;
}
.style_box2 tr{
        width: 70%;
        color: #444444;
        border-bottom: 2px solid black;
        border-color: #dc143c;
        border-collapse: separate;
}
.style_box2 th {
        width: 50%;
        padding: 2rem;
        margin:  2rem;

}
.event_calendar_style{
        width: 100%;
        position: relative;
}


.event_calendar_style tr th{
            font-size: 0.9rem;
            border: 1px solid #444444;
            border:30%; /*線の太さ*/
            text-align: center;
            padding: 0px;
            margin: 0px;

        }
        .event_calendar_style tr td{
            font-size: 0.9rem;
            border: 1px solid #444444;
            border:30%; /*線の太さ*/
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            padding: 0px;
            margin: 0px;

        }
        .div_calendar_style{
            max-height: 200px;
            min-height: 100px;
            max-width: 200px;
            min-width: 100px;
            text-align: center;
            padding: 0px;
            margin: 0px;
        }
        .event_calendar_style a{
        color:  #2C7CFF;
        }
        .event_calendar_style a:hover{
        color:  #8EB8FF;
        text-decoration: none;
        }

.calendar_month_title{
        font-size: 1.5rem;
        margin: 5rem 0 0 0;
        font-weight: bold;
}
.calendar_row a{
        font-size: 1.5rem;
        margin: 5rem 0 0 0;
        font-weight: bold;
        color:  #444444;
}
.calendar_row a:hover{
        color:  #BBBBBB;
        text-decoration: none;
}
.saturday_style{
        color:#FFFFFF;
        background-color: #2C7CFF;
}
.sunday_style{
        color:#444444;
        background-color: #FA8072;
}
</style>
<?php get_header(); ?>
<?php
        if(isset($_GET['t']) && preg_match('/\A\d{4}-\d{2}\z/', $_GET['t'])) {
                //クエリ情報を基にしてDateTimeインスタンスを作成
                $start_day = new DateTime($_GET['t'] . '-01');
                $root = $start_day->format('Y-m-d');
        } else {
        //当月初日のDateTimeインスタンスを作成
        $start_day = new DateTime('first day of this month');
        }

        //カレンダー表示月の前月の年月を取得
        $dt = clone($start_day);
        $prev_month =  $dt->modify('-1 month')->format('Y-m');

        //カレンダー表示月の翌月の年月を取得
        $dt = clone($start_day);
        $next_month =  $dt->modify('+1 month')->format('Y-m');
                //カレンダーの作成
                $year_month = $start_day->format('Y-m');
                $year_month_title = $start_day->format('Y年m月');
                $w = $start_day->format('w');
                $start_day->modify('-' . $w . ' day') ;
                $end_day = new DateTime('last day of ' . $year_month);
                $w = $end_day->format('w');
                $w = 6 - $w + 1;
                $end_day->modify('+' . $w . ' day');
                $period = new DatePeriod(
                $start_day,
                new DateInterval('P1D'),
                $end_day
                );
                $day_of_week = ["日","月","火","水","木","金","土"];
                $day_i =0;
?>
        <div class="style_container">
                <h2>若葉町ウォーフ紹介</h2>
                <div class="style_box1">
                        <img src="<?php echo CFS()->get('theatre_img_1');?>" alt="wharfについて">
                        <table>
                                <tr>
                                        <th><?php echo CFS()->get('theatre_title_1');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('theatre_content_1');?></td>
                                </tr>
                        </table>
                </div>
                <div class="style_box1">
                <table>
                                <tr>
                                        <th><?php echo CFS()->get('theatre_title_2');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('theatre_content_2');?></td>
                                </tr>
                        </table>
                        <img src="<?php echo CFS()->get('theatre_img_2');?>" alt="wharfについて2">
                </div>
        <div class="style_box2">
                <table>
                        <tr>
                                <th>料金プラン</th>
                        </tr>
                        <tr>
                                <th>１日利用</th>
                                <td>******円</td>
                        </tr>
                        <tr>
                                <th>１時間利用</th>
                                <td>******円</td>
                        </tr>
                        <tr>
                                <th>〇〇プラン</th>
                                <td>******円</td>
                        </tr>
                </table>
                <table>
                        <tr>
                                <td><?php echo do_shortcode('[wpdm_package id="62"]'); ?></td>
                        </tr>
                </table>
        
        </div>
        <div class="calendar_month_title"><p><?php echo $year_month_title;?>のスタジオ空き状況</ｐ></div>
        <table class="event_calendar_style">
        <tr class="calendar_row">
        <!-- リンクにクエリ情報を設定する -->
        <th><a href="?t=<?php echo $prev_month ?>">&laquo;</a></th>
        <th colspan="5"><a href=""><?php echo $year_month ?></a></th>
        <th><a href="?t=<?php echo $next_month ?>">&raquo;</a></th>
      </tr>
                <?php
                echo"<tr><th class='sunday_style'>".$day_of_week[0]."</th><th>".$day_of_week[1]."</th><th>".$day_of_week[2]."</th><th>".$day_of_week[3]."</th><th>".$day_of_week[4]."</th><th>".$day_of_week[5]."</th><th class='saturday_style'>".$day_of_week[6]."</th></tr>";
                foreach ($period as $date) {
                if($day_i==0){
                        echo"<tr>";
                        $day_i++;
                }
                else{
                        $day_i++;
                }
                echo "<td><div class='div_calendar_style'>".$date -> format('d')."<br>",PHP_EOL;
                        $sql_count = count($date_data);
                        //$sql_count = 5;
                        for($sql_i = 0; $sql_i<$sql_count;$sql_i++){
                        $sql_first_date = $date_data[$sql_i][2];
                        $sql_end_date = $date_data[$sql_i][3];
                        $sql_title = $date_data[$sql_i][1];
                        if($sql_first_date <= $date ->format('Y-m-d') AND $sql_end_date >= $date ->format('Y-m-d')){
                                $url =  home_url()."/";
                                echo "<a href='".$url.$date_data[$sql_i][0]."'>".$sql_title."</a><br>";
                        }else{echo "";}
                        }
                echo "</div></td>";
                if($day_i == 7){
                        echo"</tr>";
                        $day_i =0;
                }
                }
                // 接続を閉じる
                $dbh = null;

                ?>

        </table>
        </div>
<?php get_footer();?>
