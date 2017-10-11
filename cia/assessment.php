<?php
include "header.php";
include 'config.php';
include "classes/Questions.php";
include "classes/Assessment.php";
$q = new Questions();
$result = $q->getQuestions($db);
$a = new Assessment();
$fetch = $a->fetchAnswerKey($db);
// require '../config.php';

$tempResultTable = array();
?>
<!-- Page Content -->
<link rel="stylesheet" type="text/css" href="css/assessment-styles.css">
<section id="services-1" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div id="quizzie">
            <h1>College Inquiry Assessment Test</h1>
            <p>Instructions:</p>
            <p>Your answers are irreversible so if you want to go back, please refresh the page to start over.</p>
            <p>Answer with utmost honesty as this will help you determine what college are you recommended by the system.</p>
            <hr class="bottom-line">
            <div class="question-div">
              <?php
              $i = 1;
              foreach($result as $key) {
                  if($i == 1)
                    echo '<ul class="quiz-step step <?= $i?> current">';
                  else {
                    echo '<ul class="quiz-step step <?= $i?>">';
                  }
                ?>
                  <li class="question">
                      <div class="question-wrap">
                              <h2><?= $key['questionText'] ?></h2>
                      </div>
                  </li>
                    <li class="quiz-answer low-value" data-quizIndex="0">
                        <div class="answer-wrap">
                            <p class="answer-text">0</p>
                        </div>
                    </li>
                    <li class="quiz-answer low-value" data-quizIndex="1">
                        <div class="answer-wrap">
                            <p class="answer-text">1</p>
                        </div>
                    </li>
                    <li class="quiz-answer high-value" data-quizIndex="2">
                        <div class="answer-wrap">
                            <p class="answer-text">2</p>
                        </div>
                    </li>
                    <li class="quiz-answer high-value" data-quizIndex="3">
                        <div class="answer-wrap">
                            <p class="answer-text">3</p>
                        </div>
                    </li>
                    <li class="quiz-answer high-value" data-quizIndex="4">
                        <div class="answer-wrap">
                            <p class="answer-text">4</p>
                        </div>
                    </li>
              </ul>
              <?php
              $i++;
            }
            ?>

            <ul id="results">
                      <li class="results-inner">
                          <p>Based on your answers, we recommend you to check out:</p>
                          <h1></h1>
                          <p class="desc"></p>
                      </li>
                  </ul>
          </div>
        </div>
    </div>
  </section>
<!-- /.container -->
<?php include "footer.php"; ?>
