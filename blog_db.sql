-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 03:10 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(100000000, 'Laravel', 'laravel', '2023-09-30 06:27:43', '2023-09-30 12:37:22'),
(100000001, 'PHP', 'php', '2023-09-30 06:28:36', '2023-09-30 11:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `contents` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `lng_code` varchar(7) DEFAULT 'en',
  `photo` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `date_posted` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `cat_id`, `title`, `contents`, `meta_title`, `meta_description`, `meta_keywords`, `lng_code`, `photo`, `slug`, `date_posted`, `status`, `created_at`, `updated_at`) VALUES
(1, 100000001, 'Php Get Started', '<strong>Php Get Started</strong>', 'PHP Tutorial', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.', 'HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website', 'en', '1696491806.jpg', 'php-get-started', '2023-10-04 11:11:35', 0, '2023-10-05 02:13:26', '2023-10-05 07:43:26'),
(2, 100000001, 'PHP Introduction', '<p><strong>Before you continue you should have a basic understanding of the following:</strong></p>\r\n\r\n<p><strong>HTML<br />\r\nCSS<br />\r\nJavaScript</strong></p>\r\n\r\n<p><strong>If you want to study these subjects first, find the tutorials on our&nbsp;Home page.</strong></p>\r\n\r\n<p><strong>What is PHP?</strong></p>\r\n\r\n<p><strong>PHP is an acronym for &quot;PHP: Hypertext Preprocessor&quot;<br />\r\nPHP is a widely-used, open source scripting languag</strong><strong>e</strong></p>\r\n\r\n<p><strong>PHP scripts are executed on the server<br />\r\nPHP is free to download and use</strong></p>\r\n\r\n<p><strong>PHP is an amazing and popular language!</strong></p>\r\n\r\n<p><strong>It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!<br />\r\nIt is deep enough to run large social networks!<br />\r\nIt is also easy enough to be a beginner&#39;s first server side language!</strong></p>\r\n\r\n<p><strong>What is a PHP File?</strong></p>\r\n\r\n<p><strong>PHP files can contain text, HTML, CSS, JavaScript, and PHP code<br />\r\nPHP code is executed on the server, and the result is returned to the browser as plain HTML<br />\r\nPHP files have extension &quot;.php&quot;</strong></p>\r\n\r\n<p><strong>What Can PHP Do?</strong></p>\r\n\r\n<p><strong>PHP can generate dynamic page content<br />\r\nPHP can create, open, read, write, delete, and close files on the server<br />\r\nPHP can collect form data<br />\r\nPHP can send and receive cookies<br />\r\nPHP can add, delete, modify data in your database<br />\r\nPHP can be used to control user-access<br />\r\nPHP can encrypt data</strong></p>\r\n\r\n<p><strong>With PHP you are not limited to output HTML. You can output images or PDF files. You can also output any text, such as&nbsp;</strong><strong>XHTML and XML.</strong><strong><img alt=\"\" src=\"http://localhost:8000/media/clap catch_1696507304.jpg\" style=\"width: 240px; height: 126px;\" /></strong></p>\r\n\r\n<p><strong><a href=\"http://localhost:8000/media/did-you-know-tejo_1567513570_1696505125.jpg\" target=\"_self\"><img alt=\"\" src=\"http://localhost:8000/media/did-you-know-tejo_1567513570_1696505125.jpg\" style=\"height: 210px; width: 400px;\" /></a></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n<p class=\"tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600\">Additional Option Code</p>\r\n          <pre><code class=\"javascript pd-20\">onStepChanging: function (event, currentIndex, newIndex) {\r\n  if(currentIndex &lt; newIndex) {\r\n    // Step 1 form validation\r\n    if(currentIndex === 0) {\r\n      var fname = $(\'#firstname\').parsley();\r\n      var lname = $(\'#lastname\').parsley();\r\n\r\n      if(fname.isValid() &amp;&amp; lname.isValid()) {\r\n        return true;\r\n      } else {\r\n        fname.validate();\r\n        lname.validate();\r\n      }\r\n    }\r\n\r\n    // Step 2 form validation\r\n    if(currentIndex === 1) {\r\n      var email = $(\'#email\').parsley();\r\n      if(email.isValid()) {\r\n        return true;\r\n      } else { email.validate(); }\r\n    }\r\n  // Always allow step back to the previous step even if the current step is not valid.\r\n  } else { return true; }\r\n}</code></pre>', 'PHP Introduction', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.', 'HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website', 'en', 'php-introduction1696491920.jpg', 'php-introduction', '2023-10-04 12:13:12', 0, '2023-10-05 07:08:49', '2023-10-05 12:38:49'),
(3, 100000001, 'PHP Installation', '<p>What Do I Need?</p>\r\n\r\n<p>To start using PHP, you can:</p>\r\n\r\n<p>Find a web host with PHP and MySQL support<br />\r\nInstall a web server on your own PC, and then install PHP and MySQL</p>\r\n\r\n<p>Use a Web Host With PHP Support</p>\r\n\r\n<p>If your server has activated support for PHP you do not need to do anything.</p>\r\n\r\n<p>Just create some&nbsp;.php&nbsp;files, place them in your web directory, and the server will automatically parse them for you.</p>\r\n\r\n<p>You do not need to compile anything or install any extra tools.</p>\r\n\r\n<p>Because PHP is free, most web hosts offer PHP support.</p>', NULL, NULL, NULL, 'en', '1696490838.jpg', 'php-installation', '2023-10-05 07:27:18', 0, '2023-10-05 01:57:18', '2023-10-05 07:27:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000002;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
