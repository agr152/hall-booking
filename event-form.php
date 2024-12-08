<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration Form</title>
    <link rel="icon" href="img/system-logo.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            padding-top: 120px;
        }
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

    <div class="form-container">
        <h2>Event Registration Form</h2>
        <form>
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="hodName">HOD Name:</label>
            <input type="text" id="hodName" name="hodName" required>

            <label for="eventOrganizer">Event Organizer Name:</label>
            <input type="text" id="eventOrganizer" name="eventOrganizer" required>

            <label for="eventTitle">Event Title:</label>
            <input type="text" id="eventTitle" name="eventTitle" required>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
