-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2019 at 08:21 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipo`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvalr`
--

DROP TABLE IF EXISTS `approvalr`;
CREATE TABLE IF NOT EXISTS `approvalr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` varchar(255) DEFAULT NULL,
  `INDUSTRY_NAME` varchar(255) DEFAULT NULL,
  `ISSUE_SIZE` varchar(255) DEFAULT NULL,
  `IMAGE_URL` varchar(255) DEFAULT NULL,
  `OVERVIEW_URL` varchar(255) DEFAULT NULL,
  `RISKS_URL` varchar(255) DEFAULT NULL,
  `STRENGTHS_URL` varchar(255) DEFAULT NULL,
  `IPO_DETAILS_TABLE` varchar(255) DEFAULT NULL,
  `OOI_TABLE` varchar(255) DEFAULT NULL,
  `SUBSCRIPTION_TABLE` varchar(255) DEFAULT NULL,
  `PL_TABLE` varchar(255) DEFAULT NULL,
  `BS_TABLE` varchar(255) DEFAULT NULL,
  `CF_TABLE` varchar(255) DEFAULT NULL,
  `DIRECTOR_TABLE` varchar(255) DEFAULT NULL,
  `CC_TABLE` varchar(255) DEFAULT NULL,
  `INDUSTRY_PDF` varchar(255) DEFAULT NULL,
  `F_TABLE` varchar(255) DEFAULT NULL,
  `SH_TABLE` varchar(255) DEFAULT NULL,
  `V_TABLE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvalr`
--

INSERT INTO `approvalr` (`ID`, `COMPANY_NAME`, `INDUSTRY_NAME`, `ISSUE_SIZE`, `IMAGE_URL`, `OVERVIEW_URL`, `RISKS_URL`, `STRENGTHS_URL`, `IPO_DETAILS_TABLE`, `OOI_TABLE`, `SUBSCRIPTION_TABLE`, `PL_TABLE`, `BS_TABLE`, `CF_TABLE`, `DIRECTOR_TABLE`, `CC_TABLE`, `INDUSTRY_PDF`, `F_TABLE`, `SH_TABLE`, `V_TABLE`) VALUES
(1, 'Teja Industries', 'Marketing', 'Rs 400 Cr', 'IPO/Teja/Image/download.jpg', 'IPO/Teja/Data/overview.txt', 'IPO/Teja/Data/risks.txt', 'IPO/Teja/Data/strengths.txt', 'IPO/Teja/Data/ipodetails.csv', 'IPO/Teja/Data/ooi.csv', 'IPO/Teja/Data/subscription.csv', 'IPO/Teja/Data/pl.csv', 'IPO/Teja/Data/balancesheet.csv', 'IPO/Teja/Data/cf.csv', 'IPO/Teja/Data/directors.csv', 'IPO/Teja/Data/cc.csv', 'IPO/Teja/Pdf/ack.pdf', 'IPO/Teja/Data/fundamentals.csv', 'IPO/Teja/Data/sh.csv', 'IPO/Teja/Data/vt.csv');

-- --------------------------------------------------------

--
-- Table structure for table `approvalrec`
--

