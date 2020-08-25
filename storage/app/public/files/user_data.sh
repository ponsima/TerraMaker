#!/bin/bash
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
git clone https://github.com/hgoehgo/gheohgeog.git /var/www/html/gheohgeog
sudo mv /var/www/html/gheohgeog/* /var/www/html/
sudo rm -r /var/www/html/gheohgeog