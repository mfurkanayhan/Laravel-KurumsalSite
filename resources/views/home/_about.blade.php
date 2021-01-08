<!-- About Start -->
<div class="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div id="video-section">
                    <div class="youtube-player" data-id="jssO8-5qmag"></div>

                    <script>
                        document.addEventListener("DOMContentLoaded",
                            function() {
                                var div, n,
                                    v = document.getElementsByClassName("youtube-player");
                                for (n = 0; n < v.length; n++) {
                                    div = document.createElement("div");
                                    div.setAttribute("data-id", v[n].dataset.id);
                                    div.innerHTML = labnolThumb(v[n].dataset.id);
                                    div.onclick = labnolIframe;
                                    v[n].appendChild(div);
                                }
                            });

                        function labnolThumb(id) {
                            var thumb = '<img src="img/poster.jpg">',
                                play = '<div class="play"></div>';
                            return thumb.replace("ID", id) + play;
                        }

                        function labnolIframe() {
                            var iframe = document.createElement("iframe");
                            var embed = "https://www.youtube.com/embed/ID?autoplay=1";
                            iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
                            iframe.setAttribute("frameborder", "0");
                            iframe.setAttribute("allowfullscreen", "1");
                            this.parentNode.replaceChild(iframe, this);
                        }
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Learn About Us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                </p>
                <a class="btn" href="">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
