(function() {
    tinymce.PluginManager.add('block_3textes', function( editor, url ) {
        editor.addButton( 'block_3textes', {
            title: 'plusieurs block texte',
            icon: true,
            image: url + '/icons-Xtxt.png',

            onclick: function() {
                editor.windowManager.open( {
                    title: 'block texte',
                    body: [

                        {
                            type   : 'textbox',
                            multiline: true,
                            minWidth : 350,
                            minHeight: 80,
                            name   : 'textbox',
                            label  : 'texte du block 1',
                            value  : ''
                        },

                        {
                            type   : 'textbox',
                            multiline: true,
                            minWidth : 350,
                            minHeight: 80,
                            name   : 'textbox2',
                            label  : 'texte du block 2',
                            value  : ''
                        },

                        {
                            type   : 'textbox',
                            multiline: true,
                            minWidth : 350,
                            minHeight: 80,
                            name   : 'textbox3',
                            label  : 'texte du block 3',
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
                            minHeight: 120,
                            label  : 'couleur du block',
                            classes: 'colorpicker',
                            value: ''
                        },





                    ],

                    onsubmit: function( e ) {
                        editor.insertContent( '[block_3textes  txt="' + e.data.textbox + '" txt_2="' + e.data.textbox2 + '" txt_3="' + e.data.textbox3 + '" color="' + e.data.colorbox + '" background="' + e.data.colorpicker + '"]');
                    }
                });

            },
        });
    });

})();
