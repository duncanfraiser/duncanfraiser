# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.55-0ubuntu0.14.04.1-log)
# Database: duncanfraiser
# Generation Time: 2017-07-10 14:02:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bullets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bullets`;

CREATE TABLE `bullets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `job_id` int(11) DEFAULT NULL,
  `content` text,
  `delay` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bullets` WRITE;
/*!40000 ALTER TABLE `bullets` DISABLE KEYS */;

INSERT INTO `bullets` (`id`, `job_id`, `content`, `delay`, `updated_at`, `created_at`, `deleted_at`)
VALUES
	(1,1,'Built and deployed the Intranet and Employee Directory. The intranet is used by over 1,200 employees at 4 locations across the United States.','0.0s','2017-06-08 15:51:11','2017-05-31 21:25:13',NULL),
	(2,1,'Developed mobile-first applications using the Laravel PHP framework.','0.1s','2017-06-08 15:51:11','2017-05-31 21:25:13',NULL),
	(3,1,'Created custom content management systems (CMS) for application admin dashboards.','0.2s','2017-06-08 15:51:11','2017-05-31 21:25:13',NULL),
	(4,1,'Created application client-side and server-side interfaces using Bootstrap, Ajax and jQuery.','0.3s','2017-06-08 15:51:11','2017-05-31 21:25:13',NULL),
	(5,1,'Deployed servers using the Ubuntu Linux operating system and virtual host configurations.','0.4s','2017-06-08 15:51:11','2017-05-31 21:25:13',NULL),
	(6,2,'Monitored and maintain water levels of various crops grown for the Pharmaceutical Department.','0.0s','2017-05-31 21:26:20','2017-05-31 21:26:20',NULL),
	(7,2,'Manage and maintain exotic plant greenhouses.','0.1s','2017-05-31 21:26:20','2017-05-31 21:26:20',NULL),
	(8,2,'Responsible for planting and harvesting medical crops used for pharmaceutical research.','0.2s','2017-05-31 21:26:20','2017-05-31 21:26:20',NULL),
	(9,3,'Assembled and operated Evolve Laser during operating room prostate and ablation procedures.','0.0s','2017-06-12 13:47:02','2017-05-31 21:27:30',NULL),
	(10,3,'Maintained and updated Evolve Laser and Fiber Optic Tips.','0.1s','2017-06-12 13:47:02','2017-05-31 21:27:30',NULL),
	(11,3,'Collaborated with the scheduling for long distance travel with equipment to perform BPH cases.','0.2s','2017-06-12 13:47:02','2017-05-31 21:27:30',NULL),
	(12,4,'Drafted and designed engineering layouts for customers and or city requirements and deliverables.','0.0s','2017-05-31 21:29:12','2017-05-31 21:29:12',NULL),
	(13,4,'Maintained drafts of water main lines, sanitary and storm sewers and parking lots.','0.1s','2017-05-31 21:29:12','2017-05-31 21:29:12',NULL),
	(14,4,'Legal descriptions of property lines and easements.','0.2s','2017-05-31 21:29:12','2017-05-31 21:29:12',NULL),
	(15,5,'Primarily worked with the checking and gauging systems group.','0.0s','2017-05-31 21:30:20','2017-05-31 21:30:20',NULL),
	(16,5,'Evaluated and designed system layouts, product math data sheets, fixture designs and detailing requiring AutoCAD.','0.1s','2017-05-31 21:30:20','2017-05-31 21:30:20',NULL),
	(17,1,'Designed database architectures focused on Object Orientation Programming (OOP) using child/parent relationships for logical scalability.','0.5s','2017-06-08 15:51:11','2017-06-08 15:51:11',NULL),
	(18,1,'Responsible for creating, maintaining, and expanding all subsidiary company websites.','0.6s','2017-06-08 15:51:11','2017-06-08 15:51:11',NULL);

/*!40000 ALTER TABLE `bullets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table communities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `communities`;

CREATE TABLE `communities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `communities` WRITE;
/*!40000 ALTER TABLE `communities` DISABLE KEYS */;

