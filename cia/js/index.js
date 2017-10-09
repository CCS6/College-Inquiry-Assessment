var resultOptions = [
    {
        title: 'You should be a Software Dev!',
        desc: '<p>These are tools for making other tools! Software is huge and slick and complicated. Hope youre prepared to keep updating this for months or years. The work is very focused and youll spend a lot of time staring at your computer screen.'
    },
    {
        title: 'You should be a Backend Dev!',
        desc: '<p>Backend Development involves setting up databases and figuring out how to best manipulate your data to create websites and applications.</p>'
    },
    {
        title: 'You should be a Frontend Dev!',
        desc: '<p>Frontend Developers work with Javascript, HTML, and CSS to make the wireframe created by the backend developers palettable to human eyes and hands. Its similar to UX/UI.</p>'
    },
    {
        title: 'You Should Be a UX Designer!',
        desc: '<p>Developers dont like making interfaces. You do. Take their (probably ugly) output and make something that users will not only use, but will WANT to use.</p>'
    },
    {
        title: 'You should be a PM!',
        desc: '<p>Theres not a lot of actual coding, so youll need to know more theory than skills. For large projects, though, youre incredibly important because youll be organizing the code monkeys (developers) and ensuring on-time delivery. You focus on the big picture but keep your eye on the deadlines. Youre good at nuturing relationships with clients.</p>'
    }
];
var quizSteps = $('#quizzie .quiz-step'), totalScore = 0;
var tempResultTable = [];
var i = 0;
var highArray = [],maxArray = [], finalMax = [];
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
                $.ajax({
                    url: 'actions/fetchAnswerKey.php',
                    postType: 'json',
                    type: 'post',
                    data: {'temp':tempResultTable},
                    success:function(data){
                        var k = 0;
                        var result = $.parseJSON(data);
                        for(i = 0; i < result.length;i++){                //comparing user-input answer with the given answer key
                            var l = 0
                            for(var j = 0;j < result[i].length;j++){
                                if(tempResultTable[j] == result[i][j]['answer'])
                                    l+=1;

                            }
                            highArray[i] = l;
                        }
                        var j = 0
                        for(var i = 0;i < result.length;i++){             //pointing j to the highest value and save it to array
                            if(highArray[j] <= highArray[i]){
                                j = i;
                                maxArray[j] = highArray[i];
                            }
                            else
                                maxArray[i] = 0;
                        }
                        var m = 0;
                        for(k;k <= j;k++){                               //placing the index with the highest marks to the final array
                            if (maxArray[k] == maxArray[j]){
                                finalMax[m] = k+1;
                                m++;
                            }

                        }
                        // console.log(JSONstr);
                        // console.log(maxArray);
                        // console.log(finalMax);
                        console.log(tempResultTable);
                        var JSONstr = JSON.stringify(finalMax);
                        $.ajax({
                            url: 'actions/addingRecords.php',
                            type: 'post',
                            dataType: 'json',
                            data: {'recCollege': JSONstr,'tempResultTable':JSON.stringify(tempResultTable)},
                            success:function(data){
                                resultsDesc.replaceWith('<h1>' + data[0]['recCollege'] + '</h1>');
                                //  resultsDesc.replaceWith('<p class=\'desc\'>' + resultOptions[n].desc + '</p>');
                            }
                        });
                    }
                });
                return;
            } else {
                n++;
            }
        }
    }
}
