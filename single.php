<style>
.style_container{
        padding: 0rem 15rem 0rem 15rem;
}
.style_container tr{
        font-size: 1.75rem;
        border-bottom: 2px solid black;
        border-color: #dc143c;
        border-collapse: separate;
}
.style_container img{
    width: 100%;
    max-width: 600px;
    min-width: 250px;
    height: auto;

}
.style_container a{
        font-size: 2rem;
        text-align: right;
        color: #dc143c;
        text-decoration: none;
}
.style_container a:hover{
        color: #dc142c;
}

</style>
<?php get_header(); 
        $check =  CFS()->get('event_img');
        $url = get_template_directory_uri(); ?>
        
<div class="style_container">
        <h1><br</h1><br>
        <table>
                <tr>
                        <th>
                        <?php echo CFS()->get('event_title');?>
                        </th>
                </tr>
                <tr>
                        <td width="70%">
                        <?php echo CFS()->get('event_content');?>
                        </td>
                        <td width="30%"> 
                        <img src="<?php if($check){echo $check;}else{echo $url."/img/wharf_site_noImage.png";}?>" alt="<?php echo CFS()->get('event_title');?>">
                        </td>
                </tr>
        </table>
        <a href="<?php bloginfo('url'); ?>/event">→BACK</a>
        
</div>
<?php get_footer();?>