INSERT INTO `communities` (`id`, `title`, `content`, `updated_at`, `created_at`, `deleted_at`)
VALUES
	(1,'Saint Paul Catholic Church','Created and host the Church’s website   <a target=\"blank\" href=\"http://saintpaulcatholicchurch.com/\"> www.saintpaulcatholicchurch.com </a>  and provide technical support for the staff.','2017-05-31 21:35:19','2017-05-31 21:33:49',NULL),
	(2,'Saint Paul Early Learning Center','Created and host the learning center’s website <a target=\"blank\" href=\"http://saintpaullearningcenter.com/\">www.saintpaullearningcenter.com/</a> and provide technical support for the staff.','2017-05-31 21:36:53','2017-05-31 21:36:35',NULL),
	(3,'Schlater Methodist Church','Attained onsite dimensions to fabricate a detailed map of McNutt Cemetery.','2017-05-31 21:37:11','2017-05-31 21:37:11',NULL);

/*!40000 ALTER TABLE `communities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `body` text COLLATE utf8mb4_unicode_ci,
  `newContact` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `body`, `newContact`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(2,'Monica Walton','liturgy@saintpaulcatholicchurch.com','your cool website','Very cool! Nice job. It eeks you! \r\nLove the Star Wars Legos (2for1) and the very simple, yet awesome \"df\" logo!! Very nice!\r\n\r\nI actually didn\'t see any typos right off the bat....just a few tense or possession issues. Very minor. You must have had your milk & cookies before writing it.\r\n\r\nI\'m impressed with the way it moves, too. I, personally, haven\'t seen a site quite like this one. So, when you\'re independently wealthy and have a bzillion websites, you can hire me as one of your minions!\r\n\r\nGreat job! \r\nMonica',0,'2017-06-04 20:35:31','2017-06-13 20:04:09',NULL),
	(3,'Magnolia','liturgy@saintpaulcatholicchurch.com','!!!!','Had to send another one just to see your hilarious mug again, and have you call me \"Magnolia!\"',0,'2017-06-04 20:37:39','2017-06-13 20:03:26',NULL),
	(19,'DUNCAN FRAISER','dfraiser1954@gmail.com','booboo','im smart',0,'2017-06-11 15:08:45','2017-06-12 13:46:02','2017-06-12 09:20:19'),
	(20,'foo','bannann@monkey.com','fubar','rghoerengkgn',0,'2017-06-13 15:10:59','2017-06-13 20:03:21','2017-06-13 20:03:21'),
	(21,'test','Test@email.com','text','test',1,'2017-07-05 18:29:49','2017-07-05 18:30:20','2017-07-05 18:30:20'),
	(22,'laura fraiser','dfraiserjr@gmail.com','test','foo',0,'2017-07-05 18:47:44','2017-07-05 18:48:09',NULL),
	(23,'test','Test@email.com','foo','foo',0,'2017-07-05 19:11:55','2017-07-05 19:12:17',NULL);

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table degrees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `degrees`;

CREATE TABLE `degrees` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `education_id` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `delay` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `degrees` WRITE;
/*!40000 ALTER TABLE `degrees` DISABLE KEYS */;

INSERT INTO `degrees` (`id`, `education_id`, `content`, `delay`, `updated_at`, `created_at`, `deleted_at`)
VALUES
	(1,1,'Bachelor of Business Administration BBA','0.3s','2017-05-31 21:30:45','2017-05-31 21:30:45',NULL),
	(2,1,'Major:  Management Information Systems','0.4s','2017-05-31 21:30:45','2017-05-31 21:30:45',NULL),
	(3,2,'Firefighter','0.3s','2017-05-31 21:31:27','2017-05-31 21:31:27',NULL),
	(4,2,'Emergency Medical Technician','0.4s','2017-05-31 21:31:27','2017-05-31 21:31:27',NULL);

