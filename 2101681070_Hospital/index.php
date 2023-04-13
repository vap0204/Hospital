<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if ($insert) {
      $message[] = 'Успешно запазен час!';
   } else {
      $message[] = 'Неуспешно запазване на час!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>VSmile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/input.css">

</head>

<body>

   <!-- header section starts  -->

   <header class="header fixed-top">

      <div class="container">

         <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">V<span>Smile</span></a>

            <nav class="nav">
               <a href="#home">Начало</a>
               <a href="#about">За нас</a>
               <a href="#services">Услуги</a>
               <a href="#reviews">Доволни клиенти</a>
               <a href="#contact">Свържи се с нас</a>
            </nav>

            <a href="#contact" class="link-btn">Запиши час</a>

            <div id="menu-btn" class="fas fa-bars"></div>

         </div>

      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="container">

         <div class="row min-vh-100 align-items-center ">
            <div class="content text-center text-md-left">
               <h3>Дентална клиника VSmile</h3>
               <p>Най-краткият път към красивата усмивка и здравите зъби!</p>
               <a href="#contact" class="link-btn">Запиши час</a>
            </div>
         </div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <div class="container">

         <div class="row align-items-center">

            <div class="col-md-6 image">
               <img src="images/about1-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
               <span>За нас</span>
               <h3>Добре дошли в Дентална клиника VSmile</h3>
               <p>
                    Дентална клиника "VSmile" отваря врати , за да предостави по-различен подход 
                    при лечението на зъби. Ние не сме стандартния стоматологичен кабинет, който често 
                    предизвиква страх и притеснения в пациентите. Различното при нас е, че предразполагаме 
                    посетителите ни към провеждане на лечението, като им даваме възможност да се насладят на 
                    приятна и неангажираща обстановка, която да погали сетива им. Тук няма да се сблъскате с 
                    отегчителната клинична атмосфера и така характерната миризма на препарати, която отблъсква 
                    мнозина и ги кара да очакват тежките интервенции на зъболекарския стол. VSmile е клиниката, 
                    в която можете да доведете цялото си семейство, вашите близки и приятели. Насладете се на 
                    спокойствието и комфорта, които се постарахме да изградим специално за Вас и любимите ви хора. 
                    Отпуснете се в стаята за почивка и изпийте чаша кафе докато чакате реда си. 
                    За малките палавници пък сме подготвили детски кът с най-разнообразни и забавни игри, 
                    които ще накарат децата ви да забравят, че ги водите на зъболекар. Това обаче са само 
                    част от приятните изненади, които ще откриете при нас.
                </p>
               <a href="#contact" class="link-btn">Запиши час</a>
            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading">Услуги</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/icon-1.svg" alt="">
            <h3>Вадене на зъб</h3>
            <p>С напредъка на денталната медицина все повече зъби се лекуват успешно, но понякога и за най-добрия зъболекар лечението може да е невъзможно. При тези случаи се налага проблемният зъб да бъде изваден.</p>
         </div>

         <div class="box">
            <img src="images/icon-2.svg" alt="">
            <h3>Лечение с лазер </h3>
            <p>Денталните лазери - лечение без болка</p>
         </div>

         <div class="box">
            <img src="images/icon-3.svg" alt="">
            <h3>Козметична стоматология</h3>
            <p>Естетичната стоматология е изящно изкуство, създадено от козметични зъболекари, специализирали в проектирането на красиви усмивки.</p>
         </div>

         <div class="box">
            <img src="images/icon-4.svg" alt="">
            <h3>Ортодонтско лечение</h3>
            <p>Ортодонтията е дял от стоматологията, който се занимава с корекции на захапката и аномалиите на зъбния растеж и развитие. Това става с изправяне, преместване и подобряване на външния вид и функционалността на зъбите.</p>
         </div>

         <div class="box">
            <img src="images/icon-5.svg" alt="">
            <h3>Детска стоматология</h3>
            <p>Детската стоматология се грижи за здравето на млечните зъби при децата, като детският зъболекар осигурява превенция при появата на болки в зъбите. </p>
         </div>

         <div class="box">
            <img src="images/icon-6.svg" alt="">
            <h3>Зъбни импланти</h3>
            <p>Висок стандарт на лечение със зъбни импланти на </u>най-ниски цени</u> </p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- process section starts  -->

   <section class="process">

      <h1 class="heading">Лекари</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/process-1.png" alt="">
            <h3>Козметична стоматология</h3>
            <p>Естетичната стоматология е изящно изкуство, създадено от козметични зъболекари, специализирали в проектирането на красиви усмивки.</p>
         </div>

         <div class="box">
            <img src="images/process-2.png" alt="">
            <h3>Детска стоматология</h3>
            <p>Детската стоматология се грижи за здравето на млечните зъби при децата, като детският зъболекар осигурява превенция при появата на болки в зъбите.</p>
         </div>

         <div class="box">
            <img src="images/process-3.png" alt="">
            <h3>Зъбни импланти</h3>
            <p>Висок стандарт на лечение със зъбни импланти</p>
         </div>

      </div>

   </section>

   <!-- process section ends -->

   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading"> Доволни клиенти </h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p> Исках да изразя своята благодарност за изключителните грижи, които получих. От момента, в който пристигнах, персоналът беше приветлив, внимателен и професионален. Те отделиха време да изслушат притесненията ми, да отговорят на въпросите ми и да ме накарат да се чувствам комфортно и спокойно.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ивайло Димитров</h3>
            <span>Доволен клиент</span>
         </div>

         <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>По време на престоя си бях впечатлен от чистотата и организацията на болницата и модерната медицинска технология, с която разполагат. </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Иван Иванов</h3>
            <span>Доволен клиент</span>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Възхитена съм от отделеното внимание и отношение!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Мария Иванова</h3>
            <span>Доволен клиент</span>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading">Запиши час</h1>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<p class="message">' . $message . '</p>';
            }
         }
         ?>
         <span>Име:</span>
         <input type="text" name="name" placeholder="Име" class="box" required>
         <span>Email :</span>
         <input type="email" name="email" placeholder="Email" class="box" required>
         <span>Телефон:</span>
         <input type="number" name="number" placeholder="Телефонен номер" class="box" required>
         <span>Дата за записване на час:</span>
         <input type="datetime-local" name="date" class="box" required>
         <input type="submit" value="Запази час" name="submit" class="link-btn">
      </form>

   </section>

   <!-- contact section ends -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Позвъни</h3>
            <p>+359-88-99432</p>
            <p>+359-89-33231</p>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Местоположение</h3>
            <p>Пловдив, бул. България 236</p>
         </div>

         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Работно време</h3>
            <p>0:00 - 24:00</p>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>stu2101681070@uni-plovdiv.bg</p>
           
         </div>

      </div>

      <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Vesela Apostolova-2101681070</span> </div>

   </section>

   <!-- footer section ends -->

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>