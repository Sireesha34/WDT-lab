SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS
*/;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
CREATE TABLE `student` (
`sid` int(10) NOT NULL,
`sname` varchar(30) NOT NULL,
`saddress` varchar(100) NOT NULL,
`sclass` int(10) NOT NULL,
`sphone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `student` (`sid`, `sname`, `saddress`, `sclass`, `sphone`) VALUES
(1, 'Sila Khatri', '#34 sdfdsfsdf', 1, '9898989874'),
(2, 'Anita Chettri', '#654 KD Building Mumbai', 1, '9874587456'),
(3, 'Jasmine Singh', '#34 JC Road, abc', 1, '9845546546'),
(4, 'Sangam B', '#76 SK Building,Pkr', 3, '9827135435'),
(5, 'Ritika Singh', '#45 RS Buiding', 3, '34435435');
CREATE TABLE `studentclass` (
`cid` int(11) NOT NULL,
`cname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
}
INSERT INTO `studentclass` (`cid`, `cname`) VALUES
(1, 'BCA'),
(2, 'Btech'),
(3, 'Bsc'),
(4, 'Bcom');
ALTER TABLE `student`
ADD PRIMARY KEY (`sid`);
ALTER TABLE `studentclass`
ADD PRIMARY KEY (`cid`);
ALTER TABLE `student`
MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
ALTER TABLE `studentclass`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
config.php:
<?php
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
?>
