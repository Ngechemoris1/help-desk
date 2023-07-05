<?php
// Include the database connection file
require_once "config.php";

// Get all the questions from the database
$sql = "SELECT * FROM questions";
$results = $dbh->query($sql);

// Create an array of questions
$questions = array();
foreach ($results as $row) {
  $question = array(
    "id" => $row["id"],
    "question" => $row["question"],
    "answers" => $row["answers"]
  );
  $questions[] = $question;
}

// Output the questions as JSON
echo json_encode($questions);
