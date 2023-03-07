-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2023 a las 18:02:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `proyectolaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Sevilla', '2023-03-01 07:32:29', '2023-03-01 07:32:29'),
(2, 'Madrid', '2023-03-01 07:32:37', '2023-03-01 07:32:37'),
(3, 'Barcelona', '2023-03-01 07:32:44', '2023-03-01 07:32:44'),
(4, 'Valencia', '2023-03-01 07:32:51', '2023-03-01 07:32:51'),
(5, 'Córdoba', '2023-03-01 07:32:59', '2023-03-01 07:32:59'),
(6, 'Huelva', '2023-03-01 07:33:06', '2023-03-01 07:33:06'),
(7, 'Jaén', '2023-03-01 07:33:12', '2023-03-01 07:33:12'),
(8, 'Cádiz', '2023-03-01 07:33:17', '2023-03-01 07:33:17'),
(9, 'Granada', '2023-03-01 07:33:23', '2023-03-01 07:33:23'),
(10, 'Murcia', '2023-03-01 07:33:34', '2023-03-01 07:33:34'),
(11, 'Salamanca', '2023-03-01 07:33:41', '2023-03-01 07:33:41'),
(12, 'Teruel', '2023-03-01 07:33:48', '2023-03-01 07:33:48'),
(13, 'León', '2023-03-01 07:33:54', '2023-03-01 07:33:54'),
(14, 'Toledo', '2023-03-01 07:34:00', '2023-03-01 07:34:00'),
(15, 'Badajoz', '2023-03-01 07:34:10', '2023-03-01 07:34:10'),
(16, 'Ávila', '2023-03-01 07:34:16', '2023-03-01 07:34:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacta`
--

CREATE TABLE `contacta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacta`
--

