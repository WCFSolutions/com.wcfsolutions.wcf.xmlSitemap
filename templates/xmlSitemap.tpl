<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	{foreach from=$sitemapItems item=item}
		<url>
			<loc>{PAGE_URL}/{$item.url}</loc>
			{if $item.lastModificationTime}<lastmod>{@DATE_W3C|date:$item.lastModificationTime}</lastmod>{/if}
			{if $item.changeFrequency}<changefreq>{@DATE_W3C|date:$item.changeFrequency}</changefreq>{/if}
			<priority>{@$item.priority}</priority>
		</url>
	{/foreach}
</urlset> 