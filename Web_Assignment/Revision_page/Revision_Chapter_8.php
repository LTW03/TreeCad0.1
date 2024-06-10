<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS_folder/general.css">
    <link rel="stylesheet" href="../CSS_folder/Tutorial_page.css">
    <title>Chapter 8</title>
</head>
<body>
    <div class="background">
        <?php include('../Revision_header.php');?>
        <div class="topping">
            <!--Above don't touch -->
            
            <div class="course-title-num">
                <p class="unit-num">8.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Measure of Dispresion of Ungrouped Data</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="subtitle">
                <p>8.1 Dispresion</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/igUVWyDyi-Y?si=7wyXVQH2B4HBusNy" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p><strong>Measures of dispersion</strong> are measurement in statistics.</p>
                <p>It give us an idea of how values of a set of data are scattered. </p>
                <p>Dispersion small if the data set are quantitative measures such as range,
                     interquartile range, variance and standard deviation  </p>
            </div>
            
            <div class="little_title">  
                <p>Tips</p>              
            </div>
            <div class="text">
                <p>The distribution of data is different. </p>
                <p>To understand the dispersion of data, the difference between the largest value and the smalles value is taken into consideration.</p>
                <p>If the difference between the value is large, it indicates that the data is widely dispersed and vice versa. </p>
            </div>
            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="texttitle">
                <p>The table below shows the masses, in kg of 10 pupils</p>
                <table>
                    <tr>
                        <td>52</td>
                    </tr>
                    <tr>
                        <td>62</td>
                    </tr>
                    <tr>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>9</td>                    
                    </tr>
                    <tr>
                        <td>8</td>                    
                    </tr>
                    <tr>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td>44</td>
                    </tr>
                    <tr>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td>16</td>
                    </tr>
                </table>
                <p>State the difference in mass, in kg of the pupils</p>
            </div>
            <div class="text">
                <h4>Solution:</h4>
                <p>Largest Mass = 75</p>
                <p>Smallest Mass = 8</p>
                <p>Different in Mass,</p>
                <p>= 78 - 5</p>
                <p>= 67</p>
            </div>
            <div class="little_title">
                <p>Steam and Leaf Plot</p>
            </div>
            <div class="text">
                <p>It is a way to show the distributions of a set of data. </p>
                <p>It is a way to show the distributions of a set of data. Through stem-and-leaf plot, we can see whether the data is more likely to appear or least likely to appear. </p>
                <h4>Steps to plot the stem-and-leaf plot </h4>
            </div>
            <div class="texttitle">
                <p>Given the data is unorganised, for example </p>
                <table>
                    <tr>
                        <td>52</td>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>62</td>
                        <td>38</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>53</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>25</td>                    
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>49</td>                    
                    </tr>
                </table>
            </div>
            <div class="little_title">
                <p>Dot Plots</p>
            </div>
            <div class="text">
                <p>It is a statistical chart that contains points plotted using a uniform scale.</p>
                <p>Each point represents a value </p>
                <center><img src="https://study.com/cimages/multimages/16/dot_plot_running_club1904115692905496593.png" alt=""></center>
            </div>
            <div class="subtitle">
                <p>8.2 Measure of Despretion</p>
            </div> 
            <div class="little_title">
                <p>Formula</p>
            </div>
            <div class="text">
                <p>Range = Largest value - Smallest value</p>
                <h4>Variance</h4>
                <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>&#x3c3;</mi><mn>2</mn></msup><mi>
                </mi><mo>=</mo><mfrac><mrow><mo>&#x2211;</mo><mo>(</mo><mi>x</mi><mo>&#x2212;</mo><mi>
                </mi><mover accent='true'><mi>x</mi><mo>&#x2212;</mo></mover><mi>
                </mi><mi>
                </mi><mo>)</mo><mi>
                </mi><mi>	</mi><mi>&#x200b;</mi><mi>
                </mi></mrow><mi>N</mi></mfrac><mi>
                </mi><mi>
                </mi></math></p>
                <h4>Standard deviation</h4>
                <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3c3;</mi><mo>=</mo><msqrt><mrow><mi>
                </mi><mfrac><mrow><mo>&#x2211;</mo><mo>(</mo><mi>x</mi><mo>&#x2212;</mo><mi>
                </mi><mover accent='true'><mi>x</mi><mo>&#x2212;</mo></mover><mi>
                </mi><mi>
                </mi><mo>)</mo><mi>
                </mi><mi>	</mi><mi>&#x200b;</mi><mi>
                </mi><mi>
                </mi><mi>	</mi><mi>&#x200b;</mi><mi>
                </mi></mrow><mi>N</mi></mfrac></mrow></msqrt></math> or
                <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3c3;</mi><mo>=</mo><mi>
                </mi><mi>
                </mi><msqrt><mrow><mfrac><mrow><mo>&#x2211;</mo><msup><mi>x</mi><mn>2</mn></msup><mi>
                </mi><mn>2</mn></mrow><mi>N</mi></mfrac><mi>
                </mi><mi>	</mi><mi>&#x200b;</mi><mi>
                </mi><mi>
                </mi><mo>&#x2212;</mo><mi>
                </mi><mover accent='true'><mi>x</mi><mo>&#x2212;</mo></mover><msup><mi>
                </mi><mn>2</mn></msup><mi>
                </mi><mi>
                </mi></mrow></msqrt></math></p>
            </div> 
            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Given a set of data 36,25,15,26,50,27,20, determine the range of this set of data </p>
                <h4>Solution:</h4>
                <h4>1. Arrange a set of data in ascending order.</h4>
                <p>15,20,25,26,27,36,50</p>
                <p><strong>2. Apply</strong>Range = Largest value - Smallest value</p>
                <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2234;</mo></math> 50 - 15 = 35</p>
            </div>
            <div class="texttitle">
                <p class="abc"><strong><u>Interquartile range of set of ungrouped data</u></strong></p>
            </div>
            <div class="text">
                <ul>
                    <li>When the values of a set of data are arranged in ascending order, the first quartile, 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><msub><mi>
                        </mi><mn>1</mn></msub><mi>
                        </mi></math>
                        value of data that is the first <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math>
                        position
                    </li>
                    <li>While the third quartile, 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><msub><mi>
                        </mi><mn>3</mn></msub><mi>
                        </mi></math>
                        is the value of data that is the third
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math>
                        position
                    </li>
                </ul> 
            </div>
            <div class="texttitle">
                <p class="abc"><strong><u>Variance and standard deviation </u></strong></p>
            </div>
            <div class="text">
                <ul>
                    <li>Its are the measures of dispersion commonly used in statistics. </li>
                    <li>The variance is the average of the square of the difference between each data and the mean.</li>
                    <li>The standard deviation is the square root of variance which is also measures the dispersion of data set relative to its mean.</li>
                </ul> 
            </div>        
        </div>
    </div>
</body>
</html>