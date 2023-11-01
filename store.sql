-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 02:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('instock','outofstock') NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `price`, `status`, `description`, `image`) VALUES
(3, 'Web Design', 50000.00, 'instock', '🚀 Introducing the TechWonder 5000: Unleash the Future Today! 🚀\r\n\r\nAre you ready to embark on a journey into the future of technology? Look no further! We are thrilled to unveil our latest innovation, the TechWonder 5000.\r\n\r\nKey Features:\r\n\r\n🤖 AI-Powered Excellence: Experience a new level of intelligence with our AI-driven technology. The TechWonder 5000 adapts to your preferences, making every interaction seamless and personalized.\r\n\r\n🔐 Top-Notch Security: Your data is precious, and we understand that. Our device comes equipped with state-of-the-art security features to ensure your information is protected at all times.\r\n\r\n💨 Blazing Fast Speed: Say goodbye to lag and hello to speed! The TechWonder 5000 boasts lightning-fast processing, allowing you to breeze through tasks and enjoy unparalleled multitasking.\r\n\r\n🎨 Sleek Design, Ultimate Style: Aesthetics meet functionality in the TechWonder 5000. Its modern and sleek design not only enhances your technological experience but also complements your style.\r\n\r\nWhy Choose TechWonder 5000?\r\n\r\n✨ Innovation Redefined: We believe in pushing boundaries and redefining what\'s possible. The TechWonder 5000 is a testament to our commitment to innovation.\r\n\r\n🌐 Connectivity at Its Best: Stay connected with the world effortlessly. The device ensures you\'re always in touch with the latest trends and updates.\r\n\r\n🌟 Tech Simplified: Don\'t let complexity hold you back. The TechWonder 5000 is designed with user-friendly features, making technology accessible to everyone.\r\n\r\nAre you ready to embrace the future? The TechWonder 5000 is more than just a device; it\'s a lifestyle. Upgrade to excellence, upgrade to the TechWonder 5000!\r\n\r\n🌐 Explore more at www.techwonder5000.com and be part of the future today! 🌐', 'uploads/Gold And Grey Modern Web Development Excellence Instagram Post (1).png'),
(4, 'Pens ', 150.00, 'instock', 'Elevate your writing experience with our Premium Gel Ink Pens Set. Crafted for the discerning writer, these pens combine sleek design with smooth, effortless writing. Whether you\'re jotting down notes, brainstorming ideas, or adding a personal touch to your journal, our pens are the perfect companion.\r\n\r\nKey Features:\r\n\r\nSmooth Gel Ink: Enjoy a fluid writing experience with our high-quality gel ink. The pens glide effortlessly across the paper, leaving behind crisp and vibrant lines.\r\n\r\nErgonomic Design: Designed for comfort, the pens feature an ergonomic grip that conforms to your hand, reducing writing fatigue during extended use.\r\n\r\nPrecision and Detail: The fine point tips allow for precise and detailed writing, making these pens ideal for both creative endeavors and professional tasks.\r\n\r\nDurable and Reliable: Built to last, our pens are crafted from durable materials to withstand daily use. The reliable ink flow ensures consistent performance.\r\n\r\nStylish and Professional: The modern design adds a touch of sophistication to your writing arsenal. Whether at the office, in meetings, or on the go, these pens make a statement.\r\n\r\nPackage Includes:\r\n\r\n5 Premium Gel Ink Pens\r\nStylish Gift Box\r\nUpgrade your writing experience today with our Premium Gel Ink Pens Set. Unleash your creativity and make every word count!', 'uploads/pens.jpg'),
(5, 'Pens ', 150.00, 'instock', 'Elevate your writing experience with our Premium Gel Ink Pens Set. Crafted for the discerning writer, these pens combine sleek design with smooth, effortless writing. Whether you\'re jotting down notes, brainstorming ideas, or adding a personal touch to your journal, our pens are the perfect companion.\r\n\r\nKey Features:\r\n\r\nSmooth Gel Ink: Enjoy a fluid writing experience with our high-quality gel ink. The pens glide effortlessly across the paper, leaving behind crisp and vibrant lines.\r\n\r\nErgonomic Design: Designed for comfort, the pens feature an ergonomic grip that conforms to your hand, reducing writing fatigue during extended use.\r\n\r\nPrecision and Detail: The fine point tips allow for precise and detailed writing, making these pens ideal for both creative endeavors and professional tasks.\r\n\r\nDurable and Reliable: Built to last, our pens are crafted from durable materials to withstand daily use. The reliable ink flow ensures consistent performance.\r\n\r\nStylish and Professional: The modern design adds a touch of sophistication to your writing arsenal. Whether at the office, in meetings, or on the go, these pens make a statement.\r\n\r\nPackage Includes:\r\n\r\n5 Premium Gel Ink Pens\r\nStylish Gift Box\r\nUpgrade your writing experience today with our Premium Gel Ink Pens Set. Unleash your creativity and make every word count!', 'uploads/pens.jpg'),
(6, 'Books', 250.00, 'instock', '🌟 Discover the Magic: TechFest 2023 🌟 Join us for an extraordinary journey into the realm of innovation at TechFest 2023! Our vibrant poster is your gateway to a world where creativity knows no bounds. Event Highlights: 🚀 Cutting-Edge Tech Exhibitions: Immerse yourself in the future with hands-on experiences of the latest technological wonders. From AI marvels to futuristic gadgets, witness the tech revolution up close. 🎤 Expert Speaker Sessions: Engage with industry experts and thought leaders who will unravel the mysteries of emerging technologies. Gain insights that will reshape your perspective on the digital landscape. 🎨 Tech Art Gallery: Experience the fusion of art and technology in our exclusive Tech Art Gallery. Marvel at captivating installations that blend creativity with cutting-edge advancements. 🎁 Interactive Workshops: Dive into the world of coding, robotics, and more through interactive workshops. Whether you\'re a tech enthusiast or a beginner, there\'s something for everyone.', 'uploads/book.jpg'),
(7, 'Shoes', 1500.00, 'instock', '🌟 Discover the Magic: TechFest 2023 🌟 Join us for an extraordinary journey into the realm of innovation at TechFest 2023! Our vibrant poster is your gateway to a world where creativity knows no bounds. Event Highlights: 🚀 Cutting-Edge Tech Exhibitions: Immerse yourself in the future with hands-on experiences of the latest technological wonders. From AI marvels to futuristic gadgets, witness the tech revolution up close. 🎤 Expert Speaker Sessions: Engage with industry experts and thought leaders who will unravel the mysteries of emerging technologies. Gain insights that will reshape your perspective on the digital landscape. 🎨 Tech Art Gallery: Experience the fusion of art and technology in our exclusive Tech Art Gallery. Marvel at captivating installations that blend creativity with cutting-edge advancements. 🎁 Interactive Workshops: Dive into the world of coding, robotics, and more through interactive workshops. Whether you\'re a tech enthusiast or a beginner, there\'s something for everyone.', 'uploads/shoes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'wert', 'mrprincehillary@gmail.com', 'Western1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
