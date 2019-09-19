-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 18, 2019 alle 21:41
-- Versione del server: 10.1.38-MariaDB
-- Versione PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbooking`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `prenotazione_id` int(10) UNSIGNED NOT NULL,
  `prenotazione_fkutenteid` int(10) UNSIGNED NOT NULL,
  `prenotazione_fkstanzaid` int(10) UNSIGNED NOT NULL,
  `prenotazione_arrivo` date NOT NULL,
  `prenotazione_partenza` date NOT NULL,
  `prenotazione_note` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `prenotazione_en` int(1) UNSIGNED NOT NULL,
  `prenotazione_clienteNome` varchar(20) COLLATE utf8_bin NOT NULL,
  `prenotazione_clienteCognome` varchar(20) COLLATE utf8_bin NOT NULL,
  `prenotazione_clienteFiscale` varchar(20) COLLATE utf8_bin NOT NULL,
  `prenotazione_clienteEmail` varchar(20) COLLATE utf8_bin NOT NULL,
  `prenotazione_clienteTelefono` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `prenotazioni`
--

INSERT INTO `prenotazioni` (`prenotazione_id`, `prenotazione_fkutenteid`, `prenotazione_fkstanzaid`, `prenotazione_arrivo`, `prenotazione_partenza`, `prenotazione_note`, `prenotazione_en`, `prenotazione_clienteNome`, `prenotazione_clienteCognome`, `prenotazione_clienteFiscale`, `prenotazione_clienteEmail`, `prenotazione_clienteTelefono`) VALUES
(1, 1, 2, '0000-00-00', '0000-00-00', '', 1, 'Elena', 'Bearzotti', 'brzlne', 'elena@mail.it', '339'),
(2, 1, 2, '2019-09-20', '2019-09-25', 'no mappazoni', 1, 'paola', 'asz', '1q2dl976a45h4d31', 'bruno@email.com', '123245');

-- --------------------------------------------------------

--
-- Struttura della tabella `stanze`
--

CREATE TABLE `stanze` (
  `stanza_id` int(10) UNSIGNED NOT NULL,
  `stanza_nome` varchar(32) COLLATE utf8_bin NOT NULL,
  `stanza_note` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `stanza_fkstrutturaid` int(10) UNSIGNED NOT NULL,
  `stanza_prezzo` int(4) UNSIGNED NOT NULL,
  `stanza_matrimoniali` int(1) UNSIGNED DEFAULT NULL,
  `stanza_singoli` int(1) UNSIGNED DEFAULT NULL,
  `stanza_en` tinyint(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `stanze`
--

INSERT INTO `stanze` (`stanza_id`, `stanza_nome`, `stanza_note`, `stanza_fkstrutturaid`, `stanza_prezzo`, `stanza_matrimoniali`, `stanza_singoli`, `stanza_en`) VALUES
(1, 'stanza1', 's1s1', 1, 0, 0, 0, 0),
(2, 'stanza2', 's2s1', 1, 89, 1, 2, 1),
(3, 'stanza3', 's3s1', 1, 19, 1, 1, 1),
(4, 'stanza1', 's1s2', 2, 37, 2, 1, 1),
(5, 'stanza2', 's2s2', 2, 81, 1, 0, 1),
(6, 'stanza3', 's3s2', 2, 27, 1, 1, 1),
(7, 'stanza4', 's4s2', 2, 109, 3, 2, 1),
(8, 'stanza5', 's5s2', 2, 999, 2, 2, 1),
(9, 'Camera', 'camera mia', 1, 10, 1, 0, 1),
(10, 'boh boh', 'boh boh boh ', 1, 80, 3, 5, 1),
(178, '123', '123', 1, 123, 1, 23, 1),
(179, '321', '1', 1, 321, 3, 2, 1),
(180, 'aabb', '1 matr 2 sing', 1, 100, 1, 2, 1),
(181, 'ffffff', '', 1, 22, 2, 2, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `strutture`
--

CREATE TABLE `strutture` (
  `struttura_id` int(10) UNSIGNED NOT NULL,
  `struttura_fkutenteid` int(10) UNSIGNED NOT NULL,
  `struttura_nome` varchar(75) COLLATE utf8_bin NOT NULL,
  `struttura_citta` varchar(75) COLLATE utf8_bin NOT NULL,
  `struttura_via` varchar(75) COLLATE utf8_bin NOT NULL,
  `struttura_note` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `struttura_en` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `strutture`
--

INSERT INTO `strutture` (`struttura_id`, `struttura_fkutenteid`, `struttura_nome`, `struttura_citta`, `struttura_via`, `struttura_note`, `struttura_en`) VALUES
(1, 1, 'Struttura 1', 'Roma roma', 'Via struttura 1', 'la struttura 1', 1),
(2, 1, 'Struttura 2', 'Roma', 'Via struttura 2', 'la struttura 2', 1),
(3, 2, 'Mia struttura', 'Roma', 'via antamoro', 'Ciao', 1),
(4, 1, 'ffffff', 'fffff', 'ffffffff', '', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `utente_id` int(10) UNSIGNED NOT NULL,
  `utente_nome` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `utente_cognome` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `utente_email` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `utente_password` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `utente_img` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`utente_id`, `utente_nome`, `utente_cognome`, `utente_email`, `utente_password`, `utente_img`) VALUES
(1, 'nome1', 'cognome1', 'utente1@gmail.com', 'pwd1', 3),
(2, 'Elena', 'Bearzotti', 'elena@gmail.com', 'admin', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`prenotazione_id`),
  ADD KEY `fk_prenotazioni_utenti` (`prenotazione_fkutenteid`),
  ADD KEY `fk_prenotazioni_stanza` (`prenotazione_fkstanzaid`);

--
-- Indici per le tabelle `stanze`
--
ALTER TABLE `stanze`
  ADD PRIMARY KEY (`stanza_id`),
  ADD KEY `fk_stanze_strutture` (`stanza_fkstrutturaid`);

--
-- Indici per le tabelle `strutture`
--
ALTER TABLE `strutture`
  ADD PRIMARY KEY (`struttura_id`),
  ADD KEY `fk_strutture_utenti` (`struttura_fkutenteid`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`utente_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `prenotazione_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `stanze`
--
ALTER TABLE `stanze`
  MODIFY `stanza_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT per la tabella `strutture`
--
ALTER TABLE `strutture`
  MODIFY `struttura_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `utente_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD CONSTRAINT `fk_prenotazioni_stanza` FOREIGN KEY (`prenotazione_fkstanzaid`) REFERENCES `stanze` (`stanza_id`),
  ADD CONSTRAINT `fk_prenotazioni_utenti` FOREIGN KEY (`prenotazione_fkutenteid`) REFERENCES `utenti` (`utente_id`);

--
-- Limiti per la tabella `stanze`
--
ALTER TABLE `stanze`
  ADD CONSTRAINT `fk_stanze_strutture` FOREIGN KEY (`stanza_fkstrutturaid`) REFERENCES `strutture` (`struttura_id`);

--
-- Limiti per la tabella `strutture`
--
ALTER TABLE `strutture`
  ADD CONSTRAINT `fk_strutture_utenti` FOREIGN KEY (`struttura_fkutenteid`) REFERENCES `utenti` (`utente_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
