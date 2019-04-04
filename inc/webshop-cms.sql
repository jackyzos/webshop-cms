-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2019 at 11:38 PM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jangg_webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `CategoryDesc` varchar(500) NOT NULL,
  `CategoryIMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `CategoryDesc`, `CategoryIMG`) VALUES
(1, 'Mobiles', 'samsung iphone surfplattor ipad devices', 'mobile.jpg'),
(2, 'Computers', 'computers intel HP apple', 'computer.jpg'),
(3, 'Photo And video', 'photo kameror sony telescope', ''),
(4, 'Kitchen', 'damsugare kök micro bryggkaffe tvättmaskin diskmaskin', ''),
(5, 'Gaming', 'playstation xbox wii fifa pes', ''),
(6, 'Garden', 'grässax Trädgårdsredskap', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
(1, 'asdasd', '', '0', '', 'asdasfasfasf a sfasf asa  af asfas '),
(2, 'asdasd', 'fsdfsdf@asdas.se', '73', 'dator', 'sdfsdgs sdg sd gsdg sd sdg sdgsdgsdgsdgsd '),
(3, 'hello', 'deda@hsdf.se', '073-2562581', 'dator', 'gdsgsgsdgsdgs dsgd sdg sdg sd sdgfsdgsdg'),
(4, 'hello', 'deda@hsdf.se', '073-2562581', 'dator', 'gdsgsgsdgsdgs dsgd sdg sdg sd sdgfsdgsdg'),
(5, 'hello', 'deda@hsdf.se', '073-2562581', 'dator', 'gdsgsgsdgsdgs dsgd sdg sdg sd sdgfsdgsdg'),
(6, 'asdasd', 'adasd@gmail.com', '073-2562581', 'dator', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget diam euismod felis consequat commodo. Phasellus sit amet magna quis nulla lobortis facilisis. Donec luctus eget lacus eget laoreet. Donec sollicitudin auctor ultricies. Sed pellentesque in velit id facilisis. Suspendisse potenti. Mauris ut ligula lacus. Cras eu dui et purus vehicula feugiat.\r\n'),
(7, 'Olson', 'Olson@demo.se', '073-2562581', 'dator', 'här det här en test meddelande om dator'),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, 'HIImdgDF', 'wgtzfl@jdrqem.com', 'UqkdxMatO', 'zUfLWWDpklUVopWDHQf', 'bWjCJb  <a href=\"http://dbcosdhpsnht.com/\">dbcosdhpsnht</a>, [url=http://mpeqycpsojrd.com/]mpeqycpsojrd[/url], [link=http://lvijztxsyegs.com/]lvijztxsyegs[/link], http://gmxuicpdemkj.com/'),
(17, '', '', '', '', ''),
(18, 'Agignsweewew', 'raihooveiy@bestmailonline.com', 'Natural Remedies For ED - How To Treat Impotence', 'Natural Remedies For ED - How To Treat Impotence', ' Others can perform a hardon but cannot maintain it during sexual intercourse.  Once you discover the top natural options, it is possible to once more have full charge of your sexual pleasures. \r\nhttps://www.cialissansordonnancefr24.com/achat-cialis-generique-en-pharmacie/ '),
(19, 'Efren Warby', 'warby.efren@gmail.com', '-6589579', 'Casino Domain For-Sale', 'Hi,\r\n\r\n I am seling off part of my igaming domain portfolio, if you  wish\r\nto  purchase  any  of the below domains please email me  at:\r\n\r\nadmin@onlinecasino.email\r\n\r\n\r\nONLINE CASINO\r\n\r\n\r\n\r\nonlinecasino.xn--6frz82g\r\nonlinecasino.tax\r\nonlinecasino.love\r\nonlinecasino.loans\r\nonlinecasino.gifts\r\nonlinecasino.fund\r\nonlinecasino.fail\r\nonlinecasino.email\r\nonlinecasino.domains\r\nonlinecasino.credit\r\nonlinecasino.coupons\r\nonlinecasino.careers\r\nonlinecasino.cards\r\n\r\n\r\n\r\nSLOTS\r\n\r\n\r\n\r\nslots.fail\r\nslot.fail\r\nslot.directory\r\nslot-machine.win\r\nslotmachine.help\r\nslot.fail\r\nslot.directory\r\nplayslots.win\r\nplayslots.website\r\nplayslots.fun\r\n\r\n\r\n\r\nMISC\r\n\r\n\r\n\r\nspilleautomater.win\r\nroulette.cool\r\nkumarhane.win\r\ncoupon.casino\r\n\r\n\r\n\r\nBRAND\r\n\r\n\r\n\r\nbetsson.site\r\nbetsafe.website\r\nsverigeautomaten.win\r\nsverigeautomaten.website\r\nsverigeautomaten.site\r\nsveacasino.win\r\nsveacasino.pro\r\nsveacasino.info\r\nsuomicasino.win\r\nsuomicasino.club\r\nsuomiarvat.win\r\nsuomiarvat.website\r\nsuomiarvat.site\r\nsuomiarvat.review\r\nstarcasino.website\r\nstarcasino.site\r\nracebets.win\r\nracebets.website\r\nracebets.site\r\noranjecasino.website\r\noranjecasino.site\r\nnorgesautomaten.website\r\nnorgesautomaten.site\r\nnordicbet.website\r\nnordicbet.site\r\nmrsmithcasino.win\r\nlucky8.site\r\nlucky8.life\r\nracebets.review\r\nkrooncasino.website\r\nkrooncasino.site\r\n\r\n\r\n\r\nCASINO + COUNTRY\r\n\r\n\r\n\r\ncasinosweden.win\r\ncasinospain.win\r\ncasinoslovenia.win\r\ncasinoslovakia.win\r\ncasinoromania.win\r\ncasinoportugal.win\r\ncasinopoland.win\r\ncasinonetherlands.win\r\ncasinomalta.win\r\ncasinoluxembourg.win\r\ncasinolithuania.win\r\ncasinolatvia.win\r\ncasinoitaly.win\r\ncasinoireland.win\r\ncasinohungary.win\r\ncasinogreece.win\r\ncasinogermany.win\r\ncasinofrance.win\r\ncasinofinland.win\r\ncasinoeuro.website\r\ncasinoeuro.site\r\ncasinoestonia.win\r\ncasinodenmark.win\r\ncasinoczech.win\r\ncasinocyprus.win\r\ncasinocroatia.win\r\ncasinobulgaria.win\r\ncasinobelgium.win\r\ncasinoaustria.win\r\nczechslots.com\r\nczechcasino.win\r\n\r\n\r\n\r\nI am willing to   sell  individually  or  as  the   complete\r\nportfolio. All sales will be  processed  through  escrow  to\r\navoid any confusion so just email me an ofer for  one or all\r\ndomains to:\r\n\r\nadmin@onlinecasino.email\r\n\r\nThanks!\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nhttp://www.onlinecasino.email'),
(20, '0MNiCOL0UR', 'admin1970@org.eastworldwest.com', 'Test, just a test', 'Test, just a test', 'Hello. And Bye.'),
(21, 'Archivex13', 'sla.w.o.m.ir.a8.9.hw.ojd.ak@gmail.com', 'I am the new girl', 'I am the new girl', '<a href=https://www.archive-cr.com/es/maxylite-opiniones-precio-como-funciona-los-clientes-la-experiencia-la-composicion-dosificacion-efectos-secundarios-donde-comprar/>maxylite precio</a> \r\n \r\n \r\nYou actually revealed that terrifically!'),
(22, 'Archiven92', 'sl.awomir.a.8.9.hw.oj.d.ak@gmail.com', 'I am the new one', 'I am the new one', '<a href=https://archive-py.com/pt-pt/hammer-of-thor-viajante-o-preco-como-funciona-o-viajante-a-experiencia-a-composicao-posologia-efeitos-colaterais-onde-comprar/>hammer of thor comentĂˇrios</a> \r\n \r\n \r\nMany thanks! Plenty of tips! \r\n'),
(23, 'Pipelvicemact', 'louis.krazzer@ogarnij.se', 'Translation Into Russian', 'Translation Into Russian', 'The most profitable blogs at this time are positively those who have an individual private twist.  <a href=http://www.bedandbreakfastdivitt.it>bedandbreakfastdivitt.it</a>'),
(24, 'Sweedenheems', 'oksanabrazhnikova2330@gmail.com', 'Logga in på SlotV och få bonusar på upp till 1000 EUR', 'Logga in på SlotV och få bonusar på upp till 1000 EUR', 'Logga in på SlotV och få bonusar på upp till 1000 EUR + 175 GS för registrering \r\n \r\n100% BONUS VID DIN FÖRSTA INSÄTTNING \r\n \r\nGÅVOR EFTER REGISTRERING \r\nhttp://sw.playattack.win/'),
(25, 'Sverigeheems', 'oksanabrazhnikova2330@gmail.com', 'Dejting, kärlek, flörta', 'Dejting, kärlek, flörta', 'Dejting, kärlek, flörta, möte, bröllop, familj, semester i Sverige \r\n \r\nhttp://dejting.cpagrip.me/'),
(26, 'bonusheems', 'o.k.sa.na.brazhnikova2330@gmail.com', 'bonusar på upp till 1000 EUR', 'bonusar på upp till 1000 EUR', 'Logga in på SlotV och få bonusar på upp till 1000 EUR + 175 GS för registrering \r\n \r\n100% BONUS VID DIN FÖRSTA INSÄTTNING \r\n \r\nGÅVOR EFTER REGISTRERING \r\nhttp://slotv.cpagrip.me'),
(27, 'gayheems', 'o.k.sa.na.br.azhniko.va2330@gmail.com', 'Det här är vad du verkligen behöver!', 'Det här är vad du verkligen behöver!', 'Gay dating \r\n \r\n http://gdate.cpagrip.me  \r\nHeta pojkar i din stad letar efter dig! \r\nBara prova det'),
(28, 'vinnaheems', 'o.k.sa.na.brazhnik.ova2330@gmail.com', 'Gillar du att vinna?', 'Gillar du att vinna?', 'Idag är perfekt dag för att vinna pengarna! \r\nhttp://slotv.cpagrip.me'),
(29, 'partnerheems', 'oksanabrazhnikova2330@gmail.com', 'Har du hittat en sexpartner?', 'Har du hittat en sexpartner?', 'So what are you wating for? \r\n \r\nhttp://dejting.cpagrip.me/'),
(30, 'Vuxnaheems', 'o.k..sa..nabrazhnikova2330@gmail.com', 'Vuxna webbkameror', 'Vuxna webbkameror', 'Chatta med live cams tjejer, Live sex \r\n \r\nhttp://se.drochat.online/'),
(31, 'Habab', 'graff102@gmail.com', 'There is offering', 'There is offering', 'Hello! Here is  an interesting offering for you. http://bit.ly/2JVi89Z'),
(32, 'amorheems', 'oksanabrazhnikova233..0@gmail.com', 'Minns du din vackra klasskamrat?', 'Minns du din vackra klasskamrat?', 'Hon är nu på en sex dating site. \r\n \r\nhttp://dejting.cpagrip.me/'),
(33, 'gayheems', 'o.k.sa.na.br.azhniko.va2330@gmail.com', 'Det här är vad du verkligen behöver!', 'Det här är vad du verkligen behöver!', 'Gay dating \r\n \r\n http://gdate.cpagrip.me  \r\nHeta pojkar i din stad letar efter dig! \r\nBara prova det'),
(34, 'bonusheems', 'o.k.sa.na.bra..zhnik.ova2330@gmail.com', 'Tråkig?', 'Tråkig?', 'Få bonus i casino! \r\n \r\nhttps://vk.cc/8ATt7O'),
(35, 'Gregorymar', 'gavaidullin.woso@mail.ru', 'Good day!', 'Good day!', 'Good day! \r\nHere is  \r\nan interesting \r\noffers for you. \r\n \r\nhttp://bit.ly/2RXevVm'),
(36, 'Numberspaf', 'gasanovevgeniy@mail.ru', 'Ciao!', 'Ciao!', 'Hi! \r\nPlease note \r\nan important \r\noffering for you. \r\n \r\nhttp://topratinglist.com'),
(37, 'Davidtit', 'expedisiya@mail.ru', 'Hi!', 'Hi!', 'Hi! There is an interesting offering for you. \r\n \r\nhttp://bit.ly/2EKmKle'),
(38, 'ArturoAlaMi', 'viliya-1984@mail.ru', 'Good day!', 'Good day!', 'Good day! \r\nPlease note \r\nan amazing \r\noffer for you. \r\n \r\n \r\nhttp://bit.ly/2EVNFKO'),
(39, 'thien', 'playmyacousticguitar@cfl.rr.com', 'Here is  offers', 'Here is  offers', 'Good man! There is an important present - Join us now, and we will double or even triple your first deposit.  Just click on the link below to qualify. http://bit.ly/2JbAuUw'),
(40, 'Brandonendax', 'iriscallp@hotmail.com', 'Ciao!', 'Ciao!', 'Good man! That is an amazing offering for you. \r\n \r\nhttp://bit.ly/2qmEV6p'),
(41, 'Uromycladium', 'victormirasol1492@hotmail.es', 'Here is  an interestingpremium pay for winning.', 'Here is  an interestingpremium pay for winning.', 'Good day! That is an interesting bonus offering for you.  Are you in?  http://bit.ly/2Ja3LiL'),
(42, 'Michaelinape', 'sofia.gezelius@bris.se', 'Here is  an amazingoffering for you.', 'Here is  an amazingoffering for you.', ' Hi What we have here is , an amazingoffer \r\n Just click on the link below to qualify  \r\n \r\n \r\nhttp://bit.ly/2qwNEmx'),
(43, 'amorheems', 'oksanabrazhniko.va233..0@gmail.com', 'Minns du din vackra klasskamrat?', 'Minns du din vackra klasskamrat?', 'Hon är nu på en sex dating site \r\n \r\nhttp://dejting.cpagrip.me/'),
(44, 'chikaSkert', 'oksa.na.bra..zh.nik.o.va23.3.0@gmail.com', '¿Necesitas amor gratis?', '¿Necesitas amor gratis?', 'chicas sexy de tu ciudad están aquí \r\nhttp://czdate.cf/'),
(45, 'Edwincam', 'contact@denios.ca', 'That is an amazingoffering for you.', 'That is an amazingoffering for you.', ' Hi What we have here is , niceoffering \r\n Just click \r\n \r\nhttps://drive.google.com/file/d/19WKcLiqwbudFFz9C23roK6_z8D1DWh82/preview'),
(46, 'gayheems', 'o.k.sa.na.br.azhniko.va2330@gmail.com', 'Det här är vad du verkligen behöver!', 'Det här är vad du verkligen behöver!', 'Gay dating \r\n \r\n http://gdate.cpagrip.me  \r\nHeta pojkar i din stad letar efter dig! \r\nBara prova det'),
(47, 'chikaSkert', 'oksa.na.bra..zh.nik.o.va23.3.0@gmail.com', '¿Necesitas amor gratis?', '¿Necesitas amor gratis?', 'chicas sexy de tu ciudad están aquí \r\nhttp://czdate.cf/'),
(48, 'CharlesGah', 'magnus@strandab.se', 'Behold is  a fineoffer for you.', 'Behold is  a fineoffer for you.', ' Hey Good news ! an interestingoffer \r\n Just click on the link below to qualify  \r\n \r\nhttps://drive.google.com/file/d/1FbSRwg819_h8T5yQHk-OwHzWgaNWUCli/preview'),
(49, 'TylerTic', 'albino-gorilla-snowflake-1_345x345@2x.jpg', 'Here is  an interestingoffers for you.', 'Here is  an interestingoffers for you.', ' Hi Good news ! a goodoffers \r\n To qualify click on the link below  \r\n \r\nhttps://drive.google.com/file/d/1sGtc9gyRfbhESTIgEkWbLGJcOqYxI1D0/preview'),
(50, 'chalton', 'usaginomimi@lenta.ru', 'Behold is  nicepromotion for win.', 'Behold is  nicepromotion for win.', 'Hi! Behold is  nice present offer for you.  Are you in?  http://bit.ly/2ymXjR6'),
(51, 'gayheems', 'o.k.sa.na.br.azhniko.va2330@gmail.com', 'Det här är vad du verkligen behöver!', 'Det här är vad du verkligen behöver!', 'Gay dating \r\n \r\n http://gdate.cpagrip.me  \r\nHeta pojkar i din stad letar efter dig! \r\nBara prova det'),
(52, 'amoreheems', 'oksana.brazhniko.va233..0@gmail.com', 'Minns du din vackra klasskamrat?', 'Minns du din vackra klasskamrat?', 'Hon är nu på en sex dating site \r\n \r\nhttp://dejting.cpagrip.me/'),
(53, 'spelareheems', 'o.k.sa.na.brazh.nik.ova2330@gmail.com', 'behöver extra pengar?', 'behöver extra pengar?', '200 000 euro kasinokonkurrens för nya spelare \r\nhttp://slotv.cpagrip.me'),
(54, 'Jamesmip', 'fredrik.wadsten@bluewall.se', 'Behold is  an amazingoffer for you.', 'Behold is  an amazingoffer for you.', '  Look what we have for you! niceoffer \r\n To qualify click on the link below  \r\n \r\nhttp://bit.ly/2we6JzI'),
(55, 'Andrewpic', 'alexander@above.se', 'Please note an importantoffering for you.', 'Please note an importantoffering for you.', '  Look what we have for you! an importantoffering \r\n Are you in?  \r\n \r\nhttp://bit.ly/2jpzPmu'),
(56, 'Parthian', 'winer123@mail.ru', 'That is a fineoffers for your team.', 'That is a fineoffers for your team.', 'Good man! That is an amazing - the excellent collection of world’s top slots, roulette and blackjack games  To qualify click on the link below. http://bit.ly/2J9MqX5'),
(57, 'Carlosanync', 'kundtjanst@skelleftea.se', 'There is an interestingoffering for you.', 'There is an interestingoffering for you.', ' Hey What we have here is , a fineoffers \r\n Just click \r\n \r\nhttp://bit.ly/2PtsOyB'),
(58, 'Alfredincem', 'carina.ljungberg@tmgtabergs.se', 'There is a goodoffer for you.', 'There is a goodoffer for you.', ' Hi Good news ! a goodoffer \r\n Just click on the link below to qualify  \r\n \r\nhttp://bit.ly/2UvVUBc'),
(59, 'DanielWheek', 'yourmail@gmail.com', 'Test, just a test', 'Test, just a test', 'Hello. And Bye.'),
(60, 'Russelltix', 'dirmpt.barsuraube@gmail.com', 'Please note a fineoffers for you.', 'Please note a fineoffers for you.', '  a goodoffers \r\n Just click \r\n \r\nhttp://bit.ly/2rLHpMp'),
(61, 'RobertMiday', 'worldofwayne66@gmail.com', 'That is niceoffer for you.', 'That is niceoffer for you.', ' Hi Look what we have for you! niceoffering \r\n To qualify click on the link below  \r\n \r\nhttp://bit.ly/2QNtiFf'),
(62, 'Alden', '1965petr@seznam.cz', 'Behold is  nicepresent for victory.', 'Behold is  nicepresent for victory.', 'Good day! Look at an important present - Awesome welcome offer of up to $/€ 1600 free.  Are you in?  http://bit.ly/2J7nqQc'),
(63, 'Donaldusams', 'svista6@hotmail.com', 'Hot and juicy women in your city want sex', 'Hot and juicy women in your city want sex', 'Fuck tonight juicy woman in your town: http://www.lookweb.it/BESTSEXYGYRL99317'),
(64, 'Denniscoibe', 'gyblos@gmail.com', 'Look at niceoffers for you.', 'Look at niceoffers for you.', ' Hy there,  What we have here is , a goodoffering \r\n Just click \r\n \r\nhttp://bit.ly/2EUU5bu'),
(65, 'Donaldusams', 'wjmeyer@msn.com', 'Find a hot woman for good sex in your town', 'Find a hot woman for good sex in your town', 'Fuck tonight juicy woman in your town: http://go.fireontherim.com/17907'),
(66, 'RobertRow', 'elenaivanets@gmail.com', 'That is a goodoffers for you.', 'That is a goodoffers for you.', '  an importantoffers \r\n To qualify click on the link below  \r\n \r\nhttps://drive.google.com/file/d/1mXZJjmXtkSaunZ6vVGPb7z1PKdMF7GyY/preview'),
(67, 'Donaldusams', 'nabila97@hotmail.com', 'Hot women for good sex every day', 'Hot women for good sex every day', 'Fuck tonight juicy woman in your town: https://tinyurl.com/BESTSEXYGYRL85057'),
(68, 'Donaldusams', 'berndt88@hotmail.com', 'How to Make $3000 FAST | Fast Money | The Busy Budgeter', 'How to Make $3000 FAST | Fast Money | The Busy Budgeter', 'Paid Surveys: Earn $3,000 Or More Per Week: http://www.abcagency.se/bestinvestsystem93394'),
(69, 'Donaldusams', 'swadhwa@hotmail.com', 'How to make $3000 a day', 'How to make $3000 a day', 'Paid Surveys: Earn $3,000 Or More Per Week: http://www.lookweb.it/bestinvestsystem84466'),
(70, 'Donaldusams', 'angel8822@hotmail.com', 'Baise ce soir femme juteuse dans ta ville', 'Baise ce soir femme juteuse dans ta ville', 'Les femmes chaudes et juteuses de votre ville veulent du sexe: http://go.fireontherim.com/bestsexygirlsinyourcity29976'),
(71, 'Donaldusams', 'bstan2@hotmail.com', 'Femmes chaudes pour bon sexe tous les jours', 'Femmes chaudes pour bon sexe tous les jours', 'Femmes chaudes pour bon sexe tous les jours: http://999.sh/bestsexywomaninyourcity13547'),
(72, 'Donaldusams', 'brulock@hotmail.com', 'Femmes chaudes pour bon sexe tous les jours', 'Femmes chaudes pour bon sexe tous les jours', 'Trouvez une femme chaude pour du bon sexe dans votre ville: https://xxs.yt/bestsexygirlsinyourcity10834'),
(73, 'GordonFaf', 'rosarionotaro@gmail.com', 'Regard is  a all exactoblation alongside practicality of you.', 'Regard is  a all exactoblation alongside practicality of you.', ' Hey Look what we divert conducive to you! nicespur \r\n Incorruptible click \r\n \r\n \r\nhttps://drive.google.com/file/d/1x_8vOsZeDMEZ4YTks2eMMv0D_OM0hB6T/preview'),
(74, 'Donaldusams', 'mitch_82@msn.com', 'Les femmes chaudes et juteuses de votre ville veulent du sexe', 'Les femmes chaudes et juteuses de votre ville veulent du sexe', 'Baise ce soir femme juteuse dans ta ville: http://jnl.io/bestsexygirlsinyourcity12708'),
(75, 'Donaldusams', 'srbates@hotmail.com', 'Femmes Chaudes Pour Le Sexe Dans Votre Ville', 'Femmes Chaudes Pour Le Sexe Dans Votre Ville', 'Femmes Chaudes Pour Le Sexe Dans Votre Ville: http://go.fireontherim.com/bestsexygirlsinyourcity94209'),
(76, 'Donaldusams', 'yonishi@hotmail.com', 'Baise ce soir femme juteuse dans ta ville', 'Baise ce soir femme juteuse dans ta ville', 'Trouvez une femme chaude pour du bon sexe dans votre ville: http://www.short4free.us/bestsexygirlsinyourcity83030'),
(77, 'Donaldusams', 'isb4@msn.com', 'Fuck tonight juicy woman in your town', 'Fuck tonight juicy woman in your town', 'Hot women for good sex every day: http://yourls.site/bestadultdating13033'),
(78, 'Donaldusams', 'judypingleton@hotmail.com', 'Hot and juicy women in your city want sex', 'Hot and juicy women in your city want sex', 'Find a hot woman for good sex in your town: http://www.vkvi.net/bestadultdating31720'),
(79, 'Kennethrog', 'dogsmopolitanuk@gmail.com', 'That is a okoffering pro you.', 'That is a okoffering pro you.', ' Hi Actual hearsay ! an superioroffers \r\n Upstanding click \r\n \r\n \r\nhttps://drive.google.com/file/d/1S1gGsIZdr80TTHrP3jb3ozw6iSQokOxC/preview'),
(80, 'Donaldusams', 'sagarjain@hotmail.com', 'Hot women for good sex every day', 'Hot women for good sex every day', 'Fuck tonight juicy woman in your town: http://www.lookweb.it/bestadultdating38965'),
(81, 'Donaldusams', 't_buckland@hotmail.com', 'Fick heute Nacht saftige Frau in deiner Stadt', 'Fick heute Nacht saftige Frau in deiner Stadt', 'Fick heute Nacht saftige Frau in deiner Stadt: http://tropaadet.dk/hotsexywoman63279'),
(82, 'Donaldusams', 'zinotchka@hotmail.com', 'Finde eine heiГџe Frau fГјr guten Sex in deiner Stadt', 'Finde eine heiГџe Frau fГјr guten Sex in deiner Stadt', 'HeiГџe Frauen fГјr guten Sex jeden Tag: http://go.fireontherim.com/sexywomaninyourcity44941'),
(83, 'Donaldusams', 'tamu25@hotmail.com', 'HeiГџe Frauen fГјr guten Sex jeden Tag', 'HeiГџe Frauen fГјr guten Sex jeden Tag', 'HeiГџe Frauen fГјr guten Sex jeden Tag: http://corta.co/bestadultsites30996'),
(84, 'Donaldusams', 'emily343@hotmail.com', 'HeiГџe Frauen fГјr guten Sex jeden Tag', 'HeiГџe Frauen fГјr guten Sex jeden Tag', 'HeiГџe und saftige Frauen in Ihrer Stadt wollen Sex: http://www.short4free.us/sexywomaninyourcity11682'),
(85, 'LarryAlaps', 'hectorscharity@gmail.com', 'Strive for is  acuteoffers alongside babysit of you.', 'Strive for is  acuteoffers alongside babysit of you.', ' Hi scrupuloussignify up in the use of trafficking \r\n Judicial click \r\n \r\n \r\nhttps://drive.google.com/file/d/1QmMvt71FAnuc1jNWMtk618E1I_MXamyJ/preview'),
(86, 'Justinevons', 'andrescp@hotmail.com', 'Where to invest $ 3000 once and receive every month from $ 55000', 'Where to invest $ 3000 once and receive every month from $ 55000', 'Where to invest $ 3000 once and receive every month from $ 55000: http://valeriemace.co.uk/howtoinvest300082104'),
(87, 'DavidClise', 'rosemary150@hotmail.com', 'Invest $ 1000 and get $ 15000 every month', 'Invest $ 1000 and get $ 15000 every month', 'How to make $10,000 Per day FAST: http://go.fireontherim.com/bestinvestsystems91927'),
(88, 'DavidClise', 'brunoleuenberger@hotmail.com', 'Hot women for good sex every day', 'Hot women for good sex every day', 'Find a hot woman for good sex in your town: http://perkele.ovh/bestsexygirlsinyourcity58219'),
(89, 'DavidClise', 'dneubauer@hotmail.com', 'Find a hot woman for good sex in your town', 'Find a hot woman for good sex in your town', 'Find a hot woman for good sex in your town: http://999.sh/bestsexygirlsinyourcity47709'),
(90, 'DavidClise', 'montesinos_m@msn.com', 'Fuck tonight juicy woman in your town', 'Fuck tonight juicy woman in your town', 'Find a hot woman for good sex in your town: https://lil.ink/bestsexygirlsinyourcity34895'),
(91, 'GordonHoiff', 'ewarts45@gmail.com', 'AMATЕUR HОT CHICKS& CHЕCK LINK IN BIО', 'AMATЕUR HОT CHICKS& CHЕCK LINK IN BIО', 'QUICKLY FIND SОMЕОNЕ TОDAY FОR AN ЕRОTIC ЕNCОUNTЕR. CHЕCK LINK IN BIО  http://bit.ly/2STI8Y1'),
(92, 'DavidClise', 'annalpatrick@hotmail.com', 'Comment transformer 3 000 в‚¬ en 128 000 в‚¬', 'Comment transformer 3 000 в‚¬ en 128 000 в‚¬', 'EnquГЄtes rГ©munГ©rГ©es: gagnez 3 000 в‚¬ ou plus par semaine: http://www.xn--277c.com/bestinvestsystem64467'),
(93, 'DavidClise', 'tetrisfreak@msn.com', 'EnquГЄtes rГ©munГ©rГ©es: gagnez 3 000 в‚¬ ou plus par semaine', 'EnquГЄtes rГ©munГ©rГ©es: gagnez 3 000 в‚¬ ou plus par semaine', 'Comment gagner 3000 в‚¬ Fast Fast Money | Le budget occupГ©: http://tropaadet.dk/bestinvestsystem93284'),
(94, 'amoresheems', 'oksana.braz.hniko.va233..0@gmail.com', 'Minns du din vackra klasskamrat?', 'Minns du din vackra klasskamrat?', 'Hon är nu på en sex dating site \r\n \r\nhttp://dejting.cpagrip.me/'),
(95, 'Edmundgloge', 'missdaniellegooch@gmail.com', ' Hey What we experience here is , a commendableoffers', ' Hey What we experience here is , a commendableoffers', ' Hy there,  Good word ! an extraordinarytender \r\n Straight click on the link under to qualify    http://bit.ly/2SSo8F6'),
(96, 'DavidClise', 'hotbishop@hotmail.com', 'Comment gagner 10 000 в‚¬ par jour FAST', 'Comment gagner 10 000 в‚¬ par jour FAST', 'Comment transformer 3 000 в‚¬ en 128 000 в‚¬: https://aaa.moda/bestinvestsystem16328'),
(97, 'DavidClise', 'skylook9@msn.com', 'Was ist der einfachste Weg, um в‚¬ 3000 pro Monat zu verdienen?', 'Was ist der einfachste Weg, um в‚¬ 3000 pro Monat zu verdienen?', 'Ich bin 23. Ich habe в‚¬ 3000. Wie kann ich es am besten nutzen, um mehr Geld zu verdienen: http://www.lookweb.it/BESTINVESTMETHOD$5500031728'),
(98, 'StephensworK', 'lucydynes28@gmail.com', '  Look what we give birth to for you! an prominentoffers  Righteous click', '  Look what we give birth to for you! an prominentoffers  Righteous click', ' Hy there,  a greatoblation \r\n To be fit click on the tie-in below  \r\nbit.ly/2SUEexQ'),
(99, 'DavidClise', 'swood222@hotmail.com', 'Cryptocurrency Investing 2019', 'Cryptocurrency Investing 2019', 'The Top 5 Best Cryptocurrencies 2019: http://corta.co/BESTINVESTMETHOD5500085734'),
(100, 'DavidClise', 'crafty223@msn.com', 'Best cryptocurrency to Invest 2019', 'Best cryptocurrency to Invest 2019', '2019 Cryptocurrency Investment Guide: http://999.sh/5500048570'),
(101, 'DavidClise', 'changmd@hotmail.com', 'Forex Trader predicts and makes $10,000 less than 3 hours', 'Forex Trader predicts and makes $10,000 less than 3 hours', 'How To Make Over $10,000 In One Trade | Live Forex Trading and Analysis: http://www.lookweb.it/$$$bestforex$$$84058'),
(102, 'DavidClise', 's_lugo@hotmail.com', 'Sexy girls for the night in your town', 'Sexy girls for the night in your town', 'Find yourself a girl for the night in your city: https://lil.ink/bestforex87467'),
(103, 'RonaldArirl', 'graysprintingandembroidery@gmail.com', ' Hi Look what we give birth to with a view you! an dazzlingoffers  Lately click on the unite underneath to prepare ', ' Hi Look what we give birth to with a view you! an dazzlingoffers  Lately click on the unite underneath to prepare ', '  What we accept here is , an enchantingoffers \r\n Are you in?  \r\nhttp://servicerubin.ru'),
(104, 'DavidClise', 'emi200@msn.com', 'Find yourself a girl for the night in your city', 'Find yourself a girl for the night in your city', 'Meet sexy girls in your city: http://www.vkvi.net/bestforex95626'),
(105, 'Russo', '198410071@rambler.ru', 'Behold is  an interestingpresent for you.', 'Behold is  an interestingpresent for you.', 'Ciao! Please note a good bonus - Awesome welcome offer of up to $/€ 1600 free.  To qualify click on the link below. http://bit.ly/2J7xKrx'),
(106, 'DavidClise', 'rachelgiles@msn.com', 'Meet sexy girls in your city', 'Meet sexy girls in your city', 'Meet sexy girls in your city: http://webhop.se/bestforex10754'),
(107, 'ShawnBah', 'welshlion@msn.com', 'Find yourself a girl for the night in your city', 'Find yourself a girl for the night in your city', 'Sexy girls for the night in your town: https://tinyurl.com/adultdating77865'),
(108, 'ShawnBah', 'suzjay@hotmail.com', 'Meet sexy girls in your city', 'Meet sexy girls in your city', 'Sexy girls for the night in your town: http://corta.co/sexygirlsinyourcity37513'),
(109, 'Richardoxirm', 'megan.osdc@gmail.com', ' Hy there,  a fineoffers  To be eligible click on the relation unbefitting ', ' Hy there,  a fineoffers  To be eligible click on the relation unbefitting ', ' Hey What we be subjected to here is , a primeprovide \r\n Well-founded click \r\nhttp://bit.ly/2S42ikH'),
(110, 'Ronaldgef', 'robw30@hotmail.com', 'Suchen Sie sich ein MГ¤dchen fГјr die Nacht in Ihrer Stadt', 'Suchen Sie sich ein MГ¤dchen fГјr die Nacht in Ihrer Stadt', 'Sexy Girls fГјr die Nacht in deiner Stadt: http://jnl.io/bestsexygirlsxxx23903'),
(111, 'Ronaldgef', 'moflaherty1@msn.com', 'Sexy Girls fГјr die Nacht in deiner Stadt', 'Sexy Girls fГјr die Nacht in deiner Stadt', 'Treffen Sie sexy MГ¤dchen in Ihrer Stadt: https://e13.co/bestsexygirlsxxx29529'),
(112, 'Ronaldgef', 'boylenicole@hotmail.com', 'Forex Trader predicts and makes $10,000 less than 3 hours', 'Forex Trader predicts and makes $10,000 less than 3 hours', 'Forex 1000 To 1 Million вЂ“ Turning $10,000 into $1 Million in Forex: http://profit.bitcoin-forex-invest.com/how-to-make-money-from-online-video-game.php'),
(113, 'Ronaldgef', 'moonmooncat@msn.com', 'Forex Prodigy Makes $10,000 in 30 Minutes! - Market Traders Institute', 'Forex Prodigy Makes $10,000 in 30 Minutes! - Market Traders Institute', 'How To Make $100,000 Per Month With Forex Signals: http://profit.bitcoin-forex-invest.com/earn-money-online-in-pakistan-with-facebook.php'),
(114, 'Ronaldgef', 'rotana40@hotmail.com', 'Win iPhone X', 'Win iPhone X', 'Win iPhone X: http://corta.co/winiphonexs90158'),
(115, 'Josephswemy', 'template.placeholder@gmail.com', ' Hey Righteous news programme ! a honestoffers  Good click', ' Hey Righteous news programme ! a honestoffers  Good click', ' Hy there,  What we suffer with here is , an excitingoffers \r\n Right-minded click on the vinculum underneath to ready  \r\nhttp://bit.ly/2S9FT5s'),
(116, 'Ronaldgef', 'romulus_17@hotmail.com', 'You won iPhone X', 'You won iPhone X', 'Win iPhone X: http://awalsh.com/winiphonexs16379'),
(117, 'Ronaldgef', 'y_viel@hotmail.com', 'The Best Cryptocurrency to Invest in 2019', 'The Best Cryptocurrency to Invest in 2019', 'Cryptocurrency Investing 2019: http://ralive.de/46381'),
(118, 'Ronaldgef', 'fishbone420@msn.com', 'How to Turn $30,000 into $128,000', 'How to Turn $30,000 into $128,000', '$15,000 a month (30mins вЂњworkвЂќ lol): http://999.sh/188638'),
(119, 'Ronaldgef', 'bulldawg16@hotmail.com', '$200 for 10 mins вЂњwork?вЂќ', '$200 for 10 mins вЂњwork?вЂќ', 'How to make $10,000 Per day FAST: http://wntdco.mx/1342705'),
(120, 'Ronaldgef', 'cdavid1@hotmail.com', 'How To Make Extra Money From Home - $3000 Per Day Easy', 'How To Make Extra Money From Home - $3000 Per Day Easy', 'Invest $ 1000 and get $ 15000 every month: https://aaa.moda/180392'),
(121, 'Ronaldgef', 'mjmuha@msn.com', 'Make $200 per hour doing this', 'Make $200 per hour doing this', 'How to Make $30000 FAST | Fast Money | The Busy Budgeter: http://corta.co/142610'),
(122, 'ShawnIndig', 'bcalger@hotmail.com', 'Meet sexy girls in your city', 'Meet sexy girls in your city', 'Sexy girls for the night in your town: http://ralive.de/bestadultdatingsite31086'),
(123, 'ShawnIndig', 'heit14@hotmail.com', 'Sexy girls for the night in your town', 'Sexy girls for the night in your town', 'Meet sexy girls in your city: http://www.lookweb.it/bestadultdatingsite17654'),
(124, 'Susan Cook', 'susancook@4videodeals.com', '-6589579', 'follow up for jangg.se', 'Greetings, After seeing your web site I wanted to let you know that we work with companies similar to yours to publish a custom-made online promotional video, featuring your company.\r\n \r\nThe short video below tells you exactly what this custom made video can do for you:\r\n \r\nTo watch the video simply visit\r\nhttps://www.4videodeals.com/?=jangg.se\r\n \r\nIf this looks good to you, please contact me on our website. Thanks.\r\n \r\nAll the Best,\r\n \r\n-Susan Ross\r\nClient Manager\r\nhttps://www.4videodeals.com\r\n \r\n\r\n\r\n\r\n- This commercial message sent from PJLK Marketing LC\r\n4470 W Sunset Blvd #91359\r\nLos Angeles, CA 90027\r\n \r\nTo unsubscribe from any more messages visit:\r\nhttps://end-marketing.top/?site=jangg.se\r\n\r\n\r\n\r\n'),
(125, 'ShawnIndig', 'apsergio@hotmail.com', 'Meet sexy girls in your city', 'Meet sexy girls in your city', 'Sexy girls for the night in your town: http://webhop.se/bestadultdatingsite84463');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `Img1` varchar(255) NOT NULL,
  `Img2` varchar(255) NOT NULL,
  `Img3` varchar(255) NOT NULL,
  `Img1Big` varchar(255) NOT NULL,
  `Img2Big` varchar(255) NOT NULL,
  `Img3Big` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `Img1`, `Img2`, `Img3`, `Img1Big`, `Img2Big`, `Img3Big`) VALUES
(1, 'id1_img1.jpg', 'id1_img2.jpg', 'id1_img3.jpg', 'id1_img1_big.jpg', 'id1_img2_big.jpg', 'id1_img3_big.jpg'),
(2, 'id2_img1.jpg', 'id2_img2.jpg', 'id2_img3.jpg', 'id2_img1_big.jpg', 'id2_img2_big.jpg', 'id2_img3_big.jpg'),
(3, 'id3_img1.jpg', 'id3_img2.jpg', 'id3_img3.jpg', 'id3_img1_big.jpg', 'id3_img2_big.jpg', 'id3_img3_big.jpg'),
(4, 'id4_img1.jpg', 'id4_img2.jpg', 'id4_img3.jpg', 'id4_img1_big.jpg', 'id2_img2_big.jpg', 'id4_img3_big.jpg'),
(5, 'id5_img1.jpg', 'id5_img2.jpg', 'id5_img3.jpg', 'id5_img1_big.jpg', 'id5_img2_big.jpg', 'id5_img3_big.jpg'),
(6, 'id6_img1.jpg', 'id6_img2.jpg', 'id6_img3.jpg', 'id6_img1_big.jpg', 'id6_img2_big.jpg', 'id6_img3_big.jpg'),
(7, 'id7_img1.jpg', 'id7_img2.jpg', 'id7_img3.jpg', 'id7_img1_big.jpg', 'id7_img2_big.jpg', 'id7_img3_big.jpg'),
(8, 'id8_img1.jpg', 'id8_img2.jpg', 'id8_img3.jpg', 'id8_img1_big.jpg', 'id8_img2_big.jpg', 'id8_img3_big.jpg'),
(9, 'id9_img1.jpg', 'id9_img2.jpg', 'id9_img3.jpg', 'id9_img1_big.jpg', 'id9_img2_big.jpg', 'id9_img3_big.jpg'),
(10, 'id10_img1.jpg', 'id10_img2.jpg', 'id10_img3.jpg', 'id10_img1_big.jpg', 'id10_img2_big.jpg', 'id10_img3_big.jpg'),
(11, 'id11_img1.jpg', 'id11_img2.jpg', 'id11_img3.jpg', 'id11_img1_big.jpg', 'id11_img2_big.jpg', 'id11_img3_big.jpg'),
(12, 'id12_img1.jpg', 'id12_img2.jpg', 'id12_img3.jpg', 'id12_img1_big.jpg', 'id12_img2_big.jpg', 'id12_img3_big.jpg'),
(13, 'id13_img1.jpg', 'id13_img2.jpg', 'id13_img3.jpg', 'id13_img1_big.jpg', 'id13_img2_big.jpg', 'id13_img3_big.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `ID` int(11) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`ID`, `Link`, `Title`) VALUES
(1, 'index.php', 'Home'),
(2, 'produkter.php', 'Produkter'),
(3, 'nyhet.php', 'Nyhet'),
(4, 'erbjudande.php', 'Erbjudande'),
(5, 'service.php', 'Service'),
(6, 'kontakta.php', 'Kontakta');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderDetailID` int(11) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `TotaltPrice` decimal(10,0) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderDetailID`, `Quantity`, `TotaltPrice`, `OrderID`, `ProductID`) VALUES
(1, 1, '3000', 1, 3),
(2, 2, '5000', 1, 4),
(3, 0, '0', 0, 0),
(4, 2, '0', 0, 0),
(5, 2, '8', 0, 0),
(6, 2, '9', 0, 0),
(7, 0, '10', 0, 0),
(8, 0, '11', 0, 0),
(9, 0, '12', 0, 0),
(10, 0, '13', 0, 0),
(11, 0, '14', 0, 0),
(12, 1, '149', 16, 10),
(13, 1, '299', 16, 8),
(14, 1, '4990', 17, 9),
(15, 1, '299', 17, 8),
(16, 1, '149', 18, 10),
(17, 1, '4000', 19, 12),
(18, 1, '1490', 20, 6),
(19, 1, '4000', 20, 12),
(20, 1, '4000', 21, 12),
(21, 1, '149', 21, 10),
(22, 1, '8990', 21, 7),
(23, 1, '2790', 21, 5),
(24, 1, '1090', 21, 4),
(25, 1, '4000', 22, 12),
(26, 1, '149', 22, 10),
(27, 1, '4000', 23, 12),
(28, 1, '2890', 23, 11),
(29, 1, '4000', 24, 12),
(30, 1, '149', 24, 10),
(31, 1, '149', 25, 10),
(32, 1, '4000', 25, 12),
(33, 1, '4000', 26, 12),
(34, 1, '2890', 26, 11),
(35, 1, '2790', 26, 5),
(36, 2, '4000', 30, 12),
(37, 3, '4990', 30, 9),
(38, 15, '4000', 31, 12),
(39, 15, '4000', 32, 12),
(40, 15, '149', 33, 10),
(41, 3, '8990', 33, 7),
(42, 15, '4000', 33, 12),
(43, 15, '4000', 34, 12),
(44, 15, '4000', 35, 12),
(45, 15, '4000', 36, 12),
(46, 15, '60000', 37, 12),
(47, 15, '74850', 38, 9),
(48, 15, '4485', 38, 8),
(49, 10, '45000', 38, 3),
(50, 15, '60000', 39, 12),
(51, 15, '43350', 39, 11),
(52, 15, '60000', 40, 12),
(53, 15, '43350', 40, 11),
(54, 15, '60000', 41, 12),
(55, 15, '43350', 41, 11),
(56, 15, '60000', 42, 12),
(57, 15, '43350', 42, 11),
(58, 1, '149', 43, 10),
(59, 15, '60000', 43, 12),
(60, 1, '4000', 44, 12),
(61, 1, '4990', 45, 9),
(62, 1, '4000', 46, 12),
(63, 1, '4000', 47, 12),
(64, 2, '8000', 48, 12),
(65, 2, '9980', 49, 9),
(66, 2, '9980', 50, 9),
(67, 2, '9980', 51, 9),
(68, 1, '4000', 52, 12),
(69, 1, '4990', 52, 9),
(70, 2, '9980', 53, 9),
(71, 2, '9980', 54, 9),
(72, 2, '9980', 55, 9),
(73, 2, '9980', 56, 9),
(74, 5, '745', 57, 10),
(75, 1, '4000', 58, 12),
(76, 2, '5580', 58, 5),
(77, 3, '26970', 58, 7),
(78, 1, '149', 59, 10),
(79, 10, '39900', 59, 2),
(80, 3, '4470', 59, 6),
(81, 4, '4360', 59, 4),
(82, 1, '4000', 60, 12),
(83, 1, '4990', 61, 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `TotaltPrice` decimal(10,0) NOT NULL,
  `OrderDate` date NOT NULL,
  `UserID` int(11) NOT NULL,
  `PaymentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `TotaltPrice`, `OrderDate`, `UserID`, `PaymentID`) VALUES
