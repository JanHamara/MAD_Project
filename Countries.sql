-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2020 at 12:47 PM
-- Server version: 8.0.19
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Countries`
--

-- --------------------------------------------------------

--
-- Table structure for table `Countries`
--

CREATE TABLE `Countries` (
  `CountryNo` int NOT NULL,
  `Country` text COLLATE utf8_unicode_ci NOT NULL,
  `CountryCode` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Continent` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `CurrencyName` text COLLATE utf8_unicode_ci NOT NULL,
  `CurrencySign` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `AverageIncome` decimal(6,2) DEFAULT NULL,
  `AverageExpense` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Countries`
--

INSERT INTO `Countries` (`CountryNo`, `Country`, `CountryCode`, `Continent`, `CurrencyName`, `CurrencySign`, `AverageIncome`, `AverageExpense`) VALUES
(1, 'Afghanistan', 'AF', 'as', 'Afghan Afghani', 'AFN', '95.27', '493.45'),
(2, 'Albania', 'AL', 'eu', 'Albanian Lek', 'ALL', '402.39', '356.35'),
(3, 'Algeria', 'DZ', 'af', 'Algerian Dinar', 'DZD', '336.11', '573.99'),
(4, 'Andorra', 'AD', 'eu', 'Euro', 'EUR', '1969.11', '1080.73'),
(5, 'Angola', 'AO', 'af', 'Angolan Kwanza', 'AOA', '617.98', '1666.67'),
(6, 'Antigua and Barbuda', 'AG', 'ca', 'East Caribbean Dollar', 'XCD', '1443.03', '1101.12'),
(7, 'Argentina', 'AR', 'sa', 'Argentine Peso', 'ARS', '559.77', '573.48'),
(8, 'Armenia', 'AM', 'as', 'Armenian Dram', 'AMD', '400.96', '689.53'),
(9, 'Australia', 'AU', 'au', 'Australian Dollar', 'AUD', '3642.42', '2835.00'),
(10, 'Austria', 'AT', 'eu', 'Euro', 'EUR', '4420.76', '1545.86'),
(11, 'Azerbaijan', 'AZ', 'as', 'Azerbaijani Manat', 'AZN', '309.68', '634.48'),
(12, 'Bahamas', 'BS', 'ca', 'Bahamian Dollar', 'BSD', '2616.20', '2479.05'),
(13, 'Bahrain', 'BH', 'me', 'Bahraini Dinar', 'BHD', '1263.02', '1246.01'),
(14, 'Bangladesh', 'BD', 'as', 'Bangladeshi Taka', 'BDT', '344.59', '679.32'),
(15, 'Barbados', 'BB', 'ca', 'Barbadian Dollar', 'BBD', '1873.80', '1684.24'),
(16, 'Belarus', 'BY', 'eu', 'Belarusian Ruble', 'BYN', '437.57', '721.35'),
(17, 'Belgium', 'BE', 'eu', 'Euro', 'EUR', '3501.48', '1575.46'),
(18, 'Belize', 'BZ', 'ca', 'Belize Dollar', 'BZD', '1002.78', '1019.72'),
(19, 'Benin', 'BJ', 'af', 'West African Franc', 'XOF', '80.68', '518.10'),
(20, 'Bhutan', 'BT', 'as', 'Bhutanese Ngultrum', 'BTN', '384.18', '310.44'),
(21, 'Bolivia', 'BO', 'sa', 'Bolivian Boliviano', 'BOB', '454.53', '735.41'),
(22, 'Bosnia and Herzegovina', 'BA', 'eu', 'Bosnia-Herzegovina Convertible Mark', 'BAM', '481.15', '477.37'),
(23, 'Botswana', 'BW', 'af', 'Botswana Pula', 'BWP', '468.43', '615.03'),
(24, 'Brazil', 'BR', 'sa', 'Brazilian Real', 'BRL', '800.12', '910.94'),
(25, 'Brunei', 'BN', 'as', 'Brunei Dollar', 'BND', '1548.77', '957.26'),
(26, 'Bulgaria', 'BG', 'eu', 'Bulgarian Lev', 'BGN', '614.17', '833.09'),
(27, 'Burkina Faso', 'BF', 'af', 'West African Franc', 'XOF', '198.78', '719.10'),
(28, 'Burundi', 'BI', 'af', 'Burundian Franc', 'BIF', '226.93', '549.26'),
(29, 'Ivory Coast', 'CI', 'af', 'West African Franc', 'XOF', '348.79', '800.14'),
(30, 'Cape Verde', 'CV', 'af', 'Cape Verdean Escudo', 'CVE', '1734.46', '1122.02'),
(31, 'Cambodia', 'KH', 'as', 'Cambodian Riel', 'KHR', '222.31', '800.00'),
(32, 'Cameroon', 'CM', 'af', 'Central African Franc', 'XAF', '238.09', '857.51'),
(33, 'Canada', 'CA', 'na', 'Canadian Dollar', 'CAD', '3166.63', '1420.80'),
(34, 'Central African Republic', 'CF', 'af', 'Central African Franc', 'XAF', '146.34', '342.23'),
(35, 'Chad', 'TD', 'af', 'Central African Franc', 'XAF', '103.70', '533.18'),
(36, 'Chile', 'CL', 'sa', 'Chilean Peso', 'CLP', '794.34', '964.91'),
(37, 'China', 'CN', 'as', 'Chinese Yuan', 'CNY', '922.52', '880.75'),
(38, 'Colombia', 'CO', 'sa', 'Colombian Peso', 'COP', '412.78', '669.55'),
(39, 'Comoros', 'KM', 'af', 'Comorian Franc', 'KMF', '126.62', '417.45'),
(40, 'The Republic of Congo', 'CG', 'af', 'Central African Franc', 'XAF', '60.12', '489.12'),
(41, 'Costa Rica', 'CR', 'sa', 'Costa Rican Colón', 'CRC', '1058.76', '1124.65'),
(42, 'Croatia', 'HR', 'eu', 'Croatian Kuna', 'HRK', '1227.74', '1068.56'),
(43, 'Cuba', 'CU', 'ca', 'Cuban Peso', 'CUP', '766.88', '855.74'),
(44, 'Cyprus', 'CY', 'eu', 'Euro', 'EUR', '2143.10', '1080.40'),
(45, 'Czech Republic', 'CZ', 'eu', 'Czech Koruna', 'CZK', '1377.13', '978.72'),
(46, 'DR Congo', 'CD', 'af', 'Congolese Franc', 'CDF', '32.85', '1848.34'),
(47, 'Denmark', 'DK', 'eu', 'Danish Krone', 'DKK', '4288.89', '1786.21'),
(48, 'Djibouti', 'DJ', 'af', 'Djiboutian Franc', 'DJF', '1529.57', '1204.24'),
(50, 'Dominican Republic ', 'DO', 'sa', 'Dominican Peso', 'DOP', '338.46', '750.66'),
(51, 'Ecuador', 'EC', 'sa', 'United States Dollar', 'USD', '613.88', '744.59'),
(52, 'Egypt', 'EG', 'af', 'Egyptian Pound', 'EGP', '262.47', '329.79'),
(53, 'El Salvador', 'SV', 'ca', 'United States Dollar', 'USD', '422.58', '731.96'),
(54, 'Equatorial Guinea', 'GQ', 'af', 'Central African Franc', 'XAF', '224.00', '733.38'),
(55, 'Eritrea', 'ER', 'af', 'Eritrean Nakfa', 'ERN', '95.72', '423.34'),
(56, 'Estonia', 'EE', 'eu', 'Euro', 'EUR', '1384.55', '938.61'),
(57, 'Eswatini', 'SZ', 'af', 'South African Rand', 'SZL', '317.02', '748.58'),
(58, 'Ethiopia', 'ET', 'af', 'Ethiopian Birr', 'ETB', '46.02', '674.84'),
(59, 'Fiji', 'FJ', 'as', 'Fijian Dollar', 'FJD', '523.03', '805.53'),
(60, 'Finland', 'FI', 'eu', 'Euro', 'EUR', '3849.76', '1575.31'),
(61, 'France', 'FR', 'eu', 'Euro', 'EUR', '3319.91', '1621.34'),
(62, 'Gabon', 'GA', 'af', 'Central African Franc', 'XAF', '822.37', '1058.58'),
(63, 'Gambia', 'GM', 'af', 'Gambian Dalasi', 'GMD', '504.29', '434.29'),
(64, 'Georgia', 'GE', 'eu', 'Georgian Lari', 'GEL', '372.76', '627.52'),
(65, 'Germany', 'DE', 'eu', 'Euro', 'EUR', '3230.34', '1441.14'),
(66, 'Ghana', 'GH', 'af', 'Ghanaian Cedi', 'GHS', '162.28', '777.87'),
(67, 'Greece', 'GR', 'eu', 'Euro', 'EUR', '1526.19', '1227.36'),
(68, 'Grenada', 'GD', 'ca', 'East Caribbean Dollar', 'XCD', '1017.52', '902.56'),
(69, 'Guatemala', 'GT', 'ca', 'Guatemalan Quetzal', 'GTQ', '285.06', '913.01'),
(70, 'Guinea', 'GN', 'af', 'Guinean Franc', 'GNF', '125.56', '821.67'),
(71, 'Guinea-Bissau', 'GW', 'af', 'West African Franc', 'XOF', '36.95', '526.43'),
(72, 'Guyana', 'GY', 'sa', 'Guyanese Dollar', 'GYD', '538.26', '532.23'),
(73, 'Haiti', 'HT', 'ca', 'Haitian Gourde', 'HTG', '371.24', '582.22'),
(74, 'Vatican', 'VA', 'eu', 'Euro', 'EUR', '2856.12', '1514.33'),
(75, 'Honduras', 'HN', 'ca', 'Honduran Lempira', 'HNL', '447.85', '694.59'),
(76, 'Hungary', 'HU', 'eu', 'Hungarian Forint', 'HUF', '1072.61', '776.44'),
(77, 'Iceland', 'IS', 'eu', 'Icelandic Krona', 'ISK', '4169.16', '2420.15'),
(78, 'India', 'IN', 'as', 'Indian Rupee', 'INR', '472.71', '309.62'),
(79, 'Indonesia', 'ID', 'as', 'Indonesian Rupiah', 'IDR', '272.00', '519.33'),
(80, 'Iran', 'IR', 'as', 'Iranian Rial', 'IRR', '279.00', '691.43'),
(81, 'Iraq', 'IQ', 'as', 'Iraqi Dinar', 'IQD', '569.75', '670.48'),
(82, 'Ireland', 'IE', 'eu', 'Euro', 'EUR', '3556.93', '1747.96'),
(83, 'Israel', 'IL', 'as', 'Israeli New Shekel', 'ILS', '2216.39', '1445.09'),
(84, 'Italy', 'IT', 'eu', 'Euro', 'EUR', '2487.70', '1065.32'),
(85, 'Jamaica', 'JM', 'ca', 'Jamaican Dollar', 'JMD', '672.91', '854.43'),
(86, 'Japan', 'JP', 'as', 'Japanese Yen', 'JPY', '2995.93', '1165.50'),
(87, 'Jordan', 'JO', 'me', 'Jordanian Dinar', 'JOD', '695.33', '739.15'),
(88, 'Kazakhstan', 'KZ', 'eu', 'Kazakhstani Tenge', 'KZT', '401.43', '491.99'),
(89, 'Kenya', 'KE', 'af', 'Kenyan Shilling', 'KES', '566.40', '549.15'),
(90, 'Kiribati', 'KI', 'au', 'Australian Dollar', 'AUD', '920.66', '895.67'),
(91, 'Kuwait', 'KW', 'me', 'Kuwaiti Dinar', 'KWD', '1936.51', '1239.16'),
(92, 'Kyrgyzstan', 'KG', 'as', 'Kyrgystani Som', 'KGS', '224.48', '599.84'),
(93, 'Laos', 'LA', 'as', 'Lao Kip', 'LAK', '189.23', '345.34'),
(94, 'Latvia', 'LV', 'eu', 'Euro', 'EUR', '814.56', '847.17'),
(95, 'Lebanon', 'LB', 'as', 'Lebanese Pound', 'LBP', '1253.67', '1033.30'),
(96, 'Lesotho', 'LS', 'af', 'Lesotho Loti', 'LSL', '137.77', '375.79'),
(97, 'Liberia', 'LR', 'af', 'Liberian Dollar', 'LRD', '716.04', '770.83'),
(98, 'Libya', 'LY', 'af', 'Libyan Dinar', 'LYD', '1129.71', '924.08'),
(99, 'Liechtenstein', 'LI', 'eu', 'Swiss Franc', 'CHF', '5842.14', '2054.21'),
(100, 'Lithuania', 'LT', 'eu', 'Euro', 'EUR', '952.81', '821.88'),
(101, 'Luxembourg', 'LU', 'eu', 'Euro', 'EUR', '4508.14', '2024.63'),
(102, 'Madagascar', 'MG', 'af', 'Malagasy Ariary', 'MGA', '44.10', '518.34'),
(103, 'Malawi', 'MW', 'af', 'Malawian Kwacha', 'MWK', '806.11', '748.83'),
(104, 'Malaysia', 'MY', 'as', 'Malaysian Ringgit', 'MYR', '809.13', '667.14'),
(105, 'Maldives', 'MV', 'as', 'Maldivian Rufiyaa', 'MVV', '614.89', '1196.46'),
(106, 'Mali', 'ML', 'af', 'West African Franc', 'XOF', '134.79', '921.53'),
(107, 'Malta', 'MT', 'eu', 'Euro', 'EUR', '1276.22', '1283.64'),
(108, 'Marshall Islands', 'MH', 'au', 'United States Dollar', 'USD', '400.11', '1217.43'),
(109, 'Mauritania', 'MR', 'af', 'Mauritanian Ouguiya', 'MRO', '83.80', '674.25'),
(110, 'Mauritius', 'MU', 'af', 'Mauritian Rupee', 'MUR', '796.41', '701.28'),
(111, 'Mexico', 'MX', 'na', 'Mexican Peso', 'MXN', '841.23', '571.79'),
(112, 'Micronesia', 'FM', 'au', 'United States Dollar', 'USD', '1625.00', '1294.34'),
(113, 'Moldova', 'MD', 'eu', 'Moldovan Leu', 'MDL', '325.14', '572.12'),
(114, 'Monaco', 'MC', 'eu', 'Euro', 'EUR', '4436.98', '3554.54'),
(115, 'Mongolia', 'MN', 'as', 'Mongolian Tugrik', 'MNT', '358.91', '625.34'),
(116, 'Montenegro', 'ME', 'eu', 'Euro', 'EUR', '867.68', '710.86'),
(117, 'Morocco', 'MA', 'af', 'Moroccan Dirham', 'MAD', '524.67', '595.01'),
(118, 'Mozambique', 'MZ', 'af', 'Mozambican Metical', 'MZN', '419.44', '841.25'),
(119, 'Myanmar', 'MM', 'as', 'Myanmar Kyat', 'MMK', '118.31', '911.34'),
(120, 'Namibia', 'NA', 'af', 'Namibian Dollar', 'NAD', '480.21', '890.46'),
(121, 'Nauru', 'NR', 'au', 'Australian Dollar', 'AUD', '558.33', '1029.20'),
(122, 'Nepal', 'NP', 'as', 'Nepalese Rupee', 'NPR', '211.68', '305.89'),
(123, 'Netherlands', 'NL', 'eu', 'Euro', 'EUR', '2598.69', '1419.68'),
(124, 'New Zealand', 'NZ', 'au', 'New Zealand Dollar', 'NZD', '2497.84', '1872.13'),
(125, 'Nicaragua', 'NI', 'ca', 'Nicaraguan Cordova', 'NIO', '312.07', '705.87'),
(126, 'Niger', 'NE', 'af', 'West African Franc', 'XOF', '562.50', '838.48'),
(127, 'Nigeria', 'NG', 'af', 'Nigerian Naira', 'NGN', '196.52', '827.51'),
(128, 'North Korea', 'KP', 'as', 'North Korean Won', 'KPW', '67.40', '444.21'),
(129, 'North Macedonia', 'MK', 'eu', 'Macedonian Denar', 'MKD', '620.62', '580.27'),
(130, 'Norway', 'NO', 'eu', 'Norwegian Krone', 'NOK', '4267.66', '1945.34'),
(131, 'Oman', 'OM', 'me', 'Omani Rial', 'OMR', '1346.52', '1067.38'),
(132, 'Pakistan', 'PK', 'as', 'Pakistani Rupee', 'PKR', '306.87', '316.30'),
(133, 'Palau', 'PW', 'au', 'United States Dollar', 'USD', '1200.00', '1341.67'),
(134, 'Panama', 'PA', 'ca', 'Panamanian Balboa', 'PAB', '1237.94', '947.87'),
(135, 'Papua New Guinea', 'PG', 'as', 'Papua New Guinean Kina', 'PGK', '2557.63', '2216.34'),
(136, 'Paraguay', 'PY', 'sa', 'Paraguayan Guaraní\r\n', 'PYG', '399.80', '535.97'),
(137, 'Peru', 'PE', 'sa', 'Peruvian Sol', 'PEN', '464.71', '525.59'),
(138, 'Philippines', 'PH', 'as', 'Philippine Piso', 'PHP', '288.64', '498.92'),
(139, 'Poland', 'PL', 'eu', 'Polish Zloty', 'PLN', '963.45', '1323.56'),
(140, 'Portugal', 'PT', 'eu', 'Euro', 'EUR', '1035.50', '1029.51'),
(141, 'Qatar', 'QA', 'me', 'Qatari Riyal', 'QAR', '3211.96', '1644.78'),
(142, 'Romania', 'RO', 'eu', 'Romanian Leu', 'RON', '650.43', '720.74'),
(143, 'Russia', 'RU', 'eu', 'Russian Ruble', 'RUB', '506.92', '648.55'),
(144, 'Rwanda', 'RW', 'af', 'Rwandan Franc', 'RWF', '63.74', '474.41'),
(145, 'Saint Kitts and Nevis', 'KN', 'ca', 'East Caribbean Dollar', 'XCD', '769.64', '1555.51'),
(146, 'Saint Lucia', 'LC', 'ca', 'East Caribbean Dollar', 'XCD', '980.52', '1012.26'),
(147, 'Saint Vincent and the Grenadines', 'VC', 'ca', 'East Caribbean Dollar', 'XCD', '456.28', '955.78'),
(148, 'Samoa', 'WS', 'au', 'Samoan tala', 'WST', '1602.24', '987.38'),
(149, 'San Marino', 'SM', 'eu', 'Euro', 'EUR', '2445.12', '1302.51'),
(150, 'Sao Tome and Principe', 'ST', 'af', 'Sao Tomean Dobra', 'STD', '100.00', '1229.14'),
(151, 'Saudi Arabia', 'SA', 'me', 'Saudi Riyal', 'SAR', '1626.59', '998.41'),
(152, 'Senegal', 'SN', 'af', 'West African Franc', 'XOF', '267.25', '796.56'),
(153, 'Serbia', 'RS', 'eu', 'Serbian Dinar', 'RSD', '634.75', '657.43'),
(154, 'Seychelles', 'SC', 'af', 'Seychellois Rupee', 'SCR', '652.82', '1428.62'),
(155, 'Sierra Leone', 'SL', 'af', 'Sierra Leonean Leone', 'SLL', '213.36', '1404.73'),
(156, 'Singapore', 'SG', 'as', 'Singapore Dollar', 'SGD', '3866.82', '1708.83'),
(157, 'Slovakia', 'SK', 'eu', 'Euro', 'EUR', '900.50', '967.34'),
(158, 'Slovenia', 'SI', 'eu', 'Euro', 'EUR', '1197.43', '1076.68'),
(159, 'Solomon Islands', 'SB', 'au', 'Solomon Islands Dollar', 'SBD', '404.91', '1435.52'),
(160, 'Somalia', 'SO', 'af', 'Somali Shilling', 'SOS', '350.00', '534.41'),
(161, 'South Africa', 'ZA', 'af', 'South African Rand', 'ZAR', '1141.46', '865.55'),
(162, 'South Korea', 'KR', 'as', 'South Korean Won', 'KRW', '2405.33', '823.12'),
(163, 'South Sudan', 'SS', 'af', 'South Sudanese Pound', 'SSP', '68.28', '361.63'),
(164, 'Spain', 'ES', 'eu', 'Euro', 'EUR', '1423.21', '1105.92'),
(165, 'Sri Lanka', 'LK', 'as', 'Sri Lankan Rupee', 'LKR', '246.47', '395.89'),
(166, 'Sudan', 'SD', 'af', 'Sudanese Pound', 'SDG', '68.28', '369.64'),
(167, 'Suriname', 'SR', 'sa', 'Surinamese Dollar', 'SRD', '333.16', '566.48'),
(168, 'Sweden', 'SE', 'eu', 'Swedish Krona', 'SEK', '2447.37', '1487.12'),
(169, 'Switzerland', 'CH', 'eu', 'Swiss Franc', 'CHF', '5166.48', '3686.72'),
(170, 'Syria', 'SY', 'me', 'Syrian Pound', 'SYP', '451.47', '473.13'),
(171, 'Tajikistan', 'TJ', 'as', 'Tajikistani Somoni', 'TJS', '128.89', '539.58'),
(172, 'Tanzania', 'TZ', 'af', 'Tanzanian Shilling', 'TZS', '251.40', '771.48'),
(173, 'Thailand', 'TH', 'as', 'Thai Baht', 'THB', '625.85', '657.39'),
(174, 'Timor-Leste', 'TL', 'as', 'United States Dollar', 'USD', '711.50', '1494.78'),
(175, 'Togo', 'TG', 'af', 'West African Franc', 'XOF', '259.70', '935.05'),
(176, 'Tonga', 'TO', 'au', 'Tongan Pa\'anga', 'TOP', '457.14', '975.74'),
(177, 'Trinidad and Tobago', 'TT', 'ca', 'Trinidad and Tobago Dollar', 'TTD', '922.24', '955.63'),
(178, 'Tunisia', 'TN', 'af', 'Tunisian Dinar', 'TND', '525.67', '518.15'),
(179, 'Turkey', 'TR', 'eu', 'Turkish Lira', 'TRY', '403.51', '638.50'),
(180, 'Turkmenistan', 'TM', 'as', 'Turkmenistan Manat', 'TMT', '400.86', '1174.58'),
(181, 'Tuvalu', 'TV', 'au', 'Tuvaluan Dollar', 'TVD', '232.91', '1716.80'),
(182, 'Uganda', 'UG', 'af', 'Ugandan Shilling', 'UGX', '104.58', '545.88'),
(183, 'Ukraine', 'UA', 'eu', 'Ukrainian Hryvnia', 'UAH', '296.37', '570.70'),
(184, 'United Arab Emirates', 'AE', 'me', 'United Arab Emirates Dirham', 'AED', '2581.21', '1802.71'),
(185, 'United Kingdom', 'GB', 'eu', 'Pound Sterling', 'GBP', '3094.26', '1480.43'),
(186, 'United States of America', 'US', 'na', 'United States Dollar', 'USD', '3926.43', '2372.83'),
(187, 'Uruguay', 'UY', 'sa', 'Uruguayan Peso', 'UYU', '838.64', '969.87'),
(188, 'Uzbekistan', 'UZ', 'as', 'Uzbekistani Som', 'UZS', '207.36', '374.45'),
(189, 'Vanuatu', 'VU', 'au', 'Vanuatu Vatu', 'VUV', '885.15', '1413.68'),
(190, 'Venezuela', 'VE', 'sa', 'Venezuelan Bolivar', 'VEF', '68.21', '359.58'),
(191, 'Vietnam', 'VN', 'as', 'Vietnamese Dong', 'VND', '230.94', '595.71'),
(192, 'Yemen', 'YE', 'me', 'Yemeni Rial', 'YER', '195.32', '626.91'),
(193, 'Zambia', 'ZM', 'af', 'Zambian Kwacha', 'ZMW', '195.40', '567.12'),
(194, 'Zimbabwe', 'ZW', 'af', 'United States Dollar', 'USD', '253.11', '585.29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Countries`
--
ALTER TABLE `Countries`
  ADD PRIMARY KEY (`CountryNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Countries`
--
ALTER TABLE `Countries`
  MODIFY `CountryNo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
