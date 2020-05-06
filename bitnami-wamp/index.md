# Apache 配置虚拟目录

配置 `apache` 的配置文件 `conf\httpd.conf`

找到 `<IfModule dir_module>` 这个标签，在这个标签里配置以下的内容：

```
# Alias ： 别名
# test1 ： 虚拟目录名称
# E:/pic-master ： 物理路径
# Directory ： 设置物理路径的访问权限
# Require all granted ： 必须设置这个，否则会出现无法访问到/test1这个目录的错误
Alias "/test1" "E:/pic-master"
<Directory "E:/pic-master">
  Options Indexes FollowSymLinks MultiViews Includes ExecCGI
  AllowOverride All
  Order Allow,Deny
  Allow from all
  Require all granted
</Directory>
```
