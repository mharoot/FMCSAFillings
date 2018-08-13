-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2018 at 08:40 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dot_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_authorizationform`
--

CREATE TABLE `dot_tracker_authorizationform` (
  `id` int(255) NOT NULL,
  `cc_name` text,
  `cc_type` text,
  `cc_number` text,
  `cc_expdate` text,
  `cc_seccode` text,
  `address` text,
  `city` text,
  `state` text,
  `zipcode` text,
  `phone` text,
  `email` text NOT NULL,
  `fax` text,
  `auth_name` text,
  `auth_company` text,
  `auth_phoneno` text,
  `auth_email` text,
  `auth_drivlicense` text,
  `auth_relationuser` text,
  `auth_charges` text,
  `auth_amount` text,
  `date_of_charge` text,
  `ccholder_name` text,
  `sign_link` text,
  `date` text,
  `creation_datetime` datetime DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `created_by` text NOT NULL,
  `auth_method` int(10) NOT NULL DEFAULT '0',
  `pay_log` text,
  `transaction_id` text,
  `pay_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_authorizationform`
--

INSERT INTO `dot_tracker_authorizationform` (`id`, `cc_name`, `cc_type`, `cc_number`, `cc_expdate`, `cc_seccode`, `address`, `city`, `state`, `zipcode`, `phone`, `email`, `fax`, `auth_name`, `auth_company`, `auth_phoneno`, `auth_email`, `auth_drivlicense`, `auth_relationuser`, `auth_charges`, `auth_amount`, `date_of_charge`, `ccholder_name`, `sign_link`, `date`, `creation_datetime`, `last_updated`, `created_by`, `auth_method`, `pay_log`, `transaction_id`, `pay_status`) VALUES
(7, 'Prasanjeet Chakraborty', 'AMEX', '197612321232', '0000-00-00', '453', 'Test', 'Pune', 'Maharashtra', '411014', '7209999456', 'prasanjeet.chkraborty@gmail.com', '2134321232', 'Prasanjeet Chakraborty', 'Tech Prashteck', '08237357638', 'prasanjeet.chakraborty@gmail.com', 'AFFH32-231', 'Self', 'Nil', '20500', '2018-03-21', 'Prasanjeet Chakraborty', '/uploadsign/5152ba0d8de23e2fe3274b0d4436a7d5.png', '2018-03-29', '2018-03-24 03:37:35', NULL, 'tonygreg', 0, NULL, '', NULL),
(8, 'Prasanjeet', 'VISA', '2313131313112', '2018-03-28', '213', 'Test', 'kjghfgh', 'khjgfghcb', '2134332', '8237357638', 'njhvg@hkjgfh.com', '089786755', 'Prasanjeet', 'ljhkugjyfh', '8237357638', 'sads@dsf.com', 'ljkhggc', 'ljkhjvhn', '231', 'kjb', '2018-03-13', 'Prasnjet', 'toBeAuth', '2018-03-28', '2018-03-24 12:16:35', NULL, 'tonygreg', 0, NULL, '', NULL),
(9, 'jlkhgff', 'VISA', '23354657687', '0000-00-00', '123', 'lkjhjgf', 'ljkhjgfhg', 'jlkhgccv', '2443', '8237357638', 'prasanjeet.chkraborty@gmail.com', '23432', 'Prasanjeet', 'lkjhg', '8237357638', 'kjghg@jlhkg.com', 'lkhjhg', 'ljkjgh', 'lhkj', '213', '2018-03-16', 'Prasanjeet', 'toBeAuth', '2018-03-22', '2018-03-24 12:21:03', NULL, 'tonygreg', 0, NULL, '', NULL),
(10, 'jlkhgff', 'VISA', '21321', '0000-00-00', '123', 'lkjhjgf', 'ljkhjgfhg', 'jlkhgccv', '2443', '+918237357638', 'prasanjeet.chkraborty@gmail.com', '23432', 'Prasanjeet', 'lkjhg', '+918237357638', 'kjghg@jlhkg.com', 'lkhjhg', 'ljkjgh', 'lhkj', '213', '2018-03-16', 'Prasanjeet', '/uploadsign/06b9052351f1adbdf4822438d211f5c7.png', '2018-03-22', '2018-03-24 12:21:58', NULL, 'tonygreg', 0, NULL, '', NULL),
(11, 'Prasanjeet Chakraborty', 'VISA', '123123121123111', '0000-00-00', '123', 'Test Address', 'bmvncgx', 'kjhvghc', '21313', '+918237357638', 'prasanjeet.chkraborty@gmail.com', '213131', 'Tony Corp', 'Tech Prashteck', '08237357638', 'prasanjeet.chakraborty@gmail.com', 'AFFH32-231', 'Self', 'Nil', '213', '2018-03-29', '', '', '0000-00-00', '2018-03-28 00:18:12', NULL, 'tonygreg', 0, NULL, '', NULL),
(12, 'Prasanjeet Chakraborty', 'MC', '1231321313', '0000-00-00', '123', 'Test Address', 'nbvchvb', 'kjhgvj', '123123', '+918237357638', 'prasanjeet.chkraborty@gmail.com', '213131', 'Tony Corp', 'Tech Prashteck', '08237357638', 'prasanjeet.chakraborty@gmail.com', 'AFFH32-231', 'Self', 'Nil', '213', '0000-00-00', '', '', '0000-00-00', '2018-03-28 00:20:26', NULL, 'tonygreg', 0, NULL, '', NULL),
(13, 'knjhgcfx', 'VISA', '970865765342436476587', '65/45', '565', 'gkljkhgf', 'gkhjjgf', 'qsrgdhjbhgdf', '567434', '', '', NULL, 'hjkgfdd', 'jkhgfdsdfsd', '+918345657', 'pfarst@esrthg.com', 'gfchvjbjknl', 'afsdghvjb', 'qstrdfhjk', 'q46e56778', '2018-03-16', '--', '--', '--', '2018-03-31 16:07:57', NULL, 'tonygreg', 0, NULL, '', NULL),
(14, 'Prasanjeet', 'MC', '0978656347658', '21/31', '123', 'jlfh', 'jlkgjgh', 'ljkhkj', '21434', '', '', NULL, '.khjhv', 'jlkhjh', '+918237357638', 'prasanjeet.chakraborty@gmail.com', 'ljkhg', 'jkh', 'kjh', '23145', '2018-04-26', '--', '--', '--', '2018-04-01 01:58:11', NULL, 'tonygreg', 0, NULL, '', NULL),
(15, 'Prasanjeet', 'MC', '0978656347658', '21/31', '123', 'jlfh', 'jlkgjgh', 'ljkhkj', '21434', '', '', NULL, '.khjhv', 'jlkhjh', '+918237357638', 'prasanjeet.chakraborty@gmail.com', 'ljkhg', 'jkh', 'kjh', '23145', '2018-04-26', '--', '--', '--', '2018-04-01 02:00:00', NULL, 'tonygreg', 0, NULL, '', NULL),
(16, 'Prasanjeet', 'AMEX', '0978656347658', '21/31', '123', 'jlfh', 'jlkgjgh', 'ljkhkj', '21434', '', '', NULL, '.khjhv', 'jlkhjh', '+918237357638', 'prasanjeet.chakraborty@gmail.com', 'ljkhg', 'jkh', 'kjh', '23145', '2018-04-26', '--', '--', '--', '2018-04-01 02:00:30', NULL, 'tonygreg', 0, NULL, '', NULL),
(17, 'Prasanjeet', 'AMEX', '0978656347658', '21/31', '123', 'jlfh', 'jlkgjgh', 'ljkhkj', '21434', '', '', NULL, '.khjhv', 'jlkhjh', '+918237357638', 'prasanjeet.chakraborty@gmail.com', 'ljkhg', 'jkh', 'kjh', '23145', '2018-04-26', '--', '--', '--', '2018-04-01 02:01:08', NULL, 'tonygreg', 0, NULL, '', NULL),
(18, 'ljkhgg', 'VISA', '2143 2432 4224 3242', '21/31', '1232131', 'sfs', 'wasfsd', 'dsfsd', '12321', '', '', NULL, 'dsd', 'fsdf', '324324', 'dfds@sdfs.com', 'dsfdsf', NULL, 'dsfdsf', '123123', '04-20-2018', '--', '--', '--', '2018-04-04 17:49:29', NULL, 'tonygreg', 0, NULL, '', NULL),
(19, 'asdasd', 'OTHER', '2131 3123 2132 1321', '12/31', '12321', 'sdasdad', 'dsdfs', 'fsdf3232342', '324242', '', '', NULL, 'sfdf', 'fsdfs', '3243242324', 'asdsa@sada.com', 'sdfsf', NULL, 'fdss', 'f', '04/26/2018', '--', '--', '--', '2018-04-10 21:35:16', NULL, 'tonygreg', 0, NULL, '', NULL),
(20, 'bhjbhjk', 'DISCOVER', '6353553535353535', '12/12', '121', 'fdsfds', 'dsff', 'fsdf', '324242', '', '', NULL, 'dsfsfdfd', 'fsdfsf', '8237357638', 'prasanjeet.chakraborty@gmail.com', '1fdsdsf', NULL, 'sdffsdf', '213213', '04-21-2018', '--', '--', '--', '2018-04-10 23:12:17', NULL, 'tonygreg', 0, NULL, '', NULL),
(21, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '1232132132', 'sdadas@dsadsa.com', NULL, NULL, NULL, '', NULL, '--', '--', '--', '2018-04-10 23:47:24', NULL, 'tonygreg', 0, NULL, '', NULL),
(22, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '1312321321', 'asd@sdfsdf.com', NULL, NULL, NULL, '', NULL, '--', '--', '--', '2018-04-11 01:27:52', NULL, 'tonygreg', 0, NULL, '', NULL),
(23, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '1312321321', 'asd@sdfsdf.com', NULL, NULL, NULL, '', NULL, '--', '--', '--', '2018-04-11 01:28:08', NULL, 'tonygreg', 2, NULL, '', NULL),
(24, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '2131232121', 'dsfdsf2fd@sfss.com', NULL, NULL, NULL, '', NULL, '--', '--', '--', '2018-04-11 01:32:02', NULL, 'tonygreg', 1, NULL, '', NULL),
(25, NULL, NULL, NULL, NULL, '12321', NULL, NULL, NULL, '2342', NULL, '', NULL, NULL, NULL, '2131232112', 'sdfds@dsfdf.com', NULL, NULL, NULL, '12321', NULL, '--', '--', '--', '2018-04-11 06:51:58', NULL, 'tonygreg', 0, NULL, '', NULL),
(26, NULL, NULL, NULL, NULL, '12321', NULL, NULL, NULL, '2342', NULL, '', NULL, NULL, NULL, '2131232112', 'sdfds@dsfdf.com', NULL, NULL, NULL, '12321', NULL, '--', '--', '--', '2018-04-11 06:52:52', NULL, 'tonygreg', 0, NULL, '', NULL),
(27, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, '3243242323', 'dss@fdsdc.om', NULL, NULL, NULL, '', NULL, '--', '--', '--', '2018-04-11 06:53:10', NULL, 'tonygreg', 0, NULL, '', NULL),
(28, 'asdadasdasadsa', 'OTHER', '1231211312312312', '12/33', '', 'asdsad', 'asdsadasd', 'fdsfds', '', NULL, '', NULL, '', '', '3243242323', 'dss@fdsdc.om', '', NULL, '', '', '', '--', '--', '--', '2018-04-11 06:54:56', NULL, 'tonygreg', 0, NULL, '', NULL),
(29, 'sadsadsa', 'OTHER', '12313211231232', '12/13', '', '', '', '', '', NULL, '', NULL, '', '', '2132131312', 'sdsfsd@sdfsf.com', '', NULL, '', '', '', '--', '--', '--', '2018-04-11 06:55:13', NULL, 'tonygreg', 0, NULL, '', NULL),
(30, 'Prasa', 'AMEX', '3434 343434 34343', '12/12', '1212', 'dsfsf', 'sadsa', 'dsad', 'wf123', NULL, '', NULL, 'Prs', 'dsfsf', '8232342423', 'sddfsff@fsdgsd.com', 'sfdsf', NULL, 'fsdfdsf', '131221', '04/12/2018', '--', '--', '--', '2018-04-12 00:34:54', NULL, 'tonygreg', 0, NULL, '', NULL),
(31, 'a', 'OTHER', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '1324224242', 'dsfddsfs@fsd.com', '', NULL, '', '', '', '--', '--', '--', '2018-04-18 01:48:47', NULL, 'tonygreg', 2, NULL, '', NULL),
(32, '', 'OTHER', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '4353454354', 'sadsf@fsdfd.sdf', '', NULL, '', '', '', '--', '--', '--', '2018-04-18 01:49:00', NULL, 'tonygreg', 1, NULL, '', NULL),
(33, '', 'OTHER', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '4353454354', 'sadsf@fsdfd.sdf', '', NULL, '', '', '', '--', '--', '--', '2018-04-18 01:49:06', NULL, 'tonygreg', 0, NULL, '', NULL),
(34, '', 'OTHER', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '2131232112', 'sff@fsdf.com', '', NULL, '', '', '', '--', '--', '--', '2018-04-18 01:59:05', NULL, 'tonygreg', 2, NULL, '', NULL),
(35, '', 'OTHER', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '3424234234', 'sfsd@fdsfs.com', '', NULL, '', '', '', '--', '--', '--', '2018-04-18 01:59:44', NULL, 'tonygreg', 2, NULL, '', NULL),
(36, '', 'OTHER', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '3424234234', 'sfsd@fdsfs.com', '', NULL, '', '', '', '--', '--', '--', '2018-04-18 01:59:51', NULL, 'tonygreg', 1, NULL, '', NULL),
(37, '', 'OTHER', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '9786675886', 'kjhjghcfhgm@dsfds.com', '', NULL, '', '', '', '--', '--', '--', '2018-04-19 01:20:35', NULL, 'kunalnimje', 2, NULL, '', NULL),
(38, 'Prasanjeet Chakraborty', 'MC', '5241 8104 0220 9738', '12/21', '213', 'Test Street', 'Pune', 'Maharashtra', '411014', NULL, '', NULL, 'Prasanjeet Chakraborty', 'TechPC', '8237357638', 'prasanjeet.chakraborty@gmail.com', 'AQ-2342342', NULL, 'Dot Charged', '$23', '04/20/2018', '--', '--', '--', '2018-04-20 03:25:47', NULL, 'tonygreg', 0, NULL, NULL, NULL),
(39, 'Prasanjeet Chakraborty', 'MC', '5241 8104 0220 9738', '05/19', '345', 'Test Street', 'Pune ', 'Maharashtra', '411014', NULL, '', NULL, 'Prasanjeet Chakraborty', 'PcTech', '8237357638', 'prasanjeet.chakraborty@gmail.com', 'hgfhg-675756', NULL, 'Dot Charges', '$100', '04/20/2018', '--', '--', '--', '2018-04-20 06:58:32', NULL, 'tonygreg', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_bmc84`
--

