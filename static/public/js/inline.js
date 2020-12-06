function online() {
    $.post('/index/api/inline',{'online': 1},function (data) {

    });
}
online();
setInterval(online,1000*60*3);