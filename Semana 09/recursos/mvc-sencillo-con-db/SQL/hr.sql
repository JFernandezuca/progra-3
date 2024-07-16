-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2021 a las 03:04:01
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `COUNTRY_ID` int(2) NOT NULL,
  `COUNTRY_NAME` varchar(40) NOT NULL,
  `REGION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`COUNTRY_ID`, `COUNTRY_NAME`, `REGION_ID`) VALUES
(1, 'Argentina', 2),
(2, 'Australia', 3),
(3, 'Belgium', 1),
(4, 'Brazil', 2),
(5, 'Canada', 2),
(6, 'Switzerland', 1),
(7, 'China', 3),
(8, 'Germany', 1),
(9, 'Denmark', 1),
(10, 'Egypt', 4),
(11, 'France', 1),
(12, 'Israel', 4),
(13, 'India', 3),
(14, 'Italy', 1),
(15, 'Japan', 3),
(16, 'Kuwait', 4),
(17, 'Malaysia', 3),
(18, 'Mexico', 2),
(19, 'Nigeria', 4),
(20, 'Netherlands', 1),
(21, 'Singapore', 3),
(22, 'United Kingdom', 1),
(23, 'United States of America', 2),
(24, 'Zambia', 4),
(25, 'Zimbabwe', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `DEPARTMENT_ID` int(4) NOT NULL,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `MANAGER_ID` int(6) DEFAULT NULL,
  `LOCATION_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`DEPARTMENT_ID`, `DEPARTMENT_NAME`, `MANAGER_ID`, `LOCATION_ID`) VALUES
(10, 'Administration', 200, 1700),
(20, 'Marketing', 201, 1800),
(30, 'Purchasing', 114, 1700),
(40, 'Human Resources', 203, 2400),
(50, 'Shipping', 121, 1500),
(60, 'IT', 103, 1400),
(70, 'Public Relations', 204, 2700),
(80, 'Sales', 145, 2500),
(90, 'Executive', 100, 1700),
(100, 'Finance', 108, 1700),
(110, 'Accounting', 205, 1700),
(120, 'Treasury', NULL, 1700),
(130, 'Corporate Tax', NULL, 1700),
(140, 'Control And Credit', NULL, 1700),
(150, 'Shareholder Services', NULL, 1700),
(160, 'Benefits', NULL, 1700),
(170, 'Manufacturing', NULL, 1700),
(180, 'Construction', NULL, 1700),
(190, 'Contracting', NULL, 1700),
(200, 'Operations', NULL, 1700),
(210, 'IT Support', NULL, 1700),
(220, 'NOC', NULL, 1700),
(230, 'IT Helpdesk', NULL, 1700),
(240, 'Government Sales', NULL, 1700),
(250, 'Retail Sales', NULL, 1700),
(260, 'Recruiting', NULL, 1700),
(270, 'Payroll', NULL, 1700);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `EMPLOYEE_ID` int(6) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PHONE_NUMBER` varchar(20) NOT NULL,
  `HIRE_DATE` date NOT NULL,
  `JOB_ID` varchar(10) NOT NULL,
  `SALARY` int(8) NOT NULL,
  `COMMISSION_PCT` int(2) DEFAULT NULL,
  `MANAGER_ID` int(6) DEFAULT NULL,
  `DEPARTMENT_ID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`EMPLOYEE_ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PHONE_NUMBER`, `HIRE_DATE`, `JOB_ID`, `SALARY`, `COMMISSION_PCT`, `MANAGER_ID`, `DEPARTMENT_ID`) VALUES
