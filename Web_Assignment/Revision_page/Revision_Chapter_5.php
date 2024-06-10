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
                <p class="unit-num">5.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Network in Graph Theory</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>


        <div class="content_container">
            <div class="subtitle">
                <p>5.1 Network</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/WRX7RJFdakw?si=cw3PLU5H8tSYVeUd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="text">
                <p class="underline">
                    <strong>Relationaship between a network and a graph</strong>
                </p>
            </div>

            <div class="little_title">
                <p>Explanation</p>
            </div>
            <div class="text">
                <ul>
                    <li>A graph is used to represent data consisting of discrete objects and to show the relationaship between these objects in a simple graphical manner.</li>
                    <li>In a particular graph, a <strong>graph</strong> is interpreted as a series of dots which are either linked or not linked to one another by lines.</li>
                    <li>Each dots is known as a <strong>vertex</strong> and the line joining two vertices is known as an <strong>edge</strong>.</li>
                    <li>A graph is usually used to represent a certain <strong>network</strong>.</li>
                    <li>A network is part of graph with the vertices and edges having their own characteristics and the structure of network data has a many to many relation.</li>
                </ul>
                <p>A graph is denoted by a set of ordered pairs
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>G</mi><mo>=</mo><mo>(</mo><mi>V</mi><mo>,</mo><mi>E</mi><mo>)</mo></math>
                    where
                </p>
                <ul>
                    <li>V is the set of dots or vertices,
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>V</mi><mo>=</mo><msub><mi>v</mi><mn>1</mn></msub><mo>,</mo><msub><mi>v</mi><mn>2</mn></msub><mo>,</mo><msub><mi>v</mi><mn>3</mn></msub><mo>.</mo><mo>.</mo><mo>.</mo><mo>.</mo><msub><mi>v</mi><mi>n</mi></msub></math>
                    </li>
                    <li>E is the set of edges or line linking each pair of vertices</li>
                </ul>
                <p>The <strong>degree</strong>, d is the number of edges that connect two vertices.
                    <br>
                    The sum of degrees of graph is twice the number of edges that is
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2211;</mo><mi>d</mi><mo>(</mo><mi>v</mi><mo>)</mo><mo>=</mo><mn>2</mn><mi>E</mi></math> 
                </p>
                <p class="underline">
                    <strong>Simple graph</strong>
                </p>
                <ul>
                    <li>A simple graph has no loops and no multiple edges.</li>
                    <li>The sum of degress of the graph is twice the number of edges.</li>
                </ul>
                <p class="underline">
                    <strong>Multiple edges and loops of a graph</strong>
                </p>
                <p>
                    <strong>Multiple edges</strong>
                </p>
                <ul>
                    <li>Involve two vertices.</li>
                    <li>The vertices are connected by more than one edge.</li>
                    <li>The sum of degress is twice the number of edges.</li>
                </ul>
                <p>
                    <strong>Loops</strong>
                </p>
                <ul>
                    <li>Involve one vertex</li>
                    <li>The edge in the form of an arc that starts and ends at the same vertex.</li>
                    <li>Each loop adds 2 to the degree.</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <img src="../math_image/math image4.png" alt="" class="chapter4_image">
                <p>
                    <strong>Differences between a directed graph and an undirected graph</strong>
                </p>
                <table class="table2">
                    <tr>
                        <th>Directed graph</th>
                        <th>Undirected graph</th>
                    </tr>
                    <tr>
                        <td>A type of graph that contains ordered pairs of vertices</td>
                        <td>A type of graph that contains unordered pairs of vertices</td>
                    </tr>
                    <tr>
                        <td>Edges represent the direction of vertexes</td>
                        <td>Edges do not represent the direction of vertexes</td>
                    </tr>
                    <tr>
                        <td>An arrow represent the edges</td>
                        <td>Undirected arcs represent the edges</td>
                    </tr>
                </table>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <img src="../math_image/math image5.png" alt="" class="chapter4_image">
                <p>
                    <Strong>Differences between weighed graph and unweighed graphs</Strong>
                </p>
                <table class="table2">
                    <tr>
                        <th></th>
                        <th>Weighed praph</th>
                        <th>Unweighed graph</th>
                    </tr>
                    <tr>
                        <th>Type of graph</th>
                        <td>Directed graph and undirected graph</td>
                        <td>Directed graph and undirected graph</td>
                    </tr>
                    <tr>
                        <th>Edge</th>
                        <td>Associated with a value or a weight</td>
                        <td>Not associated with a value or a weight</td>
                    </tr>
                    <tr>
                        <th>Example</th>
                        <td>The edge represents :
                            <ul>
                                <li>distance between two cities</li>
                                <li>traveling time</li>
                                <li>the current in an electrical circuit</li>
                                <li>cost</li>
                            </ul>
                        </td>
                        <td>
                            The edge relates information like :
                            <ul>
                                <li>Job heirarchy in an arganisation</li>
                                <li>flow map</li>
                                <li>tree map</li>
                                <li>bubble map</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <P>
                    <strong>Subgraph</strong>
                </P>
            </div>

            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    A <strong>subgraph</strong> is a part  of a graph or the whole graph redrawn
                    <br>
                    without changing the original positions of the vertices and edges.
                </p>
                <p>A graph H is said to be a subgraph of G if,</p>
                <ul>
                    <li>the vertex set of graph H is a subset of the vertex ser of graph G that is
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>V</mi><mo>(</mo><mi>H</mi><mo>)</mo><mo>&#x2282;</mo><mi>V</mi><mo>(</mo><mi>G</mi><mo>)</mo></math>
                    </li>
                    <li>the edge set of graph H is a subset of the edge set of graph G that is
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>E</mi><mo>(</mo><mi>H</mi><mo>)</mo><mo>&#x2282;</mo><mi>E</mi><mo>(</mo><mi>G</mi><mo>)</mo></math>
                    </li>
                    <li>the vertex pairs of the edges of graph H are the same as the edges of grapg G</li>
                </ul>
                <p>A <strong>tree</strong> of a graph is a subgraph of the graph with the following properties</p>
                <ul>
                    <li>A simple graph without loops and multiple edges</li>
                    <li>All the vertices are connected and each pair of vertices is connected by only one edge</li>
                    <li>Number of edges = Number of vertices -1</li>
                    <li>Number of vertices =
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi></math>
                    </li>
                    <li>Number of edges =
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#x2212;</mo><mn>1</mn></math>
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example of subgraph</p>
            </div>
            <div class="text">
                <img src="../math_image/math image6.png" alt="" class="chapter4_image">
                <p>
                    <strong>This is the example of Subgraph</strong>
                </p>
            </div>
        </div>
    </div>
</body>
</html>