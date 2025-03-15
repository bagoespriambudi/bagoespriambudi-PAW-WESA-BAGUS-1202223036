-- Buat database db_buku (jika belum ada) dan gunakan database tersebut
CREATE DATABASE IF NOT EXISTS db_buku;
USE db_buku;

-- Buat tabel tb_buku
CREATE TABLE tb_buku (
  id INT(11) NOT NULL,
  judul VARCHAR(255) NOT NULL,
  penulis VARCHAR(255) NOT NULL,
  tahun_terbit INT(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Set primary key dan AUTO_INCREMENT
ALTER TABLE tb_buku ADD PRIMARY KEY (id);
ALTER TABLE tb_buku MODIFY id INT(11) NOT NULL AUTO_INCREMENT;
