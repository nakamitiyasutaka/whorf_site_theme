<?php
/*
Template Name:studioページ
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
</style>
<?php get_header(); ?>
        <div class="style_container">
                <h2>若葉町ウォーフ紹介</h2>
                <div class="style_box1">
                        <img src="<?php echo CFS()->get('studio_img_1');?>" alt="wharfについて">
                        <table>
                                <tr>
                                        <th><?php echo CFS()->get('studio_title_1');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('studio_content_1');?></td>
                                </tr>
                        </table>
                </div>
                <div class="style_box1">
                <table>
                                <tr>
                                        <th><?php echo CFS()->get('studio_title_2');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('studio_content_2');?></td>
                                </tr>
                        </table>
                        <img src="<?php echo CFS()->get('studio_img_2');?>" alt="wharfについて2">
                </div>
        </div>
<?php get_footer();?>
