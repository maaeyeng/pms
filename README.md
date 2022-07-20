# ระบบบริหารจัดการสินค้า
โครงการนี้เป็นโครงการพัฒนา ระบบจัดการสินค้า 

# สารบัญ
* บทนำ
* ทรัพยากรที่ใช้
* องค์ประกอบระบบ
* วิธีที่ติดดตั้ง
* การอนุญาตใช้งาน
* ทีมงานพัฒนา
* ผู้สนับสนุน

# บทนำ




# ทรัพยากรที่ใช้
* PHP >= 7.4
* composer
* Apache
* Mysql & Postgresql
* Larave 9.0
* Bootstrap, HTML, CSS, Javascript




# องค์ประกอบระบบ
* สินค้า มีรายละเอียดดังนี้
    * แอดทริบิว ได้แก่ รหัสสินค้า ชื่อสินค้า ภาพสินค้า ราคา เป็นต้น
    * เมธทอด ได้แก่ เพิ่มสินค้า แก้ไข ค้นหา ลบสินค้า เป็นต้น
* คลังสินค้า
* ขนส่ง
* เจ้าหน้าที่
* ผู้ผลิต



# วิธีที่ติดดตั้ง
* ติดตั้ง Apache, PHP, MySQL โดยใช้ xampp เป็น Server
* ติดตั้ง Laravel เวอร์ชั่น 9.0
```
composer create-project laravel/laravel pms
cd pms
composer install
cp .env.example .env
```
* ปรับการติดตั้งฐานข้อมูล .env
MySQL แก้ไขส่วนนี้
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mydb
DB_USERNAME=root
DB_PASSWORD=
```
postgresql แก้ไขส่วนนี้
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=mydb
DB_USERNAME=root
DB_PASSWORD=
```




# การอนุญาตใช้งาน







# ทีมงานพัฒนา
<a href="https://innovationfull.herokuapp.com">FullInnovation Team </a>



# ผู้สนับสนุน



