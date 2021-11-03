# AliyunOpenapiPhpSdk

### 项目介绍
此项目是由 aliyun-openapi-php-sdk 转换而来，适用于composer

### 转换说明
由于aliyun-openapi-php-sdk在composer项目中直接使用会造成开发和管理的不便。因此才建立此项目。

### 更新说明
不定时。一般1个月更新一次，若有阿里云sdk有bug或公告信息，将缩短更新时间。


### 引用

```
composer require maiyoule/aliyun-openapi-php-sdk
```

### 使用
````
//载入配置
Config::load();
//加入认证信息
$profile = DefaultProfile::getProfile([Region Id],[Your's AccessKey ID], [Your's Access Sercert]);
//初始化客户端
$client = new DefaultAcsClient($profile);

//实例化请求对象
$request = new ImageAsyncScanRequest();
//.....
//获取请求结果
$response = $client->getAcsResponse($request);
//....
````

### 更新时间
 2018-10-09