DROP TABLE IF EXISTS `approvalrec`;
CREATE TABLE IF NOT EXISTS `approvalrec` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` varchar(255) DEFAULT NULL,
  `INDUSTRY_NAME` varchar(255) DEFAULT NULL,
  `ISSUE_SIZE` varchar(255) DEFAULT NULL,
  `IMAGE_URL` varchar(255) DEFAULT NULL,
  `OVERVIEW_URL` varchar(255) DEFAULT NULL,
  `RISKS_URL` varchar(255) DEFAULT NULL,
  `STRENGTHS_URL` varchar(255) DEFAULT NULL,
  `IPO_DETAILS_TABLE` varchar(255) DEFAULT NULL,
  `OOI_TABLE` varchar(255) DEFAULT NULL,
  `SUBSCRIPTION_TABLE` varchar(255) DEFAULT NULL,
  `PL_TABLE` varchar(255) DEFAULT NULL,
  `BS_TABLE` varchar(255) DEFAULT NULL,
  `CF_TABLE` varchar(255) DEFAULT NULL,
  `DIRECTOR_TABLE` varchar(255) DEFAULT NULL,
  `CC_TABLE` varchar(255) DEFAULT NULL,
  `INDUSTRY_PDF` varchar(255) DEFAULT NULL,
  `F_TABLE` varchar(255) DEFAULT NULL,
  `SH_TABLE` varchar(255) DEFAULT NULL,
  `V_TABLE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvalrec`
--

INSERT INTO `approvalrec` (`ID`, `COMPANY_NAME`, `INDUSTRY_NAME`, `ISSUE_SIZE`, `IMAGE_URL`, `OVERVIEW_URL`, `RISKS_URL`, `STRENGTHS_URL`, `IPO_DETAILS_TABLE`, `OOI_TABLE`, `SUBSCRIPTION_TABLE`, `PL_TABLE`, `BS_TABLE`, `CF_TABLE`, `DIRECTOR_TABLE`, `CC_TABLE`, `INDUSTRY_PDF`, `F_TABLE`, `SH_TABLE`, `V_TABLE`) VALUES
(1, 'Teja Industries', 'Marketing', 'Rs 500 Cr', 'IPO/Teja/Image/download.jpg', 'IPO/Teja/Data/overview.txt', 'IPO/Teja/Data/risks.txt', 'IPO/Teja/Data/strengths.txt', 'IPO/Teja/Data/ipodetails.csv', 'IPO/Teja/Data/ooi.csv', 'IPO/Teja/Data/subscription.csv', 'IPO/Teja/Data/pl.csv', 'IPO/Teja/Data/balacesheet.csv', 'IPO/Teja/Data/cf.csv', 'IPO/Teja/Data/directors.csv', 'IPO/Teja/Data/connected-companies.csv', 'IPO/Teja/Pdf/ack.pdf', 'IPO/Teja/Data/fundamentals.csv', 'IPO/Teja/Data/sh.csv', 'IPO/Teja/Data/vt.csv');

-- --------------------------------------------------------

--
-- Table structure for table `currentipo`
--

DROP TABLE IF EXISTS `currentipo`;
CREATE TABLE IF NOT EXISTS `currentipo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` varchar(255) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `PRICE` varchar(255) NOT NULL,
  `MIN_LOT` varchar(255) NOT NULL,
  `IMAGE_URL` varchar(255) DEFAULT NULL,
  `OVERVIEW_URL` varchar(255) DEFAULT NULL,
  `RISKS_URL` varchar(255) DEFAULT NULL,
  `STRENGTHS_URL` varchar(255) DEFAULT NULL,
  `IPO_DETAILS_TABLE` varchar(255) DEFAULT NULL,
  `OOI_TABLE` varchar(255) DEFAULT NULL,
  `SUBSCRIPTION_TABLE` varchar(255) DEFAULT NULL,
  `PL_TABLE` varchar(255) DEFAULT NULL,
  `BS_TABLE` varchar(255) DEFAULT NULL,
  `CF_TABLE` varchar(255) DEFAULT NULL,
  `DIRECTOR_TABLE` varchar(255) DEFAULT NULL,
  `CC_TABLE` varchar(255) DEFAULT NULL,
  `INDUSTRY_PDF` varchar(255) DEFAULT NULL,
  `F_TABLE` varchar(255) DEFAULT NULL,
  `SH_TABLE` varchar(255) DEFAULT NULL,
  `V_TABLE` varchar(255) DEFAULT NULL,
  `IPO_SIZE` varchar(255) DEFAULT NULL,
  `INDUSTRY` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentipo`
--

