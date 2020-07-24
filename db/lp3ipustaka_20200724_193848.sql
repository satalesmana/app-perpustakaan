-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "buku" -----------------------------------------
CREATE TABLE `buku`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`judul` VarChar( 45 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
	`pengarang` VarChar( 45 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
	`gambar` VarChar( 45 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 14;
-- -------------------------------------------------------------


-- CREATE TABLE "member" ---------------------------------------
CREATE TABLE `member`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nim` VarChar( 45 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
	`nama` VarChar( 45 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
	`telpon` VarChar( 45 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
	`alamat` VarChar( 45 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 41;
-- -------------------------------------------------------------


-- CREATE TABLE "peminjaman_detail" ----------------------------
CREATE TABLE `peminjaman_detail`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`idpinjam` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`idbuku` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`qty` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 14;
-- -------------------------------------------------------------


-- CREATE TABLE "peminjaman_header" ----------------------------
CREATE TABLE `peminjaman_header`( 
	`idpinjam` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`idpeminjam` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`tglPinjam` Date NULL,
	`tglKembali` Date NULL,
	`status` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	PRIMARY KEY ( `idpinjam` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- CREATE TABLE "pengembalian" ---------------------------------
CREATE TABLE `pengembalian`( 
	`id_pengembalian` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`id_pinjam` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`nim` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`tgl_kembali` Date NULL,
	`tgl_realisasi` Date NULL,
	`denda` Int( 255 ) NULL,
	PRIMARY KEY ( `id_pengembalian` ),
	CONSTRAINT `unique_id_pengembalian` UNIQUE( `id_pengembalian` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- Dump data of "buku" -------------------------------------
BEGIN;

INSERT INTO `buku`(`id`,`judul`,`pengarang`,`gambar`) VALUES 
( '12', 'Latihan Jquery', 'Alwi', 'upload/Screenshot_20200319_114545.png' ),
( '13', 'Pemrograman PHP', 'Arif', 'upload/Screenshot_20200403_125213.png' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "member" -----------------------------------
BEGIN;

INSERT INTO `member`(`id`,`nim`,`nama`,`telpon`,`alamat`) VALUES 
( '33', '1129394', 'Andi', '345345345', 'Jl. Mangga' ),
( '35', '11293943', 'Budi', '234234234', 'Jl. Mangga' ),
( '36', '1129394er', 'Kurniawan', '324234', 'Jl. Mangga' ),
( '40', '1130123', 'Tesdgdfg', '0213', 'Tes Alamat' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "peminjaman_detail" ------------------------
BEGIN;

INSERT INTO `peminjaman_detail`(`id`,`idpinjam`,`idbuku`,`qty`) VALUES 
( '1', '0001', '12', '2' ),
( '2', '0002', '12', '2' ),
( '3', '0002', '13', '3' ),
( '5', '0003', '12', '3' ),
( '6', '0004', '12', '3' ),
( '7', '0005', '12', '3' ),
( '10', '0007', '12', '4' ),
( '11', '0007', '12', '5' ),
( '12', '0008', '12', '3' ),
( '13', '0008', '12', '2' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "peminjaman_header" ------------------------
BEGIN;

INSERT INTO `peminjaman_header`(`idpinjam`,`idpeminjam`,`tglPinjam`,`tglKembali`,`status`) VALUES 
( '0001', '1129394', '2020-07-06', '2020-07-15', '1' ),
( '0002', '1129394', '2020-07-13', '2020-07-22', '0' ),
( '0003', '1129394', '2020-07-21', '2020-07-23', '0' ),
( '0004', '1129394', '2020-07-21', '2020-07-23', '0' ),
( '0005', '11293943', '2020-07-21', '2020-07-23', '0' ),
( '0006', '11293943', '2020-07-21', '2020-07-23', '0' ),
( '0007', '11293943', '2020-07-21', '2020-07-23', '0' ),
( '0008', '1130123', '2020-07-21', '2020-07-30', '1' );
COMMIT;
-- ---------------------------------------------------------


-- Dump data of "pengembalian" -----------------------------
BEGIN;

INSERT INTO `pengembalian`(`id_pengembalian`,`id_pinjam`,`nim`,`tgl_kembali`,`tgl_realisasi`,`denda`) VALUES 
( '0001', '0001', '1129394', '2020-07-15', '2020-07-25', '10000' ),
( '0002', '0008', '1130123', '2020-07-30', '2020-07-25', '0' );
COMMIT;
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


