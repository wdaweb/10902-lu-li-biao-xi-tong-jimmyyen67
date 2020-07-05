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
                    <li class="backNavBar" onclick="toPageBackH()">Home</li>
                    <li class="backNavBar" onclick="toPageBackA()">About Me</li>
                    <li class="backNavBar" onclick="toPageBackE()">Experience</li>
                    <li class="backNavBar" onclick="toPageBackS()">Skills</li>
                    <li class="backNavBar" onclick="toPageBackP()">Portfolio</li>
                    <li class="backNavBar" onclick="toPageBackC()">Contact</li>
                </ul>
            </nav>
        </div>

        <div class="backMain">

        </div>
    </div>
</body>

</html>