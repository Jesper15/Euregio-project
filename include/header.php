<html lang="en">

<style>
    /*Navigatie balk en naam*/

    .navigatie2 {
        width: 25%;
    }

    .navigatie {
        display: flex;
        align-items: center;
        background-color: red;
    }

    .navigatie ul {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        width: 70%;
    }

    .navigatie ul a {
        color: white;
    }

    .navigatie ul a:hover {
        color: orange;
    }

    .navigatie h1 {
        width: 15%;
        font-size: 30px;
        color: white;
        padding-left: 20px;
    }

    .navigatie form {
        width: 6%;
    }

</style>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <section class="navigatie">

        <h1>Parking</h1>
        <ul class="nav">
            <a href="index.php">Parking with seasonticket</a>
            <a href="parking_regular.php">Parking without seasonticket</a>
        </ul>
    </section>

</head>

</html>