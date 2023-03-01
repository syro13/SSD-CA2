DROP TABLE IF EXISTS runner;
CREATE TABLE runner (
    runnerID varchar(20) NOT NULL,
    runnerName varchar(255) NOT NULL,
    PRIMARY KEY(runnerID));
    
DROP TABLE IF EXISTS game;
CREATE TABLE game (
    gameIMG varchar(255) NOT NULL,
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

INSERT INTO game (`gameIMG`,`gameID`, `gameName`) VALUES
('https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2020/4/28/bjoyslzjb3uxqyg82uz2/minecraft','G01', 'Minecraft'),
('https://qph.cf2.quoracdn.net/main-qimg-77434f4eb8c9764d9dbfbee082101e04-lq','G02', 'Grand Theft Auto 5'),
('https://www.gameszap.com/files/img/red-ball-1508260327.jpg','G03', 'Red Ball'),
('https://cdn.cloudflare.steamstatic.com/steam/apps/11020/capsule_616x353.jpg?t=1548090419','G04', 'TrackMania Nations Forever'),
('https://upload.wikimedia.org/wikipedia/en/6/6a/Super_Mario_64_box_cover.jpg','G05', 'Mario 64'),
('https://www.gematsu.com/wp-content/uploads/2022/09/Trackmania-Ann_09-10-22.jpg','G06', 'TrackMania 2020');

INSERT INTO leaderboard(`position`,`runnerID`,`gameID`,`runTime`) VALUES
(3,'R01','G05','0:26:26'),
(7,'R02','G01','0:22:04'),
(24,'R03','G02','6:20:47'),
(14,'R04','G02','6:09:17'),
(22,'R05','G03','0:2:55'),
(2,'R06','G06','0:58:05'),
(5,'R07','G04','0:07:56'),
(1,'R08','G02','5:45:09'),
(6,'R09','G05','0:47:43'),
(13,'R10','G02','5:52:22'),
(1,'R11','G04','0:05:41');

