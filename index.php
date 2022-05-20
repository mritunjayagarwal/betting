<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Betting</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .front-img
    {
      position:absolute;
      z-index: 2;
    }
    .back-img
    {
      position:absolute;
      z-index: 1;
    }

    .numberCircle {
    border-radius: 50%;
    width: 36px;
    height: 36px;
    padding: 8px;

    background: #fff;
    border: 2px solid #666;
    color: #666;
    text-align: center;

    font: 32px Arial, sans-serif;
}
  </style>
</head>
<body>

<?php


$conn = mysqli_connect("localhost", "root", "", "data");

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];

  $query = "INSERT INTO tb_data VALUES('$name', '$age', '$country')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <button class = "btn btn-purple btn-round">Contact Us</button>
    </div>
  </nav>
  
  <section class = "hero" style = "padding: 250px 0;overflow: hidden">
  <form class="" action="" method="post" autocomplete="off">
      <label for="">Name</label>
      <input type="text" name="name" required value="">
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <label for="">Country</label>
      <select class="" name="country" required>
        <option value="" selected hidden>Select Country</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="India">India</option>
      </select>
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
    <div style = "position: relative">
      <div class = "container">
        <div class = "row">
          <div class = "col-lg-6">
            <div class = "container">
              <div class = "heading text-white">
                <h1 style = "font-size: 50px;">BET, WIN, EARN</h1>
                <h1 style = "font-size: 50px;">LIVE E-SPORTS CONTESTS</h1>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation</p>
              </div>
              <div class = "email-subscribe px-2 py-2 mt-4" style = "background: #fff; border-radius: 50px;">
                <div class = "d-flex">
                  <div class = "" style = "flex: 1;">
                    <input type="email" class = "w-100 p-2" style = "border:none; outline: none;" placeholder = "Enter Email Id">
                  </div>
                  <div>
                    <button class = "btn btn-primary p-2" style = "border-radius: 20px;">Get Started --></button>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div class = "mainBg-contents">
        <img src="./assets/img/Keyboard.png" class = "bg-hero bg-img1" style = "width: 500px; height: auto;position: absolute;top:-200px; right: -100px;" alt="">
        <img src="./assets/img/Joystick.png" class = "bg-hero bg-img2" style = "width: 350px; height: auto;position: absolute;top:50px; right: 300px;" alt="">
        <img src="./assets/img/Mouse.png" class = "bg-hero bg-img3" style = "width: 350px; height: auto;position: absolute;top: 180px;right: -50px" alt="">
      </div>
    </div>
  </section>

  <section>
    <div class = "container">
      <div class="row" style = "display: flex; justify-content: center;margin-top: -70px;">
          <div class="col-lg-12 col-md-12" style = "display: flex; justify-content: center;padding: 10px 0">
            
            <div class = "row" style = "display: flex; justify-content: center;background: #202020; width: 90%;padding: 20px 0">
               <div class="col-lg-4 col-md-4" style = "display: flex; justify-content: center;">
                <div class = "place my-3">
                  <div class = "d-flex">
                    <div class = "d-flex align-items-center justify-content-center">
                      <img src = "assets/img//Ellipse 8.png" style = "width: 100px; height: auto;">
                      <img src = "assets/img//group.png" class = "front-img" style = "width: 100px; height: auto;">
                      <img src = "assets/img//Ellipse 8.png" class = "back-img" style = "width: 100px; height: auto;">
                    </div>
                    <div class = "d-flex align-items-center justify-content-center p-3">
                      <div>
                        <h1 class = "text-white">$86,290</h1>
                        <p style = "color: #fff; font-weight: 600">Paid out price</p>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              <div class="col-lg-4 col-md-4" style = "display: flex; justify-content: center;">
                  <div class = "place my-3">
                      <div class = "d-flex">
                        <div class = "d-flex align-items-center justify-content-center">
                          <img src = "assets/img//Ellipse 12.png" style = "width: 100px; height: auto;">
                          <img src = "assets/img//Frame.png" class = "front-img" style = "width: 100px; height: auto;">
                          <img src = "assets/img//Ellipse 12.png" class = "back-img" style = "width: 100px; height: auto;">
                        </div>
                        <div class = "d-flex align-items-center justify-content-center p-3">
                          <div>
                            <h1 class = "text-white">2,344</h1>
                            <p style = "color: #fff; font-weight: 600">Winners</p>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4" style = "display: flex; justify-content: center;">
                <div class = "place my-3">
                  <div class = "d-flex">
                    <div class = "d-flex align-items-center justify-content-center">
                      <img src = "assets/img//Ellipse 11.png" style = "width: 100px; height: auto;">
                      <img src = "assets/img//group 8.png" class = "front-img" style = "width: 100px; height: auto;">
                      <img src = "assets/img//Ellipse 11.png" class = "back-img" style = "width: 100px; height: auto;">
                    </div>
                    <div class = "d-flex align-items-center justify-content-center p-3">
                      <div>
                        <h1 class = "text-white">234</h1>
                        <p style = "color: #fff; font-weight: 600">Players Online</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            </div>
          </div>    
        </div>
  </div>
  </section>

  <section class = "revolution">
    <div class = "container text-center">
      <p class = "p">A Next Level Sports Betting</p>
      <h3 class = "h3">A REVOLUTION IN ONLINE GAMING</h3>

      <div class="services-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="./assets/img/about-icon-1.png" style = "width: 120px; height: auto;" alt="">
                        <h4>Peer-to-Peer</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                      <img src="./assets/img/about-icon-2.png" style = "width: 120px; height: auto;" alt="">
                        <h4>No Limits</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                      <img src="./assets/img/about-icon-3.png" style = "width: 120px; height: auto;" alt="">
                        <h4>Decentralised</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="service-item">
                    <img src="./assets/img/about-icon-4.png" style = "width: 120px; height: auto;" alt="">
                      <h4>Community Powered</h4>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section style = "padding: 50px 0;background: purple;">
    <div class = "container" style = "position: relative;">
      <p class = "text-center text-white">Get to know us</p>
    <h3 class = "text-center text-white">HOW BETTING WORKS</h3>
    <p class = "text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum exercitationem ducimus reiciendis similique officiis fugit, repudiandae quo nobis vero qui quod tenetur magnam, nostrum minus ex laudantium autem harum fuga!</p>
    <!-- <svg width="190" height="160" xmlns="http://www.w3.org/2000/svg">
      <path d="M 10 80 C 40 10, 65 10, 95 80, 120 150, 190 200" stroke="black" fill="transparent"/>
    </svg> -->
    
    <svg class="curved-line" viewBox="31 9 226 120" style = "margin: 100px 0">

      <defs>
        <linearGradient x1="50%" y1="108.24102%" x2="50%" y2="29.9104628%" id="curved-line-gradient">
          <stop offset="0%"></stop>
          <stop offset="100%"></stop>
        </linearGradient>
  
        <path d="M34,35 C34,34 37,46 79,55 C140,80 110,-40 169,40 C200,180 300,-80 180,-40"
        id="curved-line" stroke="white" stroke-dasharray = "3 1" fill="transparent"></path>
  
        <filter id="dropshadow" height="130%">
          <!-- blur amount -->
          <feGaussianBlur in="SourceAlpha" stdDeviation="3" />
          <!-- offset -->
          <feOffset dx="0" dy="13" result="offsetblur" />
          <!-- opacity -->
          <feComponentTransfer>
            <feFuncA type="linear" slope="0.1" />
          </feComponentTransfer>
          <feMerge>
            <feMergeNode/>
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
  
      </defs>
  
      <g stroke="none" fill="none">
        <use stroke="url(#curved-line-gradient)" xlink:href="#curved-line"></use>
      </g>
    </svg>

    <div class="numberCircle point1"></div>
    <div class = "step" style = "position: absolute; top: 280px;">
      <!-- <h1>Step 1</h1>
      <p>Lorem Ipsum</p> -->
    </div>
    <div class="numberCircle point2"></div>
    <div class = "step" style = "position: absolute; top: 520px;left: 280px">
      <!-- <h1>Step 2</h1>
      <p>Lorem Ipsum</p> -->
    </div>
    <div class="numberCircle point3"></div>
    <div class = "step" style = "position: absolute; top: 150px;left: 490px;">
      <!-- <h1>Step 3</h1>
      <p>Lorem Ipsum</p> -->
    </div>
    <div class="numberCircle point4"></div>
    <div class = "step" style = "position: absolute; top: 370px;left: 750px;">
      <!-- <h1>Step 3</h1>
      <p>Lorem Ipsum</p> -->
    </div>
    <div class="numberCircle point5"></div>
    <div class = "step" style = "position: absolute; top: 635px;left: 780px;">
      <!-- <h1>Step 3</h1>
      <p>Lorem Ipsum</p> -->
    </div>
    <div class="numberCircle point6"></div>
    <div class = "step" style = "position: absolute; top: 145px;left: 980px;">
      <!-- <h1>Step 3</h1>
      <p>Lorem Ipsum</p> -->
    </div>
  </div>
  </section>

  <section style = "padding: 50px 0;">
    <div class = "row">
      <div class = "col-lg-6 col-md-6">
        <img src="./assets/img/controller-right.png" class = "img-fluid controller" style = "margin: -150px 0 0 -300px; min-width: 1000px;" alt="">
      </div>
      <div class = "col-lg-6 col-md-6 text-white">
        <div class = "container">
          <p>Got to know us</p>
        <h1>How Betting Works</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ea dolore, facere ad tenetur autem. Nisi totam explicabo dignissimos sit in enim saepe, tempore, inventore doloremque aliquid, sed quod expedita.</p>
        <div class="mt-5">
          <div class="d-flex align-items-center justify-content-center">
              <div class="row">
                  <div class="col-lg-6 col-md-6">
                      <div class="service-item">
                          <img src="./assets/img/amazing-features-icon-1 1.png" style = "width: 120px; height: auto;" alt="">
                          <h4>Safety</h4>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="service-item">
                        <img src="./assets/img/amazing-features-icon-2.png" style = "width: 120px; height: auto;" alt="">
                          <h4>Transparency</h4>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="service-item">
                        <img src="./assets/img/amazing-features-icon-3.png" style = "width: 120px; height: auto;" alt="">
                          <h4>Player is the King</h4>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                      <img src="./assets/img/amazing-features-icon-4.png" style = "width: 120px; height: auto;" alt="">
                        <h4>Low Commisions</h4>
                    </div>
                </div>
              </div>
          </div>
        </div>
        </div>
      </div>
    </div> 
  </section>

  <section style = "background: #282828; padding: 50px 0">
    <div class = "container">
      <p class = "text-white text-center">FAQs</p>
      <h3 class = "text-white text-center">IF YOU HAVE QUESTIONS. WE HAVE ANSWERS</h3>
      <p class = "text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ipsum distinctio dolores laudantium cumque impedit, eveniet beatae eaque ad aspernatur totam reiciendis nesciunt doloribus vero id, commodi amet tenetur deleniti.</p>
      <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              how to play on bettel app ?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">log in with your mobile number to register on bettel app , follow the instruction as you set up your profile and then start participating in various streams 
     
              . select a game which you are interested and select a stream , now use your skill , knowledge and bet on the streamers and earn.</div>
          </div>
        </div>
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              can i actually win on bettel app ?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">absolutely !! you can definately win on bettel app by showing your gaming knowledge , we host different kind of cash contests, each with its own 
              entry fee and prize money </div>
          </div>
        </div>
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Is it safe to add money to bettel app ?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">adding money to your bettel account is both simple and safe . we have many different payments methods on bettel app to make sure that money transfer 
              is simple to the users . we also work hard to keep your data and personal details safe with us . and the best part is you can transfer your winning money directly 
             into your account or can convert them into various coupons.
            </div>
          </div>
        </div>
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              can bettel app be played outside of india ?
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">as per now we have restricted our game services to india , but we promise to expand our services outside of India as well.
            </div>
          </div>
        </div>
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
              when will the app launch ?
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">the bettel app will be launched soon and users will be notified on the mail .
            </div>
          </div>
        </div>
        <div class="accordion-item mb-3">
          <h2 class="accordion-header" id="flush-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
              if you have any other query !
            </button>
          </h2>
          <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">you can directly mail us at bettelapp@gmail.com
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer style = "padding: 50px 0;">
    <div class = "container">
      <div class = "row">
        <div class = "col-lg-8">
          <h1 style = "color: #Fff">LOGO</h1>
          <p class = "text-white">Call us on <span style = "color: purple">706799750</span></p>
          <p class = "text-white">Mail us on <span style = "color: purple">bettelapp@gmail.com</span></p>
        </div>
        <div class = "col-lg-4">
          <p class = "text-white">Follow Us</p>
          <div class = "d-flex">
            <div class = "social p-2">
              <i class = "fa fa-facebook"></i>
            </div>
            <div class = "social p-2">
              <i class = "fa fa-twitter"></i>
            </div>
            <div class = "social p-2">
              <i class = "fa fa-instagram"></i>
            </div>
            <div class = "social p-2">
              <i class = "fa fa-reddit"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>