/*!40000 ALTER TABLE `degrees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table education
# ------------------------------------------------------------

DROP TABLE IF EXISTS `education`;

CREATE TABLE `education` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `school` varchar(255) DEFAULT NULL,
  `kind` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;

INSERT INTO `education` (`id`, `school`, `kind`, `updated_at`, `created_at`, `deleted_at`)
VALUES
	(1,'The University of Mississippi','Degree','2017-05-31 21:30:45','2017-05-31 21:30:45',NULL),
	(2,'Macomb Emergency Services Training Center','Certificate','2017-05-31 21:31:27','2017-05-31 21:31:27',NULL);

/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;

INSERT INTO `jobs` (`id`, `company`, `title`, `startDate`, `endDate`, `updated_at`, `created_at`, `deleted_at`)
VALUES
	(1,'Ergon, Inc. (Jackson, MS)','Lead Web Developer','2015-08-01',NULL,'2017-05-31 21:25:13','2017-05-31 21:25:13',NULL),
	(2,'University of Mississippi, Medicinal Plant Garden (Oxford, MS)','Plant Management','2013-03-01','2015-08-01','2017-05-31 21:26:20','2017-05-31 21:26:20',NULL),
	(3,'United Medical Systems (Westborough, MA)','Laser Specialist','2010-10-01','2013-03-01','2017-05-31 21:27:30','2017-05-31 21:27:30',NULL),
	(4,'AR Decker & Associates (Troy, MI)','Civil Engineering Designer','2006-01-01','2008-12-01','2017-05-31 21:29:12','2017-05-31 21:29:12',NULL),
	(5,'Modern Engineering, Inc. (Rochester, MI)','CAD Detailer','2002-01-01','2006-01-01','2017-05-31 21:30:20','2017-05-31 21:30:20',NULL);

/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table landings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `landings`;

CREATE TABLE `landings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `about` text,
  `serv` text,
  `db` text,
  `frontend` text,
  `backend` text,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `landings` WRITE;
/*!40000 ALTER TABLE `landings` DISABLE KEYS */;

INSERT INTO `landings` (`id`, `img`, `about`, `serv`, `db`, `frontend`, `backend`, `updated_at`, `created_at`, `deleted_at`)
VALUES
	(1,NULL,'<h2><center>I love what I do, I build things.</center></h2> <br/>\r\n I have exceptional logical and analytical skills, along with a strong background in Object Oriented Programming.  I am a Full Stack Developer, so I build all the pieces required to develop custom software and applications.  My apps are all designed to give the user the ability to update and maintain their own live content through custom admin dashboards.  I use open source software on all projects I create.  Laravel, Nginx, and Ubuntu are just a few free pieces utilized in my apps.\r\n<br/><br/>\r\n I graduated from The University of Mississippi (Hotty Toddy!) with a Bachelor of Business Administration and Management Information Systems.  But my education didn\'t end in school, I try to evolve daily to increase my coding ability and skills. \r\n<br/><br/>\r\nThis portfolio is also an example of my work, <a href=\"/project/5\">click here</a> to view a walk through of the content management system (CMS).','I have my own server that I use to spin up virtual hosts for production applications. I provide web hosting, email, backups and other services for the client\'s applications.','All of my application content is database driven. I design, build, and use relational databases to accurately meet all of my client\'s requirements.  I combine my database capabilities with object-oriented programming to achieve smart and scalable applications.','I use CSS and JavaScript techniques to develop a slick look of styles customized for the application\'s content. All of my applications are mobile responsive with a focus on easy client-side usability.','I develop all of my applications with a strong foundation of object-oriented programming. Using the Laravel PHP framework, my custom applications can be tailored to any functionality request from the client. I also make customized content management systems (CMS) so the client can have the ability to update live content.','2017-06-13 18:30:25',NULL,NULL);

