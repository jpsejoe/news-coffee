
<?php get_header(); ?>

<div class="album py-5 bg-light">
    <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="content">

                  <?php
                  //if ( have_posts() ) {
                  //  while ( have_posts() ){
                  //    the_post();
                  ?>

                      <? //カード読み込み ?>
                      <?php //get_template_part('card'); ?>

                  <?php
                    //}
                  //}
                  ?>
<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;?>
<?php
$args = array(
'post_type' => 'post',
'posts_per_page' => 18,
'paged' => $paged,
'orderby' => 'post_date',
'order' => 'DESC',
);
  ?>
  <?php $posts = new WP_Query($args);?>
  <?php if ($posts -> have_posts()) : ?>
   <?php while($posts -> have_posts()) : $posts -> the_post();?>
        <?php get_template_part('card'); ?>
   <?php endwhile;?>
  <?php endif; wp_reset_postdata();?>
 
 <div id="more_disp">
 <!--<div id="more_disp position-absolute top-50 start-50">-->
 <!--<div id="more_disp position-static top-50 start-50">-->
       <button type="button" class="btn btn-outline-primary p-post-btn more_button">
       次の記事を読み込み
       </button>
 </div>
</div>
    </div>
</div>

<script>

  var now_post_num = 20; // 現在表示されている数
  var get_post_num = now_post_num; // 一度に取得する数
//$(function(){
jQuery(function($){
    $(document).on('click', '.p-post-btn', function() {

      var ajax_url = '<?php echo bloginfo("template_url");?>/page-readmore.php';

      $.ajax({
        type: 'post',
        url: ajax_url,
        data: {
            'now_post_num': now_post_num,
            'get_post_num': get_post_num,
        },
        dataType: 'html',
      })
      .done(function(data){
        now_post_num = now_post_num + get_post_num;
        $("#more_disp").remove();
        $("#content").append(data);
      })
      .fail(function(){ // ajax通信成失敗の処理
        alert('エラーが発生しました');
      })
      return false;
    });
  });


  </script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

