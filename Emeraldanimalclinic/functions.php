
<?php function setup_theme() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');


function add_nen_year_archives( $link_html ) {
    $regex = array (
      "/ title='([\d]{4})'/" => " title='$1年'",
      "/ ([\d]{4}) /"        => " $1年 ",
      "/>([\d]{4})<\/a>/"    => ">$1年</a>"
    );
    $link_html = preg_replace( array_keys( $regex ), $regex, $link_html );
    return $link_html;
  }
  add_filter( 'get_archives_link', 'add_nen_year_archives' );


  add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
	    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	    $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
	    $title = '「404」ページが見つかりません';
	} else {

	}
    return $title;
});