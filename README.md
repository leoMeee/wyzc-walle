![](https://raw.github.com/meolu/walle-web/master/docs/logo.jpg)

Walle - A Deployment Tool
=========================

Walle 一个web部署系统工具，配置简单、功能完善、界面流畅、开箱即用！支持git、svn版本管理，支持各种web代码发布，PHP，Python，JAVA等代码的发布、回滚，可以通过web来一键完成。

[Home Page](https://www.walle-web.io) | [官方主页](https://www.walle-web.io) | [中文说明](https://github.com/meolu/walle-web/blob/master/docs/README-zh.md) | [文档手册](https://www.walle-web.io/docs/).

依赖
------------
 - LNMP/LAMP(php5.4+)
 - curl `apt-get install curl`
 - composer `curl -sS https://getcomposer.org/installer`

安装
------------

    git clone http://192.168.3.9/wyzc/walle.git
    cd walle
    composer install --prefer-dist --no-dev --optimize-autoloader -vvvv
    ./yii walle/setup

修改配置文件
------------

    cp .env.example .env
    vim .env

登录
-----------
用户名:admin
密码:admin


