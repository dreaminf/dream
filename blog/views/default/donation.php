<?php
use \common\service\GlobalUrlService;
use \blog\components\UrlService;
?>
<div class="col-md-8 main-content">
	<article class="post">
		<table class="table table-bordered text-center">
			<thead>
			<tr>
				<td>赞助人</td>
				<td>赞助金额</td>
				<td>赞助时间</td>
				<td>赞助方式</td>
				<td width="200">赞助原因</td>
			</tr>
			</thead>
			<tbody>
                <tr>
                    <td>德鸿</td>
                    <td>66.00</td>
                    <td>2017-06-06</td>
                    <td>支付宝扫码</td>
                    <td class="text-left">为源码付费</td>
                </tr>
                <tr>
                    <td>咸鱼</td>
                    <td>8.88</td>
                    <td>2017-05-20</td>
                    <td>QQ红包</td>
                    <td class="text-left">为知识付费，文章地址:<a href="https://mp.weixin.qq.com/s?__biz=MzU0MDAwNDY2OQ==&mid=2247483651&idx=1&sn=9a2e947e4557b0513bd987c4395fd70d&chksm=fb3e9951cc4910473d6ffe35357e9b11648712746f3804aeaf2acc07e8c352028280113a3fb7#rd" target="_blank">谁的青春不迷茫</a></td>
                </tr>
                <tr>
                    <td>叫我大头</td>
                    <td>1.00</td>
                    <td>2017-05-10</td>
                    <td>支付宝</td>
                    <td class="text-left">任性没留言</td>
                </tr>
                <tr>
                    <td>匿名</td>
                    <td>5.66</td>
                    <td>2017-04-24</td>
                    <td>微信扫码</td>
                    <td class="text-left">任性没留言</td>
                </tr>
                <tr>
                    <td>唐萪衷</td>
                    <td>88.00</td>
                    <td>2016-11-09</td>
                    <td>微信红包</td>
                    <td class="text-left">
                        做档案录入需要拍照上传保存,参考博文：<a target="_blank" href="<?=UrlService::buildUrl('/default/info',['id'=>150]);?>">HTML5 拍照上传</a>
                    </td>
                </tr>
			</tbody>
		</table>
	</article>
</div>
<div class="col-md-4 sidebar">
	<div class="widget">
		<h4 class="title">感谢您的支持</h4>
		<div class="content m_qrcode">
			<img title="扫一扫微信赞助" src="<?=GlobalUrlService::buildStaticUrl("/images/pay/pay_wechat.jpg");?>" style="max-width: 100%;" height="300">
			<img title="扫一扫支付宝赞助" src="<?=GlobalUrlService::buildStaticUrl("/images/pay/pay_alipay.jpg");?>" style="max-width: 100%;" height="300">

            <img title="扫一扫支付宝赞助" src="<?=GlobalUrlService::buildStaticUrl("/images/pay/pay_qq.jpg");?>" style="max-width: 100%;" height="300">
		</div>
	</div>
</div>