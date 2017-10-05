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
                    <li class="quiz-answer low-value" data-quizIndex="2" ID='0'>
                        <div class="answer-wrap">
                            <p class="answer-text">0</p>
                            <?php
                              $answer = 0;
                            ?>

                        </div>
                    </li>
                    <li class="quiz-answer high-value" data-quizIndex="4" ID='1'>
                        <div class="answer-wrap">
                            <p class="answer-text">1</p>
                            <?php
                              $answer = 1;
                            ?>
                        </div>
                    </li>
                    <li class="quiz-answer 2-value" data-quizIndex="6" ID='2'>
                        <div class="answer-wrap">
                            <p class="answer-text">2</p>
                            <?php
                              $answer = 2;
                            ?>
                        </div>
                    </li>
                    <li class="quiz-answer 3-value" data-quizIndex="8" ID='3'>
                        <div class="answer-wrap">
                            <p class="answer-text">3</p>
                            <?php
                              $answer = 3;
                            ?>
                        </div>
                    </li>
                    <li class="quiz-answer 4-value" data-quizIndex="10" ID='4'>
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
            <ul id="results">
                      <li class="results-inner">
                          <p>Your result is:</p>
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
