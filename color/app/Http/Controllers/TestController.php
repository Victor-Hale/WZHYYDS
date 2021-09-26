<?php

namespace App\Http\Controllers;
use AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorRequest;
use AlibabaCloud\SDK\ViapiUtils\ViapiUtils;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use Darabonba\OpenApi\Models\Config;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionRequest;
use Illuminate\Http\Request;
class TestController extends Controller
{
    /***
 * 将图片地址转换成上海的oss地址
 * @param Request $request
 * @return \Illuminate\Http\JsonResponse
 * @throws \Exception
 */
    public static function Change(Request $request){
        // 您的AccessKeyID
        $accessKeyId = "LTAI5t6YE1EgtVRSbjrZsupX";
        // 您的AccessKeySecret
        $accessKeySecret = "v4aBxYBywPGEkNaMTWBQWLtDe4gYgz";
        // 要上传的文件路径，url 或 filePath
        $fileUrl =$request["url"];
        // 上传成功后，返回上传后的文件地址
        $fileLoadAddress = ViapiUtils::upload($accessKeyId, $accessKeySecret, $fileUrl);
        $data = self::main($request);
        return  $fileLoadAddress&&$data?
            json_success("成功",$data,"200"):
            json_fail("失败",null,"100");
    }
    /**
     * 使用AK&SK初始化账号Client
     * @param string $accessKeyId
     * @param string $accessKeySecret
     * @return Imagerecog Client
     */
    public static function createClient($accessKeyId, $accessKeySecret){
        $config = new Config([
            // 您的AccessKey ID
            "accessKeyId" => $accessKeyId,
            // 您的AccessKey Secret
            "accessKeySecret" => $accessKeySecret
        ]);
        // 访问的域名
        $config->endpoint = "imagerecog.cn-shanghai.aliyuncs.com";
        return new Imagerecog($config);
    }

    /**
     * @param string[] $args
     * @return \Illuminate\Http\JsonResponse
     */
    public static function main(Request $request){
        $client = self::createClient("LTAI5t6YE1EgtVRSbjrZsupX", "v4aBxYBywPGEkNaMTWBQWLtDe4gYgz");
        $recognizeImageColorRequest = new RecognizeImageColorRequest([
            "url" => $request["url"]
        ]);
        // 复制代码运行请自行打印 API 的返回值
        $data=$client->recognizeImageColor($recognizeImageColorRequest);
        return  $data?
            json_success("成功",$data->body->data->colorTemplateList,"200"):
            json_fail("失败",null,"100");
    }
}
$path = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';
if (file_exists($path)) {
    require_once $path;
}
