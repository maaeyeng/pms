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
    * แอดทริบิว ได้แก่ รหัสคลั่งสินค้า ชื่อคลังสินค้า ที่อยู่ ตำแหน่ง ประเภท และจำนวนเป็นต้น
    * เมธทอด ได้แก่ เพิ่มคลังสินค้า แก้ไข ค้นหา ลบคลังสินค้า   เป็นต้น
* ขนส่ง
    * แอดทริบิว ได้แก่ รหัสขนส่ง ชื่อขนส่ง ที่อยู่ ตำแหน่ง เป็นต้น
    * เมธทอด ได้แก่ เพิ่มขนส่ง แก้ไข ค้นหา ลบขนส่ง   เป็นต้น
* เจ้าหน้าที่
    * แอดทริบิว ได้แก่ รหัสเจ้าหน้าที่ ชื่อเจ้าหน้าที่ ตำแหน่ง เป็นต้น
    * เมธทอด ได้แก่ เพิ่มเจ้าหน้าที่ แก้ไข ค้นหา ลบเจ้าหน้าที่  เป็นต้น
* ผู้ผลิต
    * แอดทริบิว ได้แก่ รหัสผู้ผลิต ชื่อผู้ผิลติ ที่อยู่  ประเภท และเครดิตเป็นต้น
    * เมธทอด ได้แก่ เพิ่มผู้ผลิต แก้ไข ค้นหา ลบผู้ผลิต  เป็นต้น

## ความสามารถของระบบ



# วิธีที่ติดดตั้ง
* ติดตั้ง Apache, PHP, MySQL โดยใช้ xampp เป็น Server
* ติดตั้ง Laravel เวอร์ชั่น 9.0
```
composer create-project laravel/laravel pms
cd pms
composer install
cp .env.example .env
php artisan key:generate
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

* ติดตั้งฐานข้อมูลระบบ
```
php artisan migrate
``` 


# การอนุญาตใช้งาน
อนุญาตนำซอต์โค้ดนี้ไปใช้เพื่อการศึกษาเท่านั้น ในกรณีสนใจไปใช้งานในเชิงพาณิชย์ติดต่อทีมพัฒนา


# องค์ความรู้
* Controller
    * ProductsController 
        * Method: index, create, edit, store, edit, show, destroy
    * SellerController
    * WarehouseController
    * TransportController
    * OfficerController
* Model
    * Products 
        * fillabel data: productname, producttype, detail 
        * function : belogtohas
    * Seller :
    * Warehouse :
    * Transport :
* View
    * products
    * 
* Route
    * web
        * /
        * /proudct
    * api



# ทีมงานพัฒนา
<a href="https://innovationfull.herokuapp.com">FullInnovation Team </a>



# ผู้สนับสนุน
ยินดีรับผู้สนับสนุนในการพัฒนาโครงการนี้



