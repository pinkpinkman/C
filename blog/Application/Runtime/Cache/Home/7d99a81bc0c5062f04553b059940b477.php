<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html  lang="zh-CN" prefix="og: http://ogp.me/ns#">
<head>
    <title>文章页面</title>
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
                    <img src="/blog/Upl+256oads/新建文件夹/timg.jfif" alt="VA-11 HALL-A Blog Logo" title="VA-11 HALL-A Blog Logo" width="150" height="112.5" />
                    <h1>欢迎来VA-11 HALL-A</h1>
                </a>
            </div>

        </div>
        <nav class="navbar" role="navigation">
            <ul class="nav">
                <?php if(is_array($navers)): $i = 0; $__LIST__ = $navers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <?php if($vo['cate_id'] == 14): ?><a href="/blog/index.php/Home/index/index"><?php echo ($vo["cate_name"]); ?></a>
                        <?php elseif($vo['cate_id'] == 13): ?><a href="/blog/index.php/Home/article/index"><?php echo ($vo["cate_name"]); ?></a>
                        <?php elseif($vo['cate_id'] == 12): ?><a href="/blog/index.php/Home/about/index"><?php echo ($vo["cate_name"]); ?></a><?php endif; ?>
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
            <a class="download" data-ga="download|anchor-bar|ts|" href="#">免费下载</a>
        </li>
    </ul>
</div>



<!-- 导航栏结束 -->
<div class="body">
<div class="wrapper cls">
    <div class="main">
        <div class="list">
          <ul>
            <li>
	          	<h1 class="title"><a href="#" ><?php echo ($first["f_title"]); ?></a></h1>
				<div class="info"><span><?php echo (date("Y-m-d",$first["time"])); ?></span></div>
<!--文章内容-->
<?php echo ($first["f_content"]); ?>
<!--文章内容-->
          	</li>

          </ul>
        </div>
    </div>


    <div class="sticky-content-spacer">
    <div id="sidebar" class="side">
        <!-- Desktop Sidebar -->

        <div class="widget-download">
            <div class="free-download">
                <img class="ts-logo" width="228" src="https://blog.AWSLtotalsecurity.com/wp-content/themes/AWSLTotalSecurity/img/AWSL_logo_wide.png" alt="VA-11 HALL-A" />
                <a class="title" data-ga="download|sidebar|ts|VA-11 HALL-A 博客" target="_blank" title="快来下载 VA-11 HALL-A吧" href="#">快来下载 VA-11 HALL-A吧</a>
                <span class="os">适用于Windows 10/8.1/8/7/Vista/XP (32,64bit)</span>
            </div>
        </div>



        <!-- 热门文章 -->
        <div class="pop">
            <div class="title">热门文章</div>
            <ul>
                <?php if(is_array($arem)): $i = 0; $__LIST__ = $arem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div class="thumb"><a href="#">
                        <img width="1350" height="675" src="/blog<?php echo ($vo["a_pic"]); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/></a>
                    </div>
                    <h2 class="topic"><a href="#">VA-11 HALL-A推出文件图片防护 保护您的数据不受黑客威胁！</a></h2>
                    <div class="clear"></div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <!-- 热门文章end -->

        <div class="fb-page" data-href="https://www.facebook.com/AWSLsafe" data-width="293" data-height="320" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/AWSLsafe"><a href="https://www.facebook.com/AWSLsafe">VA-11 HALL-A</a></blockquote></div>
        </div>
    </div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="pagebar">
<a href='https://blog.AWSLtotalsecurity.com/zh-cn/' class='active'>1</a><a href='https://blog.AWSLtotalsecurity.com/zh-cn/page/2/'>2</a><a href="https://blog.VA-11 HALL-Atotalsecurity.com/zh-cn/page/2/" class="next icon alt">></a>    </div>








    <footer>
    <div class = "footer">
        <div class="row">
            <dl>
                <dt>产品</dt>
                <dd>
                    <a target="_blank" href="#">VA-11 HALL-A</a>
                </dd>
                <dd>
                    <a target="_blank" href="//www.AWSLtotalsecurity.com/zh-cn/features/AWSL-total-security-essential/">VA-11 HALL-A Essential</a>
                </dd>
                <dd>
                    <a target="_blank" href="//www.AWSLtotalsecurity.com/zh-cn/features/AWSL-total-security-mac/">VA-11 HALL-A for Mac</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://AWSLsafe.com/mobile-security.html" rel="nofollow">AWSL Security for Android</a>
                </dd>
            </dl>
            <dl>
                <dt>新闻</dt>
                <dd><a href="https://blog.AWSLtotalsecurity.com/zh-cn/category/%e4%ba%a7%e5%93%81%e7%9b%b8%e5%85%b3/">产品相关</a></dd><dd><a href="https://blog.AWSLtotalsecurity.com/zh-cn/category/%e5%85%ac%e5%8f%b8%e6%96%b0%e9%97%bb/">公司新闻</a></dd>                    </dl>
            <dl>
                <dt>联系我们</dt>
                <dd>
                    <a class="email-link" href="mailto:support@AWSLoverseas.com">support@AWSLoverseas.com</a>
                </dd>
                <dd>
                    <a href="//www.AWSLtotalsecurity.com/zh-cn/about/">Qihoo AWSL</a>
                </dd>
            </dl>
        </div>

        <div class="row">
            <span class="copyright">© 2014 - 2017 Qihu AWSL Software Co. Limited</span>
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