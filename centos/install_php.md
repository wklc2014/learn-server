# CentOS 安装 PHP

```
yum install -y php php-fpm
systemctl start php-fpm
systemctl restart httpd
```

+ 默认安装 5.4 版本
+ `thinkPHP` 需要 `PDO MBstring CURL` 扩展
+ 需要重启 `apache`

```
// 查看端口是否占用
netstat -tnl | grep port
```

yum install -y php72w php72w-fpm php72w-cli php72w-common php72w-devel php72w-gd php72w-pdo php72w-mysql php72w-mbstring php72w-bcmath
