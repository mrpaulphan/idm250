<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Excercise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h1>Task</h1>
<p>Example 1: Use a PHP for Loop to display the array below</p>
<pre>
<code>
$characters = ['Paul', 'Mark', 'Jane'];
</code>
</pre>
<br>
<p>Example 2: Use a PHP foreach Loop to display the array</p>
<pre>
<code>
$schools = [
    'Drexel University' => [
        'type' => 'University',
        'url'  => 'https://drexel.edu'
    ],
    'Temple University'  => [
        'type' => 'University',
        'url'  => 'https://www.temple.edu/'
    ],
    'University of Pennsylvania' => [
        'type' => 'University',
        'url'  => 'https://www.upenn.edu/'
    ]
];
</code>
</pre>


<?php


echo '<h1>Recreate everything below this line</h1>';
echo '<hr>';
echo '<h2>Example 1</h2>';
$characters = ['Paul', 'Mark', 'Jane'];
    for ($i = 0; $i < count($characters); $i++) {
        echo $i . ' is the key and ' . $characters[$i] . ' is the value in the $characters array <br/>';
    }

    // -----
    echo '<h2>Example 2</h2>';

    $schools = [
        'Drexel University' => [
            'type' => 'University',
            'url'  => 'https://drexel.edu'
        ],
        'Temple University'  => [
            'type' => 'University',
            'url'  => 'https://www.temple.edu/'
        ],
        'University of Pennsylvania' => [
            'type' => 'University',
            'url'  => 'https://www.upenn.edu/'
        ],
      ];
    foreach ($schools as $key => $school) {
        echo '<p>' . $key . ' is a ' . $school['type'] . ' and the website is ' . $school['url'] . ' </p>';
    }

?>

</body>
</html>