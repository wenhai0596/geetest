# geetest
geetest 分析学习记录  

大致方向就是本地端随机生成aes的key,  然后用key对内容进行加密后编码, 然后用rsa公钥对aes_key加密,  
最后把aes加密编码后的内容和rsa加密后的key一并传给服务器  

1.
gt challenge  

取challenge  

2.  
https://api.geetest.com/get.php?gt= &challenge= &lang=zh-cn&pt=0&client_type=web&w= &callback=  
返回
({
    "status": "success",
    "data": {
        "theme": "wind",
        "theme_version": "1.5.8",
        "static_servers": [
            "static.geetest.com",
            "dn-staticdown.qbox.me"
        ],
        "api_server": "api.geetest.com",
        "logo": false,
        "feedback": "",
        "c": [
            12,
            58,
            98,
            36,
            43,
            95,
            62,
            15,
            12
        ],
        "s": "4c436f69",
        "i18n_labels": {
            "copyright": "由极验提供技术支持",
            "error": "网络不给力",
            "error_content": "请点击此处重试",
            "error_title": "网络超时",
            "fullpage": "智能检测中",
            "goto_cancel": "取消",
            "goto_confirm": "前往",
            "goto_homepage": "是否前往验证服务Geetest官网",
            "loading_content": "智能验证检测中",
            "next": "正在加载验证",
            "next_ready": "请完成验证",
            "read_reversed": false,
            "ready": "点击按钮进行验证",
            "refresh_page": "页面出现错误啦！要继续操作，请刷新此页面",
            "reset": "请点击重试",
            "success": "验证成功",
            "success_title": "通过验证"
        }
    }
})
w = i + r  

i = 魔改base64编码 aes加密后的内容  
aes-128-cbc iv=0000000000000000  

r = aes_key用rsa公钥加密  
    aes_key = 随机16长度字符串  

e = 010001  
n = C1E3934D1614465B33053E7F48EE4EC87B14B95EF88947713D25EECBFF7E74C7977D02DC1D9451F79DD5D1C10C29ACB6A9B4D6FB7D0A0279B6719E1772565F09AF627715919221AEF91899CAE08C0D686D748B20A3603BE2318CA6BC2B59706592A9219D0BF05C9F65023A21D2330807252AE0066D59CEEFA5F2748EA80BAB81  

 

{"status": "success", "data": {"theme": "wind", "theme_version": "1.5.8", "static_servers": ["static.geetest.com", "dn-staticdown.qbox.me"], "api_server": "api.geetest.com", "logo": false, "feedback": "", "c": [12, 58, 98, 36, 43, 95, 62, 15, 12], "s": "44406f33", "i18n_labels": {"copyright": "\u7531\u6781\u9a8c\u63d0\u4f9b\u6280\u672f\u652f\u6301", "error": "\u7f51\u7edc\u4e0d\u7ed9\u529b", "error_content": "\u8bf7\u70b9\u51fb\u6b64\u5904\u91cd\u8bd5", "error_title": "\u7f51\u7edc\u8d85\u65f6", "fullpage": "\u667a\u80fd\u68c0\u6d4b\u4e2d", "goto_cancel": "\u53d6\u6d88", "goto_confirm": "\u524d\u5f80", "goto_homepage": "\u662f\u5426\u524d\u5f80\u9a8c\u8bc1\u670d\u52a1Geetest\u5b98\u7f51", "loading_content": "\u667a\u80fd\u9a8c\u8bc1\u68c0\u6d4b\u4e2d", "next": "\u6b63\u5728\u52a0\u8f7d\u9a8c\u8bc1", "next_ready": "\u8bf7\u5b8c\u6210\u9a8c\u8bc1", "read_reversed": false, "ready": "\u70b9\u51fb\u6309\u94ae\u8fdb\u884c\u9a8c\u8bc1", "refresh_page": "\u9875\u9762\u51fa\u73b0\u9519\u8bef\u5566\uff01\u8981\u7ee7\u7eed\u64cd\u4f5c\uff0c\u8bf7\u5237\u65b0\u6b64\u9875\u9762", "reset": "\u8bf7\u70b9\u51fb\u91cd\u8bd5", "success": "\u9a8c\u8bc1\u6210\u529f", "success_title": "\u901a\u8fc7\u9a8c\u8bc1"}}}  
s值第3歩用    

3.  
https://api.geetest.com/ajax.php?gt= &challenge= &lang=zh-cn&pt=0&client_type=web&w= &callback=  

无感验证返回  
{"status": "success", "data": {"result": "success", "validate": "831f2c4f2b30f7400b81d06cb81fe57f", "score": 5}}  
