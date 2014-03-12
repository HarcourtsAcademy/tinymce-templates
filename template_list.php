<?php

$templatepath = dirname($_SERVER['PHP_SELF']);

?>

// This list may be created by a server logic page PHP/ASP/ASPX/JSP in some backend system.
// There templates will be displayed as a dropdown in all media dialog if the "template_external_list_url"
// option is defined in TinyMCE init.

var tinyMCETemplateList = [
	// Name, URL, Description
	["Course summary", "<?php echo $templatepath; ?>/course-summary.html", "Course summary"],
	["Information box", "<?php echo $templatepath; ?>/information-box.html", "Information box"],
  ["AV Gallery block", "<?php echo $templatepath; ?>/av-gallery-block.php", "AV Gallery block"],
	["Library block", "<?php echo $templatepath; ?>/library-block.html", "Library block"],
	["Simple table", "<?php echo $templatepath; ?>/simple-table.html", "Simple table"],
	["iStart Action Read", "<?php echo $templatepath; ?>/istart/read.html", "iStart Action Read"]
];

/* Disabled CE templates.

	["NZ CE Case Summary", "<?php echo $templatepath; ?>/nz-ce-case-summary.html", "NZ CE Case Summary"],
    ["NZ CE Congratulations", "<?php echo $templatepath; ?>/nz-ce-congratulations.html", "NZ CE Congratulations"],
	["NZ CE Extract", "<?php echo $templatepath; ?>/nz-ce-extract.html", "NZ CE Extract"],
	["NZ CE Information Note", "<?php echo $templatepath; ?>/nz-ce-information-note.html", "NZ CE Information Note"],
	["NZ CE Web Link", "<?php echo $templatepath; ?>/nz-ce-web-link.html", "NZ CE Web Link"]

*/