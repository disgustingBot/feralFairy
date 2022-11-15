<?php
$site = '6LcRuNAUAAAAADtamJW75fYf8YtNHceSngjKsf-B';
$scrt = '6LcRuNAUAAAAALBu7Ymh0yxmTXTJmP0rsnkjGyj0';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <style>
    :root{
      --primary_color:<?php echo get_option( 'primary_color', '' ); ?>;
      --secondary_color:<?php echo get_option( 'secondary_color', '' ); ?>;
    }
  </style>
</head>
<body <?php body_class("dark"); ?>>
  <header class="header">
    <a href="<?=site_url('')?>" class="isologo">

      <svg class="iso" width="225" height="235" viewBox="0 0 225 235" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="path26" fill="#29337F" d="M9.63525 95.7864C9.63525 95.7864 20.5913 81.6998 104.798 95.1598C104.798 95.1598 192.447 34.7451 214.046 34.1184C214.046 34.1184 128.901 92.0304 112.623 130.846C112.623 130.846 90.3979 99.2304 9.63525 95.7864"/>
        <path class="path14" fill="#29337F" d="M33.7388 233.834H0.244141L111.684 0.624704L224.376 234.147H190.569L111.997 42.8834L33.7388 233.834Z"/>
      </svg>

      <svg class="logo" width="316" height="103" viewBox="0 0 316 103" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="letter letter_s letter_19" d="M297.216 84.8067C298.677 85.6947 301.706 86.7387 304.053 86.7387C306.454 86.7387 307.446 85.9013 307.446 84.5973C307.446 83.292 306.662 82.668 303.688 81.6733C298.417 79.9013 296.382 77.0293 296.434 74.0027C296.434 69.2533 300.505 65.6533 306.82 65.6533C309.796 65.6533 312.457 66.3307 314.022 67.1147L312.612 72.5933C311.464 71.968 309.272 71.1333 307.081 71.1333C305.15 71.1333 304.053 71.916 304.053 73.2213C304.053 74.42 305.046 75.0467 308.177 76.1413C313.03 77.8133 315.066 80.2653 315.117 84.0227C315.117 88.772 311.36 92.268 304.053 92.268C300.713 92.268 297.74 91.5373 295.808 90.496L297.216 84.8067Z" fill="#A5C217"/>
        <path class="letter letter_t letter_18" d="M286.982 58.9199V66.2265H292.671V72.0705H286.982V81.3092C286.982 84.3892 287.712 85.7972 290.112 85.7972C291.106 85.7972 291.887 85.6945 292.462 85.5879L292.514 91.5906C291.47 92.0079 289.591 92.2679 287.346 92.2679C284.79 92.2679 282.65 91.3826 281.398 90.0759C279.935 88.5639 279.206 86.1119 279.206 82.5106V72.0705H275.814V66.2265H279.206V60.6945L286.982 58.9199Z" fill="#A5C217"/>
        <path class="letter letter_n letter_17" d="M247.832 74.3691C247.832 71.1851 247.728 68.4704 247.624 66.2277H254.512L254.878 69.7237H255.033C256.077 68.1064 258.686 65.6531 262.914 65.6531C268.133 65.6531 272.048 69.0971 272.048 76.6117V91.7477H264.114V77.6037C264.114 74.3157 262.968 72.0704 260.097 72.0704C257.905 72.0704 256.6 73.5851 256.077 75.0464C255.869 75.5171 255.764 76.2984 255.764 77.0291V91.7477H247.832V74.3691Z" fill="#A5C217"/>
        <path class="letter letter_a letter_16" d="M233.839 79.6913C229.663 79.638 226.427 80.6327 226.427 83.71C226.427 85.7447 227.783 86.738 229.559 86.738C231.54 86.738 233.159 85.4313 233.681 83.8153C233.785 83.3953 233.839 82.9273 233.839 82.458V79.6913ZM234.777 91.7473L234.307 89.1913H234.149C232.48 91.226 229.871 92.322 226.844 92.322C221.677 92.322 218.599 88.5633 218.599 84.4927C218.599 77.866 224.549 74.682 233.576 74.7327V74.3687C233.576 73.0113 232.845 71.0793 228.931 71.0793C226.321 71.0793 223.556 71.9673 221.887 73.0113L220.425 67.8967C222.2 66.9047 225.697 65.6527 230.341 65.6527C238.848 65.6527 241.561 70.6633 241.561 76.6647V85.5367C241.561 87.99 241.667 90.338 241.927 91.7473H234.777Z" fill="#A5C217"/>
        <path class="letter letter_r letter_15" d="M201.005 74.6296C201.005 70.8723 200.901 68.419 200.797 66.227H207.633L207.895 70.9229H208.103C209.408 67.2189 212.54 65.6536 214.993 65.6536C215.724 65.6536 216.088 65.6536 216.663 65.7576V73.2203C216.088 73.1149 215.411 73.0109 214.523 73.0109C211.6 73.0109 209.617 74.5763 209.095 77.0296C208.991 77.5523 208.937 78.1776 208.937 78.8043V91.7469H201.005V74.6296Z" fill="#A5C217"/>
        <path class="letter letter_g letter_14" d="M186.697 76.612C186.697 76.0907 186.645 75.568 186.54 75.1507C185.967 73.064 184.453 71.6533 182.261 71.6533C179.392 71.6533 177.043 74.2627 177.043 78.908C177.043 82.7187 178.921 85.6947 182.261 85.6947C184.297 85.6947 185.916 84.336 186.436 82.4573C186.645 81.884 186.697 81.0493 186.697 80.3693V76.612ZM194.839 66.2267C194.735 67.8453 194.631 69.984 194.631 73.7947V88.0427C194.631 92.948 193.64 96.9667 190.768 99.5227C187.951 101.924 184.141 102.655 180.383 102.655C177.043 102.655 173.493 101.977 171.197 100.672L172.763 94.6693C174.381 95.6093 177.2 96.6013 180.173 96.6013C183.931 96.6013 186.803 94.5667 186.803 89.868V88.1973H186.697C185.185 90.3387 182.732 91.5373 179.809 91.5373C173.493 91.5373 169.005 86.424 169.005 79.064C169.005 70.872 174.328 65.6533 180.591 65.6533C184.088 65.6533 186.28 67.1653 187.585 69.2533H187.688L187.951 66.2267H194.839Z" fill="#A5C217"/>
        <path class="letter letter_i letter_13" d="M156.164 66.2267H164.096V91.7467H156.164V66.2267ZM164.359 59.1293C164.359 61.3213 162.688 63.0947 160.078 63.0947C157.572 63.0947 155.904 61.3213 155.956 59.1293C155.904 56.832 157.572 55.1107 160.131 55.1107C162.688 55.1107 164.306 56.832 164.359 59.1293" fill="#A5C217"/>
        <path class="letter letter_M letter_12" d="M141.695 78.2832C141.541 74.0552 141.383 68.9405 141.383 63.8259H141.226C140.13 68.3139 138.669 73.3245 137.313 77.4472L133.033 91.1725H126.822L123.065 77.5525C121.917 73.4285 120.717 68.4192 119.882 63.8259H119.775C119.567 68.5765 119.411 74.0032 119.15 78.3872L118.525 91.7472H111.166L113.409 56.5712H124.003L127.449 68.3139C128.545 72.3845 129.639 76.7685 130.423 80.8925H130.579C131.571 76.8219 132.771 72.1765 133.919 68.2619L137.677 56.5712H148.063L149.994 91.7472H142.218L141.695 78.2832Z" fill="#A5C217"/>
        <path class="letter letter_s letter_11" d="M78.4328 84.8067C79.8941 85.6947 82.9221 86.7387 85.2688 86.7387C87.6714 86.7387 88.6621 85.9013 88.6621 84.5973C88.6621 83.292 87.8781 82.668 84.9048 81.6733C79.6328 79.9013 77.5981 77.0293 77.6514 74.0027C77.6514 69.2533 81.7221 65.6533 88.0354 65.6533C91.0114 65.6533 93.6741 66.3307 95.2381 67.1147L93.8288 72.5933C92.6808 71.968 90.4888 71.1333 88.2981 71.1333C86.3661 71.1333 85.2688 71.916 85.2688 73.2213C85.2688 74.42 86.2634 75.0467 89.3928 76.1413C94.2474 77.8133 96.2834 80.2653 96.3341 84.0227C96.3341 88.772 92.5768 92.268 85.2688 92.268C81.9301 92.268 78.9554 91.5373 77.0234 90.496L78.4328 84.8067Z" fill="#A5C217"/>
        <path class="letter letter_e letter_10" d="M66.3711 76.0912C66.3711 74.1592 65.5351 70.9232 61.8831 70.9232C58.5431 70.9232 57.1858 73.9525 56.9764 76.0912H66.3711ZM57.0284 81.5179C57.2898 84.8072 60.5258 86.3712 64.2311 86.3712C66.9458 86.3712 69.1378 86.0072 71.2764 85.3272L72.3205 90.7032C69.7111 91.7472 66.5284 92.2685 63.0818 92.2685C54.4191 92.2685 49.4604 87.2592 49.4604 79.2739C49.4604 72.8019 53.4791 65.6525 62.3511 65.6525C70.5991 65.6525 73.7298 72.0712 73.7298 78.3872C73.7298 79.7445 73.5725 80.9432 73.4685 81.5179H57.0284Z" fill="#A5C217"/>
        <path class="letter letter_d letter_09" d="M36.6139 77.0294C36.6139 76.612 36.5632 76.0374 36.5099 75.62C36.0405 73.4814 34.3179 71.7067 31.8645 71.7067C28.2645 71.7067 26.3859 74.9427 26.3859 78.9614C26.3859 83.292 28.5259 86.0067 31.8125 86.0067C34.1112 86.0067 35.9365 84.44 36.4059 82.1974C36.5632 81.6227 36.6139 81.0494 36.6139 80.3694V77.0294ZM44.5485 54.6934V84.1267C44.5485 86.9987 44.6525 90.0253 44.7552 91.748H37.7112L37.3445 87.9907H37.2405C35.6232 90.86 32.5432 92.3214 29.2552 92.3214C23.2019 92.3214 18.3485 87.156 18.3485 79.2214C18.2952 70.612 23.6712 65.6534 29.7779 65.6534C32.9099 65.6534 35.3632 66.748 36.5099 68.524H36.6139V54.6934H44.5485Z" fill="#A5C217"/>
        <path class="letter letter_e letter_08" d="M219.01 21.4713C219.01 19.5407 218.174 16.3047 214.522 16.3047C211.182 16.3047 209.824 19.3327 209.616 21.4713H219.01ZM209.668 26.898C209.928 30.1873 213.165 31.7527 216.869 31.7527C219.585 31.7527 221.777 31.3873 223.916 30.7087L224.96 36.0833C222.35 37.1287 219.168 37.6487 215.721 37.6487C207.058 37.6487 202.1 32.6393 202.1 24.6553C202.1 18.182 206.118 11.034 214.99 11.034C223.237 11.034 226.369 17.4513 226.369 23.7673C226.369 25.1247 226.212 26.3247 226.108 26.898H209.668Z" fill="#A5C217"/>
        <path class="letter letter_g letter_07" d="M189.253 21.9928C189.253 21.4715 189.202 20.9488 189.096 20.5315C188.522 18.4448 187.01 17.0341 184.817 17.0341C181.948 17.0341 179.598 19.6435 179.598 24.2888C179.598 28.0995 181.477 31.0755 184.817 31.0755C186.853 31.0755 188.472 29.7168 188.993 27.8381C189.202 27.2648 189.253 26.4301 189.253 25.7501V21.9928ZM197.394 11.6075C197.29 13.2261 197.188 15.3648 197.188 19.1755V33.4235C197.188 38.3288 196.196 42.3475 193.324 44.9035C190.506 47.3048 186.697 48.0355 182.94 48.0355C179.598 48.0355 176.049 47.3581 173.753 46.0528L175.318 40.0501C176.937 40.9901 179.756 41.9821 182.729 41.9821C186.486 41.9821 189.358 39.9475 189.358 35.2488V33.5781H189.253C187.741 35.7195 185.288 36.9181 182.365 36.9181C176.049 36.9181 171.561 31.8048 171.561 24.4448C171.561 16.2528 176.884 11.0341 183.146 11.0341C186.644 11.0341 188.836 12.5461 190.141 14.6341H190.245L190.506 11.6075H197.394Z" fill="#A5C217"/>
        <path class="letter letter_r letter_06" d="M153.603 20.0104C153.603 16.2531 153.499 13.7997 153.395 11.6077H160.231L160.492 16.3037H160.7C162.005 12.5997 165.137 11.0344 167.591 11.0344C168.321 11.0344 168.685 11.0344 169.26 11.1384V18.6011C168.685 18.4957 168.008 18.3917 167.12 18.3917C164.197 18.3917 162.215 19.9571 161.692 22.4104C161.588 22.9331 161.535 23.5584 161.535 24.1851V37.1277H153.603V20.0104Z" fill="#A5C217"/>
        <path class="letter letter_e letter_05" d="M141.489 21.4713C141.489 19.5407 140.653 16.3047 137.001 16.3047C133.661 16.3047 132.302 19.3327 132.094 21.4713H141.489ZM132.146 26.898C132.406 30.1873 135.643 31.7527 139.347 31.7527C142.063 31.7527 144.255 31.3873 146.394 30.7087L147.438 36.0833C144.829 37.1287 141.646 37.6487 138.199 37.6487C129.537 37.6487 124.578 32.6393 124.578 24.6553C124.578 18.182 128.597 11.034 137.469 11.034C145.715 11.034 148.847 17.4513 148.847 23.7673C148.847 25.1247 148.69 26.3247 148.586 26.898H132.146Z" fill="#A5C217"/>
        <path class="letter letter_b letter_04" fill="#A5C217" d="M102.599 26.2735C102.599 26.7948 102.652 27.2641 102.755 27.6815C103.279 29.8215 105.104 31.4401 107.4 31.4401C110.794 31.4401 112.882 28.8295 112.882 24.2375C112.882 20.2708 111.107 17.1401 107.4 17.1401C105.262 17.1401 103.279 18.7588 102.755 21.0548C102.652 21.5228 102.599 21.9935 102.599 22.5161V26.2735ZM94.459 37.1281C94.563 35.4575 94.667 32.3801 94.667 29.5081V0.0734699H102.599V14.6348H102.704C104.216 12.4428 106.879 11.0335 110.43 11.0335C116.534 11.0335 121.023 16.0961 120.971 23.9241C120.971 33.1095 115.126 37.7028 109.279 37.7028C106.306 37.7028 103.435 36.6068 101.607 33.5788H101.504L101.19 37.1281H94.459Z"/>
        <path class="letter letter_u letter_03" fill="#A5C217" d="M88.2901 28.9336C88.2901 32.2736 88.3954 34.9896 88.4994 37.1283H81.6101L81.2448 33.5269H81.0888C80.0968 35.0923 77.6954 37.7029 73.1034 37.7029C67.9381 37.7029 64.1274 34.4656 64.1274 26.5869V11.6083H72.1128V25.3323C72.1128 29.0389 73.3141 31.2829 76.0781 31.2829C78.2701 31.2829 79.5234 29.7696 80.0448 28.5163C80.2541 28.0483 80.3048 27.4216 80.3048 26.7949V11.6083H88.2901V28.9336Z"/>
        <path class="letter letter_A letter_02" fill="#A5C217" d="M48.1483 22.1497L45.9576 14.6871C45.331 12.5991 44.7043 9.98974 44.183 7.90174H44.0776C43.5563 9.98974 43.035 12.6524 42.4616 14.6871L40.3723 22.1497H48.1483ZM39.2256 28.0991L36.719 37.1284H28.4736L39.2256 1.9524H49.663L60.5696 37.1284H52.011L49.2963 28.0991H39.2256Z"/>
        <path class="letter letter__ letter_01" fill="#A5C217" d="M30.923 1.37827C29.307 6.49294 27.0084 11.6076 24.6617 15.5223L19.8604 15.9396C21.4257 11.5023 22.783 6.43961 23.4604 1.84894L30.923 1.37827Z"/>
        <path class="letter letter_L letter_00" fill="#A5C217" d="M0.335205 1.95187H8.31921V30.4479H22.3072V37.1279H0.335205V1.95187Z"/>
      </svg>


    </a>



    
    <?php
    wp_nav_menu( array(
      'menu'				=> "navBar", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
      'menu_class'		=> "navbar", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
      // 'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
      'container'			=> "false", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
      // 'container_class'	=> "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
      // 'container_id'		=> "", // (string) The ID that is applied to the container.
      // 'fallback_cb'		=> "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
      // 'before'			=> "", // (string) Text before the link markup.
      // 'after'				=> "", // (string) Text after the link markup.
      // 'link_before'		=> "", // (string) Text before the link text.
      // 'link_after'		=> "", // (string) Text after the link text.
      // 'echo'				=> "", // (bool) Whether to echo the menu or return it. Default true.
      'depth'				=> 2, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
      // 'walker'			=> "", // (object) Instance of a custom walker class.
      // 'theme_location'	=> "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
      // 'items_wrap'		=> "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
      // 'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
    ) );
    ?>




    <div class="mode_toogle_btn" onclick="altClassFromSelector('dark', 'body')">
      <svg class="mode_logo" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M32 256c0-123.8 100.3-224 223.8-224c11.36 0 29.7 1.668 40.9 3.746c9.616 1.777 11.75 14.63 3.279 19.44C245 86.5 211.2 144.6 211.2 207.8c0 109.7 99.71 193 208.3 172.3c9.561-1.805 16.28 9.324 10.11 16.95C387.9 448.6 324.8 480 255.8 480C132.1 480 32 379.6 32 256z" class=""></path>
      </svg>
    </div>

  </header>
