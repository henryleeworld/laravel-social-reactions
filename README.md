# Laravel 7 社交反應

引入 cybercog 的 laravel-love 套件來擴增通過對 Elpquent 模型的喜歡與不喜歡來表達他們對內容的感受，可以主動向用戶推薦內容，並獲取用戶對推薦是否喜歡的反饋。。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。

----

## 畫面截圖
![](https://i.imgur.com/lzuGE5r.png)
> 社交媒體逐漸成為我們表達自我、塑造自我認同、形成和建立關係、了解周圍世界的地方
