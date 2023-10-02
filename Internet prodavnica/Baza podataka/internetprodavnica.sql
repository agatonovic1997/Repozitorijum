-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 11:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internetprodavnica`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `IDKorisnika` int(9) NOT NULL,
  `Ime_i_prezime` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Sifra` varchar(255) DEFAULT NULL,
  `Mobilni` varchar(255) DEFAULT NULL,
  `Adresa` varchar(255) DEFAULT NULL,
  `Komentar` text DEFAULT NULL,
  `Kolica` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`IDKorisnika`, `Ime_i_prezime`, `Email`, `Sifra`, `Mobilni`, `Adresa`, `Komentar`, `Kolica`) VALUES
(5, 'Milos Agatonovic', 'milos.agaton97@gmail.com', 'Lozinka12345', '063-8897090', 'Poljaci', NULL, NULL),
(7, 'Pera Peric', 'pera.peric@gmail.com', '12345', '062-6877040', 'Kragujevac', NULL, NULL),
(11, 'Nikola Nikolic', 'n.nikolic@gmail.com', '54321', '063-587632', 'Novi Sad', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kupovine`
--

CREATE TABLE `kupovine` (
  `IDKupovine` int(11) NOT NULL,
  `Ime_i_prezime` varchar(50) NOT NULL,
  `Naziv` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobilni` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `IDProizvoda` int(9) NOT NULL,
  `Kategorija` varchar(255) DEFAULT NULL,
  `Naziv` varchar(255) DEFAULT NULL,
  `Slika` varchar(255) DEFAULT NULL,
  `Kratakopis` text DEFAULT NULL,
  `Dugiopis` text DEFAULT NULL,
  `Cena` decimal(10,2) DEFAULT NULL,
  `BrojSvidjanja` int(11) DEFAULT NULL,
  `BrojNesvidjanja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`IDProizvoda`, `Kategorija`, `Naziv`, `Slika`, `Kratakopis`, `Dugiopis`, `Cena`, `BrojSvidjanja`, `BrojNesvidjanja`) VALUES
(1, 'Odeca', 'Majice', NULL, 'Majice su lagani komadi odeće koji se obično nose na gornjem delu tela.\r\nDostupne su u različitim stilovima, kao što su kratkih rukava, dugih rukava, bez rukava itd.\r\nIzrađene su od udobnih materijala kao što su pamuk, poliester ili mešavina materijala.\r\nMajice su popularne zbog svoje svestranosti i mogu se nositi u različitim prilikama, od svakodnevnog izgleda do formalnih događaja.', 'Majica je odevni predmet koji je postao simbol opuštenosti, udobnosti i izražavanja ličnog stila. Ova vrsta odeće je popularna širom sveta i dolazi u različitim stilovima, bojama i dezenima.Majice su obično izrađene od mekanih materijala poput pamuka, poliestera ili mešavine materijala. One su lagane i prozračne, što ih čini idealnim izborom za svakodnevno nošenje u različitim prilikama.Majice mogu imati različite krojeve, kao što su klasičan okrugli izrez, V-izrez ili polo kragna. Takođe, mogu biti kratkih ili dugih rukava, pa se lako prilagođavaju vremenskim uslovima i preferencijama nosioca.Ono što čini majice posebnim su različiti natpisi, printovi i grafike koji se nalaze na njima. Ljudi često biraju majice sa citatima, šaljivim porukama, logotipima omiljenih bendova, filmova ili brendova kako bi izrazili svoje interese, stavove ili raspoloženje.Majice su takođe popularan način za promovisanje događaja, kompanija, timova ili organizacija. One mogu biti personalizovane sa odgovarajućim dizajnom, imenom ili logotipom kako bi se istakla pripadnost ili podrška određenoj grupi ili ideji.\r\nMajice su svestrani odevni predmet koji se lako kombinuje sa drugom garderobom, kao što su farmerke, suknje ili pantalone. One mogu biti deo ležernih ili sportskih kombinacija, ali i doprineti elegantnijem izgledu uz dodatak odgovarajućih aksesoara.', 3500.00, 2009, 245),
(2, 'Knjige', 'Knjige', NULL, 'Knjige su štampani medij koji sadrži tekstualni sadržaj, priče, informacije ili umetnost.Dostupne su u različitim žanrovima, kao što su fikcija, biografije, politika, istorija, nauka itd.\r\nKnjige mogu biti tvrdo ukoričene ili meke korice, a često imaju ilustracije ili fotografije.Knjige pružaju znanje, zabavu i mogućnost da se uronite u drugi svet, razumete druge perspektive i širite svoje razumevanje sveta.', 'Knjige su štampani medij koji sadrži tekstualni sadržaj, priče, informacije ili umetnost. One su izvor znanja, inspiracije i zabave već vekovima. Knjige dolaze u različitim oblicima, kao što su tvrdo ukoričene ili meke korice, sa ilustracijama ili fotografijama.\r\nKnjige su prozor ka drugim svetovima, omogućavajući nam da se uronimo u priče, upoznamo različite likove i razumemo različite perspektive. One nam pružaju mogućnost da se obrazujemo, istražujemo nove ideje i širimo naše razumevanje sveta oko nas.Knjige su takođe prelepi umetnički predmeti. Njihove korice, ilustracije i dizajn mogu biti prava vizuelna poslastica. Pored toga, knjige su i kolekcionarski predmet.', 1200.00, 1950, 148),
(3, 'Elektronika', 'Laptopovi', NULL, 'Laptopovi su prenosivi računari koji omogućavaju rad, pristup internetu, gledanje filmova, igranje igara i druge aktivnosti.Dostupni su u različitim veličinama, konfiguracijama i performansama.Laptopovi imaju tastaturu, ekran, touchpad i često imaju ugrađene zvučnike i web kamere.Laptopovi su pogodni za poslovne ljude, studente, kreativne profesionalce i sve one koji žele pristup računaru dok su u pokretu.', 'Laptop je prenosivi računar koji je postao neizostavan deo našeg modernog digitalnog sveta. Ovaj uređaj kombinuje funkcionalnost desktop računara sa kompaktnošću i mobilnošću. Laptopi dolaze u različitim veličinama, težinama i performansama, pružajući korisnicima širok spektar opcija.Laptopi su opremljeni ekranom, tastaturom, touchpad-om ili mišem, zvučnicima, web kamerom i drugim funkcionalnostima. Njihova snaga i performanse variraju u zavisnosti od modela i namene. Mogu biti idealni za poslovne ljude koji često putuju, studente koji pohađaju predavanja ili ljude koji jednostavno žele pristup digitalnom svetu bilo gde i u svakom trenutku.Laptopi omogućavaju pristup internetu, slanje i primanje emailova, gledanje filmova, slušanje muzike, igranje igara, obradu dokumenata i još mnogo toga. Oni su postali neophodni alat za rad, učenje i zabavu.\r\nSa napredovanjem tehnologije, laptopi postaju sve snažniji, tanji i lakši. Baterije traju duže, ekran je visoke rezolucije, a skladišni kapacitet se stalno povećava. Laptopi su postali i platforma za razvoj novih tehnologija kao što su veštačka inteligencija, virtuelna stvarnost i mašinsko učenje..', 65750.00, 2481, 743);

-- --------------------------------------------------------

--
-- Table structure for table `tabela_cuvanje`
--

CREATE TABLE `tabela_cuvanje` (
  `ID` int(9) NOT NULL,
  `Naziv` varchar(250) NOT NULL,
  `Cena` int(11) NOT NULL,
  `brojProizvoda` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`IDKorisnika`);

--
-- Indexes for table `kupovine`
--
ALTER TABLE `kupovine`
  ADD PRIMARY KEY (`IDKupovine`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`IDProizvoda`);

--
-- Indexes for table `tabela_cuvanje`
--
ALTER TABLE `tabela_cuvanje`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `IDKorisnika` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kupovine`
--
ALTER TABLE `kupovine`
  MODIFY `IDKupovine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `IDProizvoda` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tabela_cuvanje`
--
ALTER TABLE `tabela_cuvanje`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
