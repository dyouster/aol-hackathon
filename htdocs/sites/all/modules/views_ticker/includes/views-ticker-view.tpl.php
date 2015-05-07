<?php
// $Id$

/**
 * @file
 * Displays a scrolling list.
 *
 * @ingroup views_templates
 */
?>
<!-- start scroll -->
<?php
print "<div class='view view-$viewname'><div class='view-content view-content-$viewname'>";

	print "<div>";
	print "<ul id='views-ticker-liScroll-$viewname'>";

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span></li>";

foreach ($rows as $row)
{

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span><span class='pipe_separator'>|</span></li>";
}

foreach ($rows as $row)
{

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span><span class='pipe_separator'>|</span></li>";
}

foreach ($rows as $row)
{

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span><span class='pipe_separator'>|</span></li>";
}

foreach ($rows as $row)
{

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span><span class='pipe_separator'>|</span></li>";
}

foreach ($rows as $row)
{

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span><span class='pipe_separator'>|</span></li>";
}

foreach ($rows as $row)
{

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span><span class='pipe_separator'>|</span></li>";
}

foreach ($rows as $row)
{

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span><span class='pipe_separator'>|</span></li>";
}

foreach ($rows as $row)
{

	print "<li class='views-liScroll-item views-liScroll-item-$viewname'>";
	print "<span class='views-liScroll-tick-field'>$row</span><span class='pipe_separator'>|</span></li>";
}

print "</ul></div></div></div>";

?>

<!-- end scroll -->
