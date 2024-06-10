<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS_folder/general.css">
    <link rel="stylesheet" href="../CSS_folder/Tutorial_page.css">
    <title>Chapter 9</title>
</head>
<body>
    <div class="background">
        <?php include('../Revision_header.php');?>
        <div class="topping">

            <!--Above don't touch -->
            
            <div class="course-title-num">
                <p class="unit-num">9.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Probality of combination of event    </i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="subtitle">
                <p>9.1 Combination Event</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/6neoMiUfPAI?si=eBqIQ_zHvr1hpEfd"
                 title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                 gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p>Definition</p>
            <div class="text">
                <p>Combination of two or more events is an outcome. </p>
            </div>
            
            <div class="little_title">  
                <p>Example</p>              
            </div>
            <div class="text">
                <p>{Scissors, Rock},</p>
                <p>{Scissors, Paper},</p>
                <p>{Scissors, Scissors},</p>
                <p>{Rock, Scissors},</p>
                <p>{Rock, Paper},</p>
                <p>{Rock, Rock},</p>
                <p>{Rock, Scissors},</p>
                <p>{Paper, Rock},</p>
                <p>{Paper, Paper},</p>
            </div>
            <div class="texttitle">
                <h4>In general,</h4>
            </div>
            <div class="littlebox3">
                <p>n(S) = n(A) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xd7;</mo></math> n(B)</p>
            </div>
            <div class="text">
                <ul>
                    <li>n(S) is all the possible numbers of outcomes n(A) and n(B) epresent the number of outcomes of event A and event B</li>
                </ul>
            </div>
            <div class="subtitle">
                <p>9.2 Dependent Event and Independent Event</p>
            </div> 
            <div class="text">
                <ul>
                    <li>Combined events can be categorised as dependent and independent events</li>
                </ul>
            </div>
            <div class="littlebox3">
                <p>Event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> are independent events if the occurrence of event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math>
                     has no effecrt on the occurrence of event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> and vice versa</p>
            </div>
            <div class="text">
                <ul>
                    <li>In other words, event 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> 
                        are dependent events if the occurrence of event 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> affect occurence of event 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math></li>
                </ul>
            </div>
            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="texttitle">
                <p>Identify whether the following combined events are dependent events or independent events. </p>  
                <p>Justify your answer,</p>
                <p>1. Taking an Uber ride and getting a free meal at your favourite restaurant</p>
                <h4>Solution:</h4>
            </div>
            <div class="text">
                <ul>
                    <li>It is an <strong>independent event</strong> because the probability of taking an uber does not affetct the probability of getting a free meal at favourite restaurant. </li>
                </ul>
            </div>
            <div class="texttitle">
                <p>2. Getting into a traffic accident is dependent upon driving or riding in a vehicle.</p>
                <h4>Solution:</h4>
            </div>
            <div class="text">
                <ul>
                    <li>It is an <strong>independent event</strong> because the probability of getting into a traffic accident has affect driving or riding in a vehicle </li>
                </ul>
            </div>
            <div class="texttitle">
                <p class="abc">Verify conjecture and verify about the formu;a of probability of combined events .</p>
            </div>
            <div class="littlebox3">
                <p>The probability of the intersection of two intersection events 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> is equal to the product of the probability of event 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and probability of event 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> </p>
            </div>
            <div class="text">
                <ul>
                    <li>In general, P(A and B) = P(A) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xd7;</mo></math> P(B)</li>
                </ul>
            </div>
            <div class="subtitle">
                <p>9.3 Mutually Exclusive Events and Non-Mutually Exclusive Events </p>
            </div>
            <div class="text">
                <ul>
                    <li>A combined events 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> is known as a mutually exclusive event if there is no intersection between events 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math>,
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math>
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2229;</mo></math>
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math>
                        not = 0</li>
                </ul>
            </div>
            <div class="little_title">
                <p>Formula</p>
            </div>
            <div class="text">
                <ul>
                    <li>The combined event 
                        A and 
                        B is non-mutually exclusive because
                        P(A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2229;</mo></math> B)  
                        = 0, then 
                        P(A or B) = P(A) + P(B) - P(A ∩ B) </li>
                    <li> The combined evetn A and B is <strong>non-mutually exclusive</strong> because P(A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2229;</mo></math> C) not = 0 and P(B <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2229;</mo></math> C) =0,
                    then P(A or C) = P(A) + P(C) and P(B or C) = P(B) + P(C)</li>
                </ul>
            </div>
            <div class="texttitle">
                <p><strong>The Addition rule of probability is</strong></p> 
            </div>
            <div class="text">
                <p> P(A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x222a;</mo></math> B) = P(A) + P(B) or P(A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x222a;</mo></math> B) = P(A) + P(B) - P(A ∩ B)</p>
            </div>
            
        </div>
    </div>
</body>
</html>