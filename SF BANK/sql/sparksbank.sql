SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--
INSERT INTO `users` VALUES
(1, 'Priyansi', 'priya@gmail.com', 1000),
(2, 'Geetakshi', 'geetakshi@gmail.com', 3000),
(3, 'Reyansh', 'reyansh@gmail.com', 4000),
(4, 'Romi', 'romi@gmail.com', 5000),
(5, 'Piyush', 'piyushr@gmail.com', 4000),
(6, 'Ajay', 'ajay@gmail.com', 3000),
(7, 'Megha', 'megha@gmail.com', 5000),
(8, 'Himani', 'himani@gmail.com', 4000),
(9, 'Dipti', 'dipti@gmail.com', 3000),
(10, 'Siddhant', 'siddhant@gmail.com', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
  ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;
-- AUTO_INCREMENT for table `users`
  ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT
