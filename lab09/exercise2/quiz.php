<?php
$correct = 0;
$responses = [$_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"], $_POST["q6"]];
$answers = [2, "John Tyler", "Etho", "Christopher Eccleston", "Magnus Carlsen", "Yellow"];
$questions = ["What is 1+1?", "Who was the 10th president of the United States?", "Which Minecraft Youtuber has the longest running singleplayer vanilla world?", "Who initially played the Doctor for the 2005 revival of Doctor Who?", "Who is the current World Chess Champion (as of April 2021)?", "Which color is not on the flag of Norway?"];

for ($i=0; $i < count($responses); $i++) { 
	if ($responses[$i] == $answers[$i]) {
		$correct += 1;
	}

	echo "<p>Question " . ($i+1) . ": " . $questions[$i] . "<br>";
	echo "Your answer: " . $responses[$i] . "<br>";
	echo "Correct answer: " . $answers[$i] . "</p>";

}
echo "<p>You answered " . $correct . " questions correct. (Score: " . 100*$correct/count($responses) . "%)</p>"; 

?>