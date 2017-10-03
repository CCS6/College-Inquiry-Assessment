<?php
include "header.php";
include 'config.php';
include "classes/Questions.php";
$q = new Questions();
$result = $q->getQuestions($db);


// require '../config.php';



?>
<!-- Page Content -->
<link rel="stylesheet" type="text/css" href="css/assessment-styles.css">
<section id="services-1" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div id="quizzie">
            <h1>College Inquiry Assessment Test</h1>
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

                              <p><?= $key['questionText'] ?></p>

                      </div>
                  </li>
                    <li class="quiz-answer low-value" data-quizIndex="2">
                        <div class="answer-wrap">
                            <p class="answer-text">0</p>
                            <?php
                              $answer = 0;
                            ?>

                        </div>
                    </li>
                    <li class="quiz-answer high-value" data-quizIndex="4">
                        <div class="answer-wrap">
                            <p class="answer-text">1</p>
                            <?php
                              $answer = 1;
                            ?>
                        </div>
                    </li>
                    <li class="quiz-answer 2-value" data-quizIndex="6">
                        <div class="answer-wrap">
                            <p class="answer-text">2</p>
                            <?php
                              $answer = 2;
                            ?>
                        </div>
                    </li>
                    <li class="quiz-answer 3-value" data-quizIndex="8">
                        <div class="answer-wrap">
                            <p class="answer-text">3</p>
                            <?php
                              $answer = 3;
                            ?>
                        </div>
                    </li>
                    <li class="quiz-answer 4-value" data-quizIndex="10">
                        <div class="answer-wrap">
                            <p class="answer-text">4</p>
                            <?php
                              $answer = 4;
                            ?>
                        </div>
                    </li>
              </ul>
              <?php
              $i++;
            }
            ?>
          </div>
        </div>
    </div>
  </section>
<!-- /.container -->
<?php include "footer.php"; ?>
