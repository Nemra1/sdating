{* default canvas *}

<div id="page_canvas">
		{ads pos='top'}
		{component PageHeader}
		{if !isset($sidebar) || $sidebar}
			{component PageSidebar}
		{/if}
	<div id="content">
		{ads pos='middle'}
		{component GroupBriefInfo}
		{component BreadCrumb}
				
		<h1 id="page_content_header">{$content_header}</h1>