INSERT INTO `currentipo` (`ID`, `COMPANY_NAME`, `START_DATE`, `END_DATE`, `TYPE`, `PRICE`, `MIN_LOT`, `IMAGE_URL`, `OVERVIEW_URL`, `RISKS_URL`, `STRENGTHS_URL`, `IPO_DETAILS_TABLE`, `OOI_TABLE`, `SUBSCRIPTION_TABLE`, `PL_TABLE`, `BS_TABLE`, `CF_TABLE`, `DIRECTOR_TABLE`, `CC_TABLE`, `INDUSTRY_PDF`, `F_TABLE`, `SH_TABLE`, `V_TABLE`, `IPO_SIZE`, `INDUSTRY`) VALUES
(1, 'Teja Industries', '2019-02-28', '2019-02-28', 'SME', 'Rs 21.79', '14700', 'IPO/Teja/Image/download.jpg', 'IPO/Teja/Data/overview.txt', 'IPO/Teja/Data/risks.txt', 'IPO/Teja/Data/strengths.txt', 'IPO/Teja/Data/ipodetails.csv', 'IPO/Teja/Data/ooi.csv', 'IPO/Teja/Data/subscription.csv', 'IPO/Teja/Data/pl.csv', 'IPO/Teja/Data/balancesheet.csv', 'IPO/Teja/Data/cf.csv', 'IPO/Teja/Data/directors.csv', 'IPO/Teja/Data/connected-companies.csv', 'IPO/Teja/Pdf/ack.pdf', 'IPO/Teja/Data/fundamentals.csv', 'IPO/Teja/Data/sh.csv', 'IPO/Teja/Data/vt.csv', 'Rs 500Cr', 'Marketing'),
(2, 'PolyCab Wires', '2019-02-28', '2019-02-28', 'SME', 'Rs 21.79', '15422', 'IPO/Polycab/Image/download.jpg', 'IPO/Polycab/Data/overview.txt', 'IPO/Polycab/Data/risks.txt', 'IPO/Polycab/Data/strengths.txt', 'IPO/Polycab/Data/ipodetails.csv', 'IPO/Polycab/Data/ooi.csv', 'IPO/Polycab/Data/subscription.csv', 'IPO/Polycab/Data/pl.csv', 'IPO/Polycab/Data/balancesheet.csv', 'IPO/Polycab/Data/cf.csv', 'IPO/Polycab/Data/directors.csv', 'IPO/Polycab/Data/connected-companies.csv', 'IPO/Polycab/Pdf/ack.pdf', 'IPO/Polycab/Data/fundamentals.csv', 'IPO/Polycab/Data/sh.csv', 'IPO/Polycab/Data/vt.csv', 'Rs 500Cr', 'Cables'),
(3, 'Ackasol Industries', '2019-02-28', '2019-02-20', 'SME', 'Rs 21.79', '17611', 'IPO/Ackasol/Image/download.jpg', 'IPO/Ackasol/Data/overview.txt', 'IPO/Ackasol/Data/risks.txt', 'IPO/Ackasol/Data/strengths.txt', 'IPO/Ackasol/Data/ipodetails.csv', 'IPO/Ackasol/Data/ooi.csv', 'IPO/Ackasol/Data/subscription.csv', 'IPO/Ackasol/Data/pl.csv', 'IPO/Ackasol/Data/balancesheet.csv', 'IPO/Ackasol/Data/cf.csv', 'IPO/Ackasol/Data/directors.csv', 'IPO/Ackasol/Data/connected-companies.csv', 'IPO/Ackasol/Pdf/ack.pdf', 'IPO/Ackasol/Data/fundamentals.csv', 'IPO/Ackasol/Data/sh.csv', 'IPO/Ackasol/Data/vt.csv', 'Rs 500Cr', 'Chemicals'),
(4, 'Supra Estates', '2019-02-28', '2019-02-28', 'SME', 'Rs 21.79', '98561', 'IPO/Supra/Image/download.jpg', 'IPO/Supra/Data/overview.txt', 'IPO/Supra/Data/risks.txt', 'IPO/Supra/Data/strengths.txt', 'IPO/Supra/Data/ipodetails.csv', 'IPO/Supra/Data/ooi.csv', 'IPO/Supra/Data/subscription.csv', 'IPO/Supra/Data/pl.csv', 'IPO/Supra/Data/balancesheet.csv', 'IPO/Supra/Data/cf.csv', 'IPO/Supra/Data/directors.csv', 'IPO/Supra/Data/connected-companies.csv', 'IPO/Supra/Pdf/ack.pdf', 'IPO/Supra/Data/fundamentals.csv', 'IPO/Supra/Data/sh.csv', 'IPO/Supra/Data/vt.csv', 'Rs 500Cr', 'Real Estate'),
(5, 'Religare Metals', '2019-02-28', '2019-02-28', 'SME', 'Rs 21.79', '48455', 'IPO/Religare/Image/download.jpg', 'IPO/Religare/Data/overview.txt', 'IPO/Religare/Data/risks.txt', 'IPO/Religare/Data/strengths.txt', 'IPO/Religare/Data/ipodetails.csv', 'IPO/Religare/Data/ooi.csv', 'IPO/Religare/Data/subscription.csv', 'IPO/Religare/Data/pl.csv', 'IPO/Religare/Data/balancesheet.csv', 'IPO/Religare/Data/cf.csv', 'IPO/Religare/Data/directors.csv', 'IPO/Religare/Data/connected-companies.csv', 'IPO/Religare/Pdf/ack.pdf', 'IPO/Religare/Data/fundamentals.csv', 'IPO/Religare/Data/sh.csv', 'IPO/Religare/Data/vt.csv', 'Rs 500Cr', 'Metals'),
(6, 'Perkins Jwellers', '2019-02-20', '2019-02-28', 'SME', 'Rs 21.79', '14700', 'IPO/Perkins/Image/download.jpg', 'IPO/Perkins/Data/overview.txt', 'IPO/Perkins/Data/risks.txt', 'IPO/Perkins/Data/strengths.txt', 'IPO/Perkins/Data/ipodetails.csv', 'IPO/Perkins/Data/ooi.csv', 'IPO/Perkins/Data/subscription.csv', 'IPO/Perkins/Data/pl.csv', 'IPO/Perkins/Data/balancesheet.csv', 'IPO/Perkins/Data/cf.csv', 'IPO/Perkins/Data/directors.csv', 'IPO/Perkins/Data/connected-companies.csv', 'IPO/Perkins/Pdf/ack.pdf', 'IPO/Perkins/Data/fundamentals.csv', 'IPO/Perkins/Data/sh.csv', 'IPO/Perkins/Data/vt.csv', 'Rs 500Cr', 'Chemicals'),
(8, 'Manikantan Metals', '2019-02-10', '2019-02-10', 'SME', 'Rs 21.79', '14700', 'IPO/Manikantan/Image/download.jpg', 'IPO/Manikantan/Data/overview.txt', 'IPO/Manikantan/Data/risks.txt', 'IPO/Manikantan/Data/strengths.txt', 'IPO/Manikantan/Data/ipodetails.csv', 'IPO/Manikantan/Data/ooi.csv', 'IPO/Manikantan/Data/subscription.csv', 'IPO/Manikantan/Data/pl.csv', 'IPO/Manikantan/Data/balancesheet.csv', 'IPO/Manikantan/Data/cf.csv', 'IPO/Manikantan/Data/directors.csv', 'IPO/Manikantan/Data/connected-companies.csv', 'IPO/Manikantan/Pdf/ack.pdf', 'IPO/Manikantan/Data/fundamentals.csv', 'IPO/Manikantan/Data/sh.csv', 'IPO/Manikantan/Data/vt.csv', 'Rs 500Cr', 'Metals');

