$(function() {
    $('.app-search-form-md .app-search-btn').click(function(e) {
        let input = $('.app-search-form-md .app-search-input');
        if (input.hasClass('app-search-input-change-short') && input.val().trim() == '' && input.width() > 0) {
            return ;
        }
        if (!input.hasClass('app-search-input-change-long')) {
            input.addClass('app-search-input-change-long');
            input.removeClass('app-search-input-change-short');
            input.focus();
        }
    })
    $('.app-search-form-md .app-search-input').blur(function(e) {
        if ($(this).val().trim() == '' && $(this).hasClass('app-search-input-change-long')) {
            $(this).removeClass('app-search-input-change-long');
            $(this).addClass('app-search-input-change-short');
        }
    })
})

$(function(){
    // 切换登录
    function goLogin() {
        $(".loginForm").css("display", "block");
        $(".registerForm").css("display", "none");
        $(".login").addClass("colorRed");
        $(".register").removeClass("colorRed");
    }
    // 切换注册
    function goRegister() {
        $(".registerForm").css("display", "block");
        $(".loginForm").css("display", "none");
        $(".register").addClass("colorRed");
        $(".login").removeClass("colorRed");
    }
 
})

