<style>
.style_container{
        padding: 0rem 15rem 0rem 15rem;
}
.style_container table td {
    width: 33%;
    padding: 0 2px 5px;
}
.style_container img{
    width: 90%;
    display: block;
    margin: 0 auto 0 auto;
}
.event_date_style{
    font-size: 1.2rem;
    color: #f45c5c;
}
.event_title_style a{
    font-size: 1.4rem;
    color: #f45c5c;
    font-weight: bold;

}
.event_title_style a:hover{
    color: #FA8072;
    text-decoration: none;
}

.event_content_style{
    font-size: 1rem;
    color: #999999;
    padding: 10px;
}
/*ページネーション*/
.pagination{
    width: 50%;
   margin:40px 0 0;
}
.nav-links{
   display:flex;
}
.pagination .page-numbers{
   display:inline-block;
   margin-right:20px;
   padding:20px 25px;
   color:#333;
   border-radius:3px;
}
.pagination .current{
   padding:20px 25px;
   background:#f45c5c;
   color:#fff;
}
.pagination .prev,
.pagination .next{
   background:transparent;
   box-shadow:none;
   color:#444444;
   text-decoration: none;
}
.pagination .prev:hover,
.pagination .next:hover{
    color:#999999;
}

.pagination .dots{
   background:transparent;
   box-shadow:none;
}
</style>

<?php get_header();?>
<?php

$day_margin =0;
$day_margin_title = "";
$array_title = array();
$array_date = array();
$array_img = array();
$array_content = array();
$array_link =array();
?>
<div class="style_container">
<img class="img-fluid" width="100%" src="<?php bloginfo('template_url');?>/img/whorf_img_event_02.png" alt="">

        <?php if(have_posts()){while(have_posts()){the_post();
                $check =  CFS()->get('event_img');
                if(!$check){$check = get_template_directory_uri()."/img/wharf_site_noImage.png";}
                $array_title[] = CFS()->get('event_title');
                $array_date[] = CFS()->get('event_day_1')."~".CFS()->get('event_day_2');
                $array_img[] = $check;
                $content = CFS()->get('event_content');
                $content = str_replace("<br />", '', $content);
                $content = mb_strimwidth( $content, 0, 200, '…', 'UTF-8' );
                $array_content[] = $content;
                $array_link[] = get_permalink();}}
        ?>
    <table>
        <tr><?php for($i=0;$i<=2;$i++):?>
            <td class="event_date_style"><?php if(isset($array_date[$i])){echo $array_date[$i];}else{echo "";}?></td>
        <?php endfor;?></tr>
        <tr><?php for($i=0;$i<=2;$i++):?>
            <td ><a href="<?php if(isset($array_link[$i])){echo $array_link[$i];}?>"><?php if(isset($array_img[$i])){echo "<img src='".$array_img[$i]."' alt=''>";}else{echo "";}?></a></td>
        <?php endfor;?></tr>
        <tr><?php for($i=0;$i<=2;$i++):?>
            <td class="event_title_style"><a href="<?php if(isset($array_link[$i])){echo $array_link[$i];}?>"><?php if(isset($array_title[$i])){echo $array_title[$i];}else{echo "";} ?></td>
        <?php endfor;?></tr>
        <tr><?php for($i=0;$i<=2;$i++):?>
            <td class="event_content_style"><?php if(isset($array_content[$i])){echo $array_content[$i];}else{echo "";} ?></td>
        <?php endfor;?></tr>
        <tr><?php for($i=3;$i<=5;$i++):?>
            <td class="event_date_style"><?php if(isset($array_date[$i])){echo $array_date[$i];}else{echo "";}?></td>
        <?php endfor;?></tr>
        <tr><?php for($i=3;$i<=5;$i++):?>
            <td ><a href="<?php if(isset($array_link[$i])){echo $array_link[$i];}?>"><?php if(isset($array_img[$i])){echo "<img src='".$array_img[$i]."' alt=''>";}else{echo "";}?></a></td>
        <?php endfor;?></tr>
        <tr><?php for($i=3;$i<=5;$i++):?>
            <td class="event_title_style"><a href="<?php if(isset($array_link[$i])){echo $array_link[$i];}?>"><?php if(isset($array_title[$i])){echo $array_title[$i];}else{echo "";} ?></td>
        <?php endfor;?></tr>
        <tr><?php for($i=3;$i<=5;$i++):?>
            <td class="event_content_style"><?php if(isset($array_content[$i])){echo $array_content[$i];}else{echo "";} ?></td>
        <?php endfor;?></tr>

    </table>
    <?php
    $args = array(
        'mid_size' => 1,
        'prev_text' => '&lt;&lt;前へ',
        'next_text' => '次へ&gt;&gt;',
        'screen_reader_text' => ' ',
    );
    the_posts_pagination($args);
    ?>
</div>
<?php get_footer();?>
