



<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
  <body id="top">
    <!-- Header -->
      <header id="header">
        <a href="<?php $this->options->siteUrl(); ?>" class="image avatar"><img src="<?php $this->options->logoUrl() ?>" alt="" /></a>
        <h1><strong><?php $this->options->title() ?></strong></h1><?php $this->options->description() ?><br><br>        
      </header>
    <!-- Main -->
      <div id="main">   
		  <p><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></p> 
<?php while($this->next()): ?>
<section id="one">
<header class="major">
<h2><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
</header>
<p><span class="post-category">分类：<?php $this->category(','); ?></span> / <span class="post-date">时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span> / <span class="comments-link"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span></p>
<p><?php $this->content(''); ?></p>

</section>
 <?php endwhile; ?>    
<hr><?php $this->pageNav('前一页', '后一页'); ?>
      </div>      
  <?php $this->need('footer.php'); ?>









