<div id="voltatopo">
    <button onclick="scrollToTop(1000);">^</button>
    <script>function scrollToTop(scrollDuration) {
            var scrollStep = -window.scrollY / (scrollDuration / 20),
                    scrollInterval = setInterval(function () {
                        if (window.scrollY !== 0) {
                            window.scrollBy(0, scrollStep);
                        } else
                            clearInterval(scrollInterval);
                    }, 15);
        }</script>
</div>