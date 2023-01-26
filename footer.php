<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>


.footer .footer-container{
    background:#eceeee  ;
    

    padding:1.5rem;
}

.footer .footer-container .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.footer .footer-container .box-container .box{
    display: flex;
  justify-content: center;
    flex:1 1 25rem;
}

.footer .footer-container .box-container .box h3{
    color:#051320;
    font-size: 1rem;
    padding:1rem 0;
}

.footer .footer-container .box-container .box li{
    display: block;
    color:#2c0001;
    font-size: 0.9rem;  
    padding:0.5rem;
    font-weight: 300;
}
.footer .footer-container .box-container .box a{
    display: block;
    color:#2c0001;
    font-size: 0.9rem;
    padding:0.3rem ;
    font-weight: 300;
}


.footer .footer-container .box-container .box li:hover{
    color: #2c0001;
}


.footer .footer-container .credit{
    font-size: 1rem;
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: .1rem solid black;;
    color:#2c0001;
    text-align: center;
}

.footer .footer-container .credit span{
    color:#2c0001;
}


    </style>
</head>
<body>
<section class="footer">

<div class="footer-container">

    <div class="box-container">

        <div class="box">
            <ul>
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                <a href="https://twitter.com/" target="_blank">Twitter</a>
                <a href="https://www.linkedin.com/" target="_blank">LinkdIn</a>
                
            </ul>
        </div>

        <div class="box">
            <ul>
                <h3>donwload links</h3>
                <a href="https://apps.microsoft.com/store/apps" target="_blank">Microsoft Store</a>
                <a href="https://play.google.com/" target="_blank">Play Store</a>
                <a href="https://apps.apple.com/" target="_blank">Apple App Store</a>
            </ul>
        </div>

        <div class="box">
            <ul>
                <h3>contact us</h3>
                <li>071-7797759</li>
                <li>viduranaween@gmail.com</li>
            </ul>

        </div>

    </div>

    <div class="credit"> &copy; <span> Vidura Naveen </span> | all rights reserved </div>

</div>

</section>

</body>
</html>