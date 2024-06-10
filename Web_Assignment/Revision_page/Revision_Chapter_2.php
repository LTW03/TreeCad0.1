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
                <p class="unit-num">2.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Number Bases</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="subtitle">
                <p>2.1 Number Bases</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/ssWdRkY9_Ig?si=Zvm8V05p1SCq1nyk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    Number system which consisting of digits from 0 to 9.
                </p>
                <p>
                    The number systems are made up of number with various bases.
                </p>
                <p>
                    <strong>Extra information</strong>
                </p>
                <ul>
                    <li><strong>Digits</strong> are the symblos used or combined to form a number in the number system.</li>
                    <li>0,1,2,3,4,5,6,7,8,9 are the ten digits used in the decimal number system.</li>
                    <li>Each base has digits from 0 to a digits which is less than its base.</li>
                </ul>
                <p class="underline">
                    Place values that involved in number bases
                </p>
                <p>
                    <strong>Explanation</strong>
                </p>
                <ul>
                    <li>Each base has place values according to each respective base.</li>
                    <li>The place values of a base are the repeated multiplication of that base.</li>
                    <li>For example, a is the base, then its place value will start with
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>a</mi><mn>0</mn></msup><mo>,</mo><msup><mi>a</mi><mn>1</mn></msup><mo>,</mo><msup><mi>a</mi><mn>2</mn></msup><mo>,</mo><msup><mi>a</mi><mn>3</mn></msup><mo>,</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>.</mo><msup><mi>a</mi><mi>n</mi></msup></math>.
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example questions</p>
            </div>
            <div class="text">
                <p>
                    Find the place value of each digit in
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>542</mn><mn>6</mn></msub></math>
                </p>
                <br>
                <table class="table2">
                    <tr>
                        <th><strong>Number in base is 6</strong></th>
                        <td>5</td>
                        <td>4</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><strong>Place value</strong></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>0</mn></msup></math></td>
                    </tr>
                </table>
                <p class="underline">
                    <strong>Value of a particular digit in a number in various bases.</strong>
                </p>
            </div>

            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    The value of a particular digit in a number is the multiplication
                    <br>
                    of a digit and the palce value that represents th digit.
                </p>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>
                    State the value of 5 in
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>34</mn><munder accentunder='true'><mn>5</mn><mo>_</mo></munder><msub><mn>2</mn><mn>6</mn></msub></math>                    </p>
                <p>
                    <strong>Solution :</strong>
                    The base is 6,thus
                </p>
                <table class="table2">
                    <tr>
                        <th>Number</th>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th>place Value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>3</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>0</mn></msup></math></td>
                    </tr>
                    <tr>
                        <th>Digit Value</th>
                        <td></td>
                        <td></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mo>&#xd7;</mo><msup><mn>6</mn><mn>1</mn></msup><mo>=</mo><mn>30</mn></math></td>
                        <td></td>
                    </tr>
                </table>
                <p class="underline">
                    <strong>Numerical value of a number in various bases</strong>
                </p>
            </div>

            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    The numerical value of a number in various bases can be determined
                    <br>
                    by calculating the sum of the digit value of the number.
                </p>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Determine the numerical value of
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>6452</mn><mn>7</mn></msub></math>
                </p>
                <p>
                    <strong>Solution :</strong>
                    The base is 7,thus
                </p>
                <table class="table2">
                    <tr>
                        <th>Number</th>
                        <td>6</td>
                        <td>4</td>
                        <td>5</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th>place Value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>3</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>0</mn></msup></math></td>
                    </tr>
                    <tr>
                        <th>Digit Value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>6</mn><mo>&#xd7;</mo><msup><mn>7</mn><mn>3</mn></msup><mo>=</mo><mn>2058</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>&#xd7;</mo><msup><mn>7</mn><mn>2</mn></msup><mo>=</mo><mn>196</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mo>&#xd7;</mo><msup><mn>7</mn><mn>1</mn></msup><mo>=</mo><mn>35</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>&#xd7;</mo><msup><mn>7</mn><mn>0</mn></msup><mo>=</mo><mn>2</mn></math></td>
                    </tr>
                    <tr>
                        <th>Number Value</th>
                        <td colspan="4"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2058</mn><mo>+</mo><mn>196</mn><mo>+</mo><mn>35</mn><mo>+</mo><mn>2</mn><mo>=</mo><msub><mn>2291</mn><mn>10</mn></msub></math></td>
                    </tr>
                </table>
                <p class="underline">
                    <strong>Conversion numbers from one base to another base using various method</strong>
                </p>
                <p>
                    A number can be converted to other bases by using varous methods, such as division using
                    <br>
                    place value and the division using base value.
                </p>
                <p>
                    These processes involve converting :
                </p>
                <ul>
                    <li>a number in base ten to another base</li>
                    <li>a number in a certain base ten and then to another base</li>
                    <li>a number in base two directly to base eight</li>
                    <li>a number in base eight directly to base two</li>
                </ul>
                <p>
                    <strong>A. Conversion of number in base ten into another base</strong>
                </p>
                <ul>
                    <li>A number in base ten can be converted to another base by dividing the number using the place value or the base value requied.</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>convert
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>567</mn><mn>10</mn></msub></math>
                    to a number in base five
                </p>
                <p>
                    <strong>Solution :</strong>
                </p>
                <img src="../math_image/math image.png" alt="" class="chapter2_image">
                <p class="underline">
                    <strong>B. Conversion of a number in a certain base to another base</strong>
                </p>
                <p>
                    A number in base p can be converted to base ten and then to base q
                </p>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Convert
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>251</mn><mn>6</mn></msub></math>
                    to a number in base eight
                </p>
                <p>
                    <strong>Soluiton</strong>
                </p>
                <p>
                    <strong>Step 1 : Convert the number in base ten</strong>
                </p>
                <table class="table2">
                    <tr>
                        <th>Number in base 6</th>
                        <td>2</td>
                        <td>5</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Place value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>0</mn></msup></math></td>
                    </tr>
                    <tr>
                        <th>Value of number in base 10</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>&#xd7;</mo><msup><mn>6</mn><mn>2</mn></msup><mo>=</mo><mn>72</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mo>&#xd7;</mo><msup><mn>6</mn><mn>1</mn></msup><mo>=</mo><mn>30</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>&#xd7;</mo><msup><mn>6</mn><mn>0</mn></msup><mo>=</mo><mn>1</mn></math></td>
                    </tr>
                </table>
                <p>
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2234;</mo><mn>72</mn><mo>+</mo><mn>30</mn><mo>+</mo><mn>1</mn><mo>=</mo><msub><mn>103</mn><mn>10</mn></msub></math>
                </p>
                <p>
                    <strong>Step 2 : Convert the number in base ten to base eight</strong>
                </p>
                <img src="../math_image/math image1.png" alt="" class="chapter2_image">
                <p class="underline">
                    <strong>C. Conversion a number in base two into base eight</strong>
                </p>
                <p>
                    <strong>Rules :</strong>
                </p>
                <ul>
                    <li>Separate each of three digits of a number in base two from the right to the lift</li>
                    <li>Determine the sum of the digits values fot the combined three digits in base two</li>
                    <li>Combine the number in base eight</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Convert
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>111101</mn><mn>2</mn></msub></math>
                    in base eight
                </p>
                <p>
                    <strong>Solution :</strong>
                </p>
                <table class="table2">
                    <tr>
                        <th>Number in base two</th>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Place value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>0</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>0</mn></msup></math></td>
                    </tr>
                    <tr>
                        <th>Digit value</th>
                        <td>4</td>
                        <td>2</td>
                        <td>1</td>
                        <td>4</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th rowspan="2">Base eight</th>
                        <td colspan="3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>+</mo><mn>2</mn><mo>+</mo><mn>1</mn><mo>=</mo><mn>7</mn></math></td>
                        <td colspan="3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>+</mo><mn>0</mn><mo>+</mo><mn>1</mn><mo>=</mo><mn>5</mn></math></td>
                    </tr>
                    <tr>
                        <td colspan="6"><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>111101</mn><mn>2</mn></msub><mo>=</mo><msub><mn>75</mn><mn>8</mn></msub></math></td>
                    </tr>
                </table>
                <p class="underline">
                    <strong>Subtraction numbers in various bases</strong>
                </p>
                <p>
                    There are two methods which can be perform such as
                </p>
                <ul>
                    <li>Vertical form</li>
                    <li>Conversion of base</li>
                </ul>
                <p>
                    <strong>Vertical form method :</strong>
                </p>
                <ul>
                    <li>Substract the given digits starting from the right to the left</li>
                    <li>The difference is written in the answer space
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The difference is always less than given base and its value is equal to base ten
                    </li>
                    <li>This process is repeated until all the digits in the numbers are substracted</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Calculate
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>375</mn><mn>6</mn></msub><mo>-</mo><msub><mn>150</mn><mn>6</mn></msub></math>
                </p>
                <p>
                    <strong>Solution :</strong>
                </p>
                <img src="../math_image/math  image2.png" alt="" class="chapter2_image">
            
                <p>
                    <strong>Conversion of base :</strong>
                </p>
                <ul>
                    <li>Convert a number to base ten and perform substraction</li>
                    <li>Convert the answer in base ten to the required base</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>