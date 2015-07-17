<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="contain">
	<div class="banner">
		<div class="index_focus">

			<a href="javascript:;" class="index_focus_pre" title="上一张">上一张</a> <a
				href="javascript:;" class="index_focus_next" title="下一张">下一张</a>

			<div class="bd">
				<ul style="position: relative; width: 1440px; height: 300px;">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b3392f71b8db6c854c53f6b1fe49f9c0&action=position&posid=21&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'5',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li style="position: absolute; width: 1440px; left: 0px; top: 0px; display: none;">
					<a href="<?php echo $r['url'];?>" class="pic"> <img class="pic"
							src="<?php echo $r['thumb'];?>" max-height="395" width="100%"
							alt="">
					</a></li> 
					<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>

			<div class="slide_nav">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=46f4c3d517146b81f115521ef2ad2c10&action=position&posid=21&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'5',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> <a href="javascript:;">●</a> <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

			</div>

		</div>
		<script type="text/javascript">
$(document).ready(function(){

	$(".index_focus").hover(function(){
		$(this).find(".index_focus_pre,.index_focus_next").stop(true, true).fadeTo("show", 1)
	},function(){
		$(this).find(".index_focus_pre,.index_focus_next").fadeOut()
	});
	
	$(".index_focus").slide({
		titCell: ".slide_nav a ",
		mainCell: ".bd ul",
		delayTime: 500,
		interTime: 3500,
		prevCell:".index_focus_pre",
		nextCell:".index_focus_next",
		effect: "fold",
		autoPlay: true,
		trigger: "click",
		startFun:function(i){
			$(".index_focus_info").eq(i).find("h3").css("display","block").fadeTo(1000,1);
			$(".index_focus_info").eq(i).find(".text").css("display","block").fadeTo(1000,1);
		}
	});

});
</script>
	</div>
	<div class="docbody clearfix">
		<div class="main clearfix">
			<div class="bg_f4f5f7 clearfix">
				<div class="leftCon">
					<div class="title">
						<h3 class="f_16">管乐资讯</h3>
						<a class="more">更多>></a>
					</div>
					<div class="w_180">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec14122e6f0ce60d3e640b1a794d2862&action=position&posid=1&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'1',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<img src="<?php echo thumb($r[thumb],180,121);?>">
							<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<ul class="slide">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ae215117278608215a377dd8ceafa113&action=position&posid=1&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'3',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li><img src="<?php echo thumb($r[thumb],55,36);?>" width="55" height="36"></li>
							<?php $n++;}unset($n); ?> 
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
					<div class="w_340">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec14122e6f0ce60d3e640b1a794d2862&action=position&posid=1&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'1',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<p class="first">
								<b><?php echo $r['title'];?></b><span class="time"><?php echo date('y/m/d',$r[inputtime]);?></span>
							</p>
							<p class="h_40 releative">
								<?php echo $r['content'];?><a class="xiangxi"
									style="right: 10px;" href="#">详细》</a>
							</p>
							<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<ul class="news">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ae215117278608215a377dd8ceafa113&action=position&posid=1&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'3',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span><?php echo date('y/m/d',$r[inputtime]);?></span></li>
							<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
				</div>
				<div class="rightCon">
					<div class="title">
						<h3 class="f_16">通知公告</h3>
						<a class="more">更多>></a>
					</div>
					<ul class="news" style="margin-top: 0px;">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dfaedbd7421e67e3d9abe5993a741e65&action=lists&catid=9&order=ID+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'ID DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span><?php echo date('y/m/d',$r[updatetime]);?></span></li>
						<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</div>
			</div>
		</div>
		<div class="main search">
			<form>
				<label>搜索范围:</label><select class="sel"><option>全文</option>
					<option>全文</option>
					<option>全文</option></select> <label>关键字:</label><input type="text"
					class="txt"> <a class="searchButton" href="#">搜索</a>
			</form>
		</div>
		<div class="main">
			<div class="bg_f4f5f7 clearfix">
				<div class="title">
					<h3 class="f_16">活动展览</h3>
					<a class="more">更多>></a>
				</div>
				<ul class="listImg">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9aaa8a9e9ee0b283c429f02ea18a236&action=lists&catid=10&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'listorder DESC','limit'=>'5',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],218,102);?>"></a></li>
					<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
				<ul class="news activityCon fl">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9aaa8a9e9ee0b283c429f02ea18a236&action=lists&catid=10&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'listorder DESC','limit'=>'5',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span><?php echo date('y/m/d',$r[updatetime]);?></span></li>
					<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
				<ul class="news activityCon fr">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9aaa8a9e9ee0b283c429f02ea18a236&action=lists&catid=10&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'listorder DESC','limit'=>'5',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span><?php echo date('y/m/d',$r[updatetime]);?></span></li>
					<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
			<div class="bg_f4f5f7 clearfix" style="margin-top: 20px;">
				<div class="title">
					<h3 class="f_16">学会简介</h3>
					<a class="more">更多>></a>
				</div>
				<p class="sidebarleft">在海外，有一群热爱歌曲创作和演唱的华人群热爱歌曲创作和演唱的华人群热爱歌曲创作和演唱的华人群热爱歌曲创作和演唱的华人群热爱歌曲创作和演唱的华人群热爱歌曲创作演唱的华人群热爱歌曲创作演唱的华人群热爱歌曲创作演唱的华人群热爱歌曲创作演唱的华人群热爱歌曲创作演唱的华人群热爱歌演唱的华人群热爱歌曲创作演唱的华人群热爱歌曲创作曲创作和演唱的华人</p>
				<div class="sidebarcenter">
					<span class="f_16">申请会员的基本要求可以获得福利：</span>
					<p class="c_cen">
						作和演唱的华人群热爱歌曲创作和演唱的爱歌曲创作和演唱的华人群热华人群热爱作和演唱的华人群热爱歌曲创作和演唱的华人群热爱<a
							class="xiangxi">详细》</a>
					</p>
					<a class="member" href="#">个人会员申请</a>
				</div>
				<div class="sidebarcenter">
					<span class="f_16">申请会员的基本要求可以获得福利：</span>
					<p class="c_cen">
						作和演唱的华人群热爱歌曲创作和演唱的华人群热爱作和演唱的华人群热爱歌曲创作和演唱的华人群热爱<a class="xiangxi">详细》</a>
					</p>
					<a class="member" href="#">个人会员申请</a>

				</div>
			</div>
		</div>

		<p>
			<img src="image/avent.jpg">
		</p>
		<div class="main clearfix">
			<div class="pin">
				<div class="title">
					<h3 class="f_16">专家风采</h3>
					<a class="more">更多>></a>
				</div>
				<dl class="pro clearfix">
					<dt>
						<img src="image/porect.jpg">
					</dt>
					<dd>
						<h3 class="tit">专家姓名：黄老师</h3>
						<p class="info">个字自动省略字自个字自动省略字自个字自动省略字自个字自动省略字自个字自动省略字自个字自动省略字自</p>
					</dd>
				</dl>
				<p class="info clearfix">自动省略字自个字自动省略字自个字自自动省略字自个字自动省略字自个字自自动省略字自个字自动省略字自个字自自动省略字自个字自动省略字自个字自自动省略字自个字自动省略字自个字自</p>
			</div>
			<div class="pin">
				<div class="title">
					<h3 class="f_16">团队会员风采</h3>
					<a class="more">更多>></a>
				</div>
				<dl class="pro clearfix">
					<dt>
						<img src="image/porect.jpg">
					</dt>
					<dd>
						<h3 class="tit">专家姓名：黄老师</h3>
						<p class="info">
							个字自动省略字自个字自动省略字自个字自动省略字自个字自动省略字自个字自动省略字自个字自动省略字自</p>
					</dd>
				</dl>
				<p class="info clearfix">自动省略字自个字自动省略字自个字自自动省略字自个字自动省略字自个字自自动省略字自个字自动省略字自个字自自动省略字自个字自动省略字自个字自自动省略字自个字自动省略字自个字自</p>
			</div>
		</div>
		<div class="m_t">
			<div class="main clearfix">
				<div class="title">
					<h3 class="f_16">管乐资料</h3>
				</div>
				<div class="hot_book">
					<h3 class="tit">热门书籍</h3>
					<ul class="line clearfix">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=63a8ba27b91673abfb2f2334db12c6e4&action=position&posid=19&order=listorder+DESC&num=4&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'4',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><img
								src="<?php echo thumb($r[thumb],89,116);?>" width="89" height="116"><br>阅读：<?php echo $r['times'];?>次<br>价格：<?php echo $r['price'];?>元</a></li>
						<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

					</ul>
				</div>
				<div class="clickVideo">
					<h3 class="tit">视频点播排行版</h3>
					<ul class="line">
						<li><em class="lines">1</em><a href="">演示视频详视视频详视频详频详情</a></li>
						<li><em class="lines">2</em><a href="">演示视频详情</a></li>
						<li><em class="lines">3</em><a href="">演示视视频详频详情</a></li>
						<li><em>4</em><a href="">演示视视频详频详情</a></li>
						<li><em>5</em><a href="">演示视频详情</a></li>
					</ul>
				</div>
				<div class="clickVideo">
					<h3 class="tit">视频点播排行版</h3>
					<ul class="line">
						<li><em class="lines">1</em><a href="">演示视频详视视频详视频详频详情</a></li>
						<li><em class="lines">2</em><a href="">演示视频详情</a></li>
						<li><em class="lines">3</em><a href="">演示视视频详频详情</a></li>
						<li><em>4</em><a href="">演示视视频详频详情</a></li>
						<li><em>5</em><a href="">演示视频详情</a></li>
					</ul>
				</div>
			</div>
		</div>
		<p>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aa6b6b36c42134ec4e02bd77d22d4a05&action=position&posid=12&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','order'=>'listorder DESC','limit'=>'1',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<img src="<?php echo $r['thumb'];?>">
						
						<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		
		</p>

		<div class="main clearfix">

			<div class="blk_18">
				<span class="scroll">中外乐团</span> <a class="LeftBotton"
					onmousedown="ISL_GoUp_1()" onmouseup="ISL_StopUp_1()"
					onmouseout="ISL_StopUp_1()" href="javascript:void(0);"
					target="_self"></a>
				<div class="pcont" id="ISL_Cont_1">
					<div class="ScrCont">
						<div id="List1_1">
							<!-- piclist begin -->
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=48ca7c4f85bbb5388e6d17989ec223e3&action=lists&catid=15&order=listorder+DESC&num=7&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'7',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<a class="pl" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],195,115);?>" alt=""
								width="195" height="115" /></a>
					<?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<!-- piclist end -->
						</div>
						<div id="List2_1"></div>
					</div>
				</div>
				<a class="RightBotton" onmousedown="ISL_GoDown_1()"
					onmouseup="ISL_StopDown_1()" onmouseout="ISL_StopDown_1()"
					href="javascript:void(0);" target="_self"></a>
			</div>
			<div class="c"></div>
			<script type="text/javascript">
        <!--
        picrun_ini()
        //-->
        </script>
			<div class="bottomList clearfix">
				<h3 class="tit">乐团历史</h3>
				<ul class="news">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=48ca7c4f85bbb5388e6d17989ec223e3&action=lists&catid=15&order=listorder+DESC&num=7&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'7',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li> <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
			<div class="bottomList clearfix">
				<h3 class="tit">重要活动</h3>
				<ul class="news">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e73ad6c63a4708b5ea48bf65c62d8a74&action=lists&catid=16&order=listorder+DESC&num=7&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'7',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li> <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
			<div class="bottomList clearfix">
				<h3 class="tit">管乐节日</h3>
				<ul class="news">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=eb98b73af721bca1a0e4848fc936a66e&action=lists&catid=17&order=listorder+DESC&num=7&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'7',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li> <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
		</div>
	</div>
	<!--main-->
	<!-- 
