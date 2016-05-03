   function getChat() {

        var word = null;
        $.ajaxSetup({
            headers: {
                
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/getchat',
            type: 'post',
            data: {word: word},
            success: function (data) {
                alert(data);
            }
        });
    }

    getChat();

