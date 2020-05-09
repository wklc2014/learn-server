# 安装PHP

##

```
docker search php
```

```
docker pull php:latest
```

```
docker run --name myphp -v ~/ecs/www:/www -d php:5.6-fpm
```
+ `--name myphp` : 将容器命名为 myphp-fpm。
+ `-v ~/ecs/www:/www` : 将主机中项目的目录 www 挂载到容器的 /www

```
docker run --name myphp -v ~/ecs/www:/www -d php:5.6-fpm
docker run --name myphp-nginx -p 80:80 -d \
    -v ~/ecs/www:/usr/share/nginx/html:ro \
    -v ~/ecs/conf/conf.d:/etc/nginx/conf.d:ro \
    --link myphp:php \
    nginx

docker run --name my_tp_php -v ~/tp/tp5:/www -d php:5.6-fpm
docker run --name my_tp_php-nginx -p 80:80 -d \
    -v ~/tp/tp5/public:/usr/share/nginx/html:ro \
    -v ~/tp/conf/conf.d:/etc/nginx/conf.d:ro \
    --link my_tp_php:php \
    nginx

```
