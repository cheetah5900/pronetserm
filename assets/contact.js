function contact() {
    if ($('.btn-chat-container .btn-chat').hasClass('selected')) {
        $('.btn-chat-container .btn-chat').removeClass('selected');
        $('.btn-chat-container .social-button').removeClass('show');
        if ($('body').hasClass('lnw-mobile')) {
            $('body').removeClass('hide-anklet')
        }
    } else {
        $('.btn-chat-container .btn-chat').addClass('selected');
        $('.btn-chat-container .social-button').addClass('show');
        if ($('body').hasClass('lnw-mobile')) {
            $('body').addClass('hide-anklet')
        }
    }
}
