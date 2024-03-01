
<header class="header">


   <div class="flex">

      <a href="#" class="logo">Ice Cream Parlour</a>

      <nav class="navbar">
         <a href="index.php">add products</a>
         <a href="products.php">view products</a>
      </nav>


      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
      <a href="#" id="chatIcon" class="chatbot-link">Chatbot</a>
      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
<!-- Chatbot iframe -->
<div id="chatbotContainer" style="display: none;">
<button class="close-btn" onclick="closeChatbot()">Close</button>
<iframe src='https://webchat.botframework.com/embed/sneha-chatbot-bot?s=QRW5r16orRY.VOCxOzBBJuoCoy_77jJ63VPyzCJIzXFBOlyQl8kB89w'  style='min-width: 300px; width: 100%; min-height: 500px;'></iframe>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var chatIcon = document.getElementById('chatIcon');
        var chatbotContainer = document.getElementById('chatbotContainer');

        chatIcon.addEventListener('click', function() {
            // Toggle iframe visibility
            chatbotContainer.style.display = (chatbotContainer.style.display === 'none') ? 'block' : 'none';
        });
    });
    
</script>
<script>
    function closeChatbot() {
        document.getElementById('chatbotContainer').style.display = 'none';
    }
</script>
