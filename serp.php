<?php
/*
Plugin Name: Serp Toolbar
Plugin URI: http://rakeshraushan.info
Description: Plugin for check the serp keyword status.
Version: 1.0
Author: Rakesh Raushan
Author URI: http://rakeshraushan.info
License: GPL2
*/
function rakesh_add()  
    {  
        // Register the script like this for a plugin:  
        wp_register_script( 'custom-script', plugins_url( '/serp.js', __FILE__ ) );  
        // or  
        // Register the script like this for a theme:  
                   // For either a plugin or a theme, you can then enqueue the script:  
        wp_enqueue_script( 'custom-script' );  
    }  
    add_action( 'wp_enqueue_scripts', 'rakesh_add' );  
	
	function serp_css()  
{  
    // Register the style like this for a plugin:  
    wp_register_style( 'custom-style', plugins_url( '/stylen.css', __FILE__ ), array(), '20120208', 'all' );  
    // or  
     
    // For either a plugin or a theme, you can then enqueue the style:  
    wp_enqueue_style( 'custom-style' );  
}  
add_action( 'wp_enqueue_scripts', 'serp_css' );
	
	

add_shortcode( 'serp-tool', 'serp_func' );	
function serp_func(){
?>
<div class="snippet-optimizer">
    <div id="seoform">
        <div id="inputdiv">
            <div class="left_table">
                <table border="0" cellpadding="0" cellspacing="0" id="inputtable">
                    <tr>
                        <td>
                            <label for="in_title" style="display:block; margin:0; padding:0; width:276px; float:left; text-align:left; line-height:20px;">Title</label><span id="titlechar">70</span><span style="display:block; margin:0; padding:0; clear:both;"></span>
                            <textarea id="in_title" name="in_title" rows="2" cols="70" onkeyup="titleFunction();" onfocus="if(this.value=='This is an Example of a Title Tag that is Seventy Characters in Length')this.value='';" onblur="if(this.value=='')this.value='This is an Example of a Title Tag that is Seventy Characters in Length'; titleFunction();" tabindex="1">This is an Example of a Title Tag that is Seventy Characters in Length</textarea>
                            <div class="input_subtext" id="subtext_title"><span class="tip_subtext" id="tip_title">Tip:&nbsp;&nbsp;</span><a>Google limits SERP titles by pixel width, not by character count</a></div>
                        </td>
                    </tr>
                    <tr id="box_rich_date">
                        <td style="width:627px;">
                            <div id="box_richtext">
                                <label for="in_richtext">Rich Snippet Text</label><br />
                                <textarea id="in_richtext" name="in_richtext" rows="1" cols="54" onkeyup="richTextFunction();" onfocus="" onblur="" tabindex="2">Review by Organic Seo - Aug 1, 2013 - Price range: $999.99</textarea>
                                <div class="input_subtext" id="subtext_richtext"><span class="tip_subtext" id="tip_richtext">Example:&nbsp;&nbsp;</span>Review by Organic Seo - Aug 1, 2013 - Price range: $999.99</div>
                            </div>
                            <div id="box_date">
                                <label for="in_datevalue"><span id="enteradate">Enter a date:</span></label><br />
                                <textarea id="in_datevalue" name="in_datevalue" rows="1" cols="11" onkeyup="dateFunction();" onfocus="" onblur="" tabindex="3"></textarea>
                                <div class="input_subtext" id="subtext_datevalue"><span class="tip_subtext" id="tip_datevalue">Example:&nbsp;&nbsp;</span>Jan 1, 2011</div>
                            </div>
                            <div style="clear:both;"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="in_snippet" style="display:block; margin:0; padding:0; width:276px; float:left; text-align:left; line-height:20px;">Description</label><span id="snippetchar" style="display:block; margin:0; padding:0; width:276px; float:right; text-align:right; line-height:20px;">156</span><span style="display:block; margin:0; padding:0; clear:both;"></span>
                            <textarea id="in_snippet" name="in_snippet" rows="3" cols="70" onkeyup="snippetFunction();" onfocus="if(this.value=='Here is an example of what a snippet looks like in Google\'s SERPs. The content that appears here is usually taken from the Meta Description tag if relevant.')this.value='';" onblur="if(this.value=='')this.value='Here is an example of what a snippet looks like in Google\'s SERPs. The content that appears here is usually taken from the Meta Description tag if relevant.'; snippetFunction();" tabindex="4">Here is an example of what a snippet looks like in Google's SERPs. The content that appears here is usually taken from the Meta Description tag if relevant.</textarea>
                            <div style="display:none" class="input_subtext" id="subtext_snippet"><span class="tip_subtext" id="tip_snippet">Tip:&nbsp;&nbsp;</span>the maximum number of characters in a Google SERP snippet is <span class="char_subtext" id="subtext_snippet_char">156</span></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="in_url">URL</label><br />
                            <textarea id="in_url" name="in_url" rows="1" cols="70" onkeyup="urlFunction();" onfocus="if(this.value=='http://rakeshraushan.info/')this.value='';" onblur="if(this.value=='')this.value='http://rakeshraushan.info/'; urlFunction();" tabindex="5">http://rakeshraushan.info/</textarea>
                            <div class="input_subtext" id="subtext_url"><span class="tip_subtext" id="tip_url">Example:&nbsp;&nbsp;</span>http://rakeshraushan.info/</div>
                        </td>
                    </tr>
                    <tr id="box_bold">
                        <td style="width:641px;">
                            <div style="float:left; width:100%; height:104px;">
                                <label for="in_bold">Bold Words</label><br />
                                <textarea id="in_bold" name="in_bold" rows="4" cols="50" onchange="makeBoldWords(); titleFunction(); snippetFunction(); urlFunction();" tabindex="6">Paste keywords here. snippet tag google title</textarea><br />
                                <div class="input_subtext" id="subtext_bold"><span class="tip_subtext" id="tip_bold">Tip:&nbsp;&nbsp;</span>paste words here to simulate bolded query terms.</div>
                            </div>
                            <div style="float:right;" class="button">
                                
                                <button onclick="makeBoldWords(); titleFunction(); snippetFunction(); urlFunction();" type="button" tabindex="7">Refresh</button>
                            </div>
                            <div style="clear:both;"></div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="right_div">
                <table border="0" cellpadding="0" cellspacing="0" id="displayops">
                    <tr>
                        <td valign="top">
                            <div class="display_option">
                                Display Options
                            </div>
                            <div class="right_display">
                                <input id="check_serpelements" name="check_serpelements" type="checkbox" onclick="showSerpElements();" tabindex="8" />
                                <label for="check_serpelements"><span style="font-family:Georgia, 'Times New Roman', Times, serif; text-shadow:#CCC 0 1px 1px;"><span style="color: rgb(0, 57, 182);">G</span><span style="color: rgb(196, 18, 0);">o</span><span style="color: rgb(243, 197, 24);">o</span><span style="color: rgb(0, 57, 182);">g</span><span style="color: rgb(48, 167, 47);">l</span><span style="color: rgb(196, 18, 0);">e</span></span> SERP Simulator</label><br />
                                <span id="box_topads">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input id="check_topads" name="check_topads" type="checkbox" onclick="showTopads();" tabindex="9" />
                                    <label for="check_topads"><span>Sponsored Links</span> (top)</label><br />
                                </span>
                                <span id="box_rightads">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input id="check_rightads" name="check_rightads" type="checkbox" onclick="showRightads();" tabindex="10" />
                                    <label for="check_rightads"><span>Sponsored Links</span> (right)</label><br />
                                </span>
                                <span id="box_organics">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input id="check_organics" name="check_organics" type="checkbox" onclick="showOrganics();" tabindex="11" />
                                    <label for="check_organics">Organic Results</label><br />
                                </span>
                                <input id="check_richsnippet" name="check_richsnippet" type="checkbox" onclick="showRichSnippet(); focusRichText();" tabindex="12" />
                                <label for="check_richsnippet"><span>Add rich snippet text</span></label><br />
                                <span id="box_stars" style="display:block;">
                                    <input style="display:block; float:left; margin-left:16px;" id="check_stars" name="check_stars" type="checkbox" onclick="showRichSnippet();" tabindex="13" />
                                    <label for="check_stars" style="display:block; float:left; height:13px; line-height:13px; margin:4px 3px 3px 3px;">
                                        <span style="display:block;height:9px;width:50px;margin:0;padding:0;position:relative;overflow:hidden"> <img alt="Rated 4.5 out of 5.0" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'serp/images/nav_logo13.png'; ?>" style="left:0px;position:absolute;top:-110px"/> </span>
                                    </label>
                                    <br style="clear:both;" />
                                </span>
                                <div style="display:none">
                                    <input id="check_cached" name="check_cached" type="checkbox" onclick="showCached();" checked="checked" tabindex="14" />
                                    <label for="check_cached">Show <span style="color:#4272DB; font-family:Arial, sans-serif; font-size:small; cursor:pointer;" onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='none';">Cached</span></label><br />
                                    <input id="check_similar" name="check_similar" type="checkbox" onclick="showCached();" checked="checked" tabindex="15" />
                                    <label for="check_similar">Show <span style="color:#4272DB; font-family:Arial, sans-serif; font-size:small; cursor:pointer;" onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='none';">Similar</span></label><br />
                                </div>
                                <input id="check_date" name="check_date" type="checkbox" onclick="useTodaysDate(); showDate(); focusDateValue();" tabindex="16" />
                                <label for="check_date"><span id="addadate">Add a date</span></label><br />
                                <input id="check_bold" name="check_bold" type="checkbox" onclick="showBold(); focusBold(); titleFunction(); snippetFunction(); urlFunction();" tabindex="17" />
                                <label for="check_bold"><b>Bold</b> words</label>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="notes_div">
                <div class="notes_text">
                    Notes
                </div>
                <p id="notes_default" class="notes">
                    <b style="color:#FF6501;font-weight: bold;">TIP:</b><br /><br />
                    If you select the <b>Add a date</b> checkbox, today's date will be filled in automatically.<br /><br />
                    If you plan on publishing your web page at a later date, you can still edit the date input field manually.<br /><br />
                    In most cases, the date Google shows in the SERP snippet will match the date it found in your page content (for example, the date a blog post was first published).<br /><br />
                    If your web page does not have a date somewhere in its content, Google probably won't show one in your SERP snippet either.<br /><br />
                    When a date is displayed in Google's search results, each character of that date string (including spaces and each dot in the ellipsis) is counted towards your 156-character limit. The SERP Snippet Optimizer has been programmed to mimic Google's behavior in that regard.<br /><br />
                </p>
                <p id="notes_sponsored" class="notes">
                    The <strong>Sponsored Links</strong> ads shown in this tool's simulated Google SERP are <strong>not real</strong>.<br /><br />
                    The web pages listed in these faux advertisements are ones that I genuinely endorse, and therefore, the links to those pages are natural, followed links.<br /><br />
                    The entire content of each faux advertisement is <strong>original material that I wrote</strong> specifically for this snippet tool.<br /><br />
                    None of these ads were based on any real AdWords campaigns, and the owners of the web pages mentioned were not involved in the creation of this content.<br /><br />
                </p>
            </div>                              
            <div style="clear:both;"></div>
        </div>
    </div>
</div>

<!-- BEGIN GOOGLE CONTENT -->
<div id="google-content">
<div id="gcontainer">
<div id="gborder">
<div id="gsr">
<div id="out_toplinks">
<!-- BEGIN TOP LINKS -->
<div class="tpblk"></div>

<!-- TOP HEADER -->
<div class="tphdr">
    <div id="gog">
        <div id="gbar">
            <b class="gb1">Web</b> <a href="#" class="gb1" onclick="return false;">Images</a> <a href="#" class="gb1" onclick="return false;">Videos</a> <a href="#" class="gb1" onclick="return false;">Maps</a> <a href="#" class="gb1" onclick="return false;">News</a> <a href="#" class="gb1" onclick="return false;">Shopping</a> <a href="#" class="gb1" onclick="return false;">Gmail</a> <a href="#" class="gb3" onclick="return false;"><span style="text-decoration:underline;">more</span> <small>&#9660;</small></a>
            <div class="gbm" id="gbi">
                <a href="#" class="gb2" onclick="return false;">Books</a> <a href="#" class="gb2" onclick="return false;">Finance</a> <a href="#" class="gb2" onclick="return false;">Translate</a> <a href="#" class="gb2" onclick="return false;">Scholar</a> <a href="#" class="gb2" onclick="return false;">Blogs</a>
                <div class="gb2">
                    <div class="gbd">
                    </div>
                </div>
                <a href="#" class="gb2" onclick="return false;">YouTube</a> <a href="#" class="gb2" onclick="return false;">Calendar</a> <a href="#" class="gb2" onclick="return false;">Photos</a> <a href="#" class="gb2" onclick="return false;">Documents</a> <a href="#" class="gb2" onclick="return false;">Reader</a> <a href="#" class="gb2" onclick="return false;">Sites</a> <a href="#" class="gb2" onclick="return false;">Groups</a>
                <div class="gb2">
                    <div class="gbd">
                    </div>
                </div>
                <a href="#" class="gb2" onclick="return false;">even more &raquo;</a>
            </div>
            
        </div>
        <div id="guser" style="width:100%;">
            <span id="gbn" class="gbi"></span><span id="gbf" class="gbf"></span><span id="gbe"><a href="#" class="gb4" onclick="return false;">Web History</a> | </span><a href="#" class="gb4" onclick="return false;">Search settings</a> | <a href="#" class="gb4" onclick="return false;">Sign in</a>
        </div>
        <div class="gbh" style="left:0">
        </div>
        <div class="gbh" style="right:0">
        </div>
    </div>
</div>
</div>
<div id="cnt">

    <!-- RESULTS HEADER -->
<div id="out_topsearch">
    <div class="rshdr">
        <div id="sfcnt" style="position:relative;left:0;z-index:2">
            <form action="#" id="tsf" method="get" style="display:block;margin:0;background:none">
                <div style="position:relative">
                    <div style="position:absolute;left:0;top:-7px;padding:0 20px 0 12px;">
                        <h1><a href="#" title="Go to Google Home" id="logo" onclick="return false;"><img width="" height="" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'serp/images/google-logo.jpg'; ?>" alt="" /></a></h1>
                    </div>
                    <div class="tsf-p" style="padding-bottom:2px">
                        <table border="0" cellpadding="0" cellspacing="0" style="border-bottom:1px solid #e7e7e7;padding:8px 0 0;position:relative">
                            <tr>
                                <td class="lst-td"><div style="position:relative;zoom:1">
                                        <input class="lst" type="text" name="q" maxlength="2048" value="" title="Search" onclick="return false;" />
                                        <span id="tsf-oq" style="display:none">seo</span>
                                    </div></td>
                                <td><div class="ds">
                                        <div class="lsbb">
                                            <input type="submit" name="btnG" class="lsb" value="Search" onclick="return false;" />
                                        </div>
                                    </div></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
            <div class="lsd">
            </div>
        </div>
        <div id="subform_ctrl">
            <div style="float:right">
                <a href="#" class="gl nobr" style="color:#4373db" onclick="return false;">Advanced search</a>
            </div>
            <div>
                <div id="resultStats">
                    About 1,050,000 results (0.36 seconds)&nbsp;
                </div>
            </div>
        </div>
    </div>
</div>
    <div style="position:relative">
        <div id="center_col">

        <div id="out_topads">
            <!-- TOP ADS -->
            <div class="c" id="tads" style="margin:0 0 14px;padding:2px 7px 1px 8px;min-height:0">
                <div id="topspons">
                    <h2 style="float:right;font-weight:normal;padding:1px 0 1px 1px;font-size:11px;margin:3px 0 0">Sponsored links</h2>
                </div>
                <ol style="padding:3px 0">
                    <li class="taf">
                        <h3><a href="#" id="pa1" onclick="return false;">Don't Believe <b>SEO</b> Hype!</a></h3>
                        <cite><b>SEO</b>Bullshit.com/</cite>&nbsp; &nbsp; &nbsp; If it's about <b>SEO</b> and it's here... It's probably bullshit.
                    </li>
                    <li class="tal">
                        <h3><a href="#" id="pa2" onclick="return false;">Hottest <b>SEO</b> in the <b>World</b>?</a></h3>
                        <cite>Twitter.com/<b>SEO_In_USA</cite>&nbsp; &nbsp; &nbsp; The only thing hotter than this <b>SEO</b> is his search engine optimization!
                    </li>
                </ol>
            </div>
        </div>

            <div id="out_searchresults">
                <!-- SEARCH RESULTS -->
                <div id="res" class="med">
                    <h2 class="hd">Search Results</h2>
                    <div id="ires">
                        <ol>
                            <li class="g" id="toporganic">
                                <div class="vsc">
                                    
                                    <div class="s">
                                        <div class="f kv">
                                            <cite>http://rakeshraushan.info/</cite>
                                        </div>
                                        <span class="seo_snippet">This guide shows you how to design a custom Twitter background image that looks great on any screen resolution and sends a professional first impression.</span>
                                    </div>
                                </div>
                            </li>
                            <li class="g">
                                <div class="vsc">
                                    <h3 class="r"><a href="#" onclick="return false;" class="l"><span id="out_title">This is an Example of a Title Tag that is Seventy Characters in Length</span></a></h3>
                                    <div class="s">
                                        <div class="f kv">
                                            <cite><span id="out_url">http://rakeshraushan.info/</span><span id="out_dash1"></span></cite>
                                        </div>
                                        <div class="f kv">
                                            <div class="f" id="out_richsnippet">
                                            <div id="out_stars">
                                                <table border="0" cellpadding="0" cellspacing="0" class="ti" style="height:px;width:px">
                                                    <tbody>
                                                        <tr>
                                                            <td><p style="height:9px;width:10px;margin:0;padding:0;position:relative;overflow:hidden"> <img alt="Rated 4.5 out of 5.0" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'serp/images/nav_logo13.png'; ?>" style="left:0px;position:absolute;top:-115px"/> </p></td>
                                                            <td><p style="height:9px;width:10px;margin:0;padding:0;position:relative;overflow:hidden"> <img alt="" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'serp/images/nav_logo13.png'; ?>" style="left:0px;position:absolute;top:-115px"/> </p></td>
                                                            <td><p style="height:9px;width:10px;margin:0;padding:0;position:relative;overflow:hidden"> <img alt="" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'serp/images/nav_logo13.png'; ?>" style="left:0px;position:absolute;top:-115px"/> </p></td>
                                                            <td><p style="height:9px;width:10px;margin:0;padding:0;position:relative;overflow:hidden"> <img alt="" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'serp/images/nav_logo13.png'; ?>" style="left:0px;position:absolute;top:-115px"/> </p></td>
                                                            <td><p style="height:9px;width:10px;margin:0;padding:0;position:relative;overflow:hidden"> <img alt="" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'serp/images/nav_logo13.png'; ?>" style="left:-117px;position:absolute;top:-112px"/> </p></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                                <span id="out_richtext">Review by Darren Slatten - Jan 1, 2010 - Price range: $999.99</span><br />
                                            </div>
                                            <span id="out_datesnip"><span class="seo_date"><span id="out_date"></span><span id="out_datedots">&nbsp;&ndash;&nbsp;</span></span><span class="seo_snippet"><span id="out_snippet">Here is an example of what a snippet looks like in Google's SERPs. The content that appears here is usually taken from the Meta Description tag if relevant.</span></span></span>
                                            <span class="gl"><span id="out_cached"></span><span id="out_dash2"></span><span id="out_similar"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="g" id="bottomorganic">
                                <div class="vsc">
                                    <h3 class="r"><a href="#" class="l">WordPress Comments Slow Down Page Speed</a></h3>
                                        <div class="s">
                                        <div class="f kv">
                                            <cite>http://rakeshraushan.info/</cite>
                                        </div>
                                        <div class="f kv">
                                            <span class="seo_date">Feb 1, 2010 <b>&ndash;</b></span> <span class="seo_snippet">Enabling comments and custom Gravatars on your WordPress blog can encourage visitors to participate, but it also negatively impacts your <b>...</b></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <!-- RIGHT HAND SIDE -->
        <div id="rhs" style="display:block;border-left:1px solid #d3e1f9;position:absolute;right:0px;top:0;width:264px">
            <div id="rhs_block" style="display:block;padding-top:5px;position:relative;left:0;top:0">

                <div id="out_rightads">
                    <table cellpadding="0" cellspacing="0" id="mbEnd" style="padding:0;white-space:nowrap">
                        <tr>
                            <td class="std"><h2 style="font-size:11px;padding:1px 0 4px;margin:0;text-align:left">Sponsored links</h2>
                                <ol class="nobr" style="margin-top:-11px">
                                    <li>
                                        <h3><a href="#" id="an3" onclick="return false;"><b>SEO</b> Consultants Directory</a></h3>
                                        Directory of Professional <b>SEO</b> &amp; SEM<br />
                                        Consultants From Around the <b>World</b>.<br />
                                        <cite>http://www.<b>organicmarketingservices</b>.com/</cite>
                                    </li>
            <li>
                                        <h3><a href="http://rakeshraushan.info" id="an1"><b>Worlds Greatest SEO</b></a></h3>
                                        Rank #1 in Google within 24 hours,<br />
                                        or no money back... GUARANTEED!<br />
                                        <cite>www.<b>organicmarketingservices</b>.com</cite>
                                    </li>
                                    <li>
                                                                           Learn How to Control Your Website's<br />
                                        Search Engine Results Page Listing!<br />
                                        <cite><b>organicmarketingservices</b>.com/</cite>
                                    </li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td id="rhspad">&nbsp;</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>

<div id="out_leftside">
        <!-- LEFT HAND SIDE -->
        <div class="lhshdr">

            <div id="leftnav" style="padding-top:3px;padding-left:4px;position:absolute;top:0;width:151px">
                <div id="ms">
                    <ul>
                        <li class="mitem msel"><span class="micon" style="background-position:-20px -132px"></span>Everything </li>
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:0 -152px"></span>Blogs</a> </li>
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:-120px -132px"></span>News</a> </li>
                    </ul>
                    <ul class="nojsb" id="hidden_modes">
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:-40px -132px"></span>Images</a> </li>
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:-80px -132px"></span>Videos</a> </li>
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:-80px -152px"></span>Maps</a> </li>
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:-120px -152px"></span>Shopping</a> </li>
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:-40px -152px"></span>Books</a> </li>
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:-40px -172px"></span>Updates</a> </li>
                        <li class="mitem"><a href="#" class="q qs" onclick="return false;"><span class="micon" style="background-position:0 -172px"></span>Discussions</a> </li>
                    </ul>
                    <a href="#" class="jsb q nj" id="showmodes" style="border-bottom:1px solid #c9d7f1;padding-bottom:9px" onclick="return false;"><span class="micon"></span><span class="msm">More</span><span class="msl">Fewer</span></a>
                </div>
                <div style="clear:both;overflow:hidden">
                    <h2 class="hd">Search Options</h2>
                    <ul id="tbd" class="med">
                        <li class="jsb">
                            <ul class="tbt">
                                <li class="tbos" id="frim_">All results </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="tbt">
                                <li class="tbou" id="clue_1"><a href="#" class="q qs" onclick="return false;" >Related searches</a> </li>
                                <li class="jsb tbou" id="ww_1"><a href="#" class="q qs nj" onclick="return false;" >Wonder wheel</a> </li>
                                <li class="tbou" id="tl_1"><a href="#" class="q qs" onclick="return false;" >Timeline</a> </li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#" class="nj q" id="tbpi" style="clear:both;display:block;margin:8px" onclick="return false;"><span id="tbp" style="background-position:-153px -99px;border:0;display:block;float:left;height:14px;margin-right:3px;width:14px"></span><span class="tbpo">Fewer search tools</span><span class="tbpc">More search tools</span></a>
                </div>
            </div>
        </div>
</div>
    </div>

    <div id="out_bottomsearch">
        <!-- FOOTER -->
        <div id="foot" class="tsf-p">
            <div id="navcnt">
                <table id="nav" style="border-collapse:collapse;text-align:left;direction:ltr;margin:17px auto 0">
                    <tr valign="top">
                        <td class="b"><span class="csb" style="background-position:-24px 0;width:28px"></span></td>
                        <td class="cur"><span class="csb" style="background-position:-53px 0;width:20px"></span>1</td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>2</a></td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>3</a></td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>4</a></td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>5</a></td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>6</a></td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>7</a></td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>8</a></td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>9</a></td>
                        <td><a href="#" class="fl" onclick="return false;"><span class="csb ch" style="background-position:-74px 0;width:20px"></span>10</a></td>
                        <td class="b"><a href="#" class="pn" style="text-align:left" onclick="return false;"><span class="csb ch" style="background-position:-96px 0;width:71px"></span><span style="display:block;margin-left:53px">Next</span></a></td>
                    </tr>
                </table>
            </div>
            <div style="height:1px;line-height:0">
            </div>
            <div>
                <div style="margin-top:22px">
                    <form method="get" action="#">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="lst-td"><input class="lst" type="text" name="q" maxlength="2048" value="" title="Search" onclick="return false;" /></td>
                                <td><div class="ds">
                                <div class="lsbb">
                                <input type="submit" name="btnG" class="lsb" value="Search" onclick="return false;" />
                                </div>
                                </div></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <p id="bfl" style="margin:6px 0 0;text-align:center"><a href="#" onclick="return false;">View customizations</a> <a href="#" class="fl" onclick="return false;">Search&nbsp;within&nbsp;results</a> <a href="#" class="fl" onclick="return false;">Search Help</a> <a href="#" class="fl" onclick="return false;">Give us feedback</a></p>
            </div>
            <div id="fll" style="margin:19px auto 19px auto;text-align:center">
                <a href="#" onclick="return false;">Google&nbsp;Home</a><a href="#" onclick="return false;">Advertising&nbsp;Programs</a><a href="#" onclick="return false;">Business Solutions</a><a href="#" onclick="return false;">Privacy</a><a href="#" onclick="return false;">About Google</a>
            </div>
        </div>
    </div>

    <div id="xjsd"></div>
    <div id="xjsi"></div>

</div>

            </div>
        </div>
    </div>
</div>

<!-- END GOOGLE CONTENT -->

<?php }?>