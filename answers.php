<!DOCTYPE html>

<html>
    
    <head>
    
        <link rel="shortcut icon" href="favicon.ico" />
        <title>Survey Answers</title>
        <link rel="stylesheet" href="css/answers.css">
        <link rel="stylesheet" href="css/reset.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    </head>
    
    <header>
    
        <div>
            <a href="index.html"><img class="logo" src=images/logo-noback.png alt="Health Complex Medical Logo"></a>
        </div>
        
        <div class="company-name">
            <h1>SURVEY ANSWERS</h1>
        </div>
        
    </header>
    
    <body>
        
        <div id="information">
            
            <h2 id="information-header">Information</h2>
            
            <p>Patient name: <?= $_POST['name'];?></p>

            <br>

            <p>Patient email is: <?= $_POST['email'];?></p>

            <br>

            <p>Patient phone number is: <?= $_POST['phone'];?></p>

            <br>
            
        </div>
        
        <div id="answers">
            
            <h2 id="answers-header">Answers</h2>
            
            <p>In your most recent customer service experience with Health Complex Medical, how did you contact us?: <span id="bold"><?= $_POST['q1'];?></span></p>

            <br>

            <p>On a scale from 1-5 (5 being Very Satisfied), how satisfied were you with the overall quality of our professionalism, respect shown to you as our customer, and the courtesy of our staff?: <span id="bold"><?= $_POST['q2'];?></span></p>

            <br>

            <p>How satisfied were you with the knowledge of our employee(s) you talked with regarding products, services, and/or any reimbursement or payment information?: <span id="bold"><?= $_POST['q3'];?></span></p>

            <br>

            <p>How satisfied where you that your order was delivered or services requested were provided in a timely manner?: <span id="bold"><?= $_POST['q4'];?></span></p>

            <br>

            <p>How satisfied were you that the order you received was complete, correct and included instructions about the safe use our your equipment?: <span id="bold"><?= $_POST['q5'];?></span></p>

            <br>

            <p>If one of our employees came to your house, how satisfied were you with how well they respected your home and your belongings?: <span id="bold"><?= $_POST['q6'];?></span></p>

            <br>

            <p>How satisfied were you that the delivery technician provided you with clear written insructions on how to use your equipment and informed you about how to reach our office during and after business hours?: <span id="bold"><?= $_POST['q7'];?></span></p>

            <br>

            <p> Please share with us any comments you may have about the service and performance of the technician/delivery staff who came to your home: <span id="bold"><?= $_POST['q8'];?></span></p>

            <br>

            <p>How satisfied were you that we were able to provide all the products and services you needed?: <span id="bold"><?= $_POST['q9'];?></span></p>

            <br>

            <p>Please let us know if you had any questions, complaints or concerns regarding our products, services or delivery how satisfied were you with our handling of your concerns: <span id="bold"><?= $_POST['q10'];?></span></p>

            <br>

            <p>On a scale from 1-10 (10 being 100% yes), would you be willing to recommend our company to another family member or friend who may need medical supplies and/or medical equipment?: <span id="bold"><?= $_POST['q11'];?></span></p>

            <br>

            <p>Please share with us any comments, feedback or suggestions for improving our service and our company: <span id="bold"><?= $_POST['q12'];?></span></p>

            <br>
            
        </div>
        
    </body>
    
    <hr id="footer-hr">
    
    <footer>
        
        <img class="slogan" src="images/slogan.PNG" alt="All Take Care Of">
        
    </footer>
    
</html>