INSERT INTO `contacta` (`id`, `name`, `email`, `telefono`, `mensaje`, `created_at`, `updated_at`) VALUES
(1, 'carmen yelmo', 'carmen@gmail.com', 425143552, 'hola', '2023-03-07 10:47:16', '2023-03-07 10:47:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hobbies`
--

CREATE TABLE `hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hobbies`
--

INSERT INTO `hobbies` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'deporte', '2023-03-01 07:36:02', '2023-03-01 07:36:02'),
(2, 'Música', '2023-03-01 07:36:08', '2023-03-01 07:36:08'),
(3, 'Videojuegos', '2023-03-01 07:37:03', '2023-03-01 07:37:03'),
(4, 'Viajar', '2023-03-01 07:37:14', '2023-03-01 07:37:14'),
(5, 'Pintar', '2023-03-01 07:37:19', '2023-03-01 07:37:19'),
(6, 'Cantar', '2023-03-01 07:37:24', '2023-03-01 07:37:24'),
(7, 'Bailar', '2023-03-01 07:37:29', '2023-03-01 07:37:29'),
(8, 'Manualidades', '2023-03-01 07:38:01', '2023-03-01 07:38:01'),
(9, 'Otros', '2023-03-01 07:38:57', '2023-03-01 07:38:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `megustas`
--

CREATE TABLE `megustas` (
  `usuarioDaMg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuarioRecibeMg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `megustas`
--

INSERT INTO `megustas` (`usuarioDaMg`, `usuarioRecibeMg`, `created_at`, `updated_at`) VALUES
('hyost', 'prueba', '2023-03-07 08:00:49', '2023-03-07 08:00:49'),
('pepe', 'hyost', '2023-03-07 12:23:36', '2023-03-07 12:23:36'),
('pepe', 'tturner', '2023-03-07 12:23:45', '2023-03-07 12:23:45'),
('prueba', 'alexandria.botsford', '2023-03-01 08:10:22', '2023-03-01 08:10:22'),
('prueba', 'cathrine.hane', '2023-03-07 09:25:35', '2023-03-07 09:25:35'),
('prueba', 'hyost', '2023-03-01 08:09:40', '2023-03-01 08:09:40');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_13_162555_create_ciudades_table', 1),
(6, '2023_02_14_104850_create_hobbies_table', 1),
(7, '2023_02_14_105656_create_usuariohobbie_table', 1),
(8, '2023_02_14_122656_create_megustas_table', 1),
(9, '2023_03_01_081929_create_contacta_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nac` date NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `preferencia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellido`, `usuario`, `password`, `imagen`, `email`, `genero`, `telefono`, `ciudad`, `fecha_nac`, `edad`, `preferencia`, `created_at`, `updated_at`) VALUES
(1, 'Prueba', 'Schroeder', 'prueba', '123456789', '0SwmvTqcZu1Nudw5oY525L9UGag5cqOAQ3OW7AtU.jpg', 'prueba@gmail.com', 'Hombre', 723976975, 'Barcelona', '1984-06-21', 80, 'Hombre', '2023-03-01 07:27:56', '2023-03-07 11:53:11'),
(2, 'admin', 'reilly', 'admin', 'admin1234', 'usuarioChico.png', 'admin@admin.com', 'Mujer', 695825013, 'Granada', '1994-10-12', 23, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(3, 'louie', 'hermann', 'hyost', '],`s8Y<t=t$e>PiPv', 'am3M9wL5Ay7CS0T8w8VbB2muHMDJU9igUrxRllv6.jpg', 'qstreich@example.org', 'Hombre', 678907946, 'Ávila', '1992-09-27', 48, 'Todo', '2023-03-01 07:27:56', '2023-03-07 08:02:39'),
(4, 'bulah', 'mosciski', 'auer.geovanny', '-jmiX>ejV~.\'QJmXX0', 'usuarioChico.png', 'pkihn@example.org', 'Mujer', 782309756, 'Jaén', '1998-12-14', 81, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(5, 'sierra', 'murazik', 'hilma75', 'X/q\'b*{yf[]Mn\\rv`', 'usuarioChica.png', 'ortiz.clifford@example.net', 'Otro', 792272421, 'Córdoba', '1978-02-18', 40, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(6, 'freddie', 'windler', 'bartoletti.dee', 'UojP^kB', 'usuarioOtro.png', 'tgutmann@example.net', 'Hombre', 618824298, 'Salamanca', '2003-02-28', 39, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(7, 'kaela', 'labadie', 'ryundt', 'v7/kQfP8<', 'usuarioChica.png', 'alize10@example.net', 'Mujer', 646782456, 'Madrid', '1978-01-02', 65, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(8, 'jerad', 'braun', 'aylin89', '7(]bwj>R}cnGI<9m', 'usuarioChica.png', 'stanley.orn@example.com', 'Mujer', 773200654, 'Barcelona', '1988-10-23', 70, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(9, 'elyssa', 'zieme', 'tpowlowski', '*eUL`Cetg{qjR:G2cED', 'usuarioOtro.png', 'heller.wade@example.org', 'Otro', 643342319, 'Valencia', '1970-01-04', 31, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(10, 'mitchell', 'jast', 'berry.watsica', ',x:ie^4qH-', 'usuarioOtro.png', 'alexandre.mcglynn@example.net', 'Hombre', 777486748, 'Jaén', '2002-04-25', 72, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(11, 'moshe', 'vandervort', 'seth98', '\\B&oB3XO@', 'usuarioOtro.png', 'ledner.alexanne@example.net', 'Hombre', 718849038, 'Cádiz', '1972-03-17', 35, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(12, 'mable', 'bernhard', 'alexandria.botsford', '5PU<J}', 'usuarioOtro.png', 'macie.gottlieb@example.com', 'Mujer', 797834243, 'Valencia', '1986-03-24', 60, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(13, 'wilford', 'strosin', 'kamron48', 'A[]qIuil4', 'usuarioChico.png', 'anderson.annetta@example.com', 'Mujer', 773003803, 'Teruel', '1973-01-08', 30, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(14, 'kathlyn', 'wolf', 'ceffertz', 'x(z{A6u4omKsly', 'usuarioChico.png', 'quinn.toy@example.com', 'Otro', 779400114, 'Granada', '1997-07-14', 34, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(15, 'kitty', 'mraz', 'alisa53', '$4j/jK=vt', 'usuarioChica.png', 'luis44@example.org', 'Otro', 736638292, 'Madrid', '2004-01-29', 55, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(16, 'martin', 'purdy', 'toy.jamar', '_fds$sT4,8~Si', 'usuarioChica.png', 'fabernathy@example.org', 'Hombre', 753723468, 'Valencia', '1983-12-18', 52, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(17, 'shanon', 'wintheiser', 'ymacejkovic', 'o$0OyKJ$8\\>D7,LQ', 'usuarioChica.png', 'naomie67@example.net', 'Mujer', 619918930, 'Córdoba', '1972-07-15', 46, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(18, 'zoe', 'mills', 'jstrosin', 'P6nEWxfEx', 'usuarioOtro.png', 'andreane.cole@example.net', 'Hombre', 651025891, 'Huelva', '1985-07-12', 35, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(19, 'carissa', 'graham', 'little.tad', 'A\\,z4Z`9q&t3b8vF7c', 'usuarioChico.png', 'jaycee.johnson@example.net', 'Mujer', 627013175, 'Salamanca', '1999-01-09', 66, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(20, 'tressa', 'jones', 'tturner', '^SWZ3th\'?!kr7t~o..eW', 'usuarioOtro.png', 'tom.larson@example.net', 'Otro', 654411596, 'Teruel', '1982-07-08', 22, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(21, 'cooper', 'graham', 'gleichner.sim', 'Tjzr@FYSLNnYnoM|WW9t', 'usuarioChico.png', 'jess.robel@example.org', 'Hombre', 603545586, 'Salamanca', '2002-09-06', 33, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(22, 'herminia', 'heller', 'bgibson', ';\\]zQ6&D<NS3qncC', 'usuarioOtro.png', 'lorenz.heaney@example.org', 'Mujer', 612901895, 'Valencia', '1985-03-07', 25, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(23, 'tabitha', 'block', 'jonas.stracke', 'tb3yQV}I', 'usuarioChico.png', 'cyril.beer@example.net', 'Hombre', 770954107, 'Valencia', '1991-03-05', 31, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(24, 'stan', 'huels', 'ashton58', '<H8OER,YdY', 'usuarioChica.png', 'carole14@example.com', 'Hombre', 704031791, 'Salamanca', '1970-06-13', 86, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(25, 'maeve', 'hartmann', 'grant.eryn', '/sm:&bwP}qC1[k@vW2', 'usuarioChica.png', 'kali.bruen@example.org', 'Otro', 780250025, 'León', '1997-06-30', 70, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(26, 'blaze', 'mcclure', 'mccullough.birdie', '{8%PM_jK|=)V-}B.~(', 'usuarioChico.png', 'olittle@example.net', 'Mujer', 657858685, 'Sevilla', '1981-12-26', 57, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(27, 'palma', 'lehner', 'cathrine.hane', '$,jPj{5MI:k^R', 'EzsXWpHjgHd0fou2GbTU4QjAk7xvXSJYfmX66lGJ.png', 'jamar58@example.org', 'Mujer', 636256307, 'Barcelona', '1986-11-03', 52, 'Todo', '2023-03-01 07:27:56', '2023-03-07 08:09:28'),
(28, 'sarina', 'mckenzie', 'ryleigh60', 'J@3Zk\\<6,j|', 'usuarioOtro.png', 'gage11@example.net', 'Hombre', 741689641, 'Huelva', '1990-07-08', 66, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(29, 'raleigh', 'mayer', 'roberta96', 'n7n[x..G', 'usuarioOtro.png', 'reymundo.haley@example.com', 'Otro', 638072805, 'Valencia', '1978-10-31', 68, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(30, 'kelsie', 'hermann', 'savanah.miller', '|`9csV35snJf', 'usuarioChica.png', 'sonny.ledner@example.org', 'Hombre', 798769508, 'Ávila', '1989-03-26', 38, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(31, 'brad', 'kirlin', 'kshlerin.gennaro', '^#!uOx9', 'usuarioChica.png', 'kuphal.billie@example.net', 'Mujer', 739343649, 'Toledo', '1971-02-02', 44, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(32, 'jules', 'daniel', 'ebartoletti', 'f9+*f}w3.c4#kY7Bv9hN', 'usuarioChico.png', 'cali93@example.net', 'Hombre', 613615508, 'Jaén', '1996-06-20', 33, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(33, 'ahmad', 'wiegand', 'mathilde.lindgren', '7TQNS5#t[#KkC', 'usuarioChico.png', 'magdalen14@example.org', 'Hombre', 767540786, 'Cádiz', '1984-03-01', 89, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(34, 'ivah', 'pacocha', 'oreichert', 'y7@wGzgSRAx', 'usuarioChica.png', 'emelie93@example.net', 'Hombre', 659510760, 'Valencia', '1990-12-26', 57, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(35, 'betty', 'davis', 'bins.gerhard', 'vl7:uV', 'usuarioOtro.png', 'serenity52@example.com', 'Mujer', 685772915, 'Salamanca', '1990-06-16', 21, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(36, 'kallie', 'hintz', 'braden04', '!|~ew]\\', 'usuarioChico.png', 'iconsidine@example.net', 'Otro', 665021489, 'Teruel', '1981-01-16', 41, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(37, 'kelly', 'klein', 'vrippin', 'p!|?i/bp3.)_', 'usuarioChica.png', 'germaine.oreilly@example.com', 'Otro', 679814535, 'Barcelona', '1978-11-06', 89, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(38, 'della', 'kulas', 'raleigh.hill', '\'Ow#+AQVG&6<|%P?', 'usuarioOtro.png', 'wisoky.raina@example.com', 'Otro', 611870429, 'Valencia', '1979-03-15', 24, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(39, 'micheal', 'kessler', 'ksipes', '%.Z>yFh', 'usuarioChica.png', 'maida82@example.org', 'Otro', 668384475, 'Córdoba', '1994-12-12', 69, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(40, 'watson', 'howell', 'neva63', '9qx4*7Q6>/MV|%;2v$Y', 'usuarioChico.png', 'vernice69@example.net', 'Hombre', 656286667, 'Salamanca', '1979-11-22', 47, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(41, 'grant', 'turcotte', 'kcremin', 'y;GPS\"%', 'usuarioOtro.png', 'bayer.kelsi@example.org', 'Hombre', 731773379, 'Huelva', '1996-05-01', 47, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(42, 'tyreek', 'mertz', 'fred76', 'aXGN+:E=u-a%R~/-O', 'usuarioChica.png', 'dubuque.winston@example.com', 'Otro', 711574210, 'Huelva', '1998-11-19', 75, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(43, 'ruben', 'bergnaum', 'ilowe', '1<(7oXljc??~<)ak^{\"&', 'usuarioOtro.png', 'marquardt.isaac@example.com', 'Otro', 707800644, 'Granada', '1999-06-30', 85, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(44, 'libby', 'wiza', 'auer.rodger', 'He|Mpz)q2$g8@C@;\'', 'usuarioChica.png', 'awolf@example.com', 'Mujer', 636175121, 'Badajoz', '1981-05-26', 74, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(45, 'christa', 'pollich', 'frida.runte', '8>L,e6dOiDd!th;[cf', 'usuarioChico.png', 'ubogisich@example.org', 'Otro', 638718166, 'Madrid', '2000-02-21', 23, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(46, 'quentin', 'wolff', 'luella29', 'D(2Ac;J\\1CM@^Nk\"', 'usuarioOtro.png', 'schultz.lea@example.com', 'Otro', 640483725, 'Sevilla', '2002-03-17', 52, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(47, 'odessa', 'sawayn', 'xpfannerstill', 'YzZWXNOq!vNR>x', 'usuarioOtro.png', 'marjorie.roob@example.net', 'Mujer', 720675951, 'Cádiz', '1970-12-14', 52, 'Mujer', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(48, 'abagail', 'stark', 'mayert.bo', '}~*S|-\"0zmDj', 'usuarioChica.png', 'veda.raynor@example.net', 'Otro', 708959667, 'Granada', '1978-04-13', 18, 'Todo', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(49, 'emil', 'littel', 'roberts.alek', ')Ry)g^51', 'usuarioOtro.png', 'raul37@example.net', 'Mujer', 700379157, 'Cádiz', '1985-12-24', 58, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(50, 'milford', 'koepp', 'hermiston.aurelie', '\'7UCqm)0}T>OK_K', 'usuarioChica.png', 'sallie.hagenes@example.org', 'Mujer', 681952033, 'Toledo', '1975-10-07', 80, 'Hombre', '2023-03-01 07:27:56', '2023-03-01 07:27:56'),
(51, 'Carmen', 'Yelmo', 'carmen1234', 'carmen1234', 'usuarioChico.png', 'carmen@gmail.com', 'Hombre', 425143552, 'Madrid', '2018-06-07', 5, 'Hombre', '2023-03-07 11:40:31', '2023-03-07 11:54:45'),
(53, 'Detodo0', 'Remate', 'pepe', '12345678', '6VWAXYdYkCllSmC0aw8vvW1sOaiaIt7zemAHdOr5.jpg', 'jamar58@gmail.com', 'Hombre', 3434343, NULL, '2006-10-12', 17, 'Hombre', '2023-03-07 12:22:25', '2023-03-07 12:29:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariohobbie`
--

CREATE TABLE `usuariohobbie` (
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuariohobbie`
--

INSERT INTO `usuariohobbie` (`usuario`, `hobbie`, `created_at`, `updated_at`) VALUES
('prueba', 'deporte', NULL, NULL),
('prueba', 'Música', '2023-03-07 12:13:51', '2023-03-07 12:13:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacta`
--
ALTER TABLE `contacta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `megustas`
--
ALTER TABLE `megustas`
  ADD PRIMARY KEY (`usuarioDaMg`,`usuarioRecibeMg`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_usuario_unique` (`usuario`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `contacta`
--
ALTER TABLE `contacta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;
-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2023 a las 18:10:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `proyectolaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuarioManda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuarioRecibe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mensajes_usuariomanda_unique` (`usuarioManda`),
  ADD UNIQUE KEY `mensajes_usuariorecibe_unique` (`usuarioRecibe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;