-- --------------------------------------------------------

--
-- Table structure for table `proposedipo`
--

DROP TABLE IF EXISTS `proposedipo`;
CREATE TABLE IF NOT EXISTS `proposedipo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` varchar(255) DEFAULT NULL,
  `INDUSTRY_NAME` varchar(255) NOT NULL,
  `ISSUE_SIZE` varchar(255) NOT NULL,
  `IMAGE_URL` varchar(255) DEFAULT NULL,
  `OVERVIEW_URL` varchar(255) DEFAULT NULL,
  `RISKS_URL` varchar(255) DEFAULT NULL,
  `STRENGTHS_URL` varchar(255) DEFAULT NULL,
  `IPO_DETAILS_TABLE` varchar(255) DEFAULT NULL,
  `OOI_TABLE` varchar(255) DEFAULT NULL,
  `SUBSCRIPTION_TABLE` varchar(255) DEFAULT NULL,
  `PL_TABLE` varchar(255) DEFAULT NULL,
  `BS_TABLE` varchar(255) DEFAULT NULL,
  `CF_TABLE` varchar(255) DEFAULT NULL,
  `DIRECTOR_TABLE` varchar(255) DEFAULT NULL,
  `CC_TABLE` varchar(255) DEFAULT NULL,
  `INDUSTRY_PDF` varchar(255) DEFAULT NULL,
  `F_TABLE` varchar(255) DEFAULT NULL,
  `SH_TABLE` varchar(255) DEFAULT NULL,
  `V_TABLE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposedipo`
