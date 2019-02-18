-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2015 at 08:37 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eletra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL,
  `name_admin` varchar(20) NOT NULL,
  `passwd` varchar(25) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `name_admin`, `passwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `atribut`
--

CREATE TABLE IF NOT EXISTS `atribut` (
  `id_attrib` int(11) NOT NULL,
  `nm_attrib` varchar(25) NOT NULL,
  `isi` varchar(500) NOT NULL,
  PRIMARY KEY (`id_attrib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `atribut`
--

INSERT INTO `atribut` (`id_attrib`, `nm_attrib`, `isi`) VALUES
(1, 'carousel', 'a:3:{i:0;s:54:"http://localhost/elearning/page/uploads/itm/img/1.jpeg";i:1;s:61:"http://localhost/elearning/page/uploads/itm/img/Jellyfish.jpg";i:2;s:62:"http://localhost/elearning/page/uploads/itm/img/Hydrangeas.jpg";}'),
(2, 'icon', 'http://localhost/elearning/page/uploads/itm/img/E-Learning-128.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `organisasi` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `isi` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `organisasi`, `email`, `phone`, `isi`, `date`) VALUES
(3, 'bejo', 'suparjo', '', 'bejo@gmail.co', 'gooooooood', '2015-05-09 06:34:23'),
(4, 'Rachmad', '', 'raphidgua@gmail.com', '', 'Bagus', '2015-05-21 05:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `nm_file` varchar(500) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2357 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `id_post`, `nm_file`) VALUES
(2340, 10, 'http://localhost/asset/uploads/source/guru/nur5638/pool%20market.pdf'),
(2341, 11, 'http://localhost/asset/uploads/source/guru/nur5638/analisa11.ppt'),
(2342, 12, 'http://localhost/sman4/asset/uploads/image/ASJ_karakter.jpg'),
(2343, 13, 'http://localhost/sman4/asset/uploads/source/guru/nur5638/pool%20market.pdf'),
(2344, 13, 'http://localhost/sman4/asset/uploads/source/guru/nur5638/analisa11.ppt'),
(2345, 13, 'http://localhost/sman4/asset/uploads/source/guru/nur5638/pool%20market.pdf'),
(2346, 13, 'http://localhost/sman4/asset/uploads/source/guru/nur5638/pool%20market.pdf'),
(2347, 13, ''),
(2348, 14, 'http://localhost/sman4/asset/uploads/image/ASJ_karakter.jpg'),
(2349, 11, ''),
(2350, 11, ''),
(2351, 11, ''),
(2352, 11, ''),
(2353, 10, 'http://localhost/sman4/asset/uploads/image/image0001.jpg'),
(2354, 16, 'http://localhost/sman4/asset/uploads/image/Scan10001.JPG'),
(2355, 17, 'http://localhost/sman4/asset/uploads/source/guru/didik/MASYARAKAT%20MADANI%20DAN%20KESEJAHTERAAN%20UMAT.docx'),
(2356, 18, 'http://localhost/sman4/asset/uploads/source/guru/didik/MASYARAKAT%20MADANIDAN%20KESEJAHTERAAN%20UMAT.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `ttl` date NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `first_name`, `last_name`, `ttl`, `mapel`, `username`, `email`, `pass`, `img`) VALUES
(1, 'nuri', 'hasanah', '1980-09-11', '', 'nur5638', 'nur@gmail.com', 'sutejo', 'http://localhost/eletra/uploads/source/guru/nur5638/3-2-adit.png'),
(2, 'jefri', 'batosai', '1990-01-12', 'FISIKA', 'jefri', 'jefri@gmail.com', 'jefribatosai', 'http://placehold.it/300x300'),
(3, 'wahyu', 'firmansyah', '1999-03-31', 'FISIKA', 'wahyyu', 'wahyuf@gmail.com', 'wahyu', 'http://placehold.it/300x300'),
(4, 'didik', 'achmadi', '1999-03-31', 'FISIKA', 'didik', 'didik@gmail.com', 'achmadi', 'http://placehold.it/300x300'),
(5, 'bibi', 'bubu', '1999-03-31', 'FISIKA', 'bobo', 'bibi@gmail.com', 'bibi', 'http://placehold.it/300x300'),
(6, 'racchmad', 'putra', '1996-04-04', 'KIMIA', 'superman', 'raphidgua@gmail.com', 'putratama', 'http://placehold.it/300x300'),
(7, 'puji', 'yitno', '2015-05-04', 'AGAMA', 'vertrata', 'puji@gmail.com', 'puji', 'http://placehold.it/300x300');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, 'XI IPA III'),
(2, 'XI IPS III'),
(3, 'X A'),
(4, 'X B'),
(5, 'X C');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mata_pelajaran` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `mata_pelajaran`) VALUES
(1, 'MATEMATIKA'),
(2, 'FISIKA'),
(3, 'AGAMA'),
(4, 'KIMIA'),
(5, 'TIK'),
(6, 'B. INDO'),
(7, 'B. INGGRIS'),
(8, 'TATABOGA');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `author` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`idpost`, `judul`, `kategori`, `kelas`, `author`, `isi`, `time`) VALUES
(10, 'TEST', '2', '2', 'nur@gmail.com', '<p>Testing</p>', '2015-05-21 00:02:49'),
(11, 'LIst 2', '3', '4', 'nur@gmail.com', '<p>LIst</p>', '2015-05-21 05:24:48'),
(13, 'TESTING 2', '2', '1', 'nur@gmail.com', '<p>test</p>', '2015-05-21 05:12:56'),
(14, 'TEST', '', '', 'admin', '<p>TEST KEGIATAN</p>', '2015-05-21 05:21:42'),
(15, 'PENJELASAN', '2', '2', 'jefri@gmail.com', '<p>From this distant vantage point, the Earth might not seem of any particular interest. But for us, it''s different. Consider again that dot. That''s here. That''s home. That''s us. On it everyone you love, everyone you know, everyone you ever heard of, every human being who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every "superstar," every "supreme leader," every saint and sinner in the history of our species lived there&nbsp;&ndash; on a mote of dust suspended in a sunbeam.</p>\r\n<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>\r\n<p>Here''s how it is: Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I''m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There''s a doctor, too, took his genius sister out of some Alliance camp, so they''re keeping a low profile. You got a job, we can do it, don''t much care what it is.</p>\r\n<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>', '2015-05-21 05:35:30'),
(16, 'TEST 22', '', '', 'admin', '<p>From this distant vantage point, the Earth might not seem of any particular interest. But for us, it''s different. Consider again that dot. That''s here. That''s home. That''s us. On it everyone you love, everyone you know, everyone you ever heard of, every human being who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every "superstar," every "supreme leader," every saint and sinner in the history of our species lived there&nbsp;&ndash; on a mote of dust suspended in a sunbeam.</p>\r\n<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>\r\n<p>Here''s how it is: Earth got used up, so we terraformed a whole new galaxy of Earths, some rich and flush with the new technologies, some not so much. Central Planets, them was formed the Alliance, waged war to bring everyone under their rule; a few idiots tried to fight it, among them myself. I''m Malcolm Reynolds, captain of Serenity. Got a good crew: fighters, pilot, mechanic. We even picked up a preacher, and a bona fide companion. There''s a doctor, too, took his genius sister out of some Alliance camp, so they''re keeping a low profile. You got a job, we can do it, don''t much care what it is.</p>\r\n<p>Space, the final frontier. These are the voyages of the starship Enterprise. Its five year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before!</p>', '2015-05-21 05:39:32'),
(17, 'MATEMATIKA', '1', '4', 'didik@gmail.com', '<p>materi matematika</p>', '2015-05-21 05:43:52'),
(18, 'TATA BOGA', '8', '2', 'didik@gmail.com', '<p>TUGAS !! dikumpulkan BESOK</p>', '2015-05-21 05:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_attrib` int(11) NOT NULL,
  `conf` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `first_nm` varchar(15) NOT NULL,
  `last_nm` varchar(15) NOT NULL,
  `kls` varchar(10) NOT NULL,
  `email_sis` varchar(30) NOT NULL,
  `pass_sis` varchar(25) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `username`, `first_nm`, `last_nm`, `kls`, `email_sis`, `pass_sis`, `img`) VALUES
(1, 'diki2', 'diki', 'yusman', 'X A', 'diki@gmail.com', 'dikiyusman', 'http://placehold.it/300x300'),
(2, 'joko2', 'joko', 'susilo', 'X A', 'joko@gmail.com', 'jokosusilo', 'http://placehold.it/300x300'),
(3, 'dedi', 'dedi2', 'kurniawan', 'XI IPS I', 'dedi@gmail.com', 'dedikurniawan', 'http://placehold.it/300x300'),
(5, 'wahyu', 'wahyu', 'firmansyah', 'XI IPS I', 'wahyu@gmail.com', 'WAHYUF', 'http://placehold.it/300x300'),
(6, 'derona', 'guru', 'derona', 'X B', 'derona@gmail.com', 'derona', 'http://placehold.it/300x300'),
(7, 'jaka', 'jaka', 'tarub', 'XI IPS I', 'tarub@gmail.com', 'tarub', 'http://placehold.it/300x300'),
(8, 'sulistya', 'sulis', 'atik', 'XI IPS I', 'sulis@gmail.com', 'sulis', 'http://placehold.it/300x300'),
(9, 'jorge', 'jorge', 'courious', 'XI IPS I', 'jorge@gmail.com', 'jorgep', 'http://placehold.it/300x300'),
(10, 'jjoo', 'jojo', 'jiji', 'X A', 'jojo@gmail.com', 'jojo', 'http://placehold.it/300x300'),
(11, 'satriyo', 'satriyo', 'suparjo', 'XI IPS III', 'satriyo@gmail.com', 'satriyo', 'http://localhost/sman4/asset/uploads/source/siswa/satriyo/Scan1.JPG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
