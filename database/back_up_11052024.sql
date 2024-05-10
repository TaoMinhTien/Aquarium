-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2024 at 10:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquarium`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_uss`
--

CREATE TABLE `about_uss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `animals_infor`
--

CREATE TABLE `animals_infor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(120) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animals_infor`
--

INSERT INTO `animals_infor` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(15, 'tesst', 'aqua1_1715240809.jpg', ' includes interactive elements such as dropdowns, modals, datepickers.     ', '2024-05-09 00:52:29', '2024-05-09 21:24:47'),
(17, 'name test', 'aqua1_1715241416.jpg', 'Jacket ', '2024-05-09 00:56:58', '2024-05-09 04:33:35'),
(18, 'Aptech aquarium ', 'aqua1_1715250341.jpg', 'First of all you need to understand how Flowbite works. This library is not ', '2024-05-09 03:05:21', '2024-05-09 04:34:08'),
(19, 'Aptech aquarium ', 'aqua1_1715250541.jpg', 'library of UI components built with the utility-', '2024-05-09 03:29:03', '2024-05-09 04:32:54'),
(20, 'Aptech aquarium ', 'aqua1_1715256772.jpg', 'eqe', '2024-05-09 05:13:14', '2024-05-09 05:13:14'),
(21, 'Aptech aquarium ', 'felipe-galvan-h4-ApEYOK5o-unsplash_1715256814.jpg', 'eqe', '2024-05-09 05:13:36', '2024-05-09 05:13:36'),
(22, 'Aptech aquarium ', 'aqua1_1715314552.jpg', 'Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. ', '2024-05-09 21:15:56', '2024-05-09 21:15:56'),
(23, 'Aptech aquarium new', 'aqua1_1715315182.jpg', ' includes interactive elements such as dropdowns, modals, datepickers.     ', '2024-05-09 21:26:30', '2024-05-09 21:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `animal_infor_infor`
--

CREATE TABLE `animal_infor_infor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `animal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animal_infor_infor`
--

