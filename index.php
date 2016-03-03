<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Youtube Dönüştürücü</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style class="custom-css">
#jumbo {
  background-color: #333;
  color: #eee;
  margin-top: -20px;
}
</style>
</head>

  <body>
    <div id="jumbo" class="jumbotron">
      <div class="container">

        <center>
        <?php //Logo ?>
          <img src="img/logo.png" alt="Logo" width="300" height="100">
        </center>

        <h2 class="text-center">
          Youtube Downloader Hoş Geldiniz.
        </h2>
      </div>
    </div>
    <div class="container">

      <h2 id="try-header">

        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-9">
              <form action="" method="post">
              <div class="input-group">
                <input type="text" class="form-control" name="YoutubeLink" placeholder="https://www.youtube.com/watch?v=b-Cr0EWwaTk" value="https://www.youtube.com/watch?v=b-Cr0EWwaTk">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Dönüştür.</button>
                  </span>
                </div>
              </div>
            </form>
            </div>


<?php //Video Bilgileri ?>

<?php if(isset($_POST['YoutubeLink'])) //Butona basılıp,basılmadığını kontrol ediyoruz.
{
?>
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-9">
      <center>
        <?php ResimCek(trim($_POST['YoutubeLink'])); ?>
        <?php  VideoIsmi(trim($_POST['YoutubeLink']));?>
      </center>
    </div>
  </div>
<?php }  ?>




<?php //Indir ?>
<?php if(isset($_POST['YoutubeLink'])) //Butona basılıp,basılmadığını kontrol ediyoruz.
{
?>
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-9">
      <center>
        <?php IframeCek(trim($_POST['YoutubeLink'])); ?>
          <?php AlternatifIframeCek(trim($_POST['YoutubeLink'])) ?>
          </center>
    </div>
  </div>
  <?php }  ?>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
      </script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js">
      </script>
      <table class="table">
        <tbody>
          <tr>
          </tr>
        </tbody>
      </table>
      <h5>
          <center>


            <i><b><a href="http://kodizyon.com" target="_blank">Kodizyon.com </a></i> <b> <?php echo date('Y'); ?> Açık kaynak olarak geliştirilmektedir.</b>
            <br><br>
            <font size=5><a href="https://github.com/ZquaRe/Youtube-Mp3-Downloader" target="_blank"><i class="fa fa-github"></i> Github</a></font>

          </center>
      </h5>
    </div>


</body>
</html>

<?php //Fonksiyonlar


function ResimCek($YoutubeURL)
{
  if(strstr($YoutubeURL, "youtube.com"))
  {
  if(strstr($YoutubeURL, "&list") && strstr($YoutubeURL, "&index"))
  {
    $IndexDurum = explode('&index',$YoutubeURL);
    $ListDurum = explode('&list',$IndexDurum[0]);
    $YeniURL = explode('watch?v=',$ListDurum[0]);
    echo '
    <img src="http://img.youtube.com/vi/'.$YeniURL[1].'/hqdefault.jpg" class="img-thumbnail" alt="'.$YoutubeURL.'" width="150" height="200">
    ';
  }else if(strstr($YoutubeURL, "&list"))
  {
    $IndexDurum = explode('&list',$YoutubeURL);
    $YeniURL = explode('watch?v=',$IndexDurum[0]);
    echo '
    <img src="http://img.youtube.com/vi/'.$YeniURL[1].'/hqdefault.jpg" class="img-thumbnail" alt="'.$YoutubeURL.'" width="150" height="200">
    ';
    echo $YeniURL[1];
  }
else if(strstr($YoutubeURL, "&index"))
{
  $IndexDurum = explode('&index',$YoutubeURL);
  $YeniURL = explode('watch?v=',$IndexDurum[0]);
  echo '
  <img src="http://img.youtube.com/vi/'.$YeniURL[1].'/hqdefault.jpg" class="img-thumbnail" alt="'.$YoutubeURL.'" width="150" height="200">
  ';
}
else {
  $YeniURL = explode('watch?v=',$YoutubeURL);
echo '
<img src="http://img.youtube.com/vi/'.$YeniURL[1].'/hqdefault.jpg" class="img-thumbnail" alt="'.$YoutubeURL.'" width="150" height="200">
';
}
}
}
//https://www.youtube.com/watch?v=s9vBFafw5mk&index=10&list=RDNjyBDozBv_g


