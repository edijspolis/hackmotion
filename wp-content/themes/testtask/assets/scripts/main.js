window.addEventListener("load", init);

function init () {
    const video = document.querySelector("video");

    video.ontimeupdate = function () {
        const videoProgressBars = document.getElementsByClassName("progress-fill");
        const videoProgressValue = (video.currentTime / video.duration % 60) * 100;
        
        for (let i = 0; i < videoProgressBars.length; i++) {
            if (videoProgressBars[i].parentNode.classList.contains("progress-bar-vertical")) {
                videoProgressBars[i].style.height = videoProgressValue + '%';
            } else {
                videoProgressBars[i].style.width = videoProgressValue + '%';
            }
        }

        let accordion = document.getElementsByClassName("accordion");
        let videoCurrentSecond = parseInt(video.currentTime);
        let activeAccordion = null;

        for (let i = 0; i < accordion.length; i++) {
            accordion[i].classList.remove("active");
        }

        for (let i = 0; i < accordion.length; i++) {
            if (accordion[i].dataset.videoFrom <= videoCurrentSecond) {
                if (activeAccordion) {
                    activeAccordion.classList.remove("active");
                }

                activeAccordion = accordion[i];
            }
        }

        if (activeAccordion) {
            activeAccordion.classList.add("active");
        }

        if (videoProgressValue > 99) {
            _mtm.push({"event": "full-video-watch"});
        }
    };

    enterView({
        selector: '#video',
        enter: function(el) {
            playVideo();
        },
        exit: function(el) {
            pauseVideo();
        }
    });

    let accordion = document.getElementsByClassName("accordion");

    for (let i = 0; i < accordion.length; i++) {
        accordion[i].addEventListener("click", function() {
            video.currentTime = this.dataset.videoFrom;
        });
    }
}

async function playVideo() {
    let videoElem = document.getElementById("video");

    try {
        await videoElem.play();
    } catch (err) {
        console.log(err);
    }
}

async function pauseVideo() {
    let videoElem = document.getElementById("video");

    try {
        await videoElem.pause();
    } catch (err) {
        console.log(err);
    }
}