-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 13, 2020 at 11:10 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `CatId` int(11) NOT NULL AUTO_INCREMENT,
  `CatName` varchar(50) NOT NULL,
  PRIMARY KEY (`CatId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatId`, `CatName`) VALUES
(1, 'Biscuits'),
(2, 'Noodles'),
(3, 'Yougurt'),
(4, 'Milk Powder'),
(5, 'Soap'),
(6, 'Shampoo'),
(7, 'Air Freshner'),
(8, 'Tooth Paste'),
(9, 'Hair Oil'),
(10, 'Cooking Oil');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `CompanyId` int(11) NOT NULL AUTO_INCREMENT,
  `ComName` varchar(50) NOT NULL,
  PRIMARY KEY (`CompanyId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompanyId`, `ComName`) VALUES
(1, 'Munchee'),
(2, 'Maliban'),
(3, 'Wijaya'),
(4, 'Hemas'),
(5, 'Atlas');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerId` int(20) NOT NULL AUTO_INCREMENT,
  `CusName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ConNo` int(10) NOT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CusName`, `Address`, `ConNo`) VALUES
(2, 'Piyumi', 'No12,Matara', 912346789),
(3, 'Sandun Perera', 'Colombo', 776789055);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `EmpId` int(20) NOT NULL AUTO_INCREMENT,
  `EmpName` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ConNo` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `EmpType` varchar(30) NOT NULL,
  `Salary` double NOT NULL,
  PRIMARY KEY (`EmpId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpId`, `EmpName`, `Gender`, `Address`, `ConNo`, `DOB`, `EmpType`, `Salary`) VALUES
(1, 'Dilusha ', '', 'Galle.', 773456782, '1995-09-13', 'Cashier', 10000),
(2, 'Lashani Kariyawasam', '', 'Megalle.', 761234560, '1992-08-04', 'Cashier', 10000),
(3, 'Saman Gamage', 'Male', 'Wanduramba', 768905431, '1992-08-01', 'Cashier', 15000),
(5, 'Sanuka', 'Male', 'Galle', 912345698, '1995-03-09', 'Cashier', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `PRODCODE` varchar(30) NOT NULL,
  `PRODNAME` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `SupplierId` int(50) NOT NULL,
  `Cost` decimal(10,0) NOT NULL,
  `UnitPrice` decimal(10,0) NOT NULL,
  `QntyType` varchar(20) NOT NULL,
  `Qnty` int(50) NOT NULL,
  PRIMARY KEY (`PRODCODE`),
  KEY `CatId` (`Category`),
  KEY `SupplierId` (`SupplierId`),
  KEY `CompanyId` (`Company`),
  KEY `QntyTypeId` (`QntyType`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PRODCODE`, `PRODNAME`, `Category`, `Company`, `SupplierId`, `Cost`, `UnitPrice`, `QntyType`, `Qnty`) VALUES
('3', 'Chocalate cream Biscuit', 'Frozen Food', 'Munchee', 2, '45', '55', 'Nos', 100),
('4', 'cent', 'Sanitory Items', 'Munchee', 2, '346', '400', 'Nos', 50),
('1', 'Marie', 'Frozen Food', 'Maliban', 2, '25', '30', 'Nos', 40),
('7', 'washing powder', 'Sanitory Items', 'Uniliver', 2, '89', '100', 'Nos', 125),
('2', 'Noodles', 'Frozen Food', 'Freeland', 2, '80', '125', 'Nos', 25),
('5', 'vegetable oil', 'Grocery', 'Vijaya', 7, '245', '300', 'Lit', 20);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `PurchaseId` int(11) NOT NULL AUTO_INCREMENT,
  `SupplierId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `UnitPrice` double NOT NULL,
  `Qnty` int(50) NOT NULL,
  PRIMARY KEY (`PurchaseId`),
  KEY `SupplierId` (`SupplierId`),
  KEY `ProductId` (`ProductId`),
  KEY `UnitPrice` (`UnitPrice`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`PurchaseId`, `SupplierId`, `ProductId`, `UnitPrice`, `Qnty`) VALUES
(1, 7, 7, 100, 25),
(2, 9, 1, 30, 100),
(3, 5, 4, 400, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `SalesId` int(20) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(20) NOT NULL,
  `ProductId` int(20) NOT NULL,
  `UnitPrice` double(10,0) NOT NULL,
  `Qnty` int(50) NOT NULL,
  PRIMARY KEY (`SalesId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SalesId`, `CustomerId`, `ProductId`, `UnitPrice`, `Qnty`) VALUES
(1, 2, 7, 100, 36),
(2, 3, 3, 45, 50),
(3, 2, 3, 45, 20);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `SupplierId` int(50) NOT NULL AUTO_INCREMENT,
  `SupplierName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ConNo` int(10) NOT NULL,
  PRIMARY KEY (`SupplierId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SupplierId`, `SupplierName`, `Address`, `Email`, `ConNo`) VALUES
(1, 'Kosala Distributers', 'No.45,ASD Road,Matara.', 'kosala@yahoo.com', 772344567),
(2, 'Navod Distributers', 'Central Road,Mahara,Gampaha.', 'navod@gmail.com', 912223459),
(5, 'Ruhunu Agencies', 'N0 12,Negombo.', 'ruhunu@gmail.com', 912345678),
(7, 'South Distributers', 'Galle', 'south@yahoo.com', 91234560),
(9, 'Ashan', 'Matara', 'ashan@gmail.com', 771234561),
(3, 'Nawala Agencies', 'ASD Road,Negombo', 'Naw@gmail.com', 761234567);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `USERID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`USERID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`USERID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'Saman', 'worst'),
(2, 'Nilan', 'world'),
(3, 'Kasuni', 'seaop'),
(19, 'DFG', 'IOP'),
(20, 'Tie', 'wert'),
(4, 'Pawan', 'nature');

-- --------------------------------------------------------

--
-- Stand-in structure for view `virtviewprod`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `virtviewprod`;
CREATE TABLE IF NOT EXISTS `virtviewprod` (
`PRODCODE` varchar(30)
,`PRODNAME` varchar(50)
,`Category` varchar(50)
,`Company` varchar(50)
,`SupplierId` int(50)
,`Cost` decimal(10,0)
,`UnitPrice` decimal(10,0)
,`QntyType` varchar(20)
,`Qnty` int(50)
);

-- --------------------------------------------------------

--
-- Structure for view `virtviewprod`
--
DROP TABLE IF EXISTS `virtviewprod`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `virtviewprod`  AS  select `products`.`PRODCODE` AS `PRODCODE`,`products`.`PRODNAME` AS `PRODNAME`,`products`.`Category` AS `Category`,`products`.`Company` AS `Company`,`products`.`SupplierId` AS `SupplierId`,`products`.`Cost` AS `Cost`,`products`.`UnitPrice` AS `UnitPrice`,`products`.`QntyType` AS `QntyType`,`products`.`Qnty` AS `Qnty` from `products` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
