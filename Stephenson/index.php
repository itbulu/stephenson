<?php
/**
 * Typecho主题：Stephenson（ <a href="https://www.itbulu.com/typecho-stephenson.html" target="_blank">主题发布地址</a>）
 * 纪念Stephenson，近代蒸汽车的奠基人命名的主题。
 *
 * 基于Layui前端框架样式架设的单栏Typecho主题，适合个人日志博客使用。 建站交流QQ群： <font color="red">594467847</font>。
 * 申明：主题是免费发布至互联网共享的，使用者务必用于正规网站和学习，如果因用于违规用途，用户自行承担法律责任。
 * @package Stephenson单栏博客主题 
 * @author 老蒋部落
 * @version 2.1
 * @link https://www.itbulu.com/
 */
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








