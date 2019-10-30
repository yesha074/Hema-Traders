-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 12:12 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hematraders`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'yeshashah@gmail.com', 'yeshashah'),
(2, 'palak@gmail.com', 'palakgandhi');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` text NOT NULL,
  `brand_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `brand_image`) VALUES
(1, 'Ritu', 'ritulogo.jpg'),
(2, 'Shaan', 'shaanlogo.jpg'),
(3, 'Apex', 'apexlogo.jpg'),
(4, 'Hallmark', 'hallmarklogo.jpg'),
(5, 'Nestwell', 'nestwellLogo.jpg'),
(6, 'Shakti', 'shaktilogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Kitchenware'),
(2, 'Plasticware'),
(3, 'Cleaning Accesories');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_fname` varchar(100) NOT NULL,
  `customer_lname` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_cpass` varchar(100) NOT NULL,
  `customer_contact` int(100) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_pass`, `customer_cpass`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(4, 'yesha', 'shah', 'yesha074@gmail.com', 'yesha', 'yesha', 2147483647, 'relief-road,ahemedabad-01', 'tajmahal.jpg', 0),
(8, 'palak', 'gandhi', 'palakgandhi@gmail.com', 'palakgandhi', 'palakgandhi', 2147483647, 'moti-khatrivad,ahemedabad', 'statueoflib.jpg', 0),
(9, 'yesha', 'shah', 'yesha074@gmail.com', 'yeshayesha123', 'yeshayesha123', 2147483647, 'ahemedabad', '25 LTR..jpg', 0),
(10, 'yesha', 'shah', 'yesha@gmail.com', 'yeshayesha123', 'yeshayesha123', 2147483647, 'ahemedabad', '18 LTR.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `total_products`, `order_date`, `order_status`) VALUES
(68, 4, 2000, 1812662454, 1, '2018-04-25 15:24:22', 'Complete'),
(69, 4, 1000, 696337653, 1, '2018-04-25 15:25:13', 'Pending'),
(70, 4, 1500, 999492466, 1, '2018-04-25 15:26:27', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE `feedback_master` (
  `FeedbackId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`FeedbackId`, `CustomerId`, `Feedback`, `Date`) VALUES
(1, 1, 'Nice Clothes i got from your website. Thank You', '2014-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `offer_master`
--

CREATE TABLE `offer_master` (
  `OfferId` int(11) NOT NULL,
  `Offer` varchar(50) NOT NULL,
  `Detail` varchar(200) NOT NULL,
  `Valid` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_master`
--

INSERT INTO `offer_master` (`OfferId`, `Offer`, `Detail`, `Valid`) VALUES
(2, 'Buy 2 Get 1 Free', 'On a Purchase of 2 Branded Shirt Get 1 Tshirt Free ', '2014-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(13, 715588460, 620, 'Easypaisa/UBL Omni', 23232, 445, '2018-03-21'),
(14, 1839850777, 100, 'Easypaisa/UBL Omni', 37281738, 526356, '2018-03-24'),
(15, 1966515240, 60, 'Easypaisa/UBL Omni', 4234234, 2311, '2018-03-24'),
(16, 348838173, 150, 'Easypaisa/UBL Omni', 372683, 9829898, '2018-03-24'),
(17, 36613449, 260, 'Easypaisa/UBL Omni', 989374947, 34673647, '2018-03-24'),
(18, 358271250, 310, 'Paypal', 21872912, 73672647, '2018-03-24'),
(19, 1061531060, 300, 'Bank Transfer', 2147483647, 2147483647, '2018-03-24'),
(20, 1622099894, 100, 'Western Union', 26767, 22736, '2018-03-24'),
(21, 1468201494, 200, 'Paypal', 2232333, 7487883, '2018-03-24'),
(22, 1812662454, 2000, 'Paypal', 213123, 323, '2018-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(68, 4, 1812662454, 19, 10, 'Complete'),
(69, 4, 696337653, 23, 20, 'Pending'),
(70, 4, 999492466, 63, 15, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL,
  `status` text NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`, `status`, `qty`) VALUES
(20, 1, 1, '2018-04-25 15:12:21.998404', 'Atta Maker', 'NESTWELL.jpg', 'RITU (2).jpg', 'RITU.jpg', 400, 'Atta maker with best quality as shown.', 'Atta maker, ritu, kitchenware', 'on', 70),
(21, 2, 1, '2018-04-25 15:12:29.593692', 'Bathroom set', 'RITU (1).jpg', 'RITU 7.jpg', 'RITU 5.jpg', 300, 'Bathroom set with best quality as shown.', 'bathroom set, ritu, plasticware', 'on', 100),
(22, 2, 1, '2018-04-25 15:12:36.798802', 'Bucket', '5 LTR..jpg', '18 LTR.jpg', '25 LTR..jpg', 100, 'Bucket with best quality as shown.', 'bucket, ritu, plastic ware', 'on', 300),
(23, 1, 1, '2018-04-25 15:12:44.045672', 'Chess Grater', '54c1e11d64045.jpg', 'IMG_6066.JPG', 'J-185.jpg', 50, 'Chess Grater with best quality as shown.', 'chess grater, ritu,kitchen ware', 'on', 80),
(24, 1, 5, '2018-04-25 15:12:56.502205', 'Chopping Board', 'APEX 2.jpg', 'RITU (1).jpg', 'RITU (2).jpg', 300, 'chopping board with best quality as shown.', 'chopping board, apex,kitchen ware', 'on', 50),
(25, 1, 4, '2018-04-25 15:13:07.064111', 'Chilly Cutter', 'download11407484510_1424864723.jpg', 'EZEE PLASTIC.JPG', 'NESTWEEL .jpg', 150, 'chilly cutter with best quality as shown.', 'chielly cutter, nestarwell,kitchen ware', 'on', 80),
(26, 1, 4, '2018-04-25 19:18:46.000000', 'Corn Cutter', 'EZEE 2.jpg', 'EZEE.jpg', 'hallmarklogo.jpg', 150, 'corn cutter with best quality as shown.', 'corn cutter, ritu,kitchen ware', 'on', 190),
(27, 1, 5, '2018-04-25 15:13:19.814386', 'Cut & Wash', 'APEX.jpg', 'RITU 2.jpg', 'RITU.jpg', 300, 'cut & wash with best quality as shown.', 'cut wash, apex,kitchen ware', 'on', 120),
(28, 2, 3, '2018-04-25 15:13:24.887250', 'Cutlery set', 'HALLMARK+CATALOUGE-33.jpg', 'HALLMARK+CATALOUGE-34.jpg', 'RITU (3).jpg', 300, 'cutlery set with best quality as shown.', 'cutlery set, Hallmark,plastic ware', 'on', 150),
(29, 2, 5, '2018-04-25 15:13:32.968007', 'Fruit Frok', 'APEX.jpg', 'RITU 3.jpg', 'RITU 4.jpg', 100, 'fruit frok with best quality as shown.', 'fruit frok, apex,plastic ware', 'on', 320),
(30, 1, 5, '2018-04-25 15:13:40.155355', 'Fruit Juicer', 'APEX 2.jpg', '54c1de71d1ca3.jpg', 'Page 14.jpg', 450, 'Fruit Juicer with best quality as shown.', 'fruit juicer, apex,kichen ware', 'on', 140),
(31, 2, 1, '2018-04-25 15:13:59.369197', 'Flower Pot', '7.5.jpg', '20.jpg', '18.jpg', 50, 'Flowerpot with best quality as shown.', 'flowerpot, ritu,plastic ware', 'on', 75),
(32, 1, 5, '2018-04-25 15:14:05.109113', 'Strainer', 'APEX 2.jpg', 'plastic-tea-strainer-250x250.jpg', 'APEX.jpg', 60, 'Strainer with best quality as shown.', 'Strainer, apex,kitchen ware', 'on', 330),
(33, 1, 1, '2018-04-25 15:14:16.719243', 'Gas Leg', 'j-166.jpg', 'RITU CATALOG 2017 (1)-15.jpg', '', 100, 'Gas Leg with best quality as shown.', 'Gas Leg, ritu,kitchen ware,ritu', 'on', 220),
(34, 1, 1, '2018-04-25 15:14:29.554342', 'Gas Trolly', 'RITU 3.jpg', 'RITU.jpg', 'S.S TROLLY 2.jpg', 200, 'Gas Trolly with best quality as shown.', 'Gas Trolly,kitchen ware,ritu', 'on', 100),
(35, 2, 5, '2018-04-25 15:14:36.055051', 'Glass Set', 'APEX 2.jpg', 'APEX 3.jpg', 'APEX.jpg', 400, 'Glass Set with best quality as shown.', 'Glass set,plastic ware,apex', 'on', 110),
(36, 2, 3, '2018-04-25 15:14:40.845592', 'Glass Stand', 'j76.jpg', 'j-77.jpg', 'j-75.jpg', 50, 'Glass Stand with best quality as shown.', 'Glass Stand,plastic ware,hallmark', 'on', 100),
(37, 2, 3, '2018-04-25 15:14:46.199139', 'Slush Maker', 'HALLMARK.jpg', '', '', 400, 'Slush Maker with best quality as shown.', 'Slush maker,plastic ware,hallmark', 'on', 100),
(38, 2, 5, '2018-04-25 15:15:29.137115', 'Hot Mate', 'APEX 2.jpg', 'Page 15.jpg', 'RITU CATALOG 2017 (1)-08.jpg', 200, 'Hot Mate with best quality as shown.', 'Hot Mate,plastic ware,ritu', 'on', 200),
(39, 2, 5, '2018-04-25 15:15:34.840037', 'Icecream Set', 'apex -09.jpg', 'RITU.jpg', 'RITU CATALOG 2017 (1)-37.jpg', 400, 'Icecream Set with best quality as shown.', 'Icecream set,plastic ware,ritu', 'on', 100),
(40, 1, 3, '2018-04-25 15:15:49.697966', 'Mortars & Pestle', 'HALLMARK+CATALOUGE-09.jpg', 'HALLMARK+CATALOUGE-11.jpg', '', 200, 'Khal Batta with best quality as shown.', 'Mortars Pestle Khal Batta,kitchen ware,hallmark', 'on', 250),
(41, 1, 1, '2018-04-25 15:15:58.221017', 'KItchen Press', 'j-31.jpg', 'RITU CATALOG 2017 (1)-19.jpg', '', 300, 'Kitchen Press with best quality as shown.', 'Kitchen Press,kitchen ware, ritu', 'on', 100),
(42, 1, 1, '2018-04-25 15:16:05.610943', 'Knife', 'RITU 2.jpg', 'RITU CATALOG 2017 (1)-34.jpg', 'RITU CATALOG 2017 (1)-32.jpg', 100, 'Knife with best quality as shown.', 'knife,kitchen ware, ritu', 'on', 300),
(43, 1, 5, '2018-04-25 15:16:37.702012', 'Lemon Sqeeral', 'APEX 2.jpg', 'APEX.jpg', 'IMG_6065.JPG', 150, 'lemon Sqeeral with best quality as shown.', 'lemon sqeeral, apex, kitchen ware', 'on', 400),
(44, 1, 1, '2018-04-25 15:17:04.139771', 'Lighter', '547bf7e99122f.jpg', '547bf90e73664.jpg', '', 100, 'lighter with best quality as shown.', 'Lighter,ritu,kitchen ware', 'on', 100),
(45, 2, 5, '2018-04-25 15:17:11.079449', 'Matka Stand', '991396612452.jpg', 'matka-stand-3.jpg', 'apex -18.jpg', 170, 'Matka Stand with best quality as shown.', 'matka stand,apex,plastic ware', 'on', 200),
(46, 1, 1, '2018-04-25 15:17:16.278734', 'Meduvada Maker', 'j-13.jpg', 'p01098__smartkshop-medu-vada-maker-vadai-maker-food-graded-mater-with-steel-bottom-p01098.jpg', '', 200, 'Meduvada Maker with best quality as shown.', 'Meduvada Maker,ritu,kitchen ware', 'on', 90),
(47, 1, 5, '2018-04-25 15:17:22.024256', 'Mixi', 'apex -29 - Copy.jpg', 'Oxo%20Good%20Grips%20Egg%20Beater.jpg', 'PART 2.pdf-02.jpg', 200, 'Mixi with best quality as shown.', 'mixi,apex,kitchen ware', 'on', 80),
(48, 3, 3, '2018-04-25 15:17:28.966853', 'Mop', 'e026ee7d0961f5e4f9c160171338599c.jpg', 'c227a0d805ea1c07996418e8735cb893.jpg', '', 450, 'mop with best quality as shown.', 'mop, cleaning accessories,hallmark', 'on', 350),
(49, 2, 1, '2018-04-25 15:17:36.078552', 'Mug', 'RITU CATALOG 2017 (1)-60.jpg', '', '', 50, 'mug with best quality as shown.', 'mug,ritu,plastic ware', 'on', 890),
(50, 1, 5, '2018-04-25 15:17:41.129371', 'Multi Chopper', '2.jpg', 'apex -0.jpg', 'apex -12.jpg', 500, 'Multi Chopper with best quality as shown.', 'Multi chopper,apex,kitchen ware', 'on', 1000),
(51, 2, 1, '2018-04-25 15:17:50.097274', 'Oil Pump', 'kitchen-oil-pump-250x250.jpg', 'product-oilpump.png', '', 250, 'Oil Pump with best quality as shown.', 'Oil Pump,ritu,plastic ware', 'on', 700),
(52, 1, 5, '2018-04-25 15:17:57.691609', 'Onion Cutter', 'APEX 2.jpg', 'apex.jpg', 'IMG_6137.JPG', 150, 'Onion Cutter with best quality as shown.', 'Onion cutter,apex,kitchen ware', 'on', 100),
(53, 1, 1, '2018-04-25 15:18:01.923625', 'Peeler', 'j-58.jpg', 'j-62.jpg', 'j-154.jpg', 90, 'Peeler with best quality as shown.', 'Peeler,ritu,kitchen ware', 'on', 100),
(54, 1, 5, '2018-04-25 15:18:12.043679', 'Pizza Cutter', '54c1e2284553f.jpg', 'apex -27.jpg', 'j.jpg', 200, 'pizza cutter with best quality as shown.', 'pizza cutter,apex,kitchen ware', 'on', 200),
(55, 1, 5, '2018-04-25 15:18:26.298721', 'Potato Masher', '$_12.jpg', 'apex -30.jpg', 'j-147.jpg', 250, 'Potato Masher with best quality as shown.', 'Potato Masher,apex,kitchen ware', 'on', 1000),
(56, 1, 1, '2018-04-25 15:18:33.277849', 'Puri Press', '41diOCTY5qL__AC_UL320_SR266,320_.jpg', 'puri_press_ss.png', 'puri_press.png', 300, 'puri press with best quality as shown.', 'puri press,ritu,kichen ware', 'on', 500),
(57, 2, 1, '2018-04-25 15:18:38.803502', 'Salt Shaker', 'MASALA AP-1.jpg', 'MASALA 2.jpg', 'RITU CATALOG 2017 (1)-29.jpg', 100, 'Salt Shaker with best quality as shown.', 'salt shaker,ritu,plastic ware', 'on', 100),
(58, 1, 3, '2018-04-25 15:18:43.325106', 'Pincer', 'SANSI 2.jpg', 'SANSI 3.jpg', '', 150, 'Pincer with best quality as shown.', 'pincer sansi,hallmark,kichen ware', 'on', 1200),
(59, 1, 3, '2018-04-25 15:18:47.629100', 'Sev Sancha', 'HALLMARK+CATALOUGE-05.jpg', '', '', 250, 'Sev Sancha with best quality as shown.', 'sev sancha,hallmark,kichenware', 'on', 300),
(60, 1, 1, '2018-04-25 15:18:53.637887', 'Slicer', '54c1dfe688750.jpg', '54c1e0e955410.jpg', '54d048fd9465e.jpg', 200, 'Slicer with best quality as shown.', 'slicer,ritu,kitchen war', 'on', 1500),
(61, 2, 1, '2018-04-25 15:18:57.937352', 'Spoon', 'RITU CATALOG 2017 (1)-24.jpg', 'RITU CATALOG 2017 (1)-39.jpg', '', 200, 'Spoon set with best quality as shown.', 'spoon,ritu,plastic ware', 'on', 900),
(62, 1, 3, '2018-04-25 15:19:02.622795', 'Sprout Maker', 'HALLMARK+CATALOUGE-74.jpg', 'RITU CATALOG 2017 (1)-38.jpg', '', 150, 'Sprout Maker with best quality as shown.', 'sprout Maket,hallmark,kitchen ware', 'on', 90),
(63, 2, 1, '2018-04-25 15:19:09.604418', 'Stool ', '201.jpg', '202.jpg', '203.jpg', 100, 'stool with best quality as shown.', 'stool,ritu,plastic ware', 'on', 150),
(64, 2, 1, '2018-04-25 15:19:17.973381', 'Soap cash', 'soap cash.jpg', '', '', 20, 'soap cash with best quality as shown.', 'soap cash,ritu,plastic ware', 'on', 80),
(65, 3, 1, '2018-04-25 15:19:22.512107', 'Dust Pan', 'SUPLI.jpg', 'supli.png', '', 60, 'dust pan with best quality as shown.', 'dust pan,ritu,cleaning accessories', 'on', 100),
(66, 2, 1, '2018-04-25 15:19:27.108638', 'Bath Tub', 'RITU CATALOG 2017 (1)-56.jpg', '', '', 150, 'Bath Tub with best quality as shown.', 'Bath tub,ritu,plastic ware', 'on', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `feedback_master`
--
ALTER TABLE `feedback_master`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `offer_master`
--
ALTER TABLE `offer_master`
  ADD PRIMARY KEY (`OfferId`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `feedback_master`
--
ALTER TABLE `feedback_master`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer_master`
--
ALTER TABLE `offer_master`
  MODIFY `OfferId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
