
<!DOCTYPE html>
<!--[if IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Remodal example</title>
  <meta name="description" content="Remodal example">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/js/Remodal/dist/remodal.css">
  <link rel="stylesheet" href="assets/js/Remodal/dist/remodal-default-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/test-modal.css">
</head>
<body>
<div class="remodal-bg">
  <a href="#modal"><img src="storage/miniature_uploads/tour.jpg"></a><br>
  <br><br>

  <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Img" aria-describedby="modal1Desc">
    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
    <div class="test">
      <img id="modal1Img" class="modal-img" src="storage/uploads/tour.jpg">
    </div>
    <br>
    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
    <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
  </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.4/zepto.js"></script>
<script>window.Zepto || document.write('<script src="assets/js/Remodal/libs/zepto/zepto.min.js"><\/script>')</script>
<script src="assets/js/Remodal/dist/remodal.js"></script>

<!-- Events -->
</body>
</html>
