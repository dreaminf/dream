<?php
use admin\components\AdminUrlService;
?>
<div class="pagination-wrap">
	<span class="pagination-count">共<?=$current_page_count;?>条记录｜每页<?=$pages["page_size"];?>条</span>
	<ul class="pagination">
		<?php if($pages['previous']): ?>
		<li class="head">
			<a data-page="1" href="<?=$url?AdminUrlService::buildUrl($url,array_merge($search_conditions,[ 'p' => 1 ])):'javascript:void(0)';?>">首页</a>
		</li>
		<?php endif;?>
		<?php  for($page = $pages['from'];$page<=$pages['end'];$page++):?>
			<?php if($page == $pages['current']):?>
				<li class="active" data-page="<?=$page?>">
                    <a href="javascript:void(0)"><?=$page;?></a>
                </li>
			<?php else: ?>
				<li>
                    <a href="<?=$url?AdminUrlService::buildUrl($url,array_merge($search_conditions,[ 'p' => $page ])):'javascript:void(0)';?>" data-page="<?=$page?>"><?=$page;?></a>
                </li>
			<?php endif ;?>
		<?php endfor; ?>
		<?php if($pages['next']): ?>
			<li class="tail">
                <a href="<?=$url?AdminUrlService::buildUrl($url,array_merge($search_conditions,[ 'p' => $pages['totalPage'] ])):'javascript:void(0)';?>" data-page="<?=$pages['totalPage']?>">尾页</a>
            </li>
		<?php endif;?>
	</ul>
</div>

