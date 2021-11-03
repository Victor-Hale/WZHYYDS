dd.ready(function() {
    dd.runtime.permission.requestAuthCode({
        corpId : "ding322bf8c51662adf3a1320dcb25e91351",
        onSuccess : function(result) {
            var code = result.code;
            alert('获取成功，你的免登code为：' + code);　　　　　　　　　　　　//将code 发往后台处理
        },
        onFail : function(err) {
            alert('出错了, 你获取了一个自定义错误' + err);
        }
    });

});
