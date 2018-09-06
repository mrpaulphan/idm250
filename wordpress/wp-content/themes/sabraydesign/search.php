<?php 
$searched_string = $_GET['s'];
get_header(); ?>
  
<body>
   <div id="pink_rectangle"></div>
    <div id="dot_grid"></div>
    <div id="line_top"></div>
    <p class="search_title">Site Search</p>
    <form action="#">
     <div class="search"></div>
      <input type="text" placeholder="Search.." name="search">
    </form>
    <a href="#" id="search_button" class="button">Search</a>
    <div class="result_cont">
        <div class="search_result">
            <p class="search_head">UPenn Arts &amp; Science</p>
            <p>various websites designed and created during my position at UPenn as a web developer. built and maintained in Drupal 7.</p>
        </div>
        <div class="search_result">
            <p class="search_head">Interactive Poster</p>
            <p>for my interactive graphics class I made a music poster featuring the image and music of Grimes.</p>
        </div>
    </div>
</body>

<?php get_footer(); ?>
