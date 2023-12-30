<style>
    /* body {
      font-family: 'Roboto Condensed', sans-serif;
      background: #ddf1f4;
      font-weight: 700;
      text-transform: uppercase;
      color: white;
      width: 600px;
      height: 1000px;
    } */
  
    .wrap2 {
      position: absolute;
      top: 70%;
      left: 20%;
      transform: translate(-50%, -50%);
    }
  
    .btn2 {
      z-index: 1;
      cursor: pointer;
      width: 240px;
      height: 100px;
      background: #ce89c8;
      border-radius: 16px;
      box-shadow: 0 10px 0 rgba(206, 137, 200, 0.2);
      transition: all 100ms;
    }
  
    /* .btn:hover {
      transform: translate(0, 6px);
      box-shadow: 0 4px 0 rgba(206, 137, 200, 0.2);
    } */
  
    @keyframes btn {
      0%, 15% {
        width: 240px;
        height: 100px;
      }
      40%, 100% {
        width: 200px;
        height: 180px;
        background: #fb9cbb;
        box-shadow: 0 10px 0 rgba(251, 156, 187, 0.2);
      }
    }
  
    .btn-animation2 {
      animation: btn 2s cubic-bezier(0.630, -0.515, 0.455, 1.635);
      animation-fill-mode: forwards;
    }
  
    .sign2 {
      width: 100%;
      margin-left: 0;
      overflow: hidden;
      text-align: center;
      line-height: 94px;
      font-size: 22px;
      width: 240px;
      white-space: nowrap;
      opacity: 1;
      transition: all 0.2s;
    }
  
    .sgn-anim2 {
      width: 60px;
      margin-left: 100px;
      text-align: center;
      line-height: 94px;
      font-size: 22px;
      opacity: 0;
    }
  
    .smile2 {
      position: absolute;
      width: 20px;
      height: 20px;
      background: white;
      margin: 36px 20px;
      border-radius: 10px;
      opacity: 0;
    }
  
    @keyframes mouth {
      2% {
        margin: 36px 20px;
        opacity: 1;
        border-radius: 10px;
      }
      10% {
        margin: 36px 40px;
        border-radius: 10px;
      }
      15% {
        margin: 36px 40px;
        width: 166px;
        border-radius: 10px;
      }
      20% {
        margin: 36px 50px;
        width: 120px;
        opacity: 1;
        border-radius: 10px 10px 80px 80px;
      }
      40%, 100% {
        margin: 76px 50px;
        width: 100px;
        height: 60px;
        opacity: 1;
        border-radius: 10px 10px 80px 80px;
      }
    }
  
    .smile-animation2 {
      animation: mouth 2s ease-in-out;
      animation-fill-mode: forwards;
    }
  
    .eyes2 {
      position: absolute;
      height: 20px;
      transform: translate(36px, 80px);
      opacity: 0;
    }
  
    @keyframes eyes_track {
      0%, 24% {
        position: absolute;
        height: 20px;
        transform: translate(3px, 80px);
        opacity: 0;
      }
      25%, 50%, 80%, 100% {
        transform: translate(26px, 40px);
        opacity: 1;
        animation-timing-function: cubic-bezier(0.630, 0.515, -3.455, 1.635);
      }
    }
  
    .eyes-animation2 {
      animation: eyes_track 1s cubic-bezier(0.630, -1.515, 0.455, 1.635);
      animation-fill-mode: forwards;
    }
  
    .left-eye2 {
      position: absolute;
      width: 20px;
      height: 20px;
      background: white;
      margin-left: 30px;
      border-radius: 100%;
    }
  
    @keyframes lea {
      3%, 80% {
        width: 20px;
        height: 20px;
        border-radius: 100%;
      }
      10% {
        width: 20px;
        height: 6px;
        border-radius: 3px;
      }
    }
  
    .l-eye-animation2 {
      /* animation: lea 1s infinite ease-in-out normal; */
  }

  .right-eye2 {
    position: absolute;
    width: 20px;
    height: 20px;
    background: white;
    margin-left: 100px;
    border-radius: 100%;
  }

  .bubble2 {
    z-index: 2;
    position: absolute;
    top: -100px;
    right: -100px;
    width: 0px;
    height: 0px;
    border-radius: 50px 50px 50px 0;
    color: transparent;
    font-size: 20px;
    text-align: right;
    line-height: 100px;
    background: white;
    transition: all 0.2s;
  }

  .bbl2 {
    z-index: 2;
    position: absolute;
    top: -100px;
    right: -200px;
    width: 200px;
    height: 100px;
    border-radius: 50px 50px 50px 0;
    color: #f18bc8;
    font-size: 20px;
    text-align: center;
    line-height: 100px;
    background: white;
  }
</style>

<div class="wrap2">
  <div class="bubble2">{{ $slot }}</div>
  <div class="btn2" id="geton-btn">
    <div class="eyes2">
      <div class="left-eye2"></div>
      <div class="right-eye2"></div>
    </div>
    <div class="smile2"></div>
    <div class="sign2">{{ $getonoff }}</div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $("#geton-btn").click(function () {

        $(".sign2").delay(300).addClass("sgn-anim2");
        $(".smile2").addClass("smile-animation2");
        $(".btn2").addClass("btn-animation2");
        $(".eyes2").addClass("eyes-animation2");
        $(".right-eye2").addClass("l-eye-animation2");
        $(".left-eye2").addClass("l-eye-animation2");
        setTimeout(function () {
            $(".bubble2").addClass("bbl2");
        }, 800);

    });
</script>
