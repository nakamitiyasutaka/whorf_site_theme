<?php
/*
Template Name:aboutページ
*/
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

.style_2{
        display: flex;
}
.style_2 img{
        width: 30%;
        padding: 3rem;
}
.style_2 table{
        width: 80%;
}
.style_2 th{
        font-size: 1.5rem;
        color: #444444;
        border-bottom: 2px solid black;
        border-color: #dc143c;
        border-collapse: separate;


}

.style_2 td{
        font-size: 0.9rem;;
}

</style>
<?php get_header(); ?>
        <div class="style_container">
                <h2>若葉町ウォーフ紹介</h2>
                <div class="style_box1">
                        <img src="<?php echo CFS()->get('about_img_1');?>" alt="wharfについて">
                        <table>
                                <tr>
                                        <th><?php echo CFS()->get('about_title_1');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('about_head_1');?></td>
                                </tr>
                        </table>
                </div>
                <div class="style_box1">
                <table>
                                <tr>
                                        <th><?php echo CFS()->get('about_title_2');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('about_head_2');?></td>
                                </tr>
                        </table>
                        <img src="<?php echo CFS()->get('about_img_2');?>" alt="wharfについて">
                </div>
                <h2>staff</h2>
                <div class="style_2">
                        <img src="<?php echo CFS()->get('profile_img_1');?>" alt="佐藤誠イメージ">
                        <table>
                                <tr>
                                        <th><?php echo CFS()->get('profile_name_1');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('profile_content_1');?></td>
                                </tr>
                        </table>
                </div>
                <div class="style_2">
                        <img src="<?php echo CFS()->get('profile_img_2');?>" alt="佐藤誠イメージ">
                        <table>
                        <tr>
                                        <th><?php echo CFS()->get('profile_name_2');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('profile_content_2');?></td>
                                </tr>
                        </table>
                </div>
                <div class="style_2">
                        <img src="<?php echo CFS()->get('profile_img_3');?>" alt="佐藤誠イメージ">
                        <table>
                        <tr>
                                        <th><?php echo CFS()->get('profile_name_3');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('profile_content_3');?></td>
                                </tr>
                        </table>
                </div>
                <div class="style_2">
                        <img src="<?php echo CFS()->get('profile_img_4');?>" alt="佐藤誠イメージ">
                        <table>
                        <tr>
                                        <th><?php echo CFS()->get('profile_name_4');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('profile_content_4');?></td>
                                </tr>
                        </table>
                </div>
                <div class="style_2">
                        <img src="<?php echo CFS()->get('profile_img_5');?>" alt="佐藤誠イメージ">
                        <table>
                        <tr>
                                        <th><?php echo CFS()->get('profile_name_5');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('profile_content_5');?></td>
                                </tr>
                        </table>
                </div>

        </div>
<?php get_footer();?>
