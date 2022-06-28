// Image preview
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image_preview')
                .attr('src', e.target.result)
                .width(100)
                .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Confirm password validation 
bootstrapValidate('#repassword', 'matches:#password:Your password did not match');
bootstrapValidate('#emp_email', 'email:Enter a valid email address');

// Data table
$(document).ready(function(){

    $('#taskdataTable').DataTable();

});

