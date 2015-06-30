
<style>
    .y {
        border: none;
        border-radius: 50%;
        -webkit-user-drag: none;
    
        box-shadow: 0 0 4px rgba(0,0,0,.14),0 4px 8px rgba(0,0,0,.28);
        box-sizing: content-box;
        cursor: pointer;
        outline: none;
        padding: 0;
        pointer-events: auto;
        position: relative;
        -webkit-transform: scale(1) rotate(360deg);
        transform: scale(1) rotate(360deg);
        -webkit-transition: -webkit-transform 150ms cubic-bezier(.4,0,1,1);
        transition: transform 150ms cubic-bezier(.4,0,1,1);
    
      }
    
    .hC {
        background-color: #db4437;
        height: 56px;
        position: fixed;
        width: 56px;
        color: #fff;
        font-size: x-large;
    
        right: 3%;
        bottom: 3%;
        z-index: 99999;
    }
    
</style>
<button class="y hC" tabindex="0" onclick="window.location.href=window.location.href+'/nuevo'" >+</button>

