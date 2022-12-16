# PROJECK WEB IFSU

## CARA INSTALL

- Pastikan sudah menginstall git dan composer
- Setelah terinstall buka git lalu ketikan 
```git
  git clone https://github.com/digiifsu/smkifsu.sch.id.git
```
- setelah di clone buka folder nya
- lalu klik kanan selanjutnya klik git bash here
- lalu ketikan perintah
```sh
composer update
php spark serve
```
- setelah itu buka xampp lalu masuk ke phpmyadmin dan buat table baru namanya digiifsu_web
- setelah buat table buka file .env pada root project
- lalu ubah file app/config/database.php dan edit jadi seperti ini
 ```php
 
    public $default = [
        'DSN'      => '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'digiifsu_web',
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => (ENVIRONMENT !== 'production'),
        'charset'  => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
    ];
 ```
 - selanjutnya ke terminal ketikan perintah berikut
 ```sh
php spark migrate
php spark serve
```


##1solve problems intl extension
Jika mengalami error maka cek dulu extension intl di ```PHP.ini``` dan hapus tanda comentar ";"