CREATE TABLE `dot_tracker_bmc84` (
  `id` int(255) NOT NULL,
  `fmcsa_acc_no` text NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `surety` text NOT NULL,
  `state_name` text NOT NULL,
  `day` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `company1` text NOT NULL,
  `company2` text NOT NULL,
  `street1` text NOT NULL,
  `street2` text NOT NULL,
  `city1` text NOT NULL,
  `city2` text NOT NULL,
  `state1` text NOT NULL,
  `state2` text NOT NULL,
  `zip1` text NOT NULL,
  `zip2` text NOT NULL,
  `telephone1` text NOT NULL,
  `telephone2` text NOT NULL,
  `officer_name1` text NOT NULL,
  `officer_name2` text NOT NULL,
  `officer_sign_1` text,
  `officer_sign_2` text,
  `witness_1` text NOT NULL,
  `witness_2` text NOT NULL,
  `mobile_1` text NOT NULL,
  `mobile_2` text NOT NULL,
  `witness_sign_1` text,
  `witness_sign_2` text,
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  `created_by` text NOT NULL,
  `creation_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_bmc84`
--

INSERT INTO `dot_tracker_bmc84` (`id`, `fmcsa_acc_no`, `street`, `city`, `state`, `zip`, `surety`, `state_name`, `day`, `month`, `year`, `company1`, `company2`, `street1`, `street2`, `city1`, `city2`, `state1`, `state2`, `zip1`, `zip2`, `telephone1`, `telephone2`, `officer_name1`, `officer_name2`, `officer_sign_1`, `officer_sign_2`, `witness_1`, `witness_2`, `mobile_1`, `mobile_2`, `witness_sign_1`, `witness_sign_2`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `created_by`, `creation_datetime`) VALUES
(1, 'AC#342', 'Lane no 7 , Tingre Nagar', 'Pune', 'MH', '411014', 'Debjeet Chakraborty', 'Arizona', '16th', 'November', '2018', 'Prasan Infotech', 'Debj Infotech', 'Lane no 7 , Tingre Nagar', 'Lane no 20 , Wadgaon', 'Pune', 'Pune', 'MH', 'JH', '411014', '789654', '+918237357638', '+918237357639', 'Prasanjeet Chakraborty', 'Debjeet Chakraborty', NULL, NULL, 'Aram Alverdyan', 'Tony Gregorian', '+918237357631', '+918237357632', NULL, NULL, 'Prasanjeet Chakraborty', NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-24 23:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_corporationform`
--

CREATE TABLE `dot_tracker_corporationform` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `m_street` text,
  `m_city` text,
  `m_state` text,
  `m_zip` text,
  `ca_fname` text NOT NULL,
  `ca_mname` text NOT NULL,
  `ca_lname` text NOT NULL,
  `ca_suffix` text NOT NULL,
  `ag_street` text NOT NULL,
  `ag_city` text NOT NULL,
  `ag_state` text NOT NULL,
  `ag_zip` text NOT NULL,
  `shares` int(255) NOT NULL,
  `creation_datetime` datetime NOT NULL,
  `last_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_corporationform`
--

INSERT INTO `dot_tracker_corporationform` (`id`, `name`, `street`, `city`, `state`, `zip`, `m_street`, `m_city`, `m_state`, `m_zip`, `ca_fname`, `ca_mname`, `ca_lname`, `ca_suffix`, `ag_street`, `ag_city`, `ag_state`, `ag_zip`, `shares`, `creation_datetime`, `last_updated`) VALUES
(1, 'PrasanjeetCorp', 'Flat No 4', 'Pune', 'MH', '411014', '', '', '', '', 'Kunal ', 'Y', 'Nimjje', 'Mr', 'Flat No 12', 'Pue', 'MH', '411014', 100000, '2018-03-22 01:18:47', NULL),
(2, 'jihugjgh', 'ljhkgjh', 'lhkgjhg', 'hkgj', 'ghkghj', 'hkghjg', 'kgj', 'ghkug', 'jghgkhj', 'hgkj', 'gkhj', 'ghgjhgh', 'gkj', 'hgj', 'hgkhj', 'ghj', 'ghj', 21321, '2018-03-22 01:43:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_dba`
--

CREATE TABLE `dot_tracker_dba` (
  `id` int(255) NOT NULL,
  `dba` text NOT NULL,
  `b_address` text NOT NULL,
  `b_add_address` text,
  `b_city` text NOT NULL,
  `b_state` text NOT NULL,
  `b_zip` text NOT NULL,
  `b_county` text NOT NULL,
  `v_country` text NOT NULL,
  `article_incorp` text,
  `m_address` text,
  `m_add_address` text,
  `m_city` text,
  `m_state` text,
  `m_zip` text,
  `m_country` text,
  `full_name` text NOT NULL,
  `s_address` text,
  `s_add_address` text,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `country` text NOT NULL,
  `state_of_org` text,
  `r_full_name` text NOT NULL,
  `sign_name` text,
  `sign_title` text NOT NULL,
  `s_email` text NOT NULL,
  `s_phone` text NOT NULL,
  `business_conducted` text NOT NULL,
  `date_reg` text NOT NULL,
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  `ext6` text,
  `created_by` text NOT NULL,
  `creation_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_dba`
--

INSERT INTO `dot_tracker_dba` (`id`, `dba`, `b_address`, `b_add_address`, `b_city`, `b_state`, `b_zip`, `b_county`, `v_country`, `article_incorp`, `m_address`, `m_add_address`, `m_city`, `m_state`, `m_zip`, `m_country`, `full_name`, `s_address`, `s_add_address`, `city`, `state`, `zip`, `country`, `state_of_org`, `r_full_name`, `sign_name`, `sign_title`, `s_email`, `s_phone`, `business_conducted`, `date_reg`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `ext6`, `created_by`, `creation_datetime`) VALUES
(1, 'Prasanjeet Transportaion', 'Lane no 7 , Tingre Nagar', 'No add details', 'Pune', 'MH', '411014', 'Lonavla', 'India', 'Articl370', 'Pune', 'Tingre', 'Pune', 'MH', '411014', 'India', 'Prasanjeet Chakraborty', 'jihuyftyf', 'Lane no', 'jkhjgg', 'MH', '41104', 'Idia', 'MH', 'PC Transport', 'Debjeet Chak', 'Mr', 'prasanjeet.chakraborty@gmail.com', '+918237357638', 'Self', 'NA', NULL, NULL, NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-22 01:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_emailtemp`
--

CREATE TABLE `dot_tracker_emailtemp` (
  `id` int(255) NOT NULL,
  `emaildata` text NOT NULL,
  `created_by` text NOT NULL,
  `creationdate_time` text NOT NULL,
  `type` text NOT NULL,
  `from_email` text NOT NULL,
  `from_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_emailtemp`
--

INSERT INTO `dot_tracker_emailtemp` (`id`, `emaildata`, `created_by`, `creationdate_time`, `type`, `from_email`, `from_name`) VALUES
(1, '<p>Dear [fname] [lname],</p>\r\n<p>Thank you for your interest in shipping your vehicle with [company_name]. <span style=\"font-size: 16px;\"><em><strong>\"The way auto transport should be\".</strong></em></span></p>\r\n<p>The price to ship your [vehicle_list] on [ship_via] carrier from [origin_city], [origin_state_code] to [destination_city], [destination_state_code] is <span style=\"font-size: 14px;\"><strong>$[tariff].</strong></span> AmPm Auto Transport rates are all inclusive rates, which include door-to-door pick-up &amp; delivery, full insurance, freight charges, fuel costs as well as taxes. [note_to_shipper]</p>\r\n<p>There is <strong>NO COST</strong> to get your reservation started.</p>\r\n<p>Your quote number is [quote_number]. For your convenience, you can place your order online using the following secure link:&nbsp;</p>\r\n<p>[quote_link]</p>\r\n<p>Watch our video below!</p>\r\n<p>&nbsp;</p>', 'tonygreg', '2018-05-02 02:29:10', 'Quote Reply Email', 'dsfsj@dfgd.com', 'jsdfhsfjkhdsfjkhsdfkh'),
(2, '<p>knjbj</p>', 'tonygreg', '2018-05-02 03:04:32', 'kjhh', 'kjhsads@fsdf.co', 'sfsf@sdf.com'),
(3, '<p>Dear [legal_business_name],</p>\r\n<p>&nbsp;</p>\r\n<p>Thank you for your interest in DOT Operating Authority, The Place For All Your Filing Needs. Your quote ID is [id].</p>\r\n<p>&nbsp;</p>\r\n<p>Please sign the form and press the \"Save\" button.</p>\r\n<p>&nbsp;</p>\r\n<p>Once again, your quote ID is [id] and your designated process agent is [agent_name], who can be reached directly at [agent_phone].</p>\r\n<p>&nbsp;</p>\r\n<p>Thanks for business.</p>\r\n<p><br />Warm Regards<br />[agent_name]</p>\r\n<p>DOT Operating Authority</p>\r\n<p>Direct line: [agent_phone]</p>\r\n<p>Office: (818) 452-3000</p>\r\n<p>http://www.dotoperatingauthority.com/</p>', 'tonygreg', '2018-07-02 11:02:12', 'Mcs Form', 'info@globalautotransportation.com', 'Yan');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_epn1`
--

CREATE TABLE `dot_tracker_epn1` (
  `id` int(255) NOT NULL,
  `company_name` text NOT NULL,
  `dba` text,
  `attention` text NOT NULL,
  `email_address` text NOT NULL,
  `telephone` text NOT NULL,
  `mailing_address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `acc_person` text NOT NULL,
  `acc_email_address` text NOT NULL,
  `acc_telephone` text NOT NULL,
  `acc_street_address` text NOT NULL,
  `acc_city` text NOT NULL,
  `acc_state` text NOT NULL,
  `acc_zip` text NOT NULL,
  `billing_person` text NOT NULL,
  `billing_telephone` text,
  `billing_attention` text NOT NULL,
  `billing_telephone2` text,
  `billing_address` text NOT NULL,
  `billing_city` text NOT NULL,
  `billing_state` text NOT NULL,
  `billing_zip` text NOT NULL,
  `licensing_name` text NOT NULL,
  `licensing_title` text NOT NULL,
  `licensing_dl_nmber` text NOT NULL,
  `licensing_state` text NOT NULL,
  `licensing_expiration` text NOT NULL,
  `licensing_email` text NOT NULL,
  `licensing_federal_employer` text NOT NULL,
  `purpose_enrollment` text NOT NULL,
  `all_employee_mandate` int(10) NOT NULL,
  `issued_requester_code` int(10) NOT NULL,
  `issued_requester_code_a` text,
  `issued_requester_code_b` text,
  `sign_link` text,
  `extra` text,
  `creation_datetime` text NOT NULL,
  `created_by` text NOT NULL,
  `telephone_ext` text,
  `acc_telephone_ext` text,
  `billing_telephone_ext` text,
  `billing_telephone2_ext` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_epn1`
--

INSERT INTO `dot_tracker_epn1` (`id`, `company_name`, `dba`, `attention`, `email_address`, `telephone`, `mailing_address`, `city`, `state`, `zip`, `acc_person`, `acc_email_address`, `acc_telephone`, `acc_street_address`, `acc_city`, `acc_state`, `acc_zip`, `billing_person`, `billing_telephone`, `billing_attention`, `billing_telephone2`, `billing_address`, `billing_city`, `billing_state`, `billing_zip`, `licensing_name`, `licensing_title`, `licensing_dl_nmber`, `licensing_state`, `licensing_expiration`, `licensing_email`, `licensing_federal_employer`, `purpose_enrollment`, `all_employee_mandate`, `issued_requester_code`, `issued_requester_code_a`, `issued_requester_code_b`, `sign_link`, `extra`, `creation_datetime`, `created_by`, `telephone_ext`, `acc_telephone_ext`, `billing_telephone_ext`, `billing_telephone2_ext`) VALUES
(1, 'Tony Test', 'Tony Transportation', '-NA-', 'prasanjeet.chakraborty@gmail.com', '+918237357638', 'jihuyftyf', 'jkhjgg', 'jhvg12', '213121', 'sd', 'dasd', 'dsad', 'dsd', 'dsd', 'dsd', 'dsd', 'dsadasd', 'dsad', 'dsad', 'dasd', 'dad', 'dasd', 'das', 'dsdasa', 'asdad', 'dasdasdsa', 'dsdadsdsd', 'dsada', 'dasdada', 'sdad', 'sasd', 'adasd', 0, 0, 'asdasd', 'dsad', NULL, NULL, '2018-05-05 03:40:20', 'tonygreg', '', '', '', ''),
(2, 'Kuan', 'khkjhjv', 'hjjh', 'hjvhh', 'vj', 'vhjb', 'vj', 'hh', 'vhjv', 'dsfdsd', 'vhj', 'hvhj', 'vjh', 'h', 'huigih', 'oiugi', 'iuhi', 'ugii', 'gui', 'hug', 'gi', 'hogi', 'ho', 'giuh', 'giu', 'hoi', 'giuh', 'giu', 'h', 'giuh', 'ogiu', '1', 1, 1, 'oi', 'dfsfsd', NULL, NULL, '2018-05-05 04:39:02', 'tonygreg', '', '', '', ''),
(3, 'Prasanjeet Transportaion', 'Prasanjeet Travels', '-NA-', 'prasanjeet.chakraborty@gmail.com', '+918237357638', 'Lane no 7 , Tingre Nagar', 'Pune', 'MH', '411014', 'Prasanjeet Chakraborty', 'prasanjeet.chakraborty@gmail.com', '+918237357638', 'Office 502 , Amar Synergy', 'Pune', 'Maharashtra', '411032', 'Prasanjeet Chakraborty', '+918237357638', '-NA-', '+918237357638', 'Lane no 20, Dhanori ', 'Pune', 'Maharashtra', '411023', 'Prasanjeet Chakraborty', 'Mr', 'DL8908', 'JH', '02-12-2021', 'prasanjeet.chakraborty@gmail.com', 'FD324342', 'I want to enroll because i love trucking', 1, 1, 'Prasanjeet Transport', 'REQ-123', NULL, NULL, '2018-05-05 05:06:11', 'tonygreg', '322', '213', '123', '323'),
(4, 'asjhgfh', 'cgkh', 'gjfjgk', 'hlgg', 'cjkj', 'jkhjg', 'hjcgjvk', 'jcgh', 'jvhv', 'cghj', 'vhjcgh', 'jvh', 'jvhjgch', 'gjvhj', 'cghgjvh', 'ghc', 'jvhcgh', 'gjvh', 'gch', 'vhjcgh', 'cghv', 'jhcgh', 'vjh', 'cghjvh', 'cgh', 'vjcg', 'hjv', 'cgh', '05/22/2018', 'jkhv', 'bkvhgcvj', 'bhghcvj', 1, 1, 'gyuftfyg', 'yfuy', NULL, NULL, '2018-05-05 05:54:01', 'tonygreg', 'hgc', 'cgh', 'ghcvj', 'vjh'),
(5, 'sadasd', '', 'sadasd', 'dsadd', 'dsadasd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'sad', 'd', 'd', 'd', 'd', 'd', '06/12/2018', 'd', 'd', 'dd', 1, 1, 'dd', '', NULL, NULL, '2018-06-12 02:20:03', 'tonygreg', 'asd', 'd', 'd', 'd'),
(6, 'asdsad', '', 'das', 'sadasd', 'dsad', 'dasd', 'dasd', 'dasd', 'dasd', 'dasd', 'dasd', 'dasdasd', 'dasda', 'dasd', 'dasdd', 'dasdas', 'dasdas', 'dasad', 'dasdasd', 'dsad', 'd', 'd', 'd', 'd', 'asdadasd', 'd', 'd', 'd', '06/17/2018', 'sadsa', 'dsada', 'dasdsa', 1, 1, '', '', NULL, NULL, '2018-06-12 02:20:49', 'tonygreg', 'dasds', 'asd', 'dasdadsada', 'd'),
(7, 'asdsad', '', 'das', 'sadasd', 'dsad', 'dasd', 'dasd', 'dasd', 'dasd', 'dasd', 'dasd', 'dasdasd', 'dasda', 'dasd', 'dasdd', 'dasdas', 'dasdas', '', 'dasdasd', 'dsad', 'd', 'd', 'd', 'd', 'asdadasd', 'd', 'd', 'd', '06/17/2018', 'sadsa', 'dsada', 'dasdsa', 1, 1, '', '', NULL, NULL, '2018-06-12 02:21:37', 'tonygreg', 'dasds', 'asd', '', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_epn2`
--

CREATE TABLE `dot_tracker_epn2` (
  `id` int(255) NOT NULL,
  `employer` text NOT NULL,
  `current_address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `is_enroll` int(10) NOT NULL,
  `requester_code` text,
  `date` text NOT NULL,
  `telephone` text NOT NULL,
  `ext` text,
  `contact_name` text NOT NULL,
  `c11` text,
  `c12` text,
  `c13` text,
  `c14` text,
  `c21` text,
  `c22` text,
  `c23` text,
  `c24` text,
  `c31` text,
  `c32` text,
  `c33` text,
  `c34` text,
  `c41` text,
  `c42` text,
  `c43` text,
  `c44` text,
  `c51` text,
  `c52` text,
  `c53` text,
  `c54` text,
  `c61` text,
  `c62` text,
  `c63` text,
  `c64` text,
  `c71` text,
  `c72` text,
  `c73` text,
  `c74` text,
  `c81` text,
  `c82` text,
  `c83` text,
  `c84` text,
  `c91` text,
  `c92` text,
  `c93` text,
  `c94` text,
  `c101` text,
  `c102` text,
  `c103` text,
  `c104` text,
  `c111` text,
  `c112` text,
  `c113` text,
  `c114` text,
  `c121` text,
  `c122` text,
  `c123` text,
  `c124` text,
  `c131` text,
  `c132` text,
  `c133` text,
  `c134` text,
  `c141` text,
  `c151` text,
  `c152` text,
  `c153` text,
  `c154` text,
  `c142` text,
  `c143` text,
  `c144` text,
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  `ext6` text,
  `ext7` text,
  `printed_name` text,
  `sign` text,
  `sign_date` text,
  `created_by` text NOT NULL,
  `creation_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_epn2`
--

INSERT INTO `dot_tracker_epn2` (`id`, `employer`, `current_address`, `city`, `state`, `zip`, `is_enroll`, `requester_code`, `date`, `telephone`, `ext`, `contact_name`, `c11`, `c12`, `c13`, `c14`, `c21`, `c22`, `c23`, `c24`, `c31`, `c32`, `c33`, `c34`, `c41`, `c42`, `c43`, `c44`, `c51`, `c52`, `c53`, `c54`, `c61`, `c62`, `c63`, `c64`, `c71`, `c72`, `c73`, `c74`, `c81`, `c82`, `c83`, `c84`, `c91`, `c92`, `c93`, `c94`, `c101`, `c102`, `c103`, `c104`, `c111`, `c112`, `c113`, `c114`, `c121`, `c122`, `c123`, `c124`, `c131`, `c132`, `c133`, `c134`, `c141`, `c151`, `c152`, `c153`, `c154`, `c142`, `c143`, `c144`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `ext6`, `ext7`, `printed_name`, `sign`, `sign_date`, `created_by`, `creation_datetime`) VALUES
(1, 'Prasanjeet', 'une Tingre', 'Pune', 'MH', '411014', 0, '123', '103242', '2432424', '3242', 'Prasnjeet Chakr', 'PO-34d', 'Chk', 'A', 'No Remarks', 'JKB-123', 'CHSK', 'CB', 'NO', 'vkjbhj', 'rdhfjghfg', 'qwrsgdhfjg', 'qrsgdhf', 'asdasbnmdbb', 'mndb', 'kb', 'b', 'kb', 'hb', 'mh', 'h', 'v', 'jvj', 'hvj', 'hv', 'hjvj', 'hv', 'jhv', 'jhv', 'jhv', 'jhv', 'hjv', 'hjv', 'hjv', 'hjv', 'hjv', 'hj', 'vhj', 'vhj', 'vhj', 'vhj', 'vjh', 'vjh', 'vjh', 'vhj', 'vhj', 'vjh', 'vjh', 'vhj', 'vhj', 'vhj', 'vhj', 'v', 'hjv', 'hjv', 'jh', 'vhj', 'vjh', 'hjv', 'hjv', 'jhv', '', '15', NULL, NULL, NULL, 'prasanjeet.chakraborty@gmail.com', '+918237357638', NULL, NULL, NULL, 'tonygreg', '2018-06-12 00:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_epn3`
--

CREATE TABLE `dot_tracker_epn3` (
  `id` int(255) NOT NULL,
  `requester` text,
  `day` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `party` text NOT NULL,
  `company_name` text NOT NULL,
  `dmv_sign` text,
  `mailing_address` text NOT NULL,
  `auth_sign` text,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `auth_name` text NOT NULL,
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `created_by` text NOT NULL,
  `creation_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_epn3`
--

INSERT INTO `dot_tracker_epn3` (`id`, `requester`, `day`, `month`, `year`, `party`, `company_name`, `dmv_sign`, `mailing_address`, `auth_sign`, `city`, `state`, `zip`, `auth_name`, `ext1`, `ext2`, `ext3`, `ext4`, `created_by`, `creation_datetime`) VALUES
(1, 'Prasanjeet Chakraborty', '12th', 'Nov', '19', 'Tag Corp Pvt. Ltd.', 'Tag Corporations', NULL, 'Lane No 4, Tingre Nagar', '/Applications/MAMP/htdocs/fmcsa-filings/uploadsign/epn1/7fa5201e9a7aec411c6b66bf2d7adecf.png', 'Pune', 'MH', '411014', 'Prasanjeet Chakraborty', NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-14 13:34:37'),
(2, 'Debjeet', 'Seventeenth', 'March', '20', 'Gobal Auto', 'Gobal Transports', NULL, 'Lane no 3 , Tingre Nagar', '/Applications/MAMP/htdocs/fmcsa-filings/uploadsign/epn1/bc3574514264a390432c29f12545ae7f.png', 'Pune', 'MH', '411014', 'Prasanjeet Chakraborty', NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-14 22:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_kentucky`
--

CREATE TABLE `dot_tracker_kentucky` (
  `id` int(255) NOT NULL,
  `usdot` int(10) NOT NULL,
  `ein` text NOT NULL,
  `no_of_axles` int(10) NOT NULL,
  `vin_no` text NOT NULL,
  `vehicle_owned` text NOT NULL,
  `truck_unit_no` text NOT NULL,
  `title_state` text NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `year` text NOT NULL,
  `license_plate` text NOT NULL,
  `plate_state` text NOT NULL,
  `type_of_fuel` text NOT NULL,
  `unloaded_weight` text NOT NULL,
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  `ext6` text,
  `ext7` text,
  `created_by` text NOT NULL,
  `creation_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_kentucky`
--

INSERT INTO `dot_tracker_kentucky` (`id`, `usdot`, `ein`, `no_of_axles`, `vin_no`, `vehicle_owned`, `truck_unit_no`, `title_state`, `make`, `model`, `year`, `license_plate`, `plate_state`, `type_of_fuel`, `unloaded_weight`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `ext6`, `ext7`, `created_by`, `creation_datetime`) VALUES
(4, 80806, 'EIN354', 6, 'VIN123', 'Leased', 'TRK987756', 'MH', 'Honda', 'Brv', '2014', 'HT-6784', 'TRY65', 'Diesel', '18000kg', '20000kg', NULL, NULL, NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-18 22:24:50'),
(5, 1231214, '123112321', 2, 'sadsd', 'sdsad', 'asdasdd', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asasd', 'sadasd', NULL, NULL, NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-27 14:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_login`
--

CREATE TABLE `dot_tracker_login` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `ip` text NOT NULL,
  `creationdatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_login`
--

INSERT INTO `dot_tracker_login` (`id`, `user_id`, `ip`, `creationdatetime`) VALUES
(1, 'tonygreg', '::1', '2018-03-17 01:31:52'),
(2, 'kunalnimje', '::1', '2018-03-17 01:33:15'),
(3, 'sadasda', '::1', '2018-03-17 02:25:58'),
(4, 'sadasda', '::1', '2018-03-17 02:26:10'),
(5, 'tonygreg', '::1', '2018-03-17 23:38:32'),
(6, 'tonygreg', '::1', '2018-03-19 22:55:15'),
(7, 'tonygreg', '::1', '2018-03-23 12:25:53'),
(8, 'tonygreg', '::1', '2018-03-25 20:30:50'),
(9, 'tonygreg', '::1', '2018-03-25 20:49:25'),
(10, 'tonygreg', '::1', '2018-03-25 22:13:04'),
(11, 'tonygreg', '::1', '2018-03-25 22:35:20'),
(12, 'tonygreg', '::1', '2018-03-26 18:05:58'),
(13, 'tonygreg', '::1', '2018-03-30 08:05:49'),
(14, 'tonygreg', '::1', '2018-04-01 01:45:10'),
(15, 'tonygreg', '::1', '2018-04-03 23:24:23'),
(16, 'tonygreg', '::1', '2018-04-04 17:48:57'),
(17, 'tonygreg', '::1', '2018-04-11 23:24:43'),
(18, 'tonygreg', '::1', '2018-04-12 22:42:14'),
(19, 'tonygreg', '::1', '2018-04-13 12:40:15'),
(20, 'tonygreg', '::1', '2018-04-13 15:32:18'),
(21, 'tonygreg', '::1', '2018-04-15 00:35:52'),
(22, 'tonygreg', '::1', '2018-04-17 01:02:13'),
(23, 'tonygreg', '::1', '2018-04-18 01:25:55'),
(24, 'tonygreg', '::1', '2018-04-18 01:30:25'),
(25, 'tonygreg', '::1', '2018-04-18 01:46:41'),
(26, 'kunalnimje', '::1', '2018-04-18 23:17:09'),
(27, 'tonygreg', '::1', '2018-04-19 00:18:53'),
(28, 'kunalnimje', '::1', '2018-04-19 00:20:02'),
(29, 'tonygreg', '::1', '2018-04-20 02:07:10'),
(30, 'tonygreg', '::1', '2018-04-20 02:29:21'),
(31, 'tonygreg', '::1', '2018-04-21 20:15:56'),
(32, 'tonygreg', '::1', '2018-04-23 23:15:13'),
(33, 'tonygreg', '::1', '2018-04-25 22:59:48'),
(34, 'tonygreg', '::1', '2018-04-27 23:40:48'),
(35, 'tonygreg', '::1', '2018-04-28 05:50:58'),
(36, 'tonygreg', '::1', '2018-04-29 10:13:45'),
(37, 'tonygreg', '::1', '2018-04-30 00:49:02'),
(38, 'tonygreg', '::1', '2018-04-30 22:10:57'),
(39, 'tonygreg', '::1', '2018-05-01 01:52:50'),
(40, 'tonygreg', '::1', '2018-05-03 02:04:22'),
(41, 'tonygreg', '::1', '2018-05-04 01:01:53'),
(42, 'tonygreg', '::1', '2018-05-04 02:58:45'),
(43, 'tonygreg', '::1', '2018-05-08 19:07:17'),
(44, 'tonygreg', '::1', '2018-05-10 01:19:05'),
(45, 'tonygreg', '::1', '2018-05-11 00:30:39'),
(46, 'tonygreg', '::1', '2018-05-12 04:27:33'),
(47, 'tonygreg', '::1', '2018-05-17 01:20:42'),
(48, 'tonygreg', '::1', '2018-05-19 10:58:09'),
(49, 'tonygreg', '::1', '2018-05-22 03:34:54'),
(50, 'tonygreg', '::1', '2018-05-23 03:16:18'),
(51, 'tonygreg', '::1', '2018-06-05 23:22:31'),
(52, 'tonygreg', '::1', '2018-06-07 22:33:10'),
(53, 'tonygreg', '::1', '2018-06-11 21:44:11'),
(54, 'tonygreg', '::1', '2018-06-11 22:21:37'),
(55, 'tonygreg', '::1', '2018-06-13 18:25:27'),
(56, 'tonygreg', '::1', '2018-06-13 18:27:48'),
(57, 'tonygreg', '::1', '2018-06-13 21:45:38'),
(58, 'tonygreg', '::1', '2018-06-14 23:51:07'),
(59, 'tonygreg', '::1', '2018-06-15 15:34:40'),
(60, 'tonygreg', '::1', '2018-06-18 22:21:23'),
(61, 'tonygreg', '::1', '2018-06-19 00:41:54'),
(62, 'tonygreg', '::1', '2018-06-24 00:45:35'),
(63, 'tonygreg', '127.0.0.1', '2018-06-26 11:18:54'),
(64, 'tonygreg', '127.0.0.1', '2018-06-26 12:48:21'),
(65, 'tonygreg', '127.0.0.1', '2018-06-27 08:20:29'),
(66, 'tonygreg', '127.0.0.1', '2018-06-29 08:31:17'),
(67, 'tonygreg', '127.0.0.1', '2018-06-29 17:03:41'),
(68, 'tonygreg', '127.0.0.1', '2018-07-02 08:24:26'),
(69, 'tonygreg', '127.0.0.1', '2018-07-03 08:43:37'),
(70, 'tonygreg', '127.0.0.1', '2018-07-05 08:56:03'),
(71, 'tonygreg', '127.0.0.1', '2018-07-05 12:20:50'),
(72, 'tonygreg', '127.0.0.1', '2018-07-06 08:40:38'),
(73, 'tonygreg', '127.0.0.1', '2018-07-10 12:08:04'),
(74, 'tonygreg', '127.0.0.1', '2018-07-11 09:12:36'),
(75, 'tonygreg', '127.0.0.1', '2018-07-16 10:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_mc`
--

CREATE TABLE `dot_tracker_mc` (
  `id` int(255) NOT NULL,
  `authority_c` int(10) NOT NULL,
  `authority_no` text NOT NULL,
  `legal_business_name` text NOT NULL,
  `doing_business_as` text NOT NULL,
  `p_street` text NOT NULL,
  `p_state` text NOT NULL,
  `p_city` text NOT NULL,
  `p_zip` text NOT NULL,
  `p_telephone` int(255) NOT NULL,
  `p_fax` int(255) NOT NULL,
  `m_street` text NOT NULL,
  `m_city` text NOT NULL,
  `m_state` text NOT NULL,
  `m_zip` text NOT NULL,
  `m_telephone` int(255) NOT NULL,
  `m_fax` int(255) NOT NULL,
  `r_name` text NOT NULL,
  `r_title` text NOT NULL,
  `r_street` text NOT NULL,
  `r_city` text NOT NULL,
  `r_state` text NOT NULL,
  `r_zip` text NOT NULL,
  `r_telephone` text NOT NULL,
  `r_fax` text NOT NULL,
  `dot_number` int(11) DEFAULT NULL,
  `form_of_business_c` int(10) NOT NULL,
  `form_of_business` text NOT NULL,
  `type_of_auth` text NOT NULL,
  `p_29a` text NOT NULL,
  `p_29b` int(11) NOT NULL,
  `p_30` int(10) NOT NULL,
  `p_31` int(10) NOT NULL,
  `affl_cont` text NOT NULL,
  `affl_file` text NOT NULL,
  `p_33` int(10) NOT NULL,
  `p_34` int(10) NOT NULL,
  `p_35` int(10) NOT NULL,
  `p_36_check` int(10) NOT NULL,
  `p_36_file` text NOT NULL,
  `p_37` int(10) NOT NULL,
  `p_38_name` text NOT NULL,
  `sign_link` text NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `no_of_checkboxes` int(10) NOT NULL,
  `payment_method` int(10) NOT NULL,
  `cc_type` int(10) NOT NULL,
  `cc_number` int(255) NOT NULL,
  `cc_date` text NOT NULL,
  `cc_name` text NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `sign_link1` text NOT NULL,
  `date1` text NOT NULL,
  `extra1` text,
  `extra2` int(11) DEFAULT NULL,
  `extra3` int(11) DEFAULT NULL,
  `extra4` int(11) DEFAULT NULL,
  `extra5` int(11) DEFAULT NULL,
  `extra6` int(11) DEFAULT NULL,
  `creationdate_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_update` text,
  `created_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `dot_tracker_mc`
--

INSERT INTO `dot_tracker_mc` (`id`, `authority_c`, `authority_no`, `legal_business_name`, `doing_business_as`, `p_street`, `p_state`, `p_city`, `p_zip`, `p_telephone`, `p_fax`, `m_street`, `m_city`, `m_state`, `m_zip`, `m_telephone`, `m_fax`, `r_name`, `r_title`, `r_street`, `r_city`, `r_state`, `r_zip`, `r_telephone`, `r_fax`, `dot_number`, `form_of_business_c`, `form_of_business`, `type_of_auth`, `p_29a`, `p_29b`, `p_30`, `p_31`, `affl_cont`, `affl_file`, `p_33`, `p_34`, `p_35`, `p_36_check`, `p_36_file`, `p_37`, `p_38_name`, `sign_link`, `title`, `date`, `no_of_checkboxes`, `payment_method`, `cc_type`, `cc_number`, `cc_date`, `cc_name`, `payment_amount`, `street`, `city`, `state`, `zip`, `sign_link1`, `date1`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `extra6`, `creationdate_time`, `last_update`, `created_by`) VALUES
(1, 1, '1', 'vxsdcc', 'acacas', 'aca', 'ascascas', 'casc', 'cascac', 11111, 11111, 'asca', 'casc', 'sacas', 'cascascc', 111, 11111, 'acsac', 'asc', 'ascas', 'casc', 'ascasc', 'acasca', '11111', '111111', 111111, 1, 'Prasanjeet Chakraborty', '1', '1', 1, 1, 1, '1', '1', 1, 1, 1, 1, '1', 1, '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 600, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, '2018-06-27 15:00:42', '1', 'tonygreg');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_mcs`
--

CREATE TABLE `dot_tracker_mcs` (
  `id` int(255) NOT NULL,
  `reason_for_filing` text CHARACTER SET utf8 NOT NULL,
  `legal_business_name` text CHARACTER SET utf8 NOT NULL,
  `doing_business_as` text CHARACTER SET utf8 NOT NULL,
  `p_street` text NOT NULL,
  `p_city` text NOT NULL,
  `p_state` text NOT NULL,
  `p_zip` text NOT NULL,
  `p_colonia` text NOT NULL,
  `m_street` text NOT NULL,
  `m_city` text NOT NULL,
  `m_state` text NOT NULL,
  `m_zip` text NOT NULL,
  `m_colonia` text NOT NULL,
  `p_telephone` text NOT NULL,
  `p_mobile` text NOT NULL,
  `p_fax` text NOT NULL,
  `usdot_num` text NOT NULL,
  `mc_mx_num` text NOT NULL,
  `dun_bradstreet_num` text NOT NULL,
  `irs_tax_id_num` text NOT NULL,
  `email` text NOT NULL,
  `carrier_mileage` text NOT NULL,
  `company_operation` text NOT NULL,
  `operation_classification` text NOT NULL,
  `text_area23` text NOT NULL,
  `cargo_classification` text NOT NULL,
  `text_area24` text NOT NULL,
  `hazardous_material` text NOT NULL,
  `num_of_vehicle_owned` text NOT NULL,
  `num_of_vehicle_term` text NOT NULL,
  `num_of_vehicle_trip` text NOT NULL,
  `within_100_driver1` text NOT NULL,
  `within_100_driver2` text NOT NULL,
  `beyond_100_driver1` text NOT NULL,
  `beyond_100_driver2` text NOT NULL,
  `total_driver` text NOT NULL,
  `total_cdl_driver` text NOT NULL,
  `is_revoked_fmcsa` text NOT NULL,
  `partner_name1` text NOT NULL,
  `partner_name2` text NOT NULL,
  `sign_name` text NOT NULL,
  `signature` text NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `creationdate_time` text NOT NULL,
  `created_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dot_tracker_mcs`
--

INSERT INTO `dot_tracker_mcs` (`id`, `reason_for_filing`, `legal_business_name`, `doing_business_as`, `p_street`, `p_city`, `p_state`, `p_zip`, `p_colonia`, `m_street`, `m_city`, `m_state`, `m_zip`, `m_colonia`, `p_telephone`, `p_mobile`, `p_fax`, `usdot_num`, `mc_mx_num`, `dun_bradstreet_num`, `irs_tax_id_num`, `email`, `carrier_mileage`, `company_operation`, `operation_classification`, `text_area23`, `cargo_classification`, `text_area24`, `hazardous_material`, `num_of_vehicle_owned`, `num_of_vehicle_term`, `num_of_vehicle_trip`, `within_100_driver1`, `within_100_driver2`, `beyond_100_driver1`, `beyond_100_driver2`, `total_driver`, `total_cdl_driver`, `is_revoked_fmcsa`, `partner_name1`, `partner_name2`, `sign_name`, `signature`, `title`, `date`, `creationdate_time`, `created_by`) VALUES
(15, '0', 'Yan Wang111', 'Ding Ma', 'asdfghgqwe', 'Marina Del Rey', 'California', '80621', '', 'gfdsazxcv', 'Marinia Del Rey', 'California', '84102', '', '4699105086', '', '', '', '', '', '1234567', 'yxw165730@gmail.com', '70000', 'A,D', 'B,E,H,L', '', 'C,K,S,AA', '', ';;;C,S,B,NB;;;;;;;;;;;;;;;;;C,S,B,NB;;;;;;;;;;;;;;;;;;;;C,S,B,NB;', '1,,,,,,,,,3,,,,,5', ',2,,,4,6,,,,,,,,,', ',,7,,,,9,,,10,,,,,', '2', '3', '5', '7', '17', '7', '1', 'Officer 3', 'Officer 2', 'Ding Ma', 'uploadsign/mcs/9478e5e41338f782bf05d301cbe12409.png', 'SDE', '2018-07-07', '2018-07-06 11:17:23', 'tonygreg'),
(16, '0', 'Ding Ma', 'Martin', '1231 asdasff sfdsf', 'Marina Del Rey', 'California', '83001', 'dgfgd', '1231 asdasff sfdsf', 'Marina Del Rey', 'California', '83001', 'dgfgd', '4561237854', '', '', '', '', '', '1111111', 'yxw165730@gmail.com', '3000', 'B,C,D', 'A,F,K,L', 'Hello Yan Wang, how are you?', 'I,J,K,L,M,N,O,P', '', 'C;S,NB;B;;;;;;;;;;;;;;;;;C;S,NB;B;;;;;;;;;NB;C,B;S;;;;;;;;;', '1,,,,,,,,,,,,,,10', '2,,,,4,,,6,7,8,,10,,,', '3,,,,,,,,,,,,6,,9', '1', '2', '5', '3', '11', '1', '1', 'Yan Wang', 'Wang Yan 11111', 'Ding Ma', '', 'Software Developer', '2018-07-06', '2018-07-06 12:02:47', 'tonygreg');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_mc_detachment`
--

CREATE TABLE `dot_tracker_mc_detachment` (
  `id` int(11) NOT NULL,
  `usdot` text NOT NULL,
  `mc` text NOT NULL,
  `legal_business_name` text NOT NULL,
  `office_name` text NOT NULL,
  `date` text NOT NULL,
  `created_by` text NOT NULL,
  `creation_datetime` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_mc_detachment`
--

INSERT INTO `dot_tracker_mc_detachment` (`id`, `usdot`, `mc`, `legal_business_name`, `office_name`, `date`, `created_by`, `creation_datetime`) VALUES
(20, 'cascas', 'cascscas', 'cscs', 'cssd', '04/26/2018', 'tonygreg', '2018-04-26 12:52:40'),
(21, '80806', 'MC324', 'Prasanjeet Tech', 'test copy', '04/27/2018', 'tonygreg', '2018-04-26 03:09:47'),
(22, '789978', 'MC3242', 'gdfkdgk', 'fjhgdffjh', '04/27/2018', 'tonygreg', '2018-04-26 03:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_mc_reattachment`
--

CREATE TABLE `dot_tracker_mc_reattachment` (
  `id` int(11) NOT NULL,
  `usdot` text NOT NULL,
  `mc` text NOT NULL,
  `legal_business_name` text NOT NULL,
  `office_name` text NOT NULL,
  `date` text NOT NULL,
  `created_by` text NOT NULL,
  `creation_datetime` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_mc_reattachment`
--

INSERT INTO `dot_tracker_mc_reattachment` (`id`, `usdot`, `mc`, `legal_business_name`, `office_name`, `date`, `created_by`, `creation_datetime`) VALUES
(4, '78968', 'MC456', 'uggik', 'dhgfdjh', '04/27/2018', 'tonygreg', '2018-04-26 03:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_mexico`
--

CREATE TABLE `dot_tracker_mexico` (
  `id` int(255) NOT NULL,
  `usdot` int(10) NOT NULL,
  `ein` text NOT NULL,
  `no_of_axles` int(10) NOT NULL,
  `vin_no` text NOT NULL,
  `vehicle_owned` text NOT NULL,
  `truck_unit_no` text NOT NULL,
  `title_state` text NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `year` text NOT NULL,
  `license_plate` text NOT NULL,
  `plate_state` text NOT NULL,
  `type_of_fuel` text NOT NULL,
  `unloaded_weight` text NOT NULL,
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  `ext6` text,
  `ext7` text,
  `created_by` text NOT NULL,
  `creation_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_mexico`
--

INSERT INTO `dot_tracker_mexico` (`id`, `usdot`, `ein`, `no_of_axles`, `vin_no`, `vehicle_owned`, `truck_unit_no`, `title_state`, `make`, `model`, `year`, `license_plate`, `plate_state`, `type_of_fuel`, `unloaded_weight`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `ext6`, `ext7`, `created_by`, `creation_datetime`) VALUES
(1, 24232, 'fdvds', 123, 'gkhkl', 'khjvk', 'hlkkhv', 'kjj', 'jcghv', 'kjvhj', 'kj', 'vjcgjvh', 'hjc', 'vhj', 'cg', 'khlghjf', NULL, NULL, NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-18 16:58:01'),
(2, 21313, 'scdsvs', 23, 'cscsd', 'csdscsc', 'csdc', 'sdc', 'c', 'c', 'ccssccsdcs', 'dsfsdfsd', 'sdfsdf', 'sdfdsf', 'sfsdfs', 'sdvv', NULL, NULL, NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-18 17:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_newyork`
--

CREATE TABLE `dot_tracker_newyork` (
  `id` int(255) NOT NULL,
  `usdot` int(10) NOT NULL,
  `ein_no` text NOT NULL,
  `owner_ssn` text NOT NULL,
  `vehicle_type` text NOT NULL,
  `no_of_axles` int(10) NOT NULL,
  `g_weight` text NOT NULL,
  `vin_no` text NOT NULL,
  `v_owned` text NOT NULL,
  `truck_unit` text NOT NULL,
  `title_state` text NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `year` text NOT NULL,
  `license_plate` text NOT NULL,
  `plate_state` text NOT NULL,
  `fuel_type` text NOT NULL,
  `unloaded_weight` text NOT NULL,
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  `ext6` text,
  `created_by` text NOT NULL,
  `creation_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_newyork`
--

INSERT INTO `dot_tracker_newyork` (`id`, `usdot`, `ein_no`, `owner_ssn`, `vehicle_type`, `no_of_axles`, `g_weight`, `vin_no`, `v_owned`, `truck_unit`, `title_state`, `make`, `model`, `year`, `license_plate`, `plate_state`, `fuel_type`, `unloaded_weight`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `ext6`, `created_by`, `creation_datetime`) VALUES
(1, 12123, 'dsdsad', 'dasd', '1', 12213, 'dasd', '21321', 'dasd', 'dasd', 'dsd', 'dasd', 'dsad', 'dasd', 'sad', 'dasd', 'dsad', 'dasd', 'asdsad', NULL, NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-20 01:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_notes`
--

CREATE TABLE `dot_tracker_notes` (
  `id` int(255) NOT NULL,
  `quote_id` int(255) NOT NULL,
  `date` text NOT NULL,
  `note` text NOT NULL,
  `created_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_notes`
--

INSERT INTO `dot_tracker_notes` (`id`, `quote_id`, `date`, `note`, `created_by`) VALUES
(29, 140, '2018-04-28 02:30:39', 'This is order', 'tonygreg'),
(30, 140, '2018-04-28 02:30:49', 'this is bara nots', 'tonygreg'),
(31, 140, '2018-04-28 02:37:48', 'Tony is a rich man', 'tonygreg'),
(32, 137, '2018-04-28 02:40:25', 'sada', 'tonygreg'),
(33, 135, '2018-04-28 02:40:49', 'Prasanjeet Ch', 'tonygreg'),
(34, 137, '2018-04-28 04:23:05', 'bhvgcbv', 'tonygreg'),
(35, 142, '2018-04-29 10:32:54', 'sadsf', 'tonygreg'),
(36, 143, '2018-04-29 10:52:17', 'zasdsadsa', 'tonygreg'),
(37, 166, '2018-05-12 04:42:12', 'asdvbds', 'tonygreg');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_order`
--

CREATE TABLE `dot_tracker_order` (
  `id` int(255) NOT NULL,
  `quote_id` int(255) NOT NULL,
  `form_details` text NOT NULL,
  `extrafields` text,
  `created_by` text NOT NULL,
  `creation_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_order`
--

INSERT INTO `dot_tracker_order` (`id`, `quote_id`, `form_details`, `extrafields`, `created_by`, `creation_datetime`, `status`) VALUES
(9, 135, '{\"servicety30\":\"22\",\"servicety33\":\"4\"}', '', 'tonygreg', '2018-04-26 06:38:09', 0),
(10, 136, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-04-28 00:19:22', 0),
(11, 137, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-04-28 00:20:40', 0),
(12, 138, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-04-28 00:23:31', 0),
(13, 139, '{\"servicety1\":0,\"servicety4\":0,\"servicety20\":0}', NULL, 'tonygreg', '2018-04-28 00:24:28', 0),
(14, 140, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-04-28 00:52:06', 0),
(15, 141, '{\"servicety8\":0}', NULL, 'tonygreg', '2018-04-28 03:00:37', 0),
(16, 142, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-04-29 10:32:54', 0),
(17, 143, '{\"servicety15\":0}', NULL, 'tonygreg', '2018-04-29 10:52:17', 0),
(18, 144, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-04-30 01:26:21', 0),
(19, 145, '{\"servicety30\":0}', NULL, 'tonygreg', '2018-04-30 01:49:25', 0),
(20, 163, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-05-01 02:23:29', 0),
(21, 164, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-05-01 03:03:30', 0),
(22, 165, '{\"servicety1\":0}', NULL, 'tonygreg', '2018-05-03 03:02:42', 0),
(23, 166, '{\"servicety1\":0,\"servicety35\":0}', NULL, 'tonygreg', '2018-05-12 04:42:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_oregaon`
--

CREATE TABLE `dot_tracker_oregaon` (
  `id` int(255) NOT NULL,
  `usdot` int(255) NOT NULL,
  `o_full_name` text NOT NULL,
  `d_full_name` text NOT NULL,
  `cargo` text NOT NULL,
  `highway` text NOT NULL,
  `date_entering` text NOT NULL,
  `loading` text NOT NULL,
  `year` text NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `license_plate` text NOT NULL,
  `vin_no` text NOT NULL,
  `unit_no` text NOT NULL,
  `odometer` text NOT NULL,
  `vehicle_owned` text NOT NULL,
  `miles` text NOT NULL,
  `apportioned` text NOT NULL,
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  `ext6` text,
  `ext7` text,
  `ext8` text,
  `ext9` text,
  `ext10` text,
  `created_by` text NOT NULL,
  `creation_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_oregaon`
--

INSERT INTO `dot_tracker_oregaon` (`id`, `usdot`, `o_full_name`, `d_full_name`, `cargo`, `highway`, `date_entering`, `loading`, `year`, `make`, `model`, `license_plate`, `vin_no`, `unit_no`, `odometer`, `vehicle_owned`, `miles`, `apportioned`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `ext6`, `ext7`, `ext8`, `ext9`, `ext10`, `created_by`, `creation_datetime`) VALUES
(1, 12332, 'dadad', 'asdad', 'dasdas', 'dasd', '06/17/2018', 'dasd', 'dasdasd', 'dsada', 'dasda', 'dasda', 'dasdsad', 'dasda', 'dasdas', 'dasdasd', 'asdasd', 'dasda', 'dasd', 'asdas', 'dasdad', '06/18/2018', 'sfgfdfg', NULL, NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-15 23:52:13'),
(2, 1231, 'fsdf', 'fdsf', 'dfsf', 'fsdf', 'fsdfds', 'fsdfds', 'fdsfsf', 'fdsfds', 'fdsfsd', 'fdsfdsf', 'fsfsd', 'fdsfs', 'fdsfsd', 'fdsfds', 'fdsfs', 'fdsfsd', 'dsdfdsfs', 'fsdfsdf', 'fdsfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tonygreg', '2018-06-15 23:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_paymentlog`
--

CREATE TABLE `dot_tracker_paymentlog` (
  `id` int(255) NOT NULL,
  `authorization_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `response` text NOT NULL,
  `creation_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `extra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_paymentlog`
--

INSERT INTO `dot_tracker_paymentlog` (`id`, `authorization_id`, `status`, `response`, `creation_datetime`, `extra`) VALUES
(1, 39, 'false', '{\"success\":\"false\",\"err_code\":\"6\",\"err_message\":\"The credit card number is invalid.\"}', '2018-04-21 03:22:00', 'NA'),
(2, 39, 'true', '{\"success\":\"false\",\"err_code\":\"6\",\"err_message\":\"The credit card number is invalid.\"}', '2018-04-21 03:22:05', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_permission`
--

CREATE TABLE `dot_tracker_permission` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `Mon` int(10) NOT NULL DEFAULT '0',
  `Tue` int(10) NOT NULL DEFAULT '0',
  `Wed` int(10) NOT NULL DEFAULT '0',
  `Thu` int(10) NOT NULL DEFAULT '0',
  `Fri` int(10) NOT NULL DEFAULT '0',
  `Sat` int(10) NOT NULL DEFAULT '0',
  `Sun` int(10) NOT NULL DEFAULT '0',
  `extra` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_quote`
--

CREATE TABLE `dot_tracker_quote` (
  `id` int(255) NOT NULL,
  `shipper` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` text,
  `city` text,
  `mobile` text,
  `state` text,
  `company` text,
  `fax` int(255) DEFAULT NULL,
  `zip` int(255) DEFAULT NULL,
  `arrdata` text NOT NULL,
  `totpayment` float NOT NULL,
  `discounted_price` text,
  `creationdate` text NOT NULL,
  `last_update` datetime DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `mailCount` int(255) NOT NULL DEFAULT '0',
  `smsCount` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_quote`
--

INSERT INTO `dot_tracker_quote` (`id`, `shipper`, `email`, `address`, `fname`, `lname`, `phone`, `city`, `mobile`, `state`, `company`, `fax`, `zip`, `arrdata`, `totpayment`, `discounted_price`, `creationdate`, `last_update`, `created_by`, `status`, `mailCount`, `smsCount`) VALUES
(135, 'Prasanjeet Infotech', '', '', 'Prasanjeet', 'Chakraborty', '', '', '', NULL, NULL, NULL, NULL, '[{\"id\":\"servicety30\",\"amt\":\"$10\"},{\"id\":\"servicety33\",\"amt\":\"$20\"}]', 30, '$25', '2018-04-26 06:38:09', NULL, 'tonygreg', 4, 0, 0),
(136, 'PC Transportation', '', '', 'Prasanjeet', 'Chakraborty', '', '', '', NULL, NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$100\"}]', 100, '$12', '2018-04-28 00:19:22', NULL, 'tonygreg', 3, 0, 0),
(137, 'Prasanjeet Infotech', 'sadsa@sdfdsf.com', '', 'Prasanjeet', 'Chak', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$123\"}]', 123, '', '2018-04-28 00:20:40', NULL, 'tonygreg', 4, 0, 0),
(138, 'sadasd', 'sadsa@dsdfs.com', '', 'dsadas', 'sadsa', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$321\"}]', 321, '$12', '2018-04-28 00:23:31', NULL, 'tonygreg', 4, 0, 0),
(139, 'Prasanjeet Infotech', '', '', 'Prasanjeet ', 'Chakraborty', '', '', '', NULL, NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$10\"},{\"id\":\"servicety4\",\"amt\":\"$20\"},{\"id\":\"servicety20\",\"amt\":\"$40\"}]', 70, '$50', '2018-04-28 00:24:28', NULL, 'tonygreg', 3, 0, 0),
(140, 'Prasanjeet Infotech', '', '', 'Prasanjeet', 'Chakr', '', '', '', NULL, NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '', '2018-04-28 00:52:06', NULL, 'tonygreg', 3, 0, 0),
(141, 'Prasanjeet Infotech', 'prasanjeet.chakraborty@gmail.com', '', 'sada', 'asdad', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety8\",\"amt\":\"$112\"}]', 112, '', '2018-04-28 03:00:37', NULL, 'tonygreg', 3, 0, 0),
(142, 'asda', '', '', 'dasdasd', 'dsadasd', '', '', '', NULL, NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12313\"}]', 12313, '', '2018-04-29 10:32:54', NULL, 'tonygreg', 3, 0, 0),
(143, 'sadas', '', '', 'dsfsdfs', 'fdsfsdfs', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety15\",\"amt\":\"$321321\"}]', 321321, '$123213', '2018-04-29 10:52:17', NULL, 'tonygreg', 3, 0, 0),
(144, 'sf', 'asd@sdf.com', '', 'sdfdsd', 'sfds', '', '', '123213113121', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '', '2018-04-30 01:26:21', NULL, 'tonygreg', 3, 0, 0),
(145, 'huytdfsad', '', '', 'uty', 'htrty', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety30\",\"amt\":\"$12\"}]', 12, '$5', '2018-04-30 01:49:25', NULL, 'tonygreg', 4, 0, 0),
(146, 'sadadadasddasd', '', '', 'sadadsa', 'sdasdasdad', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 01:53:11', NULL, 'tonygreg', 3, 0, 0),
(147, 'khgjfh', '', '', 'jbkhgc', 'bmhvngcn', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$43\"}]', 43, '$34', '2018-05-01 01:55:15', NULL, 'tonygreg', 3, 0, 0),
(148, 'khgjfh', '', '', 'jbkhgc', 'bmhvngcn', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$43\"}]', 43, '$34', '2018-05-01 01:56:03', NULL, 'tonygreg', 3, 0, 0),
(149, 'hgyuft', '', '', 'kljh', 'klnj', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$243\"}]', 243, '$30', '2018-05-01 01:56:28', NULL, 'tonygreg', 3, 0, 0),
(150, 'sadas', '', '', 'sadasd', 'sadsad', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$10\"}]', 10, '$2', '2018-05-01 01:57:33', NULL, 'tonygreg', 3, 0, 0),
(151, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 01:58:46', NULL, 'tonygreg', 3, 0, 0),
(152, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:00:57', NULL, 'tonygreg', 3, 0, 0),
(153, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:04:54', NULL, 'tonygreg', 3, 0, 0),
(154, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:05:13', NULL, 'tonygreg', 3, 0, 0),
(155, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:09:21', NULL, 'tonygreg', 3, 0, 0),
(156, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:09:49', NULL, 'tonygreg', 3, 0, 0),
(157, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:11:00', NULL, 'tonygreg', 3, 0, 0),
(158, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:11:08', NULL, 'tonygreg', 3, 0, 0),
(159, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:13:39', NULL, 'tonygreg', 3, 0, 0),
(160, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:14:33', NULL, 'tonygreg', 3, 0, 0),
(161, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:18:03', NULL, 'tonygreg', 3, 0, 0),
(162, 'dasd', '', '', 'asdas', 'adas', '', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-01 02:19:04', NULL, 'tonygreg', 2, 0, 0),
(163, 'Prasanjeet Infotech', 'asdasdas@qwdsfds.com', 'sdcdsfsds', 'Prasanjeetsadsadsaa', 'Chakrabortyasdad', '234324', 'fdsf', '2342', 'dsa', NULL, NULL, 123213213, '[{\"id\":\"servicety1\",\"amt\":\"$20\"}]', 20, '$11', '2018-05-01 02:23:29', NULL, 'tonygreg', 2, 0, 0),
(164, 'TigrnInfo', 'prasanjeet.chakraborty@gmail.com', '', 'das', 'sadsad', '8237357638', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$21\"},{\"id\":\"servicety7\",\"amt\":\"$12\"}]', 33, '$11', '2018-05-01 03:03:30', NULL, 'tonygreg', 2, 0, 0),
(165, 'asdsa', 'asdsa@fssdf.com', '', 'dasdas', 'dasda', '765423567', '', '', '', NULL, NULL, NULL, '[{\"id\":\"servicety15\",\"amt\":\"$12\"}]', 12, '$11', '2018-05-03 03:02:42', NULL, 'tonygreg', 4, 0, 0),
(166, 'asdas', 'asda@edsfgd.com', 'safdsfsffsd', 'dasdad', 'dasd', '2134563211', 'fsddf', '234232313', 'sdfdff', NULL, NULL, NULL, '[{\"id\":\"servicety1\",\"amt\":\"$123\"},{\"id\":\"servicety35\",\"amt\":\"$132\"}]', 255, '$12', '2018-05-12 04:42:12', NULL, 'sadasda', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_quote_log`
--

CREATE TABLE `dot_tracker_quote_log` (
  `id` int(255) NOT NULL,
  `logDet` text NOT NULL,
  `quote_id` int(11) NOT NULL,
  `extrafield` text NOT NULL,
  `date` text NOT NULL,
  `created_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_quote_log`
--

INSERT INTO `dot_tracker_quote_log` (`id`, `logDet`, `quote_id`, `extrafield`, `date`, `created_by`) VALUES
(1, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Legal Business Name</td><td>None</td><td>Prasanjeet Infotech</td></tr><tr><td>First Name</td><td>None</td><td>Prasanjeet</td></tr><tr><td>Last Name</td><td>None</td><td>Chakraborty</td></tr><tr><td>Total Quote Amount</td><td>None</td><td>20.00</td></tr><tr><td>Discounted Price</td><td>None</td><td>$11</td></tr><tr><td>Added By</td><td>None</td><td>tonygreg</td></tr><tr><td>Status</td><td>None</td><td>Quoted</td></tr><table>', 163, 'no Data', '2018-05-01 02:23:29', 'tonygreg'),
(2, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Email</td><td>None</td><td>sada@dsfds.com</td></tr><table>', 163, 'no Data', '2018-05-01 02:23:29', 'tonygreg'),
(3, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Email</td><td>sada@dsfds.com</td><td>asdasdas@qwdsfds.com</td></tr><table>', 163, 'no Data', '2018-05-01 02:23:29', 'tonygreg'),
(4, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Address</td><td>None</td><td>sdcdsfsds</td></tr><tr><td>First Name</td><td>Prasanjeet</td><td>Prasanjeetsadsadsaa</td></tr><tr><td>Last Name</td><td>Chakraborty</td><td>Chakrabortyasdad</td></tr><tr><td>Phone Number</td><td>None</td><td>234324</td></tr><tr><td>City</td><td>None</td><td>fdsf</td></tr><tr><td>Mobile Number</td><td>None</td><td>2342</td></tr><table>', 163, 'no Data', '2018-05-01 02:49:54', 'tonygreg'),
(5, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Legal Business Name</td><td>None</td><td>sadas</td></tr><tr><td>First Name</td><td>None</td><td>das</td></tr><tr><td>Last Name</td><td>None</td><td>sadsad</td></tr><tr><td>Total Quote Amount</td><td>None</td><td>21.00</td></tr><tr><td>Discounted Price</td><td>None</td><td>$11</td></tr><tr><td>Added By</td><td>None</td><td>tonygreg</td></tr><tr><td>Status</td><td>None</td><td>Quoted</td></tr></table>', 164, 'no Data', '2018-05-01 03:03:30', 'tonygreg'),
(6, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Legal Business Name</td><td>sadas</td><td>PrasanjeetInfo</td></tr><tr><td>Email</td><td>None</td><td>prasanjeet.chakraborty@gmail.com</td></tr><tr><td>Phone Number</td><td>None</td><td>8237357638</td></tr></table>', 164, 'no Data', '2018-05-01 03:07:23', 'tonygreg'),
(7, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Legal Business Name</td><td>PrasanjeetInfo</td><td>TigrnInfo</td></tr></table>', 164, 'no Data', '2018-05-01 03:08:51', 'tonygreg'),
(8, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Total Quote Amount</td><td>21</td><td>33.00</td></tr></table>', 164, 'no Data', '2018-05-01 03:12:45', 'tonygreg'),
(9, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Email</td><td>None</td><td>sadsa@dsdfs.com</td></tr></table>', 138, 'no Data', '2018-05-01 03:15:11', 'tonygreg'),
(10, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>State</td><td>None</td><td>dsa</td></tr><tr><td>Zip</td><td>None</td><td>123213213</td></tr></table>', 163, 'no Data', '2018-05-03 02:04:44', 'tonygreg'),
(11, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Legal Business Name</td><td>None</td><td>asdsa</td></tr><tr><td>First Name</td><td>None</td><td>dasdas</td></tr><tr><td>Last Name</td><td>None</td><td>dasda</td></tr><tr><td>Total Quote Amount</td><td>None</td><td>21.00</td></tr><tr><td>Added By</td><td>None</td><td>tonygreg</td></tr><tr><td>Status</td><td>None</td><td>Quoted</td></tr></table>', 165, 'no Data', '2018-05-03 03:02:42', 'tonygreg'),
(12, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Phone Number</td><td>None</td><td>765423567</td></tr></table>', 165, 'no Data', '2018-05-03 03:05:13', 'tonygreg'),
(13, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Total Quote Amount</td><td>21</td><td>0.00</td></tr></table>', 165, 'no Data', '2018-05-03 03:05:52', 'tonygreg'),
(14, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr></table>', 165, 'no Data', '2018-05-03 03:06:43', 'tonygreg'),
(15, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Email</td><td>None</td><td>sadsa@sdfdsf.com</td></tr></table>', 137, 'no Data', '2018-05-03 03:16:11', 'tonygreg'),
(16, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Email</td><td>None</td><td>asdsa@fssdf.com</td></tr><tr><td>Total Quote Amount</td><td>None</td><td>12.00</td></tr><tr><td>Discounted Price</td><td>None</td><td>$11</td></tr></table>', 165, 'no Data', '2018-05-11 00:31:04', 'tonygreg'),
(17, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr></table>', 165, 'no Data', '2018-05-11 00:40:30', 'tonygreg'),
(18, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Legal Business Name</td><td>None</td><td>asdas</td></tr><tr><td>First Name</td><td>None</td><td>dasdad</td></tr><tr><td>Last Name</td><td>None</td><td>dasd</td></tr><tr><td>Email</td><td>None</td><td>asda@edsfgd.com</td></tr><tr><td>Phone Number</td><td>None</td><td>2134563211</td></tr><tr><td>Mobile Number</td><td>None</td><td>234232313</td></tr><tr><td>Address</td><td>None</td><td>safdsfsffsd</td></tr><tr><td>City</td><td>None</td><td>fsddf</td></tr><tr><td>State</td><td>None</td><td>sdfdff</td></tr><tr><td>Total Quote Amount</td><td>None</td><td>255.00</td></tr><tr><td>Zip</td><td>None</td><td>31312</td></tr><tr><td>Added By</td><td>None</td><td>tonygreg</td></tr><tr><td>Status</td><td>None</td><td>Quoted</td></tr></table>', 166, 'no Data', '2018-05-12 04:42:12', 'tonygreg'),
(19, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr><tr><td>Zip</td><td>31312</td><td></td></tr><tr><td>Discounted Price</td><td>None</td><td>$12</td></tr></table>', 166, 'no Data', '2018-05-12 04:51:12', 'tonygreg'),
(20, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr></table>', 166, 'no Data', '2018-05-12 04:51:33', 'tonygreg'),
(21, '<table class=\"table table-striped\"><tr style=\"font-weight: bold;\"><td>Field </td><td>Old Values</td><td>New Values</td></tr></table>', 166, 'no Data', '2018-05-12 04:53:37', 'tonygreg');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_servicetype`
--

CREATE TABLE `dot_tracker_servicetype` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `creationdatetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_servicetype`
--

INSERT INTO `dot_tracker_servicetype` (`id`, `title`, `slug`, `description`, `creationdatetime`) VALUES
(1, 'S Corporation1', 'servicety1', 'This is demo ', '2018-05-05 21:18:23'),
(2, 'C Corporation', 'servicety2', 'This is C Corporation demo', '2018-05-05 21:21:52'),
(3, 'Limited Liability Company (LLC)', 'servicety3', 'This is LLC Demo', '2018-05-05 21:22:13'),
(4, 'Limited Liability Partnership (LLP)', 'servicety4', 'This is demo ', '2018-05-05 21:22:33'),
(5, 'Limited Partnership (LP)', 'servicety5', 'This is demo ', '2018-05-05 21:23:06'),
(6, 'Fictitious Business Name (DBA)', 'servicety6', 'This is demo ', '2018-05-05 21:23:30'),
(7, 'USDOT #', 'servicety7', 'This is demo ', '2018-05-05 21:24:19'),
(8, 'Biennial Update', 'servicety28', 'This is demo ', '2018-05-05 21:25:11'),
(9, 'USDOT# Reactivation', 'servicety34', 'This is demo ', '2018-05-05 21:25:32'),
(10, 'Texas Operating Authority', 'servicety20', 'This is demo ', '2018-05-05 21:25:56'),
(11, 'USDOT# Deactivation', 'servicety35', 'This is demo ', '2018-05-05 21:26:18'),
(12, 'Hazardous Materials Registration (Federal)', 'servicety15', 'This is demo ', '2018-05-05 21:27:06'),
(13, 'Hazardous Materials Registration (CA)', 'servicety14', 'This is demo ', '2018-05-05 21:27:30'),
(14, 'MC # Carrier Authority', 'servicety8', 'This is demo ', '2018-05-05 21:28:03'),
(15, 'BOC-3', 'servicety16', 'This is demo ', '2018-05-05 21:28:23'),
(16, 'MC# Revocation', 'servicety31', 'This is demo ', '2018-05-05 21:28:43'),
(17, 'MC# Reinstatement', 'servicety29', 'This is demo ', '2018-05-05 21:29:07'),
(18, 'MC# Name Change', 'servicety32', 'This is demo ', '2018-05-05 21:30:01'),
(19, 'MC# Detachment', 'servicety30', 'This is demo ', '2018-05-05 21:30:24'),
(20, 'MC# Reattachment', 'servicety33', 'This is demo ', '2018-05-05 21:30:51'),
(21, 'Unified Carrier Registration (UCR)', 'servicety19', 'This is demo ', '2018-05-05 21:31:13'),
(22, 'MC # Broker Authority', 'servicety9', 'This is demo ', '2018-05-05 21:31:29'),
(23, 'Freight Forwarder (FF #)', 'servicety10', 'This is demo ', '2018-05-05 21:31:45'),
(24, 'BMC-85 Trust Bond', 'servicety22', 'This is demo ', '2018-05-05 21:32:01'),
(25, 'BMC-84 Surety Bond', 'servicety21', 'This is demo ', '2018-05-05 21:32:26'),
(26, 'California DOT # (CA #)', 'servicety11', 'This is demo ', '2018-05-05 21:33:46'),
(27, 'Employee Pull Notice (EPN)', 'servicety13', 'This is demo ', '2018-05-05 21:34:05'),
(28, 'Motor Carrier Permit (MCP)', 'servicety12', 'This is demo ', '2018-05-05 21:34:22'),
(29, 'International Registration Plan (IRP)', 'servicety23', 'This is demo ', '2018-05-05 21:34:44'),
(30, 'Highway Use Tax (2290)', 'servicety18', 'This is demo ', '2018-05-05 21:35:16'),
(31, 'International Fuel Tax Agreement (IFTA)', 'servicety17', 'This is demo ', '2018-05-05 21:35:45'),
(32, 'Oregon Fuel Tax Permit', 'servicety25', 'This is demo ', '2018-05-05 21:36:13'),
(33, 'New York HUT Permit', 'servicety26', 'This is demo ', '2018-05-05 21:36:31'),
(34, 'New Mexico Weight Distance Permit', 'servicety24', 'This is demo ', '2018-05-05 21:36:49'),
(35, 'KYU Weight Distance Permit', 'servicety27', 'This is demo ', '2018-05-05 21:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_sms`
--

CREATE TABLE `dot_tracker_sms` (
  `id` int(255) NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL,
  `creationdatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_sms`
--

INSERT INTO `dot_tracker_sms` (`id`, `phone`, `message`, `creationdatetime`, `status`) VALUES
(2, '+918237357638', 'Credit Card Authorization request has been generated , Click on the link to authenticate http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=16', '2018-04-01 02:00:30', 1),
(3, '+918237357638', 'Credit Card Authorization request has been generated , Click on the link to authenticate http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=17', '2018-04-01 02:01:08', 1),
(4, '+918237357638', 'Quote form  submitted successfullly', '2018-04-01 02:08:34', 1),
(5, '2131232121', 'Credit Card Authorization request has been generated , Click on the link to authenticate http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=24', '2018-04-11 01:32:02', 1),
(6, '4353454354', 'DearCustomer, Please, Click on the link http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=32to sign the authorization form. Thank you for your business. DOT Operating Authority, INC', '2018-04-18 01:49:00', 1),
(7, '3424234234', 'DearCustomer, Please, Click on the link http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=36to sign the authorization form. Thank you for your business. DOT Operating Authority, INC', '2018-04-18 01:59:51', 1),
(8, '3424234234', 'DearCustomer, Please, Click on the link http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=36to sign the authorization form. Thank you for your business. DOT Operating Authority, INC', '2018-04-18 02:01:12', 1),
(9, '765423567', 'Hi dasdas,Quote form  submitted successfullly', '2018-05-03 03:06:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dot_tracker_user`
--

CREATE TABLE `dot_tracker_user` (
  `id` int(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text,
  `extra` text,
  `phone` text,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `active` int(10) NOT NULL,
  `creationdatetime` datetime NOT NULL,
  `last_updated` datetime DEFAULT NULL,
  `password` text NOT NULL,
  `role` int(50) NOT NULL,
  `etime` text,
  `stime` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dot_tracker_user`
--

INSERT INTO `dot_tracker_user` (`id`, `fname`, `lname`, `extra`, `phone`, `username`, `email`, `active`, `creationdatetime`, `last_updated`, `password`, `role`, `etime`, `stime`) VALUES
(1, 'Prasanjeet', 'Chakraborty', '', '2343676564', 'sadasda', 'das@das.com', 1, '2018-03-15 17:50:05', '2018-04-18 11:11:03', 'aaa', 1, NULL, NULL),
(2, 'Tigran', 'Gregorian', '', '123312123', 'tonygreg', 'tony@gmail.com', 1, '2018-03-15 18:00:58', '2018-04-18 10:06:34', 'aaa', 1, NULL, NULL),
(3, 'Kunal', 'Nimje', '', '6785698', 'kunalnimje', 'khjvgvjh@dfsf.com', 1, '2018-03-16 06:47:27', '2018-04-18 10:05:41', 'aaa', 2, NULL, NULL),
(4, 'Yan', 'Wang', NULL, '1111111111', 'yan', '123456@gmail.com', 0, '0000-00-00 00:00:00', NULL, '12345', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dot_tracker_authorizationform`
--
ALTER TABLE `dot_tracker_authorizationform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_bmc84`
--
ALTER TABLE `dot_tracker_bmc84`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_corporationform`
--
ALTER TABLE `dot_tracker_corporationform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_dba`
--
ALTER TABLE `dot_tracker_dba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_emailtemp`
--
ALTER TABLE `dot_tracker_emailtemp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_epn1`
--
ALTER TABLE `dot_tracker_epn1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_epn2`
--
ALTER TABLE `dot_tracker_epn2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_epn3`
--
ALTER TABLE `dot_tracker_epn3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_kentucky`
--
ALTER TABLE `dot_tracker_kentucky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_login`
--
ALTER TABLE `dot_tracker_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_mc`
--
ALTER TABLE `dot_tracker_mc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_mcs`
--
ALTER TABLE `dot_tracker_mcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_mc_detachment`
--
ALTER TABLE `dot_tracker_mc_detachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_mc_reattachment`
--
ALTER TABLE `dot_tracker_mc_reattachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_mexico`
--
ALTER TABLE `dot_tracker_mexico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_newyork`
--
ALTER TABLE `dot_tracker_newyork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_notes`
--
ALTER TABLE `dot_tracker_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_order`
--
ALTER TABLE `dot_tracker_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_oregaon`
--
ALTER TABLE `dot_tracker_oregaon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_paymentlog`
--
ALTER TABLE `dot_tracker_paymentlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_permission`
--
ALTER TABLE `dot_tracker_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_quote`
--
ALTER TABLE `dot_tracker_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_quote_log`
--
ALTER TABLE `dot_tracker_quote_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_servicetype`
--
ALTER TABLE `dot_tracker_servicetype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dot_tracker_service_slugunique` (`slug`);

--
-- Indexes for table `dot_tracker_sms`
--
ALTER TABLE `dot_tracker_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_tracker_user`
--
ALTER TABLE `dot_tracker_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dot_tracker_authorizationform`
--
ALTER TABLE `dot_tracker_authorizationform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `dot_tracker_bmc84`
--
ALTER TABLE `dot_tracker_bmc84`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dot_tracker_corporationform`
--
ALTER TABLE `dot_tracker_corporationform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dot_tracker_dba`
--
ALTER TABLE `dot_tracker_dba`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dot_tracker_emailtemp`
--
ALTER TABLE `dot_tracker_emailtemp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dot_tracker_epn1`
--
ALTER TABLE `dot_tracker_epn1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dot_tracker_epn2`
--
ALTER TABLE `dot_tracker_epn2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dot_tracker_epn3`
--
ALTER TABLE `dot_tracker_epn3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dot_tracker_kentucky`
--
ALTER TABLE `dot_tracker_kentucky`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dot_tracker_login`
--
ALTER TABLE `dot_tracker_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `dot_tracker_mc`
--
ALTER TABLE `dot_tracker_mc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dot_tracker_mcs`
--
ALTER TABLE `dot_tracker_mcs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dot_tracker_mc_detachment`
--
ALTER TABLE `dot_tracker_mc_detachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `dot_tracker_mc_reattachment`
--
ALTER TABLE `dot_tracker_mc_reattachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dot_tracker_mexico`
--
ALTER TABLE `dot_tracker_mexico`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dot_tracker_newyork`
--
ALTER TABLE `dot_tracker_newyork`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dot_tracker_notes`
--
ALTER TABLE `dot_tracker_notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `dot_tracker_order`
--
ALTER TABLE `dot_tracker_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `dot_tracker_oregaon`
--
ALTER TABLE `dot_tracker_oregaon`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dot_tracker_paymentlog`
--
ALTER TABLE `dot_tracker_paymentlog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dot_tracker_permission`
--
ALTER TABLE `dot_tracker_permission`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dot_tracker_quote`
--
ALTER TABLE `dot_tracker_quote`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `dot_tracker_quote_log`
--
ALTER TABLE `dot_tracker_quote_log`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `dot_tracker_servicetype`
--
ALTER TABLE `dot_tracker_servicetype`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `dot_tracker_sms`
--
ALTER TABLE `dot_tracker_sms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dot_tracker_user`
--
ALTER TABLE `dot_tracker_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
