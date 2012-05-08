-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 07. Nopember 2010 jam 23:26
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sillaturrahim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `addreses`
--

CREATE TABLE IF NOT EXISTS `addreses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addres` varchar(100) NOT NULL,
  `uid` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `addreses`
--

INSERT INTO `addreses` (`id`, `addres`, `uid`) VALUES
(1, 'jl.dodol', 'e0bdb9972845ee70ea2704f2180ed01b'),
(2, 'jl.surapati no.1', 'c3809079c1dc03585f1b62b1e09f6a47'),
(4, 'jl.margahayu no.3', 'c3809079c1dc03585f1b62b1e09f6a47'),
(5, 'jl.Menteng Raya no.4', 'c3809079c1dc03585f1b62b1e09f6a47'),
(6, 'jl.merdeka satu dua tiga', 'c25e8cdb7ac22b42543df8f37055280c'),
(9, 'jl.merdeka 234', 'c25e8cdb7ac22b42543df8f37055280c'),
(8, 'jl.margahayu', '13f9dbfd207d43dcb53f23fc512b32d4'),
(31, 'Pamikul', '9a397fedc9798cff4056aed25c350c96'),
(29, 'jl.mesjid-Al-wustho', '6daea62b461db2d8bf2c08a70ddea162');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `aid` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`name`, `location`, `uid`, `aid`) VALUES
('Liburan', 'Taman Safari Indonesia', 'c3809079c1dc03585f1b62b1e09f6a47', '15153e3b57884801034d7553adb12fc6'),
('kampus', 'kampus', 'c25e8cdb7ac22b42543df8f37055280c', '00eb1d5753c300f03b0d5f9a8bd3506b'),
('dodol', 'gfhfh', 'c25e8cdb7ac22b42543df8f37055280c', 'de37e99742a55fe2af736235c18093ef'),
('raffie', 'dimana-mana', 'e0bdb9972845ee70ea2704f2180ed01b', 'a3dda19ca1a2bb683070e9e72043a8a0'),
('aku', 'dimana aja', '9a397fedc9798cff4056aed25c350c96', 'f8575303ea5a7dc8a909543acd7b6d75'),
('ulang tahun', 'rumah makan', '9a397fedc9798cff4056aed25c350c96', '3528e156a44701ebbf139cd4ee114f0d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buddies`
--

CREATE TABLE IF NOT EXISTS `buddies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inviter` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `recepient` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `buddies`
--

INSERT INTO `buddies` (`id`, `inviter`, `recepient`, `status`) VALUES
(25, '9a397fedc9798cff4056aed25c350c96', 'c3809079c1dc03585f1b62b1e09f6a47', '0'),
(20, 'e0bdb9972845ee70ea2704f2180ed01b', 'c25e8cdb7ac22b42543df8f37055280c', '1'),
(21, 'e0bdb9972845ee70ea2704f2180ed01b', 'c3809079c1dc03585f1b62b1e09f6a47', '1'),
(23, 'c3809079c1dc03585f1b62b1e09f6a47', 'c25e8cdb7ac22b42543df8f37055280c', '1'),
(24, '6daea62b461db2d8bf2c08a70ddea162', 'c3809079c1dc03585f1b62b1e09f6a47', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `im`
--

CREATE TABLE IF NOT EXISTS `im` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `im` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `uid` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `im`
--

INSERT INTO `im` (`id`, `im`, `type`, `uid`) VALUES
(1, 'mockiemockiz', 'Yahoo!', 'e0bdb9972845ee70ea2704f2180ed01b'),
(2, 'mockie', 'Msn', 'c25e8cdb7ac22b42543df8f37055280c'),
(24, 'lol', 'Yahoo!', '9a397fedc9798cff4056aed25c350c96'),
(23, 'lol', 'Yahoo!', '9a397fedc9798cff4056aed25c350c96'),
(22, 'raffie', 'Yahoo!', '6daea62b461db2d8bf2c08a70ddea162'),
(21, 'raffie', 'Yahoo!', '6daea62b461db2d8bf2c08a70ddea162');

-- --------------------------------------------------------

--
-- Struktur dari tabel `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indonesia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `italy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `language`
--

INSERT INTO `language` (`id`, `indonesia`, `english`, `italy`, `arab`) VALUES
(1, 'kamu tidak terdaftar atau pendaftaran kamu telah melewati masa batas.', 'you are not registered or your registration has been expired.. please register again', 'non sei ancora registrato o la registrazione è passato attraverso i confini.', 'لم تكن مسجلة أو تسجيلك مرت حدود.'),
(2, 'Sudah mempunyai akun?silahkan login di sini...', 'Already have an account? Please login here ... ', 'Hai già un account? Il login qui ..', '...هل لديك حساب؟ الرجاء الدخول هنا'),
(36, 'Jejaring sosial "xyz" membantu anda dalam bersosialisasi dan berbagi cerita tentang hidupmu', 'Social network "xyz" to help you in socializing and sharing stories about your life', 'Social network "xyz" per aiutarti a socializzare e condividere le storie della tua vita', 'الشبكة الاجتماعية "XYZ" لمساعدتك في التنشئة الاجتماعية وتبادل القصص حول حياتك'),
(3, 'Mencapai lebih dari 500 juta\r\norang dimana mereka terhubung dan berbagi', 'Reach over 500 million\r\npeople where they connect and share', 'Raggiungendo più di 500 milioni di persone dove si collegano e condividono', '  تصل إلى أكثر من 500 مليون الناس حيث تواصل وتبادل '),
(4, 'Gratis daftar, bergabunglah sekarang juga dan mulailah berbagi cerita tentang hidupmu.', 'Register for free, join now and start sharing stories about your life.', 'lista gratuita, scopri e sentitevi liberi di essere musulmani', 'سجل مجانا ، اشترك الآن وبدء تبادل القصص حول حياتك.'),
(5, 'information', 'informasi', 'informazioni', 'المعلومات'),
(6, 'situs web', 'website', 'sito web', 'المواقع'),
(7, 'Universitas', 'University', 'università', 'جامعة'),
(8, 'mengatakan', 'says', 'dire', 'يقول'),
(9, 'Tentang Saya', 'About me', 'Su di me', 'لي عن '),
(10, 'album', 'album', 'album', 'الألبوم'),
(11, 'Catatan', 'notes', 'note', 'تلاحظ'),
(12, 'Beranda', 'Home', 'Home', 'الصفحة الرئيسية '),
(13, 'Profil', 'Profile', 'Profilo', 'الملف الشخصي'),
(14, 'Pengaturan', 'Setting', 'impostazione', 'الإعداد'),
(15, 'Komentar', 'Comments', 'Commenti', 'تعليقات'),
(16, 'Menyukai ini', 'Likes this', 'come questo', 'مثل هذا '),
(17, 'menyukai tulisan wall anda', 'like your wall post', '', ''),
(18, 'mengomentari tulisan wall anda', 'comment on your wall post', '', ''),
(19, 'Apakah anda yakin ingin menghapus postingan ini..!', 'Are you sure wanna delete this post.. ! ', 'belom ada italinya', 'belom ada italinya'),
(20, 'bagikan', 'share', 'italy', 'arab'),
(21, 'anda tidak bisa menilai komentar ini lebih dari satu kali', 'you can not judge this comment more than once', 'non si può giudicare questo commento più di una volta', 'لا يمكنك القاضي هذا التعليق أكثر من مرة'),
(22, 'Kirim Pesan', 'Send Message', 'invia messaggio', 'إرسال رسالة'),
(23, 'Pencarian', 'Search', 'ricerca', 'البحث'),
(24, 'Teman', 'Buddies', 'Amici', 'رفاقا'),
(25, 'Dinding', 'Wall', 'muro', 'الجدار '),
(26, 'Keluar', 'Log out', 'Log out', 'تسجيل الخروج'),
(27, 'Alamat', 'Addres', 'Indirizzo', 'عنوان'),
(28, 'Menu kamu', 'Your Menu', 'Il tuo menu', 'القائمة الخاص'),
(29, 'Ganti foto profile', 'Change profile picture', 'cambiare immagine profilo', 'تغيير صورة الملف الشخصي'),
(30, 'Lihat semua teman', 'View all buddies', 'Visualizza tutti i compagni', 'عرض كل الاصدقاء'),
(31, 'tidak menyukai ini', 'unlike(s) this', 'a differenza di questo', 'وعلى عكس هذا'),
(32, 'Lihat semua komentar', 'View all comments', 'Visualizza tutti i commenti', 'عرض كل التعليقات'),
(33, 'Kebijakan privasi', 'Privacy policy', 'Informativa sulla privacy', 'سياسة الخصوصية'),
(34, 'Persyaratan Layanan', 'Terms Of Service', 'Termini del servizio', 'شروط الخدمة'),
(35, 'Kebijakan Hak Cipta', 'Copyright Policy', 'Norme sul copyright', 'حقوق الطبع محفوظة سياسة');

-- --------------------------------------------------------

--
-- Struktur dari tabel `liked_id`
--

CREATE TABLE IF NOT EXISTS `liked_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idw` int(11) NOT NULL,
  `uid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=117 ;

--
-- Dumping data untuk tabel `liked_id`
--

INSERT INTO `liked_id` (`id`, `idw`, `uid`) VALUES
(36, 39, 'c3809079c1dc03585f1b62b1e09f6a47'),
(33, 37, 'e0bdb9972845ee70ea2704f2180ed01b'),
(32, 34, 'e0bdb9972845ee70ea2704f2180ed01b'),
(31, 33, 'e0bdb9972845ee70ea2704f2180ed01b'),
(30, 26, 'e0bdb9972845ee70ea2704f2180ed01b'),
(29, 28, 'e0bdb9972845ee70ea2704f2180ed01b'),
(28, 27, 'e0bdb9972845ee70ea2704f2180ed01b'),
(37, 70, 'c3809079c1dc03585f1b62b1e09f6a47'),
(38, 66, 'c3809079c1dc03585f1b62b1e09f6a47'),
(39, 66, 'c25e8cdb7ac22b42543df8f37055280c'),
(40, 70, 'c25e8cdb7ac22b42543df8f37055280c'),
(41, 60, 'c25e8cdb7ac22b42543df8f37055280c'),
(42, 63, 'c25e8cdb7ac22b42543df8f37055280c'),
(43, 62, 'c25e8cdb7ac22b42543df8f37055280c'),
(44, 35, 'c25e8cdb7ac22b42543df8f37055280c'),
(45, 59, 'c25e8cdb7ac22b42543df8f37055280c'),
(46, 56, 'c25e8cdb7ac22b42543df8f37055280c'),
(47, 71, 'c3809079c1dc03585f1b62b1e09f6a47'),
(48, 70, 'e0bdb9972845ee70ea2704f2180ed01b'),
(49, 72, 'c3809079c1dc03585f1b62b1e09f6a47'),
(50, 72, 'e0bdb9972845ee70ea2704f2180ed01b'),
(51, 73, 'c25e8cdb7ac22b42543df8f37055280c'),
(52, 74, 'c25e8cdb7ac22b42543df8f37055280c'),
(53, 75, 'c25e8cdb7ac22b42543df8f37055280c'),
(54, 80, 'c25e8cdb7ac22b42543df8f37055280c'),
(55, 72, 'c25e8cdb7ac22b42543df8f37055280c'),
(56, 84, 'c3809079c1dc03585f1b62b1e09f6a47'),
(57, 64, 'c3809079c1dc03585f1b62b1e09f6a47'),
(58, 84, 'c25e8cdb7ac22b42543df8f37055280c'),
(59, 88, 'c3809079c1dc03585f1b62b1e09f6a47'),
(60, 92, 'c3809079c1dc03585f1b62b1e09f6a47'),
(61, 87, 'c3809079c1dc03585f1b62b1e09f6a47'),
(62, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(63, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(64, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(65, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(66, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(67, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(68, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(69, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(70, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(71, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(72, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(73, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(74, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(75, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(76, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(77, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(78, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(79, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(80, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(81, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(82, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(83, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(84, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(85, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(86, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(87, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(88, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(89, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(90, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(91, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(92, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(93, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(94, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(95, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(96, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(97, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(98, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(99, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(100, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(101, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(102, 95, 'c3809079c1dc03585f1b62b1e09f6a47'),
(103, 91, 'c3809079c1dc03585f1b62b1e09f6a47'),
(104, 91, 'c3809079c1dc03585f1b62b1e09f6a47'),
(105, 91, 'c3809079c1dc03585f1b62b1e09f6a47'),
(106, 91, 'c3809079c1dc03585f1b62b1e09f6a47'),
(107, 91, 'c3809079c1dc03585f1b62b1e09f6a47'),
(108, 64, 'c25e8cdb7ac22b42543df8f37055280c'),
(109, 96, 'c25e8cdb7ac22b42543df8f37055280c'),
(110, 43, 'c25e8cdb7ac22b42543df8f37055280c'),
(111, 93, 'c25e8cdb7ac22b42543df8f37055280c'),
(112, 97, 'c3809079c1dc03585f1b62b1e09f6a47'),
(113, 74, 'c3809079c1dc03585f1b62b1e09f6a47'),
(114, 101, 'c3809079c1dc03585f1b62b1e09f6a47'),
(115, 102, 'c3809079c1dc03585f1b62b1e09f6a47'),
(116, 98, 'c3809079c1dc03585f1b62b1e09f6a47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idw` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `unlikes` int(11) NOT NULL,
  `uid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Dumping data untuk tabel `likes`
--

INSERT INTO `likes` (`id`, `idw`, `likes`, `unlikes`, `uid`) VALUES
(29, 39, 0, 2, ''),
(28, 37, 1, 0, ''),
(23, 27, 0, 1, ''),
(27, 34, 1, 0, ''),
(26, 33, 1, 0, ''),
(25, 26, 1, 0, ''),
(24, 28, 0, 1, ''),
(30, 70, 1, 0, ''),
(31, 66, 0, 2, ''),
(32, 60, 1, 0, ''),
(33, 63, 0, 1, ''),
(34, 62, 1, 0, ''),
(35, 35, 1, 0, ''),
(36, 59, 1, 0, ''),
(37, 56, 0, 1, ''),
(38, 71, 1, 0, ''),
(39, 72, 1, 1, ''),
(40, 73, 1, 0, ''),
(41, 74, 2, 0, ''),
(42, 75, 1, 0, ''),
(43, 80, 1, 0, ''),
(44, 84, 1, 0, ''),
(45, 64, 2, 0, ''),
(46, 88, 1, 0, ''),
(47, 92, 1, 0, ''),
(48, 87, 1, 0, ''),
(49, 95, 11, 13, ''),
(50, 91, 4, 1, ''),
(51, 96, 1, 0, ''),
(52, 43, 1, 0, ''),
(53, 93, 1, 0, ''),
(54, 97, 0, 1, ''),
(55, 101, 1, 0, ''),
(56, 102, 0, 1, ''),
(57, 98, 1, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `sender` varchar(40) NOT NULL,
  `recepient` varchar(40) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `time`, `subject`, `pesan`, `sender`, `recepient`, `status`) VALUES
(20, '2010-10-25 01:34:16', 'hai', 'ada apa kirim pesan', 'c3809079c1dc03585f1b62b1e09f6a47', 'c25e8cdb7ac22b42543df8f37055280c', '1'),
(5, '2010-10-12 08:38:36', 'hai kie', 'apa kabar?', 'c25e8cdb7ac22b42543df8f37055280c', 'c3809079c1dc03585f1b62b1e09f6a47', '1'),
(8, '2010-10-17 09:44:44', 'fgdgdfgdgf', 'gfdfgdf', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '0'),
(9, '2010-10-17 09:48:40', 'dfgfdg', 'fdgfdgfd', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '0'),
(10, '2010-10-17 09:49:18', 'asdasd', 'asdsa', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '0'),
(11, '2010-10-17 09:50:31', 'sadsa', 'sadsa', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '0'),
(12, '2010-10-17 09:50:48', 'asdasdas', 'asdasdasdasdas', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '0'),
(13, '2010-10-17 09:51:44', 'asdsa', 'sad', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '0'),
(14, '2010-10-17 09:52:47', 'sdfsdfds', 'sdfsdfdsfdsfdsfds', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '0'),
(15, '2010-10-17 09:54:41', '123123', '12312312321 12312312 12312312', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '1'),
(16, '2010-10-17 09:55:40', '444444444', '444444444444', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '0'),
(17, '2010-10-17 09:56:35', '3333333333', '3333333333333', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '1'),
(18, '2010-10-17 09:57:18', '22222222222222', '22222222222222222222222', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '1'),
(19, '2010-10-17 10:08:41', '111', '1111', 'c25e8cdb7ac22b42543df8f37055280c', 'e0bdb9972845ee70ea2704f2180ed01b', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `pid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `uid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `photos`
--

INSERT INTO `photos` (`pid`, `name`, `aid`, `uid`, `file`) VALUES
('cfb989a2fa910e0faafd1bbaeb62965c', 'test foto', '15153e3b57884801034d7553adb12fc6', 'c3809079c1dc03585f1b62b1e09f6a47', 'cfb989a2fa910e0faafd1bbaeb62965c.jpg'),
('f82257df8aa7c1be08a922aa2060b208', 'mockie', '3528e156a44701ebbf139cd4ee114f0d', '9a397fedc9798cff4056aed25c350c96', 'f82257df8aa7c1be08a922aa2060b208.JPG'),
('a35cb19591ccd19bb160441b410239c0', 'mockie', '3528e156a44701ebbf139cd4ee114f0d', '9a397fedc9798cff4056aed25c350c96', 'a35cb19591ccd19bb160441b410239c0.JPG'),
('5e805077b3b87412c5523a679f261c59', 'jhkhkjhk', '00eb1d5753c300f03b0d5f9a8bd3506b', 'c25e8cdb7ac22b42543df8f37055280c', '5e805077b3b87412c5523a679f261c59.JPG'),
('39f7f7e8f8dca79a714552bfbaf1b308', 'iqy', '15153e3b57884801034d7553adb12fc6', 'c3809079c1dc03585f1b62b1e09f6a47', '39f7f7e8f8dca79a714552bfbaf1b308.jpg'),
('0100a195b3700c90b6e38080a34383c1', 'anak2', '15153e3b57884801034d7553adb12fc6', 'c3809079c1dc03585f1b62b1e09f6a47', '0100a195b3700c90b6e38080a34383c1.jpg'),
('622cf395c4f0121f940e4db3dc2ff18b', '', '', 'c3809079c1dc03585f1b62b1e09f6a47', '622cf395c4f0121f940e4db3dc2ff18b.jpg'),
('2561f6a681bd02fe1c14705fec064f3b', 'a7x', '15153e3b57884801034d7553adb12fc6', 'c3809079c1dc03585f1b62b1e09f6a47', '2561f6a681bd02fe1c14705fec064f3b.jpg'),
('2ca80de032d414b02cb99f1a954b8105', '', '15153e3b57884801034d7553adb12fc6', 'c3809079c1dc03585f1b62b1e09f6a47', '2ca80de032d414b02cb99f1a954b8105.jpg'),
('2120a8768ea9697341a1b37a772a03e2', '', '', 'c3809079c1dc03585f1b62b1e09f6a47', '2120a8768ea9697341a1b37a772a03e2.jpg'),
('806460406cc4c587394cdbe4a7e2f924', '', '', 'c3809079c1dc03585f1b62b1e09f6a47', '806460406cc4c587394cdbe4a7e2f924.jpg'),
('d2d849f6a1992b3ed74bfe48f729eaad', 'aku', 'f8575303ea5a7dc8a909543acd7b6d75', '9a397fedc9798cff4056aed25c350c96', 'd2d849f6a1992b3ed74bfe48f729eaad.JPG'),
('8c55963fa01cfcdc3cd4d10d83107f67', 'mockie', 'f8575303ea5a7dc8a909543acd7b6d75', '9a397fedc9798cff4056aed25c350c96', '8c55963fa01cfcdc3cd4d10d83107f67.JPG'),
('acbfd2cb9d7c8624839a47ace9471ea7', 'mockie', '15153e3b57884801034d7553adb12fc6', 'c3809079c1dc03585f1b62b1e09f6a47', 'acbfd2cb9d7c8624839a47ace9471ea7.jpg'),
('5687952853f151c4b4e03a38852226c9', 'lebaran', 'a3dda19ca1a2bb683070e9e72043a8a0', 'e0bdb9972845ee70ea2704f2180ed01b', '5687952853f151c4b4e03a38852226c9.jpg'),
('efdbb21a59567c37b713d3bdc810a46a', 'raffie', 'a3dda19ca1a2bb683070e9e72043a8a0', 'e0bdb9972845ee70ea2704f2180ed01b', 'efdbb21a59567c37b713d3bdc810a46a.JPG'),
('f7234843fcd1dca70752618d438018fa', 'sleeeep', 'a3dda19ca1a2bb683070e9e72043a8a0', 'e0bdb9972845ee70ea2704f2180ed01b', 'f7234843fcd1dca70752618d438018fa.JPG'),
('72ca8c7d94f07a5743f296d9f8c36132', 'mockie', '3528e156a44701ebbf139cd4ee114f0d', '9a397fedc9798cff4056aed25c350c96', '72ca8c7d94f07a5743f296d9f8c36132.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `uid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `genre` enum('male','female') COLLATE utf8_unicode_ci NOT NULL,
  `home_town` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `current_location` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`uid`, `first_name`, `middle_name`, `surname`, `dob`, `genre`, `home_town`, `current_location`) VALUES
('c3809079c1dc03585f1b62b1e09f6a47', 'Muhammad', 'Rifki', 'mockie', '0000-00-00', '', '', ''),
('c25e8cdb7ac22b42543df8f37055280c', 'Tom', 'Morello', 'Audio Slave', '1950-11-12', 'male', 'jakarta,indonesia', 'Bandung,Indonesia'),
('1591a97a056c5e57c0dfe1967b4decb2', 'dinar', 'aja', 'aja', '1950-01-01', 'male', '', ''),
('13f9dbfd207d43dcb53f23fc512b32d4', 'dinar', 'dinar', 'dinar', '1950-01-01', 'male', '', ''),
('e0bdb9972845ee70ea2704f2180ed01b', 'mockie', ' aja', 'aja aja doang', '2010-10-12', 'male', 'Jakarta', 'Indonesia'),
('6daea62b461db2d8bf2c08a70ddea162', 'Muhamad Raffie', 'Khoyru', 'Sahlan', '0000-00-00', 'male', 'Cibubur,Bogor Indonesia', 'Legenda Wisata'),
('c02ec2b735ff8f8a6e17ce7f2477a1ee', 'Sri', 'Ayu Dwi', 'Lestari', '1961-01-01', 'female', '', ''),
('9a397fedc9798cff4056aed25c350c96', 'Sri', 'Ayu Dwi', 'Lestari', '1955-01-01', 'female', 'Bogor', 'Bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_pict`
--

CREATE TABLE IF NOT EXISTS `profile_pict` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_pict` varchar(60) NOT NULL,
  `uid` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `profile_pict`
--

INSERT INTO `profile_pict` (`id`, `profile_pict`, `uid`) VALUES
(1, 'profile_picts/8800acf431e6558a7a9d574b701f68d1.gif', 'e0bdb9972845ee70ea2704f2180ed01b'),
(2, 'profile_picts/ce50d69be71eb4117bce70186ecbff2c.jpg', 'c25e8cdb7ac22b42543df8f37055280c'),
(3, 'profile_picts/2ccee18920c54c1f59e4377cddcfaea6.jpg', 'c3809079c1dc03585f1b62b1e09f6a47'),
(13, 'profile_picts/2581f4e8da3fdaae38c89b1fbc088d67.JPG', '9a397fedc9798cff4056aed25c350c96'),
(12, 'profile_picts/42ac725d0276d51b68fabd83ce4ff11c.jpg', '6daea62b461db2d8bf2c08a70ddea162');

-- --------------------------------------------------------

--
-- Struktur dari tabel `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `idw` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `uid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Dumping data untuk tabel `replies`
--

INSERT INTO `replies` (`id`, `reply`, `idw`, `uid`, `time`) VALUES
(2, 'ghghg  $.$', '70', 'e0bdb9972845ee70ea2704f2180ed01b', '0000-00-00 00:00:00'),
(3, 'apa nak  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '70', 'c25e8cdb7ac22b42543df8f37055280c', '2010-09-13 06:34:11'),
(4, ' <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', '70', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-09-13 09:57:38'),
(5, ' <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', '66', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-09-14 06:24:15'),
(9, 'ajak2 dong  <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', '70', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-14 04:01:49'),
(10, 'ini ada indah yg komen.... kok jomplang yah suara km sama sandhy wkwkwwkkw  <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', '69', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-14 04:05:11'),
(8, 'wah ga ada yang komen  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '69', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-14 03:59:30'),
(11, 'kasian amat ga ada yg komen  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '37', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-14 11:54:56'),
(12, 'heeeei lagi apa ?(belajar oon akun sendiri komen sendiri =,=\\")  <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', '72', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-14 08:57:11'),
(13, ' <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" />', '69', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-14 09:21:22'),
(14, 'sdfdsfdsfds  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '72', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-15 03:17:43'),
(15, 'heueeeeeeeeeeeeeeeeeeeeeeeeeeeeh pusiiiiiiiiiiing  <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" />', '80', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-16 12:41:35'),
(16, 'fdghdghdfgdh <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" />', '84', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-16 03:04:13'),
(18, 'stressss', '64', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-16 03:08:54'),
(19, 'Laugh out loud <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', '58', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-16 03:09:20'),
(20, ' <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', '86', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-17 07:41:20'),
(21, ' <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', '76', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-17 09:41:47'),
(22, ' <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', '91', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-20 04:39:09'),
(23, ' <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '91', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-20 04:39:22'),
(24, ' <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> hehehhehhhhhhhehehehheheheheh', '86', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-20 11:57:47'),
(26, ' <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', '94', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-24 07:39:50'),
(27, 'eeeeh ngapain di mari <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '93', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-25 01:40:05'),
(28, ' <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', '96', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-25 01:42:23'),
(29, ' <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', '43', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-25 01:50:47'),
(30, 'biruuuuuuuuuuuuuuuuuuuuuuuuuuuuuu  <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" />', '95', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-25 11:08:13'),
(31, 'haaai mantan...huhuhuhhu stress', '97', '9a397fedc9798cff4056aed25c350c96', '2010-10-28 12:14:50'),
(32, ' <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '97', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 10:35:46'),
(33, ' <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', '97', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 10:48:54'),
(34, ' <img src="views/themes/default/emoticons/smiley-money.png" alt="" /> <img src="views/themes/default/emoticons/smiley-money.png" alt="" /> <img src="views/themes/default/emoticons/smiley-money.png" alt="" />', '95', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 10:58:34'),
(35, ' <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '97', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:09:16'),
(36, ' <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', '95', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:09:46'),
(37, ' <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" />', '92', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:12:07'),
(38, ' <img src="views/themes/default/emoticons/smiley-fat.png" alt="" /> <img src="views/themes/default/emoticons/smiley-fat.png" alt="" />', '94', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:14:42'),
(39, ' <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', '94', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:15:38'),
(40, ' <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', '94', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:16:06'),
(41, 'test reply  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '94', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:19:29'),
(42, 'test reply ya <img src="views/themes/default/emoticons/smiley.png" alt="" />', '92', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:20:13'),
(43, 'stresssssssssssssss  <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', '102', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:21:38'),
(44, 'ciaaaaaaaaaaaaaaaaaaaat  <img src="views/themes/default/emoticons/smiley-wink.png" alt="" />', '101', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:22:25'),
(45, 'ga di komen2 nih  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', '99', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:22:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `universities`
--

CREATE TABLE IF NOT EXISTS `universities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `university` varchar(40) NOT NULL,
  `uid` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `universities`
--

INSERT INTO `universities` (`id`, `university`, `uid`) VALUES
(1, 'BSI', 'e0bdb9972845ee70ea2704f2180ed01b'),
(2, 'BINA NUSANTARA (Binus)', 'c3809079c1dc03585f1b62b1e09f6a47'),
(3, 'Bina Sarana Informatika (BSI)', 'c3809079c1dc03585f1b62b1e09f6a47'),
(4, 'Gunadarma', 'c3809079c1dc03585f1b62b1e09f6a47'),
(5, 'UNPAD', 'c25e8cdb7ac22b42543df8f37055280c'),
(7, 'BSI', '13f9dbfd207d43dcb53f23fc512b32d4'),
(29, 'Institut Pertanian Bogor', '9a397fedc9798cff4056aed25c350c96'),
(27, 'Universitas Indonesia', '6daea62b461db2d8bf2c08a70ddea162');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registred` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(39) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `uid` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `registred`, `email`, `pass`, `status`, `uid`) VALUES
(27, '2010-09-08', 'mockie@localhost', '8dd3ec9fabca5816f64b85a05980a016', '1', 'e0bdb9972845ee70ea2704f2180ed01b'),
(33, '2010-10-02', 'client3@localhost', '2cb677824c510c7a0e8130854614fa0b', '1', 'c3809079c1dc03585f1b62b1e09f6a47'),
(35, '2010-10-07', 'client2@localhost', '68041d4699539692f698b002d836ab2a', '1', 'c25e8cdb7ac22b42543df8f37055280c'),
(40, '2010-10-27', 'mockie.facebook@gmail.com', '61d41e3a2c0cb1ce93b1d35e9b5b3281', '1', '9a397fedc9798cff4056aed25c350c96'),
(38, '2010-10-21', 'raffie@localhost', 'ec1dfd0dbac809b62676ef0c2f3449a6', '1', '6daea62b461db2d8bf2c08a70ddea162');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wall`
--

CREATE TABLE IF NOT EXISTS `wall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` text CHARACTER SET latin1 NOT NULL,
  `recepient` varchar(40) CHARACTER SET latin1 NOT NULL,
  `sender` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=103 ;

--
-- Dumping data untuk tabel `wall`
--

INSERT INTO `wall` (`id`, `status`, `recepient`, `sender`, `time`) VALUES
(28, 'social network for muslim', 'e0bdb9972845ee70ea2704f2180ed01b', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-09-12 09:21:58'),
(27, 'test lagi aaaaaaaaaaaaaah', 'e0bdb9972845ee70ea2704f2180ed01b', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-09-12 09:21:06'),
(26, 'test update status yaaaah ', 'e0bdb9972845ee70ea2704f2180ed01b', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-09-12 09:20:10'),
(34, ' <img src="views/themes/default/emoticons/smiley.png" alt="" /> <img src="views/themes/default/emoticons/smiley-confuse.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-fat.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-mad.png" alt="" /> <img src="views/themes/default/emoticons/smiley-money.png" alt="" /> <img src="views/themes/default/emoticons/smiley-wink.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" />', 'e0bdb9972845ee70ea2704f2180ed01b', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-09-13 05:25:09'),
(35, ' <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> emaaaaaaaaaaaaaaaaaaaaaaaak', 'e0bdb9972845ee70ea2704f2180ed01b', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-09-13 05:25:34'),
(39, 'coba yaaaah update <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-03 11:36:25'),
(37, 'asdas  <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', 'e0bdb9972845ee70ea2704f2180ed01b', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-09-13 06:35:15'),
(92, 'hoaaaaaaaaaaaaaaaaam  <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-21 12:07:48'),
(40, 'selamat pagi jakaaaartaaa  <img src="views/themes/default/emoticons/smiley-wink.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-04 01:53:24'),
(41, 'Selamat pagi. Ada rencana membeli batik dalam waktu dekat? Tanyakan apakah batiknya adalah batik cap atau batik tulis. Pilih hanya yang asli buatan pengrajin batik Indonesia ya.  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-04 02:28:30'),
(42, 'teeeeeeeeeeeeeeeeeessss....  <img src="views/themes/default/emoticons/smiley-money.png" alt="" /> <img src="views/themes/default/emoticons/smiley-money.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-04 03:58:57'),
(43, 'waaaaah sudah malaaaam  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-04 11:15:24'),
(44, 'pusiiiiiiiiiiiiiiiiiiiiing ngerjain TA  <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-04 11:18:44'),
(45, '?? ??? ????? ?? ?????? ??? ????.', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-05 12:16:20'),
(46, 'Ibu adalah hati yang rela menerima, selalu disakiti oleh anak-anaknya penuh\\nmaaf dan ampun kasih sayang, ia adalah kilau sinar kegaiban Tuhan membangkitkan\\nharu insan dengan kebajikan, Ibu engkau mengenalkan aku kepada Tuhan ~ Wiji /1986\\nOn Twitter Follow @TerimakasihIBU\\nand my Twit @Irrfff  <img src="views/themes/default/emoticons/smiley-money.png" alt="" /> <img src="views/themes/default/emoticons/smiley-wink.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-mad.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-05 12:26:49'),
(47, 'sdsd <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-05 12:28:38'),
(48, 'World boss is unbelievably strong and Shivam\\''s ninja has beaten the boss! You can also be a great hero and receive surprised rewards from the boss!  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-fat.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-05 12:32:26'),
(49, 'Hallo, gestern konnte ich mein erstes GÖÖÖL für Real erzielen und darüber freue ich mich unglaublich. Jetzt geht\\''s zum Länderspiel nach Berlin. Bis Freitag, Mesut \\nHi, yesterday I scored my first GÖÖÖL for Real and I am so happy about it. Next up is the match in Berlin. See you on Friday, Mesut  <img src="views/themes/default/emoticons/smiley-wink.png" alt="" /> <img src="views/themes/default/emoticons/smiley-wink.png" alt="" /> <img src="views/themes/default/emoticons/smiley-wink.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-05 12:32:47'),
(50, 'selmat siaaang duniaaaaa  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-05 02:16:56'),
(51, 'wooooi Tugas akhir mudah2an selesai seperti yang di inginkan yah  <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-05 08:34:16'),
(52, 'halaman album foto hampir rampuuung  <img src="views/themes/default/emoticons/smiley-wink.png" alt="" /> <img src="views/themes/default/emoticons/smiley-wink.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-06 12:52:25'),
(58, 'LOL  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', 'c25e8cdb7ac22b42543df8f37055280c', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-08 11:32:47'),
(56, 'haaaai mockie  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-07 02:42:32'),
(59, 'hoaaaaaaaaaaaaaaaammmmmmmmmmmmmmm  <img src="views/themes/default/emoticons/smiley-confuse.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-08 11:42:54'),
(60, 'pusing  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-08 04:17:38'),
(62, 'Aku berdiri termangu\\nmemperhatikan hiruk pikuk khalayak\\nyang mengejar kegemerlapan\\ndan memuja harta\\nsebagai pemeringkat sesama.\\n\\nTuhanku Yang Maha Memelihara,\\n\\nJauhkanlah hatiku\\ndari ketertarikan untuk meniru\\njalan yang gemerlapnya menipu,\\ndamaikanlah jiwaku\\ndalam keindahan kasih sayang,\\nkejujuran, dan penghormatan\\nkepada sesama dan alam.\\n\\nBebaskanlah aku dari pengejaran\\nyang tidak mendekatkanku kepada-Mu.\\n\\nAmien  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-08 10:55:35'),
(63, 'malaaaaam indonesiakuu  <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-09 03:36:06'),
(64, ' <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" /> <img src="views/themes/default/emoticons/smiley-kiss.png" alt="" />', 'c25e8cdb7ac22b42543df8f37055280c', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-09 06:31:01'),
(66, 'hjfghjghjg <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-11 10:04:03'),
(84, 'sdfsfgsf', 'c25e8cdb7ac22b42543df8f37055280c', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-16 03:03:59'),
(85, 'hoaaaaaaaaaaaaaa logika notif gimaaaana ini yang tepat  <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-17 02:18:01'),
(86, ' <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c25e8cdb7ac22b42543df8f37055280c', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-17 03:37:20'),
(70, 'haaaaaaaaaaaaaaaai haaaaaaaaaaaaaaaaaaai haaaaaaaaaaaaaaai\\n\\n <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-12 06:38:59'),
(71, 'kasihan amat ni ga ada yang ngewall....  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', 'e0bdb9972845ee70ea2704f2180ed01b', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-14 12:40:58'),
(72, 'heiiii  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-10-14 12:49:04'),
(74, 'ki pusing yaaah ? <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-14 09:31:19'),
(75, 'uuuuy  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-15 02:21:49'),
(76, 'woooooooooooooooooooooooooi  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'e0bdb9972845ee70ea2704f2180ed01b', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-15 02:22:28'),
(77, 'test di home timbul apa ngga..... <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cry.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-15 10:04:50'),
(78, ' <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'e0bdb9972845ee70ea2704f2180ed01b', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-15 10:09:20'),
(79, ' <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" /> <img src="views/themes/default/emoticons/smiley-eek-blue.png" alt="" />', 'e0bdb9972845ee70ea2704f2180ed01b', 'e0bdb9972845ee70ea2704f2180ed01b', '2010-10-15 10:10:00'),
(87, ' <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', 'e0bdb9972845ee70ea2704f2180ed01b', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-19 11:02:27'),
(88, ' <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-19 11:04:44'),
(89, 'Array', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-20 12:27:06'),
(90, ' <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-20 12:28:46'),
(91, ' <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" /> <img src="views/themes/default/emoticons/smiley-razz.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-20 12:39:08'),
(93, 'hai  <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" /> <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', 'c25e8cdb7ac22b42543df8f37055280c', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-21 07:17:26'),
(94, 'haaaaaaaaaai pertama kali buat status nih', '6daea62b461db2d8bf2c08a70ddea162', '6daea62b461db2d8bf2c08a70ddea162', '2010-10-21 11:51:15'),
(95, 'PAM theme  <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-25 01:04:09'),
(96, 'revisiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii  <img src="views/themes/default/emoticons/smiley-fat.png" alt="" /> <img src="views/themes/default/emoticons/smiley-fat.png" alt="" />', 'c25e8cdb7ac22b42543df8f37055280c', 'c25e8cdb7ac22b42543df8f37055280c', '2010-10-25 01:41:05'),
(97, ' <img src="views/themes/default/emoticons/smiley-evil.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-26 06:25:09'),
(98, ' <img src="views/themes/default/emoticons/smiley-cool.png" alt="" /> <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c25e8cdb7ac22b42543df8f37055280c', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-27 03:31:05'),
(99, 'gfhgfhgf', 'c25e8cdb7ac22b42543df8f37055280c', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-10-27 04:21:53'),
(100, 'status pertama sayaaaaaaaaaaaaaaaa  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', '9a397fedc9798cff4056aed25c350c96', '9a397fedc9798cff4056aed25c350c96', '2010-10-28 12:12:12'),
(101, 'almost  <img src="views/themes/default/emoticons/smiley-cool.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:21:05'),
(102, ' <img src="views/themes/default/emoticons/smiley-grin.png" alt="" /> <img src="views/themes/default/emoticons/smiley-grin.png" alt="" />', 'c3809079c1dc03585f1b62b1e09f6a47', 'c3809079c1dc03585f1b62b1e09f6a47', '2010-11-07 11:21:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `websites`
--

CREATE TABLE IF NOT EXISTS `websites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website` varchar(100) NOT NULL,
  `uid` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `websites`
--

INSERT INTO `websites` (`id`, `website`, `uid`) VALUES
(1, 'mockizart.co.cc', 'e0bdb9972845ee70ea2704f2180ed01b'),
(2, 'diskusiweb.com', 'c3809079c1dc03585f1b62b1e09f6a47'),
(3, 'mockizart.co.cc', 'c3809079c1dc03585f1b62b1e09f6a47'),
(4, 'dodol.com', 'c25e8cdb7ac22b42543df8f37055280c'),
(5, 'dinar.com', '13f9dbfd207d43dcb53f23fc512b32d4'),
(27, 'http://ipb.ac.id', '9a397fedc9798cff4056aed25c350c96'),
(25, 'http://mockizart.co.cc', '6daea62b461db2d8bf2c08a70ddea162'),
(24, 'http://mockizart.co.cc', '6daea62b461db2d8bf2c08a70ddea162');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
