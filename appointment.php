<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Appointment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <img class="logo" src="./Images/magebit.png" alt="Magebit logo">
        <form>
            <h1 class="app">Make an appointment</h1>

            <label for="name">Full name:</label>
            <input type="text" id="fullName" placeholder="Write your full name here.">

            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="Email address.">

            <label for="date">Choose your date:</label>
            <input type="date" id="date">

            <button id="submit">Submit</button>
        </form>
    </div>

    <script src="./script.js"></script>
</body>
</html>