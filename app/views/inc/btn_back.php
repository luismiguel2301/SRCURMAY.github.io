<div class="text-end mb-3">
    <a href="" class="btn btn-danger btn-back">
        Regresar
    </a>

    <script type="text/javascript">
        let btn_back = document.querySelector(".btn-back");
        btn_back.addEventListener('click',function(e){
            e.preventDefault();
            window.history.back();
        });
    </script>
</div>