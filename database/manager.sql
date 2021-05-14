-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2021 a las 07:31:03
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `manager`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `identification`, `website`, `address`, `zipcode`, `country_id`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Schumm, Hermann and Christiansen', 'Quality-focused mobile collaboration', '', '6170 Predovic Expressway\nWest Mariano, SD 35573', NULL, 2, '(844) 431-3059', 'boyer.foster@kulas.info', '2019-07-19 14:35:16', '2019-07-19 14:35:16'),
(2, 'Stark, Jacobs and Steuber', 'User-friendly uniform forecast', '', '33497 Gayle Spurs Suite 214\nKonopelskihaven, NH 95345-6209', NULL, 22, '(855) 383-0853', 'mollie.beer@gmail.com', '2019-07-19 14:35:16', '2019-07-19 14:35:16'),
(3, 'Hagenes LLC', 'De-engineered mission-critical encryption', '', '6657 Freddie River Apt. 242\nGaylordmouth, IL 87047-2038', NULL, 3, '855.585.3251', 'shad.funk@dietrich.com', '2019-07-19 14:35:16', '2019-07-19 14:35:16'),
(4, 'Jacobs LLC', 'Assimilated mission-critical localareanetwork', '', '17858 Schuppe Manors\nNorth Elizabeth, ND 57118', NULL, 7, '877.252.2023', 'jenifer26@grant.net', '2019-07-19 14:35:16', '2019-07-19 14:35:16'),
(5, 'Buckridge-Harvey', 'Front-line actuating info-mediaries', '', '40803 Claud Branch Suite 848\nRosemouth, WI 22717-5663', NULL, 39, '1-800-659-4748', 'parisian.chad@bernier.org', '2019-07-19 14:35:16', '2019-07-19 14:35:16'),
(6, 'Kunde-Graham', 'Persevering user-facing project', '', '1507 Maryse Turnpike Suite 841\nRueckerhaven, MN 09630', NULL, 23, '888.548.6494', 'oweissnat@yahoo.com', '2019-07-19 14:35:16', '2019-07-19 14:35:16'),
(7, 'Ullrich-Wolf', 'Multi-lateral empowering definition', '', '87626 Sonya Expressway Suite 639\nAaronborough, UT 76870', NULL, 16, '1-877-225-2992', 'alva96@stracke.com', '2019-07-19 14:35:16', '2019-07-19 14:35:16'),
(8, 'Shields-Kassulke', 'Decentralized didactic interface', '', '858 Chelsea Forks Suite 805\nSantiagomouth, OK 77296-3529', NULL, 4, '844-706-3057', 'annabell.fahey@gmail.com', '2019-07-19 14:35:16', '2019-07-19 14:35:16'),
(9, 'Walker Group', 'Assimilated multimedia help-desk', '', '722 Macejkovic Island Apt. 664\nLeraport, MO 15836', NULL, 35, '877.936.1567', 'kshlerin.gennaro@kris.com', '2019-07-19 14:35:17', '2019-07-19 14:35:17'),
(10, 'Watsica, Hammes and Heller', 'User-friendly scalable utilisation', '', '28491 Zakary Overpass\nLake Karineside, OK 80589', NULL, 30, '(855) 485-2707', 'okris@friesen.com', '2019-07-19 14:35:17', '2019-07-19 14:35:17'),
(11, 'Wintheiser, Mante and Oberbrunner', 'Ameliorated 24/7 throughput', '', '760 Hand Expressway Suite 489\nNorth Aurelie, OK 80296', NULL, 49, '855-387-6914', 'albina.block@mills.com', '2019-07-19 14:35:17', '2019-07-19 14:35:17'),
(12, 'JAT America INT', 'Cloned discrete archive', 'www.jatamerica.cl', '313 Bauch PlainsLake Alexisbury, WY 43803-9943', NULL, 36, '1-877-367-8232', 'ruthie.huel@gmail.com', '2019-07-19 14:35:17', '2019-08-20 18:48:00'),
(13, 'Doctor Grill Backer', 'Versatile interactive policy', 'www.grillbacker.com', '21050 Stehr CircleLake Josiahchester, NJ 86770-2108', NULL, 29, '844.648.0117', 'rupert.cartwright@bechtelar.com', '2019-07-19 14:35:17', '2019-08-20 18:46:18'),
(14, 'Lider EKONO', 'Virtual high-level forecast', 'www.ekono.cl', '75088 Lesch PlazaFraneckihaven, ND 96745', NULL, 8, '(866) 740-1302', 'dwehner@hotmail.com', '2019-07-19 14:35:17', '2019-08-20 18:35:32'),
(15, 'Assa Food Poland', 'Compatible reciprocal policy', 'www.polandfood.com', '65270 Hector LaneFranciscoborough, NM 61108', NULL, 19, '866-679-3179', 'lesch.brock@gulgowski.net', '2019-07-19 14:35:17', '2019-08-20 18:29:51'),
(16, 'Assa Food Uganda', 'Robust clear-thinking budgetarymanagement', 'www.assauganda.com', '3983 Douglas ManorBridgetteshire, MN 88973-2904', NULL, 40, '844-330-1260', 'alayna.powlowski@hotmail.com', '2019-07-19 14:35:17', '2019-08-20 18:28:39'),
(17, 'Concha y Toro', '1234', 'vinaconchaytoro.cl', 'Santiago', NULL, 24, '12341234', 'admin@gmail.com', '2019-07-19 14:35:17', '2019-08-20 18:03:35'),
(18, 'Carrefour', '43214D', 'www.carrefour.com', '6180 Napoleon Terrace Apt. 582Port Simone, AK 41371-6487', NULL, 53, '(800) 366-4162', 'leann09@krajcik.com', '2019-07-19 14:35:17', '2019-10-09 16:46:19'),
(19, 'Jumbo', '6534 6543', 'www.jumbo.cl', 'Av Apoquindo # 54345 La Condes', NULL, 55, '1-866-415-1593', 'jumbo@yahoo.com', '2019-07-19 14:35:17', '2019-10-09 17:10:37'),
(20, 'Santa Isabel', '1234', 'www.santaisabel.cl', 'Almirante Barroso #4564 d\'addosio', NULL, 26, '56 2 3452 5432', 'info@santaisabel.cl', '2019-07-19 14:35:17', '2019-10-09 16:42:33'),
(21, 'Wallmart', '24354645', 'www.walmart.com', 'avenida Libertador Bernardo oggi\'ins · #234', '1234', 54, '11-111-11-11', 'walmart01@walmart.us', '2019-07-19 21:48:22', '2019-10-09 16:29:57'),
(22, 'Leclerc', '98769876', 'www.leclerc.fr', NULL, NULL, 2, NULL, NULL, '2019-08-22 05:31:48', '2019-10-09 16:17:18'),
(23, 'Coto', '24123242', 'coro.ar', NULL, NULL, 53, NULL, NULL, '2019-08-24 01:45:35', '2019-10-09 16:26:01'),
(24, 'Perekrestok', 'identificacion', 'sitio web', 'direccion', 'zipcode', 11, 'telefono', 'email@email.com', '2019-10-18 17:56:08', '2019-10-18 17:57:17'),
(25, 'Unimark', NULL, NULL, NULL, NULL, 11, NULL, NULL, '2019-10-23 01:41:22', '2019-10-23 01:41:22'),
(26, 'Casa Royal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-24 23:16:10', '2019-10-24 23:16:10'),
(27, 'AccountEjemplo', NULL, 'www.prueba.com', 'Urb. Vista guayaquil, Alta vista, Caracas.', '1030', 10, '+58 0212 858-32-21', 'admin@gmail.com', '2019-10-25 19:22:32', '2019-10-25 19:22:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accounts_courriers`
--

CREATE TABLE `accounts_courriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `recipient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `accounts_courriers`
--

INSERT INTO `accounts_courriers` (`id`, `account_id`, `recipient`, `address`, `contact`, `telf`) VALUES
(1, 1, 'Recipient', 'Address', 'Contact', 'Contact telf'),
(2, 24, 'recipiend', 'kissime 43234 las condes', 'sergio', '12341234'),
(3, 21, 'Recipient', 'Address ejemplo', 'Recipient Contact', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_categories`
--

CREATE TABLE `account_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `account_categories`
--

INSERT INTO `account_categories` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Freight', 'Freight', 1, '2019-07-19 14:32:51', '2019-12-04 21:00:10'),
(2, 'Partner', 'Quality-focused well-modulated access', 1, '2019-07-19 14:32:51', '2019-07-19 14:32:51'),
(3, 'Customer', 'Switchable tertiary artificialintelligence', 1, '2019-07-19 14:32:51', '2019-08-24 00:16:47'),
(4, 'Supplier', 'Description', 0, '2019-07-25 20:37:33', '2019-09-13 17:05:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_contacts`
--

CREATE TABLE `account_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `phone_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departament` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `account_contacts`
--

INSERT INTO `account_contacts` (`id`, `fullname`, `account_id`, `phone_company`, `phone_mobile`, `email`, `departament`, `country_id`, `address`, `comments`) VALUES
(3, 'Prueba', 2, '1231345', '1231345', 'admin@gmail.com', 'admin@gmail.com', 1, 'address', 'comments'),
(4, 'Samir Wethrt', 21, '1231345', '12132456', 'sherman589@gmail.com', 'Departament', 1, 'address', 'comments'),
(5, 'Rick Warren', 21, '1 987 987 678', '12132456', 'admin@gmail.com', 'Departament', 54, NULL, NULL),
(6, 'mileidy portillo', 20, 'gaeti', '12341234', 'milasd@aSDFSD.COM', 'ADMINISTRADOR', 1, 'SANTIAGO', 'NONE'),
(7, 'Prueba1', 22, '1231345', '12132456', 'admin@email.com', 'Departament', 1, 'direccion', 'comments'),
(9, 'prueba', 23, '014515454554', '14185451485', 'prueba@gmail.com', 'prueba', 7, 'prueba', 'coment'),
(11, 'Joel Osteen', 22, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(12, 'Sergio Portillo', 25, NULL, NULL, NULL, NULL, 45, NULL, NULL),
(13, 'Carlos Valdominos', 25, NULL, NULL, NULL, NULL, 45, NULL, NULL),
(14, 'Prueba2', 22, NULL, NULL, NULL, NULL, 9, 'Urb. Vista guayaquil, Alta vista, Caracas.', 'comments');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_metas`
--

CREATE TABLE `account_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `account_meta_type_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `account_metas`
--

INSERT INTO `account_metas` (`id`, `account_id`, `account_meta_type_id`, `value`, `created_at`, `updated_at`) VALUES
(2, 1, 5, 'Value1', '2019-07-30 06:15:44', '2019-07-30 06:15:44'),
(3, 4, 5, 'Value3', '2019-07-30 06:16:07', '2019-08-05 14:20:11'),
(5, 21, 3, 'True', '2019-08-13 09:04:40', '2019-08-19 08:44:32'),
(6, 21, 3, 'value2', '2019-08-19 08:45:20', '2019-08-19 08:45:20'),
(7, 20, 18, 'info2@santaisabel.cl', '2019-08-20 17:53:59', '2019-08-20 17:53:59'),
(8, 20, 17, '12341234', '2019-08-20 17:54:24', '2019-08-20 17:54:24'),
(9, 20, 25, 'LA MONEDA', '2019-08-20 19:00:03', '2019-08-20 19:00:03'),
(10, 21, 3, 'value3', '2019-08-21 08:57:17', '2019-08-21 08:57:17'),
(11, 21, 3, 'value4', '2019-08-21 19:20:26', '2019-08-21 19:20:26'),
(12, 21, 3, 'value5', '2019-08-21 19:23:23', '2019-08-21 19:23:23'),
(13, 21, 8, '12341234', '2019-08-22 16:13:30', '2019-08-22 16:13:30'),
(14, 22, 3, 'value5', '2019-08-22 21:11:43', '2019-08-22 21:11:43'),
(15, 22, 3, 'value5', '2019-08-22 23:24:43', '2019-08-22 23:24:43'),
(16, 23, 3, '30', '2019-08-26 21:28:10', '2019-08-26 21:28:10'),
(17, 24, 6, 'Aventure Capitals', '2019-10-18 18:12:06', '2019-10-18 18:12:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_meta_types`
--

CREATE TABLE `account_meta_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `metatype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(4) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `account_meta_types`
--

INSERT INTO `account_meta_types` (`id`, `metatype`, `required`, `description`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Employees', 0, NULL, 1, '2019-07-25 18:04:26', '2019-10-09 17:03:50'),
(5, 'Anual Income', 1, NULL, 1, '2019-07-25 18:04:26', '2019-10-09 17:06:36'),
(6, 'Office Build Name', 0, NULL, 1, '2019-07-25 18:04:26', '2019-10-09 17:08:09'),
(8, 'Phone Number 3', 0, NULL, 1, '2019-07-25 18:04:27', '2019-10-09 17:07:40'),
(17, 'Phone Number 2', 1, NULL, 1, '2019-07-25 18:04:27', '2019-10-09 17:08:57'),
(18, 'Email Address 2', 0, NULL, 1, '2019-07-25 18:04:27', '2019-10-09 17:09:23'),
(25, 'Address 2', 1, 'alternative direction', 1, '2019-08-20 18:58:19', '2019-08-20 18:58:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banks`
--

INSERT INTO `banks` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Banco de Chile', NULL, 1, '2019-08-29 15:08:32', '2019-09-13 22:50:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bank_account_types`
--

CREATE TABLE `bank_account_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bank_account_types`
--

INSERT INTO `bank_account_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cuenta Corriente', '2019-09-16 21:34:39', '2019-09-16 21:34:39'),
(2, 'Pago Directo', '2019-09-16 21:34:49', '2019-09-16 21:34:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bank_transactions`
--

CREATE TABLE `bank_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bank_transactions`
--

INSERT INTO `bank_transactions` (`id`, `bank_id`, `amount`, `reference`, `date`, `user`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, '9000.00', 'TEF000-01-02', '2019-09-05', 101, 2, '2019-09-05 22:34:49', '2019-09-23 21:02:22'),
(2, 1, '900.00', 'TEF000-01-01', '2019-09-23', 101, 1, '2019-09-23 21:21:07', '2019-09-23 21:27:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `business_lines`
--

CREATE TABLE `business_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `risk_coefficient` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `business_lines`
--

INSERT INTO `business_lines` (`id`, `name`, `risk_coefficient`, `created_at`, `updated_at`) VALUES
(1, 'Trading', 1, '2019-09-17 03:04:25', '2019-09-17 03:04:25'),
(2, 'Commissined Business', 2, '2019-09-17 03:04:50', '2019-09-17 03:04:50'),
(3, 'Import', 3, '2019-09-17 03:05:17', '2019-09-17 03:05:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_units`
--

CREATE TABLE `cargo_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargo_units`
--

INSERT INTO `cargo_units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kg', '2019-09-17 03:06:03', '2019-09-17 03:06:03'),
(2, 'Lb', '2019-09-17 03:06:18', '2019-09-17 03:06:18'),
(3, 'Cartons', '2019-09-17 03:06:33', '2019-09-17 03:06:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories_accounts`
--

CREATE TABLE `categories_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories_accounts`
--

INSERT INTO `categories_accounts` (`id`, `category_id`, `account_id`, `created_at`, `updated_at`) VALUES
(3, 3, 20, NULL, NULL),
(9, 2, 21, NULL, NULL),
(10, 3, 19, NULL, NULL),
(12, 3, 17, NULL, NULL),
(13, 1, 16, NULL, NULL),
(14, 3, 15, NULL, NULL),
(15, 3, 14, NULL, NULL),
(16, 1, 13, NULL, NULL),
(17, 3, 13, NULL, NULL),
(18, 1, 12, NULL, NULL),
(21, 3, 21, NULL, NULL),
(22, 3, 23, NULL, NULL),
(23, 4, 23, NULL, NULL),
(24, 4, 22, NULL, NULL),
(25, 4, 20, NULL, NULL),
(26, 3, 18, NULL, NULL),
(27, 3, 24, NULL, NULL),
(28, 2, 24, NULL, NULL),
(29, 3, 25, NULL, NULL),
(30, 3, 26, NULL, NULL),
(31, 2, 27, NULL, NULL),
(32, 1, 27, NULL, NULL),
(33, 1, 25, NULL, NULL),
(34, 2, 26, NULL, NULL),
(35, 4, 26, NULL, NULL),
(36, 4, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `active`, `created_at`, `updated_at`) VALUES
(7, 'Abkhazia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Afghanistan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Albania', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Algeria', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'American Samoa', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Andorra', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Angola', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Argentina', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Armenia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Aruba', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Australia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Austria', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Azerbaijan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Bahamas', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Bahrain', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Bangladesh', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Barbados', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Belgium', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Belize', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Benin', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Bermuda', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Bhutan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Bolivia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Bosnia and Herzegovina', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Botswana', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Brazil', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Brunei', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Bulgaria', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Burkina Faso', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Burma', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Burundi', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Cambodia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Cameroon', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Canada', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Canary Islands', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Cape Verde', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Central African Republic', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Chad', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Chile', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'China', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Colombia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Comoros', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Congo', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Congo - DRC', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Costa Rica', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Cote d\'Ivoire', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Croatia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Cuba', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Cyprus', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Czech Republic', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Denmark', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Djibouti', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Dominican Republic', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Ecuador', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Egypt', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'El Salvador', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Equatorial Guinea', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Eritrea', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Estonia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Ethiopia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Falkland Islands', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Federated States of Micronesia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Fiji', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Finland', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'France', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'French Guiana', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'French Polynesia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Gabon', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Palestine', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Georgia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Germany', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Ghana', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Gibraltar', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Greece', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Grenada', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Guadeloupe', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Guatemala', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Guinea Conakry', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Guinea-Bissau', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Guyana', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Haiti', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Honduras', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Hong Kong', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Hungary', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Iceland', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'India', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Indonesia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Iran', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Iraq', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Ireland', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Israel', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Italy', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Jamaica', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Japan', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Jordan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Kenya', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Kirgizya', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Kosovo', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Kuwait', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Kyrgyzstan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Laos', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Latvia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Lebanon', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Lesotho', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Liberia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Libya', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Liechtenstein', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Lithuania', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Luxembourg', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Macau', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Macedonia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Madagascar', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Malawi', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Malaysia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Maldives', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Mali', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Malta', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Martinique', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Mauritania', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Mauritius', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Mayotte', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Mexico', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Moldova', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Monaco', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Mongolia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Montenegro', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Montserrat', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Morocco', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Mozambique', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Namibia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Nepal', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Netherlands', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Netherlands Antilles', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'New Caledonia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'New Zealand', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Nicaragua', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Niger', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Nigeria', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'North Korea', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Norway', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Oman', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Pakistan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'Panama', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Papua New Guinea', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'Paraguay', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Peru', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Philippines', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Poland', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Portugal', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Puerto Rico', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'Qatar', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'Reunion', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'Romania', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'Rwanda', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Saint Pierre and Miquelon', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'Samoa', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'San Marino', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Sao Tome and Principe', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Saudi Arabia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Senegal', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Serbia and Montenegro (Yugoslavia)', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Seychelles', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Sierra Leone', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Singapore', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'Slovakia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Slovenia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Somalia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'South Africa', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'South Korea', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Spain', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'Sri Lanka', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Sudan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Suriname', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Swaziland', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'Sweden', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'Switzerland', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'Syria', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'Taiwan', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'Tajikistan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'Tanzania', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Thailand', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'The Gambia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Togo', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Tonga', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Trinidad and Tobago', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Tunisia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'Turkey', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Turkmenistan', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'Uganda', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'Ukraine', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'United Arab Emirates', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'United Kingdom', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'USA', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'Uruguay', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'Uzbekistan', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'Venezuela', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'Vietnam', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'Yemen', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 'Yugoslavia (Serbia and Montenegro)', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 'Zambia', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 'Zimbabwe', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 'Russia (West)', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 'Kazakhstan', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 'Belorussia', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 'Russia (East)', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 'British Virgin Islands', '', -1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `code`, `symbol`, `active`, `created_at`, `updated_at`, `value`) VALUES
(1, 'Dolar', 'USD', '$', 1, NULL, NULL, 1),
(2, 'Euro', 'UE', '€', 1, NULL, NULL, 1.12),
(3, 'Pesos Chilenos', 'CLP', '$', 1, NULL, NULL, 0.0014);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriers`
--

CREATE TABLE `curriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curriers`
--

INSERT INTO `curriers` (`id`, `currier_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'DHL', NULL, '2019-09-19 19:11:27', '2019-09-19 19:11:27'),
(2, 'FEDEX', NULL, '2019-09-19 19:12:59', '2019-09-19 19:12:59'),
(3, 'TNT', NULL, '2019-09-19 19:13:10', '2019-09-19 19:13:10'),
(4, 'UPS', NULL, '2019-09-19 19:13:23', '2019-09-19 22:34:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docs_instructions`
--

CREATE TABLE `docs_instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `cnee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preshipmentinspection` tinyint(4) DEFAULT NULL,
  `agency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bnl_ntfly` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bl_cnee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certs_cnee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` tinyint(4) DEFAULT NULL,
  `co_forma` tinyint(4) DEFAULT NULL,
  `packing_list` tinyint(4) DEFAULT NULL,
  `hc` tinyint(4) DEFAULT NULL,
  `halai` tinyint(4) DEFAULT NULL,
  `haccp` tinyint(4) DEFAULT NULL,
  `legalization` tinyint(4) DEFAULT NULL,
  `quality_certificate` tinyint(4) DEFAULT NULL,
  `exports_declaration` tinyint(4) DEFAULT NULL,
  `waver_besc` tinyint(4) DEFAULT NULL,
  `no_dioxyn` tinyint(4) DEFAULT NULL,
  `lab_analysis` tinyint(4) DEFAULT NULL,
  `no_radiation` tinyint(4) DEFAULT NULL,
  `aditional_requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docs_instructions`
--

INSERT INTO `docs_instructions` (`id`, `account_id`, `cnee`, `preshipmentinspection`, `agency`, `shipper`, `bnl_ntfly`, `bl_cnee`, `certs_cnee`, `invoice`, `co_forma`, `packing_list`, `hc`, `halai`, `haccp`, `legalization`, `quality_certificate`, `exports_declaration`, `waver_besc`, `no_dioxyn`, `lab_analysis`, `no_radiation`, `aditional_requirements`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cnee', 1, 'Agency', 'shipper', 'BNLNtfly', 'BLCnee', 'Certs Cnee', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 'Aditional Requirements', '2019-10-04 19:51:15', '2019-10-18 18:35:02'),
(3, 1, 'cnnee portugal', 1, 'agency name', 'shipper', 'bnl gfly', 'blcnee up', 'cres cnne asdfasdfasdfasdfsdf', 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 'aditional requirement', '2019-10-18 18:34:21', '2019-10-18 18:35:36'),
(5, 25, 'MANHATHAN 4141', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-23 01:56:25', '2019-10-23 01:56:25'),
(6, 21, 'Cnee Ejamplo', NULL, 'Agency', 'shipper', 'BNLNtfly', 'BLCnee', 'Certs Cnee', 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, 'Aditional Requirements', '2019-10-24 11:53:44', '2019-10-24 11:53:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `operation_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documents`
--

INSERT INTO `documents` (`id`, `account_id`, `operation_id`, `name`, `created_at`, `updated_at`, `file`) VALUES
(25, 20, 2, 'invoice op1234', '2019-08-26 22:14:44', '2019-08-26 22:15:00', '/home/lab2test/public_html/lab15/master/Gaeti/public/storage/default.png'),
(26, 2, 3, 'Factura', '2019-09-06 02:43:22', '2019-09-06 02:43:22', '/home/lab2test/public_html/lab15/master/Gaeti/public/storage/Captura de pantalla (1).png'),
(27, 22, 2, 'Prueba', '2019-10-18 22:23:32', '2019-10-18 22:23:32', '/home/lab2test/public_html/lab15/Manager/public/storage/Captura de pantalla (1).png'),
(28, 6, 2, 'Bundle', '2019-10-19 01:13:14', '2019-10-19 01:13:14', '/home/lab2test/public_html/lab15/Manager/public/storage/Captura de pantalla (1) (2).png'),
(29, 1, 2, 'Venezuela', '2019-10-21 21:07:50', '2019-10-21 21:07:50', '/home/lab2test/public_html/lab15/Manager/public/storage/Captura de pantalla (1) (1).png'),
(30, 1, 2, 'Venezuela', '2019-10-21 21:07:50', '2019-10-21 21:07:50', '/home/lab2test/public_html/lab15/Manager/public/storage/Captura de pantalla (1) (1).png'),
(31, 1, 2, 'Venezuela', '2019-10-21 21:08:16', '2019-10-21 21:08:16', '/home/lab2test/public_html/lab15/Manager/public/storage/Captura de pantalla (1) (1).png'),
(32, 1, 2, 'Prueba', '2019-10-21 21:08:35', '2019-10-21 21:08:35', '/home/lab2test/public_html/lab15/Manager/public/storage/Captura de pantalla (1) (1).png'),
(34, 24, 10, 'Name_2', '2019-11-10 04:22:15', '2019-11-10 04:22:15', 'lab2test_gaeti.sql');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documents_meta_types`
--

CREATE TABLE `documents_meta_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) UNSIGNED NOT NULL,
  `document_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documents_meta_types`
--

INSERT INTO `documents_meta_types` (`id`, `document_id`, `document_type_id`, `created_at`, `updated_at`) VALUES
(27, 25, 3, NULL, NULL),
(28, 25, 4, NULL, NULL),
(29, 26, 6, NULL, NULL),
(30, 27, 2, NULL, NULL),
(31, 27, 4, NULL, NULL),
(32, 28, 2, NULL, NULL),
(33, 29, 1, NULL, NULL),
(34, 30, 1, NULL, NULL),
(35, 31, 1, NULL, NULL),
(36, 32, 2, NULL, NULL),
(38, 34, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document_types`
--

CREATE TABLE `document_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `document_types`
--

INSERT INTO `document_types` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Contract', 'PDF', 1, '2019-08-07 05:36:24', '2019-08-20 16:42:38'),
(2, 'Port Aproval', 'Excel', 1, '2019-08-07 05:39:30', '2019-08-20 16:42:26'),
(3, 'Invoice', NULL, 1, '2019-08-12 23:09:07', '2019-08-14 22:42:40'),
(4, 'Sanity Certificate', 'prueba', 1, '2019-08-20 01:27:58', '2019-08-20 16:41:52'),
(5, 'Quote', 'prueba', 1, '2019-08-20 01:27:58', '2019-08-20 16:41:04'),
(6, 'Port Order Note', 'port doc', 1, '2019-08-20 19:48:40', '2019-08-20 19:48:40'),
(7, 'Admin Contract', NULL, 1, '2019-08-20 21:28:10', '2019-09-05 17:05:59'),
(8, 'Factura', 'Description', 1, '2019-09-05 17:06:43', '2019-09-05 17:06:43'),
(9, 'Factura', 'Description', 1, '2019-09-05 17:11:23', '2019-09-05 17:11:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_statuses`
--

CREATE TABLE `doc_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `doc_statuses`
--

INSERT INTO `doc_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Drafts Shipper Pending', '2019-09-19 16:21:52', '2019-09-19 16:21:52'),
(2, 'Draft Approval Pending', '2019-09-19 16:22:20', '2019-09-19 16:26:58'),
(3, 'Originals Pending', '2019-09-19 16:22:35', '2019-09-19 16:22:35'),
(4, 'Originals Approved', '2019-09-19 16:22:46', '2019-09-19 16:22:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `freight_lines`
--

CREATE TABLE `freight_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'linea de flete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `freight_lines`
--

INSERT INTO `freight_lines` (`id`, `shipping_line`, `created_at`, `updated_at`) VALUES
(1, 'CCNI', NULL, NULL),
(2, 'China Shipping', NULL, NULL),
(3, 'CMA-CGM', NULL, NULL),
(4, 'Cosco', NULL, NULL),
(5, 'Delmas', NULL, NULL),
(6, 'Evergreen', NULL, NULL),
(7, 'Hamburg Sud', NULL, NULL),
(8, 'Hanjin', NULL, NULL),
(9, 'Hapag Lloyd', NULL, NULL),
(10, 'Hyundai', NULL, NULL),
(11, 'Maersk', NULL, NULL),
(12, 'MOL', NULL, NULL),
(13, 'MSC', NULL, NULL),
(14, 'NileDutch', NULL, NULL),
(15, 'NYK', NULL, NULL),
(16, 'One', NULL, NULL),
(17, 'OOCL', NULL, NULL),
(18, 'PIL', NULL, NULL),
(19, 'Safmarine', NULL, NULL),
(20, 'Sealand', NULL, NULL),
(21, 'TBI', NULL, NULL),
(22, 'UASC', NULL, NULL),
(23, 'Yang Ming', NULL, NULL),
(24, 'Zim', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `freight_rates`
--

CREATE TABLE `freight_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `forwarder` bigint(20) UNSIGNED NOT NULL,
  `log_unit` int(11) DEFAULT NULL COMMENT 'Logunit',
  `pol` int(11) DEFAULT NULL COMMENT 'Port of Loading',
  `pod` int(11) DEFAULT NULL COMMENT 'Point of Discharge',
  `line` int(11) DEFAULT NULL COMMENT 'Linea de flete',
  `currency` int(11) DEFAULT NULL COMMENT 'Currency',
  `basic_freight` decimal(8,2) DEFAULT NULL,
  `baf` decimal(8,2) DEFAULT NULL,
  `adds_on` decimal(8,2) DEFAULT NULL,
  `freight_all_in` decimal(8,2) DEFAULT NULL,
  `transit_time` decimal(8,2) DEFAULT NULL,
  `days_free_plug` decimal(8,2) DEFAULT NULL,
  `days_free_storage` decimal(8,2) DEFAULT NULL,
  `days_free_dem` decimal(8,2) DEFAULT NULL,
  `valid_until` date DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_sumary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `freight_rates`
--

INSERT INTO `freight_rates` (`id`, `forwarder`, `log_unit`, `pol`, `pod`, `line`, `currency`, `basic_freight`, `baf`, `adds_on`, `freight_all_in`, `transit_time`, `days_free_plug`, `days_free_storage`, `days_free_dem`, `valid_until`, `route`, `rate_sumary`, `created_at`, `updated_at`) VALUES
(3, 25, 1, 4, 2, 2, 1, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '2019-12-04', 'Route', 'RateSumary', '2019-12-04 15:15:03', '2019-12-04 15:15:03'),
(4, 27, 1, 2, 1, 2, 2, '0.00', '0.00', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '2019-12-19', 'Urb. Vista guayaquil, Alta vista, Caracas.', 'RateSumary', '2019-12-04 21:12:30', '2019-12-04 21:12:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incoterms`
--

CREATE TABLE `incoterms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incoterms`
--

INSERT INTO `incoterms` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'EXW', '.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'FCA', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'FAS', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'FOB', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'CFR-CPT', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'CIF-CIP', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'DDU', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'DDP', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`id`, `language`, `abbreviation`, `created_at`, `updated_at`) VALUES
(1, 'english', 'en', NULL, NULL),
(2, 'spanish', 'es', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logunits`
--

CREATE TABLE `logunits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logunits`
--

INSERT INTO `logunits` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, '20Dry', '.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '20Re', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '40Dry', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '40Re', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Bulk', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Truck', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'AirFreight', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'evaBdv', '1231', 1, '2021-05-14 05:27:34', '2021-05-14 05:27:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_05_115319_create_profit_centers_table', 1),
(4, '2019_07_05_120256_create_profile_table', 1),
(16, '2019_07_05_115319_create_users_offices_table', 1),
(17, '2019_07_10_153823_create_ports_table', 1),
(18, '2019_07_10_153920_create_incoterms_table', 1),
(19, '2019_07_10_153922_create_countries_table', 1),
(20, '2019_07_10_153936_create_currencys_table', 1),
(21, '2019_07_16_193349__create_accounts_table', 1),
(22, '2019_07_16_193646__create_account_categories_table', 1),
(23, '2019_07_16_193726__create_account_meta_types_table', 1),
(24, '2019_07_16_193744__create_account_metas_table', 1),
(25, '2019_07_16_194256__create_user_has_offices_table', 1),
(26, '2019_07_16_215034__create_document_types_table', 1),
(28, '2019_07_16_225927__create_documents_table', 1),
(29, '2019_07_18_174221__create_categories_accounts_table', 1),
(30, '2019_07_20_022118_create_languages_table', 1),
(31, '2019_07_25_155826_create_currencies_table', 1),
(32, '2019_08_07_001927_add_value_to_currencies', 1),
(33, '2019_08_09_143730_create_documents_meta_types_table', 1),
(34, '2019_08_09_191729_add_file_to_documents', 1),
(36, '2019_09_01_095844_create_operations_table', 1),
(37, '2015_01_20_084450_create_roles_table', 1),
(38, '2015_01_20_084525_create_role_user_table', 1),
(39, '2015_01_24_080208_create_permissions_table', 1),
(40, '2015_01_24_080433_create_permission_role_table', 1),
(41, '2015_12_04_003040_add_special_role_column', 1),
(42, '2017_10_17_170735_create_permission_user_table', 1),
(43, '2019_07_05_120256_create_profiles_table', 1),
(44, '2019_07_10_154000_create_logunits_table', 1),
(45, '2019_09_04_011733_create_operation_status_table', 1),
(46, '2019_09_14_161952_create_bussines_lines_table', 2),
(47, '2019_09_14_162254_create_cargo_units_table', 2),
(48, '2019_09_14_162825_create_order_pmt_terms_table', 2),
(54, '2019_10_06_020118_create_account_courriers_table', 3),
(55, '2019_10_06_232502_create_operation_documents_table', 3),
(56, '2019_09_26_120711_create_shelf_life_table', 4),
(57, '2019_09_26_130114_create_operation_budget_table', 4),
(58, '2019_09_26_131949_create_order_detail_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mv_concepts`
--

CREATE TABLE `mv_concepts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `concept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Concepto del movimiento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mv_concepts`
--

INSERT INTO `mv_concepts` (`id`, `concept`) VALUES
(1, 'TradeOperation'),
(2, 'BankCharges'),
(3, 'Trips'),
(4, 'Office supplies'),
(5, 'Office rent and expenses'),
(6, 'Wages'),
(7, 'Petty Expenses'),
(8, 'Administrative services'),
(9, 'Miscellaneous'),
(10, 'Initial position'),
(11, 'Current Account/CC'),
(12, 'Other Expenses');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mv_types`
--

CREATE TABLE `mv_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `concept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Concepto del movimiento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mv_types`
--

INSERT INTO `mv_types` (`id`, `concept`) VALUES
(1, 'IN'),
(2, 'OUT'),
(3, 'NEUTRAL'),
(4, 'DIRECT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operations`
--

CREATE TABLE `operations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_order` date NOT NULL,
  `operation_status_id` bigint(20) UNSIGNED NOT NULL,
  `business_line_id` bigint(20) UNSIGNED NOT NULL,
  `principal_id` bigint(20) UNSIGNED NOT NULL,
  `principal_bank` int(11) DEFAULT NULL,
  `principal_com` decimal(10,2) DEFAULT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_commercial` int(11) DEFAULT NULL,
  `proforma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cus_commercial_id` int(11) DEFAULT NULL,
  `cus_ref` int(11) DEFAULT NULL,
  `purchase_by` bigint(20) UNSIGNED NOT NULL,
  `su_po_signed` tinyint(4) DEFAULT NULL,
  `sale_by` int(11) DEFAULT NULL,
  `cu_po_signed` tinyint(4) DEFAULT NULL,
  `purchase_broker_id` int(11) DEFAULT NULL,
  `p_broker_com_mt` decimal(8,2) DEFAULT NULL,
  `sale_broker_id` int(11) DEFAULT NULL,
  `s_broker_com_mt` decimal(8,2) DEFAULT NULL,
  `supplier_bank_id` int(11) DEFAULT NULL,
  `customer_bank_id` int(11) DEFAULT NULL,
  `p_modality` int(11) DEFAULT NULL,
  `p_advanced` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_days` int(3) DEFAULT NULL,
  `s_modality` int(11) DEFAULT NULL,
  `s_advanced` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_days` int(3) DEFAULT NULL,
  `purchase_incoterm` int(11) DEFAULT NULL,
  `purchase_curr` int(11) DEFAULT NULL,
  `p_incoterm_place` int(11) DEFAULT NULL,
  `sale_incoterm` int(11) DEFAULT NULL,
  `sale_curr` int(11) DEFAULT NULL,
  `s_incoterm_place` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `ship_from` date DEFAULT NULL,
  `dead_line_ship` date DEFAULT NULL,
  `cargo_unit` int(11) DEFAULT NULL,
  `log_unit` int(11) DEFAULT NULL,
  `nb_log_units` int(11) DEFAULT NULL,
  `pol_id` int(11) DEFAULT NULL,
  `origin` int(11) DEFAULT NULL,
  `pod_id` int(11) DEFAULT NULL,
  `final_destination` int(11) DEFAULT NULL,
  `est_freight_u` decimal(8,2) DEFAULT NULL,
  `est_inland_u` decimal(8,2) DEFAULT NULL,
  `est_legal_u` decimal(8,2) DEFAULT NULL,
  `add_instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `operations`
--

INSERT INTO `operations` (`id`, `code`, `date_order`, `operation_status_id`, `business_line_id`, `principal_id`, `principal_bank`, `principal_com`, `supplier_id`, `supplier_commercial`, `proforma`, `cus_commercial_id`, `cus_ref`, `purchase_by`, `su_po_signed`, `sale_by`, `cu_po_signed`, `purchase_broker_id`, `p_broker_com_mt`, `sale_broker_id`, `s_broker_com_mt`, `supplier_bank_id`, `customer_bank_id`, `p_modality`, `p_advanced`, `p_days`, `s_modality`, `s_advanced`, `s_days`, `purchase_incoterm`, `purchase_curr`, `p_incoterm_place`, `sale_incoterm`, `sale_curr`, `s_incoterm_place`, `customer_id`, `ship_from`, `dead_line_ship`, `cargo_unit`, `log_unit`, `nb_log_units`, `pol_id`, `origin`, `pod_id`, `final_destination`, `est_freight_u`, `est_inland_u`, `est_legal_u`, `add_instructions`, `comments`, `status_comments`, `created_at`, `updated_at`) VALUES
(2, '20190919-0002', '2019-09-20', 2, 1, 21, NULL, NULL, 23, NULL, 'Proforma', 1, 123, 101, NULL, 1, 1, 21, '0.00', NULL, '0.00', 1, 1, NULL, NULL, NULL, NULL, 'avc', NULL, NULL, NULL, 2000, NULL, NULL, 2800, 1, '2019-10-19', '2019-09-17', 1, 1, 5, 1, 1, 1, 1, NULL, NULL, NULL, 'Add Instructions', 'Comments', 'Ship Pending', '2019-09-19 22:11:52', '2019-10-18 19:50:47'),
(3, '20190920-0003', '2019-09-04', 2, 2, 18, NULL, NULL, 23, NULL, NULL, 1, NULL, 101, NULL, 1, NULL, 21, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-20 15:43:05', '2019-09-23 08:48:26'),
(4, '20190923-0004', '2019-09-20', 2, 1, 21, NULL, NULL, 23, NULL, NULL, 1, NULL, 101, 1, 1, NULL, 21, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-23 16:39:36', '2019-09-24 07:01:17'),
(5, '20191001-0005', '2019-10-01', 2, 1, 21, NULL, NULL, 23, NULL, NULL, 1, NULL, 101, NULL, 1, NULL, 21, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Ready to deliver', '2019-10-02 01:04:07', '2019-10-02 01:04:07'),
(6, '20191010-0006', '2019-10-10', 2, 1, 21, NULL, NULL, 23, NULL, NULL, 1, NULL, 101, NULL, 1, NULL, 21, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-10 22:01:07', '2019-10-10 22:01:07'),
(7, '20191010-0007', '2019-10-10', 2, 1, 21, NULL, NULL, 23, NULL, '123', 1, NULL, 101, NULL, 1, NULL, 21, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1233, NULL, NULL, 12344, 1, NULL, NULL, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Canceled by Customer', '2019-10-10 22:40:57', '2019-10-10 22:40:57'),
(8, '20191010-0008', '2019-10-10', 2, 1, 21, NULL, NULL, 23, NULL, '123', 3, NULL, 101, 1, 1, 1, 21, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1233, NULL, NULL, 12344, 1, NULL, NULL, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-10 22:42:28', '2019-10-17 15:29:47'),
(9, '20191017-0009', '2019-10-17', 2, 1, 21, NULL, NULL, 22, 7, NULL, 6, NULL, 101, NULL, 1, NULL, 21, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, NULL, 1, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-17 17:18:10', '2019-10-24 12:32:47'),
(10, '20191018-001023', '2019-10-19', 6, 1, 24, NULL, NULL, 22, 7, '1234', 5, 4321, 101, 1, 16, 1, 21, '999999.99', NULL, '999999.99', 1, 1, NULL, NULL, 51, 7, '24', NULL, NULL, 3, 6534645, NULL, 1, 65436543, 21, '2019-10-01', '2020-01-15', 2, 1, 54234, 1, NULL, 1, 8, '230000.00', '242342.00', '122342.00', 'ninguna', 'comentarios', NULL, '2019-10-18 19:40:44', '2019-12-06 09:19:53'),
(11, '20191210-0011', '2019-12-10', 2, 1, 21, 1, NULL, 23, 9, NULL, NULL, NULL, 101, NULL, NULL, NULL, NULL, '12.00', NULL, '24.00', 3, 4, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '10.00', '20.00', '100.00', '6com', '5com', 'Ship Pending', '2019-12-11 01:55:48', '2019-12-17 17:45:21'),
(12, '20191213-0012', '2019-12-13', 2, 3, 21, NULL, '1323.00', 20, 6, '352435', NULL, NULL, 2, NULL, 2, NULL, 27, '2432.00', 24, '432.00', NULL, NULL, 1, '132', 432, 1, '43', 12, 2, 2, NULL, 3, NULL, 123, 4, '2019-12-12', '2019-12-21', 2, 4, 2342, NULL, NULL, NULL, NULL, NULL, NULL, '100.00', NULL, NULL, NULL, '2019-12-13 08:19:14', '2019-12-13 08:19:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operation_budgets`
--

CREATE TABLE `operation_budgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operation_id` bigint(20) UNSIGNED NOT NULL,
  `order_quantity_budget` decimal(8,2) DEFAULT NULL,
  `order_sale` decimal(8,2) DEFAULT NULL,
  `order_sale_currency_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_sale_currency_change` decimal(8,2) DEFAULT NULL,
  `order_sale_usd` decimal(8,2) DEFAULT NULL,
  `order_purchase` decimal(8,2) DEFAULT NULL,
  `order_purchase_currency_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_purchase_change` decimal(8,2) DEFAULT NULL,
  `order_purchase_usd` decimal(8,2) DEFAULT NULL,
  `total_est_charges` decimal(10,2) DEFAULT NULL,
  `est_charges` decimal(8,2) DEFAULT NULL,
  `comtopay` decimal(8,2) DEFAULT NULL,
  `comtoreceive` decimal(8,2) DEFAULT NULL,
  `usd_budget` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `operation_budgets`
--

INSERT INTO `operation_budgets` (`id`, `operation_id`, `order_quantity_budget`, `order_sale`, `order_sale_currency_id`, `order_sale_currency_change`, `order_sale_usd`, `order_purchase`, `order_purchase_currency_id`, `order_purchase_change`, `order_purchase_usd`, `total_est_charges`, `est_charges`, `comtopay`, `comtoreceive`, `usd_budget`, `created_at`, `updated_at`) VALUES
(3, 9, '24.00', '24.00', 1, '1.00', '24.00', '24.00', 1, '1.00', '24.00', '12.00', '12.00', '12.00', '12.00', '96.00', '2019-10-18 19:47:48', '2019-10-18 19:47:48'),
(7, 10, '3.00', '5000.00', 1, '1.00', '5000.00', '1200.00', 1, '1.00', '1200.00', '100.00', '300.00', '200.00', '100.00', '6900.00', '2019-12-06 04:20:09', '2019-12-06 04:20:09'),
(16, 11, '120.00', '9000.00', 2, '1.12', '10080.00', '5000.00', 2, '1.12', '5000.00', '40.00', '124.00', '36.00', '5.00', '15285.00', '2019-12-20 14:28:43', '2019-12-20 14:28:43'),
(18, 12, '1.00', '0.00', 1, '1.00', '0.00', '2000.00', 1, '1.00', '2000.00', '0.00', '2442.00', '2864.00', '1323.00', '8629.00', '2019-12-20 21:30:30', '2019-12-20 21:30:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operation_documents`
--

CREATE TABLE `operation_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operation_id` bigint(20) UNSIGNED NOT NULL,
  `doc_status_id` bigint(20) UNSIGNED NOT NULL,
  `date_docs_ok` date DEFAULT NULL,
  `date_insured` date DEFAULT NULL,
  `date_legalized` date DEFAULT NULL,
  `docs_modification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_telex` date DEFAULT NULL,
  `courrier_to_principal` bigint(20) UNSIGNED DEFAULT NULL,
  `cp_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_sent_on` date DEFAULT NULL,
  `customer_mailing_a` bigint(20) UNSIGNED DEFAULT NULL,
  `courrier_to_customer` int(11) DEFAULT NULL,
  `cc_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_sent_on` date DEFAULT NULL,
  `cc_received_or` date DEFAULT NULL,
  `cargo_released_on` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `operation_documents`
--

INSERT INTO `operation_documents` (`id`, `operation_id`, `doc_status_id`, `date_docs_ok`, `date_insured`, `date_legalized`, `docs_modification`, `date_telex`, `courrier_to_principal`, `cp_ref`, `cp_sent_on`, `customer_mailing_a`, `courrier_to_customer`, `cc_ref`, `cc_sent_on`, `cc_received_or`, `cargo_released_on`) VALUES
(1, 8, 1, '2019-10-07', '2019-10-09', '2019-10-09', 'DocsModifications', '2020-04-13', 1, 'CPRef', '2019-10-12', 1, 1, 'CCRef', '2019-10-08', '2019-10-09', '2020-03-13'),
(2, 9, 1, '2019-10-07', '2019-10-09', '2019-10-09', 'DocsModification', '2019-10-17', 1, 'CPRef', '2019-10-17', 1, 1, 'CCRef', '2019-10-08', '2019-10-09', '2019-10-14'),
(3, 10, 1, '2019-10-10', '2019-10-02', '2019-10-02', 'docs modificacion', '2019-10-02', 4, '98769876', '2019-10-23', NULL, 3, 'hhh3', '2019-10-15', '2019-10-08', '2019-10-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operation_ships`
--

CREATE TABLE `operation_ships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operation` bigint(20) UNSIGNED NOT NULL,
  `supplier_Admin` int(11) DEFAULT NULL,
  `supplier_ops` int(11) DEFAULT NULL,
  `date_availability` date DEFAULT NULL,
  `labels_received` tinyint(4) DEFAULT NULL,
  `labels_oK` tinyint(4) DEFAULT NULL,
  `cust_admin` int(11) DEFAULT NULL,
  `cust_ops` int(11) DEFAULT NULL,
  `docs_instruction` int(11) DEFAULT NULL,
  `insp_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence_ok` tinyint(4) DEFAULT NULL,
  `date_appointment` date DEFAULT NULL,
  `pickup_location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction_inland` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freight_rate` int(11) DEFAULT NULL,
  `cut_off_docs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cut_off_cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `est_vessel` date DEFAULT NULL,
  `est_etd` date DEFAULT NULL,
  `est_eta` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `operation_ships`
--

INSERT INTO `operation_ships` (`id`, `operation`, `supplier_Admin`, `supplier_ops`, `date_availability`, `labels_received`, `labels_oK`, `cust_admin`, `cust_ops`, `docs_instruction`, `insp_ref`, `licence_ok`, `date_appointment`, `pickup_location`, `instruction_inland`, `freight_rate`, `cut_off_docs`, `cut_off_cargo`, `booking_ref`, `est_vessel`, `est_etd`, `est_eta`, `created_at`, `updated_at`) VALUES
(1, 31, 4, 4, '2019-10-04', 1, 1, NULL, 4, NULL, 'InspRef', 1, '2019-10-17', 'Pickup Location', 'Instruction Inland', 12145, 'Cut_OffDocs', 'Cut_OffCargo', 'BookingRef', '2019-10-22', '2019-06-27', '2019-10-22', '2019-10-04 15:09:05', '2019-10-04 15:09:05'),
(37, 10, 7, 7, '2019-10-09', 1, 1, 4, 6, NULL, NULL, 0, '2019-10-16', 'pic location1', 'instruction inland2', NULL, '2019-12-11', '2019-12-04', 'wer234', '2020-02-21', '2019-10-22', '2019-10-21', '2019-10-18 20:51:35', '2019-12-05 18:27:46'),
(38, 10, 7, 7, '2019-10-09', NULL, 1, 7, 7, NULL, NULL, 1, '2019-10-16', 'pic location1', 'instruction inland2', 10000, 'nosns', 'aasfd', 'wer234', '2019-10-21', '2019-10-16', '2019-10-21', '2019-10-18 20:52:02', '2019-10-18 20:52:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operation_ship_totals`
--

CREATE TABLE `operation_ship_totals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operation_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_qty` decimal(8,2) DEFAULT NULL,
  `nb_package` decimal(8,2) DEFAULT NULL,
  `net_qty` decimal(8,2) DEFAULT NULL,
  `gross_weight` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `operation_ship_totals`
--

INSERT INTO `operation_ship_totals` (`id`, `operation_id`, `description`, `order_qty`, `nb_package`, `net_qty`, `gross_weight`) VALUES
(56, 10, 'Buffalo-Pork-Front and Hind Feet-Frozen', '0.00', '0.00', '0.00', '50.00'),
(57, 9, 'Buffalo-Pork-Front and Hind Feet-Frozen', '0.00', '0.00', '0.00', '0.00'),
(58, 10, 'Buffalo-Pork-Front and Hind Feet-Frozen', '1.00', '1.00', '2.00', '1.00'),
(62, 10, 'Buffalo-Pork-Front and Hind Feet-Frozen', '3.00', '3.00', '3.00', '3.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operation_status`
--

CREATE TABLE `operation_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operation_status`
--

INSERT INTO `operation_status` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, '1- Being scheduled', NULL, '2019-09-04 20:55:47', '2019-09-10 01:55:35'),
(3, '2- Programmed', NULL, '2019-09-04 20:56:31', '2019-09-10 01:55:55'),
(4, '3- Shipped docs in process', NULL, '2019-09-05 17:32:11', '2019-09-10 01:56:09'),
(5, '4- Docs OK Pending release', NULL, '2019-09-05 17:32:30', '2019-09-10 01:56:36'),
(6, '5- Cargo Released Pending Payment', NULL, '2019-09-05 17:32:57', '2019-09-10 01:56:57'),
(7, '6- Pending OK to close', NULL, '2019-09-05 17:33:18', '2019-09-10 01:57:10'),
(8, '7- Closed', NULL, '2019-09-05 17:33:33', '2019-09-10 01:57:25'),
(9, 'X- Cancelled', NULL, '2019-09-10 01:57:44', '2019-09-10 01:57:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_pmt_terms`
--

CREATE TABLE `order_pmt_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_terms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital_at_risk` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `order_pmt_terms`
--

INSERT INTO `order_pmt_terms` (`id`, `payment_terms`, `capital_at_risk`, `created_at`, `updated_at`) VALUES
(1, 'Cash in Advance', '0.05', NULL, '2019-09-17 05:42:20'),
(2, 'Deposit + Balance TT against copies of docs', '0.15', '2019-09-17 05:48:36', '2019-09-17 05:48:36'),
(3, '100% TT against copies of documents', '0.35', '2019-09-17 05:50:12', '2019-09-17 05:50:12'),
(4, 'Deposit + Balance TT for Telex release', '0.02', '2019-09-17 05:53:41', '2019-09-17 06:00:45'),
(5, '100% TT for telex release', '0.04', '2019-09-17 05:54:08', '2019-09-17 06:00:03'),
(6, 'Deposit + Balance D/P', '0.02', '2019-09-17 05:54:25', '2019-09-17 05:56:07'),
(7, 'D/P', '0.03', '2019-09-17 06:01:24', '2019-09-17 06:01:24'),
(8, 'L/C', '0.03', '2019-09-17 06:01:43', '2019-09-17 06:01:43'),
(9, 'On Credit', '1.00', '2019-09-17 06:01:59', '2019-09-17 06:01:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_quantity` int(11) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  `specifications` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packaging` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shelflife_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purchase_price` decimal(8,2) DEFAULT NULL,
  `est_purchase_sale` decimal(8,2) DEFAULT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `est_sale` decimal(8,2) DEFAULT NULL,
  `nb_package` decimal(8,2) DEFAULT NULL,
  `net_qty` decimal(8,2) DEFAULT NULL,
  `gross_weight` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `order_products`
--

INSERT INTO `order_products` (`id`, `operation_id`, `order_quantity`, `product`, `specifications`, `packaging`, `brand`, `plant`, `shelflife_id`, `purchase_price`, `est_purchase_sale`, `sale_price`, `est_sale`, `nb_package`, `net_qty`, `gross_weight`, `created_at`, `updated_at`) VALUES
(9, 9, 12, 1, '12', '12', '12', '12', 4, '12.00', '12.00', '12.00', '12.00', NULL, NULL, NULL, '2019-10-18 19:47:48', '2019-10-18 19:47:48'),
(10, 9, 12, 1, '12', '12', '12', '12', 4, '12.00', '12.00', '12.00', '12.00', NULL, NULL, NULL, '2019-10-18 19:47:48', '2019-10-18 19:47:48'),
(15, 10, 1, 1, 'spec', 'pack', 'brand', 'plant', 1, '1000.00', '2000.00', '2500.00', '3000.00', NULL, NULL, NULL, '2019-12-06 04:20:09', '2019-12-06 04:20:09'),
(16, 10, 2, 1, 'spec', 'pack', 'brand', 'plant', 1, '200.00', '2000.00', '2500.00', '3000.00', NULL, NULL, NULL, '2019-12-06 04:20:09', '2019-12-06 04:20:09'),
(40, 11, 100, 1, NULL, 'box', 'ma', 'cas', 1, '2000.00', '3000.00', '4000.00', '9000.00', NULL, NULL, NULL, '2019-12-20 14:28:43', '2019-12-20 14:28:43'),
(41, 11, 20, 1, NULL, NULL, NULL, NULL, 1, '3000.00', '4000.00', '5000.00', '6000.00', NULL, NULL, NULL, '2019-12-20 14:28:43', '2019-12-20 14:28:43'),
(42, 11, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1000.00', NULL, NULL, NULL, '2019-12-20 14:28:43', '2019-12-20 14:28:43'),
(44, 12, 4, 1, NULL, NULL, NULL, NULL, 1, '6.00', '2000.00', NULL, NULL, NULL, NULL, NULL, '2019-12-20 21:30:30', '2019-12-20 21:30:30'),
(45, 12, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-20 21:30:30', '2019-12-20 21:30:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partner_banks`
--

CREATE TABLE `partner_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_addres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aba` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefaccount_ibank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_currency` bigint(20) UNSIGNED DEFAULT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intermediary_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curren_account` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `partner_banks`
--

INSERT INTO `partner_banks` (`id`, `company_id`, `bank_name`, `bank_addres`, `swift_code`, `aba`, `benefaccount_ibank`, `acc_currency`, `beneficiary_name`, `intermediary_info`, `curren_account`, `created_at`, `updated_at`) VALUES
(1, 21, 'Banco de Chile2', NULL, '125454115', '15245454', 'Prueba', 1, 'Prueba N', 'Prueba', 1, '2019-09-11 21:46:33', '2019-12-13 08:35:44'),
(2, 14, 'Scotiabank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-13 20:23:54', '2019-12-13 20:23:54'),
(3, 23, 'Santander', 'Alameda 43234', NULL, NULL, 'Benef Account', 1, 'Beneficiary Name', 'Intermediary Info', NULL, '2019-12-13 21:45:53', '2019-12-17 17:43:25'),
(4, 15, 'Scotiabank', 'Alameda 1213', '4312234', '5432452345', '43212341234', 1, 'Carlos Gonzalez', NULL, NULL, '2019-12-17 17:22:20', '2019-12-17 17:22:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sherman589@gmail.com', '$2y$10$IcW11X6oQmw7.dwNPnkCU.vik02.exbmBbRV2c5jftFRwnx9pKsUi', '2019-07-09 01:51:50'),
('sherman589@gmail.com', '$2y$10$IcW11X6oQmw7.dwNPnkCU.vik02.exbmBbRV2c5jftFRwnx9pKsUi', '2019-07-09 01:51:50'),
('sherman589@gmail.com', '$2y$10$IcW11X6oQmw7.dwNPnkCU.vik02.exbmBbRV2c5jftFRwnx9pKsUi', '2019-07-09 01:51:50'),
('admin@gmail.com', '$2y$10$KXJRROeZKPEiQx5trKfj5.PUzkoIHeE6A1wGuwxJroteLYlJEY4zm', '2019-08-24 03:44:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount_before` decimal(11,2) NOT NULL,
  `amount_after` decimal(11,2) NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `before` decimal(11,2) NOT NULL,
  `after` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `operation_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `payments`
--

INSERT INTO `payments` (`id`, `amount_before`, `amount_after`, `transaction_id`, `amount`, `type`, `before`, `after`, `created_at`, `updated_at`, `operation_id`) VALUES
(1, '3000.00', '2900.00', 2, '100.00', '1', '900.00', '800.00', '2019-10-18 19:12:37', '2019-10-18 19:12:37', 2),
(2, '2900.00', '2800.00', 2, '100.00', '1', '900.00', '800.00', '2019-10-18 19:50:47', '2019-10-18 19:50:47', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Create', 'create', 'Permite crear registros.', '2019-07-14 13:13:21', '2019-07-15 02:14:55'),
(2, 'Edit', 'edit', 'Permite editar registros.', '2019-07-14 13:46:07', '2019-07-14 14:52:57'),
(4, 'Show', 'show', 'Permite visualizar registros y detalles.', '2019-07-14 13:48:49', '2019-07-14 14:53:36'),
(6, 'Delete', 'delete', 'Permite elminar registros.', '2019-07-14 13:51:15', '2019-07-14 14:54:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '2019-07-14 17:30:15', '2019-07-14 17:30:15'),
(5, 2, 7, '2019-07-15 01:48:06', '2019-07-15 01:48:06'),
(6, 4, 7, '2019-07-15 01:48:06', '2019-07-15 01:48:06'),
(7, 1, 1, '2019-07-15 01:48:30', '2019-07-15 01:48:30'),
(8, 2, 1, '2019-07-15 01:48:30', '2019-07-15 01:48:30'),
(9, 4, 1, '2019-07-15 01:48:30', '2019-07-15 01:48:30'),
(10, 6, 1, '2019-07-15 01:48:30', '2019-07-15 01:48:30'),
(11, 1, 3, '2019-07-15 01:48:50', '2019-07-15 01:48:50'),
(12, 2, 3, '2019-07-15 01:48:50', '2019-07-15 01:48:50'),
(14, 1, 4, '2019-07-15 01:49:05', '2019-07-15 01:49:05'),
(15, 2, 4, '2019-07-15 01:49:05', '2019-07-15 01:49:05'),
(16, 4, 6, '2019-07-15 01:49:16', '2019-07-15 01:49:16'),
(23, 1, 14, '2019-07-16 00:38:30', '2019-07-16 00:38:30'),
(25, 4, 3, '2019-07-16 22:37:05', '2019-07-16 22:37:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ports`
--

CREATE TABLE `ports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(25) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ports`
--

INSERT INTO `ports` (`id`, `name`, `country_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ho Chi Minh - Cat Lai', 203, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Luanda', 13, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Buenos Aires', 14, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Santos', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Rio Grande', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Paranagua', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Itajai', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Navegantes', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Rio de Janeiro', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Sepetiba', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Abidjan', 52, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Muscat', 147, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Manama', 21, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Jebel Ali', 197, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Sharjah', 197, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Jeddah', 165, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Cape Town', 174, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Durban', 174, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Libreville', 74, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Port Gentil', 74, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Pointe Noire', 49, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Matadi', 50, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'St Petersburg', 208, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Kaliningrad', 208, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Vladivostok', 211, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Magadan', 211, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Poti', 76, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Poti-Transit', 15, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Mersin', 193, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Douala', 39, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Apapa', 144, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Cotonou', 26, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Tema', 78, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Aden', 204, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Shuwaikh', 105, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Doha', 157, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Dammam', 165, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Savannah', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Mobile', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Oakland', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Norfolk', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Antwerp', 24, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Hamburg', 77, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Bremenhaven', 77, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Le Havre', 71, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Marseille', 71, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Rotterdam', 138, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Klaipeda', 114, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Riga', 108, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Tallinn', 65, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Copenhagen', 57, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'El Callao', 152, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'San Antonio', 45, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Valparaiso', 45, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Walwis Bay', 136, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Djibouti', 58, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Salalah', 147, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Hong Kong', 89, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Shanghai', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Yantian', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Shenzhen', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Danang', 203, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Haiphong', 203, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Ho Chi Minh - ICD Phuoc Long', 203, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Montreal', 40, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Vancouver', 40, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Iquique', 45, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Puerto Cabelo', 202, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Cartagena', 47, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Kingston', 99, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Port-Au-Prince', 87, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Bandar Abas', 94, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Managua', 142, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Barcelona', 176, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Montevideo', 200, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Manzanillo', 128, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Araputanga', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Santa Cruz de la Sierra', 29, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Any US Port', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Ilychevsk', 196, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Mindelo', 42, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Odessa', 196, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Any Brazilian port', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Any Irish Port', 96, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Busan', 175, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'New Orleans', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Asuncion', 151, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'CORINTO', 142, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Leam Chabang', 187, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'BANGKOK', 187, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'DUBLIN', 96, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'San Vicente', 45, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Ningbo', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Arica', 45, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Santiago', 45, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Las Condes', 45, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Male', 121, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'XINGANG', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Newark', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'LIMA', 152, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Maputo', 135, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Laem Chabang', 187, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Guayaquil', 60, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Puerto Madryn', 14, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Fuzhou', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Seattle', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Vila do Conde', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Mazatlan', 128, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Altamira', 128, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'CABINDA', 13, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Any Chinese port', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'To Be Advised', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Any place Brazil', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Penang', 120, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Xiamen', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Dalian', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Houston', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Singapore', 170, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Tapejara', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1123, 'Mar Del Plata', 14, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1124, 'Any Canadian Port', 40, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1125, 'Warszawa', 154, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1126, 'Kosow Lacki', 154, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1127, 'Kong Toey', 187, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1128, 'Any Place Argentina', 14, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1129, 'Bogota', 47, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1130, 'Nava Sheva', 92, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1131, 'Any Malasyan Port', 120, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1132, 'Johor', 120, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1133, 'Any Asian Port', 120, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1134, 'Chennai', 92, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1135, 'Rosario', 14, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1136, 'Tianjin', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1137, 'Balboa', 149, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1138, 'Bangkok BMT Terminal', 187, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1139, 'Barranquilla', 47, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1140, 'Qingdao', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1141, 'Crespo', 14, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1142, 'Walvis Bay', 136, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1143, 'Chongqin', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1144, 'Izmir', 193, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1145, 'Any Polish port', 154, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1146, 'Mawei, Fuzhou', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1147, 'Beirut', 109, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1148, 'Miami', 199, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1149, 'Sumare', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1150, 'Gdansk', 154, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1151, 'Dakar', 166, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1152, 'Monrovia', 111, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1153, 'Banjul', 188, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1154, 'Freetown', 169, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1155, 'Aqaba', 101, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1156, 'Um Qsar', 95, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1157, 'Nouakchott', 125, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1158, 'Nouhadibou', 125, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1159, 'Karachi', 148, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1160, 'Valencia', 176, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1161, 'Lazaro Cardenas', 128, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1162, 'Manila', 153, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1163, 'La Guaira', 202, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1164, 'Santo Domingo', 59, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1165, 'Seoul', 175, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1166, 'Zarate', 14, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1167, 'Napier', 141, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1168, 'Mumbai', 92, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1169, 'zanzibar', 186, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1170, 'Cai Mep Vung Tau', 203, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1171, 'Napoles', 98, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1172, 'Salerno', 98, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1173, 'Zhang Jia Gang', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1174, 'Toronto', 40, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1175, 'Alexandria', 61, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1176, 'Buenaventura', 47, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1177, 'Kaohsiung', 184, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1178, 'Varna', 34, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1179, 'FELIXSTOWE', 198, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1180, 'PLOCE', 53, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1181, 'COLOMBO', 177, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1182, 'Conakry', 84, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1183, 'PUERTO DESEADO', 14, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1184, 'ITAGUAI', 47, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1185, 'ITAPOA', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1186, 'SALVADOR', 142, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1187, 'LAT KRABANG', 187, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1188, 'ITAJI', 32, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1189, 'QUINGDAO', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1190, 'XIANGANG', 46, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_gens`
--

CREATE TABLE `product_gens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_line_id` bigint(20) UNSIGNED NOT NULL,
  `gen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_spec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cold_chain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_gens`
--

INSERT INTO `product_gens` (`id`, `product_line_id`, `gen`, `basic_spec`, `cold_chain`, `created_at`, `updated_at`) VALUES
(1, 2, 'Pork', 'Front and Hind Feet', 'Frozen', '2019-09-18 21:03:47', '2019-09-18 21:26:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_lines`
--

CREATE TABLE `product_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_lines`
--

INSERT INTO `product_lines` (`id`, `line`, `created_at`, `updated_at`) VALUES
(1, 'Beef', '2019-09-18 19:39:37', '2019-09-18 19:39:37'),
(2, 'Buffalo', '2019-09-18 20:03:12', '2019-09-18 20:11:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profit_centers`
--

CREATE TABLE `profit_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profit_centers`
--

INSERT INTO `profit_centers` (`id`, `name`, `code`, `status`) VALUES
(1, 'Lindsay Ebert', 'DSFVOYT2', 'active'),
(2, 'Dr. Stanley Luettgen DDS', 'HCWPWERV', 'suspended'),
(3, 'Kale Daniel', 'JNMQNBNC', 'active'),
(4, 'Gabriella Schinner', 'ELRGCWMP', 'inactive'),
(5, 'Anais Herzog', 'SHXWVCB8', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Admin', 'admin', 'Description', '2019-07-14 16:50:33', '2019-07-16 00:26:36', 'all-access'),
(3, 'Global', 'global', 'Description', '2019-07-14 17:07:14', '2019-07-16 22:37:05', 'no-access'),
(4, 'Office', 'office', 'Description', '2019-07-14 17:23:10', '2019-07-16 22:37:15', 'all-access'),
(6, 'Financial', 'financial', 'Description', '2019-07-14 17:29:17', '2019-07-16 00:26:19', 'all-access'),
(7, 'Operador', 'operador', 'Description', '2019-07-14 17:30:15', '2019-07-16 00:27:21', 'all-access');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 105, '2019-07-16 23:07:34', '2019-07-16 23:07:34'),
(2, 3, 104, '2019-07-16 23:15:44', '2019-07-16 23:15:44'),
(5, 7, 100, '2019-07-16 23:16:19', '2019-07-16 23:16:19'),
(6, 1, 103, '2019-08-05 14:00:09', '2019-08-05 14:00:09'),
(7, 1, 101, '2019-08-24 03:38:15', '2019-08-24 03:38:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shelf_lifes`
--

CREATE TABLE `shelf_lifes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `shelf_lifes`
--

INSERT INTO `shelf_lifes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '3 months', '2019-09-26 16:44:27', '2019-09-26 16:44:27'),
(2, '4 months', '2019-09-26 16:44:44', '2019-09-26 16:44:44'),
(3, '6 months', '2019-09-26 16:44:51', '2019-09-26 16:44:51'),
(4, '9 months', '2019-09-26 16:45:07', '2019-09-26 16:45:07'),
(5, '12 months', '2019-09-26 16:45:15', '2019-09-26 16:45:15'),
(6, '18 months', '2019-09-26 16:45:26', '2019-09-26 16:45:26'),
(7, '24 months', '2019-09-26 16:45:33', '2019-09-26 16:52:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ship_details`
--

CREATE TABLE `ship_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vessel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_pcs` decimal(8,2) DEFAULT NULL,
  `shipping_date` date DEFAULT NULL,
  `container` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_quantity` decimal(8,2) DEFAULT NULL,
  `invoice_supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eta` date DEFAULT NULL,
  `seals` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_gw` decimal(8,2) DEFAULT NULL,
  `invoice_ppl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_eta_on` date DEFAULT NULL,
  `date_insured` date DEFAULT NULL,
  `invoice_forwarder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ship_details`
--

INSERT INTO `ship_details` (`id`, `operation_id`, `vessel`, `bl`, `total_pcs`, `shipping_date`, `container`, `total_quantity`, `invoice_supplier`, `eta`, `seals`, `total_gw`, `invoice_ppl`, `update_eta_on`, `date_insured`, `invoice_forwarder`) VALUES
(1, 2, 'Vessel', 'BL', '100.00', '2019-11-12', 'Container', '100.00', 'InvoiceSupplier', NULL, 'Seals', NULL, 'InvoicePPL', '2019-11-10', '2019-11-14', '1'),
(2, 3, 'Vessel', 'BL', '100.00', '2019-11-12', 'Container', '100.00', 'InvoiceSupplier', NULL, 'Seals', NULL, 'InvoicePPL', '2019-11-10', '2019-11-14', '1'),
(3, 10, 'Vesse22', 'BL22', '200.00', '2019-11-05', 'Container22', '200.00', 'InvoiceSupplier', '2019-11-14', 'Seals22', '200.00', 'InvoicePPL22', '2019-12-05', '2019-11-14', 'InvoiceForwarder22'),
(4, 9, 'Vessel', 'BL', '100.00', '2019-11-12', 'Container', '100.00', 'InvoiceSupplier', '2019-11-02', 'Seals', '100.00', 'InvoicePPL', '2019-11-10', '2019-11-04', 'InvoiceForwarder'),
(5, 11, NULL, NULL, '220.00', NULL, NULL, '321.00', NULL, NULL, NULL, '122.00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profitcenter_id` int(11) NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `status`, `phone1`, `phone2`, `cell1`, `cell2`, `profitcenter_id`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Drake Willms Sr.', 'rnolan@lowe.com', '$2y$10$y9IkSzGI/BGg8/8PWMmlYuHroMMLyvFrmEyJ9zkeqWW7QQVXTTFM.', 'suspended', '1-844-687-3185', '(855) 550-5192', '264-820-4511', '+1 (903) 821-4370', 4, 'default.png', '2019-07-08 15:43:41', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(2, 'Adolf Runte', 'mcartwright@hotmail.com', '$2y$10$7Wat3c8G/RlS1Mz82H5GeeMmPOInbOnnAXtRQ58I0ThdhO7AhOAaC', 'suspended', '(800) 430-5911', '844.972.1862', '+16479389051', '+1-428-255-1012', 3, 'default.png', '2019-07-08 15:43:41', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(3, 'Damon Ullrich', 'tanner22@gmail.com', '$2y$10$.EPv9Zu6wMeoQ2mIeksJW.duOrVNSN/LTlEt.nM0O0RphDmRA5PZi', 'inactive', '1-866-712-4321', '877-416-2655', '636-272-0375', '494.835.4038', 4, 'default.png', '2019-07-08 15:43:41', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(4, 'Austen Corkery V', 'abshire.nicolette@hotmail.com', '$2y$10$Hv.sTM.CuLHu5KmUdBrLSua7oY.5RsLTMEVT0TMIt/0t0aYPWrJuO', 'active', '(844) 651-8312', '1-866-324-7771', '+14722131303', '(414) 524-8571 x470', 4, 'default.png', '2019-07-08 15:43:41', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(5, 'Dr. Cameron Gorczany Jr.', 'marisol.keebler@mante.com', '$2y$10$TW9XfPRINERK9LxjRsrp6.dOYmenPp9UnUXf6FuFcii7o76qM7GpW', 'inactive', '866-607-8093', '1-844-902-4563', '720.882.6428 x628', '959.906.2076 x78797', 5, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(6, 'Prof. Jasper Fisher II', 'anya65@brekke.biz', '$2y$10$3jHZMRf5slO7bfVF/KzbZugO7qdqiWYXsrkFrVNk1ddeDp2TzRVte', 'inactive', '855-969-8233', '(866) 237-0241', '670.418.3651', '+1-628-395-4518', 3, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(7, 'Name Langworth', 'mcasper@west.com', '$2y$10$713dv1hYYEbRkTw9bpI2.edYqCcbSumKf4laEnznsoZV1INWu5JXe', 'suspended', '866-641-7307', '877-737-7091', '+1-981-599-2848', '359.331.8410 x862', 2, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(8, 'Sally Nader V', 'verda92@rempel.com', '$2y$10$x401WOuIaSnFlPiWuDdbWe5ib5bv47fxwGV5u7xGVpVSX6/nF1H5C', 'suspended', '(800) 378-9198', '888.263.6767', '1-306-242-6563 x17420', '520-451-0970', 4, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(9, 'Forrest Grady', 'cassandra75@gmail.com', '$2y$10$5PMQNzdRRsAd1dWlPldUgOpANz/C.UpOZuzSysFwINMhA1D02rYtW', 'suspended', '1-866-334-9230', '800.845.8812', '1-664-866-1331 x630', '428-274-6539 x7458', 2, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(10, 'Mr. Gage Torp', 'spinka.lily@huel.biz', '$2y$10$9yEujpTY84ojALcBF8gO2O.ZnvVnOuQYw61ADGvF6X7l4tmu2GD9i', 'inactive', '844-489-2769', '800-565-3032', '895-785-2055', '846.445.8758 x87025', 1, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(11, 'Terrence O\'Keefe IV', 'shaniya68@gmail.com', '$2y$10$wZH1s9PmbWVpW4h3517KMOe.67BmzqmXsEA8yaHR45lD4PzbB0yPq', 'inactive', '(800) 519-0600', '(855) 554-3602', '(375) 853-2132 x53692', '+1-815-295-1121', 5, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:49', '2019-07-08 15:43:49'),
(12, 'Dr. Dameon Hamill', 'arely.dibbert@douglas.com', '$2y$10$YrbswnBDhsYlBDY4D.tAWOJLqQrW2UuXmX6dIKn/Cjr12l65q4mL6', 'active', '(844) 870-9865', '844-667-4615', '+1-775-456-4208', '(412) 814-9880', 4, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(13, 'Kaylin Kuhlman', 'jamel.bergnaum@lakin.com', '$2y$10$tC1X/YqiGQKZVydTaRtfIuId6zKA9V35yMLcSbMPcUMhXarfcps8W', 'active', '844-718-7966', '1-877-826-6796', '1-307-237-1962 x438', '1-630-298-3672 x9072', 5, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(14, 'Jarvis Macejkovic', 'adrain.howe@gmail.com', '$2y$10$CZUBuM2NYhOPXbd5gfpObOtPiwxCLq41.LEZh/Nlt/.8cIUDn49na', 'inactive', '877-984-9130', '1-855-907-9884', '1-649-816-4549', '+1 (910) 789-9522', 2, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(15, 'Vincenzo Wuckert', 'monahan.josefina@hessel.com', '$2y$10$mxSpwnh1iGCB8aBJLHUU2OUn7llRglxua/U3Uof1S0OsHh7Uf6rKK', 'suspended', '866.620.3140', '855.965.3324', '1-463-705-7169', '(825) 637-1762 x436', 4, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(16, 'Mrs. America Mayert I', 'millie.witting@gmail.com', '$2y$10$zEEghVy2hYWgg6J8ImNaj.H/xRKrR26/.qOjC60ML1FIJy8RgxcM2', 'active', '844-700-4602', '800-549-0309', '(273) 608-3423', '(207) 368-4907 x168', 3, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(17, 'Gerson Johns', 'erdman.iva@yahoo.com', '$2y$10$K.yOYSuqjFuhK11vAn9Q3uxoz/4Vku3eA/Ev2twTm0bFAI2lX7En6', 'inactive', '(866) 418-6926', '1-888-952-9742', '1-382-579-9559 x4586', '701-754-3671 x0509', 3, 'default.png', '2019-07-08 15:43:42', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(18, 'Muhammad Halvorson', 'rodriguez.larue@hotmail.com', '$2y$10$Lf2el8J2YukGH5KZaD71mOMJxBr2S2TX0LNabbkmtHjVhNcUzqQ5a', 'inactive', '1-888-707-7117', '(844) 694-3704', '1-469-237-4878 x88650', '+1-730-563-5530', 2, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(19, 'Ms. Maci Lemke', 'kayden.larson@bayer.com', '$2y$10$rT7WjjAfgjkKPSifj6NxTejZDB3VW6I6SptvK9za91g50hj8EB6b.', 'suspended', '855-958-3101', '855.286.8634', '+1-683-827-4007', '(392) 862-8580 x114', 4, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(20, 'Otilia D\'Amore', 'jvon@lubowitz.com', '$2y$10$H7srDNyPOIq0Bvz9Nrdfauw3C9G1TP7zSjXBf78Z13Jlb/GJ185ke', 'active', '(800) 801-5745', '800.713.8693', '242-390-1070', '1-914-527-9167', 1, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(21, 'Kenya Dooley', 'dnienow@yahoo.com', '$2y$10$y9TmcdU5PDswvrVkfL8dvOy6rSTXmYuUFnJWq23ESEWPRe3HEmGGG', 'active', '855.384.8075', '(888) 925-4943', '306.770.3979', '1-436-882-1325', 1, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(22, 'Tyrique Dietrich', 'paucek.addison@thiel.net', '$2y$10$YEvnq68fpSCO0FDNR9TxhO1R3Tm8e2jYgIhGL0IaYqcL0491JYUYy', 'inactive', '1-855-217-9317', '(866) 562-3675', '315.979.9806', '1-723-507-5380 x540', 5, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(23, 'Dr. Joy Gibson PhD', 'helena.monahan@hotmail.com', '$2y$10$DvozEyhK/EIgQQ.G.vU1aeoA1e0DWXzBNGO1l8ESSXfT1ujd6d6QK', 'suspended', '866-486-3075', '855-989-1059', '1-446-337-5143', '693-961-8189 x7079', 2, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(24, 'Mavis Jenkins', 'norris95@quigley.com', '$2y$10$wm.wRZhD5OEyY9ivw/gm2.gKQq3ThrpUTaQEzHbFFxG8n/wKd6Y3y', 'inactive', '(855) 376-2836', '855.778.2571', '1-290-705-2846 x87827', '(781) 625-1335', 4, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(25, 'Willy Leuschke', 'lcorwin@dubuque.com', '$2y$10$SASH931mVTEosrjK0uGoduEU3gke0z7FGhgvVWUdvnZn95bH1BjG.', 'inactive', '844.807.2100', '800.830.3264', '+1-314-828-6759', '635-960-3682', 5, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(26, 'Lewis Botsford', 'reymundo.gottlieb@yahoo.com', '$2y$10$eLjGaVsoM2KyDSsynvLb1uxWGCmrsCnFzIdEtjIaARqKUiPvuXRuu', 'active', '800-228-2189', '(866) 899-5000', '+1-620-982-3109', '1-225-543-3835 x55887', 2, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(27, 'Mr. Freddy Brown', 'leanna.miller@okeefe.info', '$2y$10$sCkculWLhQ04MI1kfsimOeQS4CKrIhV/jmR8F8dgOxYf8nVj6Hvgm', 'inactive', '855.734.5024', '877.280.6614', '464-246-5601 x5289', '272.403.4205 x4523', 4, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(28, 'Gayle Bashirian', 'ggoldner@gmail.com', '$2y$10$OCjzjOR84750Yx0L5ZqK0uazFCCvv5EYIhuUr9Qt861JLsAHhSwAC', 'inactive', '877.994.1471', '800.866.1510', '426-370-9504 x504', '627-248-2870 x5858', 1, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(29, 'Elizabeth Stroman', 'kelly78@lang.com', '$2y$10$QIDsDydkMyNLDYCSk9SFM.qPMINWjUVocVQVEbXU1lsO8WWb8Mesm', 'active', '855-395-0199', '(888) 535-6068', '332.737.5794 x3295', '903-430-1466', 4, 'default.png', '2019-07-08 15:43:43', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(30, 'Frances Willms', 'dameon.hegmann@yahoo.com', '$2y$10$I/.AyFkzKgX88mGGPVfyLe85ZRIacreIDmyL585Za3yXCphRM1Jaa', 'suspended', '1-866-731-2812', '1-855-625-8548', '(836) 552-5704', '995.912.4822', 3, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(31, 'Prof. Chaim Krajcik IV', 'jakubowski.terry@gmail.com', '$2y$10$exFRcDBSTv..xukPNUepSuadXHKoB6TI/cRgj0RUj8dxn0H9zQdBK', 'suspended', '(877) 697-0318', '888.258.6142', '285-979-1647', '967-732-3408', 1, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(32, 'Jamel Prosacco', 'sboyle@hotmail.com', '$2y$10$IsAaP/CGw0j.MoCKHGNluenc1zTbPZUsi/QaJSfMdQC3J5mdgZGue', 'suspended', '855.621.7902', '(855) 679-6532', '1-273-343-7544 x107', '861.510.1240', 5, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(33, 'Greg Fay', 'jones.dashawn@hotmail.com', '$2y$10$RYDw1cj21VOMkxtaflv7I.f6rdAPb/Um1WzWHAtib9gTZw6z9BTiG', 'active', '(888) 739-3270', '1-866-517-0607', '219-542-9267 x5424', '+1-987-909-0791', 1, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(34, 'Emerson Hane', 'joanne.medhurst@turcotte.org', '$2y$10$FoRh3Vk5bytGM30W3n67NOWwNjfNLuWg9V3ZPGX2cyCuO.uKOZwfm', 'suspended', '(844) 518-1852', '(866) 449-0758', '1-651-586-6586', '836-609-0290 x6026', 5, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(35, 'Sonya Homenick', 'zander.nicolas@hotmail.com', '$2y$10$QDyNL4WjEXgk/L1WR9SgR./I1OjPasiqeUPSkmbo9mBJymE9DUmbW', 'inactive', '888-213-4973', '1-844-735-3133', '+15953035687', '930.997.4254 x8219', 5, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(36, 'Nona Lebsack', 'ukerluke@mcdermott.net', '$2y$10$zWlj.UCnL0rD8WVAW0Jnk.UDHMoS7dtMtopwW42E2ixjW/w8DEOrq', 'suspended', '800-227-4075', '866-673-1524', '278-443-1168 x4605', '421-283-2445 x04502', 3, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(37, 'Arvilla Swift', 'adrienne.wyman@ruecker.org', '$2y$10$ce1KzsVoOu6Malcx1Wh32eMPbp0lOSyr9AsGk6PrL7HGQNKRPbejm', 'suspended', '(866) 530-2507', '844-626-1802', '567-581-3665 x313', '(290) 867-1366 x13187', 3, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(38, 'Mr. Ryder Mann V', 'glover.cordell@romaguera.info', '$2y$10$KR2VVSJDlB13DQyNbv1rlu6uOQDY.g5k1tAJXh/vh.zcapllOzPOO', 'active', '1-866-369-4534', '855-616-7947', '719.563.7500', '778.482.9297 x5536', 2, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(39, 'Mrs. Reanna McLaughlin V', 'weber.kacie@yahoo.com', '$2y$10$AM8Nfct1aBoA3Sw2lc2eDeGhBZ61YK1X09scEWQ5lae6AEWt7.55i', 'inactive', '844.321.2576', '855.647.2083', '(942) 778-6515 x2252', '(806) 677-6681 x88324', 2, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(40, 'Mr. Newton Goyette', 'ollie39@hotmail.com', '$2y$10$amQimyXucWIiUnjLOUWSwOHfqIGiFYdrzs8ngDm2qw6xSfd7qminS', 'suspended', '855-716-7093', '1-800-635-7210', '(397) 429-0266 x48901', '1-206-803-2688', 4, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(41, 'Jamey Bergstrom', 'hattie91@leannon.com', '$2y$10$MZ1uIWO8UbEZPVJ0fKmm1.m4wyBfXI6q9caxAbwcsx2lkWo7AJDGS', 'active', '866-749-3177', '855-210-3857', '742-959-8829 x3004', '+1-997-805-4316', 5, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(42, 'Ashly Hackett', 'debert@gmail.com', '$2y$10$x6EDK3TiA0/12SS1ErOH9e97erJHPWPVHBJxY9PyjxAOBbSC.9HW2', 'active', '800.991.1734', '1-866-772-4820', '242-312-6968 x80999', '786-312-7462 x523', 2, 'default.png', '2019-07-08 15:43:44', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(43, 'Miss Nova Fahey II', 'sonny.bergstrom@hotmail.com', '$2y$10$Wsl6QlXRekdYlQzNFA.UBehJRzVP2OXStDxs585Sf1WpdRCLR7w12', 'inactive', '(866) 315-0419', '866.765.9736', '954-700-9425 x800', '(342) 634-0695', 2, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(44, 'Jalyn Sauer DVM', 'vandervort.tyra@hotmail.com', '$2y$10$sKYJzWOBZM1p9QOPGIfeD.T2yEFGB9LC4ENalftp9LpAsN3ddlfIi', 'inactive', '877.978.1997', '(800) 268-3996', '201-730-1618 x96070', '+1.243.639.6783', 1, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:50', '2019-07-08 15:43:50'),
(45, 'Sofia Rath', 'dschroeder@yahoo.com', '$2y$10$7hMz6GMnPDoV9Xiq3Yw01uT0KAvoB1T2bvNr18ZSZ61jR/P13cbPq', 'inactive', '800-913-3816', '(866) 594-7404', '1-290-956-8676 x9682', '(581) 994-1259', 1, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(46, 'Dr. Dakota Anderson', 'jbraun@christiansen.com', '$2y$10$E7Vpq4x1xlThvhbjPNMgeejJ8ogEFI3ZQdrvZVlvfo1eLlHi74.RO', 'inactive', '800-390-3867', '(800) 740-8827', '(981) 390-5456 x312', '(628) 471-6460 x65701', 4, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(47, 'Lessie Lebsack MD', 'marvin73@roberts.net', '$2y$10$01qAhcuFFXkOUSKxe8usKOof71TAde2TV0vnQavC72FmObJoxfbqe', 'active', '1-877-794-5470', '888.318.1144', '1-926-670-4511 x08666', '+1-505-760-8858', 2, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(48, 'Alfred Heaney PhD', 'schulist.jaquan@hotmail.com', '$2y$10$oU9yB7d/zZMN.UM0Lz/9cevAgUgRBV5kdxpUqmVPsrTggVwhZMFki', 'inactive', '888.358.7887', '1-800-456-3382', '675-816-7526 x46157', '(570) 678-0327', 1, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(49, 'Jedidiah Mills', 'stehr.courtney@hotmail.com', '$2y$10$BuDtG/anjRZCSsPUhKpbH.PiSuRCAxmflkjneS2e99ifmHp41mVRK', 'suspended', '1-844-866-9869', '844-881-0559', '+1-923-881-8344', '(537) 544-5799 x7752', 2, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(50, 'Elaina Jacobs DVM', 'crystel.skiles@rippin.net', '$2y$10$ksBDc/FdQFjh12hWw5Fz6.zMJgi40g1yGlhZH6/h7AkxMY/7TLZeK', 'active', '(800) 216-7437', '(844) 814-1752', '(476) 399-7216', '+1-510-576-9458', 5, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(51, 'Lester Bruen', 'afeil@schaefer.com', '$2y$10$Hyvt4gDp0tfqrwExZhiym.Xes2zI.i0my12HD4eFhUETPh9EZUJqC', 'inactive', '855-615-0153', '1-855-935-5719', '1-402-518-0416', '1-756-304-4501', 1, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(52, 'Matteo Corkery', 'xtillman@klein.com', '$2y$10$yDKHFM6OnDP4luWhEXb70e8Srx9Jiedl2F6yvTuaVhP2enMjMlz7q', 'suspended', '844-644-7538', '(877) 728-5170', '1-349-590-9664', '351-774-8877 x5299', 1, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(53, 'Lurline Predovic', 'zola.collins@weissnat.biz', '$2y$10$2U6DvU8xSZtEn0xAnNX0cerHpD91QjiG6Jh.nUvnHUDYvb5.z89WK', 'inactive', '844.872.9281', '888-315-9284', '889.925.5321 x7102', '935.741.9126', 5, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(54, 'May Lind', 'aniyah31@yahoo.com', '$2y$10$kVU.4Nqz5rx3Lui1hfDVreceATUVg41zxB3tYMq6wPQ9nO9Kx9.wy', 'inactive', '1-888-267-2258', '888-787-0468', '(436) 643-1414', '1-549-888-5582 x5521', 4, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(55, 'Prof. Samantha Dietrich PhD', 'anderson.langosh@hotmail.com', '$2y$10$hK1kgdh66v0PTQNeyysLl.1dlC4kSD7Nd5BfI0M9ztJc6aAKMGR7K', 'suspended', '(844) 549-3576', '(888) 628-0064', '+1-217-828-0928', '+12698725118', 2, 'default.png', '2019-07-08 15:43:45', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(56, 'Aiyana Collins', 'jheller@boyle.biz', '$2y$10$p8FuHoqHwbWQ2uJu.NJvUuHOkidL7fxty1TwklVWogYCm0sJlTi9u', 'inactive', '(877) 857-9890', '1-877-344-6644', '735.597.2686', '(713) 512-9226', 5, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(57, 'Margaretta Collins', 'santino79@gmail.com', '$2y$10$q2a08.3sZiDf81bUj.1m/.opvtPrqOixiJRUVR2wGJoFL8RUNc2CK', 'active', '(888) 303-9346', '1-877-440-3246', '(528) 724-5837', '460-877-8527 x26018', 3, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(58, 'Brooklyn Kling', 'maribel02@jones.net', '$2y$10$f306wxdKLpjKYp0dIvf.POrV43WiKIn1oYP6lXnveudc5MFyQluau', 'inactive', '(800) 959-6512', '1-866-453-5296', '567-525-1338 x37458', '+1.249.832.4536', 1, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(59, 'Dr. Cristian Metz', 'collier.kelli@gmail.com', '$2y$10$qcAV0W6y0UYzoyjWleYbZewdpqQedtqW0ZRn6ADjC4doN6zW0VY2q', 'active', '877.367.8766', '877-613-8595', '(484) 569-0886', '+1-389-368-4404', 2, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(60, 'Lesly Glover PhD', 'antone.emmerich@senger.com', '$2y$10$eeaxw04Czw6wQBLnFOA3tuZmWBIDMiZLNLLb5LRWV.VFqvoyTdJI2', 'active', '877-527-9304', '(855) 820-2066', '+1-984-809-7401', '(413) 452-7084 x56728', 3, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(61, 'Kendrick Nikolaus', 'renner.oswald@hotmail.com', '$2y$10$4Bbj7TAXKyeGY8rtWIwoAuDQXpxLv2zX8qiJwLStS/cjV08a5ofBe', 'active', '877-568-1571', '866.406.5156', '1-412-885-6963', '245-836-8819 x685', 5, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(62, 'Prof. King McGlynn DVM', 'kieran06@littel.com', '$2y$10$5sHj/rf6zRMleqPBT.1N0O1tzeKNcAW0O/jSooYWaGfKsF9tYRZG2', 'suspended', '1-844-608-8612', '844-908-7517', '(792) 716-6372', '663-966-7335', 5, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(63, 'Beverly Wisozk', 'myrna.conroy@schmeler.com', '$2y$10$qZmHFXI8ryblnRt21yCtuuOADRuXnbDJPodgUdG7qaIh4VYmlCFYS', 'suspended', '888.781.6607', '877.582.0896', '945.383.0203', '798-786-9692 x8216', 1, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(64, 'Hollis Haag', 'jkuhlman@jacobson.com', '$2y$10$jzfNeJb0HHE0fiN1hpBJ1uCAkszX1p/SrRWoRAp7MajmqDlyCpSI6', 'inactive', '(855) 786-5651', '888-275-0749', '(818) 599-3967 x449', '+1 (693) 761-8186', 4, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(65, 'Elza Kuhlman', 'yundt.patrick@gmail.com', '$2y$10$nrY852AjausJixBKLE4BQu7O8nVFnPbxjR4HS4eBNT3iCtAyjfeMy', 'active', '844-550-4468', '(855) 559-4832', '1-262-232-3282', '1-883-721-7855 x9057', 1, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(66, 'Mrs. Mariela McDermott', 'hand.clint@gmail.com', '$2y$10$/PltStjnEWXYn3XBen03Zu9NzqE5mfwYqcw1v1ItFQnSLcpjt5a/K', 'suspended', '(844) 330-2991', '1-800-247-0756', '953-772-9697', '814-833-5608', 3, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(67, 'Miss Eudora Gislason', 'hmarquardt@gmail.com', '$2y$10$Ykq764LDTIVpj8KKPbFn2eVdIttKV.1CCMQIPqMQ9DdPW7M/kPNSe', 'active', '1-877-817-9923', '(844) 625-1020', '740-327-8058', '+1.817.858.6156', 1, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(68, 'Miss Delpha Koelpin IV', 'erwin.thompson@hotmail.com', '$2y$10$Y9zbUct3xviqeud6PXQknuIrvkec0wSjWsYoikQfTBttBUIJq/x0C', 'inactive', '(855) 693-8339', '(855) 251-3549', '+1.389.876.4169', '+1 (795) 871-8685', 5, 'default.png', '2019-07-08 15:43:46', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(69, 'Asia Ondricka', 'upton.esther@yahoo.com', '$2y$10$DExL0VgoHgauzA23k8DKq.c/7WjoyRsO0C5udVxhLfOPKHEdlmrKq', 'active', '866.884.7751', '1-888-951-6763', '640.303.7206 x130', '270.805.5754', 5, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(70, 'Macey Kuphal DDS', 'brant.hayes@effertz.net', '$2y$10$WHebLy2WUcyUwv3YekOv3eqWuWXfCPq0FSqDgIGkifXIk/0IJzwSi', 'active', '(844) 214-5036', '888.545.0629', '(934) 714-6578 x3364', '+1 (496) 202-4496', 4, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(71, 'Prof. Teagan Hilpert V', 'qreinger@hotmail.com', '$2y$10$63HzaFYjRKhTOVWvZ1drOuMrOm5w09TiFrZJgv0XBoPhtj.HybsMi', 'inactive', '(866) 528-3864', '855-959-0105', '1-673-612-3872 x458', '1-367-352-2682', 2, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(72, 'Ike Cruickshank', 'maximillia40@hotmail.com', '$2y$10$dYVweIqvjcmR.q.ADTiLtOqwzVDZC6.OFdhjyn0KT5q4P8ytNe4aO', 'inactive', '(866) 846-2938', '1-866-605-0499', '450-304-2218', '(981) 792-1138 x95201', 4, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(73, 'Marcella Kuhlman', 'qvandervort@kessler.com', '$2y$10$G4/uVfPBR4xZlihLXomMJ.jiMS1YmD8AiYQ98/6gS3aPDViCPB1d2', 'suspended', '1-888-697-6284', '(800) 208-3114', '1-661-298-8366', '590-558-0204', 1, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(74, 'Ms. Myah Larkin', 'xwyman@kunze.info', '$2y$10$0Xr5aT7OAp1VQpj6A0gdyOVrIimZYU1Yr8ZBola4D0BNfyvHg.tsG', 'active', '1-866-684-9123', '(877) 400-5309', '261-757-1051 x91532', '479-582-9401 x1520', 2, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(75, 'Courtney Hettinger', 'chaz04@hane.com', '$2y$10$E3/T25DhJTJz4Ddb9BwUC.2dOY.ML7.wxoOKwMPIpNCloNDWzbL8q', 'active', '(877) 720-5004', '800-222-0654', '+15897367903', '(529) 513-3297 x868', 2, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(76, 'Prof. Jessyca Leuschke', 'beulah.sawayn@gleichner.com', '$2y$10$fSw./1VUuc8A74B4yQdbYuyo2COIDDT8vA64FZVBbUvgUbisd5N2.', 'active', '1-800-309-3721', '800-535-2971', '380-833-6050 x89609', '315.531.1556 x75346', 5, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(77, 'Raphael Ziemann', 'garrison59@hotmail.com', '$2y$10$fSx3QJBXNgrhfdXS7XuLf.6ESWQDjS6P5b7VilNtzffnSEE7WMKq6', 'suspended', '1-877-243-4524', '877.519.9101', '1-636-498-3897 x00741', '+1.226.881.1030', 5, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(78, 'Shawna VonRueden', 'vanessa.funk@yahoo.com', '$2y$10$8FduNc7xDAG.F7KQyWyx5eDt5/N8gmC1yWbzRKnq2fLdI4Qb4i9dG', 'suspended', '844-787-9130', '800.363.8320', '823.355.1850 x2314', '509.590.6589', 2, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(79, 'Wyman Crona V', 'craig.wilderman@stanton.org', '$2y$10$ulXdyV9ajrWd12ONh9dsUOL54wUgqQyP7xuZTxiudmIfzv.KPI68.', 'suspended', '1-888-944-5134', '888.724.0363', '+1-809-967-9773', '902-963-3576', 5, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(80, 'Tyreek Bednar II', 'raquel.bashirian@luettgen.info', '$2y$10$iIGj/tGJxcz3MBkQxdSvVOiNJymm9urvuMBHRj/3OslawnYT9k.W.', 'active', '1-877-364-8812', '877.934.6708', '586-353-2336', '(237) 963-1357', 1, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(81, 'Amely Krajcik PhD', 'bruen.jalyn@gmail.com', '$2y$10$XedArvP8v9lRSXzyneuvDeOJxzuBgWg9mRceTsZf1hwABvTg.QcWa', 'active', '(888) 317-6991', '1-844-890-5504', '972-916-8998 x788', '1-332-645-9430', 2, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:51', '2019-07-08 15:43:51'),
(82, 'Samir Shanahan', 'emelie65@shields.com', '$2y$10$IcO.jLNmvOYDZyPM7.tTGuz/Z3rIYD/S7TfwOKOybrvUT7NITlbMW', 'active', '1-855-463-9103', '1-877-944-9961', '+1.292.402.7094', '(793) 558-6029', 2, 'default.png', '2019-07-08 15:43:47', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(83, 'Minnie Wehner', 'oconner.connor@streich.info', '$2y$10$DDPs5p/VS8suVQp2d4uHs.YLh4NWhA0fzrTgPI1m9YAxkxYgBAKhK', 'inactive', '877.759.3902', '877-217-1466', '316.389.6935 x02903', '339.749.2257 x49057', 5, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(84, 'Marielle Hegmann', 'devyn41@wyman.biz', '$2y$10$as9VgCUETAe4.q3ZlRrgBOqk7Wg5KY4moJM3tQIdAgR11eimJbUG2', 'suspended', '(877) 812-3525', '(877) 574-6337', '528.800.5111', '1-425-454-7382', 5, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(85, 'Mr. Brennon Reichert IV', 'mward@jacobson.com', '$2y$10$QjCfSgBs0qS1W3Tayq4rHeLpwGhePl/NHSisqiYvnhKfSqOL8OETK', 'active', '1-877-917-0112', '866-528-1450', '739-838-3542 x5436', '760.661.9593', 5, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(86, 'Jan Hirthe', 'milford.swift@boyle.com', '$2y$10$TSVd/fxBkL9TZMW7zzeUy.uz645/bg0Y2fO01pqb6z37UUgIin0QS', 'inactive', '1-888-919-7742', '(800) 227-1939', '350.621.8270 x749', '1-826-545-6474', 5, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(87, 'Claudine Feest IV', 'ipagac@mcglynn.info', '$2y$10$sTd5d8cAZBiIe2r0zJ/ZveMgrhEBX4TR7zzzm2aHnI78aT7T/fIUa', 'suspended', '1-800-376-1895', '888-494-2640', '+1-641-481-2963', '717-309-2848 x250', 2, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(88, 'Clare Leannon', 'lea34@frami.com', '$2y$10$iGhIJl6fkw0hZK6g/EVA5e9O5XelOj.vqDv9VVBBUkRC2kX3D.ZsS', 'suspended', '866.350.9636', '866.468.4881', '(852) 881-9017', '471-696-0623 x9939', 4, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(89, 'Dell Botsford', 'torp.jayce@hotmail.com', '$2y$10$Z6XinWiI0lxTYcF05ECU6OVuKrW1dUvC2rWO0Hl6k23IPBJ7oyXGe', 'inactive', '888-330-3990', '1-888-878-5253', '(739) 288-9847 x52404', '1-201-724-4369 x081', 4, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(90, 'Elroy Schulist', 'florian.purdy@friesen.com', '$2y$10$u1/LhWKaCQ7HGQKzNIWADe32M2VHgtFG1emaio/Z7v.t8vFFAq5aW', 'active', '800.475.4995', '855.421.0349', '575.428.9469', '(803) 205-5626', 2, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(91, 'Blaze Ryan DVM', 'cydney.greenholt@lemke.info', '$2y$10$PCDTLksIllPeScro/k3J4e4yB96ZXCayVkaGS7orFuG4g8Y.9Xp6K', 'suspended', '866-951-9249', '(800) 478-1187', '495-453-2284 x537', '561-799-3225 x53157', 1, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(92, 'Dr. Jason Senger III', 'rosario.bradtke@gmail.com', '$2y$10$AOIKKP2U07fs3HyvD7EUR.gOl6/aITb5MqiDAUmOidNF/bXWMh/jm', 'inactive', '(855) 512-9921', '1-877-974-0514', '+1.290.680.7274', '1-524-645-0459 x541', 1, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(93, 'Miss Jazmyn Raynor MD', 'freddy51@considine.com', '$2y$10$VUUD6Xx3eOievNzp6FAtpeAFRBAMXXdb/cuxtSBg6FrHngf8Q7PKa', 'active', '1-866-915-1652', '(800) 500-5633', '(868) 402-4867 x0449', '+17256443053', 2, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(94, 'Pansy Barrows II', 'daniel.jaycee@hotmail.com', '$2y$10$bQkq1eoIZ9dJvx6JiKL1cuG08NI4p9AjZDee.RSMRo2zBFebq2Ma6', 'active', '(888) 902-1680', '1-800-593-2264', '+1.879.344.8067', '1-268-779-2422', 2, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(95, 'Ms. Lucie Block MD', 'tatyana.harris@hotmail.com', '$2y$10$0GFVbVSfHMNJkI6Gk0AGNemwbA0ppS70NwKhlHqvvZNwAB9icacZ6', 'inactive', '877.450.2788', '888.872.5886', '1-876-541-5677 x67352', '524-827-6234 x47129', 5, 'default.png', '2019-07-08 15:43:48', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(96, 'Hosea Bauch II', 'ben.rowe@yahoo.com', '$2y$10$zgbWFBs2yR6Z0DC3SxN7guW7rZCUhUcdnJDiik./YFBXydZiMzevO', 'active', '(855) 707-5737', '844.866.1137', '570-324-9455 x7250', '+1 (383) 340-8321', 3, 'default.png', '2019-07-08 15:43:49', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(97, 'Waino Adams', 'gerhold.albertha@hotmail.com', '$2y$10$5VbaJJgZVKnQmWBh5lI99ub11TQ5sfEIsci9lIfMoOcMcFTIlw7cy', 'active', '800-469-3206', '844-535-4582', '731-652-4205 x5096', '(672) 516-6961 x151', 5, 'default.png', '2019-07-08 15:43:49', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(98, 'Elaina Huel', 'norval.schinner@roberts.com', '$2y$10$SvgBcuDgsk/ftCV91MjuVegieH.8UEjTVMot1liPlHZ6noMqQrNKa', 'suspended', '(877) 691-1326', '855-761-3428', '+1-657-232-9969', '+1-729-841-7364', 3, 'default.png', '2019-07-08 15:43:49', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(99, 'Rebeca Mayer', 'peggie29@nicolas.org', '$2y$10$53SQyRI6SWbkcH76HPeaGem6PRum0OHqGz68EbT8YILP0dscAVEhO', 'inactive', '1-888-763-0650', '800-954-7078', '+15268397292', '+1-786-813-1461', 2, 'default.png', '2019-07-08 15:43:49', NULL, '2019-07-08 15:43:52', '2019-07-08 15:43:52'),
(100, 'Jedediah Harber', 'qkemmer@yahoo.com', '$2y$10$6UELGI9Ud5mfV8GoDGke9ezHwQ7lOjhQRg/RJosCTu.RWamENVwba', 'inactive', '(855) 381-3269', '855.926.4605', '687.509.5939', '+1 (368) 683-4034', 4, 'default.png', '2019-07-08 15:43:49', NULL, '2019-07-08 15:43:52', '2019-07-10 06:10:59'),
(101, 'admin', 'admin@gmail.com', '$2y$10$2NR/DfNZP5ZutQXBmQgWpeB8sU/QxS/aVjbBFFz06WxCmTCZUCzXW', 'active', NULL, NULL, NULL, NULL, 1, 'admin@gmail.com.jpg', NULL, NULL, '2019-07-08 15:48:09', '2019-07-13 14:50:00'),
(103, 'prueba', 'prueba@prueba32.cl', '$2y$10$pLw0ENhvjP7DvY9xqUzkkepxoRfLtYgonK7.G9MGFNaBhzunLugCq', 'active', '12341232', '12341232', '12341232', '12341232', 3, 'default.png', NULL, NULL, '2019-07-10 18:26:49', '2019-08-05 14:00:09'),
(104, 'Carlos Garcia', 'carlos@gmail.com', '$2y$10$V4qEsszJjI7JgnQ3rFhuteEAPaRo77hILSmwh8aMQKULGb5y7sIJi', 'suspended', '12341234', '12341234', '23452345', '23452345', 2, 'carlos@gmail.com.jpg', NULL, NULL, '2019-07-10 23:04:10', '2019-07-15 15:19:08'),
(105, 'Sergio Portillo', 'prueba@prueba33.cl', '$2y$10$rn8QTyhVLEKA6EcTfW809.hklKg2PttTcgbgkUnUo9sjIZeM1SLCu', 'active', '23452345', '23452345', '23452345', '23452345', 1, 'default.png', NULL, NULL, '2019-07-15 18:07:13', '2019-07-15 18:07:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_offices`
--

CREATE TABLE `users_offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_has_offices`
--

CREATE TABLE `user_has_offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `accounts_courriers`
--
ALTER TABLE `accounts_courriers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_courriers_account_id_index` (`account_id`);

--
-- Indices de la tabla `account_categories`
--
ALTER TABLE `account_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `account_contacts`
--
ALTER TABLE `account_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `account_metas`
--
ALTER TABLE `account_metas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `account_meta_types`
--
ALTER TABLE `account_meta_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bank_account_types`
--
ALTER TABLE `bank_account_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bank_transactions`
--
ALTER TABLE `bank_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indices de la tabla `business_lines`
--
ALTER TABLE `business_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo_units`
--
ALTER TABLE `cargo_units`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories_accounts`
--
ALTER TABLE `categories_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_accounts_category_id_index` (`category_id`),
  ADD KEY `categories_accounts_account_id_index` (`account_id`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curriers`
--
ALTER TABLE `curriers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docs_instructions`
--
ALTER TABLE `docs_instructions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `docs_instructions_account_id_index` (`account_id`);

--
-- Indices de la tabla `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documents_meta_types`
--
ALTER TABLE `documents_meta_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_meta_types_document_id_foreign` (`document_id`),
  ADD KEY `documents_meta_types_document_type_id_foreign` (`document_type_id`);

--
-- Indices de la tabla `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doc_statuses`
--
ALTER TABLE `doc_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `freight_lines`
--
ALTER TABLE `freight_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `freight_rates`
--
ALTER TABLE `freight_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `freight_rates_forwarder_index` (`forwarder`);

--
-- Indices de la tabla `incoterms`
--
ALTER TABLE `incoterms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logunits`
--
ALTER TABLE `logunits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mv_concepts`
--
ALTER TABLE `mv_concepts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mv_types`
--
ALTER TABLE `mv_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operation_budgets`
--
ALTER TABLE `operation_budgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operation_budgets_operetion_id_index` (`operation_id`),
  ADD KEY `operation_budgets_order_sale_currency_id_index` (`order_sale_currency_id`),
  ADD KEY `operation_budgets_order_purchase_currency_id_index` (`order_purchase_currency_id`);

--
-- Indices de la tabla `operation_documents`
--
ALTER TABLE `operation_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operation_documents_courrier_to_principal_foreign` (`courrier_to_principal`),
  ADD KEY `operation_documents_operation_id_index` (`operation_id`),
  ADD KEY `operation_documents_customer_mailing_a_index` (`customer_mailing_a`);

--
-- Indices de la tabla `operation_ships`
--
ALTER TABLE `operation_ships`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operation_ship_totals`
--
ALTER TABLE `operation_ship_totals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operation_ship_totals_operation_id_index` (`operation_id`);

--
-- Indices de la tabla `operation_status`
--
ALTER TABLE `operation_status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order_pmt_terms`
--
ALTER TABLE `order_pmt_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_operation_id_foreign` (`operation_id`);

--
-- Indices de la tabla `partner_banks`
--
ALTER TABLE `partner_banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partner_bank_company_id_index` (`company_id`),
  ADD KEY `partner_bank_acc_currency_index` (`acc_currency`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_transaction_id_index` (`transaction_id`),
  ADD KEY `payments_operation_id_index` (`operation_id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `ports`
--
ALTER TABLE `ports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indices de la tabla `product_gens`
--
ALTER TABLE `product_gens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_lines`
--
ALTER TABLE `product_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profit_centers`
--
ALTER TABLE `profit_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `shelf_lifes`
--
ALTER TABLE `shelf_lifes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ship_details`
--
ALTER TABLE `ship_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ship_details_operation_id_foreign` (`operation_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `accounts_courriers`
--
ALTER TABLE `accounts_courriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `account_categories`
--
ALTER TABLE `account_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `account_contacts`
--
ALTER TABLE `account_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `account_metas`
--
ALTER TABLE `account_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `account_meta_types`
--
ALTER TABLE `account_meta_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `bank_account_types`
--
ALTER TABLE `bank_account_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `business_lines`
--
ALTER TABLE `business_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cargo_units`
--
ALTER TABLE `cargo_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categories_accounts`
--
ALTER TABLE `categories_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `curriers`
--
ALTER TABLE `curriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `docs_instructions`
--
ALTER TABLE `docs_instructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `documents_meta_types`
--
ALTER TABLE `documents_meta_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `doc_statuses`
--
ALTER TABLE `doc_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `freight_lines`
--
ALTER TABLE `freight_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `freight_rates`
--
ALTER TABLE `freight_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `incoterms`
--
ALTER TABLE `incoterms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `logunits`
--
ALTER TABLE `logunits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `mv_concepts`
--
ALTER TABLE `mv_concepts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `mv_types`
--
ALTER TABLE `mv_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `operations`
--
ALTER TABLE `operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `operation_budgets`
--
ALTER TABLE `operation_budgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `operation_documents`
--
ALTER TABLE `operation_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `operation_ships`
--
ALTER TABLE `operation_ships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `operation_ship_totals`
--
ALTER TABLE `operation_ship_totals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `operation_status`
--
ALTER TABLE `operation_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `order_pmt_terms`
--
ALTER TABLE `order_pmt_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `partner_banks`
--
ALTER TABLE `partner_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `ports`
--
ALTER TABLE `ports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1191;

--
-- AUTO_INCREMENT de la tabla `product_gens`
--
ALTER TABLE `product_gens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `product_lines`
--
ALTER TABLE `product_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `profit_centers`
--
ALTER TABLE `profit_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `shelf_lifes`
--
ALTER TABLE `shelf_lifes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ship_details`
--
ALTER TABLE `ship_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docs_instructions`
--
ALTER TABLE `docs_instructions`
  ADD CONSTRAINT `docs_instructions_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`);

--
-- Filtros para la tabla `documents_meta_types`
--
ALTER TABLE `documents_meta_types`
  ADD CONSTRAINT `documents_meta_types_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `documents_meta_types_document_type_id_foreign` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `freight_rates`
--
ALTER TABLE `freight_rates`
  ADD CONSTRAINT `freight_rates_forwarder_foreign` FOREIGN KEY (`forwarder`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `operation_ship_totals`
--
ALTER TABLE `operation_ship_totals`
  ADD CONSTRAINT `operation_ship_totals_operation_id_foreign` FOREIGN KEY (`operation_id`) REFERENCES `operations` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_operation_id_foreign` FOREIGN KEY (`operation_id`) REFERENCES `operations` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `partner_banks`
--
ALTER TABLE `partner_banks`
  ADD CONSTRAINT `partner_bank_acc_currency_foreign` FOREIGN KEY (`acc_currency`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `partner_bank_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_operation_id_foreign` FOREIGN KEY (`operation_id`) REFERENCES `operations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `bank_transactions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ship_details`
--
ALTER TABLE `ship_details`
  ADD CONSTRAINT `ship_details_operation_id_foreign` FOREIGN KEY (`operation_id`) REFERENCES `operations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
