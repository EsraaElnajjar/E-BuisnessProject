

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <title> contact us page </title>
        <link rel="stylesheet" href="contact us.css">
    </head>
    <body >
    <?php
if(isset($_POST['send'])){
    ?>
            <script>
       
            window.alert("thanks for your contact! we will contact with you soon");
        
             </script>
        <?php
}
?>
     <center>
    <form action="products.php" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" placeholder="Your Name" >
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="Your Name.plapla@email.com" >
  </div>
  
  <div class="elem-group">
    <label for="title">Reason For Contacting Us</label>
    <input type="text" id="title" name="email_title"  placeholder="Unable to Reset my Password">
  </div>
  <div class="elem-group">
    <label for="message">Write your message</label>
    <textarea id="message" name="visitor_message" placeholder="Say whatever you want." ></textarea>
  </div>
  <button type="submit" name="send">Send Message</button>
</form>
</center>

</body>
</html>