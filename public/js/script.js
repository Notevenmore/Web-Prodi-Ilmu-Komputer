$(document).ready(() => {
    $("button.watch").click(() => {
        var video = $("video.watch").get(0);
        video.play();
    });
});
