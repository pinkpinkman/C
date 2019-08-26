<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html  lang="zh-CN" prefix="og: http://ogp.me/ns#">
<head>
    <title>360 Total Security 博客</title>
    <style type="text/css">
      .b-page {
    background: #fff;
    box-shadow: 0px 1px 2px 0px #E2E2E2;
      }
      .page {
          width: 95%;
          padding: 30px 15px;
          background: #FFF;
          text-align: right;
          overflow: hidden;
      }
        .page .first,
        .page .prev,
        .page .current,
        .page .num,
        .page .current,
        .page .next,
        .page .end {
            padding: 8px 16px;
            margin: 0px 5px;
            display: inline-block;
            color: #008CBA;
            border: 1px solid #F2F2F2;
            border-radius: 5px;
        }
        .page .first:hover,
        .page .prev:hover,
        .page .current:hover,
        .page .num:hover,
        .page .current:hover,
        .page .next:hover,
        .page .end:hover {
            text-decoration: none;
            background: #F8F5F5;
        }
        .page .current {
            background-color: #008CBA;
            color: #FFF;
            border-radius: 5px;
            border: 1px solid #008CBA;
        }
        .page .current:hover {
            text-decoration: none;
            background: #008CBA;
        }
        .page .not-allowed {
            cursor: not-allowed;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<link href='/blog/Public/Home/style/style.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/blog/Public/Home/style/font.css">
<script type="text/javascript" src="/blog/Public/Home/style/jquery-1.11.3.min.js"></script>






<style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>

</head>

<body class="p-blog zh">
<!-- Desktop Header -->
<!-- 导航啦开始 -->
<header>
    <div class="header">
        <div class="logo">
            <div class="title">
                <a href="#">
                    <img src="#" alt="360 Total Security Blog Logo" title="360 Total Security Blog Logo" width="126" height="45" />
                    <h1>博客222</h1>
                </a>
            </div>

        </div>
        <nav class="navbar" role="navigation">
            <ul class="nav">
<!--                <li><a class="active" href="#">最新文章</a></li>-->
                <?php if(is_array($navers)): $i = 0; $__LIST__ = $navers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <?php if($vo['cate_id'] == 1 ): ?><a    href="/blog/index.php/Home/index/index" class=""><?php echo ($vo["cate_name"]); ?></a>
                    <?php elseif($vo['cate_id'] == 2 ): ?>
                    <a    href="/blog/index.php/Home/article/index" class=""><?php echo ($vo["cate_name"]); ?></a>
                    <?php elseif($vo['cate_id'] == 3 ): ?>
                    <a    href="/blog/index.php/Home/about/index" class=""><?php echo ($vo["cate_name"]); ?></a><?php endif; ?>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </nav>
    </div>
</header>

<div class="anchor-bar">
    <ul>
        <li class="active"><a href="#">最新文章</a></li>
        <li><a href="#">产品相关</a></li>
        <li><a href="#">公司新闻</a></li>
        <li>
            <a class="download" data-ga="download|anchor-bar|ts|" href="<?php echo U('Admin/Login/login');?>">Whether to log in now？</a>
        </li>
    </ul>
</div>



<!-- 导航栏结束 -->

<div class="body">
<div class="wrapper cls">
    <div class="main">

      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="list">
          <ul>
            <li>
	          	<h1 class="title"><a href="/blog/index.php/Home/Index/article/id/<?php echo ($vo["f_id"]); ?>" ><?php echo ($vo["f_title"]); ?></a></h1>
				<div class="info"><span><?php echo (date("Y-m-d",$vo["time"])); ?></span></div>
				<div class="thumb">
          <a href="#" >
          <?php if($vo['f_pic'] != null): ?><img width="1200" height="630" src="/blog<?php echo ($vo["f_pic"]); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
          <?php else: ?>
          <img width="1200" height="630" src="/blog/Upl+256oads/58466607_p0_master1200.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /><?php endif; ?>
          </a>
        </div>

          	</li>
          </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
      <div class="list page b-page">
              <?php echo ($page); ?>
              </div>
    </div>

    <div class="sticky-content-spacer">
    <div id="sidebar" class="side">
        <!-- Desktop Sidebar -->

        <div class="widget-download">
            <div class="free-download">
                <img class="ts-logo" width="228" src="#" alt="360 Total Security" />
                <a class="title" data-ga="download|sidebar|ts|360 Total Security 博客" target="_blank" title="加入我们" href="//shang.qq.com/wpa/qunwpa?idkey=6430153b661e8fab2a5d7f44e5a8fe4cab93d21e11682bf79431e2afd210f81c">加入我们</a>
                <span class="os">适用于Windows 10/8.1/8/7/Vista/XP (32,64bit)</span>
            </div>
        </div>



        <!-- 热门文章 -->
        <div class="pop">
            <div class="title">热门文章</div>
            <ul>
                <?php if(is_array($arem)): $i = 0; $__LIST__ = $arem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div class="thumb"><a href="/blog/index.php/Home/article/article/id/<?php echo ($vo["a_id"]); ?>">
                        <img width="1350" height="675" src="/blog<?php echo ($vo["a_pic"]); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/></a>
                    </div>
                    <h2 class="topic"><a href="/blog/index.php/Home/article/article/id/<?php echo ($vo["a_id"]); ?>"><?php echo ($vo["a_title"]); ?></a></h2>
                    <div class="clear"></div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <!-- 热门文章end -->
    </div>
</div>
<div class="clear"></div>
</div>
</div>
<!--<div class="pagebar">-->
<!--    <a href='https://blog.360totalsecurity.com/zh-cn/' class='active'>1</a><a href='https://blog.360totalsecurity.com/zh-cn/page/2/'>2</a><a href="https://blog.360totalsecurity.com/zh-cn/page/2/" class="next icon alt">></a>    </div>-->

    <footer>
    <div class = "footer">
        <div class="row">
            <dl>
                <dt>产品</dt>
                <dd>
                    <a target="_blank" href="#">360 Total Security</a>
                </dd>
                <dd>
                    <a target="_blank" href="//www.360totalsecurity.com/zh-cn/features/360-total-security-essential/">360 Total Security Essential</a>
                </dd>
                <dd>
                    <a target="_blank" href="//www.360totalsecurity.com/zh-cn/features/360-total-security-mac/">360 Total Security for Mac</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://360safe.com/mobile-security.html" rel="nofollow">360 Security for Android</a>
                </dd>
            </dl>
            <dl>
                <dt>新闻</dt>
                <dd><a href="https://blog.360totalsecurity.com/zh-cn/category/%e4%ba%a7%e5%93%81%e7%9b%b8%e5%85%b3/">产品相关</a></dd><dd><a href="https://blog.360totalsecurity.com/zh-cn/category/%e5%85%ac%e5%8f%b8%e6%96%b0%e9%97%bb/">公司新闻</a></dd>                    </dl>
            <dl>
                <dt>联系我们</dt>
                <dd>
                    <a class="email-link" href="mailto:support@360overseas.com">support@360overseas.com</a>
                </dd>
                <dd>
                    <a href="//www.360totalsecurity.com/zh-cn/about/">Qihoo 360</a>
                </dd>
            </dl>
        </div>

        <div class="row">
            <span class="copyright">© 2014 - 2017 Qihu 360 Software Co. Limited</span>
        </div>
    </div>
</footer>



<script>
    $(function($){
        $('[data-ga]').click(function() {
            var e = $(this).attr('data-ga').split('|');
            ga('send', 'event', e[0], e[1], e[2]);
        });


    });

    $(function() {
        'use strict';

        var $window = $(window);

        $window.scroll(checkAnchorBar);

        checkAnchorBar();

        function checkAnchorBar() {
            var $anchorBar = $('.anchor-bar');
            var scrollTop = $window.scrollTop();

            var $anchorStartElem = $('header');
            var attachedClass = 'attached';

            var threshold = $anchorStartElem.offset().top + $anchorStartElem.height();

            if (!$anchorBar.hasClass(attachedClass) && scrollTop >= threshold) {
                $anchorBar.addClass(attachedClass);
            } else if ($anchorBar.hasClass(attachedClass) && scrollTop < threshold) {
                $anchorBar.removeClass(attachedClass);
            }
        }
    });
</script>


<div id="fb-root"></div>


</body>
</html>


        <script>
        $(function($){
            $('[data-ga]').click(function() {
                var e = $(this).attr('data-ga').split('|');
                ga('send', 'event', e[0], e[1], e[2]);
            });
        });

        $(function() {
          'use strict';
          var $window = $(window);
          $window.scroll(checkAnchorBar);
          checkAnchorBar();

          function checkAnchorBar() {
            var $anchorBar = $('.anchor-bar');
            var scrollTop = $window.scrollTop();

            var $anchorStartElem = $('header');
            var attachedClass = 'attached';

            var threshold = $anchorStartElem.offset().top + $anchorStartElem.height();

            if (!$anchorBar.hasClass(attachedClass) && scrollTop >= threshold) {
              $anchorBar.addClass(attachedClass);
            } else if ($anchorBar.hasClass(attachedClass) && scrollTop < threshold) {
              $anchorBar.removeClass(attachedClass);
            }
          }
        });
    </script>
    <div id="fb-root"></div>
    </body>
</html>