<?php
  function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'event';
      $args['lavel'] = 'イベント';
      
    }
    return $args;
  }
  add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

  function custom_post_labels( $labels ) {
    $labels->name = 'イベント'; 
    $labels->singular_name = 'イベント'; // 投稿
    $labels->menu_name = 'イベント投稿'; // 投稿
	$labels->name_admin_bar = 'イベント'; // 投稿
    return $labels;
  }
  add_filter( 'post_type_labels_post', 'custom_post_labels' );

  add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'Blog',
    [
      'label' => ( 'Blogの投稿' ),
      'public' => true, //管理画面から投稿・編集できるようにする場合は「true」。
      'has_archive' => true, //カスタム投稿の一覧ページが必要な場合は「true」。
      'menu_position' =>4,
    ]
  );
}
