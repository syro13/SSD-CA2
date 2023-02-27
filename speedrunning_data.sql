--
-- Database: `guitar_shop`
--
CREATE DATABASE IF NOT EXISTS `guitar_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `guitar_shop`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS runner;
CREATE TABLE runner (
    runnerID varchar(20) NOT NULL,
    runnerName varchar(255) NOT NULL,
    PRIMARY KEY(runnerID));
    
DROP TABLE IF EXISTS game;
CREATE TABLE game (
    gameName varchar(255) NOT NULL,
    gameID varchar(20) NOT NULL,
    PRIMARY KEY(gameID));

DROP TABLE IF EXISTS leaderboard;
CREATE TABLE leaderboard(
    runId INTEGER NOT NULL AUTO_INCREMENT,
    position INTEGER NOT NULL,
    runnerID varchar(20) NOT NULL,
    gameID varchar(20) NOT NULL,
    runTime time(3) NOT NULL,
    PRIMARY KEY(runID),
    FOREIGN KEY(runnerID) REFERENCES runner(runnerID),
	FOREIGN KEY(gameID) REFERENCES game(gameID));


--
-- Dumping data for table `products`
--

INSERT INTO runner (`runnerID`, `runnerName`) VALUES
('R01', 'Forsen'),
('R02', 'Dream'),
('R03', 'DarkViperAU'),
('R04', 'FriendlyBaron'),
('R05', 'Maximumm'),
('R06', 'Wirtual'),
('R07', 'Hefest'),
('R08', 'UnNameD'),
('R09', 'Simply'), 
('R10', 'burhác'), 
('R11', 'racehans'); 

INSERT INTO game (`gameID`, `gameName`) VALUES
('G01', 'Minecraft'),
('G02', 'Grand Theft Auto 5'),
('G03', 'Red Ball'),
('G04', 'TrackMania Nations Forever'),
('G05', 'Mario 64');

INSERT INTO leaderboard(`position`,`runnerID`,`gameID`,`runTime`) VALUES
(3,'R01','G05','0:26:26'),
(7,'R02','G01','0:22:04'),
(24,'R03','G02','6:20:47'),
(14,'R04','G02','6:09:17'),
(22,'R05','G03','0:2:55'),
(2,'R06','G04','0:58:05'),
(1,'R07','G04','0:07:56'),
(1,'R08','G02','5:45:09'),
(6,'R09','G05','0:47:43'),
(13,'R10','G02','5:52:22'),
(1,'R11','G04','0:05:41');

