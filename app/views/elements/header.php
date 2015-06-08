<?php
    use Core\Language;
    
    $scout_css = "scout-sbg";
    $scout_css ="scout-".substr($_SERVER['REQUEST_URI'],1)."-sbg";
    
?>

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
    
        left: 85%;
        top: 80%;
        
      }
    
    .hC {
        background-color: #db4437;
        height: 56px;
        position: absolute;
        width: 56px;
        color: #fff;
        font-size: x-large;
    }
    
</style>

<div class="header-section <?php echo $scout_css; ?>" tabindex="-1">
    <div class="container">
        <h1><?php echo $data['title'] ?></h1>
        <p><?php echo $data['subtitle'] ?></p>
    </div>

    <button class="y hC" tabindex="0">+</button>

</div>