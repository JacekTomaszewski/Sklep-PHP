-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Cze 2017, 15:59
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `Id` int(3) NOT NULL,
  `Nazwa` varchar(30) NOT NULL,
  `Cena` int(5) NOT NULL,
  `Kategoria` varchar(40) NOT NULL,
  `Opis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`Id`, `Nazwa`, `Cena`, `Kategoria`, `Opis`) VALUES
(1, 'Nike Roshe', 299, 'Buty', 'Nike Roshe One - proste, ale eleganckie, nowy produkt od Nike Sportwear, zaprojektowany przez Dylana Raascha, a zeby je zdobyc wcale nie musimy rozbijac banku. Dylan, jako projektant performance, zajmowal sie projetami butow do biegania, jednak za cel \"po godzinach\" znalazl, sobie but ktory bedzie tani, praktyczny oraz jednoczesnie stylowy. Poniewaz jako, ze nie byly to buty stricte przeznaczone do biegania, Raasch mogl wzniesc sie na wyzyny i stworzyc cos czego jeszcze nikt nigdy nie widzial.'),
(2, 'Adidas NMD', 259, 'Buty', 'Stworzone z mysla o dzisiejszych, miejskich nomadach, buty NMD lacza najlepsze innowacje adidas z progresywna moda miejska. Buty przyszlosci to buty biegowe NMD, czyli miejskie sneakery z technicznymi detalami, bedace holdem dla zaawansowanych technologii adidas. Te progresywne buty dla kobiet lacza lekka, dzianinowa cholewke z rewolucyjna amortyzacja boost(TM), ktora sprawia, ze kazdy krok staje sie napelniony energia.\r\n'),
(3, 'Pilka do koszykowki', 50, 'Akcesoria sportowe', 'Profesjonalna pilka do koszykowki'),
(4, 'Volvo V40', 89999, 'Samochody', 'Kompaktowy, pieciodrzwiowy hatchback (pierwszy w historii Volvo) klasyfikowany w segmencie C (nizsza klasa srednia), produkowany od 2012 roku. V40 zostal wprowadzony do oferty szwedzkiej marki w miejsce modeli S40/V50. Choc nosi ten sam symbol, co model kombi, wersja Volvo S40 (produkowany w latach 1995-2004), nie ma z nim nic wspolnego. Wraz z debiutem auta, marka zerwala bowiem z tradycyjnym nazewnictwem, wedlug ktorego model oznaczony litera ,,V\" oznaczal nadwozie typu kombi. V40 powstal na zmodyfikowanej plycie podlogowej Ford C1, ktora dzieli m.in. z Volvo C30. Jego projektantem byl Peter Horbury.\r\n'),
(5, 'Xiaomi Redmi 4X', 899, 'Telefony komorkowe', 'Xiaomi Redmi 4X Black nie boi sie ani intensywnej pracy, ani dlugotrwalego czuwania. Zadziwiajacy jest fakt, ze baterie 4100 mAh udalo sie zamknac w kompaktowej, 5-calowej ramie. Dzieki temu Redmi 4X 32GB bardzo wygodnie lezy w dloni, pozwalajac obslugiwac ekran jedna reka i korzystac z potencjalu procesora Octa-core oraz aparatu 13 Mpix. Postaw na elegancje. Postaw na wytrzymalosc. Postaw na Xiaomi Redmi 4X czarny.\r\n'),
(6, 'Honda CRF', 32000, 'Motocykle', 'Najmocniejsza i najpotezniejsza sposrod wszystkich modeli crossowych Hondy, 450. bezwatpienia skierowana jest do osob, ktore maja pewne doswiadczenie w jezdzie na motocyklach crossowych. Mocny, 51 konny silnik i lekkosc konstrukcji, ktorej masa wraz z plynami wynosi 109kg, sprawiaja, ze CRF 450 z ogromna ochota wznosi przednie kolo ponad poziom terenu, gdy tylko tylne zlapie przyczepnosc. Dla wszystkich smialkow ktorzy chcieliby sprobowac swoich sil w motocrossie na CRF 450, klasa MX1 stoi otworem. Nowy model rozpieszcza rowniez swoich nabywcow seryjnie montowanym, tak jak w mniejszej CRF 250, amortyzatorem skretu. Podobnie jak w pozostalych wyzszych modelach offroadowych Hondy, moc 450. przenoszona jest na naped za pomoca pieciostopniowej skrzyni biegow. Kolejnym, arcywaznym aspektem w przypadku motocykli cross i enduro jest zawieszenie. Honda zostala zaopatrzona w zawieszenia japonskiej marki Showa, z mozliwoscia pelnej regulacji.\r\n'),
(7, 'iPhone 7', 3199, 'Telefony komorkowe', 'iPhone 7 przynosi nowe, zaawansowane aparaty do zdjec i wideo. Posiada najwieksza moc i najwydajniejsza baterie w historii tego urzadzenia. Glosniki stereo hipnotyzuja fantastycznym dzwiekiem. Zadziwia najjasniejszy i wyswietlajacy najszersza game kolorow ekran. Odpornosc na wode i zachlapania oraz imponujacy wyglad czynia z niego prawdziwy przedmiot pozadania.\r\n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`) VALUES
(19, 'jacek1', '$2y$10$nWqDS34VXqyFPn3NoKE7yOqKsYDzgh5frVzzK5vL1TwzYvp6kNst.', 'jacek@od.pl'),
(18, 'jacek', '$2y$10$wV9npMfqXB2oLh8xkRktlutzufxOjh3nJK1Sn0K2xij0.eTOXTbPK', 'jacek@jacek.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Id_2` (`Id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
