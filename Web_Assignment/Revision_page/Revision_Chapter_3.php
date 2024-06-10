<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS_folder/general.css">
    <link rel="stylesheet" href="../CSS_folder/Tutorial_page.css">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <?php include('../Revision_header.php');?>
        <div class="topping">

            <!--Above don't touch -->
            <div class="course-title-num">
                <p class="unit-num">3.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Logic Reasoning</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>


        <div class="content_container">
            <div class="subtitle">
                <p>3.1 Statements</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="360" src="https://www.youtube.com/embed/s-UvXryqBjU?si=jJ5nfDvzHXXeiNPi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    A statement is a sentence of which the truth value canbe determined, 
                    <br>
                    that is either true of false, but not both.
                </p>
                <ul>
                    <li>Qeuastions, explanation and cammand sentences are not statements.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(The truth value cannot be determined)
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>
                    Determine whether each of the following sentences is a statement or not. Give the reason.
                </p>
                <ul>
                    <li>
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>+</mo><mn>3</mn><mo>=</mo><mn>8</mn></math>
                        (Statement, it is a false statement).
                    </li>
                    <li>The Pentagon has 5 sides (Statement, it is a true statement).</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Tips</p>
            </div>
            <div class="text">
                <p>Determine whether the following mathematics statement are true or false.</p>
                <p>Explain if the statement is false.</p>
                <ul>
                    <li>3 is a prime number (true statement)</li>
                    <li>
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>11</mn><mo>&gt;</mo><mo>-</mo><mn>8</mn></math>
                        (false statement) because -8 is bigger than -11
                    </li>
                    <li>5 is a factor to 8 (false statement). 
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;5 cannot be a factor to 8.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Factors of 5 are number which on dividing 5 leave no remainder.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Since 5 is a prime number, it has only two factor.
                    </li>
                </ul>
                <p class="underline">
                    <strong>Negation a statement</strong>
                </p>
                <ul>
                    <li>Use the word no or not go negate a statement</li>
                    <li>The negation of statement p is written as
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x223c;</mo><mi>p</mi></math>
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Form a negation
                    (<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x223c;</mo><mi>p</mi></math>)
                    for each of the following statement (p) by using the word "no" or "not"
                </p>
                <ul>
                    <li>13 is a multiple of 5, 13 is not a multiple of 5</li>
                    <li>20 is a prime number, 20 is not a prime number</li>
                </ul>
                <p class="underline">
                    <strong>Dtermine the truth value of a compound statement</strong>
                </p>
            </div>

            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    A compound statement is a combination of two or more statement by using the word "and" or "or".
                </p>
                <ul>
                    <li>The word "and" in a mathematical statement mean both while the word "or" means one of them or both.</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Combine the following statement, q and r by using the words "and" or "or"</p>
                <p>q: A pentagon has two diagonals</p>
                <p>r: A heptagon has four diagonals</p>
                <P>
                    <strong>Solution :</strong>
                </P>
                <ul>
                    <li>A pentagon has two diagonal and a heptagon has four diagonals</li>
                    <li>A pentagon has two diagonal or a heptagon has four diagonals</li>
                </ul>
            </div>

            <br>

            <div class="subtitle">
                <p>3.2 Arguments</p>
            </div>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>A process of making a conclusion based on statement is knows as argumentations</p>
                <p>An argument can consist of several premises and one conclusion.</p>
                <p>A premise is a statement that gives information before making a conlusion
                    <br>
                   conclusion is an outcome and decision.
                </p>
                <ul>
                    <li>the specifis statements are statements that refer to a particular case, while the
                        <br>
                        general statement that describe a concept.
                    </li>
                </ul>
                <p class="underline">
                    <strong>Types of arguments</strong>
                </p>
                <ul>
                    <li>Deductive argumenr (A process of making a specific conclusion based on general premises)</li>
                    <li>Inductive argument (A process of making a general conclusion based on specific premises)</li>
                </ul>
                <p class="underline">
                    <strong>Determine and justify the validity of deductive arfuments</strong>
                </p>
                <p>A valid deductive can be categorised into three forms.</p>
                <table class="table2">
                    <tr>
                        <th></th>
                        <th>Form 1</th>
                        <th>Form 2</th>
                        <th>Form 3</th>
                    </tr>
                    <tr>
                        <th>Premise 1</th>
                        <td>All P are Q</td>
                        <td>If a is b</td>
                        <td>If a is b</td>
                    </tr>
                    <tr>
                        <th>Premise 2</th>
                        <td>R is P</td>
                        <td>a is true</td>
                        <td>Not b is true</td>
                    </tr>
                    <tr>
                        <th>Conclusion</th>
                        <td>R is Q</td>
                        <td>b is true</td>
                        <td>Not a is true</td>
                    </tr>
                </table>
                <p>
                    A deductive argument is said to be valid if all the premises and the conclusion are true.
                </p>
            </div>
        </div>
    </div>
</body>
</html>