{serendipity_hookPlugin hook="entries_header" addData="$entry_id"}
{foreach from=$entries item="dategroup"}
{foreach from=$dategroup.entries item="entry"}
    <div class="clearfloat">
       <h3><a href="{foreach from=$entry.categories item="entry_category"}{$entry_category.category_link}{/foreach}">{foreach from=$entry.categories item="entry_category"}{$entry_category.category_name|@escape}{/foreach}</a></h3>
<div class="clearfloat">
<div class="row">
{if $entry.properties.ep_MimboImage != ''}
     
		 <div class="col-md-2">
           <a href="{$entry.link}" rel="bookmark" title="Permanent link: {$entry.title}"><img src="{$entry.properties.ep_MimboImage}" alt="{$entry.properties.ep_MimboImageAlt}" /></a>
	     </div>
{/if}

  <div class="col-md-10">
        <a class="title" href="{$entry.link}" rel="bookmark"><strong>{$entry.title|@default:$entry.id}&raquo;</strong></a>
  </div>
  </div>
    </div>
        <div><small>{$entry.body|strip_tags|truncate:200:" ..."}</small></div>
    </div><!-- /.clearfloat -->
{/foreach}
{/foreach}
{serendipity_hookPlugin hook="entries_footer"}
