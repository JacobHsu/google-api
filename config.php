<?php

API
---------------
已啟用的API
Google+ API  //G+登入用
Drive API    //Google雲端硬碟
YouTube Data API v3 //YouTube


憑證
---------------

### OAuth 2.0 用戶端 ID [ Google+ API ]

$config['google_client_id'] = '1054959277900-75rk9vheo3bnth8po14ts8ok1nar27a6.apps.googleusercontent.com';
$config['google_client_secret']   = 'yvLxXjZqioXkuCuuDDmwhZPs';

####網路應用程式 用戶端 ID
//用戶端 ID  
1054959277900-75rk9vheo3bnth8po14ts8ok1nar27a6.apps.googleusercontent.com
//用戶端密碼
yvLxXjZqioXkuCuuDDmwhZPs

####名稱
Web client 1

####已授權的 JavaScript 來源
http://staging.com
https://staging.com
http://localhost

####已授權的重新導向 URI
http://staging.com/user/oauth2callback
https://staging.com/user/oauth2callback
http://localhost/oauth2callback

### API 金鑰

####瀏覽器 API 金鑰 [ Drive API ]
$config['google_browser_api_key'] = 'AIzaSyCd0V089zOvbnAarGpYV_2JyyFUWntwz34';

#####名稱
Browser key 1
#####接受這些 HTTP 參照網址 (網站) 發出的要求 (選填)
staging.com/* <--*/
localhost/* <--*/

####伺服器 API 金鑰 [ YouTube Data API v3 ]
$config['google_server_api_key'] = 'AIzaSyB9nEhKGsBLvnx-thjKia5o7W6YwH89Gx8';

#####名稱
Server key 1
#####接受這些伺服器 IP 位址發出的要求 (選填)
127.0.0.1



XAMPP
------

C:\xampp\apache\conf

```
<VirtualHost *:80>
     DocumentRoot "C:/xampp/htdocs/my_web"
     ServerName localhost
</VirtualHost>
```

```
Restart Apache
```