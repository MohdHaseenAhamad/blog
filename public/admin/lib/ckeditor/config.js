/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
/*
 CKEDITOR.on('instanceReady', function (ev) {
 ev.editor.dataProcessor.writer.setRules('br',
 {
 indent: false,
 breakBeforeOpen: false,
 breakAfterOpen: false,
 breakBeforeClose: false,
 breakAfterClose: false
 });
 });
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    //config.height = '400px';
    config.autoParagraph = false;
    config.ignoreEmptyParagraph = false;
    config.pasteFromWordPromptCleanup = true;
    config.pasteFromWordRemoveFontStyles = true;
    config.forcePasteAsPlainText = true;
    config.removeFormatAttributes = true;
    config.extraPlugins = 'filebrowser';
    config.filebrowserUploadUrl = '';
    config.allowedContent = true;
    config.protectedSource.push(/<i[^>]*><\/i>/g);
    config.fillEmptyBlocks = true;
    config.forcePasteAsPlainText = true;
};


$('.ckeditor').each(function(index, element){
    //CKEDITOR.instances[$(element).attr('id')].updateElement();
    CKEDITOR.instances[$(element).attr('id')].on('change', function() {
        this.updateElement();
    });
});
