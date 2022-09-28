<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- fornt page  -->
   <?php include('./components/navbar.php'); ?>
   <?php include('./components/hero.php'); ?>
   <?php include("./components/main.php") ?>



      <!-- front page end -->
    <?php include("./components/first_article.php") ?>

        <!-- first article -->

    


      <!-- end  first article  -->


       <!-- start second article  -->
       <?php include("./components/second_article.php") ?>
            <!-- end seond article -->


            <!-- portfolio -->

            <?php include("./components/portfolio.php") ?>
            <!-- end portfolio -->

               <!-- back ground -->
<div class="bg">
<img src="./images/pic1.jpg" alt="">


</div>

                <!-- end background -->




                        <!-- form start -->

<div class="container form">
    <h4>Ready to start?</h4>
    <h6>please fill in form and we will contact you</h6>
     <form action="" method="post" class="col-md-6">
        <label for="your name">your name</label>
        <input type="text" name="name" class="form-control" style="outline:none;"> 
        <label for="E-mail">E-mail</label>
        <input type="text" name="name" class="form-control" style="outline:none;"> 
        <label for="phone number ">phone number</label>
        <input type="text" name="name" class="form-control" style="outline:none;"> 
        <label for="current website">current website</label>
        <input type="text" name="name" class="form-control" style="outline:none;">
        <label for="instagram">instagram</label>
        <input type="text" name="name" class="form-control" style="outline:none;">
         <div class="checkbox">
        <input type="checkbox"  class="mt-4" >  
        <p>Branding</p>
        <input type="checkbox">  
        <p>Web design (Figma)</p>
        <input type="checkbox" >
        <p>Webflow development</p>  
    </div>
    <label for="Message">Message</label>
    <textarea name="disc" id="" cols="50" rows="5"></textarea>
    <div class="brand">
        <input type="checkbox">  
        <p>Branding</p>
    </div>
      <button name="submit">submit</button>




    </form>
</div>
               



                      <!-- end form  -->



                      <!-- footer start -->
               
                  <div class="footer">
                      <div class="mar">
                    
                              <h3>M.A.R.I.E</h3>
                     
                      </div>
                      <ul>
                          
                                  <li><a href="#" style="text-decoration:none ;">About us</a></li>
                                  <li><a href="#" style="text-decoration:none ;">services</a></li>
                                  <li><a href="#" style="text-decoration:none ;">portfolio</a></li>
                       
                      </ul>
                      <button style="outline:none;">Lets chat</button>
                  </div>

          <!-- footer end -->
</body>
</html>