-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 06, 2024 lúc 12:49 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'Điện thoại', '2024-08-02 07:52:48', '2024-08-02 07:52:48'),
(8, 'Laptop', '2024-08-02 07:53:01', '2024-08-02 08:09:28'),
(9, 'Đồng hồ', '2024-08-02 07:53:12', '2024-08-02 07:53:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_17_122710_create_categories_table', 1),
(6, '2024_07_17_122720_create_products_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `created_at`, `updated_at`, `status`, `token`) VALUES
(1, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 06:56:45', '2024-08-05 06:56:45', 0, NULL),
(2, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:02:38', '2024-08-05 07:02:38', 0, NULL),
(3, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:05:39', '2024-08-05 07:05:39', 0, NULL),
(4, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:08:38', '2024-08-05 07:08:38', 0, NULL),
(5, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:11:13', '2024-08-05 07:11:13', 0, NULL),
(6, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:13:03', '2024-08-05 07:13:03', 0, NULL),
(7, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:13:54', '2024-08-05 07:13:54', 0, NULL),
(8, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:17:04', '2024-08-05 07:17:04', 0, NULL),
(9, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:18:27', '2024-08-05 07:18:27', 0, NULL),
(10, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:23:14', '2024-08-05 07:23:14', 0, NULL),
(11, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:23:26', '2024-08-05 07:23:26', 0, NULL),
(12, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:26:10', '2024-08-05 07:26:10', 0, NULL),
(13, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:28:51', '2024-08-05 07:28:51', 0, NULL),
(14, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:29:24', '2024-08-05 07:29:24', 0, NULL),
(15, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:29:26', '2024-08-05 07:29:26', 0, NULL),
(16, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:29:27', '2024-08-05 07:29:27', 0, NULL),
(17, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:29:29', '2024-08-05 07:29:29', 0, NULL),
(18, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:29:44', '2024-08-05 07:29:44', 0, NULL),
(19, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:29:48', '2024-08-05 07:29:48', 0, NULL),
(20, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:30:06', '2024-08-05 07:30:06', 0, NULL),
(21, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:31:29', '2024-08-05 07:31:29', 0, NULL),
(22, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:32:13', '2024-08-05 07:32:13', 0, NULL),
(23, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:32:16', '2024-08-05 07:32:16', 0, NULL),
(24, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:35:49', '2024-08-05 07:35:49', 0, NULL),
(25, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:36:06', '2024-08-05 07:36:06', 0, NULL),
(26, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:37:09', '2024-08-05 07:37:09', 0, NULL),
(27, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:38:56', '2024-08-05 07:38:56', 0, NULL),
(28, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:39:03', '2024-08-05 07:39:03', 0, NULL),
(29, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:39:17', '2024-08-05 07:39:17', 0, NULL),
(30, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:40:04', '2024-08-05 07:40:04', 0, NULL),
(31, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:41:19', '2024-08-05 07:41:19', 0, NULL),
(32, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:41:40', '2024-08-05 07:41:40', 0, NULL),
(33, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 07:42:17', '2024-08-05 07:42:17', 0, NULL),
(34, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:18:01', '2024-08-05 08:18:01', 0, 'nZoQZvfvj6Qo4OjBQnZQuT7dsWyB9GqPgKhyWZUY'),
(35, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:20:38', '2024-08-05 08:20:38', 0, 'nV9FgrZYxWJkDQoiSOBw3r5tApW5yl8xwdAHs00K'),
(36, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:22:35', '2024-08-05 08:22:35', 0, 'Hr5EjwVQnUgc5Nkt3XSx7tS461P7FMSdfw8btWrT'),
(37, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:26:06', '2024-08-05 08:26:06', 0, 'ZoNthTQEiIr7exvniyA2KlTkyioGjhr311SuSmk7'),
(38, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:30:43', '2024-08-05 08:30:43', 0, 'gzCcxlNnuTn4ebkvIPsWiMpqT9wCLsjdBD1tJRfy'),
(39, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:30:46', '2024-08-05 08:30:46', 0, 'DzoWJjuRkdozMAaqtAYZpi7VEYte7fFyv3VTNaip'),
(40, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:31:22', '2024-08-05 08:31:22', 0, 'DLVjuBi3inJI0lnJvs4Bpqhuln0GxZv6lLG18ZtC'),
(41, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:36:48', '2024-08-05 08:36:48', 0, 'EkjneBHa4hfNRtt0WQCxaTsNNFWKTKMvoXXkktGU'),
(42, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:37:18', '2024-08-05 08:37:18', 0, 'vooPaMZd7G7n6tzBeYcxd20OxSjwQHotNzOUKFhU'),
(43, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:38:02', '2024-08-05 08:38:02', 0, 'IRGCxTAbil0lkuelvBLE8zXdM6Erc7gFbGgKNnah'),
(44, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:41:54', '2024-08-05 08:41:54', 0, NULL),
(45, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:42:19', '2024-08-05 08:42:19', 0, NULL),
(46, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:42:39', '2024-08-05 08:42:39', 0, NULL),
(47, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:46:12', '2024-08-05 08:46:12', 0, NULL),
(48, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:46:27', '2024-08-05 08:46:27', 0, 'rv5JK1I11IxNLyf2lqqANLhjUj7GDlMmBeWyWib2'),
(49, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:49:05', '2024-08-05 08:49:05', 0, 'hJFjk4E5awjQpBpki45K21hpAk5uHUHURESvt8Oy'),
(50, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:49:39', '2024-08-05 08:49:39', 0, 'ZgJUhHdAjd6DtgWMRKEr3NGyWAnEiyPG4NSrFZ9d'),
(51, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:50:26', '2024-08-05 08:50:26', 0, 'BHWcgRa6RZC16vzHzcAv855wJkQjgWp3APjncC0f'),
(52, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:53:06', '2024-08-05 08:53:06', 0, 'GW3IRSHdLgg9xbygoHmThIbzEAgIUy5F2mPaOAG6'),
(53, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:55:28', '2024-08-05 08:55:28', 0, 'JWJL63oovF6u3AdAgQMR8VnY9c67fY6usJVwC8f8'),
(54, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:57:05', '2024-08-05 08:57:05', 0, 'RYZ8GWb7dpM1pdqRCx8jotNsX8B55VuqEYNyvwgC'),
(55, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:57:50', '2024-08-05 09:14:58', 1, NULL),
(56, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 08:58:05', '2024-08-05 08:58:05', 0, '5MBTIpakEeS6behJp4kaMHjsObYwvWxBYqD53lu6'),
(57, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 09:10:26', '2024-08-05 09:10:26', 0, 'GN1y7AG2tjbHlkyPd7b7vYk4NFdmmqg0UmtQRDtl'),
(58, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 09:11:22', '2024-08-05 09:11:22', 0, 'fsPgmEDJ0ZDlU3qe8zOtjYGCe5aHWBnY3dqfU50n'),
(59, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 09:13:26', '2024-08-05 09:13:26', 0, '7xM2w5bASYioQnfrXq3wyexiGGw4SDYllq4DfrlJ'),
(60, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 17:43:48', '2024-08-05 17:43:48', 0, '8gy8BI7OfmP3aCsXKYcDzygYC8mtNrZa18y3Eco7'),
(61, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 17:45:03', '2024-08-05 17:45:03', 0, 'Ze2BFih8PMA49HYGCfPBUWMuSTK5udwBGaHBiIqE'),
(62, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', '0852564117', 'Hà Nội', 16, '2024-08-05 17:45:07', '2024-08-05 17:45:07', 0, 'izW8qtAlyiJEveGAGYQKu99YnMj4jjVX2h772GGP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int NOT NULL,
  `products_id` bigint UNSIGNED NOT NULL,
  `quantity` tinyint NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_id`, `products_id`, `quantity`, `price`) VALUES
(22, 4, 1, 13.7),
(23, 4, 1, 13.7),
(25, 4, 1, 13.7),
(26, 4, 1, 13.7),
(30, 4, 1, 13.7),
(30, 5, 1, 13.9),
(33, 1, 1, 11.7),
(34, 1, 1, 11.7),
(35, 1, 1, 11.7),
(36, 1, 1, 11.7),
(37, 1, 1, 11.7),
(38, 1, 1, 11.7),
(39, 1, 1, 11.7),
(40, 1, 1, 11.7),
(41, 1, 1, 11.7),
(42, 1, 1, 11.7),
(43, 1, 1, 11.7),
(44, 1, 1, 11.7),
(45, 1, 1, 11.7),
(46, 23, 1, 50000),
(47, 23, 1, 50000),
(48, 23, 1, 50000),
(49, 23, 1, 50000),
(50, 23, 1, 50000),
(51, 23, 1, 50000),
(52, 23, 1, 50000),
(53, 23, 1, 50000),
(54, 23, 1, 50000),
(55, 23, 1, 50000),
(56, 23, 1, 50000),
(57, 23, 1, 50000),
(58, 23, 1, 50000),
(59, 23, 1, 50000),
(60, 24, 1, 50000),
(61, 24, 1, 50000),
(62, 24, 1, 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` double NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `categorie_id`, `image`, `created_at`, `updated_at`, `price`, `content`) VALUES
(1, 'Laudantium', 'Eius sunt et quae.', 7, 'products/66a29sYI6G96MYcxIqQQIAqNwNy5WVJxjGKYDXU5.jpg', '2024-07-17 05:42:46', '2024-08-02 07:53:35', 11.7, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(4, 'Ut iusto.', 'Dolor quod exercitationem odit sit dolor.', 7, 'products/WWjclJmibYcutmRx13pz6UoYPju78CyKBo3hrCrF.jpg', '2024-07-17 05:42:46', '2024-08-02 07:23:51', 13.7, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(5, 'Nihil id qui.', 'Veniam maxime saepe adipisci.', 7, 'products/VhCBjipkmTypQ0UiZsolTuROgQtElMJsQehyQhLo.jpg', '2024-07-17 05:42:46', '2024-08-02 07:24:02', 13.9, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(6, 'Quia eligendi.', 'Et in molestiae quasi non neque in quia.', 7, 'products/boIDPxVupmLY5hjSznTJmE6qpN0pC0OOlV6IVB68.webp', '2024-07-17 05:42:46', '2024-08-02 07:24:16', 22.99, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(7, 'Blanditiis et.', 'Dolores sunt soluta dolores dolorem.', 9, 'products/5jKaEZiu1Qgk9MqXWBOgnWbTZaMGqEjyi0XIvWHN.jpg', '2024-07-17 05:42:46', '2024-08-02 07:24:26', 33.49, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(8, 'Dolorem ut.', 'Impedit accusamus sint fugiat ut rerum ut.', 7, 'products/r0GCp8Y1489Rcl9Zi3nBo2TLgYhTHiHbcG2bjqVs.webp', '2024-07-17 05:42:46', '2024-08-02 07:24:34', 49.53, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(9, 'Deserunt.', 'Voluptatum vero quo ut rem.', 7, 'products/GXwgXVppTQ6WmEiBMal39xn2CObBLKoPVI4wONGn.webp', '2024-07-17 05:42:46', '2024-08-02 07:24:46', 4787, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(10, 'Nihil est vel.', 'Qui minima eos velit dolor.', 7, 'products/Q1V5qkdnUSmvyJY9A9PlDldwW5LNJGkm0J0jYE8U.webp', '2024-07-17 05:42:46', '2024-08-02 07:24:59', 33.91, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(11, 'Id cum et non.', 'Sit tempora sit qui amet.', 8, 'products/nGhqppU1EwSuuL3Yg3w8Sp4TVa7wg30BQLobm73d.webp', '2024-07-17 05:42:46', '2024-08-02 07:25:09', 12.5, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(12, 'Impedit.', 'Et aperiam dignissimos deleniti.', 7, 'products/xmXhlnCNv5WtLkOAXF2EKsz8a5vwyCgKzj2Oj3uJ.webp', '2024-07-17 05:42:46', '2024-08-02 07:25:22', 35.6, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(13, 'Quis qui et.', 'Pariatur commodi et nihil sint.', 7, 'products/oY4f2dg3FKEXGsc7CGvrWuJZmZvEye4SxKXNeXn6.webp', '2024-07-17 05:42:46', '2024-08-02 07:25:33', 15.9, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(14, 'Vero libero.', 'Facilis nihil autem voluptas nisi quis.', 8, 'products/d8ZpJZfkXS1GBBTMPneoSgVtl8tfkH4KZeVu7CT7.webp', '2024-07-17 05:42:46', '2024-08-02 07:25:47', 15, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(15, 'Quos nihil.', 'Id aut animi est quibusdam.dasdasdasdasdasdasdasdasdasdasd', 7, 'products/T03FIulPypUMnsPqt9gqf85LMUmYacq0QmWGrcj9.webp', '2024-07-17 05:42:46', '2024-08-02 07:26:09', 16, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(17, 'hieu-phung', 'qertwgyhreutjrxgndzbfbzdbafgb', 7, 'products/tiEQb3WrVGGyasYqwyEbWtZGpDmEvb51GJvhO4bL.webp', '2024-07-31 13:52:54', '2024-08-02 07:25:58', 20000, 'qertwgyhreutjrxgndzbfbzdbafgb'),
(18, 'hieu-phung', '2143564758u6i7okyrhfdgnbfsvd', 7, 'products/MmPVriBkSdlv82hp8Av202wclel5PnYnjj1Vmj2Q.webp', '2024-07-31 13:56:11', '2024-08-02 07:26:19', 20000, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(19, 'hieu-phung', '12342536478rewagvfadg', 7, 'products/ntQ68vGma1oI7J76CLPP4X1L4EkXCji55JWgsVIT.jpg', '2024-07-31 14:32:20', '2024-08-02 03:08:41', 20000, '134526tyu4irkotuldvas'),
(21, 'hieu-phung', 'dsafsghfjkghlj;h', 7, 'products/fPiDl863eHZWCXllo8lDpisi4lXmoQBTX4O9MYDS.jpg', '2024-07-31 15:14:12', '2024-08-02 03:08:15', 3000, 'fgshdjfkglh;j\''),
(22, 'hieu-phung', 'nrequierunrequiervvqwwwww', 7, 'products/al9PJ2N5prY2XOrrSEvpSXPQiCJ0FsXdvbfZtXlg.jpg', '2024-08-02 03:31:53', '2024-08-02 03:34:34', 50000, 'ssssssssssfsgggggggggggggggggggggggg'),
(23, 'hieu-phung', 'iPhone 15 Pro Max', 7, 'products/SR8IYJxGiDxY7MCgRz4e2BNtOAOfqhBoAUzYEotj.webp', '2024-08-02 07:55:24', '2024-08-02 07:55:24', 50000, 'iPhone 15 Pro Max sở hữu màn hình Super Retina XDR OLED 6.7 inches với độ phân giải 2796 x 1290 pixels, cung cấp trải nghiệm hình ảnh sắc nét, chân thực. So với các phiên bản tiền nhiệm, thế hệ iPhone 15 bản Pro Max đảm bảo mang tới hiệu năng mạnh mẽ với sự hỗ trợ của chipset Apple A17 Pro, cùng bộ nhớ ấn tượng. Đặc biệt hơn, điện thoại iPhone 15 ProMax mới này còn được đánh giá cao với camera sau 48MP và camera trước 12MP, hỗ trợ chụp ảnh với độ rõ nét cực đỉnh'),
(24, 'iphone 15', 'dàegsrhjtd', 7, 'products/wJPxX0U40VZT6ujW8JBHjYJVmULdQ5P8L1MTj60K.jpg', '2024-08-05 17:42:59', '2024-08-05 17:42:59', 50000, 'àdghfsjg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int NOT NULL,
  `coupon_name` varchar(150) NOT NULL,
  `coupon_time` int NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_condition` int NOT NULL,
  `coupon_number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_time`, `coupon_code`, `coupon_condition`, `coupon_number`) VALUES
(2, 'Giảm giá 27/7', 10, 'PH35301', 1, 10),
(3, 'Giảm giá 2/9', 5, 'QK29', 2, 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(12, 'hieu-phung', 'phieu9452@gmail.com', '', 0, '2024-07-27 11:54:48', '$2y$12$Khc5/PvMezDzmqoQCPRVDOR9qIs04aZB8Xi0KubqL/zlatrWNg3v.', NULL, '2024-07-27 11:54:37', '2024-07-27 11:54:48', 'admin'),
(16, 'hieu-phung', 'hieuptph35301@fpt.edu.vn', 'Hà Nội', 852564117, '2024-08-05 08:55:11', '$2y$12$iG4GtGeR3wwm4cdxAZ75x./ibaA5DaIcqHVvuA0Vhxgo7/DpFIJE.', NULL, '2024-08-05 03:46:46', '2024-08-05 08:55:11', 'member');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`products_id`),
  ADD KEY `products_id` (`products_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categorie_id_foreign` (`categorie_id`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
