DROP TABLE IF EXISTS runner;
CREATE TABLE runner (
    runnerIMG varchar(255) NOT NULL,
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

INSERT INTO runner (`runnerIMG`,`runnerID`, `runnerName`) VALUES
('https://static-cdn.jtvnw.net/jtv_user_pictures/forsen-profile_image-48b43e1e4f54b5c8-300x300.png','R01', 'Forsen'),
('https://upload.wikimedia.org/wikipedia/en/thumb/1/1d/Dream_icon.svg/1200px-Dream_icon.svg.png','R02', 'Dream'),
('https://pbs.twimg.com/profile_images/1231090379442622465/GYGi4f4T_400x400.jpg','R03', 'DarkViperAU'),
('https://pbs.twimg.com/profile_images/985963526052184064/hMYj3Vl-_400x400.jpg','R04', 'FriendlyBaron'),
('https://www.speedrun.com/userasset/qjo9k3j6/image?v=e770a84','R05', 'Maximumm'),
('https://static-cdn.jtvnw.net/jtv_user_pictures/20ce0b57-c04e-48ea-9dd0-64962b11cb29-profile_image-300x300.png','R06', 'Wirtual'),
('https://pbs.twimg.com/profile_images/1387140081375395852/MrNTi0c4_400x400.jpg','R07', 'Hefest'),
('https://www.speedrun.com/userasset/8vo0e4vx/image?v=3a2fb5f','R08', 'UnNameD'),
('https://pbs.twimg.com/profile_images/1336017673784872963/zhIKLy-e_400x400.jpg','R09', 'Simply'), 
('https://www.speedrun.com/userasset/e8e6gd6j/image?v=a734af2','R10', 'burhác'), 
('https://yt3.googleusercontent.com/ytc/AL5GRJXoShgDUpvQu3la7ERs0v_0vsOg-EV47IOASQ9L=s176-c-k-c0x00ffffff-no-rj','R11', 'racehans'); 

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

