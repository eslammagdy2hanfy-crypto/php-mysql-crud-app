</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        let time = 2000;
        setTimeout(() => {
            let msg = document.getElementById('error-message');
            if(msg){
                msg.style.display = 'none';
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        }, time);
        setTimeout(() => {
            let msg = document.getElementById('success-message');
            if(msg){
                msg.style.display = 'none';
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        }, time);
        setTimeout(() => {
            let msg = document.getElementById('update-message');
            if(msg){
                msg.style.display = 'none';
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        }, time);
        setTimeout(() => {
            let msg = document.getElementById('delete-message');
            if(msg){
                msg.style.display = 'none';
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        }, time);
    </script>

</body>
</html>