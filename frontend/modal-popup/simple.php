<style>
    .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .popup {
        margin: 70px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 5s ease-in-out;
    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }
    .popup .close:hover {
        color: #06D85F;
    }
    .popup .content {
        max-height: 30%;
        overflow: auto;
    }

    @media screen and (max-width: 700px){
        .box{
            width: 70%;
        }
        .popup{
            width: 70%;
        }
    }
</style>

<a id="hrefpopup1" class="button" href="#popup1">Let me Pop up</a>

<div id="popup1" class="overlay">
    <div class="popup">
        <h2>Here i am</h2>
        <a class="close" onclick="clearModal('hrefpopup1')">&times;</a>
        <div class="content">
            Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
    </div>
</div>

<script>
    function clearModal(id){
        window.location.href = '#';
        document.querySelector('#'+id).focus();
        return false;
    }
    //close by esc
    window.addEventListener('keydown', function (event){
        var str = window.location.href.split('#')[1];
        if (str != undefined && event.keyCode == 27) clearModal(str);
    })
    document.querySelector('.overlay').addEventListener('click',function (item){
       if (item.target.classList.contains('overlay')) clearModal(item.target.id)
    })
</script>