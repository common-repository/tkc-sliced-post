(function() {
    tinymce.create('tinymce.plugins.tkc', {
        init : function(ed, url) {
            ed.addButton('tkcsplitpost', {
                title : 'Split post',
                cmd : 'tkcsplitpost',
                image : url + '/tkc-sliced-post.png'
            });
 
            ed.addCommand('tkcsplitpost', function() {
                ed.execCommand( 'mceInsertContent', false, '<!--nextpage-->' );
            });
        }
    });
    tinymce.PluginManager.add( 'tkc', tinymce.plugins.tkc );
})();