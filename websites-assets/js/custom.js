// Recommendation search
// District under Division dependency field
$(document).ready(function(){
    $('select[id="division_slug"]').on('change',function(){
    var div_slug= $(this).val();
    if(div_slug!=''){
    $.ajax({
        type:"GET",
        dataType:"json",
        //url:"{{url('recommendation/fetch/district/under/division')}}/"+div_slug,
        url:window.origin+"/recommendation/fetch/district/under/division/"+div_slug,
        success:function(data){
        $('select[id="district_slug"]').empty();
        $('select[id="district_slug"]').append('<option value="">Select District</option>');
            $.each(data, function(key, value){
                $('select[id="district_slug"]').append('<option value="'+value.district_slug+'">'+value.district_name+'</option>');
            });
        }
    });
    }else{
        $('select[id="district_slug"]').empty('');
        $('select[id="district_slug"]').append('<option value="">Select District</option>');
    }
});
});