/*!40000 ALTER TABLE `landings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_04_07_193932_add_paid_to_users',1),
	(4,'2017_04_19_150042_create_contacts_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191)),
  KEY `password_resets_token_index` (`token`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `home` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `info` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `home`, `name`, `link`, `img`, `info`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,1,'Ergon Inc.','http://ergonmarine.com/','ergon.png','I am currently the Lead Web Developer for Ergon, Inc.  I built the company Intranet and Employee Directory.  The intranet is used by over 1,200 employees at 4 locations across the United States.  I used role authentication to determine which employees have access to updatable information, but all employees have the ability to update their own profile information in the directory. \r\n<a target=\"blank\" href=\"/file/ErgonIntranetManual.pdf\">Click Here</a> to view intranet/directory user manual.\r\n I also maintain 20+ company websites.  I am in the process of updating or rebuilding all of the legacy websites.  Below is an example of one of my rebuilt sites, Ergon Marine & Industrial Supply Inc.','2017-05-15 19:55:03','2017-06-06 15:48:53',NULL),
	(2,1,'Saint Paul Catholic Church','http://saintpaulcatholicchurch.com/','stPaul.png','Saint Paul Catholic Church is located in Flowood, Mississippi.  This parish is filled with a very loving community that my wife and I have  grown to cherish.  When we first started to attend mass, we were invited to a new member luncheon where I was asked to help out with issues on their previous site.  The site was an outdated wordpress site and lacked the ability to fill the needs of the church.  After examining their site in more detail, I told them I would just build them a new site that would be much more functional.  The application has grown and is still evolving into a more useful tool.  It has been my honor to work with their administrative staff, I\'m just happy that I am able to contribute to this loving church family.','2017-05-15 19:47:50','2017-06-08 13:36:35',NULL),
	(3,1,'Saint Paul Early Learning Center','http://saintpaullearningcenter.com/','learningCenter.png','Saint Paul Early Learning Center is a daycare and early learning center associated with Saint Paul Catholic Church in Flowood, MS.  My wife and I were blessed with a beautiful baby girl this year and because of our relationship with our church it just made sense that our daughter should attend their daycare.  While we were making all the arrangements to enroll her, they approached me about  updating their website.  I was happy to help, I rebuilt the site and moved it to my server so I could also host the application.','2017-05-15 19:51:14','2017-06-06 16:19:30',NULL),
	(4,1,'Kenny Kens & The Brown Bottle Boys','http://kennykens.com/','kennykens.png','Kenny Kens first broke onto the music scene in 2003 forming The Cash Creek Band, and has enjoyed a cult following returning country music back to it\'s roots ever since. After moving down to Austin TX in 2013, Kenny Kens returned back to Detroit MI and retooled the band forming The Brown Bottle Boys. Soaking in all the honky tonk’s and dancehalls down in Austin, the music moved from a more Americana type of sound to steel guitar infused traditional country. Kenny Kens & The Brown Bottle Boys started writing and recording their own songs, and the formula worked! After performing their own sets of original honky tonk music all over Michigan, they hit the ground running and recorded their own full length album entitled “What The Hell Happened To Country?” released on the Ghettobilly label in 2016.','2017-05-15 14:47:06','2017-05-22 18:22:47',NULL),
	(5,0,'My Admin Dashboard','http://www.duncanfraiser.com/','df-index.png','Here is a walkthrough of the custom content management system (CMS) for this portfolio.  I built my own notifications that alert me of new contact messages.  All of my forms update the database for this site so the live page content is updated automatically.   I use middleware to give permissions to what pages a logged in user can access.  The dashboard is mobile responsive for updating on the go.','2017-06-09 19:56:04','2017-06-09 21:39:16',NULL);

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;

INSERT INTO `sections` (`id`, `project_id`, `title`, `content`, `img`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,4,'About Application','I use the Laravel PHP framework to create my applications. The site is database driven with role authentication. I build the app\'s content management system (CMS) so I can give the site administrator the ability to update live content specific to their needs. I create my own CSS themes and use Bootstrap along with JavaScript to make the site dynamic and easy to navigate. Also, all of my applications are mobile responsive.','kk-index.png','2017-05-15 14:47:06','2017-06-06 16:06:06',NULL),
	(2,4,'Landing Page','There are multiple sections of the landing page starting with a carousel that displays several banners of the band that the user can scroll through.  There is an about section followed by image links that gives the user multiple ways to navigate through the site.  The landing page also includes  upcoming events and Album release information.','kk-landing.png','2017-05-22 16:25:35','2017-06-06 16:22:21',NULL),
	(3,4,'Band Member Bios','On the footer of all pages there is a tab selection for each member of the band.  You can select a member and read their biography in a javascript  popup window.','kk-bio.png','2017-05-15 14:47:06','2017-06-06 16:22:21',NULL),
	(4,4,'Booking Form','The band can be booked for gigs through the site\'s booking form.  The form includes input fields for all relevant booking information.  All booking events can be reviewed through the admin dashboard where Kenny Kens can accept or decline the event.','kk-booking.png','2017-05-15 14:47:06','2017-05-22 15:57:51',NULL),
	(5,4,'Video Gallery','Using pagination, the video gallery displays 6 videos per page. Videos play on the page through the thumbnail  and are also clickable for full screen view.  Videos can be uploaded and deleted through the admin dashboard.','kk-video.png','2017-05-15 14:47:06','2017-05-22 18:35:28',NULL),
	(6,4,'Merchandise','Fan Contraband can be purchased on the site\'s merchandise page.  Online payments are verified using the Stripe API.  A product order list with all of the customer information is generated when the payment is confirmed and can be accessed through the admin dashboard.  The admin can update the order status from pending to shipped after payment is received and the order has been shipped.','kk-merch.png','2017-05-15 14:47:06','2017-06-06 16:22:21',NULL),
	(7,4,'Photo Gallery','The photo gallery uses pagination to display photos.  The photos are clickable to display a larger image with photo description.  Photos can be updated and deleted through the admin dashboard.','kk-photo.png','2017-05-22 17:52:09','2017-05-22 17:56:06',NULL),
	(8,3,'About Application','I use the Laravel PHP framework to create my applications. The site is database driven with role authentication. I build the app\'s content management system (CMS) so I can give the site administrator the ability to update live content specific to their needs. I create my own CSS themes and use Bootstrap along with JavaScript to make the site dynamic and easy to navigate. Also, all of my applications are mobile responsive.','lc-index.png','2017-05-15 19:51:14','2017-06-06 16:05:54',NULL),
	(9,3,'Calendar','The Staff creates a .pdf calendar for monthly events, so I created a page that they could upload the file and display it on the application.  It is also downloadable so parents can print a copy.','lc-calendar.png','2017-05-15 19:51:14','2017-05-26 14:36:07',NULL),
	(10,3,'Photo Gallery','The photo gallery uses pagination to display photos. The photos are clickable to display a larger image with photo description. Photos can be updated and deleted through the admin dashboard.','lc-photo.png','2017-05-15 19:51:14','2017-05-26 14:38:44',NULL),
	(11,3,'Login Page','I use role authentication to determine what user is logged in and return what specified functionality they have in the admin dashboard. The login page can set a  &quot;&#34;remember me&#34;&quot;  token and also send a  &#34;&#34;forgot my password&#34;&quot;  email link to reset the user\'s password.','lc-login.png','2017-05-15 19:51:14','2017-06-06 20:14:21',NULL),
	(12,1,'About Application','I use the Laravel PHP framework to create my applications. The site is database driven with role authentication. I build the app\'s content management system (CMS) so I can give the site administrator the ability to update live content specific to their needs. I create my own CSS themes and use Bootstrap along with JavaScript to make the site dynamic and easy to navigate. Also, all of my applications are mobile responsive.','em-index.png','2017-05-15 19:55:03','2017-06-06 16:05:24',NULL),
	(13,1,'Landing Page','The home page is divided up into 4 major sections that can be updated by the site administrator.  The first row is made up of 3 sections: Groceries, Parts, Fueling/Fleeting.  The second row pulls the latest 3 News articles and Specials.','em-home.png','2017-05-15 19:55:03','2017-06-06 16:10:06',NULL),
	(14,1,'About Page','Each site about page has the individual company\'s history along with information about Ergon, Inc. to tie all companies together under one banner corporation.','em-about.png','2017-05-15 19:55:03','2017-06-06 16:10:48',NULL),
	(15,1,'Contact Page','The contact form uses Sparkpost email delivery service to send mail to specified employees. The form also captures submitted information that can be accessed for sales and promotions.','em-contact.png','2017-05-15 19:55:03','2017-06-01 14:39:27',NULL),
	(16,1,'Recipe Page','The Recipe page displays lists of recipes divided up into 6 categories: Appetizers, Soups/Salads, Entrees, Sides, Desserts and Party Foods.  The site admin can add new recipes and images along with update existing recipes.','em-recipes.png','2017-05-15 19:55:03','2017-05-30 15:15:13',NULL),
	(17,1,'Recipe Page','Each individual recipe page provides instructions along with a list of ingredients which can be purchased through the online grocery form. Also there is a clickable thumbnail that provide\'s an enlarged image of the finished product.','em-recipe.png','2017-05-15 19:55:03','2017-06-06 16:11:45',NULL),
	(18,2,'About Application','I use the Laravel PHP framework to create my applications. The site is database driven with role authentication. I build the app\'s content management system (CMS) so I can give the site administrator the ability to update live content specific to their needs. I create my own CSS themes and use Bootstrap along with JavaScript to make the site dynamic and easy to navigate. Also, all of my applications are mobile responsive.','sp-index.png','2017-05-15 19:47:50','2017-06-06 16:05:41',NULL),
	(19,2,'Landing Page','The landing page has a carousel of banners that can be used to navigate throughout the application. The body of the page is primarily divided up into 5 sections: Announcements, Mass Times, Religious Ed & Youth, Fr. Gerry\'s Weekly Homily and Bulletins & Ministries. The sections are all maintained by the admin dashboard and the landing page loads the most recent content that has been added to the specific section. Users can click on a section to get the a full view of the content along with the previous 5 entries. There is also a link to an archive list that allows access to all previous section content.','sp-home.png','2017-05-15 19:47:50','2017-06-06 16:16:36',NULL),
	(20,2,'Contact Us','The contact us page also contains staff profiles .  The thumbnails are clickable and offer more information about each staff member.  The profiles are all editable and the admin also has the ability to add new staff members and upload new profile pictures.','sp-staff.png','2017-05-15 19:47:50','2017-05-22 21:37:06',NULL),
	(21,2,'Registration Forms','There are multiple registration forms throughout the site.  The admin dashboard provides index list of all the people who have signed up for events, classes, etc. The admin also has the ability to query the index lists to load specific information such as people with food allergies, people who need rides, people who can provide rides,  people who need child care, email list and much more.  Also each individual\'s registered information is editable.','sp-form.png','2017-05-15 19:47:50','2017-06-06 16:16:36',NULL),
	(23,2,'Event Calendar','The Calendar uses the JavsScript Full Calendar API. The Calendar displays color coded events that are clickable to display more information.  Admins can add and update events through the dashboard.','sp-calendar.png','2017-05-23 13:47:24','2017-05-23 15:08:47',NULL),
	(24,2,'Prayer Nav','In the navbar there is a prayer dropdown that has 4 categories: Prayer List, Suggested Prayers, Lectio Divina and Contemplative Prayer.  Each category displays the most recent entry along with an archive list of previous entries.  This section is maintained through the admin dashboard. The admin can upload files, images and edit the test content for each category.','sp-prayer.png','2017-05-23 18:42:15','2017-05-23 18:42:15',NULL),
	(25,1,'Recipe Submission Form','There is also a Recipe Submission Form that is open to the public.  When a recipe is submitted it alerts the admin for approval.  If the recipe is accepted it will be stored in the appropriate category and displayed on the index page.','em-submission.png','2017-05-30 15:26:14','2017-05-30 15:32:07',NULL),
	(26,1,'River Stages','The river stages page provide updated river summaries Issued by NWS Lower Mississippi RFC through an iframe tag.','em-river.png','2017-05-30 15:29:28','2017-06-06 15:59:12','2017-06-06 15:59:12'),
	(27,1,'River Stages','The river stages page provide\'s updated river summaries issued by NWS Lower Mississippi RFC through an iframe tag.','em-river.png','2017-06-06 15:58:38','2017-06-06 16:12:29',NULL),
	(31,5,'Login Page','Clicking on the main center df icon links to the Admin Login Page.   The authentication is encoded and uses role hierarchy for user access and functionality.  The remember me option stores a token in the database that will automatically load the user\'s credentials the next time they navigate to the login page.','df-login.png','2017-06-09 19:56:04','2017-06-12 14:06:31',NULL),
	(32,5,'Navigation Admin Bar','Once a user is logged in their name appears on the top right portion of the navigation bar.  In this drop down the contact message notifications are displayed, along with the option to edit the landing page and logout.','df-nav.png','2017-06-09 20:39:42','2017-06-12 14:08:05',NULL),
	(33,5,'Contact Inbox','The user can access the Contact Message Inbox from the navbar.  The inbox highlights new messages by placing the tag New! in front of the messengers name.  When the messages is viewed an object status field is updated that categorizes the message as new or read.  The inbox also displays how many unread messages are available along with a total count in a message bubble over my inbox image.','df-inbox.png','2017-06-09 20:53:51','2017-06-12 14:10:04',NULL),
	(34,5,'Contact Message','The message view includes the name, email subject, timestamp and body of the contact message.  It also emails me the message using sparkpost mailer.  After the message is viewed it\'s status is updated to a red message.','df-message.png','2017-06-09 21:02:21','2017-06-12 14:10:40',NULL),
	(35,5,'About Me Edit Form','The About Me section on the home page can be edited by selecting the \"Edit Home Page\" link under the admin navbar dropdown.  it provides a text area that can be updated and saves to the portfolio\'s database.','df-about.png','2017-06-09 21:27:25','2017-06-09 21:27:25',NULL),
	(36,5,'Full Stack Update','The Full Stack Skills section on the home page can be edited by selecting the \"Edit Home Page\" link under the admin navbar dropdown.  it provides individual text area fields for each section that can be updated and saved to the portfolio\'s database.','df-fullStack.png','2017-06-09 21:30:51','2017-06-12 14:11:37',NULL),
	(37,5,'Development Tools Update','The Development Tools section on the home page can be edited by selecting the \"Edit Home Page\" link under the admin navbar dropdown.  it provides a tool name text field, a dropdown selection to apply the left or right animation class and a delay animation time field. Also a new tool can be added with the Add Development Tool selection at the bottom of the update form.  All updated information saves to the portfolio\'s database.','df-tools.png','2017-06-09 21:34:42','2017-06-09 21:38:07',NULL),
	(39,5,'Project Update','Each example work project can be updated and the image file can be replaced.  There are edit buttons on the project view page that allows the user to update the entire project or update each individual project section.  Additional sections can also be added on the update project page.','df-project.png','2017-06-09 21:51:07','2017-06-12 14:13:22',NULL),
	(40,5,'Resume Update','All information on my resume can be updated through the admin dashboard.  The resume is divided into 4 updatable sections: Experience, Education, Skills and Community Service.','df-resume.png','2017-06-09 21:56:29','2017-06-09 21:56:29',NULL),
	(41,5,'Resume Section Update','A section can be given an entry through the edit project page, In this example, a new job can be added and child elements or bullet points can be added dynamically to the chosen entry.','df-job.png','2017-06-09 22:02:15','2017-06-12 14:14:31',NULL);

/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tools
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tools`;

CREATE TABLE `tools` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `landing_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `delay` varchar(255) DEFAULT NULL,
  `direction` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tools` WRITE;
/*!40000 ALTER TABLE `tools` DISABLE KEYS */;

