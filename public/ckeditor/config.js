/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

 CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.removeDialogTabs = 'image:advanced;link:advanced';
	config.filebrowserBrowseUrl = 'http://localhost/organica/public/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = 'http://localhost/organica/public/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = 'http://localhost/organica/public/ckfinder/ckfinder.html?type=Flash'; 
	config.filebrowserUploadUrl = 'http://localhost/organica/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'; 
	config.filebrowserImageUploadUrl = 'http://localhost/organica/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = 'http://localhost/organica/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
