<!DOCTYPE html>
<html>
   <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset=utf-8>
    <link rel=stylesheet href="../../main.css" type="text/css">
    <link rel=stylesheet href="prove14-11-2019-site.css" type="text/css">
    <title>Ole Magnus | Vidunderturer</title>
  </head>
  <body>

        <div class="header">
            <h2 class="main-logo">Prøve 1</h2>
            <?php include "../../include/navmenu-sider.php"; ?>
        </div>

      <div>
        <h1 class="headline">
          Vidunderturer
        </h1>
      </div>

      <div class="info-box">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          In vestibulum eros metus, sit amet pellentesque.
        </p>
        <p>
          Du kan også trykke på bildet for å se en større versjon,
          eller CTRL/CMD og trykke på bildet samtidig for å laste
          det ned.
        </p>
      </div>

      <div class="pictureBox">
        <div class="textAndPicture">
          <a href="friluftsliv_1.jpg">
            <img class="pictureFrame" src="../bilder/friluftsliv_1.jpg" alt="">
          </a>
          <p class="descriptionPicture">Lorem ipsum dolor sit.</p>
        </div>
        <div class="textAndPicture">
          <a href="friluftsliv_2.jpg">
            <img class="pictureFrame" src="../bilder/friluftsliv_2.jpg" alt="">
          </a>
          <p class="descriptionPicture">Lorem ipsum dolor sit.</p>
        </div>
        <div class="textAndPicture">
          <a href="friluftsliv_3.jpg">
            <img class="pictureFrame" src="../bilder/friluftsliv_3.jpg" alt="">
          </a>
          <p class="descriptionPicture">Lorem ipsum dolor sit.</p>
        </div>
        <div class="textAndPicture">
          <a href="friluftsliv_4.jpg">
            <img class="pictureFrame" src="../bilder/friluftsliv_4.jpg" alt="">
          </a>
          <p class="descriptionPicture">Lorem ipsum dolor sit.</p>
        </div>
        <div class="textAndPicture">
          <a href="friluftsliv_5.jpg">
            <img class="pictureFrame" src="../bilder/friluftsliv_5.jpg" alt="">
          </a>
          <p class="descriptionPicture">Lorem ipsum dolor sit.</p>
        </div>
        <div class="textAndPicture">          
          <a href="friluftsliv_6.jpg">
            <img class="pictureFrame" src="../bilder/friluftsliv_6.jpg" alt="">
          </a>
          <p class="descriptionPicture">Lorem ipsum dolor sit.</p>
        </div>
        <div class="textAndPicture">          
          <a href="friluftsliv_7.jpg">
            <img class="pictureFrame" src="../bilder/friluftsliv_7.jpg" alt="">
          </a>
          <p class="descriptionPicture">Lorem ipsum dolor sit.</p>
        </div>
        <div class="textAndPicture">          
          <a href="friluftsliv_8.jpg">
            <img class="pictureFrame" src="../bilder/friluftsliv_8.jpg" alt="">
          </a>
          <p class="descriptionPicture">Lorem ipsum dolor sit.</p>
        </div>
      </div>
      
      <div class="infoTable">
        <table class="iTable" align="center">
          <tr>
            <th class="top-table">Navn på tur:</th>
            <th class="top-table">Lengde:</th>
            <th class="top-table">Sted:</th>
          </tr>
          <tr>
            <td class="content-table">Lorem Ipsum</td>
            <td class="content-table">6 timer</td>
            <td class="content-table">Ipsum</td>
          </tr>
          <tr>
            <td class="content-table">Lorem Ipsum</td>
            <td class="content-table">6 timer</td>
            <td class="content-table">Ipsum</td>
          </tr>
          <tr>
            <td class="content-table">Lorem Ipsum</td>
            <td class="content-table">6 timer</td>
            <td class="content-table">Ipsum</td>
          </tr>
          <tr>
            <td class="content-table">Lorem Ipsum</td>
            <td class="content-table">6 timer</td>
            <td class="content-table">Ipsum</td>
          </tr>
        </table>
      </div>

      <div class="sporsmalForm">
        <form method="GET">
          <p>Navn</p> 
          <input type="text" placeholder="Ola Nordmann"/>
          <p>Din e-mail:</p>
          <input type="text" name="dinemail" placeholder="Eks; ola.nordmann@mail.com">

          <p>Ditt spørsmål:</p>
          <input type="text" name="sporsmal">

          <input class="submitKnapp" type="submit" name="sendinn" value="Send inn" placeholder="">
        </form>
      </div>

  </body>
</html>
