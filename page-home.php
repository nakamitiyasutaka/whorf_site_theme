<?php get_header(); ?>
<?php
/*
Template Name:homeページ
*/
?>
    <!--ここからスライドショー-->
    <div id="slideshow" class="slideshow">
        <img class="img-fluid" src="https://picsum.photos/1800/300" alt="">
        <img class="img-fluid" src="https://picsum.photos/1800/300" alt="">
        <img class="img-fluid" src="https://picsum.photos/1800/300" alt="">
        <img class="img-fluid" src="https://picsum.photos/1800/300" alt="">
    </div>
    <!--ここからイベント・ブログ-->
    <div class="list_box">
            <ul>
            <li><img class="img-fluid" src="<?php bloginfo('template_url');?>/img/whorf_img_event.png" alt=""></li>
            <?php if(have_posts()):while(have_posts()):the_post();?>
                <li><p><?php the_date('Y.m.d');?></p><a href="<?php the_permalink(); ?>"><?php the_title();?></a><hr></li>
            <?php endwhile; endif;?>
                <li><a href="<?php bloginfo('url'); ?>/event">もっと見る</a></li>
            </ul>
            <?php 
                $args=array(
                    'post_type'=>'Blog',
                    'posts_per_page'=>5
                );
                $the_query = new WP_Query($args);?>
                <?php if ($the_query->have_posts()):?>
            <ul>
                <li><img class="img-fluid" src="<?php bloginfo('template_url');?>/img/whorf_img_blog.png" alt=""></li>
                <?php while($the_query->have_posts()): $the_query->the_post();
                ?>
                <li><p>日付</p><a href="<?php the_permalink(); ?>"><?php echo CFS()->get('blog_title');?></a><hr></li>
                <?php endwhile;?>
            
            <?php wp_reset_postdata();?>
            <?php else:?>
            <?php endif;?>
            <li><a href="<?php bloginfo('url'); ?>/blog">もっと見る</a></li>
            </ul>
    </div>
    <!--ここからWHAT'S ON-->

    <div class="row_style">
        <div class="whats_on_style">
            <img src="<?php bloginfo('template_url');?>/img/inn_img5.jpg" alt="THEATRE画像">
            <a href="<?php bloginfo('url'); ?>/theatre">THEATRE</a>
            <p class="">劇場はリニューアルしました。<br>いつでも空いてます。<br>キレイな劇場です</p>
        </div><div class="whats_on_style">
            <img src="<?php bloginfo('template_url');?>/img/inn_img6.jpg" alt="INN画像">
            <a href="<?php bloginfo('url'); ?>/studio">STUDIO</a>
            <p class="">宿</p>
        </div>
        <div class="whats_on_style">
            <img src="<?php bloginfo('template_url');?>/img/inn_img4.jpg" alt="INN画像">
            <a href="<?php bloginfo('url'); ?>/inn">INN</a>
            <p class="">宿宿宿宿宿宿宿宿宿宿宿宿宿宿宿宿宿宿</p>
        </div>
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

