$(function() {
    // Bootstrap
    $('#bootstrap-editor').wysihtml5();

    // Ckeditor standard
    $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '200px', toolbar: [
	
		[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language', '-','Undo', 'Redo' ],			// Defines toolbar group without name.
		{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline' ] }
	]});
    $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '200px'});
});
