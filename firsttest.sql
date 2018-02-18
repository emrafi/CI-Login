-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Februari 2018 jam 15:08
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `firsttest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` char(32) NOT NULL,
  `nama` varchar(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`) VALUES
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(12, 'rafi', '139c4e89cdbedaf144d05ca54a12a57b', 'rafi'),
(13, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin2'),
(14, 'sopian345', 'rafi123', 'sopian');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
