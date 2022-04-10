-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 01:57 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(250) NOT NULL,
  `song_name` varchar(20) NOT NULL,
  `song_image` varchar(250) NOT NULL,
  `song_about` varchar(2000) NOT NULL,
  `songs` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `song_name`, `song_image`, `song_about`, `songs`) VALUES
(54, 'best youtube', 'songs/img/pexels-pixabay-164829.jpg', 'This song is the youtube premium songs.', 'songs/music/Divine_Life_Society.mp3'),
(58, 'AEWATAN SONG _ ARIJI', 'songs/img/OIP.jpg', 'Ae Watan Lyrics Raazi: This beautiful patriotic song, sung by Arijit Singh is from Meghna Gulzarâ€™s upcoming Hindi film Raazi starring Alia Bhatt. It has music composed by Shankar Ehsaan Loy while the lyrics of â€œAe Watanâ€ are written by directorâ€™s father Gulzar.\r\n\r\n\r\n\"AE WATAN\" Song Details:\r\nðŸ‘‡ðŸ‘‡ðŸ‘‡ðŸ‘‡ðŸ‘‡ðŸ‘‡ðŸ‘‡ðŸ‘‡ðŸ‘‡ðŸ‘‡\r\n\r\nSong: Ae Watan\r\nSinger: Arijit Singh\r\nMovie: Raazi\r\nLyricist: Gulzar\r\nMusic: Shankar-Ehsaan-Loy\r\nCast: Alia Bhatt, Vicky Kaushal\r\nMusic Label: Zee Music Company', 'songs/music/(LYRICS)_ AE WATAN SONG _ ARIJIT SINGH _ SHANKAR-EHSAAN-LOY, GULZAR _ ALIA B, VICKY K _ RAAZI ( 128kbps ).mp3'),
(59, 'Ae Mera Watan Ke log', 'songs/img/maxresdefault.jpg', 'Ae Mere Wattan Ke Logon lyrics in Hindi & English sung by Lata Mangeshkar from the album Lata Mangeshkar - Mukesh Live In Concert Vol 2.\r\n\r\nSong Credits:\r\nSong: Ae Mere Wattan Ke Logo\r\nAlbum: Lata Mangeshkar - Mukesh Live In Concert Vol 2\r\nArtist: Lata Mangeshkar, Chorus\r\nMusic Director: C. Ramchandra\r\nLyricist: Pradeep Kumar\r\n\r\n--------------------------------------------------------------------------------------------\r\nLabel :: Saregama India Limited, A RPSG Group Company', 'songs/music/Ae Mere Watan Ke Logon with lyrics_ Lata Mangeshkar _ Live in Concert ( 128kbps ).mp3'),
(60, 'Kisi Ki Muskurahaton', 'songs/img/maxresdefault (1).jpg', 'Kisi Ki Muskurahaton Pe (HD) - Old Hindi Hits Mukesh Karaoke Song - Anari - Raj Kapoor - Nutan ( 128kbps )\r\n------------------------------------------------------------------------------------------\r\nMovie: Anari (1959)\r\nSong: Kisi Ki Muskurahaton Pe Ho Nisar\r\nStarcast: Raj Kapoor, Nutan, Nazir Hussain, Lalita Pawar, Motilal, Shubha Khote, Mukri and Helen\r\nSinger: Mukesh \r\nMusic Director: Shankar Jaikishan\r\nLyricist: Shailendra\r\n****************************************************************************************\r\nSong\r\nRaj Kapoor Speaks & Kisiki Mukurahaton Pe (Film - Anari) - Mukesh/Raj Kapoor (Speaks)\r\nArtist\r\nMukesh/Raj Kapoor (Speaks)\r\nAlbum\r\nLegend Raj Kapoor-The Showman  Vol-3\r\nLicensed to YouTube by\r\nsaregama (on behalf of Saregama India Ltd.); BMI - Broadcast Music Inc., LatinAutorPerf, UMPG Publishing, Saregama Publishing, and 9 Music Rights Societies', 'songs/music/Kisi Ki Muskurahaton Pe (HD) - Old Hindi Hits Mukesh Karaoke Song - Anari - Raj Kapoor - Nutan ( 128kbps ).mp3'),
(61, 'Mera Joota Hai Japan', 'songs/img/maxresdefault (2).jpg', 'Mera Joota Hai Japani _ Raj Kapoor _ Nargis _ Shree 420 _ Evergreen Bollywood Hits {HD} _ Mukesh ( 128kbps )\r\n\r\n-----------------------------------------------------------------------------------------------------\r\nMovie: Shree 420 (1955)\r\nSong: Mera Joota Hai Japani\r\nStarcast: Raj Kapoor, Nargis, Nadira\r\nSinger: Mukesh\r\nMusic Director: Shankar Jaikishan\r\nLyricist: Shailendra\r\n\r\n', 'songs/music/Mera Joota Hai Japani _ Raj Kapoor _ Nargis _ Shree 420 _ Evergreen Bollywood Hits {HD} _ Mukesh ( 128kbps ).mp3'),
(62, 'Slow English Song', 'songs/img/pexels-pixabay-164697 (1).jpg', 'Slow English Song with Lyrics ( 128kbps )\r\n\r\n-------------------------------------------------------------------------------------------------\r\nHollywood romantic\r\nsinger : unknown\r\nArtist : unknown\r\nDirector : unknown\r\nRelease date : unknown\r\n', 'songs/music/Slow English Song with Lyrics ( 128kbps ).m4a'),
(63, 'Teri Mitti ', 'songs/img/teri-mitti-lyrical-kesari-hd-vid.jpg', 'Teri Mitti - Lyrical _ Kesari _ Akshay Kumar & Parineeti Chopra _ Arko _ B Praak_ Manoj Muntashir ( 128kbps )\r\n------------------------------------------------------------------------------------------------------\r\n\r\nSong â€“ Teri Mitti\r\nSingers â€“ B Praak \r\nMusic â€“ Arko\r\nLyrics: Manoj Muntashir\r\nProgrammed & Arranged by Aditya Dev\r\nString Section performed live by Prakash Verma & Team\r\nStrings conducted by Aditya Dev\r\nStrings Recorded by Pankaj Kaushik at Taaleem Studios\r\nMix & Master: Eric Pillai (Future Sound of Bombay)\r\nMix Assistant: Micheal\r\nMusic Supervisor - Azeem Dayani\r\n\r\nStarring Akshay Kumar & Parineeti Chopra \r\nDirected by Anurag Singh \r\nProduced by Hiroo Yash Johar, Aruna Bhatia, Karan Johar, Apoorva Mehta, Sunir Kheterpal \r\nCo-Produced by Amar Butala \r\nWritten by Girish Kohli & Anurag Singh\r\n\r\nMusic on Zee Music Company', 'songs/music/Teri Mitti - Lyrical _ Kesari _ Akshay Kumar & Parineeti Chopra _ Arko _ B Praak_ Manoj Muntashir ( 128kbps ).mp3'),
(64, 'Woren Webbe - ', 'songs/img/artworks-000500578476-ki7eem-t500x500.jpg', 'Woren Webbe - _Gave You My World_ _ beautiful love song ever _ love songs 2021 ( 128kbps )\r\n-------------------------------------------------------------------------------------------------------\r\nStream Woren Webbe - \"I gave You My World\" (lyrics) \r\nLove Song 2020 Lyrics | Best English Happy Love Song 2020\r\nLove Songs 2020|  LOVE MUSIC PLAYLIST with Lyrics | New Song 2020 English LATEST ENGLISH SONGS ...\r\nBest English Love Songs 2020\r\nBest Romantic Love Songs Ever HD', 'songs/music/Woren Webbe - _Gave You My World_ _ beautiful love song ever _ love songs 2021 ( 128kbps ).m4a'),
(65, 'I Promise You', 'songs/img/d71f1689d3269e9680a59d7c5106d0cf.jpg', 'Woren Webbe - I Promise You _ Best English chill Love song _ best beautiful love songs ( 256kbps cbr )\r\n-----------------------------------------------------------------------------------------------------------\r\nTop Depressing Songs That Will Make You Cry | Most Popular Sad Songs of 2020 Playlist | Saddest Love Songs for Lonely People | Crying Alone While Listening to This Sad Playlist 2020\r\n\r\n#worenwebbe #Ipromiseyou #lyricvideo\r\n\r\nSad Love Songs, Sad Love Songs With Lyric, Sad Songs, Sad Songs With Lyric, Best Sad Songs, Sad Songs Collection, Broken Heart Love Songs, New Sad Love Songs, Love Songs Story, Love Songs Status, Old Sad Love Songs, Sad Songs Collection, Broken Heart, May Make You Cry, Broken Heart Collection Of Love Songs, Sad Songs Ever, Sad Love Quotes, Sad Songs Playlist, Greatest Sad Songs, Top Sad Songs, Sad Songs 2019, List Sad Songs, Sad English Songs, I Miss You Songs, Top I Miss You Songs, I Miss You', 'songs/music/Woren Webbe - I Promise You _ Best English chill Love song _ best beautiful love songs ( 256kbps cbr ).mp3'),
(66, 'Give me some sunshin', 'songs/img/3_idiots_2009_aamir_khan_madhavan_sharman_joshi_98139_1920x1200.jpg', 'ã€Šä¸‰å€‹å‚»ç“œã€‹3 idiots - Give me some sunshine ( 128kbps )\r\n--------------------------------------------------------------------------------------------------------------\r\nSong: Give Me Some Sunshine\r\nSingers: Suraj Jagan & Sharman Joshi\r\nLyricist: Swanand Kirkire\r\nMusic Composer: Shantanu Moitra\r\n\r\nStarring: Aamir Khan, R. Madhavan, Sharman Joshi, Kareena Kapoor &\r\nBoman Irani\r\nDirected by Rajkumar Hirani\r\nProduced by Vidhu Vinod Chopra\r\n\r\n*******************************************************************************************\r\n\r\nSong\r\nGive Me Some Sunshine\r\nArtist\r\nShantanu Moitra\r\nAlbum\r\n3 Idiots\r\nLicensed to YouTube by\r\nZeemusiccompany (on behalf of Zee Music Company), and 3 Music Rights Societies', 'songs/music/ã€Šä¸‰å€‹å‚»ç“œã€‹3 idiots - Give me some sunshine ( 128kbps ).mp3'),
(67, 'CLOSE YOUR EYES ', 'songs/img/pexels-pixabay-534271.jpg', 'CLOSE YOUR EYES AND LISTEN THIS ! Motivational poem by Amitabh Bachchan _timc motivation_ ( 128kbps )\r\n-----------------------------------------------------------------------------------------------------\r\nsinger: unknown\r\nartist : unknown\r\ndirector : unknown \r\nrelease date : unknown\r\nactor- acress : unknown', 'songs/music/CLOSE YOUR EYES AND LISTEN THIS ! Motivational poem by Amitabh Bachchan _timc motivation_ ( 128kbps ).mp3'),
(68, 'Chak Lein De', 'songs/img/pexels-niko-twisty-4048182.jpg', 'Chak Lein De_ _ Chandni Chowk To China _ Akshay Kumar, Deepika Padukone _ Kailash Kher ( 128kbps )\r\n------------------------------------------------------------------------------------------------------\r\nPresenting the full video song \"Chak Lein De\" from the bollywood movie \"Chandni Chowk To China\".\r\n\r\nSong - Chak Lein De \r\nFilm - Chandni Chowk To China\r\nSinger - Kailash Kher\r\nLyricist - Kailash Kher\r\nMusic Director - Kailash Kher, Naresh, Paresh\r\nArtist - Akshay Kumar, Deepika Padukone\r\nMusic On - T-Series', 'songs/music/Full Video_ _Chak Lein De_ _ Chandni Chowk To China _ Akshay Kumar, Deepika Padukone _ Kailash Kher ( 128kbps ).mp3'),
(69, 'Saah ', 'songs/img/d8427d58ecefeb5fdd26f7ae67dcbd33.jpg', 'Saah ( 256kbps cbr )\r\n-----------------------------------------------------------------------------------------------------\r\nSong : Saah (Full Video)\r\nSinger : Bir Singh\r\nLyrics : Bir Singh\r\nMusic : Jatinder Shah\r\nMix & Mastered by Sameer Charegaonkar\r\n\r\nA Film Written & Directed by Amberdeep Singh Releasing on 12th May 2017\r\n\r\nStarring :\r\nAmrinder Gill, Sargun Mehta, Yuvraj Hans, Nimrat Khaira, Guggu Gill, Sardar Sohi, Nirmal Rishi, Hobby Dhaliwal, Rajiv Thakur', 'songs/music/Saah ( 256kbps cbr ).mp3'),
(70, 'Sia-Never give up', 'songs/img/artworks-000196907259-klc2jg-t500x500.jpg', 'Sia- Never give up (music video) ( 128kbps )\r\n------------------------------------------------------------------------------------------------------------\r\nSia lyric video for Never Give Up from the movie LION, produced by Greg Kurstin. Download & stream the song now\r\n\r\nA Chisel Pixel Production \r\nwww.chiselpixel.com\r\nDirected by Lior Molcho\r\n\r\nProducer - Chen Biton\r\nCinematographer - Danit Sigler\r\n**********************************************************************************************\r\nSong\r\nNever Give Up\r\nArtist\r\nSia\r\nLicensed to YouTube by\r\nSME (on behalf of Sony Classical); LatinAutor - Warner Chappell, LatinAutor - SonyATV, ASCAP, SOLAR Music Rights Management, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, LatinAutorPerf, CMRRA, LatinAutor, Sony ATV Publishing, and 10 Music Rights Societies', 'songs/music/Sia- Never give up (music video) ( 128kbps ).mp3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_full_name` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_gender` varchar(15) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_full_name`, `user_email`, `user_gender`, `user_password`, `user_role`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', 'Male', 'admin', 1),
(33, 'sumit_singh', 'Sumit Singh', 'sumitsingh@gmail.com', 'Male', 'sumit', 2),
(38, 'singh', 'Singh Rajput', 'rajput@gmail.com', 'Male', 'singh', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
