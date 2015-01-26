/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    
      config.filebrowserBrowseUrl = '/bundles/webmanagementckeditor/plugins/kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl = '/bundles/webmanagementckeditor/plugins/kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl = '/bundles/webmanagementckeditor/plugins/kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl = '/bundles/webmanagementckeditor/plugins/kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl = '/bundles/webmanagementckeditor/plugins/plugins/kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl = '/bundles/webmanagementckeditor/plugins/plugins/kcfinder/upload.php?type=flash';
   config.fullPage = false;
	// Define changes to default configuration here. For example:
	 config.language = 'pl';
	 config.uiColor = '#FAFAFA';
};
