<?php
/*
Template Name:innページ
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
        margin: 0 0 4rem;
}
.style_box1 img{
        width: 60%;
        height: auto;
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
        font-size: 1.2rem;
}

.style_box2{
        display: flex;
}
.style_box2 input{
        padding-left: 30%;
        width: 100%;
}
.style_box2 textarea{
        width: 100%;

}
.style_box2 label{
        font-size: 1rem;

}
.style_box2 input[type="submit"] {
        text-align: center;
        font-size: 1rem;
        padding: 1rem;
}
.style_box2 iframe {
        margin: 1rem 6rem 1rem 1rem;
        width: 60%;
        height:auto;
        max-width:800px;
        height:800px;
}
</style>
<?php get_header(); ?>
        <div class="style_container">
                <h2>innについて</h2>
                <div class="style_box1">
                        <img src="<?php echo CFS()->get('inn_img_1');?>" alt="wharfについて">
                        <table>
                                <tr>
                                        <th><?php echo CFS()->get('inn_title_1');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('inn_content_1');?></td>
                                </tr>
                        </table>
                </div>
                <div class="style_box1">
                <table>
                                <tr>
                                        <th><?php echo CFS()->get('inn_title_2');?></th>
                                </tr>
                                <tr>
                                        <td><?php echo CFS()->get('inn_content_2');?></td>
                                </tr>
                        </table>
                        <img src="<?php echo CFS()->get('inn_img_2');?>" alt="wharfについて">
                </div>
                <div class="style_box2">
                        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTokyo&amp;src=bmFrYW1pdGl5YXN1dGFrYUBnbWFpbC5jb20&amp;color=%2333B679&amp;showTitle=0&amp;showNav=1&amp;showPrint=0&amp;showDate=1&amp;showTabs=0&amp;showCalendars=0" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                        <div class="form_style">
                                <?php echo do_shortcode( '[contact-form-7 id="5" title="INNお問い合わせ"]' ); ?>
                        </div>
                </div>
        </div>
<?php get_footer();?>
