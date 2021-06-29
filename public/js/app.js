(function($) {

    var xbutton = $('button.delete');

    var alert = $('#alert');

    xbutton.on('click', function() {
        alert.fadeOut();
    });

    $('#delete-form').on('submit', function(event) {
		return confirm('For sure?');
	});

    $('#edit-item').select();

    var form   = $('#form-add-item'),
        input  = $('#item'),
        edit_input  = $('button#edit-item'),
        button = $('#add-new');

    input.val('').focus();
    button.hide();
    edit_input.hide();

    // form.on('submit', function(event) {
    //     event.preventDefault();

    //     var req = $.ajax({
    //         url: form.attr('action'),
    //         type: 'POST',
    //         data: form.serialize(),
    //         dataType: 'json'

    //     });

    //         req.done(function(data) {
    //             console.log( "data" );
    //         });

    //     req.done(function(data) {

    //         console.log("ahoj");
    //         var newItem = $(html).find('#list-' + data.id);

    //         newItem.appendTo( item )
    //         .css({ backgroundColor: animation.startColor })
    //         .delay( animation.delay )
    //         .animate({ backgroundColor: animation.endColor });

    //         input.val('').focus();
    //     });

    // });



}(jQuery));

