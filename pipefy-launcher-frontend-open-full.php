<div style="background-color:<?php esc_html_e( $colorVar, 'colorVar' ) ?> !important;" class="ipfl-open-button ipfl-tooltip-launcher" id="ipfl-openButton" onclick="ipflOpenForm()">
    <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
    <path d="M19,4.7C17.2,3.1,14.4,3,12,3C9.6,3,6.8,3.1,5,4.7C3,6.5,3,9,3,11c0,2,0,4.5,2,6.3c1.2,1,2.7,1.4,4,1.6
      c0.3,0,0.6,0.2,0.7,0.4l0.6,1c0.4,0.6,1,0.9,1.7,0.9s1.3-0.3,1.7-0.9l0.6-1c0.2-0.2,0.4-0.4,0.7-0.4c1.3-0.2,2.8-0.6,4-1.6
      c2-1.7,2-4.2,2-6.3C21,9,21,6.5,19,4.7z M17.7,15.7c-0.8,0.7-2,1.1-3.7,1.2c-0.3,0-0.6,0.2-0.8,0.5l-1,1.5c-0.1,0.1-0.3,0.1-0.3,0
      l-1-1.5c-0.2-0.3-0.5-0.4-0.8-0.5c-1.8-0.1-3-0.5-3.7-1.2C5,14.6,5,12.8,5,11c0-1.8,0-3.6,1.3-4.7C7.6,5.1,9.8,5,12,5
      s4.4,0.1,5.7,1.3C19,7.4,19,9.2,19,11S19,14.6,17.7,15.7z"/>
    <circle cx="12" cy="11" r="1"/>
    <circle cx="9" cy="11" r="1"/>
    <circle cx="15" cy="11" r="1"/>
    </svg>

    <?php if($nameVar != null): ?>

    <span class="ipfl-tooltiptext ipfl-tooltip-left"><?php esc_html_e( $nameVar, 'nameVar' ); ?></span>

    <? elseif ($nameVar == null): ?>

    <?php endif; ?>
    

</div>

<div style="background-color:<?php esc_html_e( $colorVar, 'colorVar' ) ?> !important;" class="ipfl-close-button-fullpage" id="ipfl-closeButton" onclick="ipflCloseForm()">
  <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
  <path d="M14.1,12.7c-0.4-0.4-0.4-1,0-1.4l3.6-3.6c0.4-0.4,0.4-1,0-1.4s-1-0.4-1.4,0l-3.6,3.6c-0.4,0.4-1,0.4-1.4,0L7.7,6.3
    c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l3.6,3.6c0.4,0.4,0.4,1,0,1.4l-3.6,3.6c-0.4,0.4-0.4,1,0,1.4C6.5,17.9,6.7,18,7,18
    s0.5-0.1,0.7-0.3l3.6-3.6c0.4-0.4,1-0.4,1.4,0l3.6,3.6c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L14.1,12.7z"/>
  </svg>
</div>

<div class="ipfl-chat-full-page" id="ipfl-myForm-full">
  <div class="ipfl-form-container-full-page">
    <iframe id="ipfl-fullpage-iframe" style="width:100%;" src="https://app.pipefy.com/public/form/<?php esc_html_e( $formVar, 'formVar' ) ?>?embedded=true" frameborder="0"></iframe>
  </div>
</div>

<div id="ipfl-bg-full-page-id" class="ipfl-bg-full-page"></div>

<script type="text/javascript">
var pageMode = <?php esc_html_e($fullpageVar, 'pageMode' ); ?>;
</script>
