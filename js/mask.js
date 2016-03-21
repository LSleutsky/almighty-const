$(document).ready(function() {
	$(function($){
	   $("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
	   $(".phones").mask("(999) 999-9999");
	   $("#tin").mask("99-9999999");
	   $("#ssn").mask("999-99-9999");
	});


	// $('input,textarea').focus(function(){
	//    $(this).data('placeholder', $(this).attr('placeholder'))
	//    $(this).attr('placeholder','');
	// });
	// $('input,textarea').blur(function(){
	//    $(this).attr('placeholder', $(this).data('placeholder'));
	// });

	 // capitalize the first letter of <textarea>
	$('textarea').on('keydown', function(event) {
        if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
           var $t = $(this);
           event.preventDefault();
           var char = String.fromCharCode(event.keyCode);
           $t.val(char + $t.val().slice(this.selectionEnd));
           this.setSelectionRange(1,1);
        }
    });

});