<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>
<body>
    <header>
        <?php include('header.php'); 
        ?>
    </header>

    <section class="contact">
        <div class="container">
            <form action="/action_page.php">
                <label for="fname">Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Email</label>
                <input type="text" id="lname" name="lastname" placeholder="Your email..">

                <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="portugal">Portugal</option>
                        <option value="espanha">Spain</option>
                        <option value="frança">France</option>
                        <option value="inglaterra">England</option>
                        <option value="switzerland">Switzerland</option>
                        <option value="germany">Germany</option>
                        <option value="italy">Italy</option>
                        <option value="ireland">Ireland</option>
                        <option value="netherlands">Netherlands</option>
                        <option value="turkey">Turkey</option>
                        <option value="belgium ">Belgium </option>
                        <option value="denmark ">Denmark </option>
                    </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
</section>

    <footer>        
        <?php include ('footer.php');
        ?>
    </footer>

</body>
</html>