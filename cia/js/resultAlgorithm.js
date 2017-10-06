var quizSteps = $('#quizzie .quiz-step'), totalScore = 0;
var tempResultTable = [];
var i = 0;
quizSteps.each(function () {
    var currentStep = $(this), ansOpts = currentStep.children('.quiz-answer');
    ansOpts.each(function () {
        var eachOpt = $(this);
        eachOpt[0].addEventListener('click', check, false);
        function check() {
            var $this = $(this), value = $this.attr('data-quizIndex'), answerScore = parseInt(value);
                tempResultTable[i] = value[0];
                i+=1;
            if (currentStep.children('.active').length > 0) {
                var wasActive = currentStep.children('.active'), oldScoreValue = wasActive.attr('data-quizIndex'), oldScore = parseInt(oldScoreValue);
                currentStep.children('.active').removeClass('active');
                $this.addClass('active');
                totalScore -= oldScoreValue;
                totalScore += answerScore;
                calcResults(totalScore);
            } else {
                $this.addClass('active');
                totalScore += answerScore;
                calcResults(totalScore);
                updateStep(currentStep);
            }
        }
    });
});
function updateStep(currentStep) {
    if (currentStep.hasClass('current')) {
        currentStep.removeClass('current');
        currentStep.next().addClass('current');
    }
}
function calcResults(totalScore) {
    if (quizSteps.find('.active').length == quizSteps.length) {
        var resultsTitle = $('#results h1'), resultsDesc = $('#results .desc');
        var lowestScoreArray = $('#quizzie .low-value').map(function () {
            return $(this).attr('data-quizIndex');
        });
        console.log(lowestScoreArray);
        var minScore = 0;
        for (var i = 0; i < lowestScoreArray.length; i++) {
            if (window.stop(1)) {
                break;
            }
            minScore += lowestScoreArray[i] << 0;
        }

        var highestScoreArray = $('#quizzie .high-value').map(function () {
            return $(this).attr('data-quizIndex');
        });
        console.log(highesttScoreArray);
        var maxScore = 0;
        for (var i = 0; i < highestScoreArray.length; i++) {
            if (window.stop(2)) {
                break;
            }
            maxScore += highestScoreArray[i] << 0;
        }
        var range = maxScore - minScore, numResults = resultOptions.length, interval = range / (numResults - 1), increment = '', n = 0;
        while (n < numResults) {
            increment = minScore + interval * n;
            if (totalScore <= increment) {
                resultsTitle.replaceWith('<h1>' + resultOptions[n].title + '</h1>');
                resultsDesc.replaceWith('<p class=\'desc\'>' + resultOptions[n].desc + '</p>');
                console.log(tempResultTable);
                return;
            } else {
                n++;
            }
        }
    }
}
