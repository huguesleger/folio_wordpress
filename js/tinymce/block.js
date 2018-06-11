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
    tinymce.PluginManager.add('block', function( editor, url ) {
        editor.addButton( 'block', {
            title: tinyMCE_object.button_name,
            icon: true,
            image: url + '/icons-imgtxt.png',

            onclick: function() {
                editor.windowManager.open( {
                    title: tinyMCE_object.button_title,
                    body: [
                        {
                            type: 'textbox',
                            name: 'img',
                            label: tinyMCE_object.image_title,
                            value: '',
                            classes: 'my_input_image',
                        },
                        {
                            type: 'button',
                            name: 'my_upload_button',
                            label: '',
                            text: tinyMCE_object.image_button_title,
                            classes: 'my_upload_button',
                        },//new stuff!

                        {
                            type   : 'textbox',
                            name   : 'titlebox',
                            label  : 'titre du block',
                            value  : ''
                        },

                        {
                            type   : 'textbox',
                            multiline: true,
                            minHeight: 80,
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
                            minHeight: 120,
                            value: ''
                        },

                        {
                        type   : 'colorpicker',
                        name   : 'colorpicker2',
                        label  : 'couleur de la section',
                        classes: 'colorpicker',
                        minHeight: 120,
                        value: ''
                    },

                        {
                        type   : 'textbox',
                        name   : 'class',
                        label  : 'class (ajouter la classe "inverse")',
                        value  : ''
                    },

                    {
                    type   : 'textbox',
                    name   : 'padding',
                    label  : 'padding ',
                    value  : ''
                },


                    ],

                    onsubmit: function( e ) {
                        editor.insertContent( '[block padding="'+ e.data.padding +'" img="'+ e.data.img +'" title="'+ e.data.titlebox +'" txt="'+ e.data.textbox +'" color="'+ e.data.colorbox +'" background="'+ e.data.colorpicker +'" bg_section="'+ e.data.colorpicker2 +'" class="'+ e.data.class +'" ]');
                    }
                });

            },
        });
    });

})();

jQuery(document).ready(function($){
    $(document).on('click', '.mce-my_upload_button', upload_image_tinymce);

    function upload_image_tinymce(e) {
        e.preventDefault();
        var $input_field = $('.mce-my_input_image');
        var custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Add Image',
            button: {
                text: 'Add Image'
            },
            multiple: false
        });
        custom_uploader.on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $input_field.val(attachment.url);
        });
        custom_uploader.open();
    }
});