--

INSERT INTO `proposedipo` (`ID`, `COMPANY_NAME`, `INDUSTRY_NAME`, `ISSUE_SIZE`, `IMAGE_URL`, `OVERVIEW_URL`, `RISKS_URL`, `STRENGTHS_URL`, `IPO_DETAILS_TABLE`, `OOI_TABLE`, `SUBSCRIPTION_TABLE`, `PL_TABLE`, `BS_TABLE`, `CF_TABLE`, `DIRECTOR_TABLE`, `CC_TABLE`, `INDUSTRY_PDF`, `F_TABLE`, `SH_TABLE`, `V_TABLE`) VALUES
(3, 'Teja Industries', 'Marketing', 'Rs 300Cr', 'IPO/Teja/Image/download.jpg', 'IPO/Teja/Data/overview.txt', 'IPO/Teja/Data/risks.txt', 'IPO/Teja/Data/strengths.txt', 'IPO/Teja/Data/ipodetails.csv', 'IPO/Teja/Data/ooi.csv', 'IPO/Teja/Data/subscription.csv', 'IPO/Teja/Data/pl.csv', 'IPO/Teja/Data/balancesheet.csv', 'IPO/Teja/Data/cf.csv', 'IPO/Teja/Data/directors.csv', 'IPO/Teja/Data/connected-companies.csv', 'IPO/Teja/Pdf/ack.csv', 'IPO/Teja/Data/fundamentals.csv', 'IPO/Teja/Data/sh.csv', 'IPO/Teja/Data/vt.csv'),
(4, 'Manikantan Metals', 'Cables', 'Rs 700Cr', 'IPO/Manikantan/Image/download.jpg', 'IPO/Manikantan/Data/overview.txt', 'IPO/Manikantan/Data/risks.txt', 'IPO/Manikantan/Data/strengths.txt', 'IPO/Manikantan/Data/ipodetails.csv', 'IPO/Manikantan/Data/ooi.csv', 'IPO/Manikantan/Data/subscription.csv', 'IPO/Manikantan/Data/pl.csv', 'IPO/Manikantan/Data/balancesheet.csv', 'IPO/Manikantan/Data/cf.csv', 'IPO/Manikantan/Data/directors.csv', 'IPO/Manikantan/Data/connected-companies.csv', 'IPO/Manikantan/Pdf/ack.pdf', 'IPO/Manikantan/Data/fundamentals.csv', 'IPO/Manikantan/Data/sh.csv', 'IPO/Manikantan/Data/vt.csv'),
(5, 'Perkins Jwellers', 'Chemicals', 'Rs 100Cr', 'IPO/Perkins/Image/download.jpg', 'IPO/Perkins/Data/overview.txt', 'IPO/Perkins/Data/risks.txt', 'IPO/Perkins/Data/strengths.txt', 'IPO/Perkins/Data/ipodetails.csv', 'IPO/Perkins/Data/ooi.csv', 'IPO/Perkins/Data/subscription.csv', 'IPO/Perkins/Data/pl.csv', 'IPO/Perkins/Data/balancesheet.csv', 'IPO/Perkins/Data/cf.csv', 'IPO/Perkins/Data/directors.csv', 'IPO/Perkins/Data/connected-companies.csv', 'IPO/Perkins/Pdf/ack.pdf', 'IPO/Perkins/Data/fundamentals.csv', 'IPO/Perkins/Data/sh.csv', 'IPO/Perkins/Data/vt.csv'),
(6, 'Kumar Textiles', 'Real Estate', 'Rs 600Cr', 'IPO/Kumar/Image/download.jpg', 'IPO/Kumar/Data/overview.txt', 'IPO/Kumar/Data/risks.txt', 'IPO/Kumar/Data/strengths.txt', 'IPO/Kumar/Data/ipodetails.csv', 'IPO/Kumar/Data/ooi.csv', 'IPO/Kumar/Data/subscription.csv', 'IPO/Kumar/Data/pl.csv', 'IPO/Kumar/Data/balancesheet.csv', 'IPO/Kumar/Data/cf.csv', 'IPO/Kumar/Data/directors.csv', 'IPO/Kumar/Data/connected-companies.csv', 'IPO/Kumar/Pdf/ack.pdf', 'IPO/Kumar/Data/fundamentals.csv', 'IPO/Kumar/Data/sh.csv', 'IPO/Kumar/Data/vt.csv'),
(7, 'Lenoxi Bearings', 'Automotive', 'Rs 400Cr', 'IPO/Lenoxi/Image/download.jpg', 'IPO/Lenoxi/Data/overview.txt', 'IPO/Lenoxi/Data/risks.txt', 'IPO/Lenoxi/Data/strengths.txt', 'IPO/Lenoxi/Data/ipodetails.csv', 'IPO/Lenoxi/Data/ooi.csv', 'IPO/Lenoxi/Data/subscription.csv', 'IPO/Lenoxi/Data/pl.csv', 'IPO/Lenoxi/Data/balancesheet.csv', 'IPO/Lenoxi/Data/cf.csv', 'IPO/Lenoxi/Data/directors.csv', 'IPO/Lenoxi/Data/connected-companies.csv', 'IPO/Lenoxi/Pdf/ack.pdf', 'IPO/Lenoxi/Data/fundamentals.csv', 'IPO/Lenoxi/Data/sh.csv', 'IPO/Lenoxi/Data/vt.csv'),
(8, 'Entrisp Solutions', 'Real Estate', 'Rs 900Cr', 'IPO/Entrisp/Image/download.jpg', 'IPO/Entrisp/Data/overview.txt', 'IPO/Entrisp/Data/risks.txt', 'IPO/Entrisp/Data/strengths.txt', 'IPO/Entrisp/Data/ipodetails.csv', 'IPO/Entrisp/Data/ooi.csv', 'IPO/Entrisp/Data/subscription.csv', 'IPO/Entrisp/Data/pl.csv', 'IPO/Entrisp/Data/balancesheet.csv', 'IPO/Entrisp/Data/cf.csv', 'IPO/Entrisp/Data/directors.csv', 'IPO/Entrisp/Data/connected-companies.csv', 'IPO/Entrisp/Pdf/ack.pdf', 'IPO/Entrisp/Data/fundamentals.csv', 'IPO/Entrisp/Data/sh.csv', 'IPO/Entrisp/Data/vt.csv'),
(10, 'Religare Metals', 'Metals', 'Rs 70Cr', 'IPO/Religare/Image/download.jpg', 'IPO/Religare/Data/overview.txt', 'IPO/Religare/Data/risks.txt', 'IPO/Religare/Data/strengths.txt', 'IPO/Religare/Data/ipodetails.csv', 'IPO/Religare/Data/ooi.csv', 'IPO/Religare/Data/subscription.csv', 'IPO/Religare/Data/pl.csv', 'IPO/Religare/Data/balancesheet.csv', 'IPO/Religare/Data/cf.csv', 'IPO/Religare/Data/directors.csv', 'IPO/Religare/Data/connected-companies.csv', 'IPO/Religare/Pdf/ack.pdf', 'IPO/Religare/Data/fundamentals.csv', 'IPO/Religare/Data/sh.csv', 'IPO/Religare/Data/vt.csv');

