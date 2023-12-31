<?php
require 'db_create_connect.php';

// Connect to the database
$status = createDB();
if ($status == 1) {
    $conn = OpenDB();
} else {
    echo "Could not connect to or create the database";
    exit; // Stop execution if the connection failed
}

CloseDB($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width,initial-scale=1.0">
    <title>LAAGA Tour</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo200.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">TOUR</a></li>
                    <li><a href="">HANDICAPS</a></li>
                    <li><a href="">RANKINGS</a></li>
                    <li><a href="">ROUNDS</a></li>
                    <li><a href="">MEMBERS</a></li>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>LaSalle Amateur Golf Association</h1>
            <p>Welcome to the LAAGA. Use this website to browse the tour schedule, player handicaps and fedex cup rankings. <br>
                I have also provided links to book tee times at local courses.
            </p>
        </div>

    </section>
    <!------HANDICAPS------->
    <section class="handicaps">
        <style>
            body {
                background-color: #255c25;
            }
        </style>
        <h2>Handicaps</h2>
        <div class="dropdown">
            <label for="">Handicaps are calculated based on the lowest 8 handicaps from your past 20 rrounds.</label>
        </div>

    </section>
    <!------ROUNDS------->
    <section class="tables">
            <style>
            /* Style for labels within the form */
            .form-label {
                color: white;
                display: inline-block;
                width: 100px;
                text-align: right;
                margin-right: 10px;
            }

            /* Style for the form fields */
            input[type="text"],
            input[type="number"],
            select {
                width: 200px;
            }

            /* Style for the form container */
            form {
                text-align: center;
                margin-right: 50px;
            }

            /* Other styles in your "ROUNDS" section */
            body {
                background-color: #255c25;
            }
            input[type="submit"] {
                background-color: #cf4044;
                color: white;
                padding: 10px 20px; /* Adjust the padding as needed */
                border: none;
                border-radius: 10px;
                cursor: pointer;
                margin-top: 10px;

}
        </style>

        <div class="dropdown">
            <h2>Add a Round</h2>
            <form method="post" action="process_form.php">
                <label for="player_id" class="form-label">Player:</label>
                <select name="player_id">
                    <option value="1">Aaron Atkinson</option>
                    <!-- Add more players here -->
                </select><br>
                
                <label for="course" class="form-label">Course:</label>
                <input type="text" name="course"><br>
                
                <label for="par" class="form-label">Par:</label>
                <input type="number" name="par"><br>
                
                <label for="rating" class="form-label">Rating:</label>
                <input type="number" step="0.01" name="rating"><br>
                
                <label for="slope" class="form-label">Slope:</label>
                <input type="number" name="slope"><br>
                
                <label for="score" class="form-label">Score:</label>
                <input type="number" name="score"><br>
                
                <label for="handicap" class="form-label">Handicap:</label>
                <input type="number" step="0.01" name="handicap"><br>
                
                <input type="submit" value="Submit">
            </form>
            <h2>Rounds</h2>
            <label for="names">Select a name to view all of their rounds:</label>
            <select id="names" onchange="toggleTableVisibility()">
                <!-- Names as options -->
                <option value="" selected disabled>Select a name</option>
                <option value="atkinson">Aaron Atkinson</option>
                <option value="charette">Nolan Charette</option>
                <option value="chilcoat">Josh Chilcoat</option>
                <option value="gerrish">Adam Gerrish</option>
                <option value="guarasci">Frank Guarasci</option>
                <option value="janisse">Richard Janisse</option>
                <option value="lanno">Chris Lanno</option>
                <option value="learn">Brad Learn</option>
                <option value="rinaldi">Lucas Rinaldi</option>
                <option value="shaw">Aaron Shaw</option>
                <option value="kward">Kevin Ward</option>
                <option value="mward">Matt Ward</option>
                <option value="whitty">Sean Whitty</option>
                <option value="none">None</option>
            </select>
        </div>
        
        <div class="table-container">
            <table id="atkinson-table" class="rounds hidden">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Par</th>
                        <th>Rating</th>
                        <th>Slope</th>
                        <th>Score</th>
                        <th>Handicap</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = OpenDB();
                    $result = $conn->query("SELECT * FROM AtkinsonRounds");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                                <td>' . $row["id"] . '</td>
                                <td>' . $row["Course"] . '</td>
                                <td>' . $row["Par"] . '</td>
                                <td>' . $row["Rating"] . '</td>
                                <td>' . $row["Slope"] . '</td>
                                <td>' . $row["Score"] . '</td>
                                <td>' . $row["Handicap"] . '</td>
                            </tr>';
                        }
                    }
                    CloseDB($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!------JavaScript for Menu------>
    <script>
        var navLinks = document.getElementById("navLinks");
        var atkinsonTable = document.getElementById("atkinson-table");
        var charetteTable = document.getElementById("charette-table");
        var chilcoatTable = document.getElementById("chilcoat-table");
        var gerrishTable = document.getElementById("gerrish-table");
        var guarasciTable = document.getElementById("guarasci-table");
        var janisseTable = document.getElementById("janisse-table");
        var lannoTable = document.getElementById("lanno-table");
        var learnTable = document.getElementById("learn-table");
        var rinaldiTable = document.getElementById("rinaldi-table");
        var shawTable = document.getElementById("shaw-table");
        var mwardTable = document.getElementById("mward-table");
        var kwardTable = document.getElementById("kward-table");
        var whittyTable = document.getElementById("whitty-table");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }

        function toggleTableVisibility() {
            var dropdown = document.getElementById("names");

            if (dropdown.value === "atkinson") {
                atkinsonTable.style.display = "table";
                charetteTable.style.display = "none";
                chilcoatTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            } else if (dropdown.value === "charette") {
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "table";
                chilcoatTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            } else if (dropdown.value === "chilcoat") {
                chilcoatTable.style.display = "table";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "gerrish") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "table";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "guarasci") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "table";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "janisse") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "table";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "kward") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "table";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "lanno") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "table";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "learn") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "table";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "mward") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "table";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "rinaldi") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "table";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";

            }else if (dropdown.value === "shaw") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "table";
                whittyTable.style.display = "none";

            } else if (dropdown.value === "whitty") {
                chilcoatTable.style.display = "none";
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "table";

            } else {
                atkinsonTable.style.display = "none";
                charetteTable.style.display = "none";
                chilcoatTable.style.display = "none";
                gerrishTable.style.display = "none";
                guarasciTable.style.display = "none";
                janisseTable.style.display = "none";
                kwardTable.style.display = "none";
                lannoTable.style.display = "none";
                learnTable.style.display = "none";
                mwardTable.style.display = "none";
                rinaldiTable.style.display = "none";
                shawTable.style.display = "none";
                whittyTable.style.display = "none";
            }
        }

        // Initialize table visibility on page load
        window.addEventListener("DOMContentLoaded", function() {
            toggleTableVisibility();
        });
    </script>
</body>

</html>