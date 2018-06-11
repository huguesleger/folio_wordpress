// tinymce.create('tinymce.plugins.block_txt',{
//   init: function(ed,url){
//     ed.addButton('block_detail',{
//       title : 'Ajouter un block texte',
//       image: url + '/icon-txt.png',
//       onclick : function(){
//         var blockTxtCouleur = prompt('Couleur du texte','');
//         var blockCouleur = prompt('Couleur du block texte','');
//         ed.selection.setContent('[block_detail color='+blockTxtCouleur+' background='+blockCouleur+']'+ed.selection.getContent()+'[/block_detail]');
//       }
//     });
//   },
//   createControl : function(n,cm){
//     return null;
//
//   }
// });
// tinymce.PluginManager.add('block_detail',tinymce.plugins.block_txt);

// tinymce.create('tinymce.plugins.block',{
//   init: function(ed,url){
//     ed.addButton('block',{
//       title : 'Ajouter un block image + texte',
//       image: url + '/icons-imgtxt.png',
//       onclick : function(){
//         var blockTxtCouleur = prompt('Couleur du texte','');
//         var blockCouleur = prompt('Couleur du block texte','');
//         ed.selection.setContent('[block color='+blockTxtCouleur+' background='+blockCouleur+']'+ed.selection.getContent()+'[/block]');
//       }
//     });
//   },
//   createControl : function(n,cm){
//     return null;
//
//   }
// });
// tinymce.PluginManager.add('block',tinymce.plugins.block);

(function() {
    tinymce.PluginManager.add('block_detail', function( editor, url ) {
        editor.addButton( 'block_detail', {
            title: 'block texte',
            icon: true,
            image: url + '/icon-txt.png',

            onclick: function() {
                editor.windowManager.open( {
                    title: 'block texte',
                    body: [

                        {
                            type   : 'textbox',
                            multiline: true,
                            minWidth : 350,
                            minHeight: 150,
                            name   : 'textbox',
                            label  : 'texte du block',
                            value  : ''
                        },

                        {
                            type   : 'colorbox',
                            name   : 'colorbox',
                            label  : 'couleur du texte',
                            // text   : '#fff',
                            values : [
                                { text: 'light', value: '#fff' },
                                { text: 'dark', value: '#333' }
                            ]
                        },

                        {
                            type   : 'colorpicker',
                            name   : 'colorpicker',
                            label  : 'couleur du block',
                            classes: 'colorpicker',
                            value: ''
                        },





                    ],

                    onsubmit: function( e ) {
                        editor.insertContent( '[block_detail  txt="' + e.data.textbox + '" color="' + e.data.colorbox + '" background="' + e.data.colorpicker + '"]');
                    }
                });

            },
        });
    });

})();
