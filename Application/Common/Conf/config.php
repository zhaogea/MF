<?php
return array(
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'mf',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'mf_',    // 数据库表前缀
    /* SESSION设置 */
    'SESSION_AUTO_START'    =>  false,    // 是否自动开启Session

	//'MODULE_ALLOW_LIST'    =>    array('Home','Admin','Gii'),// 允许访问的模块列表，简化URL
);
?>