(100, 'Steven', 'King', 'SKING', '515.123.4567', '2017-06-03', 'AD_PRES', 24000, NULL, NULL, 90),
(101, 'Neena', 'Kochhar', 'NKOCHHAR', '515.123.4568', '2021-09-05', 'AD_VP', 17000, NULL, 100, 90),
(102, 'Lex', 'De Haan', 'LDEHAAN', '515.123.4569', '2013-01-01', 'AD_VP', 17000, NULL, 100, 90),
(103, 'Alexander', 'Hunold', 'AHUNOLD', '590.423.4567', '2003-01-06', 'IT_PROG', 9000, NULL, 102, 60),
(104, 'Bruce', 'Ernst', 'BERNST', '590.423.4568', '2021-05-07', 'IT_PROG', 6000, NULL, 103, 60),
(105, 'David', 'Austin', 'DAUSTIN', '590.423.4569', '2025-06-05', 'IT_PROG', 4800, NULL, 103, 60),
(106, 'Valli', 'Pataballa', 'VPATABAL', '590.423.4560', '2005-02-06', 'IT_PROG', 4800, NULL, 103, 60),
(107, 'Diana', 'Lorentz', 'DLORENTZ', '590.423.5567', '2007-02-07', 'IT_PROG', 4200, NULL, 103, 60),
(108, 'Nancy', 'Greenberg', 'NGREENBE', '515.124.4569', '2017-08-02', 'FI_MGR', 12008, NULL, 101, 100),
(109, 'Daniel', 'Faviet', 'DFAVIET', '515.124.4169', '2016-08-02', 'FI_ACCOUNT', 9000, NULL, 108, 100),
(110, 'John', 'Chen', 'JCHEN', '515.124.4269', '2028-09-05', 'FI_ACCOUNT', 8200, NULL, 108, 100),
(111, 'Ismael', 'Sciarra', 'ISCIARRA', '515.124.4369', '2030-09-05', 'FI_ACCOUNT', 7700, NULL, 108, 100),
(112, 'Jose Manuel', 'Urman', 'JMURMAN', '515.124.4469', '2007-03-06', 'FI_ACCOUNT', 7800, NULL, 108, 100),
(113, 'Luis', 'Popp', 'LPOPP', '515.124.4567', '2007-12-07', 'FI_ACCOUNT', 6900, NULL, 108, 100),
(114, 'Den', 'Raphaely', 'DRAPHEAL', '515.127.4561', '2007-12-02', 'PU_MAN', 11000, NULL, 100, 30),
(115, 'Alexander', 'Khoo', 'AKHOO', '515.127.4562', '2018-05-03', 'PU_CLERK', 3100, NULL, 114, 30),
(116, 'Shelli', 'Baida', 'SBAIDA', '515.127.4563', '2024-12-05', 'PU_CLERK', 2900, NULL, 114, 30),
(117, 'Sigal', 'Tobias', 'STOBIAS', '515.127.4564', '2024-07-05', 'PU_CLERK', 2800, NULL, 114, 30),
(118, 'Guy', 'Himuro', 'GHIMURO', '515.127.4565', '2015-11-06', 'PU_CLERK', 2600, NULL, 114, 30),
(119, 'Karen', 'Colmenares', 'KCOLMENA', '515.127.4566', '2010-08-07', 'PU_CLERK', 2500, NULL, 114, 30),
(120, 'Matthew', 'Weiss', 'MWEISS', '650.123.1234', '2018-07-04', 'ST_MAN', 8000, NULL, 100, 50),
(121, 'Adam', 'Fripp', 'AFRIPP', '650.123.2234', '2010-04-05', 'ST_MAN', 8200, NULL, 100, 50),
(122, 'Payam', 'Kaufling', 'PKAUFLIN', '650.123.3234', '2001-05-03', 'ST_MAN', 7900, NULL, 100, 50),
(123, 'Shanta', 'Vollman', 'SVOLLMAN', '650.123.4234', '2010-10-05', 'ST_MAN', 6500, NULL, 100, 50),
(124, 'Kevin', 'Mourgos', 'KMOURGOS', '650.123.5234', '2016-11-07', 'ST_MAN', 5800, NULL, 100, 50),
(125, 'Julia', 'Nayer', 'JNAYER', '650.124.1214', '2016-07-05', 'ST_CLERK', 3200, NULL, 120, 50),
(126, 'Irene', 'Mikkilineni', 'IMIKKILI', '650.124.1224', '2028-09-06', 'ST_CLERK', 2700, NULL, 120, 50),
(127, 'James', 'Landry', 'JLANDRY', '650.124.1334', '2014-01-07', 'ST_CLERK', 2400, NULL, 120, 50),
(128, 'Steven', 'Markle', 'SMARKLE', '650.124.1434', '2008-03-08', 'ST_CLERK', 2200, NULL, 120, 50),
(129, 'Laura', 'Bissot', 'LBISSOT', '650.124.5234', '2020-08-05', 'ST_CLERK', 3300, NULL, 121, 50),
(130, 'Mozhe', 'Atkinson', 'MATKINSO', '650.124.6234', '2030-10-05', 'ST_CLERK', 2800, NULL, 121, 50),
(131, 'James', 'Marlow', 'JAMRLOW', '650.124.7234', '2016-02-05', 'ST_CLERK', 2500, NULL, 121, 50),
(132, 'TJ', 'Olson', 'TJOLSON', '650.124.8234', '2010-04-07', 'ST_CLERK', 2100, NULL, 121, 50),
(133, 'Jason', 'Mallin', 'JMALLIN', '650.127.1934', '2014-06-04', 'ST_CLERK', 3300, NULL, 122, 50),
(134, 'Michael', 'Rogers', 'MROGERS', '650.127.1834', '2026-08-06', 'ST_CLERK', 2900, NULL, 122, 50),
(135, 'Ki', 'Gee', 'KGEE', '650.127.1734', '2012-12-07', 'ST_CLERK', 2400, NULL, 122, 50),
(136, 'Hazel', 'Philtanker', 'HPHILTAN', '650.127.1634', '2006-02-08', 'ST_CLERK', 2200, NULL, 122, 50),
(137, 'Renske', 'Ladwig', 'RLADWIG', '650.121.1234', '2014-07-03', 'ST_CLERK', 3600, NULL, 123, 50),
(138, 'Stephen', 'Stiles', 'SSTILES', '650.121.2034', '2026-10-05', 'ST_CLERK', 3200, NULL, 123, 50),
(139, 'John', 'Seo', 'JSEO', '650.121.2019', '2012-02-06', 'ST_CLERK', 2700, NULL, 123, 50),
(140, 'Joshua', 'Patel', 'JPATEL', '650.121.1834', '2006-04-06', 'ST_CLERK', 2500, NULL, 123, 50),
(141, 'Trenna', 'Rajs', 'TRAJS', '650.121.8009', '2017-10-03', 'ST_CLERK', 3500, NULL, 124, 50),
(142, 'Curtis', 'Davies', 'CDAVIES', '650.121.2994', '2029-01-05', 'ST_CLERK', 3100, NULL, 124, 50),
(143, 'Randall', 'Matos', 'RMATOS', '650.121.2874', '2015-03-06', 'ST_CLERK', 2600, NULL, 124, 50),
(144, 'Peter', 'Vargas', 'PVARGAS', '650.121.2004', '2009-07-06', 'ST_CLERK', 2500, NULL, 124, 50),
(145, 'John', 'Russell', 'JRUSSEL', '011.44.1344.429268', '2001-10-04', 'SA_MAN', 14000, 0, 100, 80),
(146, 'Karen', 'Partners', 'KPARTNER', '011.44.1344.467268', '2005-01-05', 'SA_MAN', 13500, 0, 100, 80),
(147, 'Alberto', 'Errazuriz', 'AERRAZUR', '011.44.1344.429278', '2010-03-05', 'SA_MAN', 12000, 0, 100, 80),
(148, 'Gerald', 'Cambrault', 'GCAMBRAU', '011.44.1344.619268', '2015-10-07', 'SA_MAN', 11000, 0, 100, 80),
(149, 'Eleni', 'Zlotkey', 'EZLOTKEY', '011.44.1344.429018', '2029-01-08', 'SA_MAN', 10500, 0, 100, 80),
(150, 'Peter', 'Tucker', 'PTUCKER', '011.44.1344.129268', '2030-01-05', 'SA_REP', 10000, 0, 145, 80),
(151, 'David', 'Bernstein', 'DBERNSTE', '011.44.1344.345268', '2024-03-05', 'SA_REP', 9500, 0, 145, 80),
(152, 'Peter', 'Hall', 'PHALL', '011.44.1344.478968', '2020-08-05', 'SA_REP', 9000, 0, 145, 80),
(153, 'Christopher', 'Olsen', 'COLSEN', '011.44.1344.498718', '2030-03-06', 'SA_REP', 8000, 0, 145, 80),
(154, 'Nanette', 'Cambrault', 'NCAMBRAU', '011.44.1344.987668', '2009-12-06', 'SA_REP', 7500, 0, 145, 80),
(155, 'Oliver', 'Tuvault', 'OTUVAULT', '011.44.1344.486508', '2023-11-07', 'SA_REP', 7000, 0, 145, 80),
(156, 'Janette', 'King', 'JKING', '011.44.1345.429268', '2030-01-04', 'SA_REP', 10000, 0, 146, 80),
(157, 'Patrick', 'Sully', 'PSULLY', '011.44.1345.929268', '2004-03-04', 'SA_REP', 9500, 0, 146, 80),
(158, 'Allan', 'McEwen', 'AMCEWEN', '011.44.1345.829268', '2001-08-04', 'SA_REP', 9000, 0, 146, 80),
(159, 'Lindsey', 'Smith', 'LSMITH', '011.44.1345.729268', '2010-03-05', 'SA_REP', 8000, 0, 146, 80),
(160, 'Louise', 'Doran', 'LDORAN', '011.44.1345.629268', '2015-12-05', 'SA_REP', 7500, 0, 146, 80),
(161, 'Sarath', 'Sewall', 'SSEWALL', '011.44.1345.529268', '2003-11-06', 'SA_REP', 7000, 0, 146, 80),
(162, 'Clara', 'Vishney', 'CVISHNEY', '011.44.1346.129268', '2011-11-05', 'SA_REP', 10500, 0, 147, 80),
(163, 'Danielle', 'Greene', 'DGREENE', '011.44.1346.229268', '2019-03-07', 'SA_REP', 9500, 0, 147, 80),
(164, 'Mattea', 'Marvins', 'MMARVINS', '011.44.1346.329268', '2024-01-08', 'SA_REP', 7200, 0, 147, 80),
(165, 'David', 'Lee', 'DLEE', '011.44.1346.529268', '2023-02-08', 'SA_REP', 6800, 0, 147, 80),
(166, 'Sundar', 'Ande', 'SANDE', '011.44.1346.629268', '2024-03-08', 'SA_REP', 6400, 0, 147, 80),
(167, 'Amit', 'Banda', 'ABANDA', '011.44.1346.729268', '2021-04-08', 'SA_REP', 6200, 0, 147, 80),
(168, 'Lisa', 'Ozer', 'LOZER', '011.44.1343.929268', '2011-03-05', 'SA_REP', 11500, 0, 148, 80),
(169, 'Harrison', 'Bloom', 'HBLOOM', '011.44.1343.829268', '2023-03-06', 'SA_REP', 10000, 0, 148, 80),
(170, 'Tayler', 'Fox', 'TFOX', '011.44.1343.729268', '2024-01-06', 'SA_REP', 9600, 0, 148, 80),
(171, 'William', 'Smith', 'WSMITH', '011.44.1343.629268', '2023-02-07', 'SA_REP', 7400, 0, 148, 80),
(172, 'Elizabeth', 'Bates', 'EBATES', '011.44.1343.529268', '2024-03-07', 'SA_REP', 7300, 0, 148, 80),
(173, 'Sundita', 'Kumar', 'SKUMAR', '011.44.1343.329268', '2021-04-08', 'SA_REP', 6100, 0, 148, 80),
(174, 'Ellen', 'Abel', 'EABEL', '011.44.1644.429267', '2011-05-04', 'SA_REP', 11000, 0, 149, 80),
(175, 'Alyssa', 'Hutton', 'AHUTTON', '011.44.1644.429266', '2019-03-05', 'SA_REP', 8800, 0, 149, 80),
(176, 'Jonathon', 'Taylor', 'JTAYLOR', '011.44.1644.429265', '2024-03-06', 'SA_REP', 8600, 0, 149, 80),
(177, 'Jack', 'Livingston', 'JLIVINGS', '011.44.1644.429264', '2023-04-06', 'SA_REP', 8400, 0, 149, 80),
(178, 'Kimberely', 'Grant', 'KGRANT', '011.44.1644.429263', '2024-05-07', 'SA_REP', 7000, 0, 149, NULL),
(179, 'Charles', 'Johnson', 'CJOHNSON', '011.44.1644.429262', '2004-01-08', 'SA_REP', 6200, 0, 149, 80),
(180, 'Winston', 'Taylor', 'WTAYLOR', '650.507.9876', '2024-01-06', 'SH_CLERK', 3200, NULL, 120, 50),
(181, 'Jean', 'Fleaur', 'JFLEAUR', '650.507.9877', '2023-02-06', 'SH_CLERK', 3100, NULL, 120, 50),
(182, 'Martha', 'Sullivan', 'MSULLIVA', '650.507.9878', '2021-06-07', 'SH_CLERK', 2500, NULL, 120, 50),
(183, 'Girard', 'Geoni', 'GGEONI', '650.507.9879', '2003-02-08', 'SH_CLERK', 2800, NULL, 120, 50),
(184, 'Nandita', 'Sarchand', 'NSARCHAN', '650.509.1876', '2027-01-04', 'SH_CLERK', 4200, NULL, 121, 50),
(185, 'Alexis', 'Bull', 'ABULL', '650.509.2876', '2020-02-05', 'SH_CLERK', 4100, NULL, 121, 50),
(186, 'Julia', 'Dellinger', 'JDELLING', '650.509.3876', '2024-06-06', 'SH_CLERK', 3400, NULL, 121, 50),
(187, 'Anthony', 'Cabrio', 'ACABRIO', '650.509.4876', '2007-02-07', 'SH_CLERK', 3000, NULL, 121, 50),
(188, 'Kelly', 'Chung', 'KCHUNG', '650.505.1876', '2014-06-05', 'SH_CLERK', 3800, NULL, 122, 50),
(189, 'Jennifer', 'Dilly', 'JDILLY', '650.505.2876', '2013-08-05', 'SH_CLERK', 3600, NULL, 122, 50),
(190, 'Timothy', 'Gates', 'TGATES', '650.505.3876', '2011-07-06', 'SH_CLERK', 2900, NULL, 122, 50),
(191, 'Randall', 'Perkins', 'RPERKINS', '650.505.4876', '2019-12-07', 'SH_CLERK', 2500, NULL, 122, 50),
(192, 'Sarah', 'Bell', 'SBELL', '650.501.1876', '2004-02-04', 'SH_CLERK', 4000, NULL, 123, 50),
(193, 'Britney', 'Everett', 'BEVERETT', '650.501.2876', '2003-03-05', 'SH_CLERK', 3900, NULL, 123, 50),
(194, 'Samuel', 'McCain', 'SMCCAIN', '650.501.3876', '2001-07-06', 'SH_CLERK', 3200, NULL, 123, 50),
(195, 'Vance', 'Jones', 'VJONES', '650.501.4876', '2017-03-07', 'SH_CLERK', 2800, NULL, 123, 50),
(196, 'Alana', 'Walsh', 'AWALSH', '650.507.9811', '2024-04-06', 'SH_CLERK', 3100, NULL, 124, 50),
(197, 'Kevin', 'Feeney', 'KFEENEY', '650.507.9822', '2023-05-06', 'SH_CLERK', 3000, NULL, 124, 50),
(198, 'Donald', 'OConnell', 'DOCONNEL', '650.507.9833', '2021-06-07', 'SH_CLERK', 2600, NULL, 124, 50),
(199, 'Douglas', 'Grant', 'DGRANT', '650.507.9844', '2013-01-08', 'SH_CLERK', 2600, NULL, 124, 50),
(200, 'Jennifer', 'Whalen', 'JWHALEN', '515.123.4444', '2017-09-03', 'AD_ASST', 4400, NULL, 101, 10),
(201, 'Michael', 'Hartstein', 'MHARTSTE', '515.123.5555', '2017-02-04', 'MK_MAN', 13000, NULL, 100, 20),
(202, 'Pat', 'Fay', 'PFAY', '603.123.6666', '2017-08-05', 'MK_REP', 6000, NULL, 201, 20),
(203, 'Susan', 'Mavris', 'SMAVRIS', '515.123.7777', '2021-06-21', 'HR_REP', 6500, NULL, 101, 20),
(204, 'Hermann', 'Baer', 'HBAER', '515.123.8888', '2007-06-02', 'PR_REP', 10000, NULL, 101, 70),
(205, 'Shelley', 'Higgins', 'SHIGGINS', '515.123.8080', '2007-06-02', 'AC_MGR', 12008, NULL, 101, 110),
(206, 'William', 'Gietz', 'WGIETZ', '515.123.8181', '2007-06-02', 'AC_ACCOUNT', 8300, NULL, 205, 110);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `JOB_ID` varchar(10) NOT NULL,
  `JOB_TITLE` varchar(35) NOT NULL,
  `MIN_SALARY` int(6) NOT NULL,
  `MAX_SALARY` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jobs`
--

INSERT INTO `jobs` (`JOB_ID`, `JOB_TITLE`, `MIN_SALARY`, `MAX_SALARY`) VALUES
('AC_ACCOUNT', 'Public Accountant', 4200, 9000),
('AC_MGR', 'Accounting Manager', 8200, 16000),
('AD_ASST', 'Administration Assistant', 3000, 6000),
('AD_PRES', 'President', 20080, 40000),
('AD_VP', 'Administration Vice President', 15000, 30000),
('FI_ACCOUNT', 'Accountant', 4200, 9000),
('FI_MGR', 'Finance Manager', 8200, 16000),
('HR_REP', 'Human Resources Representative', 4000, 9000),
('IT_PROG', 'Programmer', 4000, 10000),
('MK_MAN', 'Marketing Manager', 9000, 15000),
('MK_REP', 'Marketing Representative', 4000, 9000),
('PR_REP', 'Public Relations Representative', 4500, 10500),
('PU_CLERK', 'Purchasing Clerk', 2500, 5500),
('PU_MAN', 'Purchasing Manager', 8000, 15000),
('SA_MAN', 'Sales Manager', 10000, 20080),
('SA_REP', 'Sales Representative', 6000, 12008),
('SH_CLERK', 'Shipping Clerk', 2500, 5500),
('ST_CLERK', 'Stock Clerk', 2008, 5000),
('ST_MAN', 'Stock Manager', 5500, 8500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_history`
--

