$(document).ready(function(){
    $(".login-btn").click(function(){
        $(".login-card").animate({
            opacity: '0',
            width: '1500px',
            transition: 'all 5s'
        });
        $(".login-txt").animate({
            fontSize: '190px',
        })
    });
});