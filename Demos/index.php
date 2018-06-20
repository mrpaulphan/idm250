<?php
    echo "<h2>Example 1</h2>";
    echo "<hr/>";
    
    $characters = ['Finn', 'Steven Universe', 'Kermit'];

    for($i=0; $i < count($characters); $i++){
       echo $characters[$i] . '<br/>';
    }

    // -----
    echo "<h2>Example 2</h2>";
    echo "<hr/>";

    $descriptions = [
      'Bugs' => 'bunny',
      'Daffy' => 'duck',
      'Speedy' => 'the fastest mouse'
    ];

    foreach ($descriptions as $key => $description) {
      echo "<p>$key is $description</p>";
    }



    // -------

    echo "<h2>Example 3</h2>";
    echo "<hr/>";

    $post1 = [
      'Title' => 'Hello world!',
      'Date' => '06/30/2016',
      'Author' => 'Chelsea Myers'
    ];

    $post2 = [
      'Title' => 'HTML & CSS',
      'Date' => '07/05/2016',
      'Author' => 'John Smith'
    ];


    $post3 = [
      'Title' => 'Working with Sass',
      'Date' => '07/20/2016',
      'Author' => 'Chelsea Myers'
    ];

    $posts = [$post1,$post2, $post3];
    while (list ($key, $val) = each ($posts) ) {

      echo '<h1>'.$val['Title'].'</h1>';
      echo '<p>Written by '.$val['Author'].' on '.$val['Date'].'</p>';

    }

?>
