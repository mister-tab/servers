<?php
$jokes = array(
    "جوک 1",
    "جوک 2",
    "جوک 3",
    "جوک 4",
    "جوک 5"
);
$random_joke = $jokes[array_rand($jokes)];
echo $random_joke;
?>
