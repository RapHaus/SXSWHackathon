$( document ).ready(function() {
    //The div element that will contain the images
    var beatsContainer = document.getElementById("beats-container");
    callForMusicBeats();


    //Makes an asynch request, loading the getimages.php file
    function callForMusicBeats() {

        //Create the request object
        var httpReq = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

        //When it loads,
        httpReq.onload = function () {

            //Convert the result back into JSON
            var result = JSON.parse(httpReq.responseText);

            //Show the images
            loadBeats(result);
        }

        //Request the page
        try {
            httpReq.open("GET", "scripts/php/getMusicBeats.php", true);
            httpReq.send(null);
        } catch (e) {
            console.log(e);
        }

    }


    //Generates the images and sticks them in the container
    function loadBeats(beats) {

        //For each beat,
        for (var i = 0; i < beats.length; i++) {

            var filename = beats[i];
            var songinfo = filename.replace(/\.[^/.]+$/, "");
            songinfo = songinfo.replace(/^.*[\\\/]/, '');

            songinfo = songinfo.split(" - ");
            var songartist = songinfo[0];
            var songname = songinfo[1];

            filename = filename.replace("../../", "http://rap.haus/");

            var el = "";

            el += "<li class='list-group-item' data-song='" + songname + "' data-artist='" + songartist + "'>";
            el += "<div class='pull-right m-l'>";
            el += "<a href='#' class='m-r-sm'><i class='icon-like'></i></a>";
            el += "<a href='#'><i class='icon-dislike'></i></a>";
            el += "</div>";
            el += "<a href='#' data-artist='" + songartist + "' data-song='" + songname + "' data-path='" + filename + "' class='jp-play-me m-r-sm pull-left'>";
            el += "<i class='icon-control-play text'></i>";
            el += "<i class='icon-control-pause text-active'></i>";
            el += "</a>";
            el += "<div class='clear text-ellipsis'>";
            el += "<span>" + songname + "</span>";
            el += "<span class='text-muted'></span>";
            el += "</div>";
            el += "</li>";

            //Add it to the container
            beatsContainer.innerHTML += el;
        }
    }
});