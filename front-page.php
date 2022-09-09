<?php get_header(); ?>
<?php
/*
 トップページ
 */
?>
<style>
    .list_box th {
        text-align: center;
        font-size: 2rem;
        color: #f45c5c;
        padding: 3% 0 3% 0;

    }
    .list_box td {
        font-size: 1.1rem;
        padding: 0 3% 2% 3%;
    }
    .list_box td a{
        font-size: 1.1rem;
        padding: 0 3% 2% 3%;
        color: #f45c5c;
        font-weight: bold;
    }
    .list_box td a:hover{
        font-size: 1.1rem;
        padding: 0 3% 2% 3%;
        color: #f4888a;
    }
    .more_style a{
        font-size: 1.1rem;
        padding: 0 3% 2% 3%;
        color: #f45c5c;
        font-weight: bold;
    }
    .more_style a:hover{
        color: #FA8072;
    }

</style>
    <!--ここからイベント・ブログ-->
    <div class="list_box">
            <ul>
            <li><img class="img-fluid" src="<?php bloginfo('template_url');?>/img/whorf_img_event.png" alt=""></li>
            <?php
            $count = 0;
            if(have_posts()):while(have_posts()):the_post();?>
                <li><p><?php echo get_the_date('Y.m.d');?></p><a href="<?php the_permalink(); ?>"><?php the_title();?></a><hr></li>
                <?php
                $count++;
                if($count >= 4):?>
                    <li class="more_style"><a href="<?php bloginfo('url'); ?>/event">→MORE</a></li>
                <?php break; endif;?>
                <?php endwhile; endif;?>
            </ul>
            <?php 
                $args=array(
                    'post_type'=>'Blog',
                    'posts_per_page'=>5
                );
                $the_query = new WP_Query($args);?>
                <?php $count = 0; if ($the_query->have_posts()):?>
            <ul>
                <li><img class="img-fluid" src="<?php bloginfo('template_url');?>/img/whorf_img_blog.png" alt=""></li>
                <?php while($the_query->have_posts()): $the_query->the_post();?>
                <li><p><?php echo get_the_date('Y.m.d');?></p><a href="<?php the_permalink(); ?>"><?php echo CFS()->get('blog_title');?></a><hr></li>
            <?php wp_reset_postdata();?>
            <?php
                $count++;
                if($count >= 4):?>
                <li  class="more_style"><a href="<?php bloginfo('url'); ?>/blog">→MORE</a></li>
                <?php break; endif;?>
                <?php endwhile; endif;?>
            </ul>
    </div>
    <!--ここからWHAT'S ON-->
    <div class="list_box">
        <table>
            <tr>
                <th>THEATRE</th>
                <th>STUDIO</th>
                <th>INN</th>
            </tr>
            <tr>
                <td><a href="<?php bloginfo('url'); ?>/theatre"><img src="<?php bloginfo('template_url');?>/img/wharf01.jpg" alt="THEATRE画像"></a></td>
                <td><a href="<?php bloginfo('url'); ?>/studio"><img src="<?php bloginfo('template_url');?>/img/rental_studio_img2.jpg" alt="STUDIO画像"></a></td>
                <td><a href="<?php bloginfo('url'); ?>/inn"><img src="<?php bloginfo('template_url');?>/img/inn_img3.jpg" alt="INN画像"></a></td>
            </tr>
            <tr>
                <td>劇場に関する情報はこちらをご覧下さい。</td>
                <td>稽古場に関する情報はこちらをご覧下さい。</td>
                <td>劇場に関する情報はこちらをご覧下さい。</td>
            </tr>
            <tr>
                <td><a href="<?php bloginfo('url'); ?>/theatre">→MORE</a></td>
                <td><a href="<?php bloginfo('url'); ?>/studio">→MORE</a></td>
                <td><a href="<?php bloginfo('url'); ?>/inn">→MORE</a></td>
            </tr>
        </table>
    </div>
    <!--ここからプロフィール・googleマップ-->
    <div class="plofile_style">
        <table>
            <tr>
                <th>営業時間</th>
                <td>10:00～22:00</td>
            </tr>
            <tr>
                <th>MAIL</th>
                <td>info@wharf.site</td>
            </tr>
            <tr>
                <th>TEL</th>
                <td>045-315-6025</td>
            </tr>
            <tr>
                <th>FAX</th>
                <td>045-315-6027</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>〒231-0056<br>神奈川県横浜市中区若葉町３丁目４７</td>
            </tr>
            <tr>
                <td></td>
                <td>京急「黄金町」下車 徒歩4分<br>
                    京急「日ノ出町」（急行停車駅）下車 徒歩8分<br>
                    地下鉄ブルーライン「坂東橋」下車（3B出口）徒歩7分<br>
                    市バス「横浜橋」（32、113系統、他）下車 徒歩3分
                </td>
            </tr>
        </table>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.3391908665444!2d139.62511966537127!3d35.439940795041906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185c8c660704a7%3A0x172d021861ec96bf!2zV0FLQUJBQ0hPIFdIQVJGIOiLpeiRieeUuuOCpuOCqeODvOODlQ!5e0!3m2!1sja!2sjp!4v1621940208035!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!---ここからfooter--->
    <?php get_footer();?>

