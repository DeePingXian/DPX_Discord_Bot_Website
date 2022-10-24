# DPX_Discord_Bot_Website
 DPX Discord Bot 之附屬網站

配合此 Discord Bot 使用<br>
https://github.com/DeePingXian/DPX_Discord_Bot<br>
此網站非該 bot 必要之功能，但提供了在網頁看訊息歷史紀錄、瀏覽完整的音樂隊列、下載 YouTube 音訊功能<br>
推薦使用 XAMPP 套件，內含整合好的 MySQL 和 Apache HTTP Server，都是 DC Bot 和這網頁需要的功能<br>

把整個專案下載下來後，設定以下項目，再放進 Apache HTTP Server 裡就能運作了（port等連線方面項目請自行設定）<br>
於 \DB\DB_config.php 裡設置MySQL連線參數（給網頁運作的使用者帳號只需給予 discord 項目的讀取權限）<br>
於 \assets\ 裡設置各項附圖<br>
- banner.jpg：橫幅
- homeButton.jpg：平常之首頁按鈕
- homeButtonMusic.jpg：音樂頁面之首頁按鈕
- icon.ico：網頁 icon
- thumbnail.jpg：網站縮圖

音樂隊列頁面範例：<br>
![音樂隊列頁面範例](https://i.imgur.com/NHdXiRM.jpg)