INSERT INTO `tools` (`id`, `landing_id`, `name`, `delay`, `direction`, `updated_at`, `created_at`, `deleted_at`)
VALUES
	(1,1,'Photoshop','0.4s','fadeInLeft','2017-06-09 21:31:40','2017-05-10 15:30:27',NULL),
	(3,1,'Ajax','0.0s','fadeInRight','2017-05-11 19:32:10','2017-05-10 15:33:31',NULL),
	(4,1,'Blade','0.5s','fadeInRight','2017-05-11 20:04:19','2017-05-10 15:33:39',NULL),
	(5,1,'Bootstrap','0.0s','fadeInLeft','2017-05-11 20:01:57','2017-05-10 15:33:46',NULL),
	(6,1,'CSS','0.9s','fadeInLeft','2017-05-11 19:32:10','2017-05-10 15:34:44',NULL),
	(7,1,'Git','0.6s','fadeInLeft','2017-06-09 21:31:40','2017-05-10 15:34:52',NULL),
	(8,1,'HTML5','0.3s','fadeInLeft','2017-06-09 21:31:40','2017-05-10 15:34:59',NULL),
	(9,1,'Java','0.3s','fadeInRight','2017-06-09 21:31:40','2017-05-10 15:35:06',NULL),
	(10,1,'JavaScript','0.5s','fadeInRight','2017-06-09 21:31:40','2017-05-10 15:35:25',NULL),
	(11,1,'jQuerry','0.6s','fadeInLeft','2017-06-09 21:31:40','2017-05-10 15:35:35',NULL),
	(12,1,'Laravel','0.3s','fadeInRight','2017-06-09 21:31:40','2017-05-10 15:35:42',NULL),
	(13,1,'MySQL','0.9s','fadeInRight','2017-06-09 21:31:40','2017-05-10 15:35:50',NULL),
	(14,1,'PHP','0.2s','fadeInLeft','2017-06-09 21:31:40','2017-05-10 15:35:58',NULL),
	(15,1,'SQL','0.4s','fadeInRight','2017-06-09 21:31:40','2017-05-10 15:36:05',NULL),
	(16,1,'InDesign','0.2s','fadeInLeft','2017-06-09 21:31:40','2017-05-12 14:58:35',NULL),
	(19,1,'Annimation CSS','0.2s','fadeInLeft','2017-05-19 18:32:21','2017-05-19 18:32:21',NULL),
	(20,1,'Analytics','0.3s','fadeInLeft','2017-05-19 18:35:36','2017-05-19 18:35:20',NULL),
	(22,1,'Stripe','0.7s','fadeInRight','2017-06-09 21:31:40','2017-05-19 20:48:01',NULL),
	(23,1,'Nginx','0.4s','fadeInRight','2017-06-09 21:31:40','2017-05-22 19:47:48',NULL),
	(24,1,'Ubuntu','0.1s','fadeInLeft','2017-06-09 21:31:40','2017-05-22 19:47:48',NULL),
	(25,1,'Dnsmasq','0.3s','fadeInRight','2017-05-22 19:49:12','2017-05-22 19:48:46',NULL),
	(26,1,'Valet','0.5s','fadeInRight','2017-06-09 21:31:40','2017-05-23 14:49:16',NULL),
	(27,1,'Linux','0.2s','fadeInRight','2017-06-09 21:31:40','2017-05-31 13:07:03',NULL),
	(28,1,NULL,NULL,NULL,'2017-07-05 19:11:07','2017-07-05 19:11:07',NULL),
	(29,1,NULL,NULL,NULL,'2017-07-05 19:11:07','2017-07-05 19:11:07',NULL),
	(30,1,NULL,NULL,NULL,'2017-07-05 19:11:07','2017-07-05 19:11:07',NULL),
	(31,1,NULL,NULL,NULL,'2017-07-05 19:11:07','2017-07-05 19:11:07',NULL);

