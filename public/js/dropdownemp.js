$(document).ready(function() {
    $('#category').on('change', function() {
        var subID = $(this).val();
        if(subID) {
            $.ajax({
               
                url: '/category/'+subID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('#subcat').empty();
                    $.each(data, function(key, value) {
                        $('#subcat').append('<option value="'+ value.id +'">'+ value.emp_reg_fname +'</option>');
                    });
                }
            });
        }else{
            $('#subcat').empty();
        }
    });
});