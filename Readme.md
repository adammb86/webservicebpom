# Web Service Example

### Configuration

#### Kebutuhan sistem

| Software   | Version |
| ---------- |:-------:|
| Web Server | Apache / Nginx |
| PHP        | \>= 7.4  |
| MySQL      | \>= 5.7  |
| Postman    | \>= 8.6.1 |

#### Konfigurasi koneksi ke database pada file `koneksi.php`

```php
$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "webservices";
```

#### Import Database
Anda dapat mengimpor database `webservices.sql` atau melakukan import manual menggunakan kode berikut:
```mysql
CREATE DATABASE webservices;

USE webservices;

CREATE TABLE `produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jenis_produk` varchar(50) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `jumlah_stok` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `produk` VALUES (1,'Minuman','Air Mineral',100,5000,'2021-06-11 01:25:37','2021-06-11 01:25:37'),(2,'Makanan','Snack Ringan',50,7500,'2021-06-11 01:25:56','2021-06-11 01:25:56');
```

#### Import Postman Collection
Import **Postman Collection** dan **Postman Environment** dari folder `postman` dengan cara klik tombol `import` pada aplikasi Postman, lalu pilih kedua file tersebut untuk di import


#### Read Data
Request: GET `POST webservicebpom/`

Response:
```json
{
    "message": "success",
    "data": [
        {
            "id": "1",
            "jenis_produk": "Minuman",
            "nama_produk": "Air Mineral",
            "jumlah_stok": "100",
            "harga": "5000",
            "created_at": "2021-06-11 08:25:37",
            "updated_at": "2021-06-11 08:25:37"
        },
        {
            "id": "2",
            "jenis_produk": "Makanan",
            "nama_produk": "Snack Ringan",
            "jumlah_stok": "50",
            "harga": "7500",
            "created_at": "2021-06-11 08:25:56",
            "updated_at": "2021-06-11 08:25:56"
        }
    ]
}
```

#### Create Data
Request: POST `{{url}}/webservicebpom/create.php`

Body:

| **Key**         | **Value** |
| ---------- |:-------:|
| nama_produk | String |
| jenis_produk | String |
| jumlah_stok | Integer |
| harga | Integer |


Response:
```json
{
  "message": "success"
}
```

#### Update Data
Request: POST `{{url}}/webservicebpom/update.php?id=xxx`

Body:

| **Key**         | **Value** |
| ---------- |:-------:|
| nama_produk | String |
| jenis_produk | String |
| jumlah_stok | Integer |
| harga | Integer |


Response:
```json
{
  "message": "success"
}
```

#### Delete Data
Request: DELETE `{{url}}/webservicebpom/delete.php?id=xxx`

Response:
```json
{
  "message": "success"
}
```

