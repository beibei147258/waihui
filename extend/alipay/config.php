<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2017022705923867",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEA4SvhwaggPK6YcT9KFcWatlWzmPOGuinPibsSuQOKOzIdndmsobx8gxYsL40SBJZJ7gUzLW53WUPJiu1Cn2K6b1m/PsOQNl6WRQD7fD62fCO5z3Wqitx9bts/LoUbX7vb4Dxpplw7KKVikUCBwe75hOTuhAfQ7dqGzbE0xfKjO2ugRBDceCy5InBK/xfvVbNRk+1DZyexLSUJx7pm5nUCkVj81URlnQYzcW06OBjvSSecTpmAktbvruZE450vhxkfDzxp47R0qba4c8ALRrDlnrUb29EPD4TFmXWGxteZQBQWKbEJWte7tV/sGW9ed/6QeC8A9N3CalnzXpqIF4hpcQIDAQABAoIBAFOUPDnrs/uSOxdeDJvEO0cOzJkrW4jiWByhibOO8tJCKegbkg5+riDiLAiCbnuxZUOqPnLQnBBQLxEYPDB5LwaB45DiejcUKOb4FGDrzkSJ5kBxRppAeXaafvs/gQep7VVwVy7e8T6HFO0haoiXsZp4d2gelpiTEpJrAlGvXJODDzMJPoEcpeHEDUUroH1+PXCGmZL8mB5a+ZzcP14IRsxWEygTy64MADa5RQ3U7qpSKSSiCRvTp1CUIMTEzgcYDziWCpWwdDEjrmyoQy3sUpdxwFrShQ0gwxgFgfawlR31d1rJxarF1/ZOsEa3RbbDdJWS4MwgMbYi70gB4UFTDLkCgYEA9bsfRblnK44C0oWTVxemxtuP96JPpqFj+jtcUMSBDZvnXyV5TKMWiP+agefWgQ5Gz5z6yBEicXvMcC9qcYf2nNnZYeTiCJmSof8dqWg5Uah3l+GBBJ13AVcrhJv/pm1Gkm3+WubREQBEXq3l9F/cRyEMzF2XWFCdrjX7R1JufssCgYEA6pTPTrIxufboxtJJXusdSSueqxN5see4TiqKXizRMuUaEF9h0iHd1fvxHWSMo3zlLt8s4LrR3PlKGXo88RnScNvRE3KyvznLkRhwdaFvTQjSUrMe+wV+OIRJm9UnV2ysqrB3w8+GP6iZPdiRN/AW4rkoPf0SMo2IGYR1/JsLlTMCgYBJxXqW+RlDFyg7wYRBYkVcb/AhvOXCtbMJHacSTFweFM76Xoqy+kc6q9nb5Bket4WEsLENPS+k+DChAWsoWFQuNKyxWgCN6mT+I1PpVvPWUwhMXZPZKdjfWycicZ7nfOjx7vmsmpzrSLQ95GEj41+DLyXjeLmF9vXPpj8g41tuzwKBgQCK31nzDs8ddqzLt4Y0KSCHRsmCId9zkOitbcXIhuO6K6NIeg8hJWd83NAbRIF17+SF4R1iVXcUSIizmIgne8/3fErEJqznREHdPgilutJ3WneY+e2nUdMthjNFi+TkfrOhwSLFyz+AxEEkOeeOpBYIVvEZ8Y4qW1ttL9vhlbA/vQKBgGrC0rchgbdL9Ehd8lG5yDYce1N2ZAxDLLGzyxbp76OExGQMj6vBJZeGp1S6ICNLSbbVWD3Wflk1d0o1o47GgF9p+PXJyeKes2ZTOByH0R+8M92fjVXmOxNUvC0oiqVTlFLd18cH4Yd9d6DaA+msmnkJY62tyZgceJcAmTwRVHkJ",
		
		//异步通知地址
		'notify_url' => "http://baidu.com/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4SvhwaggPK6YcT9KFcWatlWzmPOGuinPibsSuQOKOzIdndmsobx8gxYsL40SBJZJ7gUzLW53WUPJiu1Cn2K6b1m/PsOQNl6WRQD7fD62fCO5z3Wqitx9bts/LoUbX7vb4Dxpplw7KKVikUCBwe75hOTuhAfQ7dqGzbE0xfKjO2ugRBDceCy5InBK/xfvVbNRk+1DZyexLSUJx7pm5nUCkVj81URlnQYzcW06OBjvSSecTpmAktbvruZE450vhxkfDzxp47R0qba4c8ALRrDlnrUb29EPD4TFmXWGxteZQBQWKbEJWte7tV/sGW9ed/6QeC8A9N3CalnzXpqIF4hpcQIDAQAB",
		
	
);