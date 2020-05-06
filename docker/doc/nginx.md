# 安装 nginx

## 1. 查看可用的 Nginx 版本

```
docker search nginx
```

## 2. 取最新版的 Nginx 镜像

```
docker pull nginx:latest
```

## 3. 查看本地镜像

```
docker images
```

## 4. 运行容器

```
docker run \
--name nginx-test \
-v ~/ecs/www:/usr/share/nginx/html:ro \
-v ~/ecs/conf/conf.d:/etc/nginx/conf.d:ro \
-p 8080:80 \
-d nginx
```

+ --name nginx-test：容器名称。
+ -p 8080:80： 端口进行映射，将本地 8080 端口映射到容器内部的 80 端口。
+ -d nginx： 设置容器在在后台一直运行。

## 5. 安装成功

```
http://localhost:8080
```
