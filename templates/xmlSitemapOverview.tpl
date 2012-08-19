<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	{foreach from=$sitemaps item=sitemap}
		<sitemap>
			<loc>{PAGE_URL}/index.php?page={$sitemap.title|ucfirst}XMLSitemap{if $sitemap.pageNo != 1}&amp;pageNo={@$sitemap.pageNo}{/if}</loc>
			{if $sitemap.lastModificationTime}<lastmod>{@DATE_W3C|date:$sitemap.lastModificationTime}</lastmod>{/if}
		</sitemap>
	{/foreach}
</sitemapindex>