<?php 
//cache start
$fileurl='template_shortcode_cards_default.html';$cacheenable=true;
$cfolder='cache/';if(!file_exists('cache')){mkdir('cache');}if(!file_exists($cfolder)){mkdir($cfolder);}
$cfpath=$cfolder.$fileurl;
if(!empty($cacheenable) && file_exists($cfpath)):
    include($cfpath);
else:
    ob_start();
//cache end
?>

<?php
//cache start
    $cache_html = ob_get_clean();
    if($cacheenable){
        $cache_html=Lib::minifyHTML($cache_html);
        $file=fopen($cfpath,"w");fwrite($file,$cache_html);fclose($file);
    }
    echo $cache_html;
endif;
//cache end
?>




<?php 
$cache_pagrurl=URL::full();
//cache start
$fileurl='template_view_banner.html';$cacheenable=Lib::cachable();
$cfolder='cache/'.strlen($cache_pagrurl).'/'.md5($cache_pagrurl).'/';if(!file_exists('cache')){mkdir('cache');}if(!file_exists('cache/'.strlen($cache_pagrurl))){mkdir('cache/'.strlen($cache_pagrurl));}if(!file_exists($cfolder)){mkdir($cfolder);}
$cfpath=$cfolder.$fileurl;
if(!empty($cacheenable) && file_exists($cfpath)):
    include($cfpath);
else:
    ob_start();
//cache end
?>



<?php
//cache start
    $cache_html = ob_get_clean();
    if($cacheenable){
        $cache_html=Lib::minifyHTML($cache_html);
        $file=fopen($cfpath,"w");fwrite($file,$cache_html);fclose($file);
    }
    echo $cache_html;
