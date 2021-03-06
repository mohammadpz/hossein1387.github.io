<?php
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('coen6711_log.log', $line . PHP_EOL, FILE_APPEND);
    ?>
<!DOCTYPE.php>
<!-- saved from url=(0055)http://www-etud.iro.umontreal.ca/~askarihr/projects.php -->
<head><meta http-equiv="Content-Type" content="text.php; charset=UTF-8">
    <meta charset="utf-8">  
    <title>COEN6711</title>  
    <!-- <link rel="shortcut icon" href="images/favicon.png" type="image/png"> -->
    <link rel="stylesheet" href="./Teaching/bootstrap.min.css">
    <script src="./Teaching/jquery.min.js"></script><style type="text/css"></style>
    <script src="./Teaching/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./Teaching/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

     <link href="./Teaching/css" rel="stylesheet" type="text/css">  
</head>
<body>
<div class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="./COEN6711.php">
             <strong>MohammadHossein AskariHemmat</strong>   
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://users.encs.concordia.ca/~mo_askar/index.php">About</a></li>
                <li><a href="http://users.encs.concordia.ca/~mo_askar/Projects.php">My Projects</a></li>
                <li><a href="http://users.encs.concordia.ca/~mo_askar/Files/MOHAMMADHOSSEIN_ASKARIHEMMAT.pdf">C.V.</a></li>
                <li><a href="http://users.encs.concordia.ca/~mo_askar/Teaching.php">Teaching</a></li>
            </ul>
        </div>
        </div>
    </div>

<div class="container">
    <div id="content">

    <div id="sidebar">
        <figure>
            <img src="Files/MFG_FRDM-KL25Z.jpg" alt="" height="310" width="320" />
            <figcaption>Fig1. - FRDM KL25Z Evaluation board from Freescale</figcaption>
        </figure>

        <figure>
            <img src="Files/FRDM_PINOUT.jpg" alt="" height="310" width="320" alt="alternate text"/>
            <figcaption>Fig2. - FRDM KL25Z pinout.</figcaption>
        </figure>

    </div>

    <div id="content">
        <strong><font size="6">COEN6711 (Microprocessors and Their Applications)</strong></font>
        <br>
        <br>
        <font size="5">Sample codes: </font>
        <ul>
            <li> <a href="https://www.dropbox.com/s/u92d2bsknuu5e7g/klxx-sc-baremetal.zip?dl=0"> Bare metal codes </a> </li>
        </ul>
        <font size="5">Tutorials: </font>
        <ul>
            <li> Configuring GPIO pins in KEIL based on FRDM-KL25Z platform: <a href="https://www.youtube.com/watch?v=eljscsrJQtU"> <img width="40px" src="./Projects_files/youtube.png"></a> </li>
            <li> Building a project in Keil using FRDM-KL25Z board: <a href="https://www.youtube.com/watch?v=YXVEGyJDDa8"> <img width="40px" src="./Projects_files/youtube.png"></a> </li>
        </ul>

        <font size="5">Use full links: </font>
        <ul>
            <li> <a href="https://www.keil.com/demo/eval/arm.htm"> Keil MDK-ARM  </a> </li>
            <li> <a href="http://www.digikey.ca/product-search/en/programmers-development-systems/evaluation-boards-embedded-mcu-dsp/2621773?k=FRDM"> FRDM platform on Digikey</a>  </li>
            <li> <a href="http://www.digikey.ca/product-detail/en/3021003-03/Q362-ND/1531289"> USB cables for FRDM board</a> </li>
            <li> <a href="http://www.freescale.com/webapp/sps/site/prod_summary.jsp?code=FRDM-KL25Z"> FRDM-KL25Z page in Freescale website</a> </li>
            <li> <a href="https://community.freescale.com/community/kinetis"> Kinetis MCU forum </a> </li>
        </ul>

        <font size="5">Use full documents: </font>
        <ul>
            <li> <a href="Files/Keil.pdf"> User Guide document for FRDM-KL25Z Evaluation board</a> </li>
            <li> <a href="http://www.farnell.com/datasheets/1651277.pdf"> User Guide document for FRDM-KL25Z Evaluation board(From Freescale)</a>  </li>
            <li> <a href="http://infocenter.arm.com/help/topic/com.arm.doc.ddi0484b/DDI0484B_cortex_m0p_r0p0_trm.pdf"> CortexM0+ reference manual</a> </li>
            <li> <a href="Files/Datasheet_KL25P80M48SF0RM.pdf"> KL25Z datasheet</a> </li>
            <li> <a href="Files/FRDM-KL25Z_SCH.pdf"> Board schematic</a> </li>
        </ul>

        <br>
        <br>
        <br>
        
      <div id="nav-wrapper" align="center">                            
          <p class="credits">© 2017 MohammadHossein AskariHemmat<br></p>
      </div>
    </div>
</div>
<footer>
   <div class="container">
      <hr>
      <div id="nav-wrapper" align="center">                            
          <a href="https://github.com/hossein1387"> <img width="70px" src="./Welcome!_files/Github.png"></a>
          <a href="http://ca.linkedin.com/in/askarihemmat"><img width="70px" src="./Welcome!_files/linkedin.png"></a>
      </div>
   </div>
</footer>


</body>
