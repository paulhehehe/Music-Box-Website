-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 09:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment2`
--

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `ID_Track` int(50) NOT NULL,
  `Track_Name` varchar(100) NOT NULL,
  `Artist_Name` varchar(100) NOT NULL,
  `Popularity` int(100) NOT NULL,
  `Release_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`ID_Track`, `Track_Name`, `Artist_Name`, `Popularity`, `Release_Date`) VALUES
(1, 'Juke Box Hero', 'beatles', 72, '1905-06-03'),
(2, 'Panama - 2015 Remaster', 'Van Halen', 76, '1984-01-04'),
(3, 'Hey Jude - Remastered 2015', 'The Beatles', 76, '2000-11-13'),
(4, 'Faith - Remastered', 'George Michael', 77, '1987-10-30'),
(5, 'You Ain\'t Seen Nothing Yet', 'Bachman-Turner Overdrive', 72, '1905-05-27'),
(6, 'Mrs. Robinson - From The Graduate Soundtrack', 'Simon & Garfunkel', 77, '1968-04-03'),
(7, 'Wanted Dead Or Alive', 'Bon Jovi', 77, '1986-08-16'),
(8, 'Dreams - 2004 Remaster', 'Fleetwood Mac', 86, '1977-02-04'),
(9, 'You Give Love A Bad Name', 'Bon Jovi', 83, '1986-08-16'),
(10, 'Hit Me With Your Best Shot', 'Pat Benatar', 75, '1980-08-05'),
(11, 'Learning To Fly', 'Tom Petty', 74, '1991-01-01'),
(12, 'In The Air Tonight - 2015 Remastered', 'Phil Collins', 78, '1981-01-01'),
(13, 'December 1963 (Oh What a Night!)', 'Frankie Valli', 76, '1905-05-28'),
(14, 'I\'m Still Standing', 'Elton John', 86, '1983-05-30'),
(15, 'Time After Time', 'Cyndi Lauper', 71, '2014-03-28'),
(16, 'Easy', 'Commodores', 77, '1977-01-01'),
(17, 'Break My Stride', 'Matthew Wilder', 75, '1983-03-19'),
(18, 'Heat Of The Moment', 'Asia', 71, '1982-03-08'),
(19, 'Running Up That Hill (A Deal With God)', 'Kate Bush', 86, '1985-09-16'),
(20, 'More Than a Feeling', 'Boston', 81, '1905-05-29'),
(21, 'Missing You', 'John Waite', 72, '1984-01-01'),
(22, 'Reelin\' In The Years', 'Steely Dan', 75, '1972-11-01'),
(23, 'Dream On', 'Aerosmith', 86, '1973-01-05'),
(24, 'Centerfold', 'The J. Geils Band', 73, '1905-06-03'),
(25, 'Africa', 'TOTO', 86, '1982-04-08'),
(26, 'Brandy (You\'re a Fine Girl)', 'Looking Glass', 78, '1905-05-25'),
(27, 'Surrender', 'Cheap Trick', 72, '1978-04-24'),
(28, 'I Love Rock \'N Roll', 'Joan Jett & the Blackhearts', 79, '1981-11-18'),
(29, 'You\'re so Vain', 'Carly Simon', 78, '1905-05-25'),
(30, 'Rebel Rebel - 2016 Remaster', 'David Bowie', 74, '1974-05-24'),
(31, 'Paradise By the Dashboard Light', 'Meat Loaf', 71, '1977-10-21'),
(32, 'Wouldn\'t It Be Nice', 'The Beach Boys', 73, '1966-06-16'),
(33, 'Livin\' Thing', 'Electric Light Orchestra', 72, '1976-09-01'),
(34, 'Have You Ever Seen The Rain', 'Creedence Clearwater', 86, '1970-12-07'),
(35, 'Drive - 2017 Remaster', 'The Cars', 72, '1905-06-06'),
(36, 'The Power Of Love', 'Huey Lewis & The News', 76, '2006-01-01'),
(37, 'You Shook Me All Night Long', 'AC/DC', 84, '1980-07-25'),
(38, 'Glory Days', 'Bruce Springsteen', 73, '1984-06-04'),
(39, 'Hungry Eyes - From Dirty Dancing Soundtrack', 'Eric Carmen', 75, '1905-06-19'),
(40, 'Danger Zone - From Top Gun Original Soundtrack', 'Kenny Loggins', 77, '1997-03-25'),
(41, 'Crazy Little Thing Called Love - Remastered 2011', 'Queen', 72, '1980-06-27'),
(42, 'Livin\' On A Prayer', 'Bon Jovi', 86, '1986-08-16'),
(43, 'Hungry Like the Wolf - 2009 Remaster', 'Duran Duran', 75, '1982-05-10'),
(44, 'We Didn\'t Start the Fire', 'Billy Joel', 76, '1989-10-17'),
(45, 'Don\'t You (Forget About Me)', 'Simple Minds', 78, '1905-06-07'),
(46, 'Rocket Man (I Think It\'s Going To Be A Long  Long Time)', 'Elton John', 83, '1972-05-19'),
(47, 'Don\'t You Want Me', 'The Human League', 78, '1905-06-03'),
(48, 'I\'m On Fire', 'Bruce Springsteen', 78, '1984-06-04'),
(49, 'Baba O\'Riley', 'The Who', 77, '1971-08-14'),
(50, 'Nothing\'s Gonna Stop Us Now', 'Starship', 80, '1987-07-27'),
(51, 'Jack & Diane', 'John Mellencamp', 75, '1905-06-04'),
(52, 'Just What I Needed', 'The Cars', 74, '1978-06-06'),
(53, 'Don\'t Stop - 2004 Remaster', 'Fleetwood Mac', 76, '1977-02-04'),
(54, 'Carry on Wayward Son', 'Kansas', 77, '1905-05-29'),
(55, 'Separate Ways (Worlds Apart)', 'Journey', 75, '1983-02-22'),
(56, 'The Boys Of Summer', 'Don Henley', 78, '1984-01-01'),
(57, 'End Of The Line', 'Traveling Wilburys', 72, '1988-10-18'),
(58, 'Barracuda', 'Heart', 77, '1977-05-14'),
(59, 'You Make My Dreams (Come True)', 'Daryl Hall & John Oates', 81, '1905-06-02'),
(60, 'Everybody Wants To Rule The World', 'Tears For Fears', 89, '1985-02-25'),
(61, 'Rebel Yell', 'Billy Idol', 76, '1983-11-01'),
(62, '9 to 5', 'Dolly Parton', 79, '1905-06-02'),
(63, 'Take It Easy - 2013 Remaster', 'Eagles', 80, '1905-05-25'),
(64, 'My Life', 'Billy Joel', 74, '1978-10-13'),
(65, 'Your Love', 'The Outfield', 74, '1905-06-07'),
(66, 'Walk Of Life - Remastered 1996', 'Dire Straits', 72, '1985-05-13'),
(67, 'Escape (The Pina Colada Song)', 'Rupert Holmes', 78, '1979-01-01'),
(68, '(Don\'t Fear) The Reaper', 'Blue Öyster Cult', 76, '1905-05-29'),
(69, 'Love Grows (Where My Rosemary Goes)', 'Edison Lighthouse', 77, '1970-01-01'),
(70, 'Runnin\' Down A Dream', 'Tom Petty', 72, '2019-03-01'),
(71, 'It\'s Still Rock and Roll to Me', 'Billy Joel', 73, '1980-03-12'),
(72, 'Hurts So Good', 'John Mellencamp', 74, '1905-06-04'),
(73, 'Sunday Bloody Sunday - Remastered 2008', 'U2', 74, '1983-02-28'),
(74, 'Here Comes The Sun - Remastered 2009', 'The Beatles', 85, '1969-09-26'),
(75, 'Paradise City', 'Guns N\' Roses', 82, '1987-07-21'),
(76, 'Life in the Fast Lane - 2013 Remaster', 'Eagles', 74, '1976-12-08'),
(77, 'Born to Run', 'Bruce Springsteen', 75, '1975-08-25'),
(78, 'Kickstart My Heart', 'Mötley Crüe', 80, '1989-09-01'),
(79, 'The Logical Song - Remastered 2010', 'Supertramp', 75, '1979-03-29'),
(80, 'We Built This City', 'Starship', 77, '1985-09-10'),
(81, 'Cecilia', 'Simon & Garfunkel', 75, '1970-01-26'),
(82, 'Solsbury Hill', 'Peter Gabriel', 73, '1905-05-30'),
(83, 'Give A Little Bit', 'Supertramp', 77, '1977-01-01'),
(84, 'Piano Man', 'Billy Joel', 78, '1973-11-07'),
(85, 'Any Way You Want It', 'Journey', 75, '1905-06-02'),
(86, 'Don\'t Bring Me Down', 'Electric Light Orchestra', 74, '1979-05-31'),
(87, 'Sweet Emotion', 'Aerosmith', 76, '1975-04-08'),
(88, 'Beast Of Burden - Remastered 1994', 'The Rolling Stones', 75, '1978-06-09'),
(89, 'Broken Wings', 'Mr. Mister', 72, '1985-11-27'),
(90, 'Listen to the Music', 'The Doobie Brothers', 78, '1905-05-25'),
(91, 'Dancing In the Dark', 'Bruce Springsteen', 81, '1984-06-04'),
(92, 'I Won\'t Back Down', 'Tom Petty', 77, '1989-01-01'),
(93, 'Start Me Up - Remastered 2009', 'The Rolling Stones', 79, '1981-08-24'),
(94, 'Don\'t Go Breaking My Heart', 'Elton John and Kiki Dee', 80, '1975-10-24'),
(95, 'Maneater', 'Daryl Hall & John Oates', 77, '1982-10-04'),
(96, 'Heroes - 2017 Remaster', 'David Bowie', 76, '1905-05-30'),
(97, 'Wild World', 'Yusuf / Cat Stevens', 79, '1970-11-23'),
(98, 'American Girl', 'Tom Petty and the Heartbreakers', 73, '1976-11-09'),
(99, 'Bohemian Rhapsody - Remastered 2011', 'Queen', 75, '1975-11-21'),
(100, 'Cold as Ice', 'beatles', 72, '1977-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `track_playlist`
--

CREATE TABLE `track_playlist` (
  `id_track_playlist` int(50) NOT NULL,
  `id_track` int(50) DEFAULT NULL,
  `in_id_playlist` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `track_playlist`
--

INSERT INTO `track_playlist` (`id_track_playlist`, `id_track`, `in_id_playlist`) VALUES
(9, 14, 3),
(10, 18, 3),
(28, 86, 3),
(72, 28, 2),
(157, 3, 3),
(201, 66, 2),
(222, 90, 2),
(226, 95, 3),
(230, 99, 3),
(237, 1, 4),
(238, 3, 4),
(239, 4, 4),
(249, 5, 3),
(269, 12, 1),
(270, 13, 1),
(271, 14, 1),
(272, 15, 1),
(273, 16, 1),
(274, 17, 1),
(275, 18, 1),
(276, 19, 1),
(279, 1, 1),
(280, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_user` int(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `newsletter` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `user_name`, `Email`, `password`, `newsletter`) VALUES
(1, 'Lei', 'zhao0261@algonquinlive.com', '123456', NULL),
(2, 'Paul', 'he000121@algonquinlive.com', '123456', NULL),
(3, 'Yu', 'song0145@algonquinlive.com', '123456', NULL),
(4, 'Joling', 'guo00125@algonquinlive.com', '123456', NULL),
(17, 'test', 'test@123.com', 'Qwerty', NULL),
(18, 'Lucas', 'lucas@test.com', 'Qwerty', NULL),
(19, 'qwert', 'psleizhao@gmail.com', 'Qwerty', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`ID_Track`);

--
-- Indexes for table `track_playlist`
--
ALTER TABLE `track_playlist`
  ADD PRIMARY KEY (`id_track_playlist`),
  ADD KEY `fk_track_playlist_track` (`id_track`),
  ADD KEY `fk_track_playlist_playlist` (`in_id_playlist`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `ID_Track` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `track_playlist`
--
ALTER TABLE `track_playlist`
  MODIFY `id_track_playlist` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `track_playlist`
--
ALTER TABLE `track_playlist`
  ADD CONSTRAINT `fk_track_playlist_playlist` FOREIGN KEY (`in_id_playlist`) REFERENCES `user` (`ID_user`),
  ADD CONSTRAINT `fk_track_playlist_track` FOREIGN KEY (`id_track`) REFERENCES `track` (`ID_Track`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
