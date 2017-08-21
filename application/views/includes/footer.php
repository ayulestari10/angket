<style type="text/css">
    #footer {
        background-color: #233140;
        height: 4%;
        color: white;
        padding-top: 3%;
        padding-bottom: 2%;
        margin-top: 8%;
    }
</style>
    <footer id="footer">
        <div class="container" style="text-align: center;">
            Copyright &copy; PTI BEM KM Fasilkom
        </div>
    </footer>
    <script type="text/javascript">
        var docHeight = $(window).height();
        var footerHeight = $('#footer').height();
        var footerTop = $('#footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('#footer').css('margin-top', (docHeight - footerTop - 15) + 'px');
        }
    </script> 
    </body>
</html>
