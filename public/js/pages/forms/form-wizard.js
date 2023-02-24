$(function () {
    //Horizontal form basic
    $('#wizard_horizontal').steps({
        headerTag: 'h2',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            setButtonWavesEffect(event);
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        }
    });

    //Vertical form basic
    $('#wizard_vertical').steps({
        headerTag: 'h2',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        stepsOrientation: 'vertical',
        onInit: function (event, currentIndex) {
            setButtonWavesEffect(event);
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        }
    });

    //Advanced form with validation
    var form = $('#wizard_with_validation').show();
    form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            $.AdminBSB.input.activate();

            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) { return true; }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }
            form.validate().settings.ignore = ':disabled,:hidden';

            //DIRIA KO MAG AJAX
            // var selectData = $(this).serialize();
            // $.ajax({
            //     type : "POST",
            //     url  : "/registration",
            //     data : selectData,
            //     success : function( response ) {
            //         console.log(response);
            //     }
            // });


            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function (event, currentIndex) {
            // var md = [];
            // am = 0;

            form.validate().settings.ignore = ':disabled';
             alert('sdasd');
            var formData    =  $(this).serialize();
            $.ajax({
                type : "POST",
                url  : "/registrationUserwithAJAX",
                data : formData,
                success : function( response ) {
                    if(response == "ERROR"){
                        alert('Time Open and Time Close are the Same or Please Select Features');
                    }else{
                        alert('Success');
                        document.location.reload();
                         // $("input[name='main_module[]']:checked").each(function() {
                         //    md.push($(this).data('name')+'<br>');
                         // });
                         // $("input[name='lvl1[]']:checked").each(function() {
                         //    lvl1.push($(this).data('id')+'<br>');
                         // });
                         // $("input[name='lvl2[]']:checked").each(function() {
                         //    lvl2.push($(this).data('id')+'<br>');
                         // });
                         // $("input[name='lvl3[]']:checked").each(function() {
                         //    lvl3.push($(this).data('id')+'<br>');
                         // });
                         // $("input[name='lvl3[]']:checked").each(function() {
                         //    am = am + parseInt($(this).data('fee'));
                         // });
                         // $("#main_mod").html(md);
                         // $("#lvl_1").html(lvl1);
                         // $("#lvl_2").html(lvl2);
                         // $("#lvl_3").html(lvl3);
                         // $("#fee").html(am);
                         // $("#largeModal").modal('show');

                    }
                }

            });


            return form.valid();
        }
    });

    form.validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    });
});

function setButtonWavesEffect(event) {
    $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
    $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
}