-- --------------------------------------------------------

--
-- Table structure for table `recentipo`
--

DROP TABLE IF EXISTS `recentipo`;
CREATE TABLE IF NOT EXISTS `recentipo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` varchar(255) DEFAULT NULL,
  `START_DATE` date DEFAULT NULL,
  `END_DATE` date DEFAULT NULL,
  `TYPE` varchar(255) DEFAULT NULL,
  `PRICE` varchar(255) DEFAULT NULL,
  `MIN_LOT` varchar(255) DEFAULT NULL,
  `IMAGE_URL` varchar(255) DEFAULT NULL,
  `OVERVIEW_URL` varchar(255) DEFAULT NULL,
  `RISKS_URL` varchar(255) DEFAULT NULL,
  `STRENGTHS_URL` varchar(255) DEFAULT NULL,
  `IPO_DETAILS_TABLE` varchar(255) DEFAULT NULL,
  `OOI_TABLE` varchar(255) DEFAULT NULL,
  `SUBSCRIPTION_TABLE` varchar(255) DEFAULT NULL,
  `PL_TABLE` varchar(255) DEFAULT NULL,
  `BS_TABLE` varchar(255) DEFAULT NULL,
  `CF_TABLE` varchar(255) DEFAULT NULL,
  `DIRECTOR_TABLE` varchar(255) DEFAULT NULL,
  `CC_TABLE` varchar(255) DEFAULT NULL,
  `INDUSTRY_PDF` varchar(255) DEFAULT NULL,
  `F_TABLE` varchar(255) DEFAULT NULL,
  `SH_TABLE` varchar(255) DEFAULT NULL,
  `V_TABLE` varchar(255) DEFAULT NULL,
  `IPO_SIZE` varchar(255) DEFAULT NULL,
  `INDUSTRY` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recentipo`
--

INSERT INTO `recentipo` (`ID`, `COMPANY_NAME`, `START_DATE`, `END_DATE`, `TYPE`, `PRICE`, `MIN_LOT`, `IMAGE_URL`, `OVERVIEW_URL`, `RISKS_URL`, `STRENGTHS_URL`, `IPO_DETAILS_TABLE`, `OOI_TABLE`, `SUBSCRIPTION_TABLE`, `PL_TABLE`, `BS_TABLE`, `CF_TABLE`, `DIRECTOR_TABLE`, `CC_TABLE`, `INDUSTRY_PDF`, `F_TABLE`, `SH_TABLE`, `V_TABLE`, `IPO_SIZE`, `INDUSTRY`) VALUES
(1, 'Teja Industries', '2014-11-10', '2014-11-10', 'SME', 'Rs 21.79 Cr', '14700', 'IPO/Teja/Image/download.jpg', 'IPO/Teja/Data/overview.txt', 'IPO/Teja/Data/risks.txt', 'IPO/Teja/Data/strengths.txt', 'IPO/Teja/Data/ipodetails.csv', 'IPO/Teja/Data/ooi.csv', 'IPO/Teja/Data/subscription.csv', 'IPO/Teja/Data/pl.csv', 'IPO/Teja/Data/balancesheet.csv', 'IPO/Teja/Data/cf.csv', 'IPO/Teja/Data/directors.csv', 'IPO/Teja/Data/cc.csv', 'IPO/Teja/Pdf/ack.pdf', 'IPO/Teja/Data/fundamentals.csv', 'IPO/Teja/Data/sh.csv', 'IPO/Teja/Data/vt.csv', 'Rs 500 Cr', 'Marketing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
