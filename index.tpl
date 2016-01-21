
{if $is_embedded != true}
<!DOCTYPE html>
<html lang="{$lang}">
<head>
    <meta charset="{$head_charset}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Serendipity v.{$serendipityVersion}">
    <title>{$head_title|default:$blogTitle}{if $head_subtitle} | {$head_subtitle}{/if}</title>
{* CANONICAL *}
    {if ($view == "entry" || $view == "start" || $view == "feed" || $view == "plugin" || $staticpage_pagetitle != "" || $robots_index == 'index')}
       <meta name="robots" content="index,follow">
    {else}
       <meta name="robots" content="noindex,follow">
    {/if}
    {if ($view == "entry")}
       <link rel="canonical" href="{$entry.rdf_ident}">
    {/if}
    {if ($view == "start")}
       <link rel="canonical" href="{$serendipityBaseURL}">
    {/if}    

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">    
      <link rel="stylesheet" href="{$head_link_stylesheet}"> 

    <link rel="alternate" type="application/rss+xml" title="{$blogTitle} RSS feed" href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/index.rss2">
    <link rel="alternate" type="application/x.atom+xml"  title="{$blogTitle} Atom feed"  href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/atom.xml">
    {if $entry_id}
        <link rel="pingback" href="{$serendipityBaseURL}comment.php?type=pingback&amp;entry_id={$entry_id}">
    {/if}   
 
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    {serendipity_hookPlugin hook="frontend_header"}
    <script src="{$head_link_script}"></script>
</head>




<body id="home">
{else}
{serendipity_hookPlugin hook="frontend_header"}
{/if}

{if $is_raw_mode != true}
<br/>

<div  id="ws" class="container">

	<div class="row">

		<div class="col-md-9"> 
		
		<div id="branding" class="left">
            <h1><a class="homelink1" href="{$serendipityBaseURL}">{$blogTitle}</a></h1>
            <div class="description padbot">{$blogDescription}</div><!-- /.description -->
        </div><!-- /#branding -->
		
		
		</div>
		<div class="col-md-3 padbot"> 
		<br/>
		 <form id="searchform" action="{$serendipityBaseURL}" method="get">
                <div>
                    <input type="hidden" name="serendipity[action]" value="search" />
                    <input type="text" value="" name="serendipity[searchTerm]" id="s" />
                    <input type="submit" id="searchsubmit" value="{$CONST.QUICKSEARCH}" name="serendipity[searchButton]" class="button" />
                </div>
            </form>
		
		
		</div>		
		
		
		
	</div>


      
           
            {serendipity_hookPlugin hook="quicksearch_plugin" hookAll="true"}
     






{include file="navbar.tpl"} 
	<div class="row">

		<div class="col-md-8"> 
     
			{if $view == "entry"} 
				<!-- single entry page including trackbacks, comments, and commentform -->
			 	{include file="./entries_single.tpl"}  
			{elseif $view == "start" && $staticpage_pagetitle == ''}
				<!-- start page displaying three different areas -->
				<div class="jumbotron lead-jumbotron">
					<div class="leadcat">
						{serendipity_fetchPrintEntries category=$template_option.catlead full=true fetchDrafts=false noSticky=true limit="0,1" template="entries_lead.tpl"}
					</div><!-- /#lead -->
				</div>   <!--   jubotron -->	
				{/if}
				      
      
			 
		
			{if $view == "start" && $staticpage_pagetitle == ''}
				<div class="row">
					<!-- start page displaying three different areas -->
					<div class="col-md-6">
						Ebene s1 
						{serendipity_fetchPrintEntries category=$template_option.catfeat full=true fetchDrafts=false noSticky=true limit="0,3" template="entries_lcol.tpl"}
					</div>
			
					<div class="col-md-6">
						Ebene s2 
						{serendipity_fetchPrintEntries category=$template_option.catx1 full=true fetchDrafts=false noSticky=true limit="0,1" template="entries_rcol.tpl"}
						{serendipity_fetchPrintEntries category=$template_option.catx2 full=true fetchDrafts=false noSticky=true limit="0,1" template="entries_rcol.tpl"}
						{serendipity_fetchPrintEntries category=$template_option.catx3 full=true fetchDrafts=false noSticky=true limit="0,1" template="entries_rcol.tpl"}
					</div>	
				</div>		

         
            
        
{elseif $view == "404"}
    <!-- if some page does not exist and/or cannot be found -->
	 
		{include file="./404.tpl"}
{else}	 
   {if $view != "entry"} {$CONTENT}{/if}
{/if}
			
  </div>
   <div class="col-md-4">
    Ebene sb 
	{if $leftSidebarElements > 0}
				{serendipity_printSidebar side="left"}
	{/if}
	{if $rightSidebarElements > 0}
				{serendipity_printSidebar side="right"}
	{/if}	
  </div> 
</div>
	 
</div> 
<div  class="container">
<div id="row ">
<div class="col-md-12"> <div class="center-block">
&#169; {$date|@formatTime:'%Y'} <span class="url fn org">{$blogTitle}</span> | Powered by <a href="http://www.s9y.org/" target="_blank">s9y</a> | <a href="{$serendipityBaseURL}feeds/index.rss2">{$CONST.ENTRIES}&nbsp;(RSS)</a> | <a href="{$serendipityBaseURL}feeds/comments.rss2">{$CONST.COMMENTS}&nbsp;(RSS)</a> | <a href="http://www.darrenhoyt.com/2007/08/05/wordpress-magazine-theme-released/" target="_blank" title="By Darren Hoyt"><em>Mimbo</em> theme</a> | Ported to rl by <a href="http://mimbo.loepi.org" title="Ported by rl">rl</a>
</div></div>
</div><!-- /#footer -->
</div>
 <script src={serendipity_getFile file="js/bootstrap.min.js"}></script>
{/if}

{$raw_data}
{serendipity_hookPlugin hook="frontend_footer"}
{if $is_embedded != true}
</body>
</html>
{/if}