(1, '0', '0000-00-00', 0, 0),
(2, '0', '0000-00-00', 0, 0),
(3, '0', '0000-00-00', 0, 0),
(4, '0', '0000-00-00', 0, 0),
(5, '3039', '2017-09-08', 23, 0),
(6, '448', '2017-09-08', 23, 0),
(7, '448', '2017-09-08', 23, 0),
(8, '448', '2017-09-08', 23, 0),
(9, '448', '2017-09-08', 23, 0),
(10, '448', '2017-09-08', 23, 0),
(11, '448', '2017-09-08', 23, 0),
(12, '448', '2017-09-08', 23, 0),
(13, '448', '2017-09-08', 23, 0),
(14, '448', '2017-09-08', 23, 0),
(15, '448', '2017-09-08', 23, 0),
(16, '448', '2017-09-08', 23, 0),
(17, '5289', '2017-09-08', 23, 0),
(18, '3039', '2017-09-08', 23, 0),
(19, '19770', '2017-09-08', 23, 0),
(20, '5490', '2017-09-08', 23, 0),
(21, '17019', '2017-09-08', 23, 0),
(22, '4149', '2017-09-08', 23, 0),
(23, '6890', '2017-09-08', 23, 0),
(24, '4149', '2017-09-08', 23, 0),
(25, '4149', '2017-09-08', 23, 0),
(26, '4149', '2017-09-08', 23, 0),
(27, '0', '2017-09-09', 23, 0),
(28, '0', '2017-09-09', 23, 0),
(29, '0', '2017-09-09', 23, 0),
(30, '0', '2017-09-09', 23, 0),
(31, '0', '2017-09-09', 23, 0),
(32, '15', '2017-09-09', 23, 0),
(33, '13139', '2017-09-09', 23, 0),
(34, '4000', '2017-09-09', 23, 0),
(35, '60000', '2017-09-09', 23, 0),
(36, '60000', '2017-09-09', 23, 0),
(37, '60000', '2017-09-09', 23, 0),
(38, '391560', '2017-09-09', 23, 0),
(39, '206700', '2017-09-09', 23, 0),
(40, '206700', '2017-09-09', 23, 0),
(41, '206700', '2017-09-09', 23, 0),
(42, '103350', '2017-09-09', 23, 0),
(43, '33192', '2017-09-09', 23, 0),
(44, '2000', '2017-09-10', 23, 0),
(45, '2495', '2017-09-15', 23, 0),
(46, '2000', '2017-09-15', 23, 0),
(47, '4000', '2017-09-15', 23, 0),
(48, '4000', '2017-09-15', 23, 0),
(49, '4990', '2017-09-15', 23, 0),
(50, '4990', '2017-09-15', 23, 0),
(51, '4990', '2017-09-15', 23, 0),
(52, '8990', '2017-09-15', 23, 0),
(53, '4990', '2017-09-15', 23, 0),
(54, '4990', '2017-09-15', 23, 0),
(55, '0', '2017-09-15', 23, 0),
(56, '9980', '2017-09-15', 23, 0),
(57, '745', '2017-09-15', 23, 0),
(58, '36550', '2017-09-15', 23, 0),
(59, '48879', '2018-03-16', 23, 0),
(60, '4000', '2018-08-31', 23, 0),
(61, '4990', '2018-09-17', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `PaymentType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductTitle` varchar(255) NOT NULL,
  `ProductDescription` varchar(300) NOT NULL,
  `ProductImg` varchar(255) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductStatus` tinyint(1) NOT NULL,
  `ProductSpecification` varchar(700) NOT NULL,
  `ProductDetails` varchar(1000) NOT NULL,
  `ProductQty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `CategoryID`, `ProductTitle`, `ProductDescription`, `ProductImg`, `ProductPrice`, `ProductStatus`, `ProductSpecification`, `ProductDetails`, `ProductQty`) VALUES
