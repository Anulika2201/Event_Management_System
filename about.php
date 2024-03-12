 
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
  
header.masthead:before {
    content: "";
    background: url("admin/assets/uploads/event.jpg");
    background-position:center;
    background-size: cover;
    background-repeat: no-repeat;
    position: absolute;
    width: calc(100%);
    /* height: calc(100%); */
    top: 0;
    height: 60vh;
    z-index: 1;
    font-family: 'Courgette', cursive;
}

.about{
    color:black !important;
    font-weight:bolder;
    font-size: 40px;
    font-family: 'Courgette', cursive;
    text-decoration: underline;
    background: none;
}

.page-section {
    padding:40px;
    background:black;
    color:white ;
    font-family:'Courgette', cursive;
}

h3 , strong{
    color: #A076F9
}

 </style>
 <!-- Masthead-->
        <header class="masthead home">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" >
                    	 <h1 class="about ">About Us</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

    <section class="page-section">
        <div class="container">
    <!-- <?php echo html_entity_decode($_SESSION['system']['about_content']) ?>         -->
    <?php
        // echo "<div style='background-color: #f4f4f4; padding: 20px;'>";
        echo "<p >Welcome to Velvet Dreams Events, your trusted partner in event management and celebration planning. We are passionate about creating extraordinary moments that last a lifetime.</p>";

        echo "<h3 >Our Mission</h3>";
        echo "<p >At Velvet Dreams Events, our mission is to transform your dreams and ideas into remarkable, one-of-a-kind events. We strive to deliver exceptional experiences, tailored to your unique preferences and needs. Whether it's a grand wedding, a lively birthday celebration, an elegant engagement party, or any special occasion, we are here to make it unforgettable.</p>";

        echo "<h3 >Why Choose Us?</h3>";
        echo "<ul >";
        echo "<li><strong>Experienced Team:</strong> Our team of dedicated professionals brings years of experience and expertise to every event. We are committed to precision, creativity, and attention to detail.</li>";
        echo "<li><strong>Personalized Service:</strong> We understand that every event is unique. That's why we work closely with you to understand your vision and turn it into reality.</li>";
        echo "<li><strong>Innovation:</strong> We stay up-to-date with the latest trends and technologies in event planning to ensure your celebration is not only memorable but also on the cutting edge.</li>";
        echo "<li><strong>Seamless Execution:</strong> Leave the logistics to us. We handle everything from venue selection and décor to catering and entertainment, allowing you to relax and enjoy your special day.</li>";
        echo "</ul>";

        echo "<h3 >Our Services</h3>";
        echo "<ul >";
        echo "<li><strong>Weddings:</strong> Your love story deserves a fairy-tale wedding. Let us create the perfect backdrop for your special day.</li>";
        echo "<li><strong>Engagements:</strong> Celebrate the start of your journey together with an engagement party that reflects your style and love.</li>";
        echo "<li><strong>Birthdays:</strong> Whether it's a milestone birthday or a themed party, we make every year feel extraordinary.</li>";
        echo "<li><strong>Dance Events:</strong> Get ready to dance the night away! Our dance events are filled with energy and excitement.</li>";
        echo "</ul>";

    ?>



   </div>
</section>