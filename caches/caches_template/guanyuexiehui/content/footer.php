<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer clearfix">
	<div class="foot-con clearfix">
     <div class="f_list">
     <h3 class="bl">关于我们</h3>
       <ul>
       <li><a href="">人才招聘</a></li>
        <li><a href="">隐私条款</a></li>
         <li><a href="">会员申请</a></li>
          <li><a href="">厂商申请</a></li>
       </ul>
     </div>
     
     <div class="f_list recruit">
     <h3 class="bl">友情链接</h3>
       <ul>
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=99c32cd273c57223c20074bf5196e97a&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
		<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
              <li><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a></li>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </ul>
     </div>
    
    </div>
     <p class="t_c">
     Copyright 2013 All Rights Reserved. 主办：中国音协管乐学会 联系电话：66863391 传真：51701505
<br>本网站所刊登的各种新闻﹑信息和各种专题专栏资料，均为中国管乐协会版权所有，未经协议授权，禁止下载使用。
<br>（浏览本网主页，建议将电脑显示屏的分辨率调为1024*768）您是本站第： 0033133 位访客
   </p>
</div>   
<!-- <div class="footer">
<p class="info">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a> |  
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接</a>
<br />
Powered by <strong><a href="http://www.phpcms.cn" target="_blank">PHPCMS</a></strong> <em><?php echo get_pc_version(1);?></em> &copy; 2011 <img src="<?php echo IMG_PATH;?>copyright.gif"/><?php echo tjcode();?><?php echo runhook('glogal_footer')?>
</p>
</div>
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script> -->
</body>
</html>