/*!40000 ALTER TABLE `tools` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'mome&bamben','duncan','dfraiserjr@gmail.com','$2y$10$Tz.UBJo2aHfboPwOSzOJDu2/rCRMNUQU0oZJ31mE6aQtAUDhY6fAS','uSaCx7300zEeO30eKCGxRuBZkd4fJH60ULUGsIi8inlPCGu9Q8chGlgaGXEH','2017-05-11 20:46:30','2017-05-11 20:46:30'),
	(2,NULL,'Douche','kevinohara80@gmail.com','$2y$10$H664.J6o8oFajoZD21Xl9O/a6jn.r2yILJEGOTCOMxatqnIyhNjze','5Mf15f8ts31G6EGFjUJS05QJlgZY92ORHHvDKZGnbcW0d6DhxQVWP2xFAbu3','2017-05-19 21:15:46','2017-05-19 21:15:46');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table works
# ------------------------------------------------------------

DROP TABLE IF EXISTS `works`;

CREATE TABLE `works` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;

INSERT INTO `works` (`id`, `name`)
VALUES
	(1,'Kenny Kens & the Brown Bottle Boys'),
	(2,'Saint Paul Early Learning Center'),
	(3,'Saint Paul Catholic Church'),
	(4,'Ergon, Inc. Work Related Websites');

/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
