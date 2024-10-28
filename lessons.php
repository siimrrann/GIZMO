<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LessonsPage</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <!-- MODALS STYLING  ---------------------------------->
  <style>

.modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            position: relative;
            max-width: 80%;
            max-height: 80%;
            margin: auto;
            padding: 0;
        }
        .modal-content video {
            width: 100%;
            height: auto;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: white;
            font-size: 30px;
            cursor: pointer;
            z-index: 1001; 
        }
        /* Grid Styles */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px;
            padding: 40px;
        }
        .grid-item {
            text-align: center;
            cursor: pointer;
        }
        @media (max-width:480px){
            .grid-container{
                grid-template-columns: repeat(1, 1fr);
            }
        }
  </style>
  <body>

    <!-- Header Section --------------------------------------------------------------------------------------------------------------------------->
    <header class="header">
      <div class="logo">
        <img class="logo-img" src="images\gizmo_logo.png" alt="Gizmo Logo" >
      </div>
      
      <nav class="nav" >
        <a href="index.php"><img src="images\home.png" alt="Home" class="icon"><span>Home</span></a>
        <a href="parents.php"><img src="images\mother.png" alt="Parents" class="icon"><span>Parents</span></a>
        <a href="quiz.php"><img src="images\brain.png" alt="Quizzes" class="icon"><span>Quiz</span></a>
      </nav>
    </header>
  
    </header>

    <!-- Lessons Card Section ------------------------------------------------------------------------------------------------------------------>
    <section class="grid-container">
      <div class="grid-item" onclick="openVideo('animalsModal')">
        <h3 class="animals-title"></h3>
        <img src="images/ANIMALS.jpg" alt="Animals">
        <p>ANIMALS</p>
      </div>

      <div class="grid-item" onclick="openVideo('birdsModal')">
        <h3 class="birds-title"></h3>
        <img src="images/BIRDS.jpg" alt="Birds">
        <p>BIRDS</p>
      </div>

      <div class="grid-item" onclick="openVideo('geographyModal')">
        <h3 class="geography-title"></h3>
        <img src="images/GEOGRAPHY.jpg" alt="Geography">
        <p>GEOGRAPHY</p>
      </div>

      <div class="grid-item" onclick="openVideo('vehiclesModal')">
        <h3 class="vehicles-title"></h3>
        <img src="images/VEHICLES.jpg" alt="Vehicles">
        <p>VEHICLES</p>
      </div>

      <div class="grid-item" onclick="openVideo('logicModal')">
        <h3 class="logic-title"></h3>
        <img src="images/LOGIC BUILDING.jpg" alt="Logic Building">
        <p>LOGIC BUILDING</p>
      </div>

      <div class="grid-item" onclick="openVideo('scienceModal')">
        <h3 class="science-title"></h3>
        <img src="images/SCIENCE.jpg" alt="Science">
        <p>SCIENCE</p>
      </div>

      <div class="grid-item" onclick="openVideo('mathsModal')">
        <h3 class="maths-title"></h3>
        <img src="images/maths.jpg" alt="Maths">
        <p>MATHS</p>
      </div>

      <div class="grid-item" onclick="openVideo('artModal')">
        <h3 class="art-title"></h3>
        <img src="images/art.jpg" alt="Art">
        <p>ART</p>
      </div> 

      <div class="grid-item" onclick="openVideo('generalKnowledgeModal')">
        <h3 class="gk-title"></h3>
        <img src="images/gk.jpg" alt="General Knowledge">
        <p>GENERAL KNOWLEDGE</p>
      </div>
    </section>


    <div id="geographyModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('geographyModal')">&times;</span>
            <video controls>
                <source src="gizmovd/geography1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="vehiclesModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('vehiclesModal')">&times;</span>
            <video controls>
                <source src="gizmovd/vehicles1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="logicModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('logicModal')">&times;</span>
            <video controls>
                <source src="gizmovd/number2.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="scienceModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('scienceModal')">&times;</span>
            <video controls>
                <source src="gizmovd/science1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="mathsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('mathsModal')">&times;</span>
            <video controls>
                <source src="gizmovd/number1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="artModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('artModal')">&times;</span>
            <video controls>
                <source src="gizmovd/art1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="generalKnowledgeModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('generalKnowledgeModal')">&times;</span>
            <video controls>
                <source src="gizmovd/generalk1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div> -->



    <!-- MODALS FOR VIDEOS  ------------------------------------------------------------>
    <div id="animalsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('animalsModal')">&times;</span>
            <video controls>
                <source src="gizmovd/animals2.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="birdsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('birdsModal')">&times;</span>
            <video controls>
                <source src="gizmovd/birds1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="geographyModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('geographyModal')">&times;</span>
            <video controls>
                <source src="gizmovd/geography1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="vehiclesModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('vehiclesModal')">&times;</span>
            <video controls>
                <source src="gizmovd/vehicles1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="logicModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('logicModal')">&times;</span>
            <video controls>
                <source src="gizmovd/number2.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="scienceModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('scienceModal')">&times;</span>
            <video controls>
                <source src="gizmovd/science1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="mathsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('mathsModal')">&times;</span>
            <video controls>
                <source src="gizmovd/number1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="artModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('artModal')">&times;</span>
            <video controls>
                <source src="gizmovd/art1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div id="generalKnowledgeModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('generalKnowledgeModal')">&times;</span>
            <video controls>
                <source src="gizmovd/generalk1.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <!-- Footer Section ----------------------------------------------------------------------------------------------------------------------->
    <footer class="footer">
      <div id="icons-link">
        <a href="index.php"><img src="images/home.png" alt="home"></a>
        <a href="parents.php"><img src="images/mother.png" alt="parens"></a>
        <a href="quiz.php"><img src="images/brain.png" alt="quiz"></a>
      </div>

      <div id="text">Made by Simran Yadav</div>
    </footer>

    <!-- SCRIPTING FOR VIDEO MODALS  --------------------------------------------->
    <script>
        function openVideo(modalId) {
            document.getElementById(modalId).style.display = "flex";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Close modal when clicking outside of the video
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    closeModal(modal.id);
                }
            });
        }
    </script>
     
  </body>
</html>