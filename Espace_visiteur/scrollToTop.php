<!--bouton scroll to top-->
<a onclick="topFunction()" id="Btn" href="#ici">
            <!-- <img src="../Assets/Images&Logos/scrollToTop.gif" alt="image" style="padding-left:13px;padding-top:13px;"> -->
        </a>

        <script>
            var mybutton = document.getElementById("Btn");
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
                if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
            function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            }
        </script>

<style>
    #Btn{
    float: right;
    position:fixed;
    right: 10px;
    bottom: 10px;
    width: 50px;
    height: 50px;
    /* background-color: black; */
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.22);
    z-index:999;
    background-image: url("../Assets/Images&Logos/ScrollToTop.gif");
    background-color: #2C2C6E;
    
}


</style>