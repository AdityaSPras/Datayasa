-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datayasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `IdAdmin` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Address` text NOT NULL,
  `Fax` varchar(15) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`IdAdmin`, `Username`, `Password`, `FullName`, `Photo`, `PhoneNumber`, `Address`, `Fax`, `Website`, `Email`) VALUES
(1, 'admin', 'YWRtaW4=', 'Administrator', 'Logo.png', '(0361) 244445', 'Jl. Raya Puputan No. 86, Denpasar Timur', '(0361) 264773', 'www.datayasa.com', 'datayasa@yahoo.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `IdBank` int(11) NOT NULL,
  `BankName` varchar(100) NOT NULL,
  `BankCode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`IdBank`, `BankName`, `BankCode`) VALUES
(2, 'BANK BRI', '002'),
(3, 'BANK BCA', '014'),
(4, 'BANK MANDIRI', '008'),
(5, 'BANK BNI', '009'),
(6, 'BANK BNI SYARIAH', '427'),
(7, 'BANK SYARIAH MANDIRI (BSM)', '451'),
(8, 'BANK CIMB NIAGA', '022'),
(9, 'BANK CIMB NIAGA SYARIAH', '022'),
(10, 'BANK MUAMALAT', '147'),
(11, 'BANK BTPN', '213'),
(12, 'BANK BTPN SYARIAH', '547'),
(13, 'JENIUS', '213');

-- --------------------------------------------------------

--
-- Table structure for table `tb_division`
--

