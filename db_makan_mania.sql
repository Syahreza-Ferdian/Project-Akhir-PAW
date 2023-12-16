-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 02:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_makan_mania`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nama_kategori`) VALUES
(1, 'Appetizer'),
(2, 'Main Course'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_chef` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`id`, `id_chef`, `nama`, `picture`, `jabatan`, `short_desc`, `email`, `instagram`, `experience`) VALUES
(1, '1', 'Juna', 'Chef1.jpg', 'Head Chef', 'Experienced chef with a passion for culinary arts.', 'juna1@example.com', 'junaa_1', '10+ years in the culinary industry'),
(2, '2', 'Arnold', 'Chef2.jpg', 'Sous Chef', 'Creative chef specializing in fusion cuisine.', 'arnold2@example.com', 'arnoold_2', '8+ years in the culinary industry'),
(3, '3', 'Renatta', 'Chef3.jpg', 'Pastry Chef', 'Talented pastry chef with a love for desserts.', 'renatta3@example.com', 'renattaa_3', '12+ years in the culinary industry'),
(4, '4', 'Evan Mattew', 'Chef4.jpg', 'Grill Chef', 'Expert in grilling and barbecue techniques.', 'evaann_4@example.com', 'evaann.4', '9+ years in the culinary industry'),
(5, '5', 'Dan Rafalin', 'Chef5.jpg', 'Vegetarian Chef', 'Passionate about creating delicious vegetarian dishes.', 'rafalindan5@example.com', 'rafalin_5', '7+ years in the culinary industry'),
(6, '6', 'Diane Clarkson', 'Chef6.jpg', 'Seafood Chef', 'Specializes in preparing mouthwatering seafood dishes.', 'dianee.c_06@example.com', 'dianee.c.6', '11+ years in the culinary industry'),
(7, '7', 'Avroko', 'Barista1.jpg', 'Barista', 'Skilled barista with expertise in coffee brewing.', 'avroko7@example.com', 'aavrokoo.07', '5+ years in the coffee industry'),
(8, '8', 'Bob', 'Barista2.jpg', 'Barista', 'Passionate about creating delightful coffee experiences.', 'bob_08@example.com', 'bobb08', '6+ years in the coffee industry'),
(9, '9', 'Gabrielle', 'Barista3.jpg', 'Barista', 'Crafting amazing coffee beverages with precision.', 'gabbb09@example.com', 'gabri09', '7+ years in the coffee industry'),
(10, '10', 'Sun Gyun', 'Barista4.jpg', 'Barista', 'Enthusiastic barista with a love for coffee art.', 'leesungyun10@example.com', 'sungyun-10', '8+ years in the coffee industry'),
(11, '11', 'Suho', 'Barista5.jpg', 'Barista', 'Creating coffee masterpieces with a touch of creativity.', 'suho11@example.com', 'suhoo_11', '9+ years in the coffee industry'),
(12, '12', 'Kang Jun', 'Barista6.jpg', 'Barista', 'Dedicated to delivering the perfect cup of coffee every time.', 'kangjun@example.com', 'seo_kang.joon.12', '10+ years in the coffee industry');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `NOMOR_MEJA` bigint(20) UNSIGNED NOT NULL,
  `JUMLAH_KURSI` int(11) NOT NULL,
  `TERISI` tinyint(4) NOT NULL DEFAULT 0,
  `TANGGAL` date DEFAULT NULL,
  `JAM` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`NOMOR_MEJA`, `JUMLAH_KURSI`, `TERISI`, `TANGGAL`, `JAM`, `created_at`, `updated_at`) VALUES
(1, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(2, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(3, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(4, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(5, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(6, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(7, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(8, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(9, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(10, 2, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(11, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(12, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(13, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(14, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(15, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(16, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(17, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(18, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(19, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(20, 4, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(21, 6, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(22, 6, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(23, 6, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(24, 6, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(25, 6, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(26, 8, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(27, 8, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(28, 8, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(29, 8, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07'),
(30, 8, 0, NULL, NULL, '2023-12-16 07:53:07', '2023-12-16 07:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `tags` varchar(255) NOT NULL,
  `long_desc` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `short_desc`, `id_kategori`, `tags`, `long_desc`, `picture`, `harga`) VALUES
(1, 'Crispy Shrimp Delight', 'Udang segar yang dilapisi tepung renyah, disajikan dengan saus mayo special.', 1, 'Seafood, Crispy, Appetizer, Fusion', 'Crispy Shrimp Delight adalah hidangan pembuka yang memukau dengan kombinasi udang segar yang dicelupkan dalam adonan tepung renyah. Disajikan dengan saus mayo special yang memberikan sentuhan unik, hidangan ini menyajikan perpaduan cita rasa yang menggugah selera. Cocok untuk pencinta makanan laut yang menginginkan pengalaman kuliner yang istimewa.', 'appetizer/menu1.jpg', 65000),
(2, 'Caprese Salad Skewers', 'Tomat cherry, mozzarella, dan basil segar disusun dalam tusukan, disiram dengan balsamic glaze.', 1, 'Salad, Caprese, Skewers, Vegetarian', 'Caprese Salad Skewers menghadirkan kelezatan salad Caprese dalam bentuk yang lebih menyenangkan. Tomat cherry yang manis, potongan mozzarella yang lembut, dan daun basil segar disusun dalam tusukan cantik, kemudian disiram dengan balsamic glaze yang kaya rasa. Hidangan ini memberikan kesegaran dan kenikmatan untuk memulai hidangan utama Anda.', 'appetizer/menu2.jpg', 50000),
(3, 'Asian Dumpling Sampler', 'Dimsum beraneka rasa dengan saus pedas dan kecap khas Asia.', 1, 'Dimsum, Asian, Sampler, Spicy', 'Nikmati keanekaragaman cita rasa Asia dengan Asian Dumpling Sampler. Dimsum lembut yang beraneka rasa, disajikan dengan saus pedas dan kecap khas Asia, menciptakan pengalaman makan yang memuaskan. Cocok untuk mereka yang menyukai rasa autentik Asia dalam satu hidangan pembuka yang lezat.', 'appetizer/menu3.jpg', 55000),
(4, 'Stuffed Mushrooms with Herb Cream Cheese', 'Jamur yang diisi dengan keju krim herbal, panggang hingga kecoklatan.', 1, 'Mushroom, Cream Cheese, Stuffed, Baked', 'Stuffed Mushrooms with Herb Cream Cheese adalah hidangan pembuka yang menggoda selera dengan kombinasi jamur yang diisi dengan keju krim herbal lembut. Dipanggang hingga kecoklatan, hidangan ini memberikan kelezatan yang memanjakan lidah. Cocok sebagai pilihan pembuka untuk pecinta keju dan jamur.', 'appetizer/menu4.jpg', 60000),
(5, 'Crispy Calamari', 'Cumi-cumi segar yang dilapisi tepung renyah, disajikan dengan saus tartar dan irisan lemon.', 1, 'Seafood, Crispy, Deep-fried, Appetizer', 'Crispy Calamari adalah hidangan pembuka yang memikat selera dengan tekstur renyah luar biasa. Cumi-cumi segar dicelupkan dalam tepung spesial sebelum digoreng hingga keemasan. Disajikan dengan saus tartar yang lezat dan irisan lemon segar untuk menambah kesegaran. Hidangan ini adalah pilihan sempurna bagi pecinta hidangan laut yang menginginkan kelezatan yang tidak terlupakan.', 'appetizer/menu5.jpg', 65000),
(6, 'Avocado Bruschetta', 'Roti bruschetta yang dipanggang dengan lapisan avocado creamy, tomat cherry, dan taburan keju parmesan.', 1, 'Bruschetta, Avocado, Fresh, Vegetarian', 'Avocado Bruschetta adalah pilihan pembuka yang menyegarkan dan inovatif. Potongan roti bruschetta yang dipanggang hingga keemasan diselimuti dengan lapisan avocado creamy yang lembut. Ditambah dengan tomat cherry yang segar dan taburan keju parmesan yang gurih, menciptakan harmoni rasa yang tak tertandingi. Hidangan ini cocok untuk pencinta avocado dan cita rasa yang ringan.', 'appetizer/menu6.jpg', 55000),
(7, 'Spinach and Artichoke Dip', 'Campuran bayam dan artichoke yang dipanggang dengan keju cremay, disajikan dengan keripik tortilla.', 1, 'Dip, Spinach, Artichoke, Creamy', 'Spinach and Artichoke Dip adalah hidangan pembuka yang menggoda selera dengan kelembutan dan kelezatan. Campuran bayam yang segar dan artichoke yang lembut dipanggang dengan keju creamy hingga mencapai konsistensi yang sempurna. Disajikan dengan keripik tortilla yang renyah, hidangan ini memberikan pengalaman menyeluruh yang memuaskan bagi para pecinta rasa creamy dan tekstur yang beragam.', 'appetizer/menu7.webp', 60000),
(8, 'Grilled Salmon Teriyaki', 'Fillet salmon panggang dengan saus teriyaki, disajikan dengan nasi dan sayuran.', 2, 'Salmon, Grilled, Teriyaki, Japanese', 'Grilled Salmon Teriyaki adalah hidangan utama yang memukau dengan fillet salmon berkualitas tinggi yang dipanggang sempurna dengan saus teriyaki lezat. Disajikan dengan nasi yang pulen dan medley sayuran segar, hidangan ini menggabungkan cita rasa Jepang yang autentik dengan kesehatan dan kelezatan.', 'main_course/menu1.webp', 120000),
(9, 'Truffle Mushroom Risotto', 'Risotto creamy dengan campuran jamur dan aroma truffle yang khas.', 2, 'Risotto, Truffle, Mushroom, Creamy', 'Truffle Mushroom Risotto adalah hidangan klasik yang diperbarui dengan sentuhan mewah truffle. Risotto creamy dengan campuran jamur yang beragam menciptakan harmoni cita rasa yang luar biasa. Hidangan ini cocok untuk pencinta risotto dan penggemar truffle yang mencari pengalaman kuliner istimewa.', 'main_course/menu2.webp', 85000),
(10, 'Vegetarian Mediterranean Wrap', 'Wrap vegetarian dengan hummus, sayuran, dan feta, disajikan dengan salsa segar.', 2, 'Vegetarian, Wrap, Mediterranean, Healthy', 'Vegetarian Mediterranean Wrap adalah pilihan sehat dan lezat untuk hidangan utama. Wrap berisi hummus yang creamy, beragam sayuran segar, dan keju feta yang gurih. Disajikan dengan salsa segar untuk tambahan kesegaran. Cocok untuk para pecinta makanan vegetarian dan peminat cita rasa Mediterania.', 'main_course/menu3.jpeg', 65000),
(11, 'Chicken Parmesan', 'Dada ayam goreng dengan saus marinara dan keju mozzarella, disajikan dengan spaghetti.', 2, 'Italian, Chicken, Parmesan, Pasta', 'Chicken Parmesan adalah hidangan klasik yang memukau selera. Dada ayam yang digoreng dengan sempurna disajikan dengan saus marinara yang kaya dan dilapisi dengan keju mozzarella leleh. Disajikan di atas spaghetti yang dimasak al dente, hidangan ini adalah kombinasi yang sempurna dari cita rasa yang gurih dan lezat.', 'main_course/menu4.jpg', 85000),
(12, 'Mediterranean Stuffed Chicken', 'Dada ayam diisi dengan campuran mediterania, dipanggang hingga keemasan.', 2, 'Ayam, Mediterania, Panggang, Gurih', 'Hidangan utama ini, Mediterranean Stuffed Chicken, menghadirkan dada ayam yang diisi dengan campuran Mediterania yang kaya akan rasa. Dipanggang hingga keemasan, setiap gigitan memperkenalkan Anda pada kombinasi unik rasa rempah-rempah dan kelembutan daging ayam yang sempurna.', 'main_course/menu5.jpg', 220000),
(13, 'Beef Wellington', 'Daging sapi filet mignon yang dibungkus dengan adonan puff pastry, disajikan dengan saus jamur krim.', 2, 'Beef, Puff Pastry, Elegant, Mushroom', 'Rasakan kelezatan filet mignon dalam Beef Wellington kami. Daging sapi berkualitas tinggi yang dibungkus dengan hati-hati oleh lapisan adonan puff pastry yang renyah, kemudian dipanggang hingga mencapai kesempurnaan. Disajikan dengan saus jamur krim yang lezat, setiap gigitan adalah pengalaman kuliner yang tak terlupakan, menggabungkan cita rasa yang kaya dan tekstur yang memikat.', 'main_course/menu6.jpg', 200000),
(14, 'Molten Chocolate Lava Cake', 'Kue cokelat lembut dengan inti cair, disajikan dengan es krim vanilla.', 3, 'Chocolate, Lava Cake, Dessert, Indulgent', 'Molten Chocolate Lava Cake adalah puncak kenikmatan bagi pencinta cokelat. Kue cokelat lembut dengan inti cair yang meluber, disajikan dengan es krim vanilla yang lembut. Hidangan ini adalah penutup yang sempurna untuk memuaskan hasrat manis Anda.', 'dessert/menu1.jpg', 45000),
(15, 'Tiramisu Delight', 'Dessert klasik tiramisu dengan lapisan kopi, keju mascarpone, dan cokelat.', 3, 'Tiramisu, Dessert, Coffee, Italian', 'Tiramisu Delight adalah hidangan penutup klasik yang memikat dengan lapisan kopi yang lembut, keju mascarpone yang creamy, dan sentuhan cokelat yang memikat. Hidangan ini membawa cita rasa Italia yang autentik ke meja makan Anda.', 'dessert/menu2.jpg', 55000),
(16, 'Berry Bliss Cheesecake', 'Cheesecake lembut dengan saus beri segar dan taburan almond.', 3, 'Cheesecake, Berry, Dessert, Nutty', 'Berry Bliss Cheesecake adalah hidangan penutup yang menyenangkan dengan cheesecake lembut yang dipadu dengan saus beri segar dan taburan almond yang renyah. Kesegaran beri dan kelezatan cheesecake menciptakan harmoni rasa yang tak terlupakan.', 'dessert/menu3.webp', 60000),
(17, 'Mango Coconut Panna Cotta', 'Panna cotta lembut dengan lapisan mangga segar dan kelapa parut.', 3, 'Panna Cotta, Mango, Coconut, Tropical', 'Mango Coconut Panna Cotta adalah hidangan penutup yang menyegarkan dengan kombinasi panna cotta lembut, lapisan mangga segar yang manis, dan kelapa parut yang memberikan sentuhan tropis. Hidangan ini adalah penutup yang ringan dan lezat untuk menutup makan malam Anda.', 'dessert/menu4.jpg', 50000),
(18, 'Dark Chocolate Mousse Tower', 'Menara mousse cokelat hitam dengan lapisan krim dan hiasan buah segar.', 3, 'Cokelat Hitam, Mousse, Krim, Buah Segar', 'Temukan kelezatan tak tertandingi dalam Dark Chocolate Mousse Tower kami. Ini adalah sebuah karya seni kuliner yang memukau, menghadirkan menara mousse cokelat hitam yang lembut dan menggoda. Setiap lapisannya, dari kelembutan mousse hingga lapisan krim yang lembut, menciptakan harmoni yang sempurna dari rasa dan tekstur. Hiasan buah segar di atasnya menambahkan sentuhan segar yang memukau, menciptakan pengalaman penutup yang tak terlupakan. Ini bukan hanya sekadar hidangan penutup; ini adalah sebuah perayaan keindahan dan kenikmatan kuliner yang memanjakan semua indera Anda.', 'dessert/menu5.jpg', 65000),
(19, 'Matcha Green Tea Tiramisu', 'Tiramisu dengan lapisan keju mascarpone yang dipadukan dengan matcha green tea.', 3, 'Tiramisu, Matcha, Mascarpone, Dessert', 'Jelajahi harmoni yang unik dengan Matcha Green Tea Tiramisu kami. Lapisan lembut keju mascarpone, yang menyatu dengan kekhasan matcha green tea, menciptakan kombinasi yang mengejutkan dan memikat. Setiap gigitan membawa Anda dalam perjalanan rasa yang mendalam, di mana kelembutan dan aroma teh hijau bertemu dengan cinta dan kelezatan. Ini adalah pengalaman penutup yang memuaskan, dirancang untuk mengangkat semangat dan meninggalkan kesan tak terlupakan pada selera Anda.', 'dessert/menu6.webp', 75000),
(20, 'Coconut Mango Pudding', 'Puding kelapa dengan lapisan mangga segar dan serutan kelapa panggang.', 3, 'Kelapa, Mangga, Puding, Segar', 'Sambutlah sentuhan tropis dalam Coconut Mango Pudding kami. Puding kelapa yang lembut, seperti pelukan lembut dari pulau surga, bertemu dengan lapisan mangga segar yang menyegarkan. Disertai dengan serutan kelapa panggang yang memberikan sentuhan renyah dan aroma khas, setiap sendokan menghadirkan pengalaman nikmat yang tak terlupakan. Ini adalah kombinasi yang sempurna antara kenikmatan dan ketenangan, mengundang Anda untuk merayakan keindahan rasa alami.', 'dessert/menu7.jpg', 55000),
(21, 'Pistachio Rosewater Baklava', 'Lapisan phyllo dengan campuran pistachio, madu, dan essence rosewater.', 3, 'Pistachio, Baklava, Madu, Rosewater', 'Hadirkan kekayaan dan keindahan rasa dalam setiap gigitan Pistachio Rosewater Baklava kami. Lapisan phyllo yang tipis dan renyah menjadi wadah untuk campuran pistachio yang kaya, madu yang lembut, dan essence rosewater yang menghadirkan keharuman bunga yang memukau. Dengan setiap gigitan, Anda diundang untuk merasakan kelezatan dari timur tengah yang otentik. Ini bukan hanya hidangan penutup, melainkan perjalanan sensorik yang membawa Anda ke daerah yang jauh dan eksotis.', 'dessert/menu8.jpg', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `menu_review`
--

CREATE TABLE `menu_review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `poster_name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_review`
--

INSERT INTO `menu_review` (`id`, `posted_at`, `poster_name`, `message`, `menu_id`, `rating`) VALUES
(1, '2023-12-16 07:53:08', 'Syahreza', 'Sangat enak', 1, '5'),
(2, '2023-12-16 07:53:08', 'Shaa', 'Sangat enak', 1, '5'),
(3, '2023-12-16 07:53:08', 'Syahreza', 'Sangat enak', 2, '5');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_12_10_062759_create_category_table', 1),
(3, '2023_12_10_063946_create_menu_table', 1),
(4, '2023_12_10_075101_create_menu_review_table', 1),
(5, '2023_12_14_144141_create_chef_table', 1),
(6, '2023_12_15_004637_create_feedback_table', 1),
(7, '2023_12_15_004713_create_question_table', 1),
(8, '2023_12_16_065507_create_meja_table', 1),
(9, '2023_12_16_065547_create_reservations_table', 1),
(10, '2023_12_16_144030_create_orders_table', 1),
(11, '2023_12_16_144110_create_transactions_table', 1),
(12, '2023_12_16_144122_create_transaction_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `nomor_meja` bigint(20) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, beatae.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nam ea optio reiciendis illo, voluptatem qui quis quas cum mollitia.'),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, beatae.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nam ea optio reiciendis illo, voluptatem qui quis quas cum mollitia.'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, beatae.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nam ea optio reiciendis illo, voluptatem qui quis quas cum mollitia.'),
(4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, beatae.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nam ea optio reiciendis illo, voluptatem qui quis quas cum mollitia.');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `ID_RESERVASI` bigint(20) UNSIGNED NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `NO_TELP` varchar(255) NOT NULL,
  `JUMLAH_ROMBONGAN` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM` time NOT NULL,
  `NOMOR_MEJA` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `nomor_meja` bigint(20) UNSIGNED NOT NULL,
  `total_price` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`NOMOR_MEJA`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `menu_review`
--
ALTER TABLE `menu_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_review_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ID_RESERVASI`),
  ADD KEY `reservations_nomor_meja_foreign` (`NOMOR_MEJA`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_menu_id_foreign` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `NOMOR_MEJA` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menu_review`
--
ALTER TABLE `menu_review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `ID_RESERVASI` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `category` (`id`);

--
-- Constraints for table `menu_review`
--
ALTER TABLE `menu_review`
  ADD CONSTRAINT `menu_review_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_nomor_meja_foreign` FOREIGN KEY (`NOMOR_MEJA`) REFERENCES `meja` (`NOMOR_MEJA`);

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
