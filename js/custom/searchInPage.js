/**
 * Created by zachrdz on 3/16/16.
 */
$(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
            searchFilterBeats(document.getElementById('beatSearch').value);
        }
    });
});

$("input").keyup(function(){
    searchFilterBeats(document.getElementById('beatSearch').value);
});

function searchFilterBeats(query){

    $('#beats-container li').each(function() {
        var artist = this.getAttribute("data-artist");
        var song = this.getAttribute("data-song");
        var combined = artist + " " + song;
        combined = combined.toLowerCase();

        if(combined.indexOf(query.toLowerCase()) >= 0) {
            this.style = "";
        }else {
            this.style = "display:none;";
        }
    });

    //alert(query);
    event.preventDefault();
    return false;
}