var categories = [];
$('input[name="category[]"]').on('change', function (e) {
    e.preventDefault();
    categories = [];
    $('input[name="category[]"]:checked').each(function(){
        categories.push($(this).val());
        console.log(categories);
    });
    $.post('/cari-kerja/cari-cb', {
        categories: categories
    }, function (markup) {
        console.log(markup);
        // $('#search-results').html(markup);
        // var count = $('#count').val(); // vacancies count, from hidden input   
        // $(".page-title").html("(" + count + ")");
    });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});