CREATE TABLE `job_history` (
  `EMPLOYEE_ID` int(6) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `JOB_ID` varchar(10) NOT NULL,
  `DEPARTMENT_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `job_history`
--

INSERT INTO `job_history` (`EMPLOYEE_ID`, `START_DATE`, `END_DATE`, `JOB_ID`, `DEPARTMENT_ID`) VALUES
(200, '2017-09-03', '2021-06-21', 'AD_ASST', 40),
(102, '2013-01-01', '2024-07-06', 'IT_PROG', 60),
(101, '0000-00-00', '2027-10-01', 'AC_ACCOUNT', 110),
(101, '2028-10-01', '2015-03-05', 'AC_MGR', 110),
(201, '2017-02-04', '2019-12-07', 'MK_REP', 20),
(114, '2024-03-06', '2031-12-07', 'ST_CLERK', 50),
(122, '2001-01-07', '2031-12-07', 'ST_CLERK', 50),
(200, '0000-00-00', '2017-06-01', 'AD_ASST', 90),
(176, '2024-03-06', '2031-12-06', 'SA_REP', 80),
(176, '2001-01-07', '2031-12-07', 'SA_MAN', 80),
(200, '2001-07-02', '2031-12-06', 'AC_ACCOUNT', 90),
(203, '2007-06-02', '2021-06-21', 'HR_REP', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `LOCATION_ID` int(4) NOT NULL,
  `STREET_ADDRESS` varchar(40) NOT NULL,
  `POSTAL_CODE` varchar(12) DEFAULT NULL,
  `CITY` varchar(30) NOT NULL,
  `STATE_PROVINCE` varchar(25) DEFAULT NULL,
  `COUNTRY_ID` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`LOCATION_ID`, `STREET_ADDRESS`, `POSTAL_CODE`, `CITY`, `STATE_PROVINCE`, `COUNTRY_ID`) VALUES
(1000, '1297 Via Cola di Rie', '00989', 'Roma', NULL, 'IT'),
(1100, '93091 Calle della Testa', '10934', 'Venice', NULL, 'IT'),
(1200, '2017 Shinjuku-ku', '1689', 'Tokyo', 'Tokyo Prefecture', 'JP'),
(1300, '9450 Kamiya-cho', '6823', 'Hiroshima', NULL, 'JP'),
(1400, '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US'),
(1500, '2011 Interiors Blvd', '99236', 'South San Francisco', 'California', 'US'),
(1600, '2007 Zagora St', '50090', 'South Brunswick', 'New Jersey', 'US'),
(1700, '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US'),
(1800, '147 Spadina Ave', 'M5V 2L7', 'Toronto', 'Ontario', 'CA'),
(1900, '6092 Boxwood St', 'YSW 9T2', 'Whitehorse', 'Yukon', 'CA'),
(2000, '40-5-12 Laogianggen', '190518', 'Beijing', NULL, 'CN'),
(2100, '1298 Vileparle (E)', '490231', 'Bombay', 'Maharashtra', 'IN'),
(2200, '12-98 Victoria Street', '2901', 'Sydney', 'New South Wales', 'AU'),
(2300, '198 Clementi North', '540198', 'Singapore', NULL, 'SG'),
(2400, '8204 Arthur St', NULL, 'London', NULL, 'UK'),
(2500, 'Magdalen Centre, The Oxford Science Park', 'OX9 9ZB', 'Oxford', 'Oxford', 'UK'),
(2600, '9702 Chester Road', '09629850293', 'Stretford', 'Manchester', 'UK'),
(2700, 'Schwanthalerstr. 7031', '80925', 'Munich', 'Bavaria', 'DE'),
(2800, 'Rua Frei Caneca 1360 ', '01307-002', 'Sao Paulo', 'Sao Paulo', 'BR'),
(2900, '20 Rue des Corps-Saints', '1730', 'Geneva', 'Geneve', 'CH'),
(3000, 'Murtenstrasse 921', '3095', 'Bern', 'BE', 'CH'),
(3100, 'Pieter Breughelstraat 837', '3029SK', 'Utrecht', 'Utrecht', 'NL'),
(3200, 'Mariano Escobedo 9991', '11932', 'Mexico City', 'Distrito Federal,', 'MX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regions`
--

CREATE TABLE `regions` (
  `REGION_ID` int(11) NOT NULL,
  `REGION_NAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `regions`
--

INSERT INTO `regions` (`REGION_ID`, `REGION_NAME`) VALUES
(1, 'Europa'),
(2, 'Americas'),
(3, 'Asia'),
(4, 'Middle East and Africa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`COUNTRY_ID`);

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`DEPARTMENT_ID`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`JOB_ID`);

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- Indices de la tabla `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`REGION_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `COUNTRY_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `departments`
--
ALTER TABLE `departments`
  MODIFY `DEPARTMENT_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `LOCATION_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3201;

--
-- AUTO_INCREMENT de la tabla `regions`
--
ALTER TABLE `regions`
  MODIFY `REGION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
