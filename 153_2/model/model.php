<?php

function getThinkers(){
    $json = file_get_contents('https://inpho.cogs.indiana.edu/thinker.json');
    $thinker_list = json_decode($json);
    $thinker_array = $thinker_list->responseData->results;
    return $thinker_array;
}
function getThinker($thinker_id){
    $json = file_get_contents("https://inpho.cogs.indiana.edu/thinker/$thinker_id.json");
    $thinker = json_decode($json);
    return $thinker;
}
function getIdea($idea_id){
    $json = file_get_contents("https://inpho.cogs.indiana.edu/idea/$idea_id.json");
    $idea = json_decode($json);
    return $idea;
}
// function getIdeas($thinker_id){
//     $json = file_get_contents("https://inpho.cogs.indiana.edu/thinker/$thinker_id.json");
//     $related_ideas = json_decode($json);
//     $idea_ids = $related_ideas->related_ideas;
//     $json = file_get_contents("https://inpho.cogs.indiana.edu/idea/$idea_ids.json");
//     return $thinker_array;
// }
// function getThinkerName($thinker){
//     $thinker_name = $thinker->label;
//     return $thinker_name;
// }
// function getThinkerIdeas($thinker_id){
//     $json = file_get_contents("https://inpho.cogs.indiana.edu/thinker/$thinker_id.json");
//     $thinker = json_decode($json);
//     $thinker_ideas = $thinker->related_ideas;
//     return $thinker_ideas;
// }
// function getIdeaName($idea){
//     $idea_name = $idea->label;
//     return $idea_name;
// }
?>