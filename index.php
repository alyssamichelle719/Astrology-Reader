<!DOCTYPE html>
<html>
  
  <head>
    
    <title>Astrological Signs Program - PHP Version</title>

    <style>
      <?php include "style.css"; ?>
    </style>
    
  </head>
  
  <body>
    
    <main>
      
      <?php echo "<h1>Welcome to Alyssa's Astrological Signs Program!</h1>"; 
  
      echo "<p>Did you know there are three types of astrological signs that define your personality? They are your sun sign, moon sign, and rising sign!</p>"; 

      echo "<p>Your sun sign is your core identity - the basis of who are you.</p>";
  
      echo "<p>Your moon sign is said to represent your inner self - your subconcious self.</p>"; 
  
      echo "<p>Your rising sign is your external self - the mask that gets put out when people meet you.</p>";

      ?>
  
      <!-- Start the Program -->
      
      <?php echo "<h3>Which of these signs would you like to learn about today?</h3>"; ?>
          
        <form method='get'>
          <input type = 'submit' id='submit' value ='Sun Sign' name = 'sun'>
          <input type = 'submit' id='submit' value ='Moon Sign' name = 'moon'>
          <input type = 'submit' id='submit' value ='Rising Sign' name='rising'>
        </form>

      <!-- Begin Astro Reader -->
      
      <?php
  
        if(isset($_GET['sun'])) {
              sunSign();
          }
        else if(isset($_GET['moon'])) {
              moonSign();
          }
        else if(isset($_GET['rising'])) {
              risingSign();
          }
  
  
        // Sun Sign
        function sunSign(){
          
          echo "<h2>You want to learn more about your sun sign!</h2>";
          echo "<p>Your sun sign is your core identity and probably the sign that you are most familiar with as it is your zodiac!</p>";
  
          echo "<p>Astrological Signs are as follows:</p>
                  <ul>
                    <li>Aries: March 21 to April 19</li>
                    <li>Taurus: April 20 to May 20</li>
                    <li>Gemini: May 21 to June 21</li>
                    <li>Cancer: June 22 to July 22</li>
                    <li>Leo: July 23 to Agust 22</li>
                    <li>Virgo: August 23 to September 22</li>
                    <li>Libra: September 23 to October 23</li>
                    <li>Scorpio: October 24 to November 21</li>
                    <li>Sagittarius: November 22 to December 21</li>
                    <li>Capricorn: December 22 to January 19</li>
                    <li>Aquarius: January 20 to February 18</li>
                    <li>Pisces: February 19 - March 20</li>
                  </ul>";
  
          echo "<p>Click on your sign below to learn more.</p>";
  
          signInput();

          echo "<p>To restart the program and learn about a new sign, simply press which one you want to learn about above!</p>";
          
        }
     
  
        // Moon Sign
        function moonSign(){
          
          echo "<h2>You want to learn more about your moon sign!</h2>";
          echo "<p>Your moon sign represents your inner self. It tells how you deal with emotions and how you relate to others and their emotions.</p>";
          echo "<p>Click on your sign below to learn more.</p>";
  
          signInput();

          echo "<p>To restart the program and learn about a new sign, simply press which one you want to learn about above!</p>";
        }
  
      
        // Rising Sign
        function risingSign(){
          
          echo "<h2>You want to learn more about your rising sign!</h2>";
          echo "<p>Your Rising Sign, also known as an Antecdent, is the social mask you put on when you're with other peopole.</p>";
          
          echo "<p>Click on your sign below to learn more.</p>";
  
          signInput();

          echo "<p>To restart the program and learn about a new sign, simply press which one you want to learn about above!</p>";
        }
  
        // Function with Input button for all signs and results
        function signInput(){
  
          echo "<form method='post'>
            <input type = 'submit' id='submit' value ='Aries' name = 'aries'>
            <input type = 'submit' id='submit' value ='Taurus' name = 'taurus'>
            <input type = 'submit' id='submit' value ='Gemini' name = 'gemini'>
            <input type = 'submit' id='submit' value ='Cancer' name = 'cancer'>
            <input type = 'submit' id='submit' value ='Leo' name = 'leo'>
            <input type = 'submit' id='submit' value ='Virgo' name = 'virgo'>
            <input type = 'submit' id='submit' value ='Libra' name = 'libra'>
            <input type = 'submit' id='submit' value ='Scorpio' name = 'scorpio'>
            <input type = 'submit' id='submit' value ='Saggittarius' name = 'sag'>
            <input type = 'submit' id='submit' value ='Capricorn' name = 'cap'>
            <input type = 'submit' id='submit' value ='Aquarius' name = 'aquarius'>
            <input type = 'submit' id='submit' value ='Pisces' name = 'pisces'>
          </form>";

          // Results
          if(isset($_POST['aries'])){
              echo "<h2>Aries</h2>
                    <p>You know what you want, and you are not afraid to ask for it.</p>";
            }
          else if(isset($_POST['taurus'])){
              echo "<h2>Taurus</h2>
                    <p>You are a very grounded person and enjoy the little things - good food, good drink, and good experiences.</p>";
            }
          else if(isset($_POST['gemini'])){
              echo "<h2>Gemini</h2>
                    <p>You are constantly thinking about what they’re going to say next and analysing everything, coming up with new ideas and eager to share them. You're chatty, amicable, and easy to get along with! A zesty personality, you may be somewhat of an entertainer but also flaky and indecisive.</p>";
            }
          else if(isset($_POST['cancer'])){
              echo "<h2>Cancer</h2>
                    <p>You tend to be highly in touch with your emotions. Cancers love to be at home, nice and comfortable and have a strong routine that you like to stick to. </p>";
            }
          else if(isset($_POST['leo'])){
              echo "<h2>Leo</h2>
                    <p>You are the star of the show and the lover of the limelight. You love the attention being on yourself, but you also love to entertain others and make sure everyone is happy.</p>";
            }
          else if(isset($_POST['virgo'])){
              echo "<h2>Virgo</h2>
                    <p>You are a very practical person, with a lot of sense and flexibility. You're not as out with it as a Leo would be, more on the side of being quiet.</p>";
            }
          else if(isset($_POST['libra'])){
              echo "<h2>Libra</h2>
                    <p>You are very concerned with your relationships towards others. Libra is ruled by Venus, therefore you seem to always be in search for balance, peace, and harmony.</p>";
            }
          else if(isset($_POST['scorpio'])){
              echo "<h2>Scorpio</h2>
                    <p>You are not afraid to delve into your own darkness and rise up from the ashes a new person. Your ambition is admirable, but be sure not to become obsessive over it.</p>";
            }
          else if(isset($_POST['sag'])){
              echo "<h2>Saggitarius</h2>
                    <p>You are the optimist. You love to explore far and wide and always seem to be on the path to self-improvement.</p>";
            }
          else if(isset($_POST['cap'])){
              echo "<h2>Capricorn</h2>
                    <p>You are hard working, determined, motivated, practical, and reliable. You will not stop until you reach your goal and accomplish it.</p>";
            }
          else if(isset($_POST['aquarius'])){
              echo "<h2>Aquarius</h2>
                    <p>You very much like to beat to your own drum. The opinions of others don't bother you too much since you like to just do your own thing.</p>";
            }
          else if(isset($_POST['pisces'])){
              echo "<h2>Pisces</h2>
                    <p>You are a big dreamer and very in touch with your emotions. You have an ability to adapt to anything that surrounds you and are empathetic.</p>";
            }
        }
      ?>
    </main>
    
  </body>
  
</html>