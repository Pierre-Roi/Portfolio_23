<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz_langage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="start_btn"><button>Commencer le Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Quelques règles de ce quiz </span></div>
        <div class="info-list">
            <div class="info">1. Vous n'aurez que <span>15 secondes</span> pour chaque question.</div>
            <div class="info">2. Une fois que vous avez sélectionné votre réponse, elle ne peut pas être annulée.</div>
            <div class="info">3. Vous ne pouvez sélectionner aucune option une fois que le temps s'est écoulé.</div>
            <div class="info">4. Vous ne pouvez pas quitter le Quiz pendant que vous jouez.</div>
            <div class="info">5. Vous amorcez des points sur la base de vos bonnes réponses.</div>
        </div>
        <div class="buttons">
            <button class="quit">Sortir</button>
            <button class="restart">Continuer</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Super quizz</div>
            <div class="timer">
                <div class="time_left_txt">Temps restant</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                
            </div>
            <div class="option_list">
              
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
               
            </div>
            <button class="next_btn">Suivant</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Vous avez terminé le Quiz !</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Rejouer</button>
            <button class="quit">Quitter</button>
        </div>
    </div>

    <script src="js/questions.js"></script>
    <script src="js/script.js"></script>

</body>
</html>