(1, 8, 'Bärbar speldator med snabb processor och Office 365', 'ASUS FX553VD-DM199T är en snabb Gaming-dator som levereras med 7:e generationens Intel® Core™ i5 quad-core-processor samt Windows 10. Vilket ser till att du på ett effektivt sätt kan använda din nya dator. Du får även ta del av kraftfull GeForce® GTX 1050 grafik från NVIDIA®, allt för att du ska kun', 'laptop.jpg', 4500, 1, '587857', 'HP Spectre 13-v100no är ett häpnadsväckande 10,4 mm tjockt designhantverk som endast vägar 1,1 kg. Den betecknas som världens just nu tunnaste dator och besitter fantastiska egenskaper. IPS-skärmen har en Full HD-upplösning på 1920x1080 pixlar och den är ytbehandlad med en slitstark och reptålig Corning® Gorilla® Glass från kant till kant.Om du köpt din senaste bärbara dator för mer än en handfull år sedan, saknar du mer än du vet om: mer prestanda, mer batteritid och mer högkvalitativ underhållning. Med en bärbar dator och en effektiv 7:e generationens Intel® Core™ processor är du alltid redo att arbeta och spela vart du än är. Få mer gjort med snabb och enkel navigering mellan alla dina favoritappar och ta din produktivitet, kreativitet och underhållning till nästa nivå. Dessutom kan du njuta av helt nya funktioner som ansiktsigenkänning för problemfri inloggning. Med ett brett utbud av smarta, snygga designer och skärmstorlekar finns en Intel®-baserad ', 0),
(2, 2, 'Bärbar speldator med snabb processor och Office 365', 'GoPro HERO5 Black är den förbättrade efterträdaren till den omåttligt populära actionkameran Hero 4 Black, och tar ännu ett steg uppåt och framåt med ännu fler funktioner. Bland annat har HERO5 Black blivit vattentät, fått en avancerad videostabilisering, röststyrning och möjlighet att ', 'gopro-hero5.jpg', 3990, 1, '', 'Oavsett om du klättrar i berg, cyklar downhill, stillsamt glider fram i en kanot eller bara leker med barnen i vattenspridaren hemma i trädgården så är det ovärderligt att få sina upplevelser på film. Då vill du självklart ha det i högsta möjliga kvalitet och upplösning. GoPro HERO5 Black fångar dina äventyr i 4K (3810x2160) i 30 fps för en mjuk och följsam video.När du verkligen vill se detaljerna i exempelvis ett trick kan du filma i äkta slowmotion i Full HD 1080p med 120 bilder per sekund.Vill du stanna tiden och ta stillbilder gör du det i 12 megapixels upplösning, vilket räcker gott till framkallning och förstoringar. Har du svårt att pricka rätt millisekund i en snabb händelse? Välj burstmode och låt kameran bränna av hela 30 bilder per sekund så får du säkert med just rätt ögonblick!HERO5 Black låter dig helt enkelt bevara dina speciella ögonblick och minnen högupplöst - precis så du kom ihåg dem när de hände. Tack vare alla de möjligheter till montering med fästen så ', 0),
(3, 2, 'Bärbar speldator med snabb processor och Office 365', 'ASUS FX553VD-DM199T är en snabb Gaming-dator som levereras med 7:e generationens Intel® Core™ i5 quad-core-processor samt Windows 10. Vilket ser till att du på ett effektivt sätt kan använda din nya dator. Du får även ta del av kraftfull GeForce® GTX 1050 grafik från NVIDIA®, allt för att du ska kun', 'laptop.jpg', 4500, 1, '0', 'HP Spectre 13-v100no är ett häpnadsväckande 10,4 mm tjockt designhantverk som endast vägar 1,1 kg. Den betecknas som världens just nu tunnaste dator och besitter fantastiska egenskaper. IPS-skärmen har en Full HD-upplösning på 1920x1080 pixlar och den är ytbehandlad med en slitstark och reptålig Corning® Gorilla® Glass från kant till kant.Om du köpt din senaste bärbara dator för mer än en handfull år sedan, saknar du mer än du vet om: mer prestanda, mer batteritid och mer högkvalitativ underhållning. Med en bärbar dator och en effektiv 7:e generationens Intel® Core™ processor är du alltid redo att arbeta och spela vart du än är. Få mer gjort med snabb och enkel navigering mellan alla dina favoritappar och ta din produktivitet, kreativitet och underhållning till nästa nivå. Dessutom kan du njuta av helt nya funktioner som ansiktsigenkänning för problemfri inloggning. Med ett brett utbud av smarta, snygga designer och skärmstorlekar finns en Intel®-baserad ', 0),
(4, 4, 'Prisvärd dammsugare med stor dammpåse', 'Electrolux PowerForce PF1CLASSIC gör städningen till ett rent nöje med utmärkt resultat. Den har en stor dammpåse på 3,5 liter och en lång räckvidd på 9 meter. Teleskoprör i metall samt ett effektivt DustPro-munstycke.', 'electrolux-powerforce.jpg', 1090, 1, '785785', 'Electrolux PowerForce PF1CLASSIC gör städningen till ett rent nöje med utmärkt resultat. Den har en stor dammpåse på 3,5 liter och en lång räckvidd på 9 meter. Teleskoprör i metall samt ett effektivt DustPro-munstycke.', 0),
(5, 3, 'Snabb, smart GPS med SIM-kort och WiFi', 'TomTom GO5200 är den smartare, snabbare och bättre anslutna navigatorn med bland annat inbyggt SIM-kort. Du får även tillgång till WiFi-anslutning, vilket gör att du kan uppdatera din enhet utan en dator. En annan smidig funktion är att du kan ansluta din smartphone och på så viss ', 'tomtom-go5200.jpg', 2790, 1, '0', 'TomTom GO5200 är den smartare, snabbare och bättre anslutna navigatorn med bland annat inbyggt SIM-kort. Du får även tillgång till WiFi-anslutning, vilket gör att du kan uppdatera din enhet utan en dator. En annan smidig funktion är att du kan ansluta din smartphone och på så viss ta röststyrda handsfreesamtal. Ska även nämna att du med TomTom MyDrive kan planera dina rutter i telefonen, så att navigatorn är redo när du sätter dig i bilen. GO5200 kommer dessutom med fria livstids kartor, traffic och fartkamera-uppdateringar ingår – du får till och med varningar för hastighetskontrollzoner. Till sist så har navigatorn givits en 5', 0),
(6, 5, 'Bluetooth-högtalare med stort Rock n\' Roll-ljud i litet format', 'Marshall har gett världen rockigt ljud genom sina högtalare och hörlurar i ett halvt århundrade. Nu har de packat ihop sitt klassiska rock n\'-roll-ljud och klassiska utseende till en liten kompakt högtalare och försett med Bluetooth för en trådlös ljudupplevelse med', 'marshall-stockwell.jpg', 1490, 0, '0', 'En Bluetooth-högtalare från Marshall är inte som vilken liten portabel högtalare som helst. När Marshall gör det, så görs det ordentligt. Inuti Stockwell finns två 2,25\" bashögtalare och en tvåkanalig D-klassförstärkare, som gör den här lilla lådan till den mest högljudda högtalaren i sin kategori.', 0),
(7, 4, 'Robotgräsklippare med WiFi och stötsensor', 'Låt roboten göra jobbet medan du kan göra annat. Worx Landroid M ll 1000 Wifi WG796E.1 är en robotgräsklippare som sköter gräsklippningen lika bra som konkurrerande, betydligt dyrare märken. Denna modell i Worx mittensegment klipper gräsmattor upp till 1000 m² och', 'worx-landroid.jpg', 8990, 1, '0', 'Låt roboten göra jobbet medan du kan göra annat. Worx Landroid M ll 1000 Wifi WG796E.1 är en robotgräsklippare som sköter gräsklippningen lika bra som konkurrerande, betydligt dyrare märken. Denna modell i Worx mittensegment klipper gräsmattor upp till 1000 m² och har alla funktioner du önskar; inbyggd WiFi för att kunna programmeras och fjärrstyras från din smartphone, borstfria motorer, regnsensor, stöldskydd och mycket, mycket mer.', 0),
(8, 4, 'Vattenkokare i rostfritt stål på 1,7 liter', 'Andersson WRK 2.4 är en vattenkokare med kapacitet på 1,7 liter vilket ger dig möjligheten att servera många personer té eller något annat gott på samma gång. Tack vare en 360-graders basplatta underlättar det vid avlyftning och påställning', 'andersson-wrk-2-4.jpg', 299, 0, '0', 'Inbyggt vattenfilter i pipen säkerställer att du får rent vatten och slipper eventuella kalkavlagringar. När vattenkokaren har kokat klart vattnet så stänger den automatiskt av sig så att du inte behöver stå och passa den. Sidan på vattenkokaren är graderad så att du enkelt ser hur mycket vatten du häller i.', 0),
(9, 5, 'NVIDIA GeForce GTX1070 Dual med 8 GB GDDR5', 'GeForce GTX 1070 vars arkitektur under namnet Pascal vilket är två gånger effektivare än föregångaren Maxwell. Grafikkortet som är det senaste i Nvidias serie GTX är redo för Virtual Reality samt 4K-upplösningar oavsett om du tittar på film eller om du vill spela de senaste ', 'asus-geforce.jpg', 4990, 1, '', 'Ansel är ett revolutionerande nytt sätt att fånga bilder i spelet och titta på dem i en 360-graders vinkel. Komponera dina bilder från vilken position som helst, justera dem med post-processfilter, fånga HDR-bilder i hifi-format, och dela dem i 360 grader med hjälp av din mobiltelefon, dator eller VR headset.', 0),
(10, 4, 'Rostfri äggkokare med plats för upp till 7 ägg', 'Andersson EGB 1.0 är en smidig äggkokare för 1-7 ägg med lock i rostfritt stål. Utrustad med praktisk äggpickare, mätkopp med tre olika skalor, automatisk avstängning och ljudsignal vid färdig kokning.', 'andersson-egb.jpg', 149, 0, '0', 'Mängden vatten som behövs beror på hur många ägg som ska kokas och hur hård/löskokta de ska bli. Mätkoppen har 3 olika skalor: lös-, medel- eller hårdkokt. Fyll mätkoppen med vatten upp till lämplig markering och häll det i kokutrymmet. En signal ljuder när äggen är kokta.', 0),
(11, 5, 'Xbox One S 500 GB inklusive Forza Horizon 3', 'Xbox One S Forza Horizon 3 bundle (500GB). Kartongen innehåller en digital nedladdning av spelet Forza Horizon 3 för Xbox One och Windows 10 PC. Du ansvarar över Horizon-festivalen I Forza Horizon 3, där du kan bestämma allting. Du kan anställa (och sparka) dina vänner', 'microsoft-one.jpg', 2890, 0, '0', 'Upplev rikare och djupare färger i spel och video med HDR. Spela gamla spelafavoriter från Xbox 360* i ett ständigt växande utbud med hjälp av bakåtkompabiliteten. Med några av de bästa spelen i Xbox historia, och över 100 exklusiva titlar, har det aldrig funnits en bättre tid att spela på Xbox One.', 0),
(12, 5, 'Kraftfulla PlayStation 4 Pro 1 TB', 'Nya Playstation 4 Pro innehåller många nyheter för att höja din spelupplevelse, bland annat 4K-stöd, 1 TB hårddisk samt en ny grafikprocessor som klarar 4,20 TFLOPS jämför med vanliga PS4 vars grafikprocessor ligger på 1,84 TFLOPS', 'sony-playstation-4-pro-1tb.jpg', 4000, 0, '0', 'Playstation 4 Pro är fullspäckad med ledande teknik som levererar den snabbaste, vassaste och mest responsiva spelupplevelsen hittils. Med den nya grafikprocessorn ges du en intensiv grafik och verklighetstrogna detaljer.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_gallery`
--

CREATE TABLE `products_gallery` (
  `ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `GalleryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_gallery`
--

INSERT INTO `products_gallery` (`ID`, `ProductID`, `GalleryID`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `ProductID`, `Name`, `Comment`) VALUES
(1, 1, 'test', 'thus is first comment'),
(2, 0, 'test', 'thus is first comment'),
(3, 0, 'test', 'thus is first comment'),
(4, 0, 'dsfsdf', 'sdfsdfsdf'),
(5, 0, 'dsfsdf', 'sdfsdfsdf'),
(6, 0, 'dsfsdf', 'sdfsdfsdf'),
(7, 0, 'dsfsdf', 'sdfsdfsdf'),
(8, 0, 'dsfsdf', 'sdfsdfsdf'),
(9, 0, 'dsfsdf', 'sdfsdfsdf'),
(11, 0, 'kkkkk', 'mmmmmm'),
(12, 0, 'dsfsdf', 'erterer45345345'),
(13, 0, 'fghfgh', 'fghfgh'),
(14, 0, 'dsfsdf', 'dfasfs'),
(15, 0, '678678', '678678'),
(16, 0, 'aaaaaaaaaaad', 'ssssssssssssssss'),
(17, 0, 'asdqweqweqw', '3452322222222222'),
(18, 0, 'dsfsdf', 'dssdsd111111'),
(19, 0, '555555555555555555555555', '5555555555555555555555555'),
(20, 0, '555555555555555555555555', '5555555555555555555555555'),
(21, 0, '7777777777777', '77777777777777777'),
(22, 0, '678678', '9999999999999999999'),
(23, 0, '544545', '5467457'),
(24, 0, 'dsfsdf', 'jhghjghj'),
(25, 0, 'kkkkk', '66'),
(26, 0, '555', '555'),
(27, 0, '11', '111'),
(28, 0, '11111', '1111111'),
(29, 0, '1111', '1111'),
(30, 0, '77777', '77777'),
(31, 0, 'qqqq', 'wwww'),
(32, 0, 'nnn', 'nnnn'),
(33, 0, 'jjj', 'jjj'),
(34, 0, '7676767', '7676767'),
(35, 0, 'ttttt', 'ttttt'),
(36, 0, 'yyyy', 'yyyy'),
(37, 0, 'ffff', 'ffff'),
(38, 0, '453', '5345'),
(39, 0, 'uuu', 'uuu'),
(40, 0, 'iii', 'iii'),
(41, 0, 'werwe', 'werwer'),
(42, 0, 'ooo', 'ooo'),
(43, 0, '435345', '34553'),
(44, 0, 'ttt', 'ttt'),
(45, 0, '443', '34534'),
(46, 0, '1111', '1111'),
(47, 0, '3333', '3333'),
(48, 0, 'ghfhfghfgh', 'fghfghfgh'),
(49, 0, '1111', '11111'),
(50, 0, '222', '222'),
(51, 0, '777', '777'),
(56, 0, 'john cena', 'this is my test comment'),
(57, 0, 'Iphone', 'buy this phone'),
(58, 0, 'John Cena', 'HTC U Ultra är det nya flaggskeppet från HTC som ger dig en snygg och smart design i kombination med mycket kraftig prestanda. Telefonen har bland annat blivit utrustad med en ljusstark 5,7\"-skärm, vilket gör det behagligt för dig att både titta på film\r\n'),
(59, 1, 'John', 'Rekommenderar den varmt åt dig som behöver en lätt dator som är enkel att plocka med och klarar av de viktigaste arbetsuppgifterna.\r\n\r\nAnvänder bla. som musikdator. Helt ok ljud från inbyggda högtalarna i omgivningar där störningarna är måttliga.'),
(60, 2, 'John', 'Har haft denna kort nu i 1 månad supee nöjd med denna har körr mångs så som gta5.den ghost recon.bf4 m.m klarar av allt på ultra utan problem'),
(61, 3, 'Erik', 'Går tyst, är snabbt och till ett bra pris. Ska inom en snar framtid testa ihop med en 4k skärm och får se då hur det kommer funka. Hel nöjd, inget mer att säg helt enkelt!'),
(62, 4, 'Mia', 'Inga problem med installation eller dyl.\r\nCoilwine får jag, men det kan bero på nätagg. eller annat, så det är nog inte grafikkortets fel (har fått det utbytt).\r\n\r\nDen håller nere tempen ganska så bra, och är någorlunda tyst. Prestandan hade jag gärna sett vara bättre med tanke på pris, men det duger mer än väl.\r\nDen klarar inte de nyaste spelen på Ult och få ut 144FPS till 144hz skärmen. Men det är bara å sänka grafiken till high/medium så löser det sig.\r\n\r\nAll in all, jag är nöjd men hade gärna sett bättre prestanda i spelet.'),
(63, 5, 'Ziko', 'Mitt bästa trädgårdsredskap näst efter Roundup. Den mal allting, upp till 4 cm grova grenar. Ett par kubikmeter ris blir bara en liten sopsäck med flis. Bara att hälla på grovkomposten. Det är en njutning att se hur den mumsar i sig allt som man vill bli av med. Jag kallar den Packman och jag älskar den!'),
(64, 6, 'Gorges', 'denna är bra att koåa'),
(65, 7, 'OLOF', 'TESING MY ON TO MANY TABLE'),
(70, 10, 'sdfsdfsdf', 'sdfsdfsd'),
(71, 11, 'Carlos', 'hi this is i test review');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int(11) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `full_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ID`, `Title`, `full_text`) VALUES
(1, 'Jag hittar inte mitt kvitto, kan ni hjälpa mig?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget diam euismod felis consequat commodo. Phasellus sit amet magna quis nulla lobortis facilisis. Donec luctus eget lacus eget laoreet. Donec sollicitudin auctor ultricies. Sed pellentesque in velit id facilisis. Suspendisse potenti. Mauris ut ligula lacus. Cras eu dui et purus vehicula feugiat. '),
(2, 'Hur ändrar jag namn, nummer eller address för leveransen?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget diam euismod felis consequat commodo. Phasellus sit amet magna quis nulla lobortis facilisis. Donec luctus eget lacus eget laoreet. Donec sollicitudin auctor ultricies. Sed pellentesque in velit id facilisis. Suspendisse potenti. Mauris ut ligula lacus. Cras eu dui et purus vehicula feugiat. '),
(3, 'Får jag en ny produkt om den jag fick är skadad?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget diam euismod felis consequat commodo. Phasellus sit amet magna quis nulla lobortis facilisis. Donec luctus eget lacus eget laoreet. Donec sollicitudin auctor ultricies. Sed pellentesque in velit id facilisis. Suspendisse potenti. Mauris ut ligula lacus. Cras eu dui et purus vehicula feugiat.'),
(4, 'Hur ser jag vad frakten kostar för en specifik produkt?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget diam euismod felis consequat commodo. Phasellus sit amet magna quis nulla lobortis facilisis. Donec luctus eget lacus eget laoreet. Donec sollicitudin auctor ultricies. Sed pellentesque in velit id facilisis. Suspendisse potenti. Mauris ut ligula lacus. Cras eu dui et purus vehicula feugiat.');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`ID`, `Title`, `Description`, `Keywords`) VALUES
(1, 'JanGG Webbshop Online', 'välkomna till online Webshop i hela sverige. Stort utbud av hemelektronik och vitvaror till låga priser. 30 dagars öppet köp utan kartong.', 'hemelektronik, vitvaror, HD LED Plasma TV, laptop, ipad, surfplatta, desktop, tvättmaskin, diskmaskin, spis, smartphone, iphone, GPS, köksmaskiner, kaffe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `PersonNumber` bigint(12) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Ename` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `CO` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `ZipCode` int(5) NOT NULL,
  `Country` varchar(100) DEFAULT 'Sweden',
  `UserType` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Password`, `PersonNumber`, `Fname`, `Ename`, `Email`, `Phone`, `Adress`, `CO`, `City`, `ZipCode`, `Country`, `UserType`) VALUES
(1, 'asdddasd', '123', 125422879630, 'uuuuuuuuuuuuuu', 'sakio', 'oiuytewerw@sdgsdgs.se', 5200452455, 'Atjkjkansasd', 'lasse', 'Stockholm', 41542, 'Sweden', 0),
(2, 'sami_66', '6633', 1245874159, 'Björn', 'Anderson', 'bjorn_anders@gsdfs.se', 55545, 'sargontasasdas 54', 'Hasse', 'Gothenburg', 41587, 'Sweden', 0),
(17, 'sami22', '555555', 123456007810, 'fghfghfgh', 'fghfghfg', '98988565497465@gmail.com', 1789789808, 'sdfsdfsdfsdf', 'uyttyu', 'sdfsdfsdfsd', 14521, 'sweden', 0),
(22, 'sami_2000222', '6633', 1000000000, 'fghfghfgh', 'fghfghfg', 'sami222@gmail.com', 0, 'sdfsdfsdfsdf', '', 'sdfsdfsdfsd', 14521, 'sweden', 0),
(23, 'User_new', '6633', 19550201, 'Tamel', 'taravaz', 'dsfsdfsd@hotmail.com', 765329821, 'Kalander', 'Gole', 'Göteborg', 41521, '', 0),
(24, 'demo', 'demo', 123456789123, 'Ramen', 'Dar', 'dsfsdfsd222@hotmail.com', 1234567891, 'ewrewerwerwer', 'Gole', 'Göteborg', 415, 'Sweden', 0),
(25, 'root', '6633', 0, '', '', '', 0, '', '', '', 0, 'Sweden', 0),
(39, 'okoak', '6633', 98456789123, 'dsfsdfsdsd', 'Cena', 'dsfsdf777sd@hotmail.com', 1234667891, 'atsdfjsdfsid', 'Gole', 'Göteborg', 41533, 'Sweden', 0),
(55, 'fafasfa', '6633', 458521456852, 'dsfsdf', 'Cena', '785754427sd@hotmail.com', 1234567891, 'atsdfjsdfsid', 'Gole', 'Göteborg', 41533, 'Sweden', 0),
(61, 'sdfsdfsdf', '6633', 144456789123, 'dsfsdf', 'Cena', 'fg456rgd456d@hotmail.com', 1234567891, 'atsdfjsdfsid', 'Gole', 'Göteborg', 41533, 'Sweden', 0),
(62, 'sdfsdffsdf', '6633', 177776789123, 'dsfsdf', 'Cena', 'eerw54325assd@hotmail.com', 1234567891, 'atsdfjsdfsid', 'Gole', 'Göteborg', 41533, 'Sweden', 0),
(63, 'fgsdsgsdg', '6633', 100056789123, 'dsfsdf', 'Cena', 'd87oiff77sd@hotmail.com', 1234567891, 'atsdfjsdfsid', 'Gole', 'Göteborg', 41533, 'Sweden', 0),
(65, 'admin', '6633rtyfhfghfgh', 1234567891, 'jacky', 'jacky', 'admin@jangg.se', 0, 'a', 'a', 'a', 0, 'Sweden', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderDetailID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `products_gallery`
--
ALTER TABLE `products_gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UC_email` (`Email`),
  ADD UNIQUE KEY `UC_username` (`UserName`),
  ADD UNIQUE KEY `UC_personnumber` (`PersonNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products_gallery`
--
ALTER TABLE `products_gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
