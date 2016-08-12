/*
SQLyog Professional v10.42 
MySQL - 5.7.10-log : Database - budi_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`budi_app` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `budi_app`;

/*Table structure for table `jawaban_tb` */

DROP TABLE IF EXISTS `jawaban_tb`;

CREATE TABLE `jawaban_tb` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_sessi` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `jawaban` enum('1','2','3') DEFAULT NULL,
  `status_jawaban` varchar(5) DEFAULT NULL,
  `tanggal_jawaban` datetime DEFAULT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `jawaban_tb` */

insert  into `jawaban_tb`(`id_jawaban`,`id_sessi`,`ip`,`id_pertanyaan`,`jawaban`,`status_jawaban`,`tanggal_jawaban`) values (3,'310720161151323992','::1',1,'2','1','2016-07-31 02:07:25'),(4,'310720161151323992','::1',2,'2','1','2016-07-31 02:23:57'),(5,'310720161151323992','::1',3,'1','1','2016-07-31 02:25:05'),(6,'310720161151323992','::1',4,'2','1','2016-07-31 02:25:10'),(7,'310720161151323992','::1',5,'1','1','2016-07-31 02:25:13'),(8,'310720161151323992','::1',6,'2','1','2016-07-31 02:25:15'),(9,'310720161151323992','::1',7,'1','1','2016-07-31 02:25:19'),(10,'310720161151323992','::1',8,'1','1','2016-07-31 02:25:32'),(11,'310720161151323992','::1',9,'1','1','2016-07-31 02:25:40'),(12,'310720161151323992','::1',10,'1','1','2016-07-31 02:25:42'),(13,'310720161151323992','::1',11,'2','1','2016-07-31 02:25:44'),(14,'310720161151323992','::1',12,'2','1','2016-07-31 02:25:45'),(15,'310720161151323992','::1',13,'1','1','2016-07-31 02:25:47'),(16,'310720161151323992','::1',14,'2','1','2016-07-31 02:25:48'),(17,'310720161151323992','::1',15,'2','1','2016-07-31 02:25:49');

/*Table structure for table `pasien_tb` */

DROP TABLE IF EXISTS `pasien_tb`;

CREATE TABLE `pasien_tb` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `id_sessi` varchar(100) DEFAULT NULL,
  `status` varbinary(5) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `pasien_tb` */

insert  into `pasien_tb`(`id_user`,`nama_user`,`email`,`ip`,`id_sessi`,`status`,`tanggal`) values (1,'Juri','juri@pebri.com','::1','310720161057551804','1','2016-07-31 10:57:55'),(2,'jaka','asak@kahsa','::1','310720161150471133','1','2016-07-31 11:50:47'),(3,'pebri','sljdhs@hasa','::1','310720161151323992','1','2016-07-31 11:51:32');

/*Table structure for table `penyakit_tb` */

DROP TABLE IF EXISTS `penyakit_tb`;

CREATE TABLE `penyakit_tb` (
  `id_penyakit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penyakit` varchar(100) NOT NULL,
  `penyebab` text NOT NULL,
  `keterangan` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `solusi` text NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`id_penyakit`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `penyakit_tb` */

insert  into `penyakit_tb`(`id_penyakit`,`nama_penyakit`,`penyebab`,`keterangan`,`photo`,`solusi`,`tanggal`) values (1,'Dropsy (Perut Mengembung)','Disebabkan oleh bakteri, kualitas air yang buruk','Penyakit ini disebabkan bakteri, biasanya penyakit ini timbul karena lingkungan hidup yang kurang baik, dan lingkungan tercemar sisa makanan atau sisa metabolisme.<br>\r\npembengkakan terjadi akibat berakumulasinya cairan atau lendir dalam rongga tubuh. gejala ini kerap disertai dengan malas bergerak, gangguan pernapasan atau warna kulit pucat kemerahan.','Library/images/Penyakit/Dropsy (Perut Mengembung)77-1.png','Pastikan bahwa akuarium selalu dalam kondisi prima (optimal), dan hindari jangan sampai ikan stres. <br>\r\nIkan yang sakit harus segera diisolasi dan dirawat secara optimal.perendaman secara kontinyu dalam jangka panjang dengan anti bakteri iinternal, bila ikan tidak cepat membaik bisa dengan obat seperti Oxytetracycline atau Chloramphenicol dengan dosis mg/kg berat ikan per hari dicampur dalam pakan selama 10 hari',NULL),(2,'White spot (jamur kapas)','Disebabkan Oleh jamur atau parasit','White spot atau bintik adalah timbulnya bintik putih pada sisik louhan. White spot disebabkan oleh adanya jamur. Jamur ini muncul karena buruknya kualitas air yang digunakan. White spot merupakan penyakit yang sulit disembuhkan.\r\n<br>\r\npengobatan penyakit ini dengan cara memberi akuarium heater(pemanas) dengan suhu 29-31 derajat celcius, disertai obat metil blue dan garam ikan.','Library/images/Penyakit/White spot (jamur kapas)12-2.jpeg','- kenapa',NULL),(3,'pop eye (mata berkabut)','Disebabkan Oleh infeksi bakteri eksternal, reaksi terhadap protozoa.','Pengobatan penyakit pop eye (mata berkabur) bisa menggunakan obat tetracycline 30-50mg per liter hari, aerasi yang kencang, jangan hidupkan filter dan terkena sinar matahari selama pengobatan. Serta berikan heater pada suhu 29-31 derajat celcius.','popeye.jpg','',NULL),(4,'berak putih (white poop)','Disebabkan Oleh pakan yang kurang bersih,kualitas air yang buruk.','Ciri penyakit ini terlihat dari feces yang berwarna putih dan bertekstur seperti jelly.<br>\r\nPengobatan penyakit ini bisa menggunakan metronidazol serta ciprofloaxacin yang dapat dibeli di apotik serta toko ikan , dima dicampur ke air dengan dosis 1-2 butir per 150 liter air. Serta gunakan hetaer pada suu 29-31 derajat celcius.','berput.jpg','',NULL),(5,'velvet','Disebabkan oleh Jamur Tichophyton Concentricum','Penyakit velvet menyerang ikan apabila kualitas air buruk, ikan mengalami stress berkepanjangan. Penyakit ini diakibatkan bakteri protozoa dari jenis Dinoflagellata yaitu Oodinium, protozoa ini sangat kecil (20 microns), Penyakit ini menular lewat kontak langsung dengan ikan yang terserang penyakit tersebut atau air yang telah terkontaminasi dengan protozoa tersebut.','velvet.jpg','Cara 1:\r\n<br>\r\nDalam 100 lt air masukan Chlorampenicol 1.5 gram (6 kapsul 250 mg), Acriflavine 2 PPM atau 20 ml dan Garam ikan 2 sendok makan ke dalam tank\r\n\r\nSponge filter dapat tetap dibiarkan dalam tank dan tambahkan aerasi, gunakan heater dengan suhu 28 derajat Celcius.\r\n\r\nBiarkan tank tersebut selama 2 atau 3 hari, bila airnya menjadi keruh karena lendir dapat dikuras semua dan ulangi dosis tersebut hingga ikan kembali sehat dan tidak ada lendir atau selaput seperti kapas pada tubuhnya.\r\n<br><br>\r\nCara 2:<br>\r\n\r\nMasukkan ikan yang sakit kedalam sebuah tank dengan air sebanyak 100 liter, beri aerasi dan sponge filter agar air tidak cepat keruh. Lalu masukan Copper formalin sesuai dosis. Tambahkan 2 sendok garam ikan kedalam air tank.\r\n\r\nMasukan 1 tablet antibiotik Ciprofloxacin 500 mg kedalam tank, atur heater pada suhu 30 derajat Celcius.\r\n\r\nBiarkan hingga 3 hari, lalu ganti semua airnya dan berikan treatment dengan dosis yang sama hingga ikan sembuh',NULL),(6,'hole in the head','Disebabkan Oleh Jamur Golongan Trichopyton dan Microsporum','Hole in The Head dikenal dengan nama Hexamita. Kebanyakan menyerang keluarga ikan jenis Chichlidae. Penyebab protozoa Hexamita yang hidup di lambung ikan, yang akan membelah diri apabila kondisi ikan drop.\r\nProses tertular akibat sistem imun tubuh ikan melemah karena stress / lingkungan yang tidak stabil / bisa juga karena new tank syndrom yang berlangsung cukup lama pada suhu yang labil.','hole.jpg','Treatment :\r\n<br>lepaskan semua zeolit, Carbon aktif , dll, cukup yang tersisa kapas saja,hentikan mesin dan hidupkan aerator. Berikan obat Tetracycline 500 mg, Garam ikan 3 genggam, heater pasang di 29-31 derajat celcius.',NULL),(7,'fin root(busuk sirip)','Disebabkan Oleh bakteri aeromonas.','Busuk sirip atau ekor terjadi karena proses pembusukan atau kerusakan pada sirip atau ekor ikan. Berbagai hal bisa menjadi pemicu penyakit ini, seperti bakteri aeromonas, pseudomonas dan flexibacter. Selain karena bakteri daya tahan tubuh ikan yang lemah serta kerusakan sirip akibat berkelahi juga bisa menjadi pemicu penyakit ini.<br><br>','finroot.jpg','Pengobatan:\r\n<br>\r\n- Isolasi/karantina ikan yang sakit\r\n<br>\r\n- Ganti Air full, tempatnya dicuci bersih\r\n<br>\r\n- Methylene Blue (bisa merk Blitz Icht, Rid All, Tetra, dsb)\r\n<br>\r\n- Garam Aquarium\r\n<br>\r\n- Ganti air full 3 hari kemudian, bila masih belum ada tanda-tanda membaik, ulangi lagi pengobatan seperti di atas',NULL);

/*Table structure for table `pertanyaan_tb` */

DROP TABLE IF EXISTS `pertanyaan_tb`;

CREATE TABLE `pertanyaan_tb` (
  `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` text,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `pertanyaan_tb` */

insert  into `pertanyaan_tb`(`id_pertanyaan`,`pertanyaan`) values (1,'Terdapat bercak putih seperti kapas atau panu'),(2,'Ikan kurang aktif bergerak'),(3,'ikan tidak nafsu makan'),(4,'sirip ikan menguncup'),(5,'Warna ikan memucat'),(6,'Ujung sirip menjadi gelap/kemerahan'),(7,'Ikan bergerak mendadak, seperti berusaha menggaruk badannya'),(8,'muncul bintik di badan berwarna emas atau seperti besi berkarat'),(9,'Mata ikan membengkak'),(10,'Mata ikan berselaput putih seperti katarak'),(11,'Perut ikan membengkak dan berwarna kemerahan'),(12,'Sisik ikan terangkat seperti mengelupas'),(13,'feces memanjang berwarna putih'),(14,'Muncul luka dikepala seperti terbentur benda tumpul'),(15,'Kepala bernanah dan berlubang');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