endif;
//cache end
?>










                    @if(!empty($post->type) && $post->type=='blog')
                        @php($catarr=$post->postcategory->pluck('category_id')->toArray())
                        @if(!empty($catarr[0]))
                            @php($listcont=Lib::code('[cards template="list" limit="6" currentpostid="'.$post->id.'" cat="'.$catarr[0].'"]'))
                            @if(!empty(trim(strip_tags($listcont))))
                            <section class="page-content relateditems">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="edu-course-wrapper pt--35">
                                        <div class="mt--40 edu-slick-button slick-activation-wrapper eduvibe-course-one-carousel eduvibe-course-details-related-course-carousel">
                                            {!! $listcont !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </section>
                            @endif
                        @endif
                    @endif














<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <h2>I'm a Modal</h2>
      <p>Hear me roar.</p>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                                <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                            </svg>
    </div>
  </div>
</div>
<div class="content">
  <h1>Modal Animations</h1>
  <div class="buttons">
    <div id="one" class="button">Unfolding</div>
    <div id="two" class="button">Revealing</div>
    <div id="three" class="button">Uncovering</div>
    <div id="four" class="button">Blow Up</div><br>
    <div id="five" class="button">Meep Meep</div>
    <div id="six" class="button">Sketch</div>
    <div id="seven" class="button">Bond</div>
  </div>
</div>

<script type="text/javascript">
jQuery('.button').click(function($){
  var buttonId = jQuery(this).attr('id');
  jQuery('#modal-container').removeAttr('class').addClass(buttonId);
  jQuery('body').addClass('modal-active');
})

jQuery('#modal-container').click(function($){
  jQuery(this).addClass('out');
  jQuery('body').removeClass('modal-active');
});
</script>

    <style type="text/css">
    * {
  box-sizing:border-box;
}

html,body {
  min-height:100%;
  height:100%;
  background-image:url(http://theartmad.com/wp-content/uploads/Dark-Grey-Texture-Wallpaper-5.jpg);
  background-size:cover;
  background-position:top center;
  font-family:helvetica neue, helvetica, arial, sans-serif;
  font-weight:200;
  &.modal-active {
    overflow: hidden;
  }
}

#modal-container {
  position:fixed;
  display:table;
  height:100%;
  width:100%;
  top:0;
  left:0;
  transform:scale(0);
  z-index:1;
  &.one {
    transform:scaleY(.01) scaleX(0);
    animation:unfoldIn 1s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
    .modal-background {
      .modal {
        transform:scale(0);
        animation: zoomIn .5s .8s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      }
    }
    &.out {
      transform:scale(1);
      animation:unfoldOut 1s .3s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      .modal-background {
        .modal {
          animation: zoomOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        }
      }
    }
  }
  &.two {
    transform:scale(1);
    .modal-background {
      background:rgba(0,0,0,.0);
      animation: fadeIn .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      .modal {
        opacity:0;
        animation: scaleUp .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      }
    }
    + .content {
      animation: scaleBack .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
    }
    &.out {
      animation: quickScaleDown 0s .5s linear forwards;
      .modal-background {
        animation: fadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        .modal {
           animation: scaleDown .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        }
      }
      + .content {
        animation: scaleForward .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      }
    }
  }
  &.three {
    z-index:0;
    transform:scale(1);
    .modal-background {
      background:rgba(0,0,0,.6);
      .modal {
        animation: moveUp .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      }
    }
    + .content {
      z-index:1;
      animation: slideUpLarge .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
    }
    &.out {
      .modal-background {
        .modal {
          animation: moveDown .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        }
      }
      + .content {
        animation: slideDownLarge .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      }
    }
  }
  &.four {
    z-index:0;
    transform:scale(1);
    .modal-background {
      background:rgba(0,0,0,.7);
      .modal {
        animation: blowUpModal .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      }
    }
    + .content {
      z-index:1;
      animation:blowUpContent .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
    }
    &.out {
      .modal-background {
        .modal {
          animation: blowUpModalTwo .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        }
      }
      + .content {
        animation: blowUpContentTwo .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      }
    }
  }
  &.five {
    transform:scale(1);
    .modal-background {
      background:rgba(0,0,0,.0);
      animation: fadeIn .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      .modal {
        transform:translateX(-1500px);
        animation: roadRunnerIn .3s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      }
    }
    &.out {
      animation: quickScaleDown 0s .5s linear forwards;
      .modal-background {
        animation: fadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        .modal {
          animation: roadRunnerOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        }
      }
    }
  }
  &.six {
    transform:scale(1);
    .modal-background {
      background:rgba(0,0,0,.0);
      animation: fadeIn .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      .modal {
        background-color:transparent;
        animation: modalFadeIn .5s .8s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        h2,p {
          opacity:0;
          position:relative;
          animation: modalContentFadeIn .5s 1s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        }
        .modal-svg {
          rect {
            animation: sketchIn .5s .3s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          }
        }
      }
    }
    &.out {
      animation: quickScaleDown 0s .5s linear forwards;
      .modal-background {
        animation: fadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        .modal {
          animation: modalFadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          h2,p {
            animation: modalContentFadeOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          }
          .modal-svg {
            rect {
              animation: sketchOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
            }
          }
        }
      }
    }
  }
  &.seven {
    transform:scale(1);
    .modal-background {
      background:rgba(0,0,0,.0);
      animation: fadeIn .5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
      .modal {
        height:75px;
        width:75px;
        border-radius:75px;
        overflow:hidden;
        animation: bondJamesBond 1.5s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        h2,p {
          opacity:0;
          position:relative;
          animation: modalContentFadeIn .5s 1.4s linear forwards;
        }
      }
    }
    &.out {
      animation: slowFade .5s 1.5s linear forwards;
      .modal-background {
        background-color:rgba(0,0,0,.7);
        animation: fadeToRed 2s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
        .modal {
          border-radius:3px;
          height:162px;
          width:227px;
          animation: killShot 1s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          h2,p {
            animation:modalContentFadeOut .5s .5 cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
          }
        }
      }
    }
  }
  .modal-background {
    display:table-cell;
    background:rgba(0,0,0,.8);
    text-align:center;
    vertical-align:middle;
    .modal {
      background:white;
      padding:50px;
      display:inline-block;
      border-radius:3px;
      font-weight:300;
      position:relative;
      h2 {
        font-size:25px;
        line-height:25px;
        margin-bottom:15px;
      }
      p {
        font-size:18px;
        line-height:22px;
      }
      .modal-svg {
        position:absolute;
        top:0;
        left:0;
        height:100%;
        width:100%;
        border-radius:3px;
        rect {
          stroke: #fff;
          stroke-width: 2px;
          stroke-dasharray: 778;
          stroke-dashoffset: 778;
        }
      }
    }
  }
}

.content {
  min-height:100%;
  height:100%;
  background:white;
  position:relative;
  z-index:0;
  h1 {
    padding:75px 0 30px 0;
    text-align:center;
    font-size:30px;
    line-height:30px;
  }
  .buttons {
    max-width:800px;
    margin:0 auto;
    padding:0;
    text-align:center;
    .button {
      display:inline-block;
      text-align:center;
      padding:10px 15px;
      margin:10px;
      background:red;
      font-size:18px;
      background-color:#efefef;
      border-radius:3px;
      box-shadow:0 1px 2px rgba(0,0,0,.3);
      cursor:pointer;
      &:hover {
        color:white;
        background:#009bd5;
      }
    }
  } 
}





@keyframes spin {  0% { transform: rotate(0deg); }  100% { transform: rotate(360deg); } }
@keyframes m { to {background-position:left;} }
@keyframes loadingAnimation { 0% {background-position: -100% 0;} 100% {background-position: 100% 0;}}
@keyframes unfoldIn {0% {transform: scaleY(.005) scaleX(0);}50% {transform: scaleY(.005) scaleX(1);}100% {transform: scaleY(1) scaleX(1);}}
@keyframes unfoldOut {0% {transform: scaleY(1) scaleX(1);}50% {transform: scaleY(.005) scaleX(1);}100% {transform: scaleY(.005) scaleX(0);}}
@keyframes zoomIn {0% {transform: scale(0);}100% {transform: scale(1);}}
@keyframes zoomOut {0% {transform: scale(1);}100% {transform: scale(0);}}
@keyframes fadeIn {0% {background: rgba(0,0,0,.0);}100% {background: rgba(0,0,0,.7);}}
@keyframes fadeOut {0% {background: rgba(0,0,0,.7);}100% {background: rgba(0,0,0,.0);}}
@keyframes scaleUp {0% {transform: scale(.8) translateY(1000px);opacity: 0;}100% {transform: scale(1) translateY(0px);opacity: 1;}}
@keyframes scaleDown {0% {transform: scale(1) translateY(0px);opacity: 1;}100% {transform: scale(.8) translateY(1000px);opacity: 0;}}
@keyframes scaleBack {0% {transform: scale(1);}100% {transform: scale(.85);}}
@keyframes scaleForward {0% {transform: scale(.85);}100% {transform: scale(1);}}
@keyframes quickScaleDown {0% {transform: scale(1);}99.9% {transform: scale(1);}100% {transform: scale(0);}}
@keyframes slideUpLarge {0% {transform: translateY(0%);}100% {transform: translateY(-100%);}}
@keyframes slideDownLarge {0% {transform: translateY(-100%);}100% {transform: translateY(0%);}}
@keyframes moveUp {0% {transform: translateY(150px);}100% {transform: translateY(0);}}
@keyframes moveDown {0% {transform: translateY(0px);}100% {transform: translateY(150px);}}
@keyframes blowUpContent {0% {transform: scale(1);opacity: 1;}99.9% {transform: scale(2);opacity: 0;}100% {transform: scale(0);}}
@keyframes blowUpContentTwo {0% {transform: scale(2);opacity: 0;}100% {transform: scale(1);opacity: 1;}}
@keyframes blowUpModal {0% {transform: scale(0);}100% {transform: scale(1);}}
@keyframes blowUpModalTwo {0% {transform: scale(1);opacity: 1;}100% {transform: scale(0);opacity: 0;}}
@keyframes roadRunnerIn {0% {transform: translateX(-1500px) skewX(30deg) scaleX(1.3);}70% {transform: translateX(30px) skewX(0deg) scaleX(.9);}100% {transform: translateX(0px) skewX(0deg) scaleX(1);}}
@keyframes roadRunnerOut {0% {transform: translateX(0px) skewX(0deg) scaleX(1);}30% {transform: translateX(-30px) skewX(-5deg) scaleX(.9);}100% {transform: translateX(1500px) skewX(30deg) scaleX(1.3);}}
@keyframes sketchIn {0% {stroke-dashoffset: 778;}100% {stroke-dashoffset: 0;}}
@keyframes sketchOut {0% {stroke-dashoffset: 0;}100% {stroke-dashoffset: 778;}}
@keyframes modalFadeIn {0% {background-color: transparent;}100% {background-color: white;}}
@keyframes modalFadeOut {0% {background-color: white;}100% {background-color: transparent;}}
@keyframes modalContentFadeIn {0% {opacity: 0;top: -20px;}100% {opacity: 1;top: 0;}}
@keyframes modalContentFadeOut {0% {opacity: 1;top: 0px;}100% {opacity: 0;top: -20px;}}
@keyframes bondJamesBond {0% {transform: translateX(1000px);}80% {transform: translateX(0px);border-radius: 75px;height: 75px;width: 75px;}90% {border-radius: 3px;height: 182px;width: 247px;}100% {border-radius: 3px;height: 162px;width: 227px;}}
@keyframes killShot {0% {transform: translateY(0) rotate(0deg);opacity: 1;}100% {transform: translateY(300px) rotate(45deg);opacity: 0;}}
@keyframes fadeToRed {0% {background-color: rgba(black,.6);}100% {background-color: rgba(red,.8);}}
@keyframes slowFade {0% {opacity: 1;}99.9% {opacity: 0;transform: scale(1);}100% {transform: scale(0);}}
    </style>