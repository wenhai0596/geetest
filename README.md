# geetest
geetest 分析学习记录

1.
gt challenge  

取challenge  
2.  
https://api.geetest.com/get.php?gt= &challenge= &lang=zh-cn&pt=0&client_type=web&w= &callback=geetest_  

w = i + r  

i = 魔改base64编码 aes加密后的内容  
aes-128-cbc iv=0000000000000000  

r = aes_key用rsa公钥加密  
    aes_key = 随机16长度字符串  


rsapkey = MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDB45NNFhRGWzMFPn9I7k7IexS5XviJR3E9Je7L/350x5d9AtwdlFH3ndXRwQwprLaptNb7fQoCebZxnhdyVl8Jr2J3FZGSIa75GJnK4IwNaG10iyCjYDviMYymvCtZcGWSqSGdC/Bcn2UCOiHSMwgHJSrgBm1Zzu+l8nSOqAurgQIDAQAB   

{"status": "success", "data": {"theme": "wind", "theme_version": "1.5.8", "static_servers": ["static.geetest.com", "dn-staticdown.qbox.me"], "api_server": "api.geetest.com", "logo": false, "feedback": "", "c": [12, 58, 98, 36, 43, 95, 62, 15, 12], "s": "44406f33", "i18n_labels": {"copyright": "\u7531\u6781\u9a8c\u63d0\u4f9b\u6280\u672f\u652f\u6301", "error": "\u7f51\u7edc\u4e0d\u7ed9\u529b", "error_content": "\u8bf7\u70b9\u51fb\u6b64\u5904\u91cd\u8bd5", "error_title": "\u7f51\u7edc\u8d85\u65f6", "fullpage": "\u667a\u80fd\u68c0\u6d4b\u4e2d", "goto_cancel": "\u53d6\u6d88", "goto_confirm": "\u524d\u5f80", "goto_homepage": "\u662f\u5426\u524d\u5f80\u9a8c\u8bc1\u670d\u52a1Geetest\u5b98\u7f51", "loading_content": "\u667a\u80fd\u9a8c\u8bc1\u68c0\u6d4b\u4e2d", "next": "\u6b63\u5728\u52a0\u8f7d\u9a8c\u8bc1", "next_ready": "\u8bf7\u5b8c\u6210\u9a8c\u8bc1", "read_reversed": false, "ready": "\u70b9\u51fb\u6309\u94ae\u8fdb\u884c\u9a8c\u8bc1", "refresh_page": "\u9875\u9762\u51fa\u73b0\u9519\u8bef\u5566\uff01\u8981\u7ee7\u7eed\u64cd\u4f5c\uff0c\u8bf7\u5237\u65b0\u6b64\u9875\u9762", "reset": "\u8bf7\u70b9\u51fb\u91cd\u8bd5", "success": "\u9a8c\u8bc1\u6210\u529f", "success_title": "\u901a\u8fc7\u9a8c\u8bc1"}}}  
s值第3歩用    
3.  
https://api.geetest.com/ajax.php?gt= &challenge= &lang=zh-cn&pt=0&client_type=web&w= &callback=geetest_  

无感验证返回  
{"status": "success", "data": {"result": "success", "validate": "831f2c4f2b30f7400b81d06cb81fe57f", "score": 5}}  