INSERT INTO `animal_infor_infor` (`id`, `description`, `animal_id`, `created_at`, `updated_at`) VALUES
(1, '<p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715240809.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715250043.jpg\" width=\"1920\" height=\"1280\"></figure><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715315052.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can o</p><p>ptionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elemen</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715315067.jpg\" width=\"2200\" height=\"1237\"></figure><p>ts such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p>', 15, '2024-05-09 00:52:29', '2024-05-09 21:24:29'),
(3, '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715241416.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p>', 17, '2024-05-09 00:56:58', '2024-05-09 04:33:27'),
(7, '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715250341.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715250353.jpg\" width=\"1920\" height=\"1280\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p><p>ewefweffewefweffewefweffewefweffewefweffewefweffewefweffewefweffewefweffewefweff</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715249119.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p>', 18, '2024-05-09 03:05:21', '2024-05-09 04:33:53'),
(16, '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715250541.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715254310.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p>', 19, '2024-05-09 03:29:03', '2024-05-09 04:32:54'),
(17, '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715256772.jpg\" width=\"2200\" height=\"1237\"></figure><p>$(\'#loadMoreTicket\').click(function() { loadMoreTicket(); });$(\'#loadMoreTicket\').click(function() { loadMoreTicket(); });$(\'#loadMoreTicket\').click(function() { loadMoreTicFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incket(); });</p>', 20, '2024-05-09 05:13:14', '2024-05-09 05:13:14'),
(18, '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715256814.jpg\" width=\"1920\" height=\"1280\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715256802.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p>', 21, '2024-05-09 05:13:36', '2024-05-09 05:13:36'),
(19, '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715314552.jpg\" width=\"2200\" height=\"1237\"></figure><p>Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.</p>', 22, '2024-05-09 21:15:56', '2024-05-09 21:15:56'),
(20, '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715315182.jpg\" width=\"2200\" height=\"1237\"></figure><p>&nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; &nbsp;includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp;&nbsp;</p>', 23, '2024-05-09 21:26:30', '2024-05-09 21:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 'ee', 'dqq', '2024-05-10 00:18:00', '2024-05-10 00:18:00'),
(4, 'ee', 'qqd', '2024-05-10 00:27:26', '2024-05-10 00:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `banner_images`
--

CREATE TABLE `banner_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_images`
--

INSERT INTO `banner_images` (`id`, `banner_id`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 3, 'aqua1_1715325480.jpg', '2024-05-10 00:18:00', '2024-05-10 00:18:00'),
(2, 4, 'Ảnh màn hình 2024-01-25 lúc 21.17.54_1715326046.png', '2024-05-10 00:27:26', '2024-05-10 00:27:26'),
(3, 4, 'Ảnh màn hình 2024-03-20 lúc 12.22.11_1715326046.png', '2024-05-10 00:27:26', '2024-05-10 00:27:26'),
(4, 4, 'Ảnh màn hình 2024-03-20 lúc 14.57.19_1715326046.png', '2024-05-10 00:27:26', '2024-05-10 00:27:26'),
(5, 5, 'Ảnh màn hình 2024-04-12 lúc 10.40.28_1715326230.png', '2024-05-10 00:30:30', '2024-05-10 00:30:30'),
(6, 5, 'Ảnh màn hình 2024-03-30 lúc 13.40.47_1715326230.png', '2024-05-10 00:30:30', '2024-05-10 00:30:30'),
(7, 5, 'Ảnh màn hình 2024-03-30 lúc 13.40.33_1715326230.png', '2024-05-10 00:30:30', '2024-05-10 00:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `order_number_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` bigint(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `notes` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pedding',
  `totalmount` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `ticket_id`, `event_id`, `payment_id`, `order_number_id`, `quantity`, `order_date`, `notes`, `status`, `totalmount`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 1, 1, 1, '2024-05-08 17:05:10', '', 'confirmed', 19990000, '2024-05-08 10:09:42', '2024-05-09 02:59:37'),
(2, 1, 1, 1, 1, 3, 1, '2024-05-08 17:05:10', '', 'confirmed', 19990000, '2024-05-08 10:09:42', '2024-05-08 20:32:15'),
(3, 1, 1, 1, 1, 2, 1, '2024-05-09 04:31:33', 'eqe', 'confirmed', 10000000, '2024-05-08 21:31:34', '2024-05-08 22:28:16'),
(4, 2, 1, 1, 1, 4, 1, '2024-05-09 05:12:25', 'eqqe', 'confirmed', 10000000, '2024-05-08 22:12:27', '2024-05-09 04:27:58'),
(5, 2, 1, 1, 1, 5, 1, '2024-05-09 05:12:25', 'eqqe', 'confirmed', 10000000, '2024-05-08 22:12:29', '2024-05-09 03:56:40'),
(6, 2, 1, 1, 1, 6, 1, '2024-05-09 05:12:25', 'eqqe', 'pending', 10000000, '2024-05-08 22:12:30', '2024-05-08 22:12:30'),
(7, 2, 1, 1, 1, 7, 1, '2024-05-09 05:12:25', 'eqqe', 'confirmed', 10000000, '2024-05-08 22:12:32', '2024-05-09 04:20:12'),
(8, 2, 1, 1, 1, 8, 1, '2024-05-09 05:12:25', 'eqqe', 'confirmed', 10000000, '2024-05-08 22:12:32', '2024-05-09 03:57:18'),
(9, 2, 1, 1, 1, 9, 1, '2024-05-09 05:12:25', 'eqqe', 'confirmed', 10000000, '2024-05-08 22:12:33', '2024-05-09 03:58:47'),
(10, 2, 1, 1, 1, 10, 1, '2024-05-09 05:12:25', 'eqqe', 'pending', 10000000, '2024-05-08 22:12:34', '2024-05-08 22:12:34'),
(11, 2, 1, 1, 1, 11, 1, '2024-05-09 05:12:25', 'eqqe', 'pending', 10000000, '2024-05-08 22:12:35', '2024-05-08 22:12:35'),
(12, 1, 1, 1, 2, 12, 7, '2024-05-09 10:31:10', 'e1e1e', 'confirmed', 179890000, '2024-05-09 03:31:40', '2024-05-09 03:59:19'),
(13, 1, 2, 2, 2, 12, 11, '2024-05-09 10:31:10', 'e1e1e', 'confirmed', 179890000, '2024-05-09 03:31:40', '2024-05-09 04:17:48'),
(17, 1, 1, 1, 2, 14, 8, '2024-05-10 05:07:10', 's', 'pending', 84399998, '2024-05-09 22:07:41', '2024-05-09 22:07:41'),
(18, 1, 4, 4, 2, 14, 4, '2024-05-10 05:07:10', 's', 'pending', 84399998, '2024-05-09 22:07:41', '2024-05-09 22:07:41'),
(19, 1, 10, 10, 2, 14, 2, '2024-05-10 05:07:10', 's', 'pending', 84399998, '2024-05-09 22:07:41', '2024-05-09 22:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `description`, `gender`, `created_at`, `updated_at`) VALUES
(16, 'Student1495709', 'ngominhquang724@gmail.com', '0966593702', 'eqe', 'Male', '2024-05-09 06:20:20', '2024-05-09 06:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `purchase_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `purchase_count`, `created_at`, `updated_at`) VALUES
(1, 'Student', 'ngominhquang724@gmail.com', 'Ha Noi', '0966593702', 4, '2024-05-08 10:09:42', '2024-05-09 22:07:41'),
(2, 'Student1495709', 'minkqoag@gmail.com', 'Ha Noi', '0966593702', 8, '2024-05-08 22:12:27', '2024-05-08 22:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_event` varchar(255) NOT NULL,
  `audience` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'open',
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name_event`, `audience`, `description`, `start_date`, `end_date`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Aptech aquarium ', 'Adolescent', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715187798.jpg\" width=\"2200\" height=\"1237\"></figure><p>Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715187833.jpg\" width=\"1920\" height=\"1280\"></figure><p>Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', '2024-05-01 00:03:00', '2024-05-26 00:03:00', 'Active', 'Ha Noi', '2024-05-08 10:03:57', '2024-05-08 22:12:35'),
(2, 'Aptech ', 'Adolescent', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715187865.jpg\" width=\"1920\" height=\"1280\"></figure><p>Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715187872.jpg\" width=\"2200\" height=\"1237\"></figure><p>Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to vStay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to&nbsp;</p>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-08 10:04:36', '2024-05-08 10:04:36'),
(3, 'title ', 'Adolescent', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715256835.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715256844.jpg\" width=\"1920\" height=\"1280\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:14:07', '2024-05-09 05:14:07'),
(4, 'title ', 'Adolescent', '<p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715256854.jpg\" width=\"2200\" height=\"1237\"></figure><p>Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally incFlowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers. &nbsp; &nbsp; Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project. &nbsp; &nbsp; But then I found a component library based on Tailwind CSS called Flowbite. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS. &nbsp; &nbsp; Getting started with Flowbite &nbsp; &nbsp; First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation. &nbsp; &nbsp; It also includes a JavaScript file that enables interactive components, such as modals, dropdowns, and datepickers which you can optionally inc</p>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:14:17', '2024-05-09 05:14:17'),
(5, 'Aptech aquarium ', 'Adolescent', '<p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715257627.jpg\" width=\"2200\" height=\"1237\"></figure><p>Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715317162.jpg\" width=\"2200\" height=\"1237\"></figure><p>Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.</p>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:27:08', '2024-05-09 21:59:27'),
(6, 'Aptech aquarium ', 'Adolescent', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715257635.jpg\" width=\"1920\" height=\"1280\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:27:17', '2024-05-09 05:27:17'),
(7, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715257900.jpg\" width=\"1920\" height=\"1280\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:31:42', '2024-05-09 05:31:42'),
(8, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715257908.jpg\" width=\"2200\" height=\"1237\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:31:49', '2024-05-09 05:31:49'),
(9, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715257916.jpg\" width=\"1920\" height=\"1280\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:31:58', '2024-05-09 05:31:58'),
(10, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715257961.jpg\" width=\"2200\" height=\"1237\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:32:42', '2024-05-09 05:32:42'),
(11, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2880/1232;\" src=\"http://127.0.0.1:8000/news_img/bg_test_1715257970.png\" width=\"2880\" height=\"1232\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:32:51', '2024-05-09 05:32:51'),
(12, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2504/576;\" src=\"http://127.0.0.1:8000/news_img/bgslidernews_1715257978.png\" width=\"2504\" height=\"576\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:33:00', '2024-05-09 05:33:00'),
(13, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715257984.jpg\" width=\"2200\" height=\"1237\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:33:06', '2024-05-09 05:33:06'),
(14, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715257993.jpg\" width=\"1920\" height=\"1280\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:33:14', '2024-05-09 05:33:14'),
(15, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715258023.jpg\" width=\"1920\" height=\"1280\"></figure><p>Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715314415.jpg\" width=\"2200\" height=\"1237\"></figure><p>Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.Do lưu lượng truy cập cao, vui lòng thử lại sau hoặc nâng cấp lên tài khoản trả phí để truy cập nhanh hơn.</p>', NULL, NULL, 'Cancelled', 'Ha Noi', '2024-05-09 05:33:44', '2024-05-09 21:58:49'),
(16, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2504/576;\" src=\"http://127.0.0.1:8000/news_img/bgslidernews_1715258032.png\" width=\"2504\" height=\"576\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:33:53', '2024-05-09 05:33:53'),
(17, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715258038.jpg\" width=\"1920\" height=\"1280\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:33:59', '2024-05-09 05:33:59'),
(18, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715258048.jpg\" width=\"2200\" height=\"1237\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:34:10', '2024-05-09 05:34:10'),
(19, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2504/576;\" src=\"http://127.0.0.1:8000/news_img/bgslidernews_1715258059.png\" width=\"2504\" height=\"576\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:34:20', '2024-05-09 05:34:20'),
(20, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715258065.jpg\" width=\"2200\" height=\"1237\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:34:27', '2024-05-09 05:34:27'),
(21, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715258095.jpg\" width=\"1920\" height=\"1280\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:34:56', '2024-05-09 05:34:56'),
(22, 'Quang aquarium ', 'Children', '<figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715258102.jpg\" width=\"2200\" height=\"1237\"></figure>', NULL, NULL, 'Active', 'Ha Noi', '2024-05-09 05:35:03', '2024-05-09 05:35:03'),
(23, 'Quang aquarium ', 'Adolescent', '<figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"http://127.0.0.1:8000/news_img/felipe-galvan-h4-ApEYOK5o-unsplash_1715315251.jpg\" width=\"1920\" height=\"1280\"></figure><p>Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.</p><figure class=\"image\"><img style=\"aspect-ratio:2200/1237;\" src=\"http://127.0.0.1:8000/news_img/aqua1_1715315271.jpg\" width=\"2200\" height=\"1237\"></figure><p>Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP, ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook <strong>Text</strong> Generator của AhaChat.</p><p>&nbsp;</p>', '2024-05-14 11:27:00', '2024-06-09 11:27:00', 'Active', 'Ha Noi', '2024-05-09 21:27:55', '2024-05-09 21:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `feedback_text` text NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback_text`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Student1495709', 'ww1w', 4, '2024-05-08 20:20:04', '2024-05-08 20:20:04'),
(2, 'Student1495709', 'ww1w', 4, '2024-05-08 20:20:09', '2024-05-08 20:20:09'),
(3, 'Student1495709', 'ww1w', 4, '2024-05-08 20:20:12', '2024-05-08 20:20:12'),
(4, 'Student1495709', 'ww1w', 4, '2024-05-08 20:20:14', '2024-05-08 20:20:14'),
(5, 'Student1495709', 'ww1w', 4, '2024-05-08 20:20:16', '2024-05-08 20:20:16'),
(6, 'Student1495709', 'ww1w', 4, '2024-05-08 20:20:17', '2024-05-08 20:20:17'),
(7, 'Student1495709', 'The w-auto utility can be useful if you need to remove an element’s assigned width under a specific condition, like at a particular breakpoint:', 4, '2024-05-08 20:20:34', '2024-05-08 20:20:34'),
(8, 'Student1495709', 'The w-auto utility can be useful if you need to remove an element’s assigned width under a specific condition, like at a particular breakpoint:', 4, '2024-05-08 20:20:35', '2024-05-08 20:20:35'),
(9, 'Student1495709', 'The w-auto utility can be useful if you need to remove an element’s assigned width under a specific condition, like at a particular breakpoint:', 4, '2024-05-08 20:20:36', '2024-05-08 20:20:36'),
(10, 'Student1495709', 'The w-auto utility can be useful if you need to remove an element’s assigned width under a specific condition, like at a particular breakpoint:', 4, '2024-05-08 20:20:37', '2024-05-08 20:20:37'),
(11, 'Student1495709', 'The w-auto utility can be useful if you need to remove an element’s assigned width under a specific condition, like at a particular breakpoint:', 4, '2024-05-08 20:20:38', '2024-05-08 20:20:38'),
(12, 'Student1495709', 'The w-auto utility can be useful if you need to remove an element’s assigned width under a specific condition, like at a particular breakpoint:', 4, '2024-05-08 20:20:39', '2024-05-08 20:20:39'),
(13, 'Student1495709', 'eqeqe', 5, '2024-05-09 02:27:10', '2024-05-09 02:27:10'),
(14, 'r221', '11', 5, '2024-05-09 02:46:03', '2024-05-09 02:46:03'),
(15, '3131', '3131313', 5, '2024-05-09 02:50:13', '2024-05-09 02:50:13'),
(16, 'Student1495709', '31313', 5, '2024-05-09 02:51:49', '2024-05-09 02:51:49'),
(17, 'slider 2', '31313131313', 5, '2024-05-09 02:52:00', '2024-05-09 02:52:00'),
(18, '1444141', '141111', 4, '2024-05-09 02:52:41', '2024-05-09 02:52:41'),
(19, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:51', '2024-05-09 04:24:51'),
(20, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:52', '2024-05-09 04:24:52'),
(21, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:52', '2024-05-09 04:24:52'),
(22, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:52', '2024-05-09 04:24:52'),
(23, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:52', '2024-05-09 04:24:52'),
(24, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:53', '2024-05-09 04:24:53'),
(25, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:53', '2024-05-09 04:24:53'),
(26, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:53', '2024-05-09 04:24:53'),
(27, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:53', '2024-05-09 04:24:53'),
(28, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:53', '2024-05-09 04:24:53'),
(29, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:53', '2024-05-09 04:24:53'),
(30, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:54', '2024-05-09 04:24:54'),
(31, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:54', '2024-05-09 04:24:54'),
(32, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:54', '2024-05-09 04:24:54'),
(33, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:54', '2024-05-09 04:24:54'),
(34, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:54', '2024-05-09 04:24:54'),
(35, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:54', '2024-05-09 04:24:54'),
(36, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:54', '2024-05-09 04:24:54'),
(37, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:55', '2024-05-09 04:24:55'),
(38, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:55', '2024-05-09 04:24:55'),
(39, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:55', '2024-05-09 04:24:55'),
(40, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:55', '2024-05-09 04:24:55'),
(41, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:56', '2024-05-09 04:24:56'),
(42, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:56', '2024-05-09 04:24:56'),
(43, 'dqd', 'qdqdq', 5, '2024-05-09 04:24:56', '2024-05-09 04:24:56'),
(44, 'dqd', 'qdqdq', 5, '2024-05-09 04:25:00', '2024-05-09 04:25:00'),
(45, 'dqd', 'qdqdq', 5, '2024-05-09 04:25:00', '2024-05-09 04:25:00'),
(46, 'dqd', 'qdqdq', 5, '2024-05-09 04:25:00', '2024-05-09 04:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(119, '2014_10_12_000000_create_users_table', 1),
(120, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(121, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(122, '2019_08_19_000000_create_failed_jobs_table', 1),
(123, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(124, '2024_04_13_131450_create_sessions_table', 1),
(125, '2024_04_27_114116_create_payments_table', 1),
(126, '2024_04_28_074300_create_order_number_table', 1),
(127, '2024_04_28_074339_create_feedback_table', 1),
(128, '2024_04_28_074510_create_customers_table', 1),
(129, '2024_04_28_074814_create_events_table', 1),
(130, '2024_04_28_075021_create_tickets_table', 1),
(131, '2024_04_28_075244_create_bookings_table', 1),
(132, '2024_04_28_161030_create_ticket_variant_table', 1),
(133, '2024_05_02_121732_create_about_uss_table', 1),
(134, '2024_05_02_121732_create_banners_table', 1),
(135, '2024_05_02_121732_create_informations_table', 1),
(136, '2024_05_02_121732_create_overviews_table', 1),
(137, '2024_05_06_082834_create_animals_table', 2),
(138, '2024_05_06_083025_create_images_table', 2),
(139, '2024_05_06_083036_create_articles_table', 2),
(140, '2024_05_09_060804_create_animals_infor_table', 3),
(141, '2024_05_09_061212_create_animal_infor_infor_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_number`
--

CREATE TABLE `order_number` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_number`
--

INSERT INTO `order_number` (`id`, `order_number`, `created_at`, `updated_at`) VALUES
(1, 'igZPNz', '2024-05-08 10:09:42', '2024-05-08 10:09:42'),
(2, 'rgIa1I', '2024-05-08 21:31:34', '2024-05-08 21:31:34'),
(3, '42fda', NULL, NULL),
(4, 'rgIa1I', '2024-05-08 22:12:27', '2024-05-08 22:12:27'),
(5, 'rgIa1I', '2024-05-08 22:12:29', '2024-05-08 22:12:29'),
(6, 'rgIa1I', '2024-05-08 22:12:30', '2024-05-08 22:12:30'),
(7, 'rgIa1I', '2024-05-08 22:12:32', '2024-05-08 22:12:32'),
(8, 'rgIa1I', '2024-05-08 22:12:32', '2024-05-08 22:12:32'),
(9, 'rgIa1I', '2024-05-08 22:12:33', '2024-05-08 22:12:33'),
(10, 'rgIa1I', '2024-05-08 22:12:34', '2024-05-08 22:12:34'),
(11, 'rgIa1I', '2024-05-08 22:12:35', '2024-05-08 22:12:35'),
(12, 's9uaJS', '2024-05-09 03:31:40', '2024-05-09 03:31:40'),
(14, 'jaaiBd', '2024-05-09 22:07:41', '2024-05-09 22:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE `overviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Chuyển khoản', '2024-05-08 10:09:42', '2024-05-08 10:09:42'),
(2, 'Thanh toán khi vào cổng', '2024-05-09 03:31:40', '2024-05-09 03:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cGVbYEONUUk3wKVeoOpCzdGUCQpMrLrhXRSdMJNQ', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUllDTHJVTUd4d0lDbzhDRkNRV2tUd0d6M05HQzRNWkwzb3p5THpXRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9uZXdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImNhcnQiO047fQ==', 1715328659),
('KFI2VnjWCkPPCjubMEe6QErqG8Et3GTy4aWizDs6', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Safari/605.1.15', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM1VXU2txSms1SHdIQ3dLMjFpUFpRNlE1eno4b1BpRGxWR09zS3JoSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iYW5uZXIvdXBsb2FkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1715325709);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `event_id`, `name`, `quantity`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aptech aquarium ', 85, 'aqua1_1715187798.jpg', 10000000, '2024-05-08 10:03:57', '2024-05-09 22:07:41'),
(2, 2, 'Aptech ', 88, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715187865.jpg', 9990000, '2024-05-08 10:04:36', '2024-05-09 03:31:40'),
(3, 3, 'title ', 10, 'aqua1_1715256835.jpg', 100000, '2024-05-09 05:14:07', '2024-05-09 05:14:07'),
(4, 4, 'title ', 6, 'aqua1_1715256854.jpg', 100000, '2024-05-09 05:14:17', '2024-05-09 22:07:41'),
(5, 5, 'Aptech aquarium ', 100, 'aqua1_1715257627.jpg', 999999, '2024-05-09 05:27:08', '2024-05-09 05:27:08'),
(6, 6, 'Aptech aquarium ', 100, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715257635.jpg', 999999, '2024-05-09 05:27:17', '2024-05-09 05:27:17'),
(7, 7, 'Quang aquarium ', 10, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715257900.jpg', 1999999, '2024-05-09 05:31:42', '2024-05-09 05:31:42'),
(8, 8, 'Quang aquarium ', 10, 'aqua1_1715257908.jpg', 1999999, '2024-05-09 05:31:49', '2024-05-09 05:31:49'),
(9, 9, 'Quang aquarium ', 10, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715257916.jpg', 1999999, '2024-05-09 05:31:58', '2024-05-09 05:31:58'),
(10, 10, 'Quang aquarium ', 8, 'aqua1_1715257961.jpg', 1999999, '2024-05-09 05:32:42', '2024-05-09 22:07:41'),
(11, 11, 'Quang aquarium ', 10, 'bg_test_1715257970.png', 1999999, '2024-05-09 05:32:51', '2024-05-09 05:32:51'),
(12, 12, 'Quang aquarium ', 10, 'bgslidernews_1715257978.png', 1999999, '2024-05-09 05:33:00', '2024-05-09 05:33:00'),
(13, 13, 'Quang aquarium ', 10, 'aqua1_1715257984.jpg', 1999999, '2024-05-09 05:33:06', '2024-05-09 05:33:06'),
(14, 14, 'Quang aquarium ', 10, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715257993.jpg', 1999999, '2024-05-09 05:33:14', '2024-05-09 05:33:14'),
(15, 15, 'Quang aquarium ', 10, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715258023.jpg', 1999999, '2024-05-09 05:33:44', '2024-05-09 05:33:44'),
(16, 16, 'Quang aquarium ', 10, 'bgslidernews_1715258032.png', 1999999, '2024-05-09 05:33:53', '2024-05-09 05:33:53'),
(17, 17, 'Quang aquarium ', 10, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715258038.jpg', 1999999, '2024-05-09 05:33:59', '2024-05-09 05:33:59'),
(18, 18, 'Quang aquarium ', 10, 'aqua1_1715258048.jpg', 1999999, '2024-05-09 05:34:10', '2024-05-09 05:34:10'),
(19, 19, 'Quang aquarium ', 10, 'bgslidernews_1715258059.png', 1999999, '2024-05-09 05:34:20', '2024-05-09 05:34:20'),
(20, 20, 'Quang aquarium ', 10, 'aqua1_1715258065.jpg', 1999999, '2024-05-09 05:34:27', '2024-05-09 05:34:27'),
(21, 21, 'Quang aquarium ', 10, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715258095.jpg', 1999999, '2024-05-09 05:34:56', '2024-05-09 05:34:56'),
(22, 22, 'Quang aquarium ', 10, 'aqua1_1715258102.jpg', 1999999, '2024-05-09 05:35:03', '2024-05-09 05:35:03'),
(23, 23, 'Quang aquarium ', 200, 'felipe-galvan-h4-ApEYOK5o-unsplash_1715315251.jpg', 1000000, '2024-05-09 21:27:55', '2024-05-09 21:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_variant`
--

CREATE TABLE `ticket_variant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_variant`
--

INSERT INTO `ticket_variant` (`id`, `event_id`, `ticket_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-05-08 10:03:57', '2024-05-08 10:03:57'),
(2, 2, 2, '2024-05-08 10:04:36', '2024-05-08 10:04:36'),
(3, 3, 3, '2024-05-09 05:14:07', '2024-05-09 05:14:07'),
(4, 4, 4, '2024-05-09 05:14:17', '2024-05-09 05:14:17'),
(5, 5, 5, '2024-05-09 05:27:08', '2024-05-09 05:27:08'),
(6, 6, 6, '2024-05-09 05:27:17', '2024-05-09 05:27:17'),
(7, 7, 7, '2024-05-09 05:31:42', '2024-05-09 05:31:42'),
(8, 8, 8, '2024-05-09 05:31:49', '2024-05-09 05:31:49'),
(9, 9, 9, '2024-05-09 05:31:58', '2024-05-09 05:31:58'),
(10, 10, 10, '2024-05-09 05:32:42', '2024-05-09 05:32:42'),
(11, 11, 11, '2024-05-09 05:32:51', '2024-05-09 05:32:51'),
(12, 12, 12, '2024-05-09 05:33:00', '2024-05-09 05:33:00'),
(13, 13, 13, '2024-05-09 05:33:06', '2024-05-09 05:33:06'),
(14, 14, 14, '2024-05-09 05:33:14', '2024-05-09 05:33:14'),
(15, 15, 15, '2024-05-09 05:33:44', '2024-05-09 05:33:44'),
(16, 16, 16, '2024-05-09 05:33:53', '2024-05-09 05:33:53'),
(17, 17, 17, '2024-05-09 05:33:59', '2024-05-09 05:33:59'),
(18, 18, 18, '2024-05-09 05:34:10', '2024-05-09 05:34:10'),
(19, 19, 19, '2024-05-09 05:34:20', '2024-05-09 05:34:20'),
(20, 20, 20, '2024-05-09 05:34:27', '2024-05-09 05:34:27'),
(21, 21, 21, '2024-05-09 05:34:56', '2024-05-09 05:34:56'),
(22, 22, 22, '2024-05-09 05:35:03', '2024-05-09 05:35:03'),
(23, 23, 23, '2024-05-09 21:27:55', '2024-05-09 21:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Ngo Minh Quang', 'ngominhquang724@gmail.com', NULL, '$2y$12$1mBJ4Y8Af8MwT2X1vfPb8u3l0bUymsYnoaCua9NFXwDfpBHrR4xIK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 10:02:56', '2024-05-09 21:53:39'),
(3, 'Ngo Minh Quang', 'ngominhquang72124@gmail.com', NULL, '$2y$12$fv109z4zIVoIGERwroLRHO3l0fZuYkfHEC2jC5MUOrs9kKtuMPdCq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-09 22:53:46', '2024-05-09 22:53:46'),
(4, 'Ngo Minh Quang', 'ngo2724@gmail.com', NULL, '$2y$12$OIJzFRogAnXwbdoaJlUVte1ymVDh5LnxZTPLHV8x3KTepYBo.hfne', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-09 22:57:53', '2024-05-09 22:57:53'),
(5, 'Ngo Minh Quang', 'ngominhqu34@gmail.com', NULL, '$2y$12$Q5qvwH4pr/A2sYH1g7cuZ.0sfcfp0S0ponmySIdnrgyaZgHTDviVm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-09 23:04:04', '2024-05-09 23:04:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_uss`
--
ALTER TABLE `about_uss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animals_infor`
--
ALTER TABLE `animals_infor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal_infor_infor`
--
ALTER TABLE `animal_infor_infor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal_infor_infor_animal_id_foreign` (`animal_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_images`
--
ALTER TABLE `banner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_customer_id_foreign` (`customer_id`),
  ADD KEY `bookings_ticket_id_foreign` (`ticket_id`),
  ADD KEY `bookings_payment_id_foreign` (`payment_id`),
  ADD KEY `bookings_event_id_foreign` (`event_id`),
  ADD KEY `bookings_order_number_id_foreign` (`order_number_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_number`
--
ALTER TABLE `order_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overviews`
--
ALTER TABLE `overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_event_id_foreign` (`event_id`);

--
-- Indexes for table `ticket_variant`
--
ALTER TABLE `ticket_variant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_variant_event_id_foreign` (`event_id`),
  ADD KEY `ticket_variant_ticket_id_foreign` (`ticket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_uss`
--
ALTER TABLE `about_uss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `animals_infor`
--
ALTER TABLE `animals_infor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `animal_infor_infor`
--
ALTER TABLE `animal_infor_infor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner_images`
--
ALTER TABLE `banner_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `order_number`
--
ALTER TABLE `order_number`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `overviews`
--
ALTER TABLE `overviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ticket_variant`
--
ALTER TABLE `ticket_variant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal_infor_infor`
--
ALTER TABLE `animal_infor_infor`
  ADD CONSTRAINT `animal_infor_infor_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals_infor` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_order_number_id_foreign` FOREIGN KEY (`order_number_id`) REFERENCES `order_number` (`id`),
  ADD CONSTRAINT `bookings_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ticket_variant`
--
ALTER TABLE `ticket_variant`
  ADD CONSTRAINT `ticket_variant_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_variant_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
