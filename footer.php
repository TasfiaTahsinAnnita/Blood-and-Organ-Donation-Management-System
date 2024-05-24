<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    #footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 75px;
      background-color: #000000;
      color: white;
      text-align: center;
      padding-top: 10px;
    }

    .footer-content {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .names {
      display: flex;
      justify-content: space-around;
      width: 40%;
    }

    .name-item {
      flex: 1;
      text-align: center;
      color: cyan;
    }
  </style>
</head>
<body>

  <div id="footer">
    <div class="footer-content">
      <b>Developers</b>
      <div class="names">
        <div class="name-item">Tasfia Tahsin Annita</div>
        <div class="name-item">Samura Rahman</div>
        <div class="name-item">Rayana Jafa</div>
      </div>
    </div>
  </div>

</body>
</html>
