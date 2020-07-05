<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>履歷表後台管理</title>
</head>

<body>
    <div class="backDiv">
        <button id="editOff" class="editOff" onclick="editSwitch()">Front Page</button>
        <div class="backList">
            <nav id="backNavPanel">
                <ul id="navGroup">
                    <li id="back_about" class="backNavBar" onclick="toBackA()">About Me</li>
                    <li id="back_experience" class="backNavBar" onclick="toBackE()">Experience</li>
                    <li id="back_skills" class="backNavBar" onclick="toBackS()">Skills</li>
                    <li id="back_portfolio" class="backNavBar" onclick="toBackP()">Portfolio</li>
                    <li id="back_contact" class="backNavBar" onclick="toBackC()">Contact</li>
                </ul>
            </nav>
        </div>

        <div id="backMain" class="backMain"></div>
    </div>
    <script src="js/back.js"></script>
</body>

</html>