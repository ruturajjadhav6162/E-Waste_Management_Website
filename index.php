<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>

    <header>
        <img class="e" src="e-waste.png" alt="E-Waste">
        <nav>
            <a href="home.html" class="active">Home</a>
            <a href="profile.php">Profile</a>
            <a href="https://www.google.com/maps/place/Ecoreco+-+E-Waste+Recycling,+Electronic+Waste+Recyclers/@19.116249,72.856406,17z/data=!4m6!3m5!1s0x3be7c839617f7bdf:0x2366617399af861d!8m2!3d19.1162488!4d72.8564058!16s%2Fg%2F1pty7rgnr?hl=en&entry=ttu">Locate Us</a>
            <a href="about.html">About US</a>  
            <a href="logout.php" id="logout" ><u>Log out</u></a> 
        </nav>
    </header>

    <section class="home">
        <img src="assets/mount2.png" class="mount2">
        <img src="assets/mount1.png" class="mount1">
        <img src="assets/bush2.png" class="bush2">

        <h1 class="title">E-Waste</h1>
        <h1 class="man">MANAGEMENT</h1>
        <img src="assets/bush1.png" class="bush1">
        <img src="assets/leaf2.png" class="leaf2">
        <img src="assets/leaf1.png" class="leaf1">
    </section>

    <section class="about">
           <!-- Intro -->
           <div class="container-intro">
             <div class="e-logo">
             <img src="e-waste.png"  alt="logo">
             </div>
             <div class="intro-msg">
               <p>Welcome to E-waste, where we're committed to responsible e-waste management. Discover educational resources, locate e-waste collection events, and earn rewards for your contributions to environmental sustainability. </p> <p>Join us in our mission to reduce electronic waste and create a cleaner, greener future for all.We're dedicated to raising awareness, facilitating recycling, and rewarding contributions to environmental sustainability. Join us in our mission to make a positive impact on the planet by properly disposing of electronic waste and promoting a cleaner, greener future.</p>
             </div>
           </div>
           <div class="member-container">
             <div class="member-section">
               <h1>
                 <span class="mem1">100+</span><br>Clients Served</h1>
             </div>
             <div class="member-section">
               <h1>
                 <span class="mem2">5+</span><br>Years of Expirence
               </h1>
             </div>
             <div class="member-section">
               <h1>
                 <span class="mem3">10+</span><br>Awards
               </h1>
             </div>
             <div class="member-section">
               <h1>
                 <span class="mem3">10000 kgs+</span><br>E-Waste Recycled
               </h1>
             </div>
           </div>


           <h1 class="heading1">Educational Resources for E-waste Disposal</h1>   
           <div class="container-yt">
            <a href="https://www.youtube.com/watch?v=MQLadfsvfLo" target="_blank"><img class="thumbnail" src="https://img.youtube.com/vi/MQLadfsvfLo/hqdefault.jpg"></a>
            <a href="https://www.youtube.com/watch?v=ApdkhWd7SfQ" target="_blank"><img class="thumbnail" src="https://img.youtube.com/vi/ApdkhWd7SfQ/hqdefault.jpg"></a>
            <a href="https://www.youtube.com/watch?v=-uyIzKIw0xY" target="_blank"><img class="thumbnail" src="https://img.youtube.com/vi/-uyIzKIw0xY/hqdefault.jpg"></a>
            <a href="https://www.youtube.com/watch?v=131WJUdNJ2Q" target="_blank"><img class="thumbnail" src="https://img.youtube.com/vi/131WJUdNJ2Q/hqdefault.jpg"></a>
            
           </div>
         
           

           <h1 class="heading">Our 5 Steps WEEE Recycling Process</h1>
           <div class="weee-recycling-process">
           
            <ol>
              <li><h3>Sourcing & Collection</h3>
                <p>We procure E-waste from various sources, including businesses and households.</p></li>
              <li><h3>Sorting & Grading</h3>
              <p>We weigh and segregate E-waste for easy retrieval, determining whether repair, refurbishment, or remarketing is feasible. Reusable components are salvaged.</p></li>
              <li><h3>Dismantling</h3>
              <p>End-of-life equipment is carefully dismantled into various fractions like plastic, glass, metals, cables, and PCBs, to simplify WEEE recycling process.</p></li>
              <li><h3>
                Shredding</h3>
              <p>Equipment is shredded into smaller pieces, separating metals from plastic and enabling the recovery of valuable materials such as aluminum, copper, and precious metals.</p></li>
              <li><h3>Disposal</h3>
              <p>We ensure proper disposal of hazardous elements with the help of CHWTSDF, assuring a responsible end to the recycling process.</p></li>
            </ol>
          </div>
          <h1 class="heading">Advantages of E-Waste Management Data Destruction Services</h1>
          <div class="weee-recycling-process">
            <ol>
              <li><h3>
                Unparalleled Data Security</h3>
                <p>Our services ensure 100% data destruction, leaving no room for data recovery.</p></li>
              <li><h3>
                On-the-Spot Video Recording</h3>
              <p>For complete transparency and security, we record the entire data destruction process at your location.</p></li>
              <li><h3>Audit-Ready Compliance</h3>
              <p>Our services align seamlessly with industry and regulatory requirements, ensuring you are always audit-ready.</p></li>
              <li><h3>
                Certificate of Data Destruction</h3>
              <p>We provide you with a formal certificate as documented proof of our secure data destruction process.</p></li>
            </ol>
          </div>
          

          <h1 class="heading">Duties and Obligations of PIBOs</h1>
          <div class="about-us-container1">
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="a.png" alt="">
                <h3>Meeting Recycling Targets</h3>
                <p>The Rules have introduced stringent annual E-waste recycling targets that PIBOs are mandated to achieve. These targets are a pivotal force in diverting electronic waste away from landfills and advancing the cause of responsible recycling.</p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="b.png" alt="">
                <h3>Ensuring Safe Disposal</h3>
                <p>PIBOs bear the vital responsibility of ensuring that electronic waste is disposed of in a manner that aligns with environmentally sound practices. This commitment to safe disposal not only mitigates potential harm to the environment but also safeguards public health, setting the stage for a more sustainable future.
                  </p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="c.png" alt="">
                <h3>Managing Hazardous Materials</h3>
                <p>Many electronic products harbor hazardous components, including batteries and specific chemicals. It is incumbent upon PIBOs to oversee the proper handling and disposal of these potentially harmful materials. By doing so, they play a pivotal role in reducing risks and environmental impact.</p>
              </div>
            </div>
          </div>
           


          <h1 class="heading">Key Steps to a Circular Economy in India’s Electronics Sector</h1>
          <div class="about-us-container1">
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="d.png" alt="">
                <h3>A Nationwide Network for
                  Sustainable Growth</h3>
                <p>The crux of our approach lies in the establishment of a comprehensive reverse logistics network that spans across the nation. This network is engineered to efficiently collect, transport, and process end-of-life electronic goods. By seamlessly connecting various regions it can be ensured that that E-waste is managed in an environmentally responsible manner, while also fostering economic growth.</p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="e.png" alt="">
                <h3>Enhance E-waste
                  Collection & Recycling</h3>
                <p>
                  <p>The cornerstone of a circular economy for electronics is a robust E-waste collection and recycling infrastructure. India must establish more E-waste collection centers and state-of-the-art recycling facilities across the nation. Moreover, educating consumers about the significance of proper E-waste disposal and recycling is essential to making this system efficient and sustainable.
                  </p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="f.png" alt="">
                <h3>Promote Recycled
                  Materials</h3>
                <p>Electronics manufacturers should wholeheartedly embrace the use of recycled materials in the production of new devices. This can be catalyzed by creating a vibrant market for recycled materials and providing financial incentives for manufacturers to integrate them into their products.</p>
              </div>
            </div>
       
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="g.png" alt="">
                <h3>Raise Awareness &
                  Education</h3>
                <p>Public education campaigns should highlight the significance of proper E-waste disposal and the tangible benefits of recycling. By simplifying the E-waste recycling process and making it more accessible to consumers, India can encourage responsible disposal practices.</p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="h.png" alt="">
                <h3>Support Government Initiatives</h3>
                <p>The Indian government has already taken significant steps to promote a circular economy for electronics through regulations such as the E-waste Rules. Businesses and consumers can support these initiatives by adhering to these rules, endorsing the use of recycled electronics products, and ensuring the responsible recycling of E-waste.
                  </p>
              </div>
            </div>
          
          </div>
   
          <h1 class="heading">Ensuring Security and Confidentiality</h1>
          <div class="about-us-container1">
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="i.png" alt="">
                <h3>Protection at Its Core</h3>
                <p>
                  Our commitment to security begins with the very core of our operations. When it comes to data devices, whether they be mobile devices, hard disks, or proprietary equipment, we leave no room for compromise. Recycling on Wheels-SmartER employs state-of-the-art shredding technology, ensuring that data-bearing components are securely destroyed on the spot.</p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="j.png" alt="">
                <h3>
                  Eliminating Data Leakage Risks</h3>
                  <p>Data leakage can have far-reaching consequences, both for organizations and individuals. Recycling on Wheels-SmartER takes a proactive stance against such risks. By shredding data devices immediately, we eliminate any possibility of sensitive information falling into the wrong hands. This practice guarantees that data remains confidential and protected.
                  </p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="k.png" alt="">
                <h3>Upholding the Highest Standards</h3>
                <p>We understand that when it comes to security and confidentiality, there can be no compromises. Recycling on Wheels-SmartER is dedicated to upholding the highest industry standards. Our processes and protocols have been meticulously crafted to ensure that every data-bearing component is treated with the utmost care and security.</p>
              </div>
            </div>
       
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="l.png" alt="">
                <h3>Trustworthy Handling</h3>
                <p>Public education campaigns should highlight the significance of proper E-waste disposal and the tangible benefits of recycling. By simplifying the E-waste recycling process and making it more accessible to consumers, India can encourage responsible disposal practices.</p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="m.png" alt="">
                <h3>
                  A Secure Environment for All</h3>
                <p>Security isn’t just about protecting data; it’s about creating a secure environment for all stakeholders. Recycling on Wheels-SmartER ensures that every aspect of the E-waste management process is carried out with the utmost security in mind. This commitment extends not only to data security but also to the overall safety and confidentiality of our operations.
                  </p>
              </div>
            </div>
            
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="n.png" alt="">
                <h3>Promote Recycled
                  Materials</h3>
                <p>Electronics manufacturers should wholeheartedly embrace the use of recycled materials in the production of new devices. This can be catalyzed by creating a vibrant market for recycled materials and providing financial incentives for manufacturers to integrate them into their products.</p>
              </div>
            </div>
       
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="o.png" alt="">
                <h3>
                  Your Trusted Partner</h3>
                <p>In an era where data is invaluable, Recycling on Wheels-SmartER is your trusted partner in ensuring that sensitive equipment is handled with the highest levels of security and confidentiality. We provide peace of mind, knowing that your data remains protected throughout the recycling process.</p>
              </div>
            </div>
          
            <div class="about-us-section1">
              <div class="about-us-content1">
                <img src="o.png" alt="">
                <h3>
                  Security and Confidentiality Redefined</h3>
                <p>Recycling on Wheels-SmartER redefines the standards for security and confidentiality in E-waste management. With us, you can be certain that your sensitive equipment is in the safest hands, and your data remains secure from start to finish.</p>
              </div>
            </div>
          </div>



           <!-- Testimonials -->
           <h1 class="heading">Testimonials</h1>
           <div class="card-container">
            <div class="card" id="card1">
              <div class="msg1">
                <p>Thank you for providing such a convenient and reliable platform for responsible disposing of my old electronics.</p>
                <p>Keep up the great work!</p>
                <h4>Aakash Hingrajiya</h4>
              </div>
              <div class="stars">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
              </div>
            </div>
            <div class="card" id="card2">
              <div class="msg2">
                <p>I just wanted to express my gratitude for the rewards program. It's a great incentive to recycle my e-waste and contribute to environmental sustainability.</p>
                <p>Kudos to your team!</p>
                <h4>Ruturaj Jadhav</h4>
              </div>
              <div class="stars">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
              </div>
            </div>
            <div class="card" id="card3">
              <div class="msg3">
                <p>I just received my badge for reaching a certain milestone in e-waste recycling, and I couldn't be happier! It's a small gesture, but it means a lot.</p>
                <p>Thank you for recognizing and rewarding our efforts.</p>
                <h4>Satyam Yadhav</h4>
              </div>
              <div class="stars">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
              </div>
            </div>
            <div class="card" id="card4">
              <div class="msg4">
                <p>Thank you for creating a community around e-waste management. It's inspiring to see so many people coming together to make a positive difference for the planet.</p>
                <p>Keep up the fantastic work!</p>
                <h4>Shreyash Despande</h4>
              </div>
              <div class="stars">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
              </div>
            </div>
          </div>
           
           

     <footer>
        <div class="footer-section">
            <h3 class="heading">Connect With Us</h3>
            <div class="card1">
              <a href="https://www.instagram.com/e_waste_management?igsh=MTl2bXQwdWthdmhoMA==" class="socialContainer containerOne">
                <svg class="socialSvg instagramSvg" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path> </svg>
              </a>
              <a href="#" class="socialContainer containerTwo">
                <svg class="socialSvg twitterSvg" viewBox="0 0 16 16"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path> </svg>              </a>
              <a href="https://in.linkedin.com/company/e-waste-management" class="socialContainer containerThree">
                <svg class="socialSvg linkdinSvg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
              </a>
              <a href="#" class="socialContainer containerFour">
                <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
              </a>
            </div>             
          </div>
     </footer> 
    </section>

    <script src="index.js"></script>

</body>
</html>