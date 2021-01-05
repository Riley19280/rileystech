
function go() {


    var lines = $('textarea').val().split('\n');
    $('.page1').empty();
    for (var i = 0; i < lines.length; i++) {
        if(lines[i] == null || lines[i] =="")
            continue;

        var html = '<div class="panel-row">' +
            '<div class="test">' +
            '<p>' + lines[i] + '</p>' +
            '</div>' +
            '<div class="test" id="arr' + i + '">' +
            '<div class="loader"></div>'+
            '</div>' +
            '</div>';
        $('.page1').append(html);

        $.ajax({
            url: "/api/apush/apush.php?tag=arr"+i+"&term="+encodeURI(lines[i]),
        }).done(function(data) {
            var res = JSON.parse(data);
            var html;
            if(res.type == 'error'){
                html = '<p>'+res.msg+'</p>';
            }else {
                html ='<p><b>'+res.title+'</b><br>'+res.desc+'</p>';
            }

            $('#'+res.tag).html(html);
        });
    }
    $('.page1').append('<a class="button" href="/apush" style="margin-top: 1rem">< Back</a>');
}
