CREATE DATABASE IF NOT EXISTS webservices;
USE webservices;

DROP TABLE IF EXISTS produk;


CREATE TABLE produk (
  id int NOT NULL AUTO_INCREMENT,
  jenis_produk varchar(50) DEFAULT NULL,
  nama_produk varchar(50) DEFAULT NULL,
  jumlah_stok int DEFAULT NULL,
  harga int DEFAULT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=3;


INSERT INTO produk VALUES (1,'Minuman','Air Mineral',100,5000,'2021-06-11 01:25:37','2021-06-11 01:25:37'),(2,'Makanan','Snack Ringan',50,7500,'2021-06-11 01:25:56','2021-06-11 01:25:56');