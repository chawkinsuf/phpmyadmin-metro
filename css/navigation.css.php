<?php

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}
?>

/******************************************************************************/
/* Navigation */

#pma_navigation {
    width: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    overflow: hidden;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: 0;
    height: 100%;
    background: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    z-index: 800;
}

#pma_navigation select, 
#pma_navigation#recentTable
{
}

#pma_navigation input[type=text]
{
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}

#pma_navigation a img 
{
	border: 0;
}

#pma_navigation a:link,
#pma_navigation a:visited,
#pma_navigation a:active 
{
	text-decoration: none;
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

#pma_navigation select#select_server,
#pma_navigation select#lightm_db 
{
	width: 100%;
}

/* buttons in some browsers (eg. Konqueror) are block elements,
   this breaks design */
   
#pma_navigation button 
{
	display: inline;
}

#pma_navigation_content {
    width: 100%;
	height: 100%;
    position: absolute;
    top: 0;
    <?php echo $left; ?>: 0;
    z-index: 0;
}

#pma_navigation ul {
    margin: 0;
}

#pma_navigation form {
    margin: 0;
    padding: 0;
    display: inline;
}


/******************************************************************************/
/* specific elements */

#pma_navigation div.pageselector {
    text-align: center;
    margin: 0;
    margin-<?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}

#pma_navigation #pmalogo:after
{
	font-family: 'Open Sans Extrabold';
	text-transform: uppercase;
	margin-left: 5px;
	content: 'phpMyAdmin';
}

#pma_navigation #pmalogo
{
	margin: 0px;
	padding: 12px;
	background: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	font-size: 14px;
	cursor: default;
	height: 15px;
	line-height: 100%;
}

#pma_navigation #imgpmalogo
{
	display: none;
}

#pma_navigation #recentTableList 
{
	text-align: center;
	padding: 10px;
}

#pma_navigation #recentTableList select 
{
	min-width: 100%;
}

#pma_navigation #databaseList 
{
	text-align: center;
	margin: 10px;
}

#pma_navigation #leftframelinks
{
	padding-top: 1em;
	padding-bottom: 1em;
	text-align: center;
	background-color: <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

li a .ic_b_browse 
{
	display: none;
}

div#left_tableList li a:first-child:before
{
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
	font-family: 'IcoMoon';
	content: "";
	margin: 10px;
}

div#left_tableList li:hover a:first-child:before
{
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
}

img.ic_b_home, img.ic_s_loggoff, img.ic_b_selboard, img.ic_b_docs, img.ic_b_sqlhelp, img.ic_s_reload
{
	display: none;
}

#leftframelinks a
{
	display: inline-block;
	height: 16px;
	width: 16px;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
	margin-right: 10px;
	padding: 5px;
	font-size: 15px;
}

#leftframelinks a:hover
{
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}

#leftframelinks a:first-child:before
{
	font-family: 'IcoMoon';
	content: "!";
}

#leftframelinks a:nth-child(2):before
{
	font-family: 'IcoMoon';
	content: "\e040";
}

#leftframelinks a:nth-child(3):before
{
	font-family: 'IcoMoon';
	content: "T";
}

#leftframelinks a:nth-child(4):before
{
	font-family: 'IcoMoon';
	content: "";
}

#leftframelinks a:nth-child(5):before
{
	font-family: 'IcoMoon';
	content: "";
}

#leftframelinks a:nth-child(6):before
{
	font-family: 'IcoMoon';
	content: "";
}


#pma_navigation #serverChoice,
#pma_navigation #databaseList,
#pma_navigation div.pageselector.dbselector {
    text-align: center;
    margin: 5px 10px 0px;
    border: 0;
}

#pma_navigation_content > img.throbber {
    display: block;
    margin: .3em auto 0;
}

/* Navigation tree*/
#pma_navigation_tree {
    position: absolute;
	top: 100px;
	bottom: 0px;
	left: 10px;
	width: 240px;
	overflow-x: hidden;
	overflow-y: auto;
	z-index: 1000;
}

#pma_navigation_tree a {
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#pma_navigation_tree a:hover {
    text-decoration: none;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}
#pma_navigation_tree li.activePointer {
    color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
    
}
#pma_navigation_tree ul {
    clear: both;
    padding: 0;
    list-style-type: none;
    margin: 0;
}
#pma_navigation_tree ul ul {
    position: relative;
}
#pma_navigation_tree li {
    white-space: nowrap;
    clear: both;
    min-height: 16px;
}
#pma_navigation_tree img {
    margin: 0;
}
.expander .ic_b_plus {
    background-position: 0 -849px !important;
}

.expander .ic_b_minus {
    background-position: 0 -753px !important;
}

#pma_navigation_tree div.block {
    position: relative;
    width: 1.5em;
    height: 1.5em;
    min-width: 16px;
    min-height: 16px;
    float: <?php echo $left; ?>;
}
#pma_navigation_tree div.block i,
#pma_navigation_tree div.block b {
    width: 1.5em;
    height: 1.5em;
    min-width: 16px;
    min-height: 8px;
    position: absolute;
    bottom: 0.7em;
    <?php echo $left; ?>: 0.75em;
    z-index: 0;
}
#pma_navigation_tree div.block i { /* Top and right segments for the tree element connections */
    display: block;
    border-<?php echo $left; ?>: 1px solid #616161;
    border-bottom: 1px solid #616161;
}
#pma_navigation_tree div.block i.first { /* Removes top segment */
    border-<?php echo $left; ?>: 0;
}
#pma_navigation_tree div.block b { /* Bottom segment for the tree element connections */
    display: block;
    height: 0.75em;
    bottom: 0;
    <?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #616161;
}
#pma_navigation_tree div.block a,
#pma_navigation_tree div.block u {
    position: absolute;
    <?php echo $left; ?>: 50%;
    top: 50%;
    z-index: 10;
}
#pma_navigation_tree div.block img {
    position: relative;
    top: -0.6em;
    <?php echo $left; ?>: 0;
    margin-<?php echo $left; ?>: -7px;
}
#pma_navigation_tree div.throbber img {
    top: 2px;
    <?php echo $left; ?>: 2px;
}
#pma_navigation_tree li.last > ul {
    background: none;
}
#pma_navigation_tree li > a, #pma_navigation_tree li > i {
    line-height: 1.5em;
    height: 1.5em;
    padding-<?php echo $left; ?>: 0.3em;
}
#pma_navigation_tree .list_container {
    border-<?php echo $left; ?>: 1px solid #616161;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_tree .last > .list_container {
    border-<?php echo $left; ?>: 0 solid #616161;
}

/* Fast filter */
li.fast_filter {
    padding-<?php echo $left; ?>: 0.75em;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $right; ?>: 15px;
    border-<?php echo $left; ?>: 1px solid #616161;
}
li.fast_filter input {
    width: 100%;
	background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    color: #666666;
    font-family: "Open Sans","Segoe UI";
	padding: 4px;
}

li.fast_filter span {
    position: relative;
    <?php echo $right; ?>: 1.5em;
    padding: 0.2em;
    cursor: pointer;
    font-weight: bold;
    color: #800;
}
li.fast_filter.db_fast_filter {
    border: 0;
}

/* Resize handler */
#pma_navigation_resizer {
    width: 1px;
    height: 100%;
    background-color: #aaa;
    cursor: col-resize;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: 250px;
    z-index: 801;
}

#pma_navigation_collapser {
    width: 20px;
    padding-top: 6px;
	padding-bottom: 10px;
	background: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    line-height: 22px;
    color: #fff;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    text-align: center;
    cursor: pointer;
    z-index: 801;
}
