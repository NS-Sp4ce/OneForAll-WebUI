# OneForAll-WebUI

一款基于laravel构建的`OneForAll`UI

# 部署

## 前提条件

- PHP 7+
- Nginx
- [OneForAll](https://github.com/shmilylty/OneForAll)

## 过程

1. 克隆仓库到nginx站点目录下，并将nginx虚拟站点配置文件中的站点路径改为public目录（如站点**物理**目录为`/path/to/wwwroot/`，配置文件中的目录为`/path/to/wwwroot/public`）

   `git clone https://github.com/NS-Sp4ce/OneForAll-WebUI.git`

2. 修改`.env`文件中的`DB_DATABASE`值为`oneforall`获取后的`sqlite3`数据库的`绝对路径`

3. 打开查看测试

# 界面截图

主界面

![dashboard](/img/dash.jpg)

数据界面

![data](/img/data.jpg)

# RODO
- GO重构
- 细节优化
