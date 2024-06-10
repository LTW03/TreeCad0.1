<script>
        window.history.forward();
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    <link rel="stylesheet" href="CSS_folder/Exercise_page.css">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <script src="JavaScript_folder/Exam_A.js"></script>
</head>
<body>
    <div class="Question_content">
        <h1>Exam A</h1>
        <p>Time left: <span id="timer">45m 0s</span></p>
        <form id="Exam_Form" action="Exam_A_result.php" method="post">
            <?php include('Exam_A_Fetch_Q.php'); ?>
            <input id="submit_exam_Btn" type="submit" value="Submit" class="submit_btn" >
        </form>
    </div>
</body>
</html>