function IframeCek($YoutubeURL)
{
  if(strstr($YoutubeURL, "youtube.com"))
  {
  if(strstr($YoutubeURL, "&list") && strstr($YoutubeURL, "&index"))
  {
    $IndexDurum = explode('&index',$YoutubeURL);
    $ListDurum = explode('&list',$IndexDurum[0]);
    $YeniURL = explode('watch?v=',$ListDurum[0]);
    echo '
    <iframe src="http://embed.yt-mp3.com/watch?v='.$YeniURL[1].'" style="width: 500px; height: 100px; border: 0px; background: rgb(255, 255, 255);"></iframe>
    ';
  }else if(strstr($YoutubeURL, "&list"))
  {
    $IndexDurum = explode('&list',$YoutubeURL);
    $YeniURL = explode('watch?v=',$IndexDurum[0]);
    echo '
    <iframe src="http://embed.yt-mp3.com/watch?v='.$YeniURL[1].'" style="width: 500px; height: 100px; border: 0px; background: rgb(255, 255, 255);"></iframe>
    ';
  }
else if(strstr($YoutubeURL, "&index"))
{
  $IndexDurum = explode('&index',$YoutubeURL);
  $YeniURL = explode('watch?v=',$IndexDurum[0]);
  echo '
  <iframe src="http://embed.yt-mp3.com/watch?v='.$YeniURL[1].'" style="width: 500px; height: 100px; border: 0px; background: rgb(255, 255, 255);"></iframe>
  ';
}
else {
  $YeniURL = explode('watch?v=',$YoutubeURL);
echo '
<iframe src="http://embed.yt-mp3.com/watch?v='.$YeniURL[1].'" style="width: 500px; height: 100px; border: 0px; background: rgb(255, 255, 255);"></iframe>
';
}
}
else
{
  echo '<h4><div class="alert alert-danger" role="alert">Bu bir YouTube linki değil!</div></h4>';
}
}

function AlternatifIframeCek($YoutubeURL)
{
  if(strstr($YoutubeURL, "youtube.com"))
  {
  if(strstr($YoutubeURL, "&list") && strstr($YoutubeURL, "&index"))
  {
    $IndexDurum = explode('&index',$YoutubeURL);
    $ListDurum = explode('&list',$IndexDurum[0]);
    $YeniURL = explode('watch?v=',$ListDurum[0]);
  ?>
  <h5><label>Indirmez ise <font color="red"> Alternatif İndirme. </font> butonuna basınız. </label></h5>
  <button class="btn btn-default" onclick="window.open('http://www.youtubeinmp3.com/fetch/?video=<?php echo $YeniURL[0].'watch?v='.$YeniURL[1]; ?>')" type="button">Alternatif Indirme.</button>

  <?php
  }else if(strstr($YoutubeURL, "&list"))
  {
    $IndexDurum = explode('&list',$YoutubeURL);
    $YeniURL = explode('watch?v=',$IndexDurum[0]);
    ?>
    <h5><label>Indirmez ise <font color="red"> Alternatif İndirme. </font> butonuna basınız. </label></h5>
    <button class="btn btn-default" onclick="window.open('http://www.youtubeinmp3.com/fetch/?video=<?php echo $YeniURL[0].'watch?v='.$YeniURL[1]; ?>')" type="button">Alternatif Indirme.</button>
    <?php
  }
else if(strstr($YoutubeURL, "&index"))
{
  $IndexDurum = explode('&index',$YoutubeURL);
  $YeniURL = explode('watch?v=',$IndexDurum[0]);
  ?>
  <h5><label>Indirmez ise <font color="red"> Alternatif İndirme. </font> butonuna basınız. </label></h5>
  <button class="btn btn-default" onclick="window.open('http://www.youtubeinmp3.com/fetch/?video=<?php echo $YeniURL[0].'watch?v='.$YeniURL[1]; ?>')" type="button">Alternatif Indirme.</button>
  <?php
}
else {
  $YeniURL = explode('watch?v=',$YoutubeURL);
  ?>
  <h5><label>Indirmez ise <font color="red"> Alternatif İndirme. </font> butonuna basınız. </label></h5>
  <button class="btn btn-default" onclick="window.open('http://www.youtubeinmp3.com/fetch/?video=<?php echo $YeniURL[0].'watch?v='.$YeniURL[1]; ?>')" type="button">Alternatif Indirme.</button>
  <?php
}
}
}


function VideoIsmi($YoutubeURL)
{
  if(strstr($YoutubeURL, "youtube.com"))
  {
  $veri = file_get_contents("$YoutubeURL");
  preg_match_all('@<title>(.*?)</title>@si',$veri,$baslik);
  $icerik = substr($baslik[1][0],0,-10);
  echo '<h4>'.trim($icerik).'</h4>';
}
}


//Lazım olur diye.
function VideoIsmi_Title($YoutubeURL)
{
  if(strstr($YoutubeURL, "youtube.com"))
  {
  $veri = file_get_contents("$YoutubeURL");
  preg_match_all('@<title>(.*?)</title>@si',$veri,$baslik);
  $icerik = substr($baslik[1][0],0,-10);
  echo trim($icerik);
}
}


?>
