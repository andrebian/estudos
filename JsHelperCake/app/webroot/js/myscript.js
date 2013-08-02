
function select() {
    content = $('.temp').html();
    $('.temp').html('');
    content = $.parseJSON(content);
    
    options = '';
    $.each(content, function(cont, data) {
        options += '<option value="' + cont + '">' + data.nome + '</option>';
    });
    $('.content').html(options);

}