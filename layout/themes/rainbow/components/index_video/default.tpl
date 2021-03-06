{* Component IndexVideo *}

{container stylesheet="index_video.style"}
	{block}
	{if $service_msg}
	{block_cap title=%title}{/block_cap}
		<div class="no_content">{$service_msg}</div>
	{else}
	{block_cap title=%title}
		{menu type="ajax-block" items=$video_menu_items}
	{/block_cap}
	<div class="video_cont" {id="video_cont"}>
		{foreach from=$video item='list' key='list_name'}

		<div class="video_list" {id="video_`$list_name`"} style="display: {if $list.is_active}block;{else}none;{/if}">
			<div class="float_left">
				{if $video[$list_name].no_video}
					<div class="no_content">{$video[$list_name].no_video}</div>
				{else}
				
				{if $list.player.video_source eq 'file'}
					{component VideoPlayer video_file_url=$list.player.video_url width=474px height=351px}
				{else}
					{$list.player.code}
				{/if}
				<a class="video_title" href="{$list.player.video_page}">{$list.player.title|out_format|censor:"video":true}</a>
			</div>
			<div class="video_thumb_list thumb_cont">
				{foreach from=$list.thumbs item='thumb'}
					<div class="video_thumb">
						{if $thumb.thumb_img eq 'default'}
							<a href="{$thumb.video_page}"><div class="video_def_thumb"></div></a>
							<a class="video_thumb_title" href="{$thumb.video_page}">{$thumb.title|out_format|truncate:15|censor:"video":true}</a>
						{elseif $thumb.thumb_img eq 'friends_only'}
						<div class="video_friends_thumb"></div><span class="a_fake">{$thumb.title|out_format|truncate:15|censor:"video":true}</span>
						{else}
							<a href="{$thumb.video_page}"><img src="{$thumb.thumb_img}" width="129px" /></a>
							<a class="video_thumb_title" href="{$thumb.video_page}">{$thumb.title|out_format|truncate:15|censor:"video":true}</a>
						{/if}
					</div>
				{/foreach}
			</div>
			<div class="clr_div"></div>
				<div class="clearfix"><div class="block_toolbar"><a href="{$video[$list_name].view_more}">{text %more}</a></div></div>

			{/if}
		</div>
		{/foreach}
	</div>
	{/if}
	{/block}
{/container}

