<html>

<head>
    <style>
        .page {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
            margin: 0 48px;
            flex-direction: column;
        }

        .container {
            display: flex;
            margin: 24p auto;
            width: 100%;
            justify-content: space-between;
            background: rgba(0, 0, 0, 0.85);
            padding: 24px;
            border-radius: 24px;
        }

        .column {
            display: block;
            width: 33%;
            height: 100%;
        }

        .logout {
            font-size: 24px;
            padding-top: 72px;
        }

        .logout a {
            color: black !important;
            font-weight: bold;
        }

        a,
        h1,
        h2,
        li {
            font-family: Arial, Helvetica, sans-serif;
        }

        a,
        li {
            color: white;
            font-size: 20px;
        }

        li {
            margin-bottom: 12px;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 12px;
        }

        h2 {
            font-size: 28px;
            margin-top: 0px;
        }
    </style>
</head>

<body style="background-image: url('gymnasium.jpg');
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 100% 100%;">

    <div class="page">
        <h1 style="text-align:center;"> First Choice</h1>
        <h2 style="text-align:center;"> Select a link</h2>
        <div class="container">
            <div class="column">
                <ul>
                    <li><a href="insert_game.php">Insert a Game</a></li>
                    <li><a href="update_game.php">Update Score For A Game</a></li>
                    <li><a href="select_game.php">List Information On A Game And The Teams</a></li>
                    <li><a href="delete_game.php">Delete a Game</li>
                    <li><a href="list_teams.php">List Teams Playing In A Specific Game</a></li>
                    <li><a href="select_gametime.php"> Shows Game Time For Teams</a></li>
                    <li><a href="select_gamescore.php"> Show Game Score For Specific Date</a></li>
                    <li><a href="select_has.php"> Select Fan's Game</a></li>
                    <li><a href="select_works.php"> When Does The Employee Work</a></li>
                    <li><a href="insert_Has.php"> Give Fan Seats At Game</a></li>
                </ul>
                </ul>
            </div>

            <div class="column">
                <ul>
                    <li><a href="insert_employee.php">Insert An Employee</a></li>
                    <li><a href="delete_employee.php">Delete An Employee</a></li>
                    <li><a href="select_employee.php">List All Information On Employees</a></li>
                    <li><a href="select_employeesalary.php">Select Employee Salary.</a></li>
                    <li><a href="update_Employee.php">Update for employee</a></li>
		    <li><a href="insert_works.php">Add a working date for employee</a></li>
		    <li><a href="multi_q.php">Multi Query For Employee & Works</a></li>
                </ul>
            </div>

            <div class="column">
                <ul>
                    <li><a href="insert_fan.php">Insert a Fan</a></li>
                    <li><a href="select_fan.php">List all fan information</a></li>
                    <li><a href="delete_fan.php">Delete a Fan</a></li>
                    <li><a href="update_Fan.php">Update fan information</a></li>
		    <li><a href="total_Fans.php"> Fans at the game</a></li>
                </ul>
            </div>
        </div>
        <p class="logout"><a href="logout.php">Log Out</a></p>
    </div>



</body>

</html>
