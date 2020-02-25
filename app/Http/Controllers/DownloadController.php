<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Chumper\Zipper\Facades\Zipper;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class DownloadController extends Controller
{

    public function download(Request $request)
    {
        $fileName = $request->fileName;
        $accessKey = $request->accessKey;
        $secretKey = $request->secretKey;
        $gitUserName = $request->gitUsername;
        $gitRepository = $request->gitRepository;

        $deployURL = "$gitUserName/$gitRepository";

        $file_contents = "aws_access_key = \"$accessKey\"
aws_secret_key  = \"$secretKey\"";

        $user_data = "#!/bin/bash
#アップデート
sudo yum update -y
#Apacheインストール
sudo yum install -y httpd
#Apache起動
sudo service httpd start
#Apache常時起動
sudo chkconfig httpd on
#gitインストール
sudo yum -y install git
#アプリケーションをクローン
sudo chmod 777 /var/www/html
git clone https://github.com/$deployURL.git /var/www/html/$gitRepository
sudo mv /var/www/html/$gitRepository/* /var/www/html/
sudo rm -r /var/www/html/$gitRepository";

//        Log::debug($request);
//        Log::debug($deployURL);
//        Log::debug($gitRepository);

        Storage::disk('local')->put('/public/files/terraform.tfvars', $file_contents);
        Storage::disk('local')->put('/public/files/user_data.sh', $user_data);

        $files = glob( public_path().'/storage/files/*');

        Zipper::make("./zip/$fileName.zip")->add($files)->close();

        return response()
            ->download(public_path() . "/zip/$fileName.zip");

    }


}