CREATE TABLE `tb_division` (
  `IdDivision` int(11) NOT NULL,
  `DivisionName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_division`
--

INSERT INTO `tb_division` (`IdDivision`, `DivisionName`) VALUES
(19, 'Magang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_items`
--

CREATE TABLE `tb_items` (
  `IdItem` int(11) NOT NULL,
  `IdCategory` int(11) NOT NULL,
  `IdSupplier` int(11) NOT NULL,
  `NameOfItem` varchar(255) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Stock` int(11) NOT NULL,
  `ConditionItems` varchar(10) NOT NULL,
  `PurchasePrice` int(11) NOT NULL,
  `SellingPrice` int(11) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_items`
--

INSERT INTO `tb_items` (`IdItem`, `IdCategory`, `IdSupplier`, `NameOfItem`, `Unit`, `Stock`, `ConditionItems`, `PurchasePrice`, `SellingPrice`, `Photo`) VALUES
(5, 12, 27, 'Cartridge HP Deskjet 802 Black', 'Pcs', 5, 'Baru', 150000, 200000, 'hp-tinta-802-black-original-ink-cartridge-hitam-3155-9071602-1-zoom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_items_category`
--

CREATE TABLE `tb_items_category` (
  `IdCategory` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_items_category`
--

INSERT INTO `tb_items_category` (`IdCategory`, `CategoryName`, `Description`) VALUES
(12, 'Perlengkapan Printer', 'Macam-Macam Keperluan Printer'),
(13, 'Perangkat Keras Komputer', 'Macam-Macam Perangkat Keras Komputer'),
(14, 'Aksesoris Komputer', 'Macam-Macam Aksesoris Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `IdService` int(11) NOT NULL,
  `SerialNumber` varchar(100) DEFAULT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `TypeOfItem` varchar(100) DEFAULT NULL,
  `NameOfItem` varchar(255) NOT NULL,
  `Problem` text NOT NULL,
  `Completness` text NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `StatusService` varchar(50) DEFAULT NULL,
  `DateOfEntry` date NOT NULL,
  `IdServiceCenter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`IdService`, `SerialNumber`, `CustomerName`, `TypeOfItem`, `NameOfItem`, `Problem`, `Completness`, `Photo`, `PhoneNumber`, `StatusService`, `DateOfEntry`, `IdServiceCenter`) VALUES
(8, '0', 'Aditya Suryo Prastomo', 'X550Z', 'Laptop Asus', 'Sistem Operasi Lambat', 'Laptop & Charger', 'Laptop_Super_Gaming_Asus_X550Z_Second.jpg', '085745646074', 'Selesai', '2020-05-17', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_service_center`
--

CREATE TABLE `tb_service_center` (
  `IdServiceCenter` int(11) NOT NULL,
  `NameOfServiceCenter` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_service_center`
--

INSERT INTO `tb_service_center` (`IdServiceCenter`, `NameOfServiceCenter`, `Address`, `PhoneNumber`, `Email`, `Photo`) VALUES
(9, 'ASUS Authorized Service Partner', '1, Jl. Jend. Sudirman No.3, Dauh Puri Klod, Kec. Denpasar Bar., Kota Denpasar, Bali 80225', '(0361) 255160', 'asusbali@asus.co.id', 'nopict-15.png'),
(12, 'PT. Datayasa Computer', 'Jl. Raya Puputan No. 86, Denpasar Timur', '(0361) 244445', 'datayasa@yahoo.co.id', 'Logo Datayasa Computer.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `IdSupplier` int(11) NOT NULL,
  `SupplierName` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Bank` varchar(100) DEFAULT NULL,
  `AccountNumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`IdSupplier`, `SupplierName`, `Address`, `PhoneNumber`, `Photo`, `Email`, `Bank`, `AccountNumber`) VALUES
(27, 'SANWAN komp, Refill centre, office suplies', 'Jl. Pulau Komodo No.21, Dauh Puri Klod, Kec. Denpasar Bar., Kota Denpasar, Bali 80113', '(0361) 237950', 'nopict-15.png', 'dwijaya@gmail.com', '-', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `IdUser` int(11) NOT NULL,
  `IdDivision` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `PlaceOfBirth` varchar(100) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Gender` varchar(20) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Religion` varchar(20) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Active` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`IdUser`, `IdDivision`, `Username`, `Password`, `FullName`, `PlaceOfBirth`, `DateOfBirth`, `Gender`, `Photo`, `Religion`, `Address`, `PhoneNumber`, `Email`, `Active`) VALUES
(12, 19, 'AdityaSPras', 'MTIzNDU2Nzg=', 'Aditya Suryo Prastomo', 'Denpasar', '1998-05-22', 'Laki-Laki', 'Foto.jpg', 'Islam', 'Jl. Gunung Lebah No. 32, Denpasar Barat', '085745646074', 'adityaspras@gmail.com', '2019-07-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`IdAdmin`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`IdBank`);

--
-- Indexes for table `tb_division`
--
ALTER TABLE `tb_division`
  ADD PRIMARY KEY (`IdDivision`);

--
-- Indexes for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`IdItem`),
  ADD KEY `Category.Items` (`IdCategory`),
  ADD KEY `Supplier.Items` (`IdSupplier`);

--
-- Indexes for table `tb_items_category`
--
ALTER TABLE `tb_items_category`
  ADD PRIMARY KEY (`IdCategory`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`IdService`);

--
-- Indexes for table `tb_service_center`
--
ALTER TABLE `tb_service_center`
  ADD PRIMARY KEY (`IdServiceCenter`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`IdSupplier`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`IdUser`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Divisi` (`IdDivision`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `IdAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `IdBank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_division`
--
ALTER TABLE `tb_division`
  MODIFY `IdDivision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `IdItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_items_category`
--
ALTER TABLE `tb_items_category`
  MODIFY `IdCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `IdService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_service_center`
--
ALTER TABLE `tb_service_center`
  MODIFY `IdServiceCenter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `IdSupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD CONSTRAINT `Category.Items` FOREIGN KEY (`IdCategory`) REFERENCES `tb_items_category` (`IdCategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Supplier.Items` FOREIGN KEY (`IdSupplier`) REFERENCES `tb_supplier` (`IdSupplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `Divisi` FOREIGN KEY (`IdDivision`) REFERENCES `tb_division` (`IdDivision`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
