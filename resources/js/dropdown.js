$(document).ready(function() {
    $('select[name="category"]').on('change', function() {
        var subID = $(this).val();
        if(subID) {
            $.ajax({
               
                url: '/category/'+subID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="subcategory"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="subcategory"]').append('<option value="'+ value.id +'">'+ value.subcategory +'</option>');
                    });
                }
            });
        }else{
            $('select[name="subcategory"]').empty();
        }
    });
});