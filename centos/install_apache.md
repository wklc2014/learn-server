# CentOS 安装 apache

```
yum install -y httpd

httpd -v
```

+ 默认安装版本 `2.4.6`
+ 安装路径 `/etc/httpd/`
+ 默认的网站路径 `/var/www/html`
+ 备份 `httpd.conf` 文件 `cp httpd.conf httpd.bat.conf`

```
systemctl start httpd      // 启动apache
systemctl stop httpd       // 停止apache
systemctl restart httpd    // 重启apache
systemctl enable httpd     // 设置apache开机启动
```

```
cp /etc/httpd/conf/httpd.conf /etc/httpd/conf/httpd.bat.conf

cp /etc/httpd/conf/httpd.conf /etc/httpd/conf/httpd.wk.conf

cp /etc/httpd/conf/httpd.bat.conf /etc/httpd/conf/httpd.conf
```

## problem

1. You don't have permission to access / on this server.

ps 权限不对，需要设置权限
