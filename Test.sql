/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 8.0.19 : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `test`;

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `blog` */

insert  into `blog`(`id`,`title`,`author`,`content`) values (8,'php基本语法','zhangsan','php脚本在服务器上执行，然后将纯HTML结果发送回浏览器\r\n定义变量 : $变量名 = 变量值\r\nphp是一种弱类型语言 , 不必说明数据类型\r\n1. 字符串\r\n2. 整数  ( 三种 ：十进制、十六进制、八进制 ) 类似Java ， 小写\r\n3. 浮点数\r\n4. 布尔型（只有true和false两个值）\r\n豆腐干豆腐干\r\n'),(11,'是的方法改进改进','zhangsan','饭店打工的');

/*Table structure for table `information` */

DROP TABLE IF EXISTS `information`;

CREATE TABLE `information` (
  `position` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `str` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `information` */

insert  into `information`(`position`,`str`) values ('home_p1','Weblog就是在网络上发布和阅读的流水记录，通常称为“网络日志”，简称为“网志”。博客（BLOGGER）概念解释为网络出版（Web Publishing）、发表和张贴（Post-这个字当名词用时就是指张贴的文章）文章，是个急速成长的网络活动。'),('home_p2','Blogger即指撰写Blog的人。Blogger在很多时候也被翻译成为“博客”一词，而撰写Blog这种行为，有时候也被翻译成“博客”。因而，中文“博客”一词，既可作为名词，分别指代两种意思Blog（网志）和Blogger（撰写网志的人），也可作为动词，意思为撰写网志这种行为，只是在不同的场合分别表示不同的意思罢了。'),('home_p3','Blog是一个网页，通常由简短且经常更新的帖子（Post，作为动词，表示张贴的意思，作为名字，指张贴的文章）构成，这些帖子一般是按照年份和日期倒序排列的。而作为Blog的内容，它可以是你纯粹个人的想法和心得，包括你对时事新闻、国家大事的个人看法，或者你对一日三餐、服饰打扮的精心料理等，也可以是在基于某一主题的情况下或是在某一共同领域内由一群人集体创作的内容。它并不等同于“网络日记”。作为网络日记是带有很明显的私人性质的，而Blog则是私人性和公共性的有效结合，它绝不仅仅是纯粹个人思想的表达和日常琐事的记录，它所提供的内容可以用来进行交流和为他人提供帮助，是可以包容整个互联网的，具有极高的共享精神和价值。一个Blog就是一个网页，它通常是由简短且经常更新的Post所构成；这些张贴的文章都按照年份和日期排列。其他Blogs则是一群人基于某个特定主题或共同利益领域的集体创作。Blog好像是对网络传达的实时讯息。撰写这些Weblog或Blog的人就叫做Blogger或Blog writer。'),('home_p4','简言之，Blog就是以网络作为载体，简易迅速便捷地发布自己的心得，及时有效轻松地与他人进行交流，再集丰富多彩的个性化展示于一体的综合性平台。 不同的博客可能使用不同的编码，所以相互之间也不一定兼容。这使得不同的博客各具特色。　Blog是继Email、BBS、ICQ之后出现的第四种网络交流方式，是网络时代的个人“读者文摘”，是以超级链接为武器的网络日记，是代表着新的生活方式和新的工作方式，更代表着新的学习方式。具体说来，博客(Blogger)这个概念解释为使用特定的软件，在网络上出版、发表和张贴个人文章的人。'),('home_p5','一个Blog其实就是一个网页，它通常是由简短且经常更新的帖子所构成，这些张贴的文章都按照年份和日期倒序排列。个人构想到日记、照片、诗歌、散文，甚至科幻小说的发表或张贴都有。许多Blogs是个人心中所想之事情的发表，其它Blogs则是一群人基于某个特定主题或共同利益领域的集体创作。'),('home_p6',NULL);

/*Table structure for table `leave_messages` */

DROP TABLE IF EXISTS `leave_messages`;

CREATE TABLE `leave_messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `time` varchar(100) NOT NULL,
  `author` varchar(20) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `rel_author` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `leave_messages` */

insert  into `leave_messages`(`id`,`time`,`author`,`content`,`rel_author`) values (1,'2021-11-18 07:45:08','匿名','我的我的,都是我的.','wgywgy'),(2,'2021-11-18 08:12:15','匿名','干得不错','wgywgy'),(5,'2021-11-18 09:31:18','zhangsan','阿三大苏打','zhangsan'),(9,'2021-11-19 09:37:02','zhangsan','反对v','zhangsan'),(12,'2021-11-19 10:55:20','zhangsan','我发士大夫士大夫','zhangsan'),(13,'2021-11-19 10:55:58','wgywgy','芜湖,蚌埠住了','wgywgy'),(14,'2021-11-20 09:06:17','匿名','哥只是个传说','wgywgy'),(16,'2021-11-20 11:16:29','admin','不错不错','admin'),(17,'2021-11-20 11:19:56','admin','再接再厉','admin'),(18,'2021-11-20 11:37:17','admin','哈哈哈哈','admin'),(19,'2021-11-21 09:16:53','GouFei','我是这诸天万族的劫！','GouFei'),(20,'2021-11-21 09:20:33','monkeyKing','飞舞 ! ! ! ! ','monkeyKing'),(21,'2021-11-21 09:22:56','匿名','你这个** ! ','monkeyKing');

/*Table structure for table `playlist` */

DROP TABLE IF EXISTS `playlist`;

CREATE TABLE `playlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) NOT NULL,
  `pic_url` varchar(255) NOT NULL,
  `player` varchar(15) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `author` varchar(15) NOT NULL,
  `server` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `playlist` */

insert  into `playlist`(`id`,`p_name`,`pic_url`,`player`,`p_id`,`author`,`server`,`type`) values (2,'U-87','https://p2.music.126.net/xuFy0k8O_xKuAqbbjC24Ig==/109951166497586944.jpg','陈奕迅','6491','zhangsan','netease','album'),(4,'模特','https://p1.music.126.net/0uZ_bKtm4E188Uk9LFN1qg==/109951163187393370.jpg','李荣浩','2659088','zhangsan','netease','album'),(5,'JJ陆','https://p2.music.126.net/s6zFxvXe5kOxub4_x4rZhQ==/109951163052847567.jpg','林俊杰','10770','zhangsan','netease','album'),(9,'逆光','https://p1.music.126.net/eoSmqJdmKhNUnlGlhY9sEw==/109951166278013709.jpg','孙燕姿','28520','zhangsan','netease','album'),(12,'Minecraft - Volume Beta ','https://y.qq.com/music/photo_new/T002R300x300M000003cMkiY3d17k0_3.jpg?max_age=2592000','C418','003cMkiY3d17k0','zhangsan','tencent','album');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `psd` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `authority` int NOT NULL,
  `alert` int NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `user` */

insert  into `user`(`name`,`psd`,`email`,`tel`,`authority`,`alert`) values ('admin','admin','admin@qq.com','13775645025',1,0),('GouFei','123456','1399971898@qq.com','13775645025',0,0),('monkeyKing','123456','123@qq.com','13775645025',0,0),('wgywgy','123456','321321@163.com','13775645025',3,1),('wygwgy','123456','123@qq.com','13775645025',0,0),('zhangsan','zs123456','zhangsan@qq.com','13775645025',0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
