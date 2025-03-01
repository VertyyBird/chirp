<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#00001"/>
  <link href="/src/styles/styles.css" rel="stylesheet">
  <link href="/src/styles/timeline.css" rel="stylesheet">
  <link href="/src/styles/menus.css" rel="stylesheet">
  <link href="/src/styles/responsive.css" rel="stylesheet">

  <script defer src="https://cdn.jsdelivr.net/npm/@twemoji/api@latest/dist/twemoji.min.js" crossorigin="anonymous"></script>
  <script src="/src/scripts/general.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
 <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <title>404 - Chirp</title>
</head>
<body>
    <div id="menuSettings">
        <a href="settings/account">⚙️ Settings</a>
        <a>👪 Add another account</a>
        <a>🚪 Sign in</a>
    </div>
    <header>
        <div id="desktopMenu">
            <nav>
         <img src="/src/images/icons/chirp.svg" alt="Chirp" onclick="playChirpSound()">
                <a href="/"><img src="/src/images/icons/house.svg" alt=""> Home</a>
                <a href="/discover"><img src="/src/images/icons/search.svg" alt=""> Discover</a>
                <a href="/notifications"><img src="/src/images/icons/bell.svg" alt=""> Notifications</a>
                <a href="/messages"><img src="/src/images/icons/envelope.svg" alt=""> Direct Messages</a>
                <a
                href="<?php echo isset($_SESSION['username']) ? '/user?id=' . htmlspecialchars($_SESSION['username']) : '/signin'; ?>"><img
                    src="/src/images/icons/person.svg" alt=""> Profile</a>
                <?php if (isset($_SESSION['username'])): ?>
                    <button class="newchirp" onclick="openNewChirpModal()">Chirp</button>
                <?php endif; ?>
            </nav>
            <button id="settingsButtonWrapper" type="button" onclick=showMenuSettings()>
                <img class="userPic" src="/src/images/users/guest/user.svg" alt="aridan">
                <div>
                    <p>Guest</p>
                    <p class="subText">@guest</p>
                </div>
                <p class="settingsButton">⚙️</p>
            </button>
        </div>
    </header>
    <main>
        <div id="feed">
            <div id="iconChirp" onclick="playChirpSound()">
         <img src="/src/images/icons/chirp.svg" alt="Chirp">
            </div>
            <div id="notFound">
                <p>404 / Not Found</p>
                <p class="subText">Chirpie has searched everywhere but can't find what you were looking for.<br>Maybe it flew away?</p>
            </div>
        </div>
    </main>
    <aside id="sideBar">
        <div id="trends">
            <p>Trends</p>
            <div>
                <a href="/discover/search?q=gay_people">chirp</a>
                <p class="subText">12 chirps</p>
            </div>
            <div>
                <a>twitter</a>
                <p class="subText">47 chirps</p>
            </div>
            <div>
                <a>iphone 16</a>
                <p class="subText">62 chirps</p>
            </div>
        </div>
        <div id="whotfollow">
            <p>Suggested accounts</p>
            <div>
                <div>
                <img class="userPic" src="https://pbs.twimg.com/profile_images/1797665112440045568/305XgPDq_400x400.png" alt="">
                <div>
                    <p>Apple <img class="verified" src="/src/images/icons/verified.svg" alt=""></p><p class="subText">@apple</p>
                </div>
            </div>
                <a class="followButton">Follow</a>
            </div>
            <div>
                <div>
                <img class="userPic" src="https://pbs.twimg.com/profile_images/1881368435453542400/NnD56DYV_400x400.jpg" alt="">
                <div>
                    <p>President Trump <img class="verified" src="/src/images/icons/verified.svg" alt=""></p><p class="subText">@POTUS</p>
                </div>
            </div>
                <a class="followButton">Follow</a></div>
            </div>
        </div>
        <div>
            <p class="subText">Inspired by Twitter/X. No code has been sourced from Twitter/X. Twemoji by Twitter Inc/X Corp is licensed under CC-BY 4.0.
<br><br>You're running: Chirp Beta 0.7b </p>
        </div>
    </aside>
    <footer>
    </footer>
</body>
</html>