<div class="main">
	<div class="col-left">
    	<div class="news-hot">
        	<div class="content">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79d92623a8337007f1f3bcdd35d5f304&action=position&posid=2&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <h4 class="blue"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>
                <p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?></p>
                <div class="bk20 hr"><hr /></div>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
            </div>
        </div>
        <div class="slide">
            <div class="FocusPic">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
            	<div class="content" id="main-slide">
                    <div class="changeDiv">  
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><img src="<?php echo thumb($r['thumb'],310,260);?>" alt="<?php echo $r['title'];?>" width="310" height="260" /></a>
                    <?php $n++;}unset($n); ?>
                    </div>
                </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="bk10"></div>
        	<div class="box extend">
            	<div class="col-left">争议</div>
                <div class="col-auto">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=62e5ac893abc3866a6bda2553c0a156a&pos=index_block_1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_block_1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
                <script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/10.js"></script>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
        		<h5>图片新闻</h5>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d4b9e3c7c2cc4bd0cec8b1fac9ae764&action=position&posid=12&thumb=1&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'listorder DESC','limit'=>'10',));}?>
            <ul class="content news-photo picbig">
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li>
                    <div class="img-wrap">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],110,0);?>" title="<?php echo $r['title'];?>"/></a>
                    </div>
                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],20);?></a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="bk10"></div>
        <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
        <?php $num++?>
        <div class="box cat-area" <?php if($num%2!=0) { ?>style=" margin-right:10px"<?php } ?>>
        		<h5 class="title-1"><?php echo $r['catname'];?><a href="<?php echo $r['url'];?>" class="more">更多>></a></h5>
             <div class="content">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef41dd2190feee94486d0264e7354ef2&action=lists&catid=%24r%5Bcatid%5D&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
             <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
             	<p>
             		<img src="<?php echo thumb($v[thumb],90,0);?>" width="90" height="60"/>
                    <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>
                </p>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                
                <div class="bk15 hr"></div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9a5a0d61f080dbce4b2774d783edd34&action=lists&catid=%24r%5Bcatid%5D&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'5',));}?>

                <ul class="list lh24 f14">
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                	<li>·<a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],40);?></a></li>
                <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <?php if($num%2==0) { ?><div class="bk10"></div><?php } ?>
		<?php $n++;}unset($n); ?>
    </div>
    <div class="col-auto">
    	<div class="box">
        	 <h5 class="title-2">公告<a href="" class="more">&nbsp;</a></h5>
             <div class="content">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=54b0fffbbaac31bf6b88d6a6b5be8f2c&action=lists&siteid=%24siteid&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'2',));}?>
                <ul class="list lh24 f14">
                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <li> <a href="<?php echo APP_PATH;?>index.php?m=announce&c=index&a=show&aid=<?php echo $r['aid'];?>"><?php echo $r['title'];?></a></li>
                   <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
        	<h5 class="title-2">专题<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
            <div class="content special">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=d0da2a95c4fd410d9fde0a59d59f48fc&action=lists&siteid=%24siteid&elite=1&listorder=3&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'lists')) {$data = $special_tag->lists(array('siteid'=>$siteid,'elite'=>'1','listorder'=>'3','limit'=>'2',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<?php if($n!=1) { ?><div class="hr bk15"></div><?php } ?>
                <p style="margin:0">
             		<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="90" height="70" /></a>
                    <strong><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],'18');?></a></strong><br /><?php echo str_cut($r['description'],50);?>
                </p>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
            <h5 class="title-2"><span class="rt fn f12 tab SwapTab"><span class="fb">热点</span> | <span >评论</span> | <span>关注</span></span>排行</h5>
            <div class="tab-content">
            <ul class="content digg">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="content digg hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=55e75bfad540869982aca092575756e4&action=bang&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array()).'55e75bfad540869982aca092575756e4');if(!$data = tpl_cache($tag_cache_name,3600)){$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="content digg hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            </div>
        </div><div class="bk10"></div>
        <div class="box">
            <h5 class="title-2">调查问卷<a href="<?php echo APP_PATH;?>index.php?m=vote&c=index&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
 
<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=1&type=3"></script>
        </div>
    </div>
    <div class="bk10"></div>
	
	<div class="box blogroll ylink">
    	<h5><a href="<?php echo APP_PATH;?>index.php?m=link&siteid=<?php echo $siteid;?>" hidefocus="true" class="rt">更多>>12</a>友情链接1<a href="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" class="red">申请链接</a></h5>
        <div class="bk10"></div>
	<ul class="colli imgul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=80574ec69aa2a6c10ed30f7c49e0eda7&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
        <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
        <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" /></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=99c32cd273c57223c20074bf5196e97a&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
     <div class="bk10"></div>
	<div class="linka">
		<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
              <?php if($type==0) { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> |
              <?php } else { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" style="border: 1px solid #FFBE7A;"></a> 
              <?php } ?>
		<?php $n++;}unset($n); ?>
 	</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>
<script type="text/javascript"> 
$(function(){
	new slide("#main-slide","cur",310,260,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})
</script>
 -->
	<?php include template("content","footer"); ?>