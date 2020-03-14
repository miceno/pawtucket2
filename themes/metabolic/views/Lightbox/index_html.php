<?php
/* ----------------------------------------------------------------------
 * views/Browse/browse_results_html.php :
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2019 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This source code is free and modifiable under the terms of
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
	$export_formats = $this->getVar('export_formats');
	$config = $this->getVar('config');
?>

<div id="lightbox"></div>

<script type="text/javascript">
	pawtucketUIApps['Lightbox'] = {
        'selector': '#lightbox',
        'data': {
			baseUrl: "<?php print __CA_URL_ROOT__."/index.php/Lightbox"; ?>",
            showLastLightboxOnLoad: <?php print ((bool)$this->request->getParameter('showList', pInteger)) ? 'false' : 'true'; ?>,
			view: "thumbnails",
			browseConfig: <?php print json_encode($config->get("lightboxBrowse")); ?>,
			exportFormats: <?php print json_encode($export_formats); ?>
        }
    };
</script>
