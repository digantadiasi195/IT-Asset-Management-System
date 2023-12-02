
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `admin` (
  `employee_id` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `admin` (`employee_id`, `designation`, `full_name`, `department`, `password`) VALUES
('1234', 'student', 'uyfsahfj', 'hjahjdsahdfj', 'tyuwqytwhd'),
('E1001', 'Manager', 'John Doe', 'IT Department', 'password1'),
('E1002', 'Engineer', 'Jane Smith', 'Finance Department', 'password2'),
('E1003', 'Supervisor', 'Michael Johnson', 'HR Department', 'password3'),
('E1004', 'Analyst', 'Emily Williams', 'Marketing Department', 'password4'),
('E1005', 'Coordinator', 'David Brown', 'Research Department', 'password5'),
('E1006', 'Director', 'Susan Miller', 'Administration', 'password6'),
('E1007', 'Technician', 'Daniel Wilson', 'IT Department', 'password7'),
('E1008', 'Designer', 'Jessica Davis', 'Creative Department', 'password8'),
('E1009', 'Administrator', 'Christopher Taylor', 'IT Department', 'password9'),
('E1010', 'Assistant', 'Amanda Anderson', 'Finance Department', 'password10'),
('E1011', 'student', 'Diganta', 'CS', '123456');



CREATE TABLE `employee` (
  `employee_id` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `department` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `employee` (`employee_id`, `designation`, `full_name`, `department`, `branch`, `birthplace`, `password`, `role`) VALUES
('E1001', 'Manager', 'John Doe', 'IT Department', 'Branch1', 'Place1', 'password1', 0),
('E1002', 'Engineer', 'Jane Smith', 'Finance Department', 'Branch2', 'Place2', 'password2', 0),
('E1003', 'Supervisor', 'Michael Johnson', 'HR Department', 'Branch3', 'Place3', 'password3', 0),
('E1004', 'Analyst', 'Emily Williams', 'Marketing Department', 'Branch4', 'Place4', 'password4', 0),
('E1005', 'Coordinator', 'David Brown', 'Research Department', 'Branch5', 'Place5', 'password5', 0),
('E1006', 'Director', 'Susan Miller', 'Administration', 'Branch6', 'Place6', 'password6', 0),
('E1007', 'Technician', 'Daniel Wilson', 'IT Department', 'Branch7', 'Place7', 'password7', 0),
('E1008', 'Designer', 'Jessica Davis', 'Creative Department', 'Branch8', 'Place8', 'password8', 0),
('E1009', 'Administrator', 'Christopher Taylor', 'IT Department', 'Branch9', 'Place9', 'password9', 0),
('E1010', 'Assistant', 'Amanda Anderson', 'Finance Department', 'Branch10', 'Place10', 'password10', 0),
('E1011', 'student', 'Diganta', 'CS', 'DS', 'Place12', '123456', 0);



CREATE TABLE `issue_record` (
  `serno` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `make_and_model` varchar(100) NOT NULL,
  `au` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `issue_date` varchar(100) NOT NULL,
  `iv_local` varchar(100) NOT NULL,
  `rv_local` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `department` varchar(200) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `issue_record` (`serno`, `type`, `make_and_model`, `au`, `qty`, `loc`, `issue_date`, `iv_local`, `rv_local`, `employee_id`, `designation`, `full_name`, `department`, `branch`, `remarks`, `last_updated`) VALUES
('S001', 'Laptop', 'Dell Inspiron', 'AU001', '1', 'IT Department', '2023-01-01', 'Local IV001', 'Local RV001', 'E1001', 'Manager', 'John Doe', 'IT Department', 'Branch1', 'Issue remarks 1', '2023-11-29 05:29:13'),
('S002', 'Printer', 'HP LaserJet', 'AU002', '2', 'Finance Department', '2023-01-02', 'Local IV002', 'Local RV002', 'E1002', 'Engineer', 'Jane Smith', 'Finance Department', 'Branch2', 'Issue remarks 2', '2023-11-29 05:29:13'),
('S003', 'Desktop', 'Lenovo ThinkCentre', 'AU003', '1', 'HR Department', '2023-01-03', 'Local IV003', 'Local RV003', 'E1003', 'Supervisor', 'Michael Johnson', 'HR Department', 'Branch3', 'Issue remarks 3', '2023-11-29 05:29:13'),
('S004', 'Projector', 'Epson PowerLite', 'AU004', '1', 'Marketing Department', '2023-01-04', 'Local IV004', 'Local RV004', 'E1004', 'Analyst', 'Emily Williams', 'Marketing Department', 'Branch4', 'Issue remarks 4', '2023-11-29 05:29:13'),
('S005', 'Scanner', 'Canon imageFORMULA', 'AU005', '1', 'Research Department', '2023-01-05', 'Local IV005', 'Local RV005', 'E1005', 'Coordinator', 'David Brown', 'Research Department', 'Branch5', 'Issue remarks 5', '2023-11-29 05:29:13'),
('S006', 'Monitor', 'Samsung Curved', 'AU006', '2', 'Administration', '2023-01-06', 'Local IV006', 'Local RV006', 'E1006', 'Director', 'Susan Miller', 'Administration', 'Branch6', 'Issue remarks 6', '2023-11-29 05:29:13'),
('S007', 'Router', 'Cisco Linksys', 'AU007', '1', 'IT Department', '2023-01-07', 'Local IV007', 'Local RV007', 'E1007', 'Technician', 'Daniel Wilson', 'IT Department', 'Branch7', 'Issue remarks 7', '2023-11-29 05:29:13'),
('S008', 'Headset', 'Logitech G Pro X', 'AU008', '1', 'Creative Department', '2023-01-08', 'Local IV008', 'Local RV008', 'E1008', 'Designer', 'Jessica Davis', 'Creative Department', 'Branch8', 'Issue remarks 8', '2023-11-29 05:29:13'),
('S009', 'Server', 'Dell PowerEdge', 'AU009', '1', 'IT Department', '2023-01-09', 'Local IV009', 'Local RV009', 'E1009', 'Administrator', 'Christopher Taylor', 'IT Department', 'Branch9', 'Issue remarks 9', '2023-11-29 05:29:13'),
('S010', 'Tablet', 'Apple iPad', 'AU010', '1', 'Finance Department', '2023-01-10', 'Local IV010', 'Local RV010', 'E1010', 'Assistant', 'Amanda Anderson', 'Finance Department', 'Branch10', 'Issue remarks 10', '2023-11-29 05:29:13');



CREATE TABLE `maintable` (
  `make_and_model` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `asset_id` varchar(100) NOT NULL,
  `gt` varchar(200) NOT NULL,
  `date_purchased` date NOT NULL,
  `ledger_pageno` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `purchase_order_no` varchar(100) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_status` varchar(100) DEFAULT NULL,
  `warranty_expiry_date` date DEFAULT NULL,
  `mac_address` varchar(50) DEFAULT NULL,
  `os` varchar(50) DEFAULT NULL,
  `ram_capacity` varchar(10) DEFAULT NULL,
  `hdd_capacity` varchar(30) DEFAULT NULL,
  `processor` varchar(30) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `maintable` (`make_and_model`, `type`, `asset_id`, `gt`, `date_purchased`, `ledger_pageno`, `status`, `vendor`, `purchase_order_no`, `purchase_date`, `warranty_status`, `warranty_expiry_date`, `mac_address`, `os`, `ram_capacity`, `hdd_capacity`, `processor`, `last_updated`) VALUES
('Acer Aspire', 'Laptop', 'A004', 'GT004', '2023-01-04', 'Ledger004', 'In Use', 'VendorD', 'PO004', '2023-01-05', 'Out of Warranty', NULL, '00:11:22:33:44:57', 'Ubuntu', '12GB', '256GB', 'AMD Ryzen 5', '2023-11-30 09:53:33'),
('Apple MacBook Air', 'Laptop', 'A005', 'GT005', '2023-01-05', 'Ledger005', 'In Use', 'VendorE', 'PO005', '2023-01-06', 'Under Warranty', '2024-01-05', '00:11:22:33:44:58', 'macOS', '16GB', '512GB', 'Apple M1', '2023-11-30 09:53:33'),
('Dell OptiPlex', 'Desktop', 'A006', 'GT006', '2023-01-06', 'Ledger006', 'In Use', 'VendorF', 'PO006', '2023-01-07', 'Under Warranty', '2024-01-06', NULL, NULL, NULL, NULL, NULL, '2023-11-30 09:53:33'),
('Samsung Galaxy Tab', 'Tablet', 'A007', 'GT007', '2023-01-07', 'Ledger007', 'In Use', 'VendorG', 'PO007', '2023-01-08', 'Out of Warranty', NULL, '00:11:22:33:44:59', 'Android', '6GB', '128GB', 'Exynos', '2023-11-30 09:53:33'),
('LG UltraFine', 'Monitor', 'A008', 'GT008', '2023-01-08', 'Ledger008', 'In Use', 'VendorH', 'PO008', '2023-01-09', 'Under Warranty', '2024-01-08', NULL, NULL, NULL, NULL, NULL, '2023-11-30 09:53:33'),
('Logitech MX Master', 'Mouse', 'A009', 'GT009', '2023-01-09', 'Ledger009', 'In Use', 'VendorI', 'PO009', '2023-01-10', 'Out of Warranty', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-30 09:53:33'),
('Microsoft Surface Pro', 'Tablet', 'A010', 'GT010', '2023-01-10', 'Ledger010', 'In Use', 'VendorJ', 'PO010', '2023-01-11', 'Under Warranty', '2024-01-10', NULL, NULL, NULL, NULL, NULL, '2023-11-30 09:53:33'),
('fdgbfdgbfd', 'fdbfdbf', 'E1022', 'dvczxvc z', '2023-11-08', '131', 'zczxc', 'zczx', '1432', '2023-11-01', 'safdsafda', '2023-11-02', 'safsafa', 'safcsac', 'czxc', 'zcx', 'zczxcz', '2023-11-30 12:22:10');


CREATE TABLE `v_employee_issue_records` (
`employee_id` varchar(100)
,`designation` varchar(100)
,`full_name` varchar(100)
,`department` varchar(200)
,`serno` varchar(100)
,`type` varchar(100)
,`make_and_model` varchar(100)
,`issue_date` varchar(100)
);



CREATE TABLE `wksp` (
  `serno` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `makeandmodel` varchar(100) NOT NULL,
  `wono` varchar(100) NOT NULL,
  `in_date` varchar(100) NOT NULL,
  `wk_done` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `wksp` (`serno`, `type`, `makeandmodel`, `wono`, `in_date`, `wk_done`, `id`, `lastupdated`) VALUES
('S001', 'Laptop', 'Dell Inspiron', 'WONO001', '2023-01-01', 'Work Done 1', 97, '2023-11-29 05:42:58'),
('S002', 'Printer', 'HP LaserJet', 'WONO002', '2023-01-02', 'Work Done 2', 98, '2023-11-29 05:42:58'),
('S003', 'Desktop', 'Lenovo ThinkCentre', 'WONO003', '2023-01-03', 'Work Done 3', 99, '2023-11-29 05:42:58'),
('S004', 'Projector', 'Epson PowerLite', 'WONO004', '2023-01-04', 'Work Done 4', 100, '2023-11-29 05:42:58'),
('S005', 'Scanner', 'Canon imageFORMULA', 'WONO005', '2023-01-05', 'Work Done 5', 101, '2023-11-29 05:42:58'),
('S006', 'Monitor', 'Samsung Curved', 'WONO006', '2023-01-06', 'Work Done 6', 102, '2023-11-29 05:42:58'),
('S007', 'Router', 'Cisco Linksys', 'WONO007', '2023-01-07', 'Work Done 7', 103, '2023-11-29 05:42:58'),
('S008', 'Headset', 'Logitech G Pro X', 'WONO008', '2023-01-08', 'Work Done 8', 104, '2023-11-29 05:42:58'),
('S009', 'Server', 'Dell PowerEdge', 'WONO009', '2023-01-09', 'Work Done 9', 105, '2023-11-29 05:42:58'),
('S010', 'Tablet', 'Apple iPad', 'WONO010', '2023-01-10', 'Work Done 10', 106, '2023-11-29 05:42:58'),
('S123', 'Moto32', '', '1233', '12-05-2023', 'Done', 0, '2023-11-30 12:28:04'),
('S123', 'Moto32', '', '1233', '12-05-2023', 'Done', 0, '2023-11-30 12:28:20'),
('S123', 'Moto32', '', '1233', '12-05-2023', 'Done', 0, '2023-11-30 12:28:46'),
('S123', 'Moto32', '', '1233', '12-05-2023', 'Done', 0, '2023-11-30 12:29:16'),
('S123', 'Moto32', '', '1233', '12-05-2023', 'Done', 0, '2023-11-30 12:29:45'),
('S123', 'Moto32', '', '1233', '12-05-2023', 'Done', 0, '2023-11-30 12:31:56'),
('2313', 'sdfsdfsfsf', 'fdsfsfafafdfv', 'zvxzvcxzcxzczzv', '12-09-2024', 'fsdfdsfsaffsadfa', 0, '2023-11-30 12:32:24'),
('2313', 'sdfsdfsfsf', 'fdsfsfafafdfv', 'zvxzvcxzcxzczzv', '12-09-2024', 'fsdfdsfsaffsadfa', 0, '2023-11-30 12:32:49'),
('2313', 'sdfsdfsfsf', 'fdsfsfafafdfv', 'zvxzvcxzcxzczzv', '12-09-2024', 'fsdfdsfsaffsadfa', 0, '2023-11-30 12:33:08');


DROP TABLE IF EXISTS `v_employee_issue_records`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_employee_issue_records`  AS SELECT `i`.`employee_id` AS `employee_id`, `i`.`designation` AS `designation`, `i`.`full_name` AS `full_name`, `i`.`department` AS `department`, `ir`.`serno` AS `serno`, `ir`.`type` AS `type`, `ir`.`make_and_model` AS `make_and_model`, `ir`.`issue_date` AS `issue_date` FROM (`employee` `i` left join `issue_record` `ir` on(`i`.`employee_id` = `ir`.`employee_id`)) ;


ALTER TABLE `admin`
  ADD PRIMARY KEY (`employee_id`);


ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

ALTER TABLE `issue_record`
  ADD KEY `employee_id` (`employee_id`);

ALTER TABLE `maintable`
  ADD PRIMARY KEY (`asset_id`);
COMMIT;

