<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Selector</title>
    <link rel="icon" href="img/system-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .eventModal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            overflow: auto;
        }
        .form-container {
            background-color: #fefefe;
            margin-top: 50px;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        #calendar {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
            /* new style  */
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            padding-right: 40px;
        }
        h2 {
            text-align: center;
        }
        label {
            margin-bottom: 10px;
            display: block;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-left: 12px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div id="calendar"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script>
            function closeForm() {
            document.getElementById("eventModal").style.display = "none";
        }
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                // Redirect to another page with the selected date as a query parameter
                const selectedDate = start.format('YYYY-MM-DD');
                //window.location.href = `time-selector.html?date=${selectedDate}`;
                document.getElementById("eventModal").style.display = "block";
            },
            events: [] // Add any predefined events here
        });
    });
</script>
<div class="eventModal" id="eventModal">
<div class="form-container">
<span class="close" onclick="closeForm()">&times;</span>
        <h2>Event Registration Form</h2>
        <form method="POST" action="form.inc.php">
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="hodName">HOD Name:</label>
            <input type="text" id="hodName" name="hodName" required>

            <label for="eventOrganizer">Event Organizer Name:</label>
            <input type="text" id="eventOrganizer" name="eventOrganizer" required>

            <label for="eventTitle">Event Title:</label>
            <input type="text" id="eventTitle" name="eventTitle" required>

            <input type="submit" value="submit">
        </form>
    </div>
    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "none"){
            echo "<h4>No error occurred</h4>";
        }
    }
    ?>

</div>